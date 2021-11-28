<?php
/**
 * Team:XJBKF,NKU
 * coding by wangyunhao 1911481
 * 20211127
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DeveloperSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Developers';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="content">
    <div class="container-fluid">
		<div class="developer-index">
		    <h1><?= Html::encode($this->title) ?></h1>
		    <p>
		        <?= Html::a('Create Developer', ['create'], ['class' => 'btn btn-success']) ?>
		    </p>
		    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
		    <?= GridView::widget([
		        'dataProvider' => $dataProvider,
		        'filterModel' => $searchModel,
		        'columns' => [
		            ['class' => 'yii\grid\SerialColumn'],
		
		            'id',
		            'name',
		            'description',
		            'date',
		            'location',
		            //'contact',
		
		            ['class' => 'yii\grid\ActionColumn'],
		        ],
		    ]); ?>
		</div>
	</div>
</div>
    