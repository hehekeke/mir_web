<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Classify */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classify-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ModuleID')->textInput() ?>

    <?= $form->field($model, 'RootID')->textInput() ?>

    <?= $form->field($model, 'Depth')->textInput() ?>

    <?= $form->field($model, 'ClassName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ClassName_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Readme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Orders')->textInput() ?>

    <?= $form->field($model, 'ParentID')->dropDownList(['1'=>'一级','2'=>['3'=>'子1','4'=>'子2']]) ?>

    <?= $form->field($model, 'ParentStr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Child')->textInput() ?>

    <?= $form->field($model, 'ChildStr')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
