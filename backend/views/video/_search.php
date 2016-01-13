<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirVideoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-video-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'video_id') ?>

    <?= $form->field($model, 'video_title') ?>

    <?= $form->field($model, 'video_title_e') ?>

    <?= $form->field($model, 'video_filename') ?>

    <?= $form->field($model, 'video_mem') ?>

    <?php // echo $form->field($model, 'video_mem_e') ?>

    <?php // echo $form->field($model, 'video_size') ?>

    <?php // echo $form->field($model, 'video_class') ?>

    <?php // echo $form->field($model, 'video_date') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
