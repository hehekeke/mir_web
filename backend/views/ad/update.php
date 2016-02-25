<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MirAd */

$this->title = Yii::t('app', '更新 {modelClass}: ', [
    'modelClass' => '广告',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Ads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mir-ad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
