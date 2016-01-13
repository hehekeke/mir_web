<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MirVideo */

$this->title = Yii::t('app', '添加视频信息');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Videos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-video-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
