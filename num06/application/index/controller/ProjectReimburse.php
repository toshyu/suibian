<?php
namespace app\index\controller;

class ProjectReimburse extends Base{
    
 public function index()
 {
    return $this->fetch();
 }

 public function reimburseList()
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

    
        $project_list = db("project") -> where(['status' => 1]) -> field("id,project_name") -> select();
       $sign_id = getSign();
      $this->assign("sign_id", $sign_id); 
        $this -> assign("list", $project_list);
       
        return $this->fetch();
    }
        public function getProjectdetail(){
        $project_id = trim(input("project_id"));
        $result = db("project")
            -> where(['id' => $project_id])
            // -> field("")
            -> find();
        return json($result);
    }
}