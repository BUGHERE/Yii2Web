<?php
      $mysql_server_name='101.200.41.24'; //改成自己的mysql数据库服务器
 
    $mysql_username='root'; //改成自己的mysql数据库用户名
 
    $mysql_password='12345678'; //改成自己的mysql数据库密码,初始默认密码为空
 
    $mysql_database='yii2web'; //改成自己的mysql数据库名
  $conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ;
  mysqli_query($conn,"set names 'utf8'"); //数据库输出编码
  mysqli_select_db($conn,$mysql_database); //打开数据库
  $result = mysqli_query($conn,"select * from china_medal_num where t='2021'");
  $data="";
  $array= array();
  class Prize{
    public $gold;
    public $silver;
    public $cu;
  }
  while($row = mysqli_fetch_array($result)){
    $prize=new Prize();
    $prize->gold = $row['g'];
    $prize->silver = $row['s'];
    $prize->cu=$row['c'];
    $array[]=$prize;
  }
  $data=json_encode($array);

  echo $data;
?>