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
        -> field("po.id,po.outsce_sn, po.outsce_name, po.sign_time, po.cantact")
        -> paginate($limit)
        -> toArray();
    
    $list['code'] = 0;
    $list['msg'] = "查询成功";
    return json($list);
 }
 
    public function add()
    {
            $project_list = db("project") -> where(['status' => 1]) -> field("id, project_name") -> select();
            $this->assign('list',$project_list);
        return $this->fetch();
    }
    public function proDelete() {
        $id = trim(input("id"));
        if ($id) {
            $data = db('project_outsce')->where('id', 'eq', $id)->update(['status' => 0]);
            if ($data) {
                $this->success('删除成功');
            } else {
                $this->error('删除失败');
                die(mysql_error());
                exit;
            }
        } else {
            $this->error('参数不对');
        }
    }
    public function update()
    {
          $id = input('param.id');
        if (is_numeric($id) && $id > 0) {
              $list = db("project_outsce po")
              ->join("project p","p.id=po.pro_id")
        -> where(['po.status' => 1,'p.status'=>1])
        -> field("p.projectname,po.id,po.unit_name,po.cantact,po.phone,po.outsce_sn, po.outsce_name,po.sign_name,po.start_time,po.end_time,po.contract_amount,po.final_amount,po.final_time,po.earnest_amount,po.earnest_time,po.reserve_start_time,po.reserve_end_time,po.reserce_amount")
        -> paginate($limit)
        -> toArray();
        }
    }
}