<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MirProduct */

$this->title = '产品信息';
$this->params['breadcrumbs'][] = ['label' => 'Mir Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->product_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'product_id',
            'product_name',
            'product_name_e',
            'product_price',
            'product_date',
            'product_class',
            'product_place',
            'product_place_e',
            'product_standards:ntext',
            'product_standards_e:ntext',
            'product_model:ntext',
            'product_model_e:ntext',
            'product_performance:ntext',
            'product_performance_e:ntext',
            'product_parameter:ntext',
            'product_parameter_e:ntext',
            'product_contrast:ntext',
            'product_contrast_e:ntext',
            'product_appraise:ntext',
            'product_appraise_e:ntext',
            'product_pic',
            'product_mainclass',
            'product_brand',
            'product_tui',
            'product_maker',
            'product_disp',
        ],
    ]) ?>

</div>
