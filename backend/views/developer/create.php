<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Developer */

$this->title = 'Create Developer';
$this->params['breadcrumbs'][] = ['label' => 'Developers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="developer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
