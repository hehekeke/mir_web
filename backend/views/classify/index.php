<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \backend\models\Classify;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClassifySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '产品分类列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classify-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建分类', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                [
                                    'attribute'=>'ID',
                                    'headerOptions'=>['width'=>80]
                                ],
                                // 'ModuleID',
                                // 'RootID',
                                // 'Depth',
                                'ClassName',
                                'ClassName_e',
                                // 'Readme',
                                // 'Orders',
                                [
                                    'attribute'=>'ParentID',
                                    'filter'=>$mainClass,
                                    'value'=>function($data){
                                        $classify = Classify::mainClass();
                                        if($data->ParentID == 0){
                                            return $classify[$data->ID];
                                        }else{
                                            return $classify[$data->ParentID];
                                        }
                                    }
                                ],
                                // 'ParentStr:ntext',
                                // 'Child',
                                // 'ChildStr:ntext',
                                // 'ShowCount',

                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

