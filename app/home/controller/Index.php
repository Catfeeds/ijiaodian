<?php
namespace app\home\controller;
class Index extends Common{
    public function _initialize(){
        parent::_initialize();
    }
    public function index(){

        $project = db('project')->alias("a")->join(config("database.prefix")."category c","a.catid = c.id","left")
            ->where("catid=16 and pstatus=1")
            ->field("a.*,c.catdir")
            ->limit(4)
            ->order("createtime desc")
            ->select();

        foreach($project as &$row){
            $row['leader'] = db('team')->where(array('id'=>$row['leader']))->find();
        }
        unset($row);
        // dump($project);
        $this->assign('project',$project);

        return $this->fetch();
    }
	
	public function senMsg(){
        $data = input('post.');
        $data['addtime'] = time();
        $data['ip'] = getIp();
        db('message')->insert($data);
        $result['status'] = 1;
        return $result;
    }
	public function callMe(){
        $data = input('post.');
        $data['addtime'] = time();
        $data['ip'] = getIp();
        db('call')->insert($data);
        $result['status'] = 1;
        return $result;
    }
	
}