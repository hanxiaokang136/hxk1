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
class  FrontendController extends BaseController
{
    //显示首页的方法
	public function index(){
                 //查询首页导航资源
		$index_nav_resources = DB::select("select * from nav");
                //查询首页轮播图表
                $index_carousel_resources = DB::select("select * from Viwepager");
                //查询最新和最热的图片
                 $news = DB::select("select * from news where n_id=1");
                 $news1 = DB::select("select * from news where n_id=2");
                 $index_bottom_resources = DB::select("select * from bottom");
                 $count=count($index_bottom_resources);//计算该数组的长度
                 $count=count($index_bottom_resources);
                 $last_index_bottom_resources=$index_bottom_resources[$count-1];//获取该数组最后一条数据 
                 unset($index_bottom_resources[$count-1]);//删除该数组最后1条数据
                 
                  //$news = DB::select("select * from news where n_id=2");
		// 输出首页导航模板
		return view('frontend.index',['index_nav_resources'=>$index_nav_resources,'index_carousel_resources'=>$index_carousel_resources,'news'=>$news,'news1'=>$news1,'index_bottom_resources'=>$index_bottom_resources,'last_index_bottom_resources'=>$last_index_bottom_resources]);
	}
        //显示关于我们的方法
        public function about(){
                 //查询关于我们里的导航表
	         $about_nav_resources = DB::table('nav')->get();
                 //查询关于简介的表
                 $about = DB::select("select * from about");
		return view('frontend.about',['about_nav_resources'=>$about_nav_resources,'about'=>$about]);
	}
        //显示娱乐新闻的方法
         public function yule(){
                 //查询娱乐页面的导航表
		 $yule_nav_resources = DB::select("select * from nav");
		return view('frontend.yule',['yule_nav_resources'=>$yule_nav_resources]);
	}
        //显示时尚新闻的方法
        public function shishang(){
            //查询导航表
            $shishang = DB::table('nav')->get();;
            return view('frontend.shishang',['shishang'=>$shishang]);
            
        }
        //关于我们里的简介方法
          // public function aboutourintroduction(){
               //查询关于我们简介的表
             //$aboutourintroduction=DB::select("select * from about");
             //return view("frontend.about",['aboutourintroduction'=>$aboutourintroduction]);
            
            
        //}
        //显示详情页的方法
         public function NewsDetails(){
            //查询首页点击图片跳转的详情页的导航表
               $id=Input::get("id"); 
               //echo $id;die;
            $NewsDetails_resources = DB::select("select * from nav");
              //查询新闻详情页的底部信息
                $NewsDetails_bottom_resources = DB::select("select * from bottom");
                 $count=count($NewsDetails_bottom_resources);//计算该数组的长度
                 $count=count($NewsDetails_bottom_resources);
                 $last_NewsDetails_bottom_resources=$NewsDetails_bottom_resources[$count-1];//获取该数组最后一条数据 
                 unset($NewsDetails_bottom_resources[$count-1]);//删除该数组最后1条数据
                  $dianji = DB::select("select * from news join news_details on news.b_id = news_details.b_id where news.b_id=$id"); 
                  return view('frontend.NewsDetails',['NewsDetails_resources'=>$NewsDetails_resources,'dianji'=>$dianji,'last_NewsDetails_bottom_resources'=> $last_NewsDetails_bottom_resources,'NewsDetails_bottom_resources'=>$NewsDetails_bottom_resources]);
        }
        
          
}
