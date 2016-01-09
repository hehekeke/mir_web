<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MirIvdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ivd访谈列表');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-ivd-index">

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
                                'attribute'=>'mir360_id',
                                'headerOptions'=>['width'=>'60']
                            ],
                            [
                                'attribute'=>'mir360_title',
                                'headerOptions'=>['width'=>'550']
                            ],
                            [
                                'attribute'=>'mir360_class',
                                'headerOptions'=>['width'=>'90'],
                                'filter'=>$classify,
                                'value'=>function($data){
                                    return $data->classify[$data->mir360_class];
                                }
                            ],
                            [
                                'attribute'=>'mir360_date',
                                'headerOptions' => ['width' => '160'],
                                'value'=>function($data){
                                    return date('Y/m/d',strtotime($data->mir360_date));
                                }
                            ],

                            // 'mir360_remark:ntext',
                            // 'mir360_remark_e:ntext',
                            // 'mir360_company',
                            // 'mir360_company_e',
                            // 'mir360_zy',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
