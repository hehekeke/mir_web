<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-product-form">
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_name_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_price')->textInput() ?>

    <?= $form->field($model, 'product_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_place_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_standards')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_standards_e')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_model')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_model_e')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_performance')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_performance_e')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_parameter')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_parameter_e')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_contrast')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_contrast_e')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_appraise')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_appraise_e')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_mainclass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_tui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_maker')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_disp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
