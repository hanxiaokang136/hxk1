<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
/******
****实现思路
****一、在路由文件设置访问当列表展示控制器的路由文件
****二、访模板页面显示出留言信息
*/
session_start();
class  AdminController extends BaseController
{    
   
    //显示登录界面方法
	public function login1(){
           //显示登录页面
            return view('admin.login1');
            //return view('Admin.login');
        }
        //要判断用户名和密码的方法
       public function update(){
           //接收用户名的值
           $username=Input::get("username");
           //接收密码的值
           $password=Input::get("password");
           //根据数据库表里的字段判断一条用户名和密码是否相等
         $admin = DB::table("admin")->where('username',$username)->where('password',$password)->first();
         //if判断  
         if($admin){ 
             //用户名和密码全部正确就跳到后台首页  
             //echo "啥地方";die;
                $id=$admin->id;
              $_SESSION['username']=$username;
              $_SESSION['password']=$password;
              $_SESSION['id']=$id;
            header("location:main");
             //提交地址也可以用header
             //header("location:地址");
           }else{
               //如果用户名和密码不正确则返回登录页面
                 echo "<script>alert('用户名或密码错误')</script>";
                  return view('admin.login1');
               
           }
         }
          
} 