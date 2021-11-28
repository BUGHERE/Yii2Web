<?php

namespace backend\controllers;

class ShowController extends \yii\web\Controller
{
	public $layout = "developer_layout"; 
    public function actionIndex()
    {
        return $this->render('index');
    }

}