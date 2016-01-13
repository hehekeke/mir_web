<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\widget\Uploadify;
use backend\widget\Ueditor;

/* @var $this yii\web\View */
/* @var $model backend\models\MirVideo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-video-form">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php $form = ActiveForm::begin(); ?>

                            <?= $form->field($model, 'video_title')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'video_title_e')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'video_size')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'video_filename')->textInput(['readonly' => true,'id'=>'video']) ?>

                            <?= Uploadify::widget(['targetId'=>'video','classify'=>'video','buttonText'=>'选择视频'])?>
                        </div>
                        <div class="col-xs-10">
                            <div class="form-group" style="">

                                <label>中文介绍</label>
                                <textarea id="editor" style="height:350px;background-color:#ccc;" name="<?=$model->formName()?>[video_mem]" ><?=$model->video_mem?></textarea>
                                <?= Ueditor::widget(['obj'=>'editor'])?>
                            </div>
                            <div class="form-group" style="">
                                <label>英文介绍</label>
                                <textarea id="editor_e" style="height:350px;background-color:#ccc;" name="<?=$model->formName()?>[video_mem_e]" ><?=$model->video_mem_e?></textarea>
                                <?= Ueditor::widget(['obj'=>'editor_e'])?>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <?= $form->field($model, 'video_date')->hiddenInput(['value' => date('Y/m/d',time())])->label('') ?>
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
