<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MirProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mir Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mir Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product_id',
            'product_name',
            'product_name_e',
            'product_price',
            'product_date',
            // 'product_class',
            // 'product_place',
            // 'product_place_e',
            // 'product_standards:ntext',
            // 'product_standards_e:ntext',
            // 'product_model:ntext',
            // 'product_model_e:ntext',
            // 'product_performance:ntext',
            // 'product_performance_e:ntext',
            // 'product_parameter:ntext',
            // 'product_parameter_e:ntext',
            // 'product_contrast:ntext',
            // 'product_contrast_e:ntext',
            // 'product_appraise:ntext',
            // 'product_appraise_e:ntext',
            // 'product_pic',
            // 'product_mainclass',
            // 'product_brand',
            // 'product_tui',
            // 'product_maker',
            // 'product_disp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
