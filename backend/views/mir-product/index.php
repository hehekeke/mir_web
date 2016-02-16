<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\MirProduct;
use backend\models\Classify;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MirProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '产品管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">

                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            [
                                'attribute'=>'product_id',
                                'headerOptions'=>['width'=>'80']
                            ],
                            'product_name',
                            [
                                'attribute'=>'product_maker',
                                'value'=>function($data){
                                    return MirProduct::makerMap($data->product_maker);
                                }
                            ],
                            [
                                'attribute'=>'product_pic',
                                'format'=>'raw',
                                // 'headerOptions'=>['width'=>'172','height'=>'56'],
                                'value'=>function($data){
                                    /** 图片链接待确定 */
                                    return Html::img(Yii::getAlias('@uploads')."/pro/".$data->product_pic,[
                                            'width'=>'172','height'=>'56'
                                        ]);
                                }
                            ],
                            [
                                'attribute'=>'product_date',
                                'value'=>function($data){
                                    return date('Y/m/d',strtotime($data->product_date));
                                }
                            ],
                            [
                                'attribute'=>'product_mainclass',
                                'headerOptions'=>['width'=>90],
                                'filter'=>$mainClass,
                                'value'=>function($data){
                                    $classify = Classify::mainClass();
                                    if($data->product_mainclass == 0){
                                        return $classify[$data->ID];
                                    }else{
                                        return $classify[$data->product_mainclass];
                                    }
                                }
                            ],

                            // 'product_pic',
                            // 'product_class',
                            // 'product_place',
                            // 'product_place_e',
                            // 'product_standards:ntext',
                            // 'product_standards_e:ntext',
                            // 'product_model:ntext',
                            // 'product_model_e:ntext',
                            // 'product_performance:ntext',
                            // 'product_performance_e:ntext',
                            // 'product_parameter:ntext',
                            // 'product_parameter_e:ntext',
                            // 'product_contrast:ntext',
                            // 'product_contrast_e:ntext',
                            // 'product_appraise:ntext',
                            // 'product_appraise_e:ntext',
                            // 'product_mainclass',
                            // 'product_brand',
                            // 'product_tui',
                            // 'product_disp',

                            [
                                'class' => 'yii\grid\ActionColumn',
                                'header'=>'操作',
                                'template' => '{view}  {update} {delete}',
                                'headerOptions' => ['width' => '100'],
                            ],
                        ],
                    ]); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

