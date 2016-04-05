   <?php
    //文章管理--添加入库处理
    public function article_insert(){
      // print_r($_POST);die;
      $title=Input::get('title');
      $desc=Input::get('desc');
      $content=Input::get('editorValue'); 
      $type=Input::get('type');
      $is_show=Input::get('is_show');
        if(!empty($_FILES["file"]['name'])){//判断是否上传图片
            if(is_uploaded_file($_FILES['file']['tmp_name']));
            $tmp_name=$_FILES['file']['tmp_name'];
            $file_name=md5(microtime()).'.jpg'; //图片重命名
            $move = move_uploaded_file($tmp_name,"a_images/".$file_name); //把上传的临时文件移动到s_images目录下面 
            if($move){
              $insert=DB::table('article')->insert(array(
                'title' =>$title ,
                'desc' =>$desc ,
                'content' =>$content ,
                'image' =>$file_name , 
                'type' =>$type ,
                'is_show' =>$is_show , 
                 ));
            if($insert){
                header("location:article-list");
            }else{
                echo "<script>alert('添加失败，请重试！')</script>";
                header("refresh:0;url=article-add");
            } 
          }
        }else{            
            $insert=DB::table('article')->insert(array(
                'title' =>$title ,
                'desc' =>$desc ,
                'content' =>$content , 
                'type' =>$type ,
                'is_show' =>$is_show , 
                 ));
            if($insert){
                header("location:article-list");
            }else{
                echo "<script>alert('添加失败，请重试！')</script>";
                header("refresh:0;url=article-add");
            }
        }  
  } 
  ?>