<?php
namespace app\index\controller;
use think\Request;
class Projectcut extends Base{
    
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