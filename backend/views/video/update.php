<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MirVideo */

$this->title = Yii::t('app', '{modelClass}: ', [
    'modelClass' => '修改视频信息',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Videos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->video_id, 'url' => ['view', 'id' => $model->video_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mir-video-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
