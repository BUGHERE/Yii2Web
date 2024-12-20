<?php
/**
 * Team:XJBKF,NKU
 * coding by wangyunhao 1911481
 * 20211127
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use common\widgets\Alert;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DeveloperSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Frontend';
$this->params['breadcrumbs'][] = $this->title;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	    <script src="echarts/js/echarts.min.js"></script>
    <script src="echarts/js/jquery.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    N   k
                </a>
            </div>

            <ul class="nav">
            	<li class="active">
                    <a href="<?php echo Url::to(['/echart2016interval-num']) ?> ">
                        <i class="pe-7s-graph"></i>
                        <p>2016年派出运动员区间个数</p>
                    </a>
                </li>
            	<li class="active">
                    <a href="<?php echo Url::to(['/echart-athlete-num']) ?> ">
                        <i class="pe-7s-graph"></i>
                        <p>运动员逐年变化情况</p>
                    </a>
                </li>
            	<li class="active">
                    <a href="<?php echo Url::to(['/echart-china-medal-num']) ?> ">
                        <i class="pe-7s-graph"></i>
                        <p>中国奖牌数量</p>
                    </a>
                </li>
            	<li class="active">
                    <a href="<?php echo Url::to(['/echart-country-medal-top10']) ?> ">
                        <i class="pe-7s-graph"></i>
                        <p>奖牌总数前十国家奖牌分布</p>
                    </a>
                </li>
            	<li class="active">
                    <a href="<?php echo Url::to(['/echart-news']) ?> ">
                        <i class="pe-7s-graph"></i>
                        <p>新闻发表数变化趋势</p>
                    </a>
                </li>
            	<li class="active">
                    <a href="<?php echo Url::to(['/echart-news-comment']) ?> ">
                        <i class="pe-7s-graph"></i>
                        <p>新闻评论数展示</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo Url::to(['/contact']) ?> ">
                        <i class="pe-7s-graph"></i>
                        <p>联系我们</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
    	
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
               
                <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-right">
                    </ul>
                </div>
            </div>
        </nav>
        
        <div style="padding-left: 5%;padding-right: 5%;">

			<?php $this->beginBody() ?>
			    <?= Alert::widget() ?>
			    <?= $content ?>
			<?php $this->endBody() ?>
                	
        </div>
        
        <div align="right">
	        <btn class="btn btn-lg">
	            <a href="<?php echo Url::to(['/show']) ?> " sytle="color:white;" >主页</a>
	        </btn>
	    </div>
        
        </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!---<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>--->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to XJBKF's Web"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>