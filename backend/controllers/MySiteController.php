<?php
/**
 * Team:XJBKF,NKU
 * coding by wangyunhao 1911481
 * 20211127
 */
namespace frontend\controllers;

class MysiteController extends \yii\web\Controller
{
    public $layout = 'mysite_layout';
    public function actionIndex()
    {
        $this->layout = 'mysite_layout';
        return $this->render('index');
    }
}
