<?php

namespace frontend\controllers;
use app\models\Contact;
use app\models\Developer;
use app\models\Info;
use frontend\models\DeveloperSearch;
use Yii;

class MysiteController extends \yii\web\Controller
{
    public $layout = 'mysite_layout';
    public function actionIndex()
    {
//      $searchModel = new DeveloperSearch();
//      $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        $model = Developer::find()->all();
        $infoModel = Info::find()->all(); 
        return $this->render('index', [
            'model' => $model,
            'infoModel' => $infoModel,
        ]);
    }
    public function actionForm()
    {
        $this->layout = 'main';
        $model = new Contact();
        return $this->render('form', [
            'model' => $model,
        ]);
    }
}
