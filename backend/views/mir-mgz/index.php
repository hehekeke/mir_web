<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MirMgzSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '在线杂志列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-mgz-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mgz_page',
            'mgz_year',
            'mgz_num',
             [
                'label'=>'杂志图片',
                'format'=>'raw',
                'value'=>function($model){
                    return Html::img("http://www.mir168.com/edming/uppic/mgz/".$model->mgz_pic,
                                ['class' => 'img-circle',
                                'width' => 130]
                    );
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>