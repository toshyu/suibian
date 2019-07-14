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
}