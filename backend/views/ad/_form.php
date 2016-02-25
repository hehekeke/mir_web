<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\widget\Uploadify;

/* @var $this yii\web\View */
/* @var $model backend\models\MirAd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-ad-form">
<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
					    <?php $form = ActiveForm::begin(); ?>
							<div class="col-lg-6">

							    <?= $form->field($model, 'ad_desc')->textInput(['maxlength' => true]) ?>

							    <?= $form->field($model, 'ad_picture')->textInput(['maxlength' => true,'id'=>'ad','readonly'=>true]) ?>

                                <?= Uploadify::widget(['targetId'=>'ad','multi'=>'false','classify'=>'ad'])?>

							    <?= $form->field($model, 'ad_url')->textInput(['maxlength' => true]) ?>

							    <?= $form->field($model, 'ad_rank')->textInput() ?>

							    <div class="form-group">
							        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
							    </div>
							</div>
					    <?php ActiveForm::end(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
