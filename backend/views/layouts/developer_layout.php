<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use backend\assets\AppAsset;
use common\widgets\Alert;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DeveloperSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Backend';
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
                    <a href="<?php echo Url::to(['/developer']) ?> ">
                        <i class="pe-7s-graph"></i>
                        <p>Developers</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo Url::to(['/info']) ?> ">
                        <i class="pe-7s-graph"></i>
                        <p>Infos</p>
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
                        <li>
                           <a href="<?php echo Url::to(['/developer']) ?> ">
                               Home
                            </a>
                        </li>
                        <li>
                           <a href="frontend">
                               Frontend
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Url::to(['/site']) ?>">
                                Log in
                            </a>
                        </li>
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