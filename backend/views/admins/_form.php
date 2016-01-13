<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Admins */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admins-form">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                        <?php $form = ActiveForm::begin(); ?>
                            <?php if($model->isNewRecord ):?>
                                <?= $form->field($model, 'Admin_user')->textInput(['maxlength' => true])->label('用户名<span style="color:red">*</span>') ?>
                                <?= $form->field($model,'Admin_pass')->passwordInput()->label('密码<span style="color:red">*</span>')?>
                                <?= $form->field($model,'Admin_rpass')->passwordInput()->label('确认密码<span style="color:red">*</span>')?>
                            <?php else:?>
                                <?= $form->field($model, 'Admin_user')->textInput(['maxlength' => true,'readonly'=>true])->hint('无法修改')->label('用户名') ?>
                            <?php endif;?>
                            <?= $form->field($model, 'Admin_name')->textInput(['maxlength' => true])->label('真实姓名<span style="color:red">*</span>') ?>

                            <?= $form->field($model, 'Admin_email')->textInput(['maxlength' => true])->label('E-mail<span style="color:red">*</span>') ?>

                            <?= $form->field($model, 'Admin_info')->textarea(['rows'=>3,'cols'=>5])->label('个人说明') ?>

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
