<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"C:\phpStudy\WWW\MyProject\ijiaodian/app/home\view\article_show.html";i:1512727275;s:66:"C:\phpStudy\WWW\MyProject\ijiaodian/app/home\view\common_head.html";i:1512284646;s:68:"C:\phpStudy\WWW\MyProject\ijiaodian/app/home\view\common_footer.html";i:1512621640;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="zh-cn"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="zh-cn"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="zh-cn"> <!--<![endif]-->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="keywords" content="">
		<meta name="author" content="<?php echo $sys['key']; ?>" />
		<meta name="description" content="<?php echo $sys['des']; ?>">
		
		<meta name="renderer" content="webkit">
		
		<meta http-equiv="Cache-Control" content="no-siteapp"/>
		<link rel="icon" type="image/png" href="themes/sake/images/favicon.ico">
		
		<meta name="mobile-web-app-capable" content="yes">
		<link rel="icon" sizes="128x128" href="themes/sake/images/favicon.ico">
		
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="<?php echo $sys['title']; ?>"/>
		<link rel="apple-touch-icon-precomposed" href="themes/sake/images/favicon.ico">
		
		<meta name="msapplication-TileImage" content="themes/sake/images/favicon.ico">
		<meta name="msapplication-TileColor" content="#0e90d2">
		<title><?php echo $sys['name']; ?></title>
		<link href="/style/css/bootstrap.min.css" rel="stylesheet">
		<link href="/style/css/style.css" rel="stylesheet">

		<!--[if lt IE 9]>
		<script src="/style/js/html5shiv.min.js"></script>
		<script src="/style/js/respond.min.js"></script>
		<![endif]-->
		
		
		<script src="/style/js/jquery.min.js"></script>
		
	</head>
<body>
<div id="header">
	<!--<header>
		<div  class="w1200 clearfix">
			<p class="welcome">
				<i></i>官方微信
			</p>
			  <div class="user_info"><a href="/user.php"><i><img src="/style/picture/portrait.png"></i>13286007627</a><a href="user.php?act=logout" class="link-logout">[退出]</a></div>
		</div>
	</header>-->
	<div class="w1200 clearfix">
		<h1 class="logo">
			<a href="/"><img src="/style/picture/logo.png" alt="<?php echo $sys['key']; ?>"><?php echo $sys['key']; ?></a>
		</h1>
		<div class="pull-right">
			<p class="tel"><?php echo $sys['tel']; ?></p>
			<nav class="index_menu">
				<a href="/" class="active" >首页</a>
				
				<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']] ); ?>" title="<?php echo $vo['catname']; ?>"  <?php if($controller == $vo['catdir']): ?>class="active"<?php endif; ?>><?php echo $vo['catname']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                
				<!--<a href="case.php"  >案例 </a>
				
				<a href="service.php"  >服务 </a>
				<a href="about.php"  target="_blank" >介绍</a>
				<a href="contact.php"  >联系</a>-->
				
			</nav>
		</div>
	</div>
</div>

