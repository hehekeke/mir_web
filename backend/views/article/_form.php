<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;
use backend\widget\Ueditor;
use backend\widget\Uploadify;

/* @var $this yii\web\View */
/* @var $model backend\models\MirArticle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-article-form">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                        <?php $form = ActiveForm::begin(); ?>

                        <?= $form->field($model, 'article_title')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'article_titile_e')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'article_class')->dropDownList($model->classify) ?>

                        <?= $form->field($model, 'article_date')->widget(DateTimePicker::className(), [
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

                        <?= $form->field($model, 'article_istop')->radioList(['1'=>'是','0'=>'否'])?>

                        <?= $form->field($model, 'article_pic')->textInput(['id'=>'pic','readonly'=>true]) ?>

                        <?= Uploadify::widget(['targetId'=>'pic','multi'=>'false'])?>
                        
                        <?= $form->field($model, 'article_zy')->textarea(['rows' => 5]) ?>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group" style="">

                                <label>文章内容</label>
                                <textarea id="editor" style="height:350px;background-color:#ccc;" name="<?=$model->formName()?>[article_contents]" ><?=$model->article_contents?></textarea>
                                <?= Ueditor::widget(['obj'=>'editor'])?>
                            </div>
                            <div class="form-group" style="">
                                <label>文章内容英文</label>
                                <textarea id="editor_e" style="height:350px;background-color:#ccc;" name="<?=$model->formName()?>[article_contents_e]" ><?=$model->article_contents_e?></textarea>
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
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>

