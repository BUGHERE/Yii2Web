<?php
/**
 * Team:XJBKF,NKU
 * coding by yanxiaoxiao 1911502
 * 20211127
 */
namespace frontend\controllers;

class EchartAthleteNumController extends \yii\web\Controller
{
	public $layout = "contact_layout";
    public function actionIndex()
    {
        return $this->render('index');
    }

}
