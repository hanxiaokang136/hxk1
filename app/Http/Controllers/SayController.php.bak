<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
/******
****实现思路
****一、在路由文件设置访问当列表展示控制器的路由文件
****二、访问到控制器后查询出所有留言内容
****三、在模板页面显示出留言信息
*/
class SayController extends BaseController
{
	//留言列表展示
	public function index(){
		//$arr = DB::table('title')->where('title_name')->get();
		//查询数据库留言信息
		$arr = DB::select("select * from l_y");
		// 将留言内容发送给模板
		return view('say.say',['arr'=>$arr]);
	}
}
