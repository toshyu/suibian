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
namespace app\admin\controller;
use think\Request;
use think\Db;
class ProExtend extends Base {
    public function index() {
          if (session('id')) {
          $id=session('id');
          $result=db('reimburse_x')->where('pro_id','eq',$id)->select();
          }else{
        $result = db('reimburse_x')->select();
            }

        // $result = db('reimburse_x')->select();
        // $result=Db::table('think_reimburse_x')->select();
        // var_dump($result);
        // print_r($list);
        //  exit;
        $this->assign('list', $result);
        return $this->fetch();
    }
    public function proadd() {
        return $this->fetch();
    }
    public function prodoAdd(Request $request) {
        $data = $request->post();
        // print_r($data);
        // exit;
        $res = db('reimburse_x')->insert($data);
        if ($res) {
            $this->success("添加成功");
        } else {
            $this->error('添加失败');
        }
    }
    public function prodelete() {
        $id = input('param.id');
        // var_dump($id);
        // exit;
        if (is_numeric($id) && $id > 0) {
            // $suc=Db::table('think_reimburse_x')->where('id','eq',28)->delete();
            $suc = db('reimburse_x')->where('id', 'eq', $id)->delete();
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
    public function proupdate() {
        $id = input('param.id');
        if (is_numeric($id) && $id > 0) {
            $list = db('reimburse_x')->where('id', 'eq', $id)->select();
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

        $res = db('reimburse_x')->where('id', 'eq', $id)->update($data);
        if ($res) {
            $this->success("更新成功");
        } else {
            $this->error("更新失败");
            die(mysql_error());
            exit;
        }
    }
}

