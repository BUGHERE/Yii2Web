<?php
/**
 * Team:XJBKF,NKU
 * coding by wangyunhao 1911481
 * 20211127
 */
namespace frontend\controllers;
use app\models\Developer;
use app\models\Info;

class ShowController extends \yii\web\Controller
{
	
    public $layout = 'mysite_layout';
    public function actionIndex()
    {   
        $model = Developer::find()->all();
        $infoModel = Info::find()->all(); 
        return $this->render('index', [
            'model' => $model,
            'infoModel' => $infoModel,
        ]);
    }
}
