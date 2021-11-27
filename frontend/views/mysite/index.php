<?php
/* @var $this yii\web\View */   
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Contact;
    $this->title = 'NK';
    //include_once('index.html');
?>
<!doctype html>
<html lang="en">
    <head>
       <meta charset="utf-8">
        <!-- ========== META TAGS ========== -->
        <meta name="description" content="HTML5">
        <meta name="keywords" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ========== CSS ========== -->
        <link rel="stylesheet" href="statics/mysite/css/animate.css">
        <link rel="stylesheet" href="statics/mysite/css/site.css">
        <link rel="stylesheet" href="statics/mysite/css/bootstrap.min.css">
        <link rel="stylesheet" href="statics/mysite/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:500" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
        <link rel="stylesheet" href="statics/mysite/assets/css/bootstrap.min.css" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="statics/mysite/assets/css/animate.css" media="screen">
        <link href="statics/mysite/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="statics/mysite/css/owl.carousel.min.css">
        <link rel="stylesheet" href="statics/mysite/css/owl.theme.min.css">
        <link rel="stylesheet" href="statics/mysite/css/animation.css">
        <link rel="stylesheet" href="statics/mysite/css/button.css">
        <link rel="stylesheet" href="statics/mysite/css/style.css">
        <!-- ========== JQUERY PLUGIN ========== -->

        <script src="statics/mysite/js/ajax-jquery.min.js"></script>

    </head><!-- end head -->

    <body>
        <div class="se-pre-con"></div><!-- ========== PRELOADER ========== -->
        <!-- ========== MENUBAR ========== -->


        <div class="main-page-content">
            <div id="home">
                <div id="particles-js"></div>
                <div class="home-content-main">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row home-row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="home-text wow fadeIn text-center">
                                        <div class="about-social-icon text-center">
                                            <ul class="about-social"> 
                                                <li><a href="www.facebook.com" target="newtab"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="www.twitter.com" target="newtab"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="www.pinterest.com" target="newtab"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                                <li><a href="www.linkedin.com" target="newtab"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li><a href="www.behance.com" target="newtab"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                                <li><a href="www.instagram.com" target="newtab"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div><!-- end about-social-icon -->
                                        <h2>Yii2Web</h2>
                                        <a href="https://github.com/BUGHERE/Yii2Web" class="hvr-bounce-to-right leftbutt">Contact Us</a>
                                        <div class="home-arrow">
                                            <a class="smothscroll" href="#about"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                                        </div><!-- end home-arrow  -->
                                    </div><!-- end home-text  -->
                                </div><!-- end col-md-8 -->
                            </div><!-- end row  -->
                        </div><!-- end container -->
                    </div><!-- end table-cell -->
                </div><!-- end home-content-main  -->
                <div class="curve">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <svg id="curveUpColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" style="position:absolute; padding-bottom:o; margin-bottom:0; fill: white; stroke: white; bottom:-1px;left: 0px;" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0 100 C 20 0 50 0 100 100 Z"></path></svg>
                            </div><!-- end col-md-12  -->
                        </div><!-- end row  -->
                    </div><!-- end container fluid  -->
                </div><!-- end curve  -->
            </div><!-- end home  -->

            <!-- ================================ ABOUT =============================== -->

            <div class='scrolltop'>
                <div class='scroll icon'><a href="#home"><i class="fa fa-4x fa-angle-up topicon"></i></a></div>
            </div><!-- end scrolltop  -->
            <div id="about">
                <div class="about-content">
                    <div class="me-grid wow fadeIn">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12 about-col">
                                    <div class="about-image">
                                        <img src="statics/mysite/img/about.jpg" alt="" class="about-img">
                                    </div><!-- end about-image  -->
                                </div><!-- end col-md-4  -->
                                <div class="col-md-8 col-sm-6 col-xs-12 about-col">
                                    <div class="about-details">
                                        <br>
                                        <h3>大家好  我们是XJBKF开发小组</h3>
                                        <br>
                                        <p>这是我们小组的作品展示</p>
                                        <p>在这个网站上，你可以下载浏览我们的课程作业</p>
                                        <p>如果你感兴趣，欢迎前往我们的GitHUb仓库，查看更详细的信息！</p>
                                        <br><br>
                                        <a href="https://github.com/BUGHERE/Yii2Web" class="hvr-bounce-to-right leftbutt colorbutton">Contact Us</a>
                                    </div><!-- end about-details  -->
                                </div><!-- end col-md-8  -->
                            </div><!-- end row  -->
                        </div><!-- end container  -->
                    </div><!-- end me-grid  -->
                    <div class="work-counter text-left">
                        <div id="counter">
                            <div class="container">
                                <div class="row no-margin">
                                    <div class="col-md-3 col-sm-6 no-padding">
                                        <div class="work-statistics one text-center">
                                            <i class="fa fa-crop stat-icon" aria-hidden="true"></i>
                                            <!-- <h3 class="Count">2</h3> -->
                                            <!-- <p>Graphics Design</p> -->
                                        </div><!-- end work-statistics  -->
                                    </div><!-- end col-md-3  -->
                                    <div class="col-md-3 col-sm-6 no-padding">
                                        <div class="work-statistics two text-center">
                                            <i class="fa fa-rocket stat-icon" aria-hidden="true"></i>
                                            <!-- <h3 class="Count">0</h3> -->
                                            <!-- <p>Graphics Design</p> -->
                                        </div><!-- end work-statistics  -->
                                    </div><!-- end col-md-3  -->
                                    <div class="col-md-3 col-sm-6 no-padding">
                                        <div class="work-statistics three text-center">
                                            <i class="fa fa-bolt stat-icon" aria-hidden="true"></i>
                                            <!-- <h3 class="Count">2</h3> -->
                                            <!-- <p>Website Created</p> -->
                                        </div><!-- end work-statistics  -->
                                    </div><!-- end col-md-3  -->
                                    <div class="col-md-3 col-sm-6 no-padding">
                                        <div class="work-statistics four text-center">
                                            <i class="fa fa-coffee stat-icon" aria-hidden="true"></i>
                                            <!-- <h3 class="Count">1</h3> -->
                                            <!-- <p>Coffee Taken</p> -->
                                        </div><!-- end work-statistics  -->
                                    </div><!-- end col-md-3  -->
                                </div><!-- end row  -->
                            </div><!-- end container-fluid  -->
                        </div><!-- end counter  -->
                    </div><!-- end work-counter  -->
                </div><!-- end about-content  -->
            </div><!-- end about  -->

            <!-- ================================ WORK =============================== -->
            
            <div id="work">
                <div class="blog-content">
                    <div class="blog-grid">
                        <div class="blog-details wow fadeIn text-left">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-title text-center">
                                            <h3>作品</h3>
                                            <!-- <p>互联网数据库开发</p> -->
                                            <br>
                                            <p>XJBKF</P>
                                            <P>我们制作了一系列有关于奥运会的图表</p>
                                            <br><br>
                                        </div><!-- end work-title  -->
                                    </div><!-- end col-md-12  -->
                                </div><!-- end row  -->
                                <div class="row main-row">
                                    <div class="col-md-2 col-sm-4">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <a href="<?php echo Url::to(['/chart1']) ?> ">
                                                	<img src="statics/mysite/img/about.jpg" alt="" class="about-img" title="chart1"></img>
                                                </a>
                                            </div><!-- end post-image  -->
                                        </div><!-- end post-slide  -->
                                    </div><!-- end col-md-2  --> 
                                    <div class="col-md-2 col-sm-4">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <a href="<?php echo Url::to(['/chart1']) ?> ">
                                                	<img src="statics/mysite/img/about.jpg" alt="" class="about-img" title="chart1"></img>
                                                </a>                                            </div><!-- end post-image  -->
                                        </div><!-- end post-slide  -->
                                    </div><!-- end col-md-2  -->
                                    <div class="col-md-2 col-sm-4">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <a href="<?php echo Url::to(['/chart1']) ?> ">
                                                	<img src="statics/mysite/img/about.jpg" alt="" class="about-img" title="chart1"></img>
                                                </a>                                            </div><!-- end post-image  -->
                                        </div><!-- end post-slide  -->
                                    </div><!-- end col-md-2  -->
                                    <div class="col-md-2 col-sm-4">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <a href="<?php echo Url::to(['/chart1']) ?> ">
                                                	<img src="statics/mysite/img/about.jpg" alt="" class="about-img" title="chart1"></img>
                                                </a>                                            </div><!-- end post-image  -->
                                        </div><!-- end post-slide  -->
                                    </div><!-- end col-md-2  -->
                                    <div class="col-md-2 col-sm-4">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <a href="<?php echo Url::to(['/chart1']) ?> ">
                                                	<img src="statics/mysite/img/about.jpg" alt="" class="about-img" title="chart1"></img>
                                                </a>                                            </div><!-- end post-image  -->
                                        </div><!-- end post-slide  -->
                                    </div><!-- end col-md-2  -->
                                    <div class="col-md-2 col-sm-4">
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <a href="<?php echo Url::to(['/chart1']) ?> ">
                                                	<img src="statics/mysite/img/about.jpg" alt="" class="about-img" title="chart1"></img>
                                                </a>                                            </div><!-- end post-image  -->
                                        </div><!-- end post-slide  -->
                                    </div><!-- end col-md-2  -->
                                </div><!-- end row  --> 
                            </div><!-- end container  --> 
                        </div><!-- end testimonials-details  -->
                    </div><!-- end testimonial-grid  --> 
                </div><!-- end testimonial-content  --> 
            </div><!-- end blog  --> 

            <!-- ================================ black block =============================== -->

            <div class="work-counter text-left">
                <div id="counter">
                    <div class="container">
                        <div class="row no-margin">
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics one text-center">
                                    <i class="fa fa-crop stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">2</h3> -->
                                    <!-- <p>Graphics Design</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics two text-center">
                                    <i class="fa fa-rocket stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">0</h3> -->
                                    <!-- <p>Graphics Design</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics three text-center">
                                    <i class="fa fa-bolt stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">2</h3> -->
                                    <!-- <p>Website Created</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics four text-center">
                                    <i class="fa fa-coffee stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">1</h3> -->
                                    <!-- <p>Coffee Taken</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                        </div><!-- end row  -->
                    </div><!-- end container-fluid  -->
                </div><!-- end counter  -->
            </div><!-- end work-counter  -->
        </div><!-- end about-content  -->
            <!-- ================================ HOMEWORK =============================== -->

            <div id="homework">
                <div id="work-content">
                    <div class="work-grid wow fadeIn">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-title text-center">
                                        <h3>个人作业</h3>
                                        <p>XJBKF</p>
                                    </div><!-- end work-title  -->
                                </div><!-- end col-md-12  -->
                            </div><!-- end row  -->
                        </div><!-- end container  -->
                        <div class="work-details">
                            <div class="container" style="padding-left: 15%;padding-right: 15%;">
                                <ul id="filters" class="clearfix" style="padding-left: 5%;">
                                    <li><span class="filter active" data-filter=".web, .graphics, .development, .photography">All</span></li>
                                    <li><span class="filter" data-filter=".web">王云浩</span></li>
                                    <li><span class="filter" data-filter=".graphics">王艺杰</span></li>
                                    <li><span class="filter" data-filter=".development">闫晓晓</span></li>
                                    <li><span class="filter" data-filter=".photography">张世辰</span></li>
                                </ul>
                                <div id="portfoliolist">
                                    <div class="portfolio web" data-cat="web" style="padding: 5%;">
                                        <div class="portfolio-wrapper" data-wow-delay=".2s">
                                            <div class="overlay text-center">
                                                <div class="port-over"></div>
                                                <div class="overlay-main">
                                                    <div class="table-cell">
                                                        <a href="statics/mysite/download/homework_wyh.zip"><i class="fa fa-download work-icon"></i></a>
                                                    </div><!-- end table-cell  -->
                                                </div><!-- end overlay-main  -->
                                            </div><!-- end overlay  -->
                                            <center><p style="color:white"><br><br><br><br>王云浩的个人作业<br><br><br><br><br></p></center>
                                        </div><!-- end portfolio-wrapper  -->
                                    </div><!-- end portfolio-graphics  -->              
                                    <div class="portfolio graphics" data-cat="graphics" style="padding: 5%;">
                                        <div class="portfolio-wrapper" data-wow-delay=".4s">    
                                            <div class="overlay text-center">
                                                <div class="port-over"></div>
                                                <div class="overlay-main">
                                                    <div class="table-cell">
                                                        <a href="statics/mysite/download/homework_wyj.zip"><i class="fa fa-download work-icon"></i></a>
                                                    </div><!-- end table-cell  -->
                                                </div><!-- end overlay-main  -->
                                            </div><!-- end overlay  -->
                                            <center><p style="color:white"><br><br><br><br>王艺杰的个人作业<br><br><br><br><br></p></center>
                                        </div><!-- end portfolio-wrapper  -->
                                    </div><!-- end portfolio-web  -->   
                                    <div class="portfolio development" data-cat="development" style="padding: 5%;">
                                        <div class="portfolio-wrapper" data-wow-delay=".6s">    
                                            <div class="overlay text-center">
                                                <div class="port-over"></div>
                                                <div class="overlay-main">
                                                    <div class="table-cell">
                                                        <a href="statics/mysite/download/homework_yxx.zip"><i class="fa fa-download work-icon"></i></a>
                                                    </div><!-- end table-cell  -->
                                                </div><!-- end overlay-main  -->
                                            </div><!-- end overlay  -->
                                            <center><p style="color:white"><br><br><br><br>闫晓晓的个人作业<br><br><br><br><br></p></center>
                                        </div><!-- end portfolio-wrapper  -->
                                    </div><!-- end portfolio-development  -->           
                                    <div class="portfolio photography" data-cat="photography" style="padding: 5%;">
                                        <div class="portfolio-wrapper" data-wow-delay=".8s">    
                                            <div class="overlay text-center">
                                                <div class="port-over"></div>
                                                <div class="overlay-main">
                                                    <div class="table-cell">
                                                        <a href="statics/mysite/download/homework_zsc.zip"><i class="fa fa-download work-icon"></i></a>
                                                    </div><!-- end table-cell  -->
                                                </div><!-- end overlay-main  -->
                                            </div><!-- end overlay  -->
                                            <center><p style="color:white"><br><br><br><br>张世辰的个人作业<br><br><br><br><br></p></center>
                                        </div><!-- end portfolio-wrapper  -->
                                    </div><!-- end portfolio-graphics  -->
                                </div><!-- end portfoliolist  -->
                            </div><!-- container -->
                        </div><!-- end work-details  -->
                    </div><!-- end work-grid  -->
                </div><!-- end work-content  -->
            </div><!-- end work  --> 

            <!-- ================================ black block =============================== -->

            <div class="work-counter text-left">
                <div id="counter">
                    <div class="container">
                        <div class="row no-margin">
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics one text-center">
                                    <i class="fa fa-crop stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">2</h3> -->
                                    <!-- <p>Graphics Design</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics two text-center">
                                    <i class="fa fa-rocket stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">0</h3> -->
                                    <!-- <p>Graphics Design</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics three text-center">
                                    <i class="fa fa-bolt stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">2</h3> -->
                                    <!-- <p>Website Created</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics four text-center">
                                    <i class="fa fa-coffee stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">1</h3> -->
                                    <!-- <p>Coffee Taken</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                        </div><!-- end row  -->
                    </div><!-- end container-fluid  -->
                </div><!-- end counter  -->
            </div><!-- end work-counter  -->
        </div><!-- end about-content  -->

            <!-- ================================ BLOG ========================== -->
			<!--超过四个developer，布局会乱-->
            <div id="blog">  
                <div class="blog-content">
                    <div class="blog-grid">
                        <div class="blog-details wow fadeIn text-left">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-title text-center">
                                            <h3>开发人员</h3>
                                            <!-- <p>互联网数据库开发</p> -->
                                            <br><br><br>
                                        </div><!-- end work-title  -->
                                    </div><!-- end col-md-12  -->
                                </div><!-- end row  -->
                                <?php 
					            	$arrlength=count($model);
									for($x=0;$x<$arrlength;$x++)
									{
										echo '<div class="row main-row">
		                                    <div class="col-md-3 col-sm-4">
		                                        <div class="post-slide">
		                                            <div class="post-img">
		                                                <a href="#"><img src="statics/mysite/img/developer';
		                                           			echo $x + 1;
		                                                	echo '.jpg" alt=""></a>
		                                            </div><!-- end post-image  -->
		                                            <div class="post-content">
		                                                <h3 class="post-title"><a href="#">';
		                                                	echo $model[$x]->name;
		                                                		echo '</a></h3>
		                                                <p class="post-description">';
		                                                    echo $model[$x]->description;
		                                                echo '</p>
		                                                <ul class="post-bar">
		                                                    <li><i class="fa fa-calendar"></i>';
		                                                    	echo $model[$x]->date;
		                                                    		
		                                                    	echo '</li>
		                                                    <li>
		                                                        <i class="fa fa-map-marker"></i>
		                                                        <a>';
		                                                        	echo $model[$x]->location;
		                                                        		
		                                                        	echo '</a>
		                                                    </li>
		                                                </ul>
		                                                <a href=';
		                                                	echo $model[$x]->contact;
		                                                		echo 'class="hvr-bounce-to-right leftbutt colorbutton">Contact Me</a>
		                                            </div><!-- end post-content  -->
		                                        </div><!-- end post-slide  -->
		                                    </div><!-- end col-md-4  --> ';
									}
								?>	
                                
                                
                            </div><!-- end container  --> 
                        </div><!-- end testimonials-details  -->
                    </div><!-- end testimonial-grid  --> 
                </div><!-- end testimonial-content  --> 
            </div><!-- end blog  --> 

            <!-- ================================ black block =============================== -->

            <div class="work-counter text-left">
                <div id="counter">
                    <div class="container">
                        <div class="row no-margin">
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics one text-center">
                                    <i class="fa fa-crop stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">2</h3> -->
                                    <!-- <p>Graphics Design</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics two text-center">
                                    <i class="fa fa-rocket stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">0</h3> -->
                                    <!-- <p>Graphics Design</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics three text-center">
                                    <i class="fa fa-bolt stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">2</h3> -->
                                    <!-- <p>Website Created</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                            <div class="col-md-3 col-sm-6 no-padding">
                                <div class="work-statistics four text-center">
                                    <i class="fa fa-coffee stat-icon" aria-hidden="true"></i>
                                    <!-- <h3 class="Count">1</h3> -->
                                    <!-- <p>Coffee Taken</p> -->
                                </div><!-- end work-statistics  -->
                            </div><!-- end col-md-3  -->
                        </div><!-- end row  -->
                    </div><!-- end container-fluid  -->
                </div><!-- end counter  -->
            </div><!-- end work-counter  -->
            
            <!-- ================================ INFO =============================== -->
            
            <div id="info">  
	        	<?php 
	            	$arrlength=count($infoModel);
					for($x=0;$x<$arrlength;$x++)
					{
						echo '<center><div class="contactbottom"><div class="container text-center contact-container"><ul class="list-group">';
						echo '<li class="list-group-item" ><h3>';
						echo $infoModel[$x]->subject;
						echo "\n\n";
						echo "</h3>";
						echo "<p>";
						echo $infoModel[$x]->message;
						echo "</p></li>";
						echo '</center></ul></div></div>';
					}
				?>			
            </div>

            <!-- ================================ CONTACT =============================== -->

            <div id="contact">
                <div id="contact-content">
                    <div class="contact-grid">
                        <div class="contact-form-details">
                            <div class="container">
                                <a style="text-decoration:none;" href="<?php echo Url::to(['/contact/create']) ?> ">
	                                <div class="main-title white-title text-center ">
	                                    <h3>联系我们</h3>
	                                </div><!-- end contact-title -->
	                            </a>
                            </div><!-- end container -->
                            <br><br><br><br><br><br><br><br>
                            <div class="contactbottom">
                                <div class="container text-center contact-container">
                                    <div class="row contact-row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="contact-col-grid" data-wow-delay=".2s">
                                                <i class="fa fa-map-marker contact-icon" aria-hidden="true"></i>
                                                <h3>Address</h3>
                                                <p>天津，津南</p>
                                            </div><!-- end contact-col  -->
                                        </div><!-- end col-md-3  -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="contact-col-grid" data-wow-delay=".4s">
                                                <i class="fa fa-envelope contact-icon" aria-hidden="true"></i>
                                                <h3>Email</h3>
                                                <p>1234qwer@qq.com</p>
                                            </div><!-- end contact-col  -->
                                        </div><!-- end col-md-3  -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="contact-col-grid" data-wow-delay=".6s">
                                                <i class="fa fa-mobile contact-icon" aria-hidden="true"></i>
                                                <h3>Phone</h3>
                                                <p>+2863482364</p>
                                            </div><!-- end contact-col  -->
                                        </div><!-- end col-md-3  -->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="contact-col-grid" data-wow-delay=".6s">
                                                <i class="fa fa-television contact-icon" aria-hidden="true"></i>
                                                <h3>Web</h3>
                                                <p><a href="https://github.com/BUGHERE/Yii2Web" style="color:white;">Yii2Web</a></p>
                                            </div><!-- end contact-col  -->
                                        </div><!-- end col-md-3  -->
                                    </div><!-- end row  -->
                                </div><!-- end container  -->
                            </div><!-- end contactbottom -->
                        </div><!-- end contact-form-details -->
                        <br><br>
                        <center>
                            <a href="http://beian.miit.gov.cn/" style="color:white"><span>闽ICP备2021016825号</span></a>
                            <div style="width:300px;margin:0 auto; padding:20px 0;">
                                <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=12011202000571" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="statics/mysite/img/icon.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">津公网安备 12011202000571号</p></a>
                            </div>
                        </center>
                        <br><br><br><br>
                    </div><!-- end contact-grid -->
                </div><!-- end contact-content -->
            </div><!-- end contact -->
        </div><!-- end main-page -->

        <!-- ================================ JQUERY =============================== -->

        <script src="statics/mysite/js/bootstrap.min.js"></script>
        <script src="statics/mysite/js/wow.js"></script>
        <script src="statics/mysite/js/wow-anim.js"></script>
        <script src="statics/mysite/assets/js/form-validator.min.js"></script>  
        <script src="statics/mysite/assets/js/contact-form-script.js"></script> 
        <script src="statics/mysite/js/jquery.scrolly.js"></script>
        <script src="statics/mysite/js/jquery.fancybox.js?v=2.1.5"></script>
        <script src="statics/mysite/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script src="statics/mysite/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <script src="statics/mysite/js/jquery.fancybox-media.js?v=1.0.6"></script> 
        <script src="statics/mysite/js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script src="statics/mysite/js/jquery.mixitup.min.js"></script>
        <script src="statics/mysite/js/jquery.counterup.min.js"></script>
        <script src="statics/mysite/js/owl.carousel.min.js"></script>
        <script src="statics/mysite/js/main.js"></script>
        <script src="statics/mysite/js/map.js"></script>
        <script src="statics/mysite/js/particles.js"></script>
        <script src="statics/mysite/js/app.js"></script>
        <script src="statics/mysite/js/map.js"></script>
        
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDd2ucL7dvtp2E0CbUhOFtoCH2kLX-6QW8&callback=myMap"></script> -->
        
    </body><!-- end body -->
</html><!-- end html -->
