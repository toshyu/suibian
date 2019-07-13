<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
class Ceshi extends Controller
{
	public function ceshi()
	{
		$list=Db::connect('db_con2')->table('pro')->field('pro_number,pro_name')->select();
		// echo '<pre>';

		// var_dump($list);
		print_r($list[6]);

		// $data=$list;
		// print_r($data);
		 $res = db('project_x')->insertAll($list);
	}
}