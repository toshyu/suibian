<?php
namespace app\index\controller;

use think\Controller;
use \expand\Tree;


class Base extends Controller{

    protected function _initialize(){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['admin']['user_id'])){
            $this -> redirect("login/index");
        }

        // $treeMenu = $this -> getTreeMenu();
        // $this -> assign("treeMenu", $treeMenu);
    }

    public function getTreeMenu(){
        $user_id = $_SESSION['admin']['user_id'];
        $group = db("admin_group")
            -> where(['user_id' => $user_id])
            -> find();
        $menu_ids = explode(",", $group['menu_ids']);
        $menus = [];
        foreach ($menu_ids as $k => $v) {
            $menu = db("admin_menu")
                -> where(['status' => 1, 'id' => $v])
                -> find();
            array_push($menus, $menu);
        }

        $treeMenu = Common::getMenu($menus, 0);
        return $treeMenu;
    }
}