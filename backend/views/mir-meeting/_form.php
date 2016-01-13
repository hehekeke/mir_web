<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;
use backend\widget\Ueditor;
use backend\widget\Uploadify;
/* @var $this yii\web\View */
/* @var $model backend\models\MirMeeting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-meeting-form">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php $form = ActiveForm::begin(); ?>

                            <?= $form->
                            field($model, 'meeting_name')->textInput(['maxlength' => true]) ?>
                            <?= $form->
                            field($model, 'meeting_name_e')->textInput(['maxlength' => true]) ?>
                            <?= $form->
                            field($model, 'meeting_sub')->textInput(['maxlength' => true]) ?>
                            <?= $form->
                            field($model, 'meeting_sub_e')->textInput(['maxlength' => true]) ?>
                            <?= $form->
                            field($model, 'meeting_class')->dropDownList(['1'=>'学术会议','2'=>'展览会议']) ?>
                            <?= $form->
                            field($model, 'meeting_loc')->textInput(['maxlength' => true]) ?>
                            <?= $form->
                            field($model, 'meeting_loc_e')->textInput(['maxlength' => true]) ?>
                            
                            <?= $form->field($model, 'meeting_pic')->textInput(['id'=>'pic','readonly'=>true]) ?>

                            <?= Uploadify::widget(['targetId'=>'pic','multi'=>'false'])?>
                            <?= $form->field($model, 'meeting_bdate')->widget(DateTimePicker::className(), [
                                'language' => 'zh-CN',
                                'size' => 'ms',
                                'template' => '{input}',
                                'pickButtonIcon' => 'glyphicon glyphicon-time',
                                'clientOptions' => [
                                    'autoclose' => true,
                                    'format' => 'yyyy/mm/dd', // if inline = false
                                    'todayBtn' => true
                                ]
                            ]);?>
                            <?= $form->
                            field($model, 'meeting_edate')->widget(DateTimePicker::className(), [
                            'language' => 'zh-CN',
                            'size' => 'ms',
                            'template' => '{input}',
                            'pickButtonIcon' => 'glyphicon glyphicon-time',
                            'clientOptions' => [
                                'autoclose' => true,
                                'format' => 'yyyy/mm/dd', // if inline = false
                                'todayBtn' => true
                            ]
                        ]);?>
                        </div>
                        <div class="col-xs-10">
                            <div class="form-group" style="">
                                <label>文章内容</label>
                                <textarea id="editor" style="height:350px;background-color:#ccc;" name="<?=$model->
                                    formName()?>[meeting_mem]" >
                                    <?=$model->meeting_mem?></textarea>
                                <?= Ueditor::widget(['obj'=>'editor'])?></div>
                            <div class="form-group" style="">
                                <label>文章内容英文</label>
                                <textarea id="editor_e" style="height:350px;background-color:#ccc;" name="<?=$model->
                                    formName()?>[meeting_mem_e]" >
                                    <?=$model->meeting_mem_e?></textarea>
                                <?= Ueditor::widget(['obj'=>'editor_e'])?></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?= Html::submitButton($model->
                                isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?></div>
                </div>
            </div>
            <!-- /.panel-body --> </div>
        <!-- /.panel --> </div>
    <!-- /.col-lg-12 -->
</div>

</div>