<?php
/**
 * Team:XJBKF,NKU
 * coding by wangyunhao 1911481
 * 20211127
 */
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
        <div class="menubar">
            <div class="menubar-content">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="site-title">
                                    <h3><span>NK</span>University</h3>
                                </div><!-- end site-title -->
                            </div><!-- end col-md-4 -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button><!-- end button -->
                            </div><!-- end navbar-header -->
                            <div class="col-md-10 col-sm-10 navbar-style">
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="#home" class="active">主页</a>
                                        </li>
                                        <li>
                                            <a href="#about">关于我们</a>
                                        </li>

                                        <li>
                                            <a href="#work">作品</a>
                                        </li>
                                        
                                        <li>
                                            <a href="#homework">作业</a>
                                        </li>

                                        <li>
                                            <a href="#blog">成员</a>
                                        </li>
                                        
                                        <li>
                                            <a href="#info">通知</a>
                                        </li>
                                        <li>
                                            <a href="#contact">联系我们</a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/BUGHERE/Yii2Web">GitHub仓库</a>
                                        </li>
                                    </ul><!-- end nav -->
                                </div><!-- end collapse navbar-collapse -->
                            </div><!-- end col-md-8 -->
                        </div><!-- end row -->
                    </div><!-- end container-fluid -->
                </nav><!-- navbar -->
            </div><!-- end menubar-content -->
        </div><!-- end menubar -->
		<?php $this->beginBody() ?>
		    <?= Alert::widget() ?>
		    <?= $content ?>
		<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>