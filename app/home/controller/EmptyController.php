<?php
namespace app\home\controller;
use think\Db;
use think\Request;
use clt\Form;
class EmptyController extends Common{
    protected  $dao,$fields;
    public function _initialize()
    {
        parent::_initialize();
        $this->dao = db(DBNAME);
    }
    public function index(){
        if(DBNAME=='page'){
            $info = $this->dao->where('id',input('catId'))->find();
            $this->assign('info',$info);
			
            if($info['template']){
                $template = $info['template'];
            }else{
                $info['template'] = db('category')->where('id',$info['id'])->value('template_show');
				//p($info['id']) ;die;
                if($info['template']){
                    $template = $info['template'];
                }else{
                    $template = DBNAME.'_show';
                }
				
            }

            $banner_news = db('article')->where(array('catid'=>15,'posid'=>6))->order('createtime desc')->limit(4)->select();
            $this->assign('banner_news',$banner_news);

            //最新四篇文章
            $news_list = db('article')->where(array('catid'=>15))->order('createtime desc')->limit(4)->select();
            $this->assign('news_list',$news_list);
            return $this->fetch($template);
        }else{
            if(DBNAME=='picture'){
                $setup = db('field')->where(array('moduleid'=>3,'field'=>'group'))->value('setup');
                $setup=is_array($setup) ? $setup: string2array($setup);
                $options = explode("\n",$setup['options']);
                foreach($options as $r) {
                    $v = explode("|",$r);
                    $k = trim($v[1]);
                    $optionsarr[$k]['val'] = $v[0];
                    $optionsarr[$k]['key'] = $k;
                }
                $this->assign('options',$optionsarr);
            }
			if(DBNAME=='case'){
				$catid = input('catId');
                $cates = db('category')->where('parentid',4)->select();
				$info = db('category')->where('id',$catid)->find();
				
				//$subcate = db('category')->where('parentid',$catid)->select();
				$str = '';
                foreach($cates as $k=>$r) {
                    $str .= $r['id'].',';
                }
				if($catid==4){//一级
					$catid = array('in',trim($str,','));
				}elseif($info['parentid']!=4){//三级
					$catid = $info['parentid'];
				}
				$sub_cates = db('category')->where(array('parentid'=>$catid))->select();
				//p($cates);
                $this->assign('cates',$cates);
                $this->assign('sub_cates',$sub_cates);
				$map['catid'] = array('in',$info['arrchildid']);
            }else{
				$map['catid'] = input('catId');
			}
			
            //
			
			
            if(DBNAME=='team'){
                $donation = db('donation')->order('id desc')->paginate($this->pagesize);
                $dpage = $donation->render();
                $dlist = $donation->toArray();
                $this->assign('dlist',$dlist['data']);
                $this->assign('dpage',$dpage);
                $list = $this->dao->where($map)->order('listorder asc,createtime desc')->select();
                foreach ($list as $k=>$v){
                    $list_style = explode(';',$v['title_style']);
                    $list[$k]['title_color'] =$list_style[0];
                    $list[$k]['title_weight'] =$list_style[1];
                    $title_thumb = $v['thumb'];
                    $list[$k]['title_thumb'] = $title_thumb?__PUBLIC__.$title_thumb:__HOME__.'/images/portfolio-thumb/p'.($k+1).'.jpg';
                }
                $this->assign('list',$list);
            }else{

                $list=$this->dao->alias('a')
                    ->join(config('database.prefix').'category c','a.catid = c.id','left')
                    ->where($map)
                    ->field('a.*,c.catdir')
                    ->order('listorder asc,createtime desc')
                    ->paginate($this->pagesize);
				
                // 获取分页显示
                $page = $list->render();
                $list = $list->toArray();
                foreach ($list['data'] as $k=>$v){
                    $list['data'][$k]['controller'] = $v['catdir'];
                    $list_style = explode(';',$v['title_style']);
                    $list['data'][$k]['title_color'] =$list_style[0];
                    $list['data'][$k]['title_weight'] =$list_style[1];
                    $title_thumb = $v['thumb'];
                    $list['data'][$k]['title_thumb'] = $title_thumb?__PUBLIC__.$title_thumb:__HOME__.'/images/portfolio-thumb/p'.($k+1).'.jpg';
                } 
				
                $this->assign('list',$list['data']);
                $this->assign('page',$page);
            }

			$cattemplate = db('category')->where('id',input('catId'))->value('template_list');
			$template =$cattemplate ? $cattemplate : DBNAME.'_list';
            return $this->fetch($template);
        }
    }
    public function info(){
        $this->dao->where('id',input('id'))->setInc('hits');
        $info = $this->dao->where('id',input('id'))->find();
        $info['pic'] = $info['pic']?__PUBLIC__.$info['pic']:__HOME__."/images/sample-images/blog-post".rand(1,3).".jpg";
        $title_style = explode(';',$info['title_style']);
        $info['title_color'] = $title_style[0];
        $info['title_weight'] = $title_style[1];
        $title_thumb = $info['thumb'];
        $info['title_thumb'] = $title_thumb?__PUBLIC__.$title_thumb:__HOME__.'/images/sample-images/blog-post'.rand(1,3).'.jpg';
        if(DBNAME=='picture'){
            $pics = explode(':::',$info['pics']);
            foreach ($pics as $k=>$v){
                $info['pics'][$k] = explode('|',$v);
            }
        }
		if(DBNAME=='case'){
            $info['pics'] = explode(';',trim($info['images'],';'));
			
        }
		
        $this->assign('info',$info);
        if($info['template']){
			$template = $info['template'];
		}else{
			$cattemplate = db('category')->where('id',$info['catid'])->value('template_show');
			if($cattemplate){
				$template = $cattemplate;
			}else{
				$template = DBNAME.'_show';
			}
		}
        return $this->fetch($template);
    }

	
   
}