<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FriendLink */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="friend-link-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Link_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Link_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Link_imgurl')->fileInput() ?>

    <?= $form->field($model, 'Link_info')->textarea(['rows' => 6]) ?>

    <!-- <?= $form->field($model, 'Link_state')->textInput() ?> -->

    <!-- <?= $form->field($model, 'Link_addtime')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
