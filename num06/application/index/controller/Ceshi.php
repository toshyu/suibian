<?php  
namespace app\index\controller;

use think\Controller;

class Ceshi extends Controller 
{
	public function index()
	{
		return $this->fetch();
	}
}