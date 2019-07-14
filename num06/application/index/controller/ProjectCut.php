<?php
namespace app\index\controller;
use think\Request;
class Project extends Base{
    public function index(){
        $type_list = getProjectType();
        $unit_industy_list = getUnitIndusty();
        $sign_id = getSign();
        $this -> assign("type_list", $type_list);
        $this -> assign("unit_industy_list", $unit_industy_list);
        $this -> assign("sign_id", $sign_id);
        return $this -> fetch();
    }

    public function getProjectList(){
        $limit = trim(input("limit")) ? trim(input("limit")) : 10;
        $order = trim(input("order"));   // 合同编号
        $project_name = trim(input("project_name")); // 项目名称
        $sign_agent = trim(input("sign_agent")); // 经办人
        $sign_id = trim(input("sign_id"));   // 签订部门
        $sign_time = trim(input("sign_time"));   // 签订时间
        $source = trim(input("source"));   // 来源
        $type_id = trim(input("type_id"));   // 项目类型
        $unit_id = trim(input("unit_id"));   // 委托单位行业
        $nature = trim(input("nature"));     // 性质
        $final_time = trim(input("final_time"));     // 决算日期
        $final_amount = trim(input("final_amount"));     // 决算额
        $start_time = trim(input("start_time"));     // 工期开始日期
        $end_time = trim(input("end_time")); // 工期结束日期
        $contract_amount = trim(input("contract_amount"));   // 合同额
        $where = [];

        !empty($order) && $where['p.order'] = ['like', "%$order%"];
        !empty($project_name) && $where['p.project_name'] = ['like', "%$project_name%"];
        !empty($sign_agent) && $where['p.sign_agent'] = ['like', "%$sign_agent%"];
        !empty($contract_amount) && $where['p.contract_amount'] = ['like', "%$contract_amount%"];
        !empty($source) && $where['p.source'] = ['like', "%$source%"];
        !empty($sign_id) && $where['p.sign_id'] = $sign_id;
        !empty($sign_time) && $where['p.sign_time'] = $sign_time;
        !empty($type_id) && $where['p.type_id'] = $type_id;
        !empty($unit_id) && $where['p.unit_id'] = $unit_id;
        !empty($nature) && $where['p.nature'] = $nature;
        !empty($final_time) && $where['p.final_time'] = $final_time;
        !empty($final_amount) && $where['p.final_amount'] = $final_amount;
        !empty($start_time) && $where['p.start_time'] = $start_time;
        !empty($end_time) && $where['p.end_time'] = $end_time;

        $result = db("project p")
            -> join("unit_industy ui", "ui.id = p.unit_id")
            -> join("type t", "t.id = p.type_id")
            -> join("sign s", 's.id = p.sign_id')
            -> where(['p.status' => 1, 'ui.status' => 1, 't.status' => 1])
            -> where($where)
            -> order("p.id")
            -> field("p.id, p.order, p.project_name, case p.source when 1 then '合同' when 2 then '内部备案' when 3 then '上级下达' when 4 then '其他' end as source,  case p.nature when 1 then '市场招标' when 2 then '财政招标' when 3 then '合作挂靠' when 4 then '其他' end as nature, t.title as type_id, p.unit_name, ui.title as unit_id, p.sign_time, s.title as sign_agent, p.sign_agent, p.contract_amount, p.final_amount")
            -> paginate($limit)
            -> toArray();
        $result['code'] = 0;
        $result['msg'] = "查询成功";
        return json($result);
    }
    public function add()
    {
        return $this->fetch();
    }
        public function AddDo(Request $request) {
        $data = $request->post();
         var_dump($data);
         exit;
        $res = db('project')->insert($data);
        if ($res) {
            $this->success("添加成功");
        } else {
            // $this->error('添加失asdas败');
            die(mysql_error());
                exit;        
        }
    }
}