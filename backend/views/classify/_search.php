<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClassifySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classify-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'ModuleID') ?>

    <?= $form->field($model, 'RootID') ?>

    <?= $form->field($model, 'Depth') ?>

    <?= $form->field($model, 'ClassName') ?>

    <?php // echo $form->field($model, 'ClassName_e') ?>

    <?php // echo $form->field($model, 'Readme') ?>

    <?php // echo $form->field($model, 'Orders') ?>

    <?php // echo $form->field($model, 'ParentID') ?>

    <?php // echo $form->field($model, 'ParentStr') ?>

    <?php // echo $form->field($model, 'Child') ?>

    <?php // echo $form->field($model, 'ChildStr') ?>

    <?php // echo $form->field($model, 'ShowCount') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
