<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MirUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '会员列表');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute'=>'user_id',
                'headerOptions' => ['width' => '60'],
            ],
            'user_name',
            'user_com',
            'user_tel',
            'user_email',
            [
                'attribute'=>'user_date',
                'value'=>function($data){
                    return date('Y-m-d',strtotime($data->user_date));
                }
            ],
            'user_place',
            [
                'attribute'=>'user_chk',
                'value'=>function($data){
                    return ($data->user_chk == 1)?'已审核':'未审核';
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'操作',
                'template' => '{update} {delete}',
                // 'buttons'=>[
                //     'status' => function ($url, $model, $key) {
                //         if($model->status == '0'){
                //             return Html::a('<span class="glyphicon glyphicon-ok-circle"></span>', $url,['title' => '上线','class'=>'btn btn-success btn-xs']);
                //         }else{
                //             return Html::a('<span class="glyphicon glyphicon-remove-circle"></span>', $url,['class'=>'btn btn-warning btn-xs','title'=>'下线']);
                //         }
                //      },
                // ],
                'headerOptions' => ['width' => '120'],
            ],
        ],
    ]); ?>

</div>
