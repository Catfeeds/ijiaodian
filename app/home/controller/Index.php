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
        $input = input('get.');
        if($input['act'] == 'chagecase'){
           $json = file_get_contents('./style/images/case.json');
           $jlist = json_decode($json,true);
           $returnListId = array();
           foreach ($jlist as $key => $value) {

            $returnListId[$key] = $value['ad_id'];
        }
        $ids = array_unique($returnListId);
        $ids = array_rand($ids,32);
        $putlist = array();
        foreach($ids as $key=>$value){
            $putlist[] = $jlist[$key];
        }
        shuffle($putlist);
        echo json_encode($putlist);
        die;
    }

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

    function http_get_json($url){
        $ch = curl_init(); 
        $timeout = 5; 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
        $contents = curl_exec($ch); 
        curl_close($ch); 
        return $contents;
    }
	
}