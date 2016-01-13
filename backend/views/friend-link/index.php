<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FriendLinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '友情链接列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="friend-link-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建友情链接', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Link_id',
            'Link_url:url',
            'Link_name',
            // 'Link_imgurl:url',
            [
                'label'=>'链接图片',
                'format'=>'raw',
                'value'=>function($model){
                    return Html::img("/public/uploads/friendlink/".$model->Link_imgurl,
                                ['class' => 'img-circle',
                                'width' => 130]
                    );
                }
            ],

            // 'Link_info:ntext',
            // 'Link_state',
            // 'Link_addtime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
