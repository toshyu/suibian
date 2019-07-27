<?php
namespace app\index\controller;

class ProjectRecycle extends Base{
    
 public function index()
 {
    return $this->fetch();
 }

 public function recycleList()
    {  
        $data=db('project_task') 
        ->field('id,task_table,task_book,task_group,task_gr_leader,task_gr_pm,task_plan')
        ->where('status=1')
        ->select();
        $msg['code'] = 0;
        $msg['msg'] = "查询成功";
        $msg['data'] = $data;
        return json($msg);
         
    } 
    public function add()
    {
         $project_list = db("project")->where(['status' => 1])->field("id, project_name")->select();
        $this->assign('list',$project_list);
        return $this->fetch();
    }
    public function addDo()
    {
        $data=(input('post.'));

        $res=db('project_recycle')->insert($data);
         
    }
   
}