<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_pwd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_chk')->textInput() ?>

    <?= $form->field($model, 'user_date')->textInput() ?>

    <?= $form->field($model, 'user_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_xm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_com')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
