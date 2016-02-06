<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MirBrandSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '产品品牌管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-brand-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', '添加品牌'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute'=>'brand_id',
                'headerOptions'=>['width'=>80]

            ],
            'brand_name',
            'brand_name_e',

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'操作',
                'template' => '{view}  {update} {delete}',
                'headerOptions' => ['width' => '100'],
            ],

        ],
    ]); ?>

</div>
