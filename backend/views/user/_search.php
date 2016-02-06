<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirUserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'user_name') ?>

    <?= $form->field($model, 'user_pwd') ?>

    <?= $form->field($model, 'user_class') ?>

    <?= $form->field($model, 'user_tel') ?>

    <?php // echo $form->field($model, 'user_email') ?>

    <?php // echo $form->field($model, 'user_chk') ?>

    <?php // echo $form->field($model, 'user_date') ?>

    <?php // echo $form->field($model, 'user_place') ?>

    <?php // echo $form->field($model, 'user_xm') ?>

    <?php // echo $form->field($model, 'user_com') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
