<?php 
        
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "21";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT my_interval,my_num FROM 2016interval_num";
$result = $conn->query($sql);
$interval=array();
$num=array();
if ($result->num_rows > 0) {
    // 输出数据
    $i=0;
    while($row = $result->fetch_assoc()) {
        //echo "国家: " . $row["country"]. " 奖牌数: " . $row["Total"]. "<br>";
        $interval[$i]=$row["my_interval"];
        $num[$i]=$row["my_num"];
        $i++;
    }
} else {
    echo "0 结果";
}
$arr1=json_encode($interval);
$arr2=json_encode($num);
echo $arr1;
echo $arr2;
?>