<?php

namespace app\admin\model;
use think\Model;
use think\Db;

class IndexModel extends Model
{
	protected $autoWriteTimestamp=true;
    protected $createTime="pro_create_time";
    protected $updateTime="pro_update_time";
    protected $table='think_pro_x';
}