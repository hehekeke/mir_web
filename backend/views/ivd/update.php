<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MirIvd */

$this->title = Yii::t('app', '更新 {modelClass}: ', [
    'modelClass' => 'Ivd访谈',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Ivds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mir360_id, 'url' => ['view', 'id' => $model->mir360_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mir-ivd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
