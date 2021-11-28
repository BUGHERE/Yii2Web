<?php
/**
 * Team:XJBKF,NKU
 * coding by wangyijie 1911478
 * 20211127
 */
/* @var $this yii\web\View */   
$servername = "101.200.41.24";
$username = "root";
$password = "12345678";
$dbname = "yii2web";

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
// for($x=0;$x<count($interval);$x++)
// {
//     echo $interval[$x];
//     echo "<br>";
// }
// for($x=0;$x<count($num);$x++)
// {
//     echo $num[$x];
//     echo "<br>";
// }
$conn->close();
?>
<h1>2016年派出运动员区间个数</h1>
   <div id="main" style="height:500px;width: 90%;" ></div>
    <script type="text/javascript">
              var  myChart = echarts.init(document.getElementById('main'));
              var arr1=<?php echo $arr1;?>;
              var arr2=<?php echo $arr2;?>;
            //   for(i=0;i<5;i++)
            //   {
            //       arr1.push(1);
            //   }
              console.log(arr1);
              option = {
  title: {
    text: '2016年派出运动员区间个数',
    subtext: '即每个区间代表派出运动员的范围，数量代表区间有多少个国家',
    left: 'center'
  },
  tooltip: {
    trigger: 'item'
  },
  legend: {
    orient: 'vertical',
    left: 'left'
  },
  series: [
    {
      name: '国家数量',
      type: 'pie',
      radius: '50%',
      data: [
        { value: arr2[0], name:arr1[0]},
        { value: arr2[1], name:arr1[1]},
        { value: arr2[2], name:arr1[2]},
        { value: arr2[3], name:arr1[3]},
        { value: arr2[4], name:arr1[4]},
      ],
      emphasis: {
        itemStyle: {
          shadowBlur: 10,
          shadowOffsetX: 0,
          shadowColor: 'rgba(0, 0, 0, 0.5)'
        }
      }
    }
  ]
};
				
				

                // 为echarts对象加载数据
                myChart.setOption(option);
            // }
    </script>
