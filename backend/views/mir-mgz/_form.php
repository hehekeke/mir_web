<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;
use backend\widget\Uploadify;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMgz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-mgz-form">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                        <?=  $this->render('flash') ?>
                            <?php $form = ActiveForm::begin(); ?>
                            <div class="col-lg-4 row">
                                <?= $form->field($model, 'mgz_year')->textInput(['placeholder'=>'请点击'])->widget(DateTimePicker::className(), [
                                    'language' => 'zh-CN',
                                    'size' => 'ms',
                                    'template' => '{input}',
                                    'pickButtonIcon' => 'glyphicon glyphicon-time',
                                    'clientOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy', // if inline = false
                                        'weekStart'=>1,
                                        'minView'=>4,
                                        'startView'=>4,
                                        'forceParse'=>false
                                    ]
                                ]); ?>
                            </div>
                            <div class="col-lg-4 row">
                                <?= $form->field($model, 'mgz_num')->dropDownList(['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6],['style'=>'margin-left:10px']) ?>
                            </div>
                            <div class="col-lg-6 row">
                                <?= $form->field($model, 'mgz_znum')->textInput(['style'=>'margin-left:20px']) ?>
                            </div>  
                                <?= $form->field($model, 'mgz_page')->textInput() ?>
                                <?= $form->field($model, 'mgz_isfirst')->radioList(['0'=>'否',"1"=>'是']) ?>
                                <?= $form->field($model, 'mgz_pic')->textInput(['id'=>'mgz','style'=>'','readonly'=>true]) ?>
                                <?=Uploadify::widget(['targetId'=>'mgz','classify'=>'mgz'])?>

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
