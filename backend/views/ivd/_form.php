<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;
use backend\widget\Ueditor;
use backend\widget\Uploadify;
/* @var $this yii\web\View */
/* @var $model backend\models\MirIvd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-ivd-form">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <?php $form = ActiveForm::begin(); ?>
                        <div class="col-lg-6">

                            <?= $form->field($model, 'mir360_title')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'mir360_title_e')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'mir360_class')->dropDownList($model->classify) ?>

                            <?= $form->field($model, 'mir360_date')->textInput()->widget(DateTimePicker::className(), [
                                'language' => 'zh-CN',
                                'size' => 'ms',
                                'template' => '{input}',
                                'pickButtonIcon' => 'glyphicon glyphicon-time',
                                'clientOptions' => [
                                    'autoclose' => true,
                                    'format' => 'yyyy/mm/dd', // if inline = false
                                    'todayBtn' => true
                                ]
                            ]); ?>

                            <?= $form->field($model, 'mir360_pic')->textInput(['id'=>'pic','readonly'=>true]) ?>

                            <?= Uploadify::widget(['targetId'=>'pic','multi'=>'false','classify'=>'ivd'])?>

                            <?= $form->field($model, 'mir360_pic_m')->textInput(['id'=>'pic_m','readonly'=>true,'placeholder'=>'请上传小图']) ?>
                            
                            <?= Uploadify::widget(['targetId'=>'pic_m','multi'=>'false','classify'=>'ivd','hiddenInputId'=>'pic_m_input'])?>

                            <?= $form->field($model, 'mir360_rank')->textInput(['placeholder'=>'访谈排序']) ?>
                        </div>
                        <div class="col-xs-10">
                            <div class="form-group" style="">

                                <label>文章内容</label>
                                <textarea id="editor" style="height:350px;background-color:#ccc;" name="<?=$model->formName()?>[mir360_remark]" ><?=$model->mir360_remark?></textarea>
                                <?= Ueditor::widget(['obj'=>'editor'])?>
                            </div>
                            <div class="form-group" style="">
                                <label>文章内容英文</label>
                                <textarea id="editor_e" style="height:350px;background-color:#ccc;" name="<?=$model->formName()?>[mir360_remark_e]" ><?=$model->mir360_remark_e?></textarea>
                                <?= Ueditor::widget(['obj'=>'editor_e'])?>
                            </div>
                        </div>

                        <div class="col-lg-6">
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
