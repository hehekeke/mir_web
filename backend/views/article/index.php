<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MirArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mir Articles');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mir Article'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute'=>'article_id',
                'headerOptions' => ['width' => '60'],
            ],
            [
                'attribute'=>'article_title',
                'headerOptions' => ['width' => '460'],
            ],
            [
                'attribute'=>'article_class',
                'filter'=>$classify,
                'value'=>function($data){

                    return $data->classify[$data->article_class];
                }
            ],
            [
                'attribute'=>'article_date',
                'value'=>function($data){
                    return date('Y/m/d',strtotime($data->article_date));
                }
            ],
            [
                'attribute'=>'article_istop',
                'headerOptions' => ['width' => '60'],
                'value'=>function($data){
                    return ($data->article_istop == 0)?'否':'是';
                }
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
