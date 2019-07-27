<?php
namespace app\index\controller;

class ProjectOutsce extends Base{
    
 public function index()
 {
    return $this->fetch();
 }

 // 外协列表
 public function getOutsceList(){
     $limit = trim(input("limit", 10));
     $outsce_name = trim(input("outsce_name"));
     $outsce_unit = trim(input("outsce_unit"));
     $cantact = trim(input("cantact"));
     $where = [];

     !empty($outsce_name) && $where['po.outsce_name'] = [ "like", "%$outsce_name%" ];
     !empty($outsce_unit) && $where['po.outsce_unit'] = [ "like", "%$outsce_unit%" ];
     !empty($cantact) && $where['po.cantact'] = [ "like", "%$cantact%" ];
     $list = db("project_outsce po")
        -> where(['po.status' => 1])
        -> where($where)
        -> field("po.outsce_sn, po.outsce_name, po.sign_time, po.cantact")
        -> paginate($limit)
        -> toArray();
    
    $list['code'] = 0;
    $list['msg'] = "查询成功";
    return json($list);
 }

 public function outsceList()
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
            $project_list = db("project") -> where(['status' => 1]) -> field("id, project_name") -> select();
            $this->assign('list',$project_list);
        return $this->fetch();
    }
}