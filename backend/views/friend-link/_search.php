<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FriendLinkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="friend-link-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Link_id') ?>

    <?= $form->field($model, 'Link_url') ?>

    <?= $form->field($model, 'Link_name') ?>

    <?= $form->field($model, 'Link_imgurl') ?>

    <?= $form->field($model, 'Link_info') ?>

    <?php // echo $form->field($model, 'Link_state') ?>

    <?php // echo $form->field($model, 'Link_addtime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
