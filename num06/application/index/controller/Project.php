<?php 
namespace app\index\Controller;
use think\Db;
class Project extends Base
{
	public function projectAdd()
	{

	 
		return $this->fetch();
	}
}