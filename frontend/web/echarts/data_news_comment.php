<?php
/**
 * Team:XJBKF,NKU
 * coding by zhangshichen 1911515
 * 20211127
 */	
          $mysql_server_name='101.200.41.24'; //改成自己的mysql数据库服务器
 
    $mysql_username='root'; //改成自己的mysql数据库用户名
 
    $mysql_password='12345678'; //改成自己的mysql数据库密码,初始默认密码为空
 
    $mysql_database='yii2web'; //改成自己的mysql数据库名
  $conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ;
  mysqli_query($conn,"set names 'utf8'"); //数据库输出编码
  mysqli_select_db($conn,$mysql_database); //打开数据库
  $result = mysqli_query($conn,"SELECT news_id, count(*) as number from comment group by news_id");
  //$result = mysqli_query($conn,"SELECT news_title as news_id, count(*) as number from comment natural join news group by news_id");
  $data="";
  $array= array();
  class Event{
    public $news_id;
    public $number;
  }
  while($row = mysqli_fetch_array($result)){
    $e=new Event();
    $e->news_id = $row['news_id'];
    $e->number = $row['number'];
    $array[]=$e;
  }
  $data=json_encode($array);

  echo $data;
?>