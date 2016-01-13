<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \backend\models\MirProduct;
/* @var $this yii\web\View */
/* @var $model backend\models\MirMaker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-maker-form">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

                            <?php $form = ActiveForm::begin(); ?>

                            <?= $form->field($model, 'maker_name')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'maker_name_e')->textInput(['maxlength' => true]) ?>

                            <div class="col-lg-6 row">
                                <?= $form->field($model, 'maker_class')->dropDownList($model->makerClass,['prompt'=>'请选择']) ?>
                            </div>
                            <div class="col-lg-7 row">
                                <?= $form->field($model, 'maker_character')->dropDownList($model->makerCharacter,['prompt'=>'请选择','style'=>'margin-left:15px']) ?>
                            </div>

                            <?= $form->field($model, 'maker_proclass')->dropDownList(MirProduct::mainClass(),['prompt'=>'请选择']) ?>

                            <div class="col-lg-6 row">
                                <?= $form->field($model, 'maker_place')->dropDownList(MirProduct::cityMap(),['prompt'=>'请选择','onchange'=>'getCityEnglish('.'$(this).val()'.')']) ?>
                            </div>
                            <div class="col-lg-7 row">
                                <?= $form->field($model, 'maker_place_e')->textInput(['readonly'=>true,'style'=>'margin-left:15px','id'=>'product_e']) ?>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <div class="col-lg-6 row">
                                <?= $form->field($model, 'maker_info')->textarea(['rows' => 6]) ?>
                            </div>
                            <div class="col-lg-6 row">
                                <?= $form->field($model, 'maker_info_e')->textarea(['rows' => 6,'style'=>'margin-left:15px']) ?>
                            </div>

                            <div class="col-lg-6 row">
                                <?= $form->field($model, 'maker_contact')->textarea(['rows' => 6]) ?>
                            </div>
                            <div class="col-lg-6 row">
                                <?= $form->field($model, 'maker_contact_e')->textarea(['rows' => 6,'style'=>'margin-left:15px']) ?>
                            </div>


                            <?= $form->field($model, 'maker_disp')->hiddenInput(['value'=>0])->label('') ?>

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

<?=$this->registerJsFile(Yii::getAlias('@jsPath').'/main.js')?>


