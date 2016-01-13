<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MirBrand */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-brand-form">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

					    <?php $form = ActiveForm::begin(); ?>

					    <?= $form->field($model, 'brand_name')->textInput(['maxlength' => true]) ?>

					    <?= $form->field($model, 'brand_name_e')->textInput(['maxlength' => true]) ?>

					    <div class="form-group">
					        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
					    </div>

					    <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

