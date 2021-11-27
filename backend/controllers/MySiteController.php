<?php

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
