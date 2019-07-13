<?php

namespace app\admin\controller;
use think\Config;
use think\Loader;
use think\Db;
use think\Session;
use think\Request;
use app\admin\model\IndexModel;
class Index extends Base
{
    public function index()
    {   
        if (session('name')) {
            // echo session('name');
           // print_r(session('name'));

        }
        return $this->fetch('/index');
     
    }


    /**
     * [indexPage 后台首页]
     * @return [type] [description]
     * @author [田建龙] [864491238@qq.com]
     */
    public function indexPage()
    {
         //今日新增会员
        $today = strtotime(date('Y-m-d 00:00:00'));//今天开始日期     
        $map['create_time'] = array('egt', $today);
        $member = Db::name('member')->where($map)->count();
        $this->assign('member', $member);

        $info = array(
            'web_server' => $_SERVER['SERVER_SOFTWARE'],
            'onload'     => ini_get('upload_max_filesize'),
            'think_v'    => THINK_VERSION,
            'phpversion' => phpversion(),
        );
        $this->assign('info',$info);
        //查询项目根信息
        $list = db('pro_x')->select();
        $this->assign('list',$list);
        
        return $this->fetch('index');
    }



    /**
     * [userEdit 修改密码]
     * @return [type] [description]
     * @author [田建龙] [864491238@qq.com]
     */
    public function editpwd(){

        if(request()->isAjax()){
            $param = input('post.');
            $user=Db::name('admin')->where('id='.session('uid'))->find();
            if(md5(md5($param['old_password']) . config('auth_key'))!=$user['password']){
               return json(['code' => -1, 'url' => '', 'msg' => '旧密码错误']);
            }else{
                $pwd['password']=md5(md5($param['password']) . config('auth_key'));
                Db::name('admin')->where('id='.$user['id'])->update($pwd);
                session(null);
                cache('db_config_data',null);//清除缓存中网站配置信息
                return json(['code' => 1, 'url' => 'index/index', 'msg' => '密码修改成功']);
            }
        }
        return $this->fetch();
    }


    /**
     * 清除缓存
     */
    public function clear() {
        if (delete_dir_file(CACHE_PATH) && delete_dir_file(TEMP_PATH)) {
            return json(['code' => 1, 'msg' => '清除缓存成功']);
        } else {
            return json(['code' => 0, 'msg' => '清除缓存失败']);
        }
    }
    public function pro_add()
    {
        return $this->fetch();
    }

    public function pro_doAdd(Request $request)
    {
         $data = $request->post();
        // print_r($data);
        // exit;
        // $res = db('pro_x')->insert($data);
            $model=new IndexModel;
         $model->save($data);
        if ($model) {
            $this->success("添加成功");
        } else {
            $this->error('添加失败');
        }
    }
    public function pro_in()
    {
        $id=input('id');
        $name=input('name');
        $number=input('number');
        if ($name && $id && $number) {
        session('id',$id);
        session('name',$name);
        session('number',$number);
        $this->success("正在进入$name" );
        }
        
    }
    public function pro_out()
    {
         session::set('name',null);
         session::set('id',null);
         session::set('number',null);
        
         $this->success("正在退出");
    }
 public function prodelete() {
        $id = input('param.id');
        // var_dump($id);
        // exit;
        if (is_numeric($id) && $id > 0) {
            // $suc=Db::table('think_pro_x')->where('id','eq',28)->delete();
            $suc = db('pro_x')->where('id', 'eq', $id)->delete();
            $suc=db('project_x')->where('pro_id','eq',$id)->delete();
            $suc=db('cut_x')->where('pro_id','eq',$id)->delete();
            $suc=db('prooutsce_x')->where('pro_id','eq',$id)->delete();
            $suc=db('recycle_x')->where('pro_id','eq',$id)->delete();
            $suc=db('reimburse_x')->where('pro_id','eq',$id)->delete();
            $suc=db('task_x')->where('pro_id','eq',$id)->delete();
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
            $list = db('pro_x')->where('id', 'eq', $id)->select();
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
        $res = db('pro_x')->where('id', 'eq', $id)->update($data);
        if ($res) {
            $this->success("更新成功");
        } else {
            $this->error("更新失败");
            die(mysql_error());
            exit;
        }
    }
}