<link href="/style/css/article.css" rel="stylesheet">
<div id="article">
	<section class="goods_banner"></section>
	<div class="infoBox w1200 clearfix">
		<div class="col1">
			<div class="mt">
				<p><?php echo $info['title']; ?>
					<span>发布时间：<?php echo toDate($info['createtime'],'Y-m-d'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					文章来源： <a href="/about/2.html" target="_blank">重庆焦点科技网络有限公司</a></span>
				</p>
			</div>
			<div class="mc">
				<?php echo $info['content']; ?>

			</div>
		</div>
		<div class="col2">
			<div class="article_list">
				<div class="mt">优选文章</div>
				<ul class="mc">
					<li><a href="article.php?id=66">关于杭州市网站公安备案公告</a></li>
					<li><a href="article.php?id=71">“杭州浪浪浪水公园”体验一夏</a></li>
					<li><a href="article.php?id=70">建德采大洋枇杷、赏三江美景、捕江中鱼鲜</a></li>
					<li><a href="article.php?id=69">秀山美地农庄一日游</a></li>
					<li><a href="article.php?id=68">2016年会之《开创好声音》</a></li>
				</ul>
			</div>
			<div class="pro_list">
				<div class="mt">优选案例</div>
				<ul class="mc">
					<li>
						<a href="goods.php?id=288" target="_blank">
							<div class="img_box">
								<img src="picture/288_thumb_g_1490037271002.jpg"/>
							</div>
							<p class="title">北京宏天信业</p>
						</a>
					</li>
					<li>
						<a href="goods.php?id=294" target="_blank">
							<div class="img_box">
								<img src="picture/294_thumb_g_1490045373528.jpg"/>
							</div>
							<p class="title">精博康复辅具</p>
						</a>
					</li>
					<li>
						<a href="goods.php?id=292" target="_blank">
							<div class="img_box">
								<img src="picture/292_thumb_g_1490043625074.jpg"/>
							</div>
							<p class="title">南宇装饰工程</p>
						</a>
					</li>
					<li>
						<a href="goods.php?id=300" target="_blank">
							<div class="img_box">
								<img src="picture/300_thumb_g_1490129933981.jpg"/>
							</div>
							<p class="title">魅颜文化艺术</p>
						</a>
					</li>
					<li>
						<a href="goods.php?id=298" target="_blank">
							<div class="img_box">
								<img src="picture/298_thumb_g_1490058443168.jpg"/>
							</div>
							<p class="title">香道插花培训</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<ul class="honor w1200">
		<li class="honor1">
			<i></i>
			<div class="honor_box">
				<p class="title">优选保障</p>
				<p class="desc">服务商严选入驻</br>8项标准资质认证</p>
			</div>
		</li>
		<li class="honor2">
			<i></i>
			<div class="honor_box">
				<p class="title">合作保障</p>
				<p class="desc">大比稿交易模式</br>先比创意，再合作</p>
			</div>
		</li>
		<li class="honor3">
			<i></i>
			<div class="honor_box">
				<p class="title">服务保障</p>
				<p class="desc">品牌顾问1对1服务</br>业界专家全程跟进</p>
			</div>
		</li>
		<li class="honor4">
			<i></i>
			<div class="honor_box">
				<p class="title">质量保障</p>
				<p class="desc">全程质量把关</br>按步托管分段验收</p>
			</div>
		</li>
		<li class="honor5">
			<i></i>
			<div class="honor_box">
				<p class="title">售后保障</p>
				<p class="desc">雇主保障计划</br>交易问题，双倍赔付</p>
			</div>
		</li>
	</ul>
	<div class="message">
		<div class="w1200">
			<p class="message_tel">咨询热线：</br><?php echo $sys['tel']; ?></p>
			
			
			<form action="" method="post" name="formMsg" onSubmit="return submitMsgBoard(this)" id="message_form">
				<input type="text" name="mobile" class="message_phone" placeholder="请输入您的手机号码，15分钟回电您！" maxlength="11">
				<input type="text" name="content" class="message_content" placeholder="请用一句话描述您的需求">
				
				<input type="button" class="message-btn" id="buttonsend"  value="立即预约专业顾问">
			</form>
		</div>
	</div>
	<script>
    $('#buttonsend').click(function(){
        var phone = $('.message_phone').val();
        var content = $('.message_content').val();
        if($.trim(phone)==''){
            alert('手机号码不能为空');
            return false;
        }
        
        if($.trim(content)==''){
            alert('内容不能为空');
            return false;
        }
        $.post("<?php echo url('/home/index/senMsg'); ?>",{tel:phone,content:content},function(data){
            if(data.status==1){
                alert('留言成功！感谢您对我们的支持！');
                location.reload();
            }else{
                alert('留言失败！重新提交试试！');
            }
        })
    })
</script>
	<div class="footer">
		<div class="w1200">
			<div class="footer_main clearfix">
				<div class="main_box clearfix">
					<dl class="main_box1">
						<dt><span>立即咨询</span>网络服务行业解决方式</dt>
						<dd>电商解决方案</dd>
						<dd>专业网络营销部署咨询</dd>
						<dd>成功案例分享</dd>
						<dd>个性定制服务咨询</dd>
					</dl>
					<dl class="main_box2">
						<dt><span>加入我们</span>成为互联网服务的精英</dt>
						<dd>用心服务  帮助客户  积累自己</dd>
						<dd>成为建站工程师</dd>
						<dd>用我们专业的技术</dd>
						<dd>创造网站价值</dd>
					</dl>
				</div>
				<div class="content_box clearfix">
					<div class="qr_box">
						<img src="/style/picture/qr_code.jpg" alt="重庆焦点网络科技有限公司">
						<p>关注开创网络</br>官方微信</p>
					</div>
					<p class="tel_box">
						全国统一服务热线<span><?php echo $sys['tel']; ?></span>
					</p>
				</div>
			</div>
			<dl class="footer_hotpro clearfix">
				<dt>热门产品</dt>
				<dd><a href="" target="_blank">品牌网站定制</a></dd>
				<dd><a href="" target="_blank">营销型网站定制</a></dd>
				<dd><a href="" target="_blank">集团网站开发</a></dd>
				<dd><a href="" target="_blank">高端个性化网站</a></dd>
				<dd><a href="" target="_blank">企业官方商城开发</a></dd>
				<dd><a href="" target="_blank">互联网金融平台开发</a></dd>
				<dd><a href="" target="_blank">微信公众账号定制开发</a></dd>
				<dd><a href="" target="_blank">移动端定制开发</a></dd>
				<dd><a href="" target="_blank">WEB端软件开发</a></dd>
			</dl>
			<dl class="footer_friend clearfix">
				<dt>友情链接：</dt>
									<dd><a href="http://www.jpsb.cc" target="_blank" title="专业商标转让注册-浙江金牌商标">专业商标转让注册-浙江金牌商标</a></dd>
									<dd><a href="http://www.plakhl.com" target="_blank" title="体检疗养-杭州空军疗养院">体检疗养-杭州空军疗养院</a></dd>
									<dd><a href="http://www.zjxinshijue.com" target="_blank" title="新视觉-杭州化妆培训学校">新视觉-杭州化妆培训学校</a></dd>
									<dd><a href="http://www.zhang-ning.com.cn" target="_blank" title="张宁国际羽球俱乐部">张宁国际羽球俱乐部</a></dd>
									<dd><a href="http://www.zxdalongwan.com" target="_blank" title="临安浙西大龙湾风景区">临安浙西大龙湾风景区</a></dd>
									<dd><a href="http://www.maogp.com" target="_blank" title="毛戈平化妆学校官网">毛戈平化妆学校官网</a></dd>
									<dd><a href="http://www.dilong.cc" target="_blank" title="帝龙股份-装饰纸行业的上市企业">帝龙股份-装饰纸行业的上市企业</a></dd>
									<dd><a href="http://www.dtkjg.com" target="_blank" title="低碳生活-中国杭州低碳科技馆">低碳生活-中国杭州低碳科技馆</a></dd>
									<dd><a href="http://www.zjsrjk.com" target="_blank" title="健康科技连锁机构-浙江舒蕊健康">健康科技连锁机构-浙江舒蕊健康</a></dd>
									<dd><a href="http://www.hz-xhyc.com" target="_blank" title="西湖游船">西湖游船</a></dd>
									<dd><a href="http://www.shenlongchuan.com" target="_blank" title="临安神龙川风景区">临安神龙川风景区</a></dd>
									<dd><a href="http://www.naxianedu.com" target="_blank" title="浙江成人学历中心-纳贤教育">浙江成人学历中心-纳贤教育</a></dd>
									<dd><a href="http://www.hzlyy.com" target="_blank" title="体检疗养-杭州疗养院">体检疗养-杭州疗养院</a></dd>
									<dd><a href="http://www.huali99.com" target="_blank" title="杭州维修培训学校选-华力">杭州维修培训学校选-华力</a></dd>
									<dd><a href="http://www.xinhehui.com" target="_blank" title="专业短期理财平台-鑫合汇">专业短期理财平台-鑫合汇</a></dd>
									<dd><a href="http://zjkh.gtja.com:25000" target="_blank" title="国泰君安证券-我要开户">国泰君安证券-我要开户</a></dd>
									<dd><a href="http://www.eastking.com.cn" target="_blank" title="专注商标专利版权法律服务-北京东正知识产权">专注商标专利版权法律服务-北京东正知识产权</a></dd>
									<dd><a href="http://www.vlinkschina.com" target="_blank" title="中乡创-城乡产业投资运营商">中乡创-城乡产业投资运营商</a></dd>
									<dd><a href="http://www.haiyicare.com" target="_blank" title="上海海医-医院管理健康咨询">上海海医-医院管理健康咨询</a></dd>
									<dd><a href="http://www.macrosky.com.cn" target="_blank" title="金融行业软件开发-宏天信业股份">金融行业软件开发-宏天信业股份</a></dd>
									<dd><a href="http://www.sake-shop.cn" target="_blank" title="清酒烧酒总代理-上海华湘贸易">清酒烧酒总代理-上海华湘贸易</a></dd>
									<dd><a href="http://www.geofore.com" target="_blank" title="绩丰岩土-岩土应用领域服务商">绩丰岩土-岩土应用领域服务商</a></dd>
									<dd><a href="http://www.sannana.com" target="_blank" title="姗娜娜养生会所-全国连锁">姗娜娜养生会所-全国连锁</a></dd>
									<dd><a href="http://www.fanfanbuy.com" target="_blank" title="微仓-泛泛跨境海淘">微仓-泛泛跨境海淘</a></dd>
									<dd><a href="http://www.baile.cn" target="_blank" title="工程胶粘剂品牌-百乐商城">工程胶粘剂品牌-百乐商城</a></dd>
									<dd><a href="http://www.lhxsalt.com" target="_blank" title="绿色低钠盐-浙江蓝海星">绿色低钠盐-浙江蓝海星</a></dd>
									<dd><a href="http://www.cnlyjt.com" target="_blank" title="立元集团">立元集团</a></dd>
									<dd><a href="http://www.taihuyuan.com" target="_blank" title="山核桃-农家乐-笋干-临安太湖源生态风景区">山核桃-农家乐-笋干-临安太湖源生态风景区</a></dd>
									<dd><a href="http://www.hz-hxl.com" target="_blank" title="和兴佬-米制品行业领先品牌">和兴佬-米制品行业领先品牌</a></dd>
									<dd><a href="http://www.whflavor.com" target="_blank" title="维惠生物-让品味更美好">维惠生物-让品味更美好</a></dd>
									<dd><a href="http://www.liangchuang-china.cn" target="_blank" title="创业陪跑-两创中国">创业陪跑-两创中国</a></dd>
									<dd><a href="http://www.hz-klyz.com" target="_blank" title="康乐月子-新手妈妈的好帮手">康乐月子-新手妈妈的好帮手</a></dd>
									<dd><a href="http://www.meiyanyx.com" target="_blank" title="杭城首屈一指的写真摄影机构-魅颜">杭城首屈一指的写真摄影机构-魅颜</a></dd>
								<dd class="apply_friend"><a href="tencent://message/?uin=723788021&Site=小桔网络&Menu=yes" target="_blank">友情链接申请</a></dd>
			</dl>
			<footer class="copyright">
				地址：<?php echo $sys['ads']; ?></br>
				《中华人民共和国电信与信息服务增值业务经营许可证》&nbsp;备案号：<?php echo $sys['bah']; ?>&nbsp;&nbsp;Copyright&nbsp;©&nbsp;2002&nbsp;-&nbsp;2017&nbsp;&nbsp;焦点科技&nbsp;<a href="<?php echo $sys['url']; ?>" target="_blank"><?php echo $sys['url']; ?></a>&nbsp;&nbsp;&nbsp;版权所有
				<script type="text/javascript">
				var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1262639474'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1262639474%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));
				</script>
			</footer>
			<div class="footer_safe">
									<a title="浙江工商" target="_blank" href="http://zjnet.zjaic.gov.cn/sign/addSignOnline.action"><img alt="浙江工商" src="/style/picture/1487107957911309636.jpg" /></a>
									<a title="ICP备案" target="_blank" href="http://www.miibeian.gov.cn/state/outPortal/loginPortal.action"><img alt="ICP备案" src="/style/picture/1487107987869364712.jpg" /></a>
									<a title="诚信网站" target="_blank" href="https://credit.cecdc.com/CX20160309018022800197.html"><img alt="诚信网站" src="/style/picture/1487108039595575644.jpg" /></a>
									<a title="12377" target="_blank" href="http://www.12377.cn"><img alt="12377" src="/style/picture/1487108055977791178.jpg" /></a>
									<a title="公安网监" target="_blank" href="http://beian.gov.cn/portal/index"><img alt="公安网监" src="/style/picture/1487108080427872635.jpg" /></a>
									<a title="诚信龙头企业" target="_blank" href="https://credit.cecdc.com/CX20160530018022310666.html"><img alt="诚信龙头企业" src="/style/picture/1490673985757899703.jpg" /></a>
							</div>
		</div>
		
	</div>
</div>
<div id="float_right">
	<a class="online_open share_btn"></a>
	<a class="wechat_open share_btn"></a>
	<a class="go_top share_btn" id="gotop"></a>
	<div id="online_lx">
		<div id="olx_head">在线咨询<i id="online_close"></i></div>
		<ul id="olx_qq">
			<li><a href="http://wpa.qq.com/msgrd?v=3&uin=723788021&site=www.0632tc.net&menu=yes"><i></i>在线客服</a></li>
			<li><a href="http://wpa.qq.com/msgrd?v=3&uin=723788021&site=www.0632tc.net&menu=yes"><i></i>在线客服</a></li>
			<li><a href="http://wpa.qq.com/msgrd?v=3&uin=723788021&site=www.0632tc.net&menu=yes
"><i></i>在线客服</a></li>
		</ul>
		<div id="olx_tel">
			<i></i>联系电话
		</div>
		<p><?php echo $sys['tel']; ?></p>
	</div>
</div>
<div id="hidden_float">
	<div class="relative">
		<div class="qr_code inside_float">
			<p class="title">扫一扫关注我们</p>
			<img src="/style/picture/qr_code.jpg" alt="重庆焦点网络科技有限公司">
		</div>
		<div class="warning inside_float">
			<p class="title">开创网络温馨提示<i class="open_hidden_float">X</i></p>
			<p class="warning_text"></p>
		</div>
		<div class="black_bg"></div>
	</div>
</div>
</body>
<script type="text/javascript" src="/style/js/user.js"></script><script type="text/javascript" src="/style/js/jquery.json.js"></script><script type="text/javascript" src="/style/js/common.js"></script><script type="text/javascript" src="/style/js/transport_jquery.js"></script><script type="text/javascript" src="/style/js/utils.js"></script><script type="text/javascript" src="/style/js/jquery.gotop.js"></script>
<script type="text/javascript" src="/style/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="/style/js/plug.js"></script>

</html>