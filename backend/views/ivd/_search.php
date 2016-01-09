<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirIvdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-ivd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mir360_id') ?>

    <?= $form->field($model, 'mir360_title') ?>

    <?= $form->field($model, 'mir360_title_e') ?>

    <?= $form->field($model, 'mir360_class') ?>

    <?= $form->field($model, 'mir360_pic') ?>

    <?php // echo $form->field($model, 'mir360_date') ?>

    <?php // echo $form->field($model, 'mir360_remark') ?>

    <?php // echo $form->field($model, 'mir360_remark_e') ?>

    <?php // echo $form->field($model, 'mir360_company') ?>

    <?php // echo $form->field($model, 'mir360_company_e') ?>

    <?php // echo $form->field($model, 'mir360_zy') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
