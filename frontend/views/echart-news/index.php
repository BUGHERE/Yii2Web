<?php
/**
 * Team:XJBKF,NKU
 * coding by zhangshichen 1911515
 * 20211127
 */
/* @var $this yii\web\View */
?>
<h1>新闻发表数变化趋势</h1>

    <div id="main" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        var  myChart = echarts.init(document.getElementById('main'));
                              var news_time=[];
                              var number=[];
                                  $.ajax({
                                  type : "post",
                                  async : false, //同步执行
                                  url : "echarts/data_news.php",
                                  data : {},
                                  dataType : "json", //返回数据形式为json
                                  success : function(result) {
                                  if (result) {
                                    console.log(result);
                                    for(var i=0;i<result.length;i++){
                                                  console.log(String(result[i].news_time));
                                                  console.log(result[i].number);
                                                  news_time.push(String(result[i].news_time));
                                                  number.push(result[i].number);
                                                }
                                  }
                              },
                              error : function(errorMsg) {
                                  alert("sorry，请求数据失败");
                                  myChart.hideLoading();
                              }
                             })

option = {
  title:{
    text:'新闻发表数变化趋势',
    subtext:'展示奥运相关新闻的数量变化趋势',
    left:'center'
  },
  xAxis: {
    type: 'category',
    data: news_time,
    name: '发表时间',
  },
  yAxis: {
    type: 'value',
    name: '发表数'
  },
  series: [
    {
      data: number,
      type: 'line',
      smooth: true
    }
  ]
};

          // 为echarts对象加载数据
          myChart.setOption(option);
      // }
</script>