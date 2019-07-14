<?php
namespace app\index\controller;

class Projectcut extends Base{
    
    public function index()
    {
        return $this->fetch();
    }
    
    public function projectadd(){
        $project_list = db("project")
            -> where(['status' => 1])
            -> field("id, project_name")
            -> select();
        $sign_list = getSign();
        $this -> assign("project_list", $project_list);
        $this -> assign("sign_list", $sign_list);
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

    /**
     * 添加 | 编辑切块
     */
    public function edit(){
        $production_str = trim(input("production_str"));
        $management_str = trim(input("management_str"));
        $administration_str = trim(input("administration_str"));
        $project_id = trim(input("project_id"));

        $unqie_project = db("project_cut") -> where(['project_id' => $project_id]) -> find();
        $data = array(
            'production_str' => $production_str,
            'management_str' => $management_str,
            'administration_str' => $administration_str,
            'status' => 1
        );

        // 存在即更新
        if($unqie_project){
            $data['update_time'] = time();
            $result = db("project_cut") -> where(['project_id' => $project_id]) -> update($data);
            if($result){
                $msg['code'] = 1;
                $msg['msg'] = "修改成功";
                return json($msg);
            }
            $msg['code'] = 0;
            $msg['msg'] = "修改失败";
            return json($msg);
        // 不存在即添加
        }else{
            $data['add_time'] = time();
            $data['project_id'] = $project_id;
            $result = db("project_cut") -> insert($data);
            if($result){
                $msg['code'] = 1;
                $msg['msg'] = "添加成功";
                return json($msg);
            }
            $msg['code'] = 0;
            $msg['msg'] = "添加失败";
            return json($msg);
        }
    }
}