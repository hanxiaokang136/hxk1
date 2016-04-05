<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class IndexController extends BaseController
{
    //显示主页
	public function index(){
		//$arr = DB::table('title')->where('title_name')->get();
		return view('index.main');
	}
        //显示首页
        public function in(){
		//$arr = DB::table('title')->where('title_name')->get();
		return view('index.index');
	}
        //显示后台的左侧页面
        public function left(){
		//$arr = DB::table('title')->where('title_name')->get();
		return view('index.left');
	}
        //显示后台右边的东西
        public function right(){
		//$arr = DB::table('title')->where('title_name')->get();
		return view('index.right');
	}
        //显示后台头上页面
          public function top(){
		//$arr = DB::table('title')->where('title_name')->get();
		return view('index.top');
	}
        //显示后台脚下页面
        public function footer(){
		//$arr = DB::table('title')->where('title_name')->get();
		return view('index.footer');
	}
        //显示导航添加页面
          public function form(){
		//$arr = DB::table('title')->where('title_name')->get();
		return view('index.form');
	}
        //执行导航的添加方法
        public function dao_add(){
            //接收导航名称的值  
            $nav_name=Input::get("nav_name");
              //echo $nav_name;die;
            //接收导航链接的值
            $nav_url=Input::get("nav_url");
            //echo $nav_url;die;
            //接收是否显示的值
            $is_show=Input::get("is_show");
            //echo $is_show;die;
            $desc=Input::get("desc");
           // echo $desc;die;
            //添加语句
           $sql=DB::table('nav')->insert(
    ['nav_name' =>$nav_name, 'nav_url' =>$nav_url,'is_show' =>$is_show,'desc' =>$desc]
);                 
                   //判断导航的sql语句是否成功
                   if($sql){
                      return view('index.filelist');
                      
                  }else{
                      echo "添加失败";
                  }
                    
        }
        //导航列表显示方法
        public function filelist(){
		//$arr = DB::table('title')->where('title_name')->get();
		//查询导航表的所有数据
            $filelist = DB::select("select * from nav");  
               return view('index.filelist',['filelist'=>$filelist]);
	}
        //导航删除方法
        public function dao_del(){
            //接收id的值
            $id=Input::get("id");
            //echo $id;die;
            //根据接过来的id删除某条数据
            $filelist=DB::delete("delete from nav where id='$id'");
            //删除成功之后返回本页面       
           // return view('index.filelist',['filelist'=>$filelist]);
            if($filelist){
               //$arr = DB::table('title')->where('title_name')->get();
		//$filelist = DB::select("select * from nav");  
              // return view('index.filelist',['filelist'=>$filelist]);
                echo "<script>alert('删除成功！');window.location.href='filelist';</script>";
                
            }else{
                echo "删除失败";
                
            }
            
            
        }
        //导航修改之前先根据id查询一条默认的数据的方法
        public function dao_update(){
            //接收的id值
            $id=Input::get("id");
            $dao_update=DB::table('nav')->where('id',$id)->first();
            return view('index.formupdate',['dao_update'=>$dao_update]);
            
            
        }
        public function dodao_update(){
           //接u收id
            $id=Input::get("id");
            //接收导航名称
            $nav_name=Input::get("nav_name");
            //接收导航链接
            $nav_url=Input::get("nav_url");
            //接收导航是否显示
            $is_show=Input::get("is_show");
            //接收描述的值
            $desc=Input::get("desc");
            //修改语句
           $filelist=DB::table('nav')->where("id",$id)->update(array(
            'nav_name' =>$nav_name ,
            'nav_url' =>$nav_url ,
            'is_show' =>$is_show ,
            'desc' =>$desc ,
             ));
            //print_r($filelist);die;
            //判断
            if($filelist){
		//$filelist = DB::select("select * from nav");  
               // return view('index.filelist',['filelist'=>$filelist]);
                 echo "<script>alert('修改成功！');window.location.href='filelist';</script>";
                
            }else{
                echo "修改失败";
                
            }
        }
        public function news_insert(){
            return view('index.news_insert'); 
            
        }
		public function excel(){
         
        $data = DB::table('nav')->get();  
        $FileName='dfdf.xlsx';
        header("Content-Type: application/force-download");  
        header("Content-Type: application/octet-stream");  
        header("Content-Type: application/download");  
        header('Content-Disposition:inline;filename="'.$FileName.'"');  
        header("Content-Transfer-Encoding: binary");  
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");  
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");  
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");  
        header("Pragma: no-cache");
        echo "<table width='800' border='1'>
                <tr>
                    <td>编号</td>
                    <td>导航名称</td>
                    <td>导航路径</td>
                    <td>是否显示（1/显示，2/隐藏）</td>
                    <td>描述</td>
                </tr>";
        foreach ($data as $k => $v) {
            echo "<tr>
                    <td>$v->id</td>
                    <td>$v->nav_name</td>
                    <td>$v->nav_url</td>
                    <td>$v->is_show</td>
                    <td>$v->desc</td>
                </tr>";
        }
        echo "</table>";
        die;
 
        }
        public function word(){
        $id=Input::get("id");
        $data = DB::table('nav')->where('id',$id)->first();  
        header("Content-Type:   application/msword");       
        header("Content-Disposition:   attachment;   filename=word.doc");
        header("Pragma:   no-cache");
        header("Expires:   0");
        $html  = "<table border='1'>"; 
                $html .= "<tr>
                     <td>$data->nav_name</td>
                          <td>$data->nav_url</td>
                               <td>$data->is_show</td>
                    <td>$data->desc</td>
                    </tr>";
                    $html .= '</table>'; 
            echo  $html;

    
	}
        public function news_content_word(){
            
        $b_id=Input::get('b_id');//接收id，用来查询此条信息的详情 
        //根据id号查询一条
        $data = DB::table('news_details')->where('b_id',$b_id)->first();  
        header("Content-Type:   application/msword");       
        header("Content-Disposition:   attachment;   filename=$b_id.docx");
        header("Pragma:   no-cache");
        header("Expires:   0"); 
        $html="文章标题：".$data->n_title."<br><br>";
        $html.="文章描述：".$data->n_name."<br><br>";
        $html.="文章内容：<br>".$data->n_content."<br>";
        echo  $html;
          
        


            
        }

        
		
        
}
