<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Classify */

$this->title = '更新分类名称相关信息';
$this->params['breadcrumbs'][] = ['label' => 'Classifies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="classify-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
