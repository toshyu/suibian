<?php 
namespace app\admin\Model;

use think\Model;
use think\Db;

class ProjectModel extends Model
{
       protected $autoWriteTimestamp=true;
    protected $createTime="created";
 
    protected $updateTime="updated";

 public function getList()
    {
        return $this->field(',projectid,pro_number,pro_name,time')
            ->order('projectid DESC')->paginate();

    }
}