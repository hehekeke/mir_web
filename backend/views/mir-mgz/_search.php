<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMgzSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-mgz-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mgz_id') ?>

    <?= $form->field($model, 'mgz_page') ?>

    <?= $form->field($model, 'mgz_year') ?>

    <?= $form->field($model, 'mgz_num') ?>

    <?= $form->field($model, 'mgz_pic') ?>

    <?php // echo $form->field($model, 'mgz_isfirst') ?>

    <?php // echo $form->field($model, 'mgz_znum') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
