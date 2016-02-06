<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMakerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-maker-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'maker_id') ?>

    <?= $form->field($model, 'maker_name') ?>

    <?= $form->field($model, 'maker_name_e') ?>

    <?= $form->field($model, 'maker_info') ?>

    <?= $form->field($model, 'maker_info_e') ?>

    <?php // echo $form->field($model, 'maker_character') ?>

    <?php // echo $form->field($model, 'maker_character_e') ?>

    <?php // echo $form->field($model, 'maker_place') ?>

    <?php // echo $form->field($model, 'maker_place_e') ?>

    <?php // echo $form->field($model, 'maker_proclass') ?>

    <?php // echo $form->field($model, 'maker_date') ?>

    <?php // echo $form->field($model, 'maker_class') ?>

    <?php // echo $form->field($model, 'maker_contact') ?>

    <?php // echo $form->field($model, 'maker_contact_e') ?>

    <?php // echo $form->field($model, 'maker_disp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
