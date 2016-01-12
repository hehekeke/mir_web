<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Classify */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classify-form">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

                            <?php $form = ActiveForm::begin(); ?>


                            <?= $form->field($model, 'ClassName')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'ClassName_e')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'Readme')->textInput(['maxlength' => true]) ?>


                            <?= $form->field($model, 'ParentID')->dropDownList([$model->getAllClassify()]) ?>

                            <div class="form-group">
                                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
