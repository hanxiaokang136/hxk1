<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>导航修改页面</title>
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
    <form method="post" action="{{url('dodao_update')}}" onsubmit="return fun()">
    <ul class="forminfo">
    <li><label>导航标题</label><input name="nav_name" type="text" class="dfinput" id="nav_name" onblur="fun1()" value="{{$dao_update->nav_name}}"/><i id="s_nav_name">标题不能为空</i></li>
    <li><label>导航链接</label><input name="nav_url" type="text" class="dfinput" id="nav_url" onblur="fun2()" value="{{$dao_update->nav_url}}"/> <i id="s_nav_url">链接不能为空</i></li>
    <li><label>是否显示</label><cite>
            @if($dao_update->is_show==1)
           <input name="is_show" type="radio"  id="is_show" value="1" checked/>是&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="is_show" type="radio" id="is_show" value="0" />否
            @else
            <input name="is_show" type="radio" id="is_show" value="1"/>是 
                 <input name="is_show" type="radio"  id="is_show" value="0" checked/>否&nbsp;&nbsp;&nbsp;&nbsp;
      
            
            @endif
        </cite></li>
    <li><label>导航描述</label><textarea name="desc" cols="" rows="" class="textinput" id="desc"  onblur="fun3()">{{$dao_update->desc}}</textarea><i id="s_nav_desc">描述不能为空</i></li>
    <input name="id" type="hidden" class="dfinput" value="{{$dao_update->id}}"/>
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认修改"/></li>
    </ul>
         </form>
    
    
    </div>


</body>

</html>
<script>
    function fun1(){
        var nav_name = document.getElementById("nav_name").value;
        //alert(nav_name);
        if(nav_name==""){
            document.getElementById("s_nav_name").innerHTML="<font color='red'>不能为空</font>";
            return false;
            
        }else{
             document.getElementById("s_nav_name").innerHTML="<font color='blue'>输入正确</font>";
               return true;
        }
    }
    
     function fun2(){
        var nav_url = document.getElementById("nav_url").value;
        //alert(nav_name);
        if(nav_url==""){
            document.getElementById("s_nav_url").innerHTML="<font color='red'>链接不能为空</font>";
                           return false;
        }else{
             document.getElementById("s_nav_url").innerHTML="<font color='blue'>链接输入正确</font>";
                        return true;
        }
    }
    
     function fun3(){
        var desc = document.getElementById("desc").value;
        //alert(nav_name);
        if(desc==""){
            document.getElementById("s_nav_desc").innerHTML="<font color='red'>描述不能为空</font>";
                            return false;
        }else{
             document.getElementById("s_nav_desc").innerHTML="<font color='blue'>描述输入正确</font>";
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