<?php
/**
 * Team:XJBKF,NKU
 * coding by wangyijie 1911478
 * 20211127
 */
/* @var $this yii\web\View */
	// 创建连接
	$servername = "101.200.41.24";
	$username = "root";
	$password = "12345678";
	$dbname = "yii2web";
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("连接失败: " . $conn->connect_error);
	} 
	 
	$sql = "SELECT country,Total,GoldMedal,SilverMedal,BronzeMedal FROM country_medal_top10";
	$result = $conn->query($sql);
	$country=array();
	$total=array();
	$gold=array();
	$sliver=array();
	$bronze=array();
	if ($result->num_rows > 0) {
	    // 输出数据
	    $i=0;
	    while($row = $result->fetch_assoc()) {
	        //echo "国家: " . $row["country"]. " 奖牌数: " . $row["Total"]. "<br>";
	        $country[$i]=$row["country"];
	        $total[$i]=$row["Total"];
	        $gold[$i]=$row["GoldMedal"];
	        $sliver[$i]=$row["SilverMedal"];
	        $bronze[$i]=$row["BronzeMedal"];
	        $i++;
	    }
	} else {
	    echo "0 结果";
	}
	$arr1=json_encode($country);
	$arr2=json_encode($total);
	$arr3=json_encode($gold);
	$arr4=json_encode($sliver);
	$arr5=json_encode($bronze);
	// for($x=0;$x<count($country);$x++)
	// {
	//     echo $country[$x];
	//     echo "<br>";
	// }
	// for($x=0;$x<count($total);$x++)
	// {
	//     echo $total[$x];
	//     echo "<br>";
	// }
	$conn->close();
?>