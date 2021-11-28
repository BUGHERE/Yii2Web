<?php
/**
 * Team:XJBKF,NKU
 * coding by zhangshichen 1911515
 * 20211127
 */
namespace frontend\controllers;

class EchartNewsCommentController extends \yii\web\Controller
{
	public $layout = "contact_layout";
    public function actionIndex()
    {
        return $this->render('index');
    }

}
