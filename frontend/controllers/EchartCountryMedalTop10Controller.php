<?php
/**
 * Team:XJBKF,NKU
 * coding by wangyijie 1911478
 * 20211127
 */
namespace frontend\controllers;

class EchartCountryMedalTop10Controller extends \yii\web\Controller
{
	public $layout = "contact_layout";
    public function actionIndex()
    {
        return $this->render('index');
    }

}
