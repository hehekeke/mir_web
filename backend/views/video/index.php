<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MirVideoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '视频列表');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-video-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', '添加视频'), ['create'], ['class' => 'btn btn-success']) ?>
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
                                'video_id',
                                'video_title',
                                'video_title_e',
                                // 'video_mem_e:ntext',
                                // 'video_size',
                                // 'video_class',
                                // 'video_date',

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'header'=>'操作',
                                    'template' => '{view}  {update} {delete}',
                                    'headerOptions' => ['width' => '120'],
                                ],
                            ],
                        ]); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

