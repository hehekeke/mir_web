<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MirMakerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '厂商列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-maker-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加厂商', ['create'], ['class' => 'btn btn-success']) ?>
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
                                'attribute'=>'maker_id',
                                'headerOptions'=>['width'=>80]
                            ],
                            'maker_name',
                            'maker_name_e',
                            // 'maker_info:ntext',
                            // 'maker_info_e:ntext',
                            // 'maker_character',
                            // 'maker_character_e',
                            // 'maker_place',
                            // 'maker_place_e',
                            // 'maker_proclass',
                            // 'maker_date',
                            // 'maker_class',
                            // 'maker_contact:ntext',
                            // 'maker_contact_e:ntext',
                            // 'maker_disp',

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

