<?php
namespace app\index\controller;

class ProjectReimburse extends Base{
    
 public function index()
 {
     $sign_id = getSign();
     $this->assign('sign_id',$sign_id);
    return $this->fetch();
 }

 public function reimburseList()
    {  
        $project_name=trim(input("project_name"));
        $sign_id = trim(input("sign_id")); 
        $reusername = trim(input("reusername"));  
        $retime = trim(input("retime"));  
        $respecies = trim(input("respecies"));  
        $allmoney = trim(input("allmoney"));  
        $where = [];
        !empty($project_name) && $where['p.project_name']=['like',"%$project_name%"];
        !empty($sign_id) && $where['re.sign_id'] = ['eq', "$sign_id"];
        !empty($reusername) && $where['re.reusername'] = ['like', "%$reusername%"];
        !empty($retime) && $where['re.retime'] = ['like', "%$retime%"];
        !empty($respecies) && $where['re.respecies'] = ['like', "%$respecies%"];
        !empty($allmoney) && $where['re.allmoney'] = ['like', "%$allmoney%"];
         
        $result=db('project_reimburse re')
        ->join("project p","p.id=re.pro_id")
        ->join("sign s","s.id=re.sign_id") 
        ->where(['p.status'=>1,'re.status'=>1,'s.status'=>1])
        ->where($where)
        ->field('p.project_name,s.title as sign_id,re.id,re.reusername,re.retime,re.respecies,re.allmoney')
        ->select();
        
        $msg['code'] = 0;
        $msg['msg'] = "查询成功";
        $msg['data'] = $result;
        return json($msg);
        
    } 
    public function add()
    {      
        $sign_id=getSign();
         $project_list = db("project")->where(['status' => 1])->field("id, project_name")->select();
        $this->assign('list',$project_list);
        $this->assign('sign_id',$sign_id);
        return $this->fetch();
    }
    public function addDo()
    {
        $data=(input('post.'));
        $data['allmoney']=$data['upper']+$data['management']+$data['life']+$data['occu']+$data['deprec']+$data['upother1']+$data['workers']+$data['worker_money']+$data['insurance']+$data['provident_fund']+$data['upother2']+$data['outfee']+$data['office']+$data['post']+$data['costs']+$data['traffic']+$data['house']+$data['peixun']+$data['meeting']+$data['meetsite']+$data['meethouse']+$data['meetprint']+$data['vehide']+$data['called']+$data['fuel']+$data['material']+$data['subsidy']+$data['lease']+$data['rebid']+$data['tax'];
        $res=db('reimburse')->insert($data);
         
         if ($res) {
            $msg['success']=1;
            $msg['msg']="添加成功";
            return json($msg);
         }else{
            $msg['msg']="添加失败";
            return json($msg);
         }
    }
    
        public function proDelete() {
        $id = input('param.id');
     
        if (is_numeric($id) && $id > 0) {
            $suc = db('project_reimburse')->where('id', 'eq', $id)->update(['status' => 0]);
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
    public function update()
    {
        $id=input('param.id');
        $name=input('param.name');
        $sign_id=getSign();

        $list=db('project_reimburse re')->join("sign s","s.id=re.sign_id")->where(['s.status'=>1,'re.status'=>1,'re.id'=>$id])->select();
        // var_dump($list);
        $list[0]['project_name']=$name;
        
        // echo '<pre>';
        // var_dump($list);
        $this->assign('list',$list);
        $this->assign('sign_id',$sign_id);
        return $this->fetch();
    }
  
   
}