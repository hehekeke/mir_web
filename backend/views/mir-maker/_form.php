<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMaker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-maker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'maker_id')->textInput() ?>

    <?= $form->field($model, 'maker_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maker_name_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maker_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'maker_info_e')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'maker_character')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maker_character_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maker_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maker_place_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maker_proclass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maker_date')->textInput() ?>

    <?= $form->field($model, 'maker_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maker_contact')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'maker_contact_e')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'maker_disp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
