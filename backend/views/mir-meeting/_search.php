<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMeetingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-meeting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'meeting_id') ?>

    <?= $form->field($model, 'meeting_class') ?>

    <?= $form->field($model, 'meeting_loc') ?>

    <?= $form->field($model, 'meeting_loc_e') ?>

    <?= $form->field($model, 'meeting_name') ?>

    <?php // echo $form->field($model, 'meeting_name_e') ?>

    <?php // echo $form->field($model, 'meeting_bdate') ?>

    <?php // echo $form->field($model, 'meeting_edate') ?>

    <?php // echo $form->field($model, 'meeting_pic') ?>

    <?php // echo $form->field($model, 'meeting_mem') ?>

    <?php // echo $form->field($model, 'meeting_mem_e') ?>

    <?php // echo $form->field($model, 'meeting_sub') ?>

    <?php // echo $form->field($model, 'meeting_sub_e') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
