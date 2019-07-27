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
class Project extends Base {
    public function index() {
        $type_list = getProjectType();
        $unit_industy_list = getUnitIndusty();
        $sign_id = getSign();
        $this->assign("type_list", $type_list);
        $this->assign("unit_industy_list", $unit_industy_list);
        $this->assign("sign_id", $sign_id);
        return $this->fetch();
    }
    public function getProjectList() {
        $limit = trim(input("limit")) ? trim(input("limit")) : 10;
        $order = trim(input("order")); // 合同编号
        $project_name = trim(input("project_name")); // 项目名称
        $sign_agent = trim(input("sign_agent")); // 经办人
        $sign_id = trim(input("sign_id")); // 签订部门
        $sign_time = trim(input("sign_time")); // 签订时间
        $source = trim(input("source")); // 来源
        $type_id = trim(input("type_id")); // 项目类型
        $unit_id = trim(input("unit_id")); // 委托单位行业
        $nature = trim(input("nature")); // 性质
        $final_time = trim(input("final_time")); // 决算日期
        $final_amount = trim(input("final_amount")); // 决算额
        $start_time = trim(input("start_time")); // 工期开始日期
        $end_time = trim(input("end_time")); // 工期结束日期
        $contract_amount = trim(input("contract_amount")); // 合同额
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
        $result = db("project p")->join("unit_industy ui", "ui.id = p.unit_id")->join("type t", "t.id = p.type_id")->join("sign s", "s.id = p.sign_id")->where(['p.status' => 1, 'ui.status' => 1, 't.status' => 1])->where($where)->order("p.id")->field("p.id, p.order, p.project_name, case p.source when 1 then '合同' when 2 then '内部备案' when 3 then '上级下达' when 4 then '其他' end as source,  case p.nature when 1 then '市场招标' when 2 then '财政招标' when 3 then '合作挂靠' when 4 then '其他' end as nature, t.title as type_id, p.unit_name, ui.title as unit_id, s.title as sign_id, p.sign_time, p.start_time,p.end_time,s.title as sign_agent, p.sign_agent, p.contract_amount, p.final_amount")->paginate($limit)->toArray();
        // var_dump($result['data'][0]['start_time']);
        foreach ($result['data'] as $k => & $v) {
            // echo date("Y-m-d H:i:s",$v['start_time']),'<br>';
            $v['start_time'] = date("Y-m-d", $v['start_time']);
            $v['end_time'] = date("Y-m-d", $v['end_time']);
            $v['construction_period'] = $v['start_time'] . '/' . $v['end_time'];
            // echo $v['construction_period'];
            unset($v['start_time'], $v['end_time']);
        }
        // var_dump($result);
        // exit;
        $result['code'] = 0;
        $result['msg'] = "查询成功";
        return json($result);
    }
    public function add() {
        $type_list = getProjectType();
        $unit_industy_list = getUnitIndusty();
        $sign_id = getSign();
        $this->assign("type_list", $type_list);
        $this->assign("unit_industy_list", $unit_industy_list);
        $this->assign("sign_id", $sign_id);
        return $this->fetch();
    }
    public function AddDo() {
        $data = input();
        var_dump($data);
        exit;
        // var_dump($data);
        // exit;
        $rule = ['order' => 'required', 'project_namw' => 'required', 'source' => 'required', 'nature' => 'required', 'type_id' => 'required', 'unit_name' => 'required', 'start_time' => 'required', 'end_time' => 'required', 'unit_id' => 'required', 'sign_time' => 'required', 'sign_id' => 'required', 'sign_agent' => 'required', 'contract_amount' => 'required', 'final_time' => 'required', 'fanal_amount' => 'required'];
        $msg = ['order' => '项目名称不能为空！', 'project_namw' => '项目编号不能为空！', 'source' => '项目来源不能为空！', 'nature' => '项目性质不能为空！', 'type_id' => '项目类型不能为空！', 'unit_name' => '项目委托单位不能为空！', 'start_time' => '项目工期开始时间不能为空！', 'end_time' => '项目工期结束时间不能为空！', 'unit_id' => ' 项目委托单位行业不能为空！', 'sign_time' => '项目签订时间不能为空！', 'sign_id' => '项目签订部门不能为空！', 'sign_agent' => '项目签订人不能为空！', 'contract_amount' => ' 项目合同额不能为空！', 'final_time' => ' 项目决算时间不能为空！', 'fanal_amount' => ' 项目决算额不能为空！'];
        $validate = new Validate($rule, $msg);
        $resd = $validate->check($data);
        if (!$resd) {
            return json(array(
                'msg' => $validate->getError()
            ));
        }
        $data['sign_time'] = dump(strtotime($data['sign_time']));
        $res = db('project')->insert($data);
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
            $suc = db('project')->where('id', 'eq', $id)->update(['status' => 0]);
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
    public function update() {
        $id = input('param.id');
        if (is_numeric($id) && $id > 0) {
            $list = db('project p')->join("type t", "t.id=p.type_id")->join("unit_industy ui", "ui.id=p.unit_id")->join("sign s", "s.id=p.sign_id")->where(['p.status' => 1, 'ui.status' => 1, 't.status' => 1, 'p.id' => $id])->field("t.title as type_title,ui.title as unit_title,s.title as sign_title,p.id,p.order,p.project_name,p.source,p.nature,p.unit_name,p.sign_time,p.sign_agent,p.contract_amount,p.final_amount,p.final_time,p.start_time,p.end_time,p.type_id,p.unit_id,p.sign_id")->select();
            foreach ($list as $k => & $v) {
                // echo date("Y-m-d H:i:s",$v['start_time']),'<br>';
                $v['start_time'] = date("Y-m-d", $v['start_time']);
                $v['end_time'] = date("Y-m-d", $v['end_time']);
                $v['construction_period'] = $v['start_time'] . ' / ' . $v['end_time'];
                // echo $v['construction_period'];
                unset($v['start_time'], $v['end_time']);
            }
            // $list=$this->getProjectList();
            $type_list = getProjectType();
            $unit_industy_list = getUnitIndusty();
            $sign_id = getSign();
            $this->assign("type_list", $type_list);
            $this->assign("unit_industy_list", $unit_industy_list);
            $this->assign("sign_id", $sign_id);
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
        $res = db('project')->where('id', 'eq', $id)->update($data);
        if ($res) {
            $this->success("更新成功");
        } else {
            $this->error("更新失败");
            die(mysql_error());
            exit;
        }
    }
}

