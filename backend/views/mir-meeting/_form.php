<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMeeting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-meeting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'meeting_id')->textInput() ?>

    <?= $form->field($model, 'meeting_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meeting_loc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meeting_loc_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meeting_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meeting_name_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meeting_bdate')->textInput() ?>

    <?= $form->field($model, 'meeting_edate')->textInput() ?>

    <?= $form->field($model, 'meeting_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meeting_mem')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meeting_mem_e')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meeting_sub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meeting_sub_e')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
