﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="style1/css/style2.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="style1/js/jquery.js"></script>

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson .header").click(function(){
		var $parent = $(this).parent();
		$(".menuson>li.active").not($parent).removeClass("active open").find('.sub-menus').hide();
		
		$parent.addClass("active");
		if(!!$(this).next('.sub-menus').size()){
			if($parent.hasClass("open")){
				$parent.removeClass("open").find('.sub-menus').hide();
			}else{
				$parent.addClass("open").find('.sub-menus').show();	
			}
			
			
		}
	});
	
	// 三级菜单点击
	$('.sub-menus li').click(function(e) {
        $(".sub-menus li.active").removeClass("active")
		$(this).addClass("active");
    });
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('.menuson').slideUp();
		if($ul.is(':visible')){
			$(this).next('.menuson').slideUp();
		}else{
			$(this).next('.menuson').slideDown();
		}
	});
})	
</script>


</head>

<body style="background:#fff3e1;">
	<div class="lefttop"><span></span>通讯录</div>
    
    <dl class="leftmenu">
        
    <dd>
    <div class="title">
    <span><img src="style1/images/leftico01.png" /></span>管理信息
    </div>
    	<ul class="menuson">
     
        
         <li class="active"><cite></cite><a href="right.html" target="rightFrame">数据列表</a><i></i></li>
        <li><cite></cite><a href="{{url('imgtable')}}" target="rightFrame">图片数据表</a><i></i></li>
        <li><cite></cite><a href="{{url('form')}}" target="rightFrame">导航添加</a><i></i></li>
        <li><cite></cite><a href="{{url('filelist')}}" target="rightFrame">导航列表</a><i></i></li>
        <li><cite></cite><a href="{{url('news_insert')}}" target="rightFrame">新闻添加</a><i></i></li>
        <li><cite></cite><a href="{{url('tools')}}" target="rightFrame">常用工具</a><i></i></li>
        <li><cite></cite><a href="{{url('filelist')}}" target="rightFrame">信息管理</a><i></i></li>
        <li><cite></cite><a href="{{url('tab')}}" target="rightFrame">Tab页</a><i></i></li>
        <li><cite></cite><a href="{{url('error')}}" target="rightFrame">404页面</a><i></i></li>
        </ul>    
    </dd>
        
    
    <dd>
    <div class="title">
    <span><img src="style1/images/leftico02.png" /></span>其他设置
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="flow.html" target="rightFrame">流程图</a><i></i></li>
        <li><cite></cite><a href="project.html" target="rightFrame">项目申报</a><i></i></li>
        <li><cite></cite><a href="search.html" target="rightFrame">档案列表显示</a><i></i></li>
        <li><cite></cite><a href="tech.html" target="rightFrame">技术支持</a><i></i></li>
        </ul>     
    </dd> 
    
    
    <dd><div class="title"><span><img src="style1/images/leftico03.png" /></span>编辑器</div>
    <ul class="menuson">
        <li><cite></cite><a href="#">自定义</a><i></i></li>
        <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="#">其他</a><i></i></li>
    </ul>    
    </dd>  
    
    
    <dd><div class="title"><span><img src="style1/images/leftico04.png" /></span>日期管理</div>
    <ul class="menuson">
        <li><cite></cite><a href="#">自定义</a><i></i></li>
        <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="#">其他</a><i></i></li>
    </ul>
    
    </dd>   
    
    </dl>
    
</body>
</html>
