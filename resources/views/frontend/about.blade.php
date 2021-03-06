﻿<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>关于我们</title>

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
				<a href="index.html"><img src="style1/images/logo.png" alt="logo" /></a>
				<div id="tagline">It's time to impress your visitors!</div>
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
                                      @foreach ($about_nav_resources as $k=>$v)
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

	<div class="sixteen columns">
	
		<!-- Page Title -->
		<div id="page-title">
                     @foreach ($about as $k=>$v)
			<h2>{{$v->title}}</h2>
                          @endforeach
			<div id="bolded-line"></div>
		</div>
		<!-- Page Title / End -->

	</div>
</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class="container">

	<!-- Standard Structure -->
	<div class="two-thirds column">
		<div class="headline no-margin"><h4>中新社简介</h4></div>
                <ul id="nav">
		 @foreach ($about as $k=>$v)
				<li>{{$v->content}}
				  </li>
                                  @endforeach
                                  </ul>
	</div>
	
	<div class="one-third column">
		<div class="headline no-margin"><h4>Careers</h4></div>

		<!-- Large Notice -->
		<div class="large-notice">
			<h2>We're Hiring</h2>
			<p>We're offering great oppurtunites for Project Manager and Web Designer.</p>
			<a href="#" class="button medium color">Apply</a>
		</div>
		</p>
	</div>
	<!-- Standard Structure End -->
	
	
	<div class="sixteen columns">
		<div class="headline low-margin"><h4>Meet the Team</h4></div>
	</div>
	
	<!-- About -->
	<div class="one-third column">
		<img src="style1/images/about-01.png" alt=""/>
		<div class="team-name"><h5>Jane Smith</h5> <span>Chief Executive Officer / CEO</span></div>
		<div class="team-about"><p>Consectetur dolor ipsum quiam dolor adipisci velit, aenean at lorem vel est posuere feugiat sed quia noneas numquasa mode tempora incidunt ipsum.</p></div>
		
		<!-- Social Icons -->
		<ul class="social-icons about">
			<li class="facebook"><a href="#">Facebook</a></li>
			<li class="linkedin"><a href="#">LinkedIn</a></li>
			<li class="googleplus"><a href="#">Google Plus</a></li>
		</ul>
		
	</div>
	
	<!-- About -->
	<div class="one-third column">
		<div class="clear"></div>
		<img src="style1/images/about-01.png" alt=""/>
		<div class="team-name"><h5>John Doe</h5> <span>Web Designer</span></div>
		<div class="team-about"><p>Consectetur dolor ipsum quiam dolor adipisci velit, aenean at lorem vel est posuere feugiat sed quia noneas numquasa mode tempora incidunt ipsum.</p></div>
		
		<!-- Social Icons -->
		<ul class="social-icons about">
			<li class="facebook"><a href="#">Facebook</a></li>
			<li class="linkedin"><a href="#">LinkedIn</a></li>
			<li class="forrst"><a href="#">Forrst</a></li>
			<li class="dribbble"><a href="#">Dribbble</a></li>
		</ul>
		
	</div>
	
	<!-- About -->
	<div class="one-third column">
		<img src="style1/images/about-01.png" alt=""/>
		<div class="team-name"><h5>Michael Smith</h5> <span>Project Manager</span></div>
		<div class="team-about"><p>Consectetur dolor ipsum quiam dolor adipisci velit, aenean at lorem vel est posuere feugiat sed quia noneas numquasa mode tempora incidunt ipsum.</p></div>

		<!-- Social Icons -->
		<ul class="social-icons about">
			<li class="facebook"><a href="#">Facebook</a></li>
			<li class="linkedin"><a href="#">LinkedIn</a></li>
			<li class="blogger"><a href="#">Blogger</a></li>
			<li class="googleplus"><a href="#">Google Plus</a></li>
			<li class="pintrest"><a href="#">Pintrest</a></li>
		</ul>
		
	</div>
	
</div>
<!-- 960 Container End -->


</div>
<!-- Wrapper / End -->

<!-- Footer
================================================== -->

<!-- Footer Start -->
<div id="footer">
	<!-- 960 Container -->
	<div class="container">
	
		<!-- About -->
		<div class="four columns">
			<div class="footer-headline"><h4>About Us</h4></div>
			<p>Lorem sequat ipsum dolor lorem sit amet, consectetur adipiscing dolor elit. Aenean nisl orci, condimentum.</p>
			<p>Consectetur adipiscing elit aeneane lorem lipsum, condimentum ultrices consequat eu, vehicula mauris lipsum adipiscing lipsum aenean orci lorem.</p>
		</div>
		
		<!-- Useful Links -->
		<div class="four columns">
			<div class="footer-headline"><h4>Useful Links</h4></div>
			<ul class="links-list">
				<li><a href="#">Service Updates</a></li>
				<li><a href="#">Community Forum</a></li>
				<li><a href="#">Help Desk</a></li>
				<li><a href="#">Terms of Use</a></li>
				<li><a href="#">Validate License</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Knowledgebase</a></li>
			</ul>
		</div>
		
		<!-- Photo Stream -->
		<div class="four columns">
			<div class="footer-headline"><h4>Photo Stream</h4></div>
			<div class="flickr-widget">
				<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=36587311@N08"></script>
				<div class="clear"></div>
			</div>
		</div>
		
		<!-- Latest Tweets -->
		<div class="four columns">
			<div class="footer-headline"><h4>Latest Tweets</h4></div>
			<ul id="twitter"></ul>
				<script type="text/javascript">
					jQuery(document).ready(function($){
					$.getJSON('http://api.twitter.com/1/statuses/user_timeline/envato.json?count=2&callback=?', function(tweets){
					$("#twitter").html(tz_format_twitter(tweets));
					}); });
				</script>
			<div class="clear"></div>
		</div>

		<!-- Footer / Bottom -->
		<div class="sixteen columns">
			<div id="footer-bottom">
				© Copyright 2012 More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>. All rights reserved.
				<div id="scroll-top-top"><a href="#"></a></div>
			</div>
		</div>

	</div>
	<!-- 960 Container / End -->

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