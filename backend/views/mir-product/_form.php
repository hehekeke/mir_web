<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\MirProduct;
/* @var $this yii\web\View */
/* @var $model backend\models\MirProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mir-product-form">
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <?php $form = ActiveForm::begin(); ?>

                                <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'product_name_e')->textInput(['maxlength' => true]) ?>

                                <div class="col-lg-6 row">
                                    <?= $form->field($model, 'product_mainclass')->dropDownList(MirProduct::mainClass(),['prompt'=>'请选择','onchange'=>'getChildClass('.'$(this).val()'.')']) ?>
                                </div>
                                <div class="col-lg-7 row">
                                    <?= $form->field($model, 'product_class')->dropDownList([],['style'=>'margin-left:15px']) ?>
                                </div>

                                <div class="col-lg-6 row">
                                    <?= $form->field($model, 'product_maker')->dropDownList(MirProduct::productMakerMap()) ?>
                                </div>
                                <div class="col-lg-7 row">
                                    <?= $form->field($model, 'product_brand')->dropDownList(MirProduct::productBrandMap(),['style'=>'margin-left:15px']) ?>
                                </div>

                                <?= $form->field($model, 'product_price')->textInput(['placeholder'=>'默认值价格0显示为“面议”']) ?>
                                
                                <?= $form->field($model, 'product_tui')->radioList(['1'=>'是','0'=>'否']) ?>
                                

                                <div class="col-lg-6 row">
                                    <?= $form->field($model, 'product_place')->dropDownList(MirProduct::cityMap(),['prompt'=>'请选择','onchange'=>'getCityEnglish('.'$(this).val()'.')']) ?>
                                </div>
                                <div class="col-lg-7 row">
                                    <?= $form->field($model, 'product_place_e')->textInput(['readonly'=>true,'style'=>'margin-left:15px']) ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-6 row">
                                    <?= $form->field($model, 'product_standards')->textarea(['rows' => 6]) ?>
                                </div>
                                <div class="col-lg-6 row">
                                    <?= $form->field($model, 'product_standards_e')->textarea(['rows' => 6,'style'=>'margin-left:15px']) ?>
                                </div>

                                <div class="col-lg-6 row">
                                    <?= $form->field($model, 'product_model')->textarea(['rows' => 6]) ?>
                                </div>
                                <div class="col-lg-6 row">
                                    <?= $form->field($model, 'product_model_e')->textarea(['rows' => 6,'style'=>'margin-left:15px']) ?>
                                </div>
                                <div class="col-lg-6 row">
                                    <?= $form->field($model, 'product_performance')->textarea(['rows' => 6]) ?>
                                </div>
                                <div class="col-lg-6 row">
                                    <?= $form->field($model, 'product_performance_e')->textarea(['rows' => 6,'style'=>'margin-left:15px']) ?>
                                </div>
                                <div class="col-lg-6 row">
                                    <?= $form->field($model, 'product_parameter')->textarea(['rows' => 6]) ?>
                                </div>
                                <div class="col-lg-6 row">
                                    <?= $form->field($model, 'product_parameter_e')->textarea(['rows' => 6,'style'=>'margin-left:15px']) ?>
                                </div>

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
<script type="text/javascript">
    /** ajax 方式加载子分类 */
    function getChildClass(mainClassId){
        var url = "<?=Yii::$app->urlManager->createAbsoluteUrl(['mir-product/child-class'])?>";
        $.post(url,{"parentId":mainClassId},function(response){
            var res = $.parseJSON(response);
            var html = '';
            for(id in res){
                html += '<option value="'+id+'">'+res[id]+'</option>';
            }
            $('#mirproduct-product_class').append(html);
        })
    }
    /** 城市英文名称 */
    function getCityEnglish(cityName){
        var url = "<?=Yii::$app->urlManager->createAbsoluteUrl(['mir-product/city-english'])?>";
        $.post(url,{"cityName":cityName},function(response){
            var res = $.parseJSON(response);
            $('#mirproduct-product_place_e').val(res.city_en);
        })
    }
</script>







