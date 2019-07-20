<?php
namespace app\index\controller;

class Projectcut extends Base{
    
    public function index()
    {      

        return $this->fetch();
    }
    
    public function projectadd(){
        $project_list = db("project")
            -> where(['status' => 1])
            -> field("id, project_name")
            -> select();
        $sign_list = getSign();
        $this -> assign("project_list", $project_list);
        $this -> assign("sign_list", $sign_list);
        $this -> assign("project_id", 6);
        return $this->fetch();
    }

    public function getProjectdetail(){
        $project_id = trim(input("project_id"));
        $result = db("project")
            -> where(['id' => $project_id])
            // -> field("")
            -> find();
        return json($result);
    }

    /**
     * 添加 | 编辑切块
     */
    public function porEdit()
    {
         $id=trim(input("id"));
         
         $list=db('project_cut')
         ->alias('pc')
         ->join("project p","p.id=pc.project_id","left")
         ->where('id','eq',$id)
         ->field('pc.id,p.project_name,p.contract_amount,p.final_amount,pc.production_str,pc.management_str,pc.administration_str')
         ->find();
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function Edit(){
        $production_str = trim(input("production_str"));
        $management_str = trim(input("management_str"));
        $administration_str = trim(input("administration_str"));
        $project_id = trim(input("project_id"));

        $unqie_project = db("project_cut") -> where(['project_id' => $project_id]) -> find();
        $data = array(
            'production_str' => $production_str,
            'management_str' => $management_str,
            'administration_str' => $administration_str,
            'status' => 1
        );

        // 存在即更新
        if($unqie_project){
            $data['update_time'] = time();
            $result = db("project_cut") -> where(['project_id' => $project_id]) -> update($data);
            if($result){
                $msg['code'] = 1;
                $msg['msg'] = "修改成功";
                return json($msg);
            }
            $msg['code'] = 0;
            $msg['msg'] = "修改失败";
            return json($msg);
        // 不存在即添加
        }else{
            $data['add_time'] = time();
            $data['project_id'] = $project_id;
            $result = db("project_cut") -> insert($data);
            if($result){
                $msg['code'] = 1;
                $msg['msg'] = "添加成功";
                return json($msg);
            }
            $msg['code'] = 0;
            $msg['msg'] = "添加失败";
            return json($msg);
        }
    }
    //列表页查询
    public function cutBlockList()
    {
        
        //查询数据
        $project_name=trim(input("name"));
        $ma['p.project_name']=['like',"%$project_name%"];
         $ma['pc.status']=1;
        $data=db('project_cut')->alias('pc')
        ->join("project p" ,"p.id=pc.project_id","left")
        ->where($ma)
        ->field('pc.id,p.project_name,pc.project_id,pc.production_str,pc.management_str,pc.administration_str')
        ->select();

        // var_dump(db()->getlastSql());
         foreach ($data as $k => &$v) {
             $v['production_array']=json_decode($v['production_str'],true);
             $v['management_array']=json_decode($v['management_str'],true);
             $v['administration_array']=json_decode($v['administration_str'],true);
             $v['production_cost_all']=0;
             $v['management_cost_all']=0;
             $v['administration_cost_all']=$v['administration_array'][0]['amount'];
          
            foreach ($v['production_array'] as $kk => &$vv) {
                $vv['amount']=intval($vv['amount']);
                $v['production_cost_all']+=$vv['amount'];
            }
            foreach ($v['management_array'] as $kkk => &$vvv) {
                $vvv['amount']=intval($vvv['amount']);
                $v['management_cost_all']+=$vvv['amount'];
            }
            unset($v['production_array'],$v['management_array'],$v['administration_array']);
            unset($v['production_str'],$v['management_str'],$v['administration_str']);
        }
        $msg['code'] = 0;
        $msg['msg'] = "查询成功";
        $msg['data'] = $data;
        return json($msg);
    } 
    public function proDelete()
    {
        $id=trim(input("id"));
        if ($id) {
            $data=db('project_cut')->where('id','eq',$id)->update(['status'=>0]);
            if ($data) {
               $this->success('删除成功');
            }else{
                $this->error('删除失败');
                die(mysql_error());
                exit;
            }
        }else{
            $this->error('参数不对');
        }
    }
}