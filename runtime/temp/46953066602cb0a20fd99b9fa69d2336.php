<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"C:\phpStudy\WWW\MyProject\ijiaodian/app/home\view\index_index.html";i:1512620354;s:66:"C:\phpStudy\WWW\MyProject\ijiaodian/app/home\view\common_head.html";i:1512284646;s:68:"C:\phpStudy\WWW\MyProject\ijiaodian/app/home\view\common_footer.html";i:1512621640;}*/ ?>
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

<div id="index_banner">
	<ul class="home_ad">
	 	
		<li><a href="" target="_blank" style="background:url(/style/images/1504030086928596605.jpg) no-repeat center;"></a></li>
	 	
		<li><a href="" target="_blank" style="background:url(/style/images/1504030076737444884.jpg) no-repeat center;"></a></li>
	 	
		<li><a href="" target="_blank" style="background:url(/style/images/1504030050609976343.jpg) no-repeat center;"></a></li>
	 	</ul>
</div>
<div id="main">
	<div class="core_service">
		<div class="w1200">
			<p class="mt">核心服务<span>成立于2000年元月/服务江浙沪5000余家企事业单位/专注专业的互联网服务团队</span></p>
			<ul class="mc">
				<li class="active card">
					<div class="card_box">
						<div class="card_title">
							<div class="content">
								<img src="/style/picture/core_service.png" class="img_noactive">
								<img src="/style/picture/core_service_active.png" class="img_active">
								<p>网络基础业务<span>步入信息化阶段的必需</span></p>
							</div>
						</div>
						<div class="card_content card_content_nodesc">
							<ul class="content">
								<li>
									<h2 class="title">域名注册</h2>
								</li>
								<li>
									<h2 class="title">企业邮箱</h2>
								</li>
								<li>
									<h2 class="title">虚拟主机</h2>
								</li>
								<li>
									<h2 class="title">阿里云ECS</h2>
								</li>
							</ul>
						</div>
						<div class="card_content card_content_desc">
							<ul class="content">
								<li>
									<h2 class="title">域名注册</h2>
									<div class="desc">好记的域名才利于传播，开创为您挑选的域名尽量简短，符合企业的需求。</div>
								</li>
								<li>
									<h2 class="title">企业邮箱</h2>
									<div class="desc">阿里邮箱/网易邮箱/盈世邮箱/263企业邮箱，各类专业企业邮箱按需购买、中小企业首选</div>
								</li>
								<li>
									<h2 class="title">虚拟主机</h2>
									<div class="desc">专注代理阿里云虚拟主机，稳居国内市场NO.1，99.999%数据、服务可靠性，免费快速域名/公安备案</div>
								</li>
								<li>
									<h2 class="title">阿里云ECS</h2>
									<div class="desc">为客户代购代维可弹性伸缩、安全稳定、简单易用的计算服务高性能云服务器</div>
								</li>
							</ul>
							<a href="tencent://message/?uin=723788021&Site=hzkc&Menu=yes" target="_blank">立即咨询</a>
						</div>
					</div>
				</li>
				<li class="card">
					<div class="card_box">
						<div class="card_title">
							<div class="content">
								<img src="/style/picture/core_service.png" class="img_noactive">
								<img src="/style/picture/core_service_active.png" class="img_active">
								<p>高端网站开发<span>量身定制专属您的网站</span></p>
							</div>
						</div>
						<div class="card_content card_content_nodesc">
							<ul class="content">
								<li>
									<h2 class="title">企业品牌官网</h2>
								</li>
								<li>
									<h2 class="title">营销型网站</h2>
								</li>
								<li>
									<h2 class="title">个性化定制</h2>
								</li>
								<li>
									<h2 class="title">政府/事业门户</h2>
								</li>
							</ul>
						</div>
						<div class="card_content card_content_desc">
							<ul class="content">
								<li>
									<h2 class="title">企业品牌官网</h2>
									<div class="desc">一对一解决企业建站需求,网站安全,终身维护,企业完美网络平台形象的设计者</div>
								</li>
								<li>
									<h2 class="title">营销型网站</h2>
									<div class="desc">将营销的思想、方法和技巧融入到网站策划、设计与制作中的网站，成为企业销售的利器。</div>
								</li>
								<li>
									<h2 class="title">个性化定制</h2>
									<div class="desc">海量经典行业企业实践经验,专注高质量网站建设服务,我们只做精品</div>
								</li>
								<li>
									<h2 class="title">政府/事业门户</h2>
									<div class="desc">利用网络提高政府工作的透明度，办事效率及政府工作人员的信息化水平</div>
								</li>
							</ul>
							<a href="tencent://message/?uin=723788021&Site=hzkc&Menu=yes" target="_blank">立即咨询</a>
						</div>
					</div>
				</li>
				<li class="card">
					<div class="card_box">
						<div class="card_title">
							<div class="content">
								<img src="/style/picture/core_service.png" class="img_noactive">
								<img src="/style/picture/core_service_active.png" class="img_active">
								<p>WAP微信开发<span>移动应用是发展的未来</span></p>
							</div>
						</div>
						<div class="card_content card_content_nodesc">
							<ul class="content">
								<li>
									<h2 class="title">手机网站</h2>
								</li>
								<li>
									<h2 class="title">自适应网站</h2>
								</li>
								<li>
									<h2 class="title">微信定制开发</h2>
								</li>
								<li>
									<h2 class="title">分享分销开发</h2>
								</li>
							</ul>
						</div>
						<div class="card_content card_content_desc">
							<ul class="content">
								<li>
									<h2 class="title">手机网站</h2>
									<div class="desc">专业手机网站设计，一键呼叫、一键导航，地图定位等全新功能，打造移动互联网营销利器</div>
								</li>
								<li>
									<h2 class="title">自适应网站</h2>
									<div class="desc">一种设计兼容所有尺寸的屏幕，方便快捷的解决多设备显示适应问题 </div>
								</li>
								<li>
									<h2 class="title">微信定制开发</h2>
									<div class="desc">满足企业对微信公众号各类需求, 帮助企业快速实现全新的公众号服务平台</div>
								</li>
								<li>
									<h2 class="title">分享分销开发</h2>
									<div class="desc">移动互联网时代，碎片时间分享的倍增力量，通过分享/分销的新模式增加盈利</div>
								</li>
							</ul>
							<a href="tencent://message/?uin=723788021&Site=hzkc&Menu=yes" target="_blank">立即咨询</a>
						</div>
					</div>
				</li>
				<li class="card">
					<div class="card_box">
						<div class="card_title">
							<div class="content">
								<img src="/style/picture/core_service.png" class="img_noactive">
								<img src="/style/picture/core_service_active.png" class="img_active">
								<p>电商平台开发<span>用低成本搭建高品质商城</span></p>
							</div>
						</div>
						<div class="card_content card_content_nodesc">
							<ul class="content">
								<li>
									<h2 class="title">BC/BBC开发</h2>
								</li>
								<li>
									<h2 class="title">垂直行业平台</h2>
								</li>
								<li>
									<h2 class="title">金融众筹平台</h2>
								</li>
								<li>
									<h2 class="title">综合资讯门户</h2>
								</li>
							</ul>
						</div>
						<div class="card_content card_content_desc">
							<ul class="content">
								<li>
									<h2 class="title">BC/BBC开发</h2>
									<div class="desc">为中小企业的销售业务开辟新的互联网渠道，助力打通上下游渠道产业链</div>
								</li>
								<li>
									<h2 class="title">垂直行业平台</h2>
									<div class="desc">全网平台搭建，多触点连接用户，打通各垂直行业渠道的方案</div>
								</li>
								<li>
									<h2 class="title">金融众筹平台</h2>
									<div class="desc">为有梦想、有创意、有项目的朋友开发一站式综合众筹平台,协助实现您的创业梦想</div>
								</li>
								<li>
									<h2 class="title">综合资讯门户</h2>
									<div class="desc">专业的信息平台网站开发制作，适用行业门户、企业门户、综合信息平台</div>
								</li>
							</ul>
							<a href="tencent://message/?uin=723788021&Site=hzkc&Menu=yes" target="_blank">立即咨询</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="projects_development">
		<p class="mt">正在开发的项目<span>品质承载重托/17年的建站经验帮助客户拓展思路规划架构</span></p>
		<ul class="mc w1200">
			
			 	
			
			<li >
				<p class="state">进行中</p>
				<p class="title">跨境海淘微仓批发平台开发</p>
				<p class="desc">项目简述：平台为国内卖家和各大电商平台提供包括海外正品货源采购、仓储管理、订单处理、配货包装、物流配送的一站式服务，卖家可通过微信迅速下单建仓，减少成本，方便快速。</p>
				<div class="author">
					<img src="/style/picture/1487643759912390013.png" alt="袁林荣">
					<div class="author_main">
						<p class="name">袁林荣<span>项目策划经理</span></p>
						<p class="profile">十多年网络营销经验服务于杭城上千家大中小企业，特别善于策划如何保持企业品牌形象的同时运用营销技巧，让企业在目标市场占有独特位置。</p>
					</div>
					<a class="consultation" href="tencent://message/?uin=723788021&Site=小桔网络&Menu=yes" target="_blank">立即咨询</a><a class="get_programme" href="tencent://message/?uin=723788021&Site=小桔网络&Menu=yes" target="_blank">具体方案</a>
				</div>
			</li>
			
			 	
			
			<li class="mr_0">
				<p class="state">进行中</p>
				<p class="title">微信分销返利平台项目</p>
				<p class="desc">项目简述：科技改变生活，移动带来更过便捷，为了更好地展现企业的前沿营销理念，让消费者成为传播的爆点，快速建立以消费者为主体的分销系统渠道，为努力打造行业内一流平台奠定基础。</p>
				<div class="author">
					<img src="/style/picture/1487814038271611651.jpg" alt="应洁">
					<div class="author_main">
						<p class="name">应洁<span>项目策划</span></p>
						<p class="profile">从事网络营销实践近8年，为近百家企业提供全面的网络营销策划方案，善于倾听客户的需求，帮助客户解决问题，为客户打造一个赚钱的网站。</p>
					</div>
					<a class="consultation" href="tencent://message/?uin=723788021&Site=应洁&Menu=yes" target="_blank">立即咨询</a><a class="get_programme" href="tencent://message/?uin=723788021&Site=应洁&Menu=yes" target="_blank">具体方案</a>
				</div>
			</li>
			
			 	
			
			<li >
				<p class="state">进行中</p>
				<p class="title">健康管理会员制平台开发</p>
				<p class="desc">项目简述：平台依托雄厚的资金实力和医院的合作、有专业的母婴护理团队、全球尖端的基因检测、细胞检测技术，贴心的客户服务体系，为会员提供高端健康科技管理、围绕养、健、智、产等精准健康方面的服务。</p>
				<div class="author">
					<img src="/style/picture/1487719590104271283.jpg" alt="金文勇">
					<div class="author_main">
						<p class="name">金文勇<span>项目策划</span></p>
						<p class="profile">2001年踏入互联网行业，善于与人沟通，做事严谨细心、稳重，把客户当作自己的良师益友，共同进步，共同发展。曾合作过天堂伞. 工联大厦等客户。</p>
					</div>
					<a class="consultation" href="tencent://message/?uin=924101049&Site=金文勇&Menu=yes" target="_blank">立即咨询</a><a class="get_programme" href="tencent://message/?uin=924101049&Site=金文勇&Menu=yes" target="_blank">具体方案</a>
				</div>
			</li>
			
			 	
			
			<li class="mr_0">
				<p class="state">进行中</p>
				<p class="title">服饰行业内部批发采购平台开发</p>
				<p class="desc">项目简述：随着互联网的快速发展,客户对服装的需求将不再单一化,服装批发市场行业也将面临着重要的转型。搭建一个专属于自己的电子商务平台,让天下的服装生意不再难做。</p>
				<div class="author">
					<img src="/style/picture/1487813634338558806.jpg" alt="方玮玲">
					<div class="author_main">
						<p class="name">方玮玲<span>项目策划</span></p>
						<p class="profile">高级产品营销策略讲师，具备熟练的产品营销策划实战及管理经验，曾代表阿里/搜狗等互联网著名公司向中小企业传授及分享互联网产品。</p>
					</div>
					<a class="consultation" href="tencent://message/?uin=723788021&Site=小桔网络&Menu=yes" target="_blank">立即咨询</a><a class="get_programme" href="tencent://message/?uin=723788021&Site=小桔网络&Menu=yes" target="_blank">具体方案</a>
				</div>
			</li>
			
					
			
			
		</ul>
	</div>
	<div class="customer">
		<div class="w1200">
			<p class="mt">我们&amp;客户<span>We are together</span></p>
			<div class="mc clearfix">
				<div class="customer_left">
					<p>成立于2000年元月，专注为客户提供品牌网站建设开发，高端网站网页设计，营销型网站建设，电商平台BC，BBC开发，移动端微信公众账号开发等，为客户打造一个有故事有吸引力有影响力的网站，协助客户更精准的利用互联网工具拓展业务渠道</p>
					<a href="tencent://message/?uin=723788021&Site=%E6%96%B9%E7%8E%AE%E7%8E%B2&Menu=yes" target="_blank">立即咨询</a>
				</div>
				<ul class="customer_right" id="customer_box">									
				
				    	
					<li class="append_box">
						<img src="/style/picture/1490119815161907177.jpg">
						<div class="hover"><p class="name">临安天城机电</p>
						<a href="http://hztcjd.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490136830025625775.jpg">
						<div class="hover"><p class="name">强生企业</p>
						<a href="http://zjqs.cn/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490296600322934533.jpg">
						<div class="hover"><p class="name">合力叉车</p>
						<a href="http://hzhlcc.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490680138163863772.jpg">
						<div class="hover"><p class="name">南宇装饰</p>
						<a href="http://nanyuzx.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487725003776949993.jpg">
						<div class="hover"><p class="name">姗娜娜足浴连锁</p>
						<a href="http://sannana.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487284803026878382.jpg">
						<div class="hover"><p class="name">圣山集团</p>
						<a href="http://www.82170005.com" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487723997838694603.jpg">
						<div class="hover"><p class="name">创新生物</p>
						<a href="" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490314611237865492.jpg">
						<div class="hover"><p class="name">浙江安地</p>
						<a href="http://andidesign.com.cn/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487725026547460581.jpg">
						<div class="hover"><p class="name">神龙川风景旅游</p>
						<a href="" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490678099964537187.jpg">
						<div class="hover"><p class="name">两创中国</p>
						<a href="http://liangchuang-china.cn/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490678506685305329.jpg">
						<div class="hover"><p class="name">名庄纺织品</p>
						<a href="" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490679321005416912.jpg">
						<div class="hover"><p class="name">康乐月子</p>
						<a href="http://hz-klyz.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490764448669898981.jpg">
						<div class="hover"><p class="name">小匠网</p>
						<a href="http://www.dianshang999.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487724911217860148.jpg">
						<div class="hover"><p class="name">帝龙股份</p>
						<a href="http://dilong.cc/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487724942742291401.jpg">
						<div class="hover"><p class="name">绩丰岩土股份</p>
						<a href="http://geofore.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490680048777890810.jpg">
						<div class="hover"><p class="name">魅颜映像</p>
						<a href="http://meiyanxz.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487721413512426794.jpg">
						<div class="hover"><p class="name">立元集团</p>
						<a href="http://cnlyjt.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490136813560234625.jpg">
						<div class="hover"><p class="name">海通印务</p>
						<a href="http://hzhaitong.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487724044453348916.jpg">
						<div class="hover"><p class="name">三杭控股集团</p>
						<a href="sanhangholding.com" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487721688213727325.jpg">
						<div class="hover"><p class="name">李宝赢堂</p>
						<a href="http://lbyt.net.cn/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490678630421297231.jpg">
						<div class="hover"><p class="name">国泰君安</p>
						<a href="" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490678937139731554.jpg">
						<div class="hover"><p class="name">环境集团</p>
						<a href="http://cnlandfill.net/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490679112184980803.jpg">
						<div class="hover"><p class="name">金通汽修</p>
						<a href="http://www.hzjtxl.com.cn/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490678276572983429.jpg">
						<div class="hover"><p class="name">北京宏天信业</p>
						<a href="" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490678812246818722.jpg">
						<div class="hover"><p class="name">阁中园家居</p>
						<a href="http://gzy99.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490119686889601818.jpg">
						<div class="hover"><p class="name">杭氧换热</p>
						<a href="http://hzhyhr.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490679499237643858.jpg">
						<div class="hover"><p class="name">西湖游船</p>
						<a href="http://hz-xhyc.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487725044062147899.jpg">
						<div class="hover"><p class="name">山外山菜馆</p>
						<a href="http://shanwaishan.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487721453598241170.jpg">
						<div class="hover"><p class="name">广济集团</p>
						<a href="http://guangjigroup.cn/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487724877310431785.jpg">
						<div class="hover"><p class="name">蚕之都丝绸</p>
						<a href="http://hzczd.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1490319719292832221.jpg">
						<div class="hover"><p class="name">中景园林</p>
						<a href="http://zjszyl.com/" target="_blank">点击查看</a>
						<em></em></div>
					</li>
						
					<li class="append_box">
						<img src="/style/picture/1487721240105734156.jpg">
						<div class="hover"><p class="name">浙江金牌商标</p>
						<a href="http://www.jp.cc" target="_blank">点击查看</a>
						<em></em></div>
					</li>
										
					<li class="change_button">
						<a id="change_customer">
							<img src="/style/picture/circle_change.png">
							<p>换一批</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="case w1200">
		<div class="mt">
			案例&amp;作品
			<p>满足客户广泛的业务需求，帮助企业快速搭建高端安全的个性化站点平台</br><span>品牌   电商  个性  平台</span></p>
		</div>
		<ul class="mc">
		 	
			
			<?php $result = db("case")->alias("a")->join("clt_category c","a.catid = c.id","left")
            ->where("")
            ->field("a.*,c.catdir")
            ->limit(12)
            ->order("listorder asc,createtime desc")
            ->select();foreach ($result as $k=>$vo):?>
			<li class="mr_0">
				<div class="img_box">
					<img src="/public<?php echo $vo['thumb']; ?>" alt="<?php echo $vo['title']; ?>">
				</div>
				<div class="case_info">
					<p class="title"><?php echo $vo['title']; ?></p>
					<p class="label"><span>服务行业</span><?php echo $vo['hangye']; ?></p>
				</div>
				<div class="case_action">
					<a href="<?php echo url('home/'.$vo['catdir'].'/info',array('id'=>$vo['id'],'catId'=>$vo['catid'])); ?>" class="go_inside">查看价格</a>
					<a href="http://wpa.qq.com/msgrd?v=3&uin=723788021&site=www.ijiaodian,cn&menu=yes" target="_blank" class="go_plan">方案策划</a>
				</div>
			</li>
			<?php endforeach ?>
			 	
						
		</ul>
	</div>
	<div class="process">
			<p class="mt">周期&amp;流程<span>严谨的周期部署，省心的服务流程彰显专业</span></p>
			<div class="mc">
				<ul class="w1200">
					<li class="process1">
						<i></i>
						<p class="title">明确意向</p>
						<p class="desc">明确合作意向，明确项目需求.</p>
					</li>
					<li class="process2">
						<i></i>
						<p class="title">费用&amp;周期</p>
						<p class="desc">明确项目设计风格、周期及费用.</p>
					</li>
					<li class="process3">
						<i></i>
						<p class="title">签订协议</p>
						<p class="desc">签订合作协议并支付相应款项.</p>
					</li>
					<li class="process4">
						<i></i>
						<p class="title">页面风格设计</p>
						<p class="desc">5-7个工作日，设计稿修改确认.</p>
					</li>
					<li class="process5">
						<i></i>
						<p class="title">程序开发</p>
						<p class="desc">按需求程序开发并完成数据上传.</p>
					</li>
					<li class="process6">
						<i></i>
						<p class="title">验收成果</p>
						<p class="desc">项目验收合格，支付尾款交付成果.</p>
					</li>
					<li class="process7">
						<i></i>
						<p class="title">售后服务</p>
						<p class="desc">期内维护，培训指导并定期优化.</p>
					</li>
					<a href="tencent://message/?uin=723788021&Site=小桔网络&Menu=yes" target="_blank">立即咨询</a>
				</ul>
			</div>
	</div>
	<div class="plan w1200">
			<p class="mt">策划&amp;服务<span>全方位的策划服务助企业更轻松，更便捷</span></p>
			<ul class="mc">
				<li class="plan1">
					<i></i>
					<p class="title">基础业务</p>
					<p class="desc">
						<a href="/home/case/index/catId/4.html">域名申请</a>
						<a href="/home/case/index/catId/4.html">企业邮</a>
						<a href="/home/case/index/catId/4.html" class="br_0">虚拟主机</a>
						<a href="/home/case/index/catId/4.html">阿里云ECS</a>
						<a href="/home/case/index/catId/4.html">境外空间</a>
						<a href="/home/case/index/catId/4.html" class="br_0">域名/公安备案</a>
					</p>
				</li>
				<li class="plan2">
					<i></i>
					<p class="title">网站建设</p>
					<p class="desc">
						<a href="/category.php?id=219">标准化网站</a>
						<a href="/search.php">企业官网</a>
						<a href="/category.php?id=220" class="br_0">定制开发</a>
						<a href="/category.php?id=234">B2C电商</a>
						<a href="/category.php?id=234">BBC电商</a>
						<a href="" class="br_0">众筹网站开发</a>
					</p>
				</li>
				
				<li class="plan3">
					<i></i>
					<p class="title">UI视觉设计</p>
					<p class="desc">
						<a href="/home/case/index/catId/4.html">UI界面设计</a>
						<a href="/home/case/index/catId/4.html">交互设计</a>
						<a href="/home/case/index/catId/4.html" class="br_0">LOGO设计</a>
						<a href="/home/case/index/catId/4.html">图标设计</a>
						<a href="/home/case/index/catId/4.html">软件界面设计</a>
						<a href="/home/case/index/catId/4.html" class="br_0">淘宝页面设计</a>
					</p>
				</li>
				<li class="plan4">
					<i></i>
					<p class="title">WAP/微信开发</p>
					<p class="desc">
						<a href="/home/case/index/catId/4.html">移动应用开发</a>
						<a href="/home/case/index/catId/4.html">微信定制开发</a>
						<a href="/home/case/index/catId/4.html" class="br_0">手机网站</a>
						<a href="/home/case/index/catId/4.html">微信营销软件</a>
						<a href="/home/case/index/catId/4.html">公众号托管</a>
						<a href="/home/case/index/catId/4.html" class="br_0">微信内容策划</a>
					</p>
				</li>
				<li class="plan5">
					<i></i>
					<p class="title">WEB软件开发</p>
					<p class="desc">
						<a href="/home/case/index/catId/4.html">客户管理</a>
						<a href="/home/case/index/catId/4.html">销售管理</a>
						<a href="/home/case/index/catId/4.html" class="br_0">进销存</a>
						<a href="/home/case/index/catId/4.html">企业综合管理系统</a>
						<a href="/home/case/index/catId/4.html" class="br_0">移动工作平台开发</a>
					</p>
				</li>
				<li class="plan6">
					<i></i>
					<p class="title">网络营销运营</p>
					<p class="desc">
						<a href="/home/case/index/catId/4.html">微信QQ广告营销</a>
						<a href="/home/case/index/catId/4.html">网站代运营</a>
						<a href="/home/case/index/catId/4.html" class="br_0">搜狗竞价</a>
						<a href="/home/case/index/catId/4.html">软文发布</a>
						<a href="/home/case/index/catId/4.html">百度推广</a>
						<a href="/home/case/index/catId/4.html" class="br_0">云安全维护服务</a>
					</p>
				</li>
			</ul>
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