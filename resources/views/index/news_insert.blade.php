<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻添加页面</title>
<link href="style1/css/style2.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">表单</a></li>
    </ul>
    </div>
    
     <div class="formbody">
    
    <div class="formtitle"><span>基本信息</span></div>
     <form method="post" action="{{url('news_add')}}" onsubmit="return fun()">
    <ul class="forminfo">
    <li><label>新闻标题</label><input name="title_name" type="text" class="dfinput"id="title_name" onblur="fun1()"/><i id="s_title_name">新闻标题不能为空</i></li>
    <li><label>新闻链接</label><input name="url" type="text" class="dfinput" id="url" onblur="fun2()"/> <i id="s_url">新闻链接不能为空</i></li>
    <li><label>是否显示</label><cite><input name="is_show" type="radio" checked="checked" id="is_show" value="0"/>是&nbsp;&nbsp;&nbsp;&nbsp;<input name="is_show" type="radio" id="is_show" value="1"/>否</cite></li>
     <li><label>上传新闻图片</label><input name="img" type="file"/>
    <li><label>新闻内容</label><textarea name="content" cols="" rows="" class="textinput" id="content"  onblur="fun3()"></textarea><i id="s_content">描述不能为空</i></li>
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/></li>
    </ul>
         </form>
    
    
    </div>


</body>

</html>
<script>
    function fun1(){
        var title_name = document.getElementById("title_name").value;
        //alert(nav_name);
        if(title_name==""){
            document.getElementById("s_title_name").innerHTML="<font color='red'>新闻标题不能为空</font>";
            return false;
            
        }else{
             document.getElementById("s_title_name").innerHTML="<font color='blue'>新闻标题输入正确</font>";
               return true;
        }
    }
    
     function fun2(){
        var url = document.getElementById("url").value;
        //alert(nav_name);
        if(url==""){
            document.getElementById("s_url").innerHTML="<font color='red'>新闻链接不能为空</font>";
                           return false;
        }else{
             document.getElementById("s_url").innerHTML="<font color='blue'>新闻链接输入正确</font>";
                        return true;
        }
    }
    
     function fun3(){
        var content = document.getElementById("content").value;
        //alert(nav_name);
        if(content==""){
            document.getElementById("s_content").innerHTML="<font color='red'>新闻内容不能为空</font>";
                            return false;
        }else{
             document.getElementById("s_content").innerHTML="<font color='blue'>新闻内容输入正确</font>";
             return true;
        }
    }
    function fun(){
          if(fun1() && fun2() && fun3()){
              return true;
              
          }else{
            
                return false;
          }
        
    }
  </script>
