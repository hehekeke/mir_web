<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirArticleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-article-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'article_id') ?>

    <?= $form->field($model, 'article_title') ?>

    <?= $form->field($model, 'article_titile_e') ?>

    <?= $form->field($model, 'article_class') ?>

    <?= $form->field($model, 'article_date') ?>

    <?php // echo $form->field($model, 'article_contents') ?>

    <?php // echo $form->field($model, 'article_contents_e') ?>

    <?php // echo $form->field($model, 'article_istop') ?>

    <?php // echo $form->field($model, 'article_makerid') ?>

    <?php // echo $form->field($model, 'article_pic') ?>

    <?php // echo $form->field($model, 'article_zy') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
