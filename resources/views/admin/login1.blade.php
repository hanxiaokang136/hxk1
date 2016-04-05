<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎登录后台管理系统</title>
<link href="{{asset('/style1/css/style2.css')}}" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="{{asset('/style1/js/jquery.js')}}"></script>
<script src="{{asset('/js/cloud.js')}}" type="text/javascript"></script>

<script language="javascript">
	$(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	$(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
});  
</script> 

</head>

<body style="background-color:#df7611; background-image:url(style1/images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">



    <div id="mainBody">
      <div id="cloud1" class="cloud"></div>
      <div id="cloud2" class="cloud"></div>
    </div>  


<div class="logintop">    
    <span>欢迎登录后台管理界面平台</span>    
    <ul>
    <li><a href="#">回首页</a></li>
    <li><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    </ul>    
    </div>
    
    <div class="loginbody">
    
    <span class="systemlogo"></span> 
    <div class="loginbox">
        <form action="{{url('update')}}" method="post" onsubmit="return fun()">
             
    <ul> 
    <li><input type="text" class="loginuser" name="username" onblur="fun()" id="username"/></li>
    <li><input type="password" class="loginpwd"   name="password" onblur="fun()"  id="password"/></li>
    <li><span  id="tishi"></span></li>
    <li><input name="" type="submit" class="loginbtn" value="登录" /><label><input name="" type="checkbox" value="" checked="checked" />记住密码</label><label><a href="#">忘记密码？</a></label>
    </li> 
    </ul>
                
              </form>
    
    </div>
    
    </div>
    
    
    
    <div class="loginbm">版权所有  2014  <a href="http://www.uimaker.com">uimaker.com</a>  仅供学习交流，勿用于任何商业用途</div>
	
    
</body>

</html>
<script>
    function fun(){
        //接收用户名的值
        var username = document.getElementById("username").value;
        //接收密码的值
        var password = document.getElementById("password").value; 
        //判断用户名和密码都不能为空 
        if(username==""||password==""){
            //如果为空提示不能为空
            $('#tishi').html('不能为空');
             return false ; 
         }else{ 
             //如果写上值得话就把上面提示的 不能为空 这句话就隐藏掉了
           $('#tishi').hide("不能为空");
            return true;
        }
       //alert(username);
       
   }
</script>