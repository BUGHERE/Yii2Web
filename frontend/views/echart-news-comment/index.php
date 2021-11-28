<?php
/**
 * Team:XJBKF,NKU
 * coding by zhangshichen 1911515
 * 20211127
 */
/* @var $this yii\web\View */
?>
<h1>新闻评论数展示</h1>
    <div id="main" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        var  myChart = echarts.init(document.getElementById('main'));
                              var news_id=[];
                              var number=[];
                                  $.ajax({
                                  type : "post",
                                  async : false, //同步执行
                                  url : "echarts/data_news_comment.php",
                                  data : {},
                                  dataType : "json", //返回数据形式为json
                                  success : function(result) {
                                  if (result) {
                                    console.log(result);
                                    for(var i=0;i<result.length;i++){
                                                  console.log(result[i].news_id);
                                                  console.log(result[i].number);
                                                  news_id.push(result[i].news_id);
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
    text:'新闻评论数展示',
    subtext:'展示新闻对应的评论数',
    left:'center'
  },
  xAxis: {
    type: 'category',
    data: news_id,
    name: '新闻标签'
  },
  yAxis: {
    type: 'value',
    name: '评论数'
  },
  series: [
    {
      data: number,
      type: 'bar',
      showBackground: true,
      backgroundStyle: {
        color: 'rgba(180, 180, 180, 0.2)'
      }
    }
  ]
};

          // 为echarts对象加载数据
          myChart.setOption(option);
      // }
</script>
