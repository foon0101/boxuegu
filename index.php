<?php
  header("content-type:text/html;charset=utf-8");

  // echo "abchsd";

  //引入需要访问的页面地址
  // include "study/aa.html";

  // include "views/dashboard/index.html";

  //打印数组
  // var_dump($_SERVER);

  // 'PATH_INFO' => string '/views/dashboard/index' (length=22)
  //拼接字符串
  //定义一个变量
  // $path = $_SERVER['PATH_INFO'];

  // include 'views'.$path.'.html';

  // include  $path.'.html';


  //声明一个变量来存储字符创;
  $path = '';

  if(array_key_exists('PATH_INFO',$_SERVER)){
    
    //获取'PATH_INFO'的内容
    $path = $_SERVER['PATH_INFO'];
    //截取字符串
    $path = substr($path,1);
   
   
    //将字符串分割成数组
    $arr = explode('/',$path);

    if(count($arr)==2){
      $path = 'views/'.$arr[0].'/'.$arr[1];
    }else if(count($arr)==1){
      $path = 'views/dashboard/'.$arr[0];
    }
  } else {
    $path = 'views/dashboard/index';
  }


  include $path.'.html';

?>