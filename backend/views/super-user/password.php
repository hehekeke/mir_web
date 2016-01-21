<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="admins-form">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                    <?=  $this->render('flash') ?>
                        <div class="col-lg-6">
                        <?php $form = ActiveForm::begin(); ?>
                            <?= $form->field($model,'password_ohash')->passwordInput()->label('原始密码<span style="color:red">*</span>')?>
                            <?= $form->field($model,'password_hash')->passwordInput()->label('新密码<span style="color:red">*</span>')?>
                            <?= $form->field($model,'password_rhash')->passwordInput()->label('确认密码<span style="color:red">*</span>')?>

                            <div class="form-group">
                                <?= Html::submitButton(Yii::t('app', '修改'), ['class' => 'btn btn-success']) ?>
                            </div>
                        <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
