<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Base{
    public function index(){
        return $this -> fetch();
    }
    public function home(){
        return $this -> fetch();
    }
}