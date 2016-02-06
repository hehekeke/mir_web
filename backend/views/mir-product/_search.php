<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'product_name_e') ?>

    <?= $form->field($model, 'product_price') ?>

    <?= $form->field($model, 'product_date') ?>

    <?php // echo $form->field($model, 'product_class') ?>

    <?php // echo $form->field($model, 'product_place') ?>

    <?php // echo $form->field($model, 'product_place_e') ?>

    <?php // echo $form->field($model, 'product_standards') ?>

    <?php // echo $form->field($model, 'product_standards_e') ?>

    <?php // echo $form->field($model, 'product_model') ?>

    <?php // echo $form->field($model, 'product_model_e') ?>

    <?php // echo $form->field($model, 'product_performance') ?>

    <?php // echo $form->field($model, 'product_performance_e') ?>

    <?php // echo $form->field($model, 'product_parameter') ?>

    <?php // echo $form->field($model, 'product_parameter_e') ?>

    <?php // echo $form->field($model, 'product_contrast') ?>

    <?php // echo $form->field($model, 'product_contrast_e') ?>

    <?php // echo $form->field($model, 'product_appraise') ?>

    <?php // echo $form->field($model, 'product_appraise_e') ?>

    <?php // echo $form->field($model, 'product_pic') ?>

    <?php // echo $form->field($model, 'product_mainclass') ?>

    <?php // echo $form->field($model, 'product_brand') ?>

    <?php // echo $form->field($model, 'product_tui') ?>

    <?php // echo $form->field($model, 'product_maker') ?>

    <?php // echo $form->field($model, 'product_disp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
