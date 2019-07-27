<?php

namespace app\index\Model;

use think\Model;

class ProjectModel extends Model
{
	protected $autoWriteTimestamp=true;
	protected $createdTime='add_time';
	protected $updateTime='update_time';
}