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
<h1>运动员逐年变化情况</h1>
  <div id="next" style="height:400px"></div>
    <script type="text/javascript">
        var  myChart = echarts.init(document.getElementById('next'));
                              var num=[];
                              var year=[];
                                  $.ajax({
                                  type : "post",
                                  async : false, //同步执行
                                  url : "echarts/data_athlete_num.php",
                                  data : {},
                                  dataType : "json", //返回数据形式为json
                                  success : function(result) {
                                  if (result) {
                                        console.log(result);
                                               for(var i=0;i<result.length;i++){
                                                  console.log(result[i].num);
                                                  console.log(result[i].year);
                                                  num.push(result[i].num);
                                                  year.push(result[i].year);
                                                }
                                  }

                              },
                              error : function(errorMsg) {
                                  alert("sorry，请求数据失败");
                                  myChart.hideLoading();
                              }
                             })
                             option = {
  xAxis: {
    type: 'category',
    data: year
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: num,
      type: 'line'
    }
  ]
};
          // 为echarts对象加载数据
          myChart.setOption(option);
      // }
</script>
