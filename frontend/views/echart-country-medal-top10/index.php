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
<h1>奖牌总数前十国家奖牌分布</h1>
    <div id="main" style="height:550px;width: 70%;padding-left: 10%;" ></div>
    <script type="text/javascript">
              var  myChart = echarts.init(document.getElementById('main'));
              option = {
            title: {
                left: 'center',
                text: '奖牌总数前十国家奖牌分布',
                subtext: '2021年',
                show:true
            },
            tooltip: {
                trigger: 'axis',
                formatter:'{a}:{c}',
                axisPointer: {
                    type: 'cross',
                    crossStyle: {
                        color: '#999'
                    }
                }
            },
            legend: {
                show:true,
                selectedMode:'single',    //设置显示单一图例的图形，点击可切换
                bottom:0,//legend位置的调整
                left:10,
                textStyle:{
                    color:'#5e859e',
                    fontSize:10
                },
                itemGap:20,
                data:['奖牌总数','金牌数','银牌数','铜牌数'],
                inactiveColor:'#694a4a'
            },
            grid: {//图位置调整
                top:'5%',
                left: '0%',
                right: '0%',
                bottom: '10%',
                containLabel: true
            },
            xAxis: [
                {
                    type: 'category',
                    data: <?php echo $arr1;?>,
                    axisLine:{
                        lineStyle:{
                            color:'#5e859e',//横坐标轴和字体颜色
                            width:2//这里是为了突出显示加上的
                        }
                    },
                    axisPointer: {
                        type: 'shadow'
 
                    },
                    axisTick: {
                        show:true,
                            interval: 0
                    }
                }
            ],
        //设置两个y轴，左边显示数量，右边显示概率
        yAxis: [
            {
                type: 'value',
                name: '柱状',
                show:true,
                interval: 5,
                axisLine: {
                    lineStyle: {
                        color: '#5e859e',
                        width: 2
                    }
                }
            },
            {
                type: 'value',
                name: '折线',
                
                interval: 10,
                axisLabel: {
                    formatter: '{value} '
                },
                axisLine: {
                    lineStyle: {
                        color: '#5e859e',//纵坐标轴和字体颜色
                        width: 2
                    }
                }
            }
        ],
        //每个设备分数量、概率2个指标，只要让他们的name一致，即可通过，legeng进行统一的切换
        series: [
            {
                name:'奖牌总数',
                type:'bar',
                color:'#f17e0e',
                data:<?php echo $arr2;?>,
                barWidth : '50%'
 
            },
            {
                name:'奖牌总数',
                type:'line',
                color:'#2f87f1',
                yAxisIndex: 1,    //这里要设置哪个y轴，默认是最左边的是0，然后1，2顺序来。
                data:<?php echo $arr2;?>,
                symbolSize:10
            },
            {
                name:'金牌数',
                type:'bar',
                color:'#f17e0e',
                data:<?php echo $arr3;?>,
                barWidth : '50%'
            },
            {
                name:'金牌数',
                type:'line',
                color:'#87CEFA',
                yAxisIndex: 1,
                data:<?php echo $arr3;?>,
                symbolSize:10
            },
            {
                name:'银牌数',
                type:'bar',
                color:'#f17e0e',
                data:<?php echo $arr4;?>,
                barWidth : '50%'
            },
            {
                name:'银牌数',
                type:'line',
                color:'#DDA0DD',
                yAxisIndex: 1,
                data:<?php echo $arr4;?>,
                symbolSize:10
            },
            {
                name:'铜牌数',
                type:'bar',
                color:'#f17e0e',
                data:<?php echo $arr5;?>,
                barWidth : '50%'
            },
            {
                name:'铜牌数',
                type:'line',
                color:'#ff4f00',
                yAxisIndex: 1,
                data:<?php echo $arr5;?>,
                symbolSize:10
            }
        ]
        };                 

				
				

                // 为echarts对象加载数据
                myChart.setOption(option);
            // }
    </script>
