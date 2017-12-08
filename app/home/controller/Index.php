<?php
namespace app\home\controller;
class Index extends Common{
    public function _initialize(){
        parent::_initialize();
    }
    public function index(){
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