<?php
namespace app\index\controller;

class ProjectRecycle extends Base{
    
 public function index()
 {
    $sign_id=getSign();
    $this->assign('sign_id',$sign_id);
    return $this->fetch();
 }

 public function recycleList()
    {  
         $limit = trim(input("limit")) ? trim(input("limit")) : 10;
        $project_name=trim(input("project_name"));
        $maketime=trim(input("maketime"));
        $makedepart=trim(input("makedepart"));
        $makeperson=trim(input("makeperson"));
        $maketype=trim(input("maketype"));
        $makemoney=trim(input("makemoney"));
        $tomoney=trim(input("tomoney"));
        $totime=trim(input("totime"));
        $where=[];
        !empty($project_name) && $where['p.project_name']=['like',"%$project_name%"];
        !empty($maketime)  && $where['re.maketime']=['like',"%$maketime%"];
        !empty($makedepart) && $where['re.makedepart']=['eq',"$makedepart"];
        !empty($makeperson)  && $where['re.makeperson']=['like',"%$makeperson%"];
        !empty($maketype)  && $where['re.maketype']=['like',"%$maketype%"];
        !empty($makemoney) && $where['re.makemoney']=['like',"%$makemoney%"];
        !empty($totime) && $where['re.totime']=['like',"%$totime%"];
        !empty($tomoney) && $where['re.tomoney']=['like',"%$tomoney%"];
        $result=db('recycle re')
        ->join("project p","p.id=re.pro_id")
        ->join("sign s","s.id=re.makedepart")
        ->where($where)
        ->where(['p.status'=>1,'re.status'=>1,'s.status'=>1])
        ->field('p.project_name,s.title as makedepart,re.id,re.maketime, re.makeperson,re.maketype,re.makemoney,re.tomoney,re.totime')
        ->paginate($limit)
        ->toArray();
            foreach ($result['data'] as $k => & $v) {
            $v['maketime'] = date("Y-m-d", $v['maketime']);
            $v['totime']=date("Y-m-d",$v['totime']);
            
        }
        $result['code'] = 0;
        $result['msg'] = "查询成功";
        return json($result);
         
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

        $res=db('recycle')->insert($data);
         
         if ($res) {
            $msg['success']=1;
            $msg['msg']="添加成功";
            return json($msg);
         }else{
            $msg['msg']="添加失败";
            return json($msg);
         }
    }
    public function update()
    {
        $id=input('param.id');
        $type_list=getProjectType();

        $list=db('recycle r')
        ->join("type t","t.id=r.makedepart")
        ->join("project p","p.id=r.pro_id")
        ->where(['p.status'=>1,'r.status'=>1,'r.id'=>$id])
        ->field("p.project_name,r.id,t.title as ptitle,r.maketime,r.makedepart,r.makedepart,r.makeperson,r.maketype,r.makemoney,r.tomoney,r.totime")->select();
        foreach ($list as $k  => $v) {
             $v['maketime'] = date("Y-m-d", $v['maketime']);
                $v['totime'] = date("Y-m-d", $v['totime']);
        }
                $this->assign("type_list", $type_list);
        $this->assign('list',$list);
 
        return $this->fetch();
    }
    public function updataDo()
    {
        $data=input('post.');
        $id = $data['id'];
        $res = db('recycle')->where('id', $id)->update($data);
        if ($res) {
            $msg['success'] = 1;
            $msg['msg'] = "更新成功";
            return json($msg);
        }
        $msg['success'] = 0;
        $msg['msg'] = "更新失败";
        return json($msg);
        
    }
        public function proDelete() {
        $id = input('param.id');
       
        if (is_numeric($id) && $id > 0) {
            $suc = db('recycle')->where('id', 'eq', $id)->update(['status' => 0]);
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
   
}