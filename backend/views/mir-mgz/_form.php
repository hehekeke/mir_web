<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMgz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-mgz-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'mgz_id')->textInput() ?> -->

    <?= $form->field($model, 'mgz_page')->textInput() ?>

    <?= $form->field($model, 'mgz_year')->textInput() ?>

    <?= $form->field($model, 'mgz_num')->textInput() ?>

    <?= $form->field($model, 'mgz_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mgz_isfirst')->dropDownList(['0'=>'否',"1"=>'是']) ?>

    <?= $form->field($model, 'mgz_znum')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
