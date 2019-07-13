<?php
namespace app\index\controller;

use think\Controller;

class Common extends Controller{
    // 创建菜单树
	public static function getMenu($data,$pid,$deep=1){
		$tree=[];
		foreach ($data as $row) {
			if($row['pid']==$pid){
			   $row['level']=$deep;
			   $row['spread'] = true;
			   $row['children']=self::getMenu($data,$row['id'],$deep+1);
			   if($row['children']){
				   unset($row['checked']);
			   }
			   array_push($tree, $row);
			}
		}
		return $tree;
	}
}