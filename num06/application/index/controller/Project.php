<?php
namespace app\index\controller;

class Project extends Base{
    public function index(){
        return $this -> fetch();
    }

    public function getProjectList(){
        $result = db("project p")
            -> join("unit_industy ui", "ui.id = p.unit_id")
            -> join("type t", "t.id = p.type_id")
            -> join("sign s", 's.id = p.sign_id')
            -> where(['p.status' => 1, 'ui.status' => 1, 't.status' => 1])
            -> order("p.id")
            -> field("p.id, p.order, p.project_name, case p.source when 1 then '合同' when 2 then '内部备案' when 3 then '上级下达' when 4 then '其他' end as source,  case p.nature when 1 then '市场招标' when 2 then '财政招标' when 3 then '合作挂靠' when 4 then '其他' end as nature, t.title as type_id, p.unit_name, ui.title as unit_id, p.sign_time, s.title as sign_agent, p.sign_agent, p.contract_amount, p.final_amount")
            -> paginate(10, false, ['query' => input()])->toArray();
            // -> paginate(10);
        // if(!$result){
        //     $msg['code'] = 1;
        //     $msg['msg'] = "暂无数据";
        //     return json($msg);
        // }
        // $msg['code'] = 0;
        // $msg['msg'] = "查询成功";
        // $msg['data'] = $result;
        $result['code'] = 0;
        $result['msg'] = "查询成功";
        return json($result);
    }
}