<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="style1/css/style2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="style1/js/jquery.js"></script>
<script type="text/javascript" src="style1/js/jquery-1.8.3.min.js"></script>

</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="computer.html">文件管理</a></li>
    <li><a href="#">列表</a></li>
    </ul>
    </div>
    
    <table class="filetable" >
    
    <thead >
    	<tr >
            <th><input type="checkbox"  id="check_all"><label for="check_all">全选</label></th>
        <th>导航名称</th>
        <th>导航链接</th>
        <th>导航是否显示</th>
       <th>导航描述</th>
       <th>导航操作</th>
        </tr>    	
    </thead>
    
    <tbody border="1">
      @foreach($filelist as $k=>$v)
              <tr>
                  <td><input type="checkbox" name="eve_box" ></td>
                  <td>{{$v->nav_name}}</td>
                  <td>{{$v->nav_url}}</td>
                  <td>{{$v->is_show}}</td>
                  <td>{{$v->desc}}</td>
                  <td><a href="{{action('IndexController@dao_del')}}?id={{$v->id}}">删除</a>   <a href="{{action('IndexController@dao_update')}}?id={{$v->id}}">修改</a>
				    <a href="{{action('IndexController@excel')}}?id={{$v->id}}">excel表格下载</a><a href="{{action('IndexController@word')}}?id={{$v->id}}">word下载</a>
				  </td>    
              </tr>
      @endforeach
    </tbody>
    
   
    </table>
    
    <a href="form" style="float:right;"><h1>导航添加</h1></a>
    
    
    
    
    
    
    
   

</body>

</html>

<script>
    $(document).ready(function(){
        //全选和反选操作
        $("#check_all").on("click",function(){
            $("input[name='eve_box']").prop('checked',$(this).prop("checked"));
        });
    })

</script>
