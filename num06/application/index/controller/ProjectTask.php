<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP version 5                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2004 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 3.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.php.net/license/3_0.txt.                                  |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: Original Author <author@example.com>                        |
// |          Your Name <you@example.com>                                 |
// +----------------------------------------------------------------------+
//
// $Id:$

namespace app\index\controller;
use think\Request;
use think\Validate;
class ProjectTask extends Base {
    public function index() {
        return $this->fetch();
    }
    public function taskList() {

       $limit = trim(input("limit")) ? trim(input("limit")) : 10;
        $project_name=trim(input("project_name"));
        $task_table = trim(input("task_table"));  
        $task_book = trim(input("task_book"));  
        $task_group = trim(input("task_group")); 
        $task_gr_leader = trim(input("task_gr_leader")); 
        $task_gr_pm = trim(input("task_gr_pm"));  
        $task_plan = trim(input("task_plan"));  
         $where = [];
        !empty($project_name) && $where['p.project_name'] = ['like', "%$project_name%"];
        !empty($task_table) && $where['pt.task_table'] = ['eq', "$task_table"];
        !empty($task_book) && $where['pt.task_book'] = ['eq', "$task_book"];
        !empty($task_group) && $where['pt.task_group'] = ['like', "%$task_group%"];
        !empty($task_gr_leader) && $where['pt.task_gr_leader'] = ['like', "%$task_gr_leader%"];
        !empty($task_gr_pm) && $where['pt.task_gr_pm'] = ['like', "%$task_gr_pm%"];
        !empty($task_plan) && $where['pt.task_plan'] = ['eq', "%$task_plan%"];


        $result= db('project_task pt')->join('project p', 'p.id=pt.pro_id')->where(['p.status' => 1, 'pt.status' => 1])
        ->where($where)->field("p.project_name as pro_name,pt.id,case pt.task_table when 1 then '有' when 2 then '否' end as new_table,case pt.task_book when 1 then'已下达' when 2 then '未下达' end as new_book,pt.task_group,pt.task_gr_leader,pt.task_gr_pm,case pt.task_plan when 1 then '已提交' when 2 then '未提交' end as new_plan")->paginate($limit)->toArray();
        
          $result['code'] = 0;
        $result['msg'] = "查询成功";
        return json($result);
    }
    public function add() {
        $project_list = db("project")->where(['status' => 1])->field("id,project_name")->select();
        $this->assign("list", $project_list);
        return $this->fetch();
    }
    public function addDo(){
         $data = input();
        // var_dump($data);
        // exit;
        $res = db('project_task')->insert($data);
        if ($res) {
            $this->success("添加成功");
        } else {
            $this->error('添加失asdas败');
            die(mysql_error());
            exit;
        }
    }
    public function prodelete() {
        $id = input('param.id');
        if (is_numeric($id) && $id > 0) {
            $suc = db('project_task')->where('id', 'eq', $id)->update(['status' => 0]);
            if ($suc) {
                $this->success("删除成功");
            } else {
                $this->error("删除失败");
                die(mysql_error());
                exit;
            }
        } else {
            $this->error("参数非法");
        }
    }
    public function update(){
        $id=input('param.id');
        $list=db('project_task pt')->join("project p","p.id=pt.pro_id")->where('pt.id','eq',$id)->field("p.project_name,pt.id,pt.task_group,pt.task_gr_leader,pt.task_gr_pm, pt.task_table,task_book ,task_plan")->find();

        $this->assign('list',$list);
        return $this->fetch();
    }
    public function updateDo()
    {
        $data=input('post.');

        $id = $data['id'];
   
        $res = db('project_task')->where('id', $id)->update($data);
        if ($res) {
            $msg['success'] = 1;
            $msg['msg'] = "更新成功";
            return json($msg);
        }
        $msg['success'] = 0;
        $msg['msg'] = "更新失败";
        return json($msg);
    }
}

