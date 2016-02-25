<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MirAdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '广告管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-ad-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', '新建广告'), ['create'], ['class' => 'btn btn-success']) ?>
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
                        'id',
                        // 'ad_picture',
                        'ad_desc',
                        'ad_url:url',
                        [
                            'label'=>'链接图片',
                            'format'=>'raw',
                            'value'=>function($model){
                                return Html::img("/public/uploads/ad/".$model->ad_picture,
                                            ['class' => 'img-circle','width' => 130]
                                );
                            }
                        ],
                        'ad_rank',
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
