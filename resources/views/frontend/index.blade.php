<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>新闻企业之家</title>

<!-- Mobile Specific
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" type="text/css" href="style1/css/style.css">
<link rel="stylesheet" type="text/css" href="style1/css/boxed.css" id="layout">
<link rel="stylesheet" type="text/css" href="style1/css/colors/green.css" id="colors">

<!-- Java Script
================================================== -->
<script src="style1/js/jquery.min.js"></script>
<script src="style1/js/custom.js"></script>
<script src="style1/js/selectnav.js"></script>
<script src="style1/js/flexslider.js"></script>
<script src="style1/js/twitter.js"></script>
<script src="style1/js/tooltip.js"></script>
<script src="style1/js/effects.js"></script>
<script src="style1/js/fancybox.js"></script>
<script src="style1/js/carousel.js"></script>
<script src="style1/js/isotope.js"></script>

<!-- Styles Switcher
================================================== -->
<link rel="stylesheet" type="text/css" href="style1/css/switcher.css">
<script src="style1/js/switcher.js"></script>

</head>
<body>

<!-- Wrapper Start -->
<div id="wrapper">


<!-- Header
================================================== -->

<!-- 960 Container -->
<div class="container ie-dropdown-fix">

	<!-- Header -->
	<div id="header">

		<!-- Logo -->
		<div class="eight columns">
			<div id="logo">
				<a href="#"><img src="style1/images/logo.png" alt="logo" /></a>
			
				<div class="clear"></div>
			</div>
		</div>

		<!-- Social / Contact -->
		<div class="eight columns">
			
			<!-- Social Icons -->
			<ul class="social-icons">
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="twitter"><a href="#">Twitter</a></li>
				<li class="dribbble"><a href="#">Dribbble</a></li>
				<li class="linkedin"><a href="#">LinkedIn</a></li>
				<li class="pintrest"><a href="#">Pintrest</a></li>
			</ul>
			
			<div class="clear"></div>
			
			<!-- Contact Details -->
			<div id="contact-details">
				<ul>
					<li><i class="mini-ico-envelope"></i><a href="#">support@centum.com</a></li>
					<li><i class="mini-ico-user"></i>+48 880 450 120</li>
				</ul>
			</div>

		</div>

	</div>
	<!-- Header / End -->
	
	<!-- Navigation -->
	<div class="sixteen columns">

		<div id="navigation">
			<ul id="nav">
                                @foreach ($index_nav_resources as $k=>$v)
				<li><a href="{{$v->nav_url}}">{{$v->nav_name}}</a>
				  </li>
                                  @endforeach

		</ul>

			<!-- Search Form -->
			<div class="search-form">
				<form method="get" action="#">
					<input type="text" class="search-text-box" />
				</form>
			</div>

		</div> 
		<div class="clear"></div>
		
	</div>
	<!-- Navigation / End -->

</div>
<!-- 960 Container / End -->


<!-- Content
================================================== -->

<!-- 960 Container -->
<div class="container">

	<!-- Flexslider -->
	<div class="sixteen columns">
		<section class="slider">
			<div class="flexslider home">
				<ul class="slides">
				@foreach($index_carousel_resources as $k=>$v)
					<li>
                                            
                                            <a href="{{$v->url}}"><img src="{{$v->img}}" alt="" style="height:400px;width:940px"/></a>
						<div class="slide-caption">
							<h3>{{$v->img_title}}</h3>
							<p>{{$v->img_content}}</p>
						</div>
					</li>
                                        @endforeach
					
					
				</ul>
			</div>
		</section>
  	</div>
	<!-- Flexslider / End -->
	
</div>
<!-- 960 Container / End -->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>

<!-- 960 Container -->
<div class="container">

	<div class="sixteen columns">
		<!-- Headline -->
		<div class="headline no-margin"><h3>最新新闻</h3></div>
	</div>
	
	<!-- Project -->
            @foreach($news as $k=>$v)
	<div class="four columns">
            <div class="picture"><a href="{{$v->url}}?id={{$v->b_id}}"><img src="{{$v->img}}" alt="" style="height:200px;width:205px" /><div class="image-overlay-link"></div></a></div>
		<div class="item-description">
			<h5><a href="#"><font color="red">标题名称:</font>{{$v->title_name}}</a></h5>
			<p><font color="red">内容:</font>{{$v->content}}</p>
		</div>
	</div>
                @endforeach
        <div class="sixteen columns">
		<!-- Headline -->
		 
		<div class="headline no-margin"><h3>最热新闻</h3></div>
       
	</div>
	
	<!-- Project -->
        @foreach($news1 as $k=>$v)
	<div class="four columns">
		<div class="picture"><a href="{{$v->url}}?id={{$v->b_id}}"><img src="{{$v->img}}" alt="" style="height:200px;width:205px"/><div class="image-overlay-link"></div></a></div>
		<div class="item-description">
			<h5><a href="#"><font color="red">标题名称:</font>{{$v->title_name}}</a></h5>
			<p><font color="red">内容:</font>{{$v->content}}</p>
		</div>
	</div>
        @endforeach
	
