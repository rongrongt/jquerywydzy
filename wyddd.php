<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<title>网页大作业</title>
	<link rel="stylesheet" href="wydddb.css">
	<link rel="stylesheet" href="wyddd.css">
	<link rel="stylesheet" href="../../git-wydzy/lib/bootstrap.css">
	<link rel="stylesheet" href="libstyle/sliderstyle.css">
	<link rel="stylesheet" href="libstyle/pagination.css">
	<script src="require.js" async="true" data-main="main"></script>
	
	
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">小小田国际有限公司</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	<div id="job-box">
		<div class="job-box" >
			<div class="cont-job">
				网易云课堂微专业，帮助你掌握专业技能，令你求职或加薪多一份独特优势
				<a href="" class="go-job">立即查看 &gt;</a>
			</div>
			<div class="job-blank"></div>
			<div class="dele-job">
				<a href="" class="dele-tip " id="dele-tip-close"><i class="dele-xx"></i>不再提醒</a>
			</div>
		</div>
	</div>



	<div class="edu-bbacg">
		<div class="edu-produce">
			<ul class="edu-head">
				<li class="edu-pro-co-mg" ></li>
				<li class="edu-pro-co">网易教育产品部</li>
				<li class="pro-group">
					<span class="pro-gz" id="pro-group">+关注</span>
					<span class="post-has" id="post-has">
						<i class="pro-gz-post" id="pro-gz-post">已关注</i>|
						<i class="pro-cancel">取消</i>
					</span>
					<span class="pro-fan">粉丝</span>
					<span class="pro-ary" id="pro-ary">33</span>
					<?php
					$userName = $_SESSION['userName'];
					if($userName){
					?>
					<span class="username"><?php echo $userName?></span>
					<?php
					}
					?>
				</li>
				<div class="mask" id="mask"></div>
				<li id="pro-none-login">
					<form action="" id="edu-login">
						<div>
							<label for="" class="wy-hh">网易云课堂</label>
						</div>
						
						<div>
							
							<input name="user" type="text" placeholder="账号" class="input" id="wy-id">
							<a id="tipID" >请输入网易邮箱</a>
							<a href="" id="idErr">邮箱不合法</a>
						</div>
						<div>
							
							<input type="password" name="pass" placeholder="密码" class="input" id="wy-password">
							<a id="tippass">请输入密码</a>
							<a href="" id="passErr">密码错误</a>
						</div>
						<div class="btn-login-box" id="btn-login-box">
							<button type="submit"  class="btn-login" >登录</button>
						</div>
						<i class="login-xx" id="login-xx"></i>
					</form>
				</li>
			</ul>

			<ul class="edu-list">
				<li >
				
					<a href="http://open.163.com/" target="_blank" >
						网易公开课
					</a>
				</li>
				<li>	
					<a href="http://study.163.com/" target="_blank">
					云课堂
					</a>
				</li>
				<li class="edli-mooc">
					<a href="http://www.icourse163.org/" target="_blank">中国大学MOOC
					</a>
				</li>
				<form action="" class="edli-from">
					<input type="text" class="edli-big-input">
					<button class="edli-big"></button> 
				</form>

			</ul>
		</div>
	</div>
	<!--<div class="slider-banner" id="slider-banner">-->
	<div class="slider">
	  <div class="slider-container">
	    <div class="slider-wrapper">
	      
	      <div class="slide"> <img src="./wyimg/banner1.jpg" alt="jQuery Slider with CSS Transitions"> </div>
	      <div class="slide"> <img src="./wyimg/banner2.jpg" alt="jQuery Slider with CSS Transitions"> </div>
	      <div class="slide"> <img src="./wyimg/banner3.jpg" alt="jQuery Slider with CSS Transitions"> </div>
	    </div>
	  </div>
	</div>		
	</div>
	<div class="course-wrap-wrap">
		<div class="course-wrap">
			<div class="course-wrap-box">
				<div class="open-cours-img1 open-cours-img"></div>
				<div class="course-wrap-right">
					<h4>
						网易公开课
					</h4>
					<p>推出全国内外名校公开课科，名校老手认真视频红开课频道搭建视屏教学平台名校回到合肥的回复而符合或复合底方法否认王菲</p>
					<a href="" class="learn-more" target="_blank">了解更多></a>
				</div>
			</div>
			<div class="course-wrap-box">
				<div class="open-cours-img2 open-cours-img"></div>
				<div class="course-wrap-right">
					<h4>
						云课堂
					</h4>
					<p>推出全国内外名校公开课科，名校老手认真视频红开课频道搭建视屏教学平台名校回到合肥的回复而符合或复合发的随时奉节</p>
					<a href="" class="learn-more" target="_blank">了解更多></a>
				</div>
				
			</div>
			<div class="course-wrap-box">
				<div class="open-cours-img3 open-cours-img"></div>
				<div class="course-wrap-right">
					<h4>
						中国大学MOOC
					</h4>
					<p>推出全国内外名校公开课科，名校老手认真视频红开课频道搭建视屏教学平台名校回到合肥的回复而符合或复合底法人和防患未然烦人</p>
					<a href="" class="learn-more" target="_blank">了解更多></a>
				</div>
			</div>
		</div>
	</div>
	<div class="img-showss">
		<img src="wyimg/ggd1.jpg" alt="">
		<img src="wyimg/ggd1.jpg" alt="">
		<img src="wyimg/ggd1.jpg" alt="">
		<img src="wyimg/ggd1.jpg" alt="">
		
	</div>
	<div class="produce-bbig-wrap">
		
		<div class="produce-desi">
			<div class="pro-class" id="pro-class">
				<!-- <a href="" data-index="0" data-value="pd" class="current">产品设计</a>
				 <a href="" data-index="1" data-value="pl">编程语言</a> --> 
			</div>
			<div class="produce-desi-box" id="produce-desi-box">

				<div class="des-one-of">
					<!-- <div class="desof-cover">
						<a href="">
							<img src="./wyimg/02.png" alt="">
						</a>
					</div>
					<div class="noe-of-itr">
						<h6 class="des-title">
							<a href="">和秋叶一起学职场技能</a>
						</h6>			
						<b class="des-kinds">秋叶</b>
						<b class="des-buzz">
								<i class="rent"></i>
								<b>222</b>
						</b>
						<strong class="des-price">
							￥<b>2222</b>.00	
						</strong>		
					</div> -->
				</div>
			</div>
			<!-- <div id="page-box" class="page-box">
				<div class="pro-page">
					<a href="" class="page-jt page-pre">&lt;</a>
					<a href="" data-num="1" class="page-num">1</a>
					<a href="" data-num="2" class="current page-num">2</a>
					<a href="" data-num="3" class="page-num">3</a>
					<a href="" class="page-jt page-next">&gt;</a>
				</div>
			</div>	 -->
			<div class="M-box"></div>
		</div>


		<div class="produce-a1"></div>


		<div class="produce-sider">
			<div class="s-sider-top">
				<h4 class="s-prci-h">机构介绍</h4>
				<div class="s-pr-video">
					<p class="s-watch">观看下面的视频来了解吧：</p>
					<a href="#video-wrap" class="s-video-a" id="s-video-a">
						<img src="wyimg/ship.jpg" alt="video">
					</a>
					<div class="video-wrap-mask" id="video-wrap-mask">
					</div>
					<div class="video-wrap" id="video-wrap">
						<div class="video-align"></div>
						<div class="video-pad">
							<span>请观看下面的视频：</span>
							<i class="ship-xx" id="ship-xx-vied"></i>
							<video id="viedeoo" class="viedeoo" width="100%" height="100%" controls  src="http://mov.bn.netease.com/open-movie/nos/mp4/2014/12/30/SADQ86F5S_shd.mp4" >您的浏览器不支持viedeo播放</video>
						</div>
					</div>
					
				</div>
			</div>

			<div class="s-sider-bottom">
				<div>
					<h4 class="s-hot-h">最热排行榜</h4>
				</div>
				<div class="chart-list">
					<div class="hot-branch">
						<div class="hbranch-img">
							<a href="">
								<img src="wyimg/slider.jpg" alt="">
							</a>
						</div>
						<div class="ch-list-box">
							<h6 class="ch-list-name">
								<a href="" >舞曲舞曲去uquu舞曲舞曲舞曲㐏</a>
							</h6>
							<b class="s-renq">
								<i class="rent"></i>21233
							</b>
						</div>
					</div>
					<div class="hot-branch">
						<div class="hbranch-img">
							<a href="">
								<img src="wyimg/slider.jpg" alt="">
							</a>
						</div>
						<div class="ch-list-box">
							<h6 class="ch-list-name">
								<a href="" >舞曲舞曲去uquu舞曲舞曲舞曲㐏</a>
							</h6>
							<b class="s-renq">
								<i class="rent"></i>21233
							</b>
						</div>
					</div>
					<div class="hot-branch">
						<div class="hbranch-img">
							<a href="">
								<img src="wyimg/slider.jpg" alt="">
							</a>
						</div>
						<div class="ch-list-box">
							<h6 class="ch-list-name">
								<a href="" >舞曲舞曲去uquu舞曲舞曲舞曲㐏</a>
							</h6>
							<b class="s-renq">
								<i class="rent"></i>21233
							</b>
						</div>
					</div>
					<div class="hot-branch">
						<div class="hbranch-img">
							<a href="">
								<img src="wyimg/slider.jpg" alt="">
							</a>
						</div>
						<div class="ch-list-box">
							<h6 class="ch-list-name">
								<a href="" >舞曲舞曲去uquu舞曲舞曲舞曲㐏</a>
							</h6>
							<b class="s-renq">
								<i class="rent"></i>21233
							</b>
						</div>
					</div>
					<div class="hot-branch">
						<div class="hbranch-img">
							<a href="">
								<img src="wyimg/slider.jpg" alt="">
							</a>
						</div>
						<div class="ch-list-box">
							<h6 class="ch-list-name">
								<a href="" >舞曲舞曲去uquu舞曲舞曲舞曲㐏</a>
							</h6>
							<b class="s-renq">
								<i class="rent"></i>21233
							</b>
						</div>
					</div>
					<div class="hot-branch">
						<div class="hbranch-img">
							<a href="">
								<img src="wyimg/slider.jpg" alt="">
							</a>
						</div>
						<div class="ch-list-box">
							<h6 class="ch-list-name">
								<a href="" >舞曲舞曲去uquu舞曲舞曲舞曲㐏</a>
							</h6>
							<b class="s-renq">
								<i class="rent"></i>21233
							</b>
						</div>
					</div>

				</div>	
			</div>
		</div>

	</div>





</body>
</html>

<!--
<div class="produce-desi">
			<div class="pro-class" id="pro-class">
			</div>
			<div class="produce-desi-box" id="produce-desi-box">

			</div>
			<div id="page-box" class="page-box">
			</div>	
		</div>



<script src="jquery.js"></script>
	<script src="jquerycookie.js"></script>
	<script src="wyddd.js"></script>


<div class="off-banner1"><img src="wyimg/banner1.jpg" alt=""></div>
		<div class="off-banner2"><img src="wyimg/banner2.jpg" alt=""></div>
		<div class="off-banner3"><img src="wyimg/banner3.jpg" alt=""></div>-->