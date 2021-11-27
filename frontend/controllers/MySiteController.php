<?php

namespace frontend\controllers;
use app\models\Contact;
use app\models\Developer;
use frontend\models\DeveloperSearch;
use Yii;

class MysiteController extends \yii\web\Controller
{
    public $layout = 'mysite_layout';
    public function actionIndex()
    {
        $searchModel = new DeveloperSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
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