</div>
<!-- 960 Container / End -->




</div>
<!-- Wrapper / End -->


<!-- Footer
================================================== -->

<!-- Footer Start -->
<div id="footer" class="footer" data-sudaclick="blk_footer" align="center">
	<!-- 960 Container -->
	       
	         <div class="ft-info"> 
                     @foreach($index_bottom_resources as $k=>$v)
                     <a href="{{$v->bottom_url}}">{{$v->bottom_name}}</a> ┊
                     @endforeach
                     <a href="<a href="{{$last_index_bottom_resources->bottom_url}}">{{$last_index_bottom_resources->bottom_name}}</a>
                 </div>
                   
		<!-- About -->
          
			  <p><a href="http://corp.sina.com.cn/chn/sina_priv.html" target="_blank">隐私保护</a>　新浪公司　<a href="http://www.sina.com.cn/intro/copyright.shtml">版权所有</a>　<a href="http://www.miibeian.gov.cn" target="_blank">京ICP证000007</a></p>
                    <p>客户服务热线：4006900000　违法和不良信息举报电话：010-62646869　举报邮箱：<a href="mailto:jubao@vip.sina.com">jubao@vip.sina.com</a></p>
                    <p>&nbsp;</p>
                
		</div>
		

		<!-- Footer / Bottom -->

</div>
<!-- Footer / End -->


<!-- Styles Switcher
================================================== -->
<div id="style-switcher">
	<h2>Style Switcher <a href="#"></a></h2>
	
	<div><h3>Predefined Colors</h3>
		<ul class="colors" id="color1">
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="pink" title="Pink"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="dark" title="Dark"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
			<li><a href="#" class="dirty-green" title="Dirty Green"></a></li>
		</ul>
		
	<h3>Layout Style</h3>
	<div class="layout-style">
		<select id="layout-switcher">
			<option value="css/boxed">Boxed</option>
			<option value="css/wide">Wide</option>
		</select>
	</div>
	
	<h3>Background Image</h3>
		 <ul class="colors bg" id="bg">
			<li><a href="#" class="bg1"></a></li>
			<li><a href="#" class="bg2"></a></li>
			<li><a href="#" class="bg3"></a></li>
			<li><a href="#" class="bg4"></a></li>
			<li><a href="#" class="bg5"></a></li>
			<li><a href="#" class="bg6"></a></li>
			<li><a href="#" class="bg7"></a></li>
			<li><a href="#" class="bg8"></a></li>
			<li><a href="#" class="bg9"></a></li>
			<li><a href="#" class="bg10"></a></li>
			<li><a href="#" class="bg11"></a></li>
			<li><a href="#" class="bg12"></a></li>
			<li><a href="#" class="bg13"></a></li>
			<li><a href="#" class="bg14"></a></li>
			<li><a href="#" class="bg15"></a></li>
			<li><a href="#" class="bg16"></a></li>
			<li><a href="#" class="bg17"></a></li>
			<li><a href="#" class="bg18"></a></li>
		</ul>
		
	<h3>Background Color</h3>
		<ul class="colors bgsolid" id="bgsolid">
			<li><a href="#" class="green-bg" title="Green"></a></li>
			<li><a href="#" class="blue-bg" title="Blue"></a></li>
			<li><a href="#" class="orange-bg" title="Orange"></a></li>
			<li><a href="#" class="navy-bg" title="Navy"></a></li>
			<li><a href="#" class="yellow-bg" title="Yellow"></a></li>
			<li><a href="#" class="peach-bg" title="Peach"></a></li>
			<li><a href="#" class="beige-bg" title="Beige"></a></li>
			<li><a href="#" class="purple-bg" title="Purple"></a></li>
			<li><a href="#" class="red-bg" title="Red"></a></li>
			<li><a href="#" class="pink-bg" title="Pink"></a></li>
			<li><a href="#" class="celadon-bg" title="Celadon"></a></li>
			<li><a href="#" class="brown-bg" title="Brown"></a></li>
			<li><a href="#" class="cherry-bg" title="Cherry"></a></li>
			<li><a href="#" class="gray-bg" title="Gray"></a></li>
			<li><a href="#" class="dark-bg" title="Dark"></a></li>
			<li><a href="#" class="cyan-bg" title="Cyan"></a></li>
			<li><a href="#" class="olive-bg" title="Olive"></a></li>
			<li><a href="#" class="dirty-green-bg" title="Dirty Green"></a></li>
		</ul></div>
	
		<div id="reset"><a href="#" class="button color green boxed">Reset</a></div>
		
</div>


</body>
</html>