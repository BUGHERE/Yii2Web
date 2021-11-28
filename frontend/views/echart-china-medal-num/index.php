<?php
/**
 * Team:XJBKF,NKU
 * coding by yanxiaoxiao 1911502
 * 20211127
 */
use yii\helpers\Url;	
/* @var $this yii\web\View */
?>
    <script src="echarts/js/echarts.min.js"></script>
    <script src="echarts/js/jquery.js"></script>
<h1>中国奖牌数量</h1>
    <div id="main" style="height:400px" style="background-color: black;"></div>
    <script type="text/javascript">
              var  myChart = echarts.init(document.getElementById('main'));
                                    var arr=[];
                                        $.ajax({
                                        type : "post",
                                        async : false, //同步执行
                                        url : "echarts/data_china_medal_num.php",
                                        data : {},
                                        dataType : "json", //返回数据形式为json
                                        success : function(result) {
                                        if (result) {
                                              console.log(result);
                                              arr.push(result[0].gold);
                                              arr.push(result[0].silver);
                                              arr.push(result[0].cu);
                                        }
 
                                    },
                                    error : function(errorMsg) {
                                        alert("sorry，请求数据失败");
                                        myChart.hideLoading();
                                    }
                                   })
              option = {
  title: {
    text: 'Referer of a Website',
    subtext: 'Fake Data',
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
      name: 'Access From',
      type: 'pie',
      radius: '50%',
      data: [ { value: arr[0], name: 'gold' },
        { value: arr[1], name: 'silver' },
        { value: arr[2], name: 'Cu' }],
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
