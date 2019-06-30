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
namespace app\admin\controller;
use think\Request;
use think\Db;
class ProTask extends Base {
    public function index() {
        $id = trim(input("id"));
        $where = [];
        if($id){
            $where['px.id'] = $id;
        }
        $result = db('task_x') -> alias("tx")
            -> join("pro_x px", "px.id = tx.task_id and tx.status = 1", "left")
            -> where($where)
            -> field("tx.id as id, tx.task_table, tx.task_book, tx.task_group, tx.task_gr_leader, tx.task_gr_pm, tx.task_plan")
            -> select();
        // $result=Db::table('think_task_x')->select();
        // var_dump($result);
        // print_r($list);
        //  exit;
        $this->assign('list', $result);
        return $this->fetch();
    }
    public function proAdd() {
        return $this->fetch();
    }
    public function proDoAdd(Request $request) {
        $data = $request->post();
        // print_r($data);
        // exit;
        $res = db('task_x')->insert($data);
        if ($res) {
            $this->success("添加成功");
        } else {
            $this->error('添加失败');
        }
    }

    /**
     * 删除
     */
    public function del(){
        $task_id = trim(input("task_id"));
        $msg = [];
        if(empty($task_id)){
            $msg['code'] = 0;
            $msg['msg'] = "参数错误";
            return json($msg);
        }
        $result = db("task_x") -> where(['id' => $task_id]) -> update(['status' => 2]);
        if($result){
            $msg['code'] = 1;
            $msg['msg'] = "修改成功";
            return json($msg);
        }
        $msg['code'] = 0;
        $msg['msg'] = "修改失败";
        return json($msg);
    }
    public function proDelete() {
        $id = input('param.id');
        // var_dump($id);
        // exit;
        if (is_numeric($id) && $id > 0) {
            // $suc=Db::table('think_task_x')->where('taskid','eq',28)->delete();
            $suc = db('task_x')->where('taskid', 'eq', $id)->delete();
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
    public function proUpdate() {
        $id = input('id');
        if (is_numeric($id) && $id > 0) {
            $list = db('task_x')->where('id', 'eq', $id)->find();
            $this->assign('list', $list);
            return $this->fetch();
        } else {
            $this->error('参数不对  lese');
        }
    }
    public function proUpdateDo(Request $request) {
        $data = $request->post();
        // var_dump($data['id']);
        // exit;
        $id = $data['id'];
        $res = db('task_x')->where('taskid', 'eq', $id)->update($data);
        if ($res) {
            $this->success("更新成功");
        } else {
            $this->error("更新失败");
            die(mysql_error());
            exit;
        }
    }
}

