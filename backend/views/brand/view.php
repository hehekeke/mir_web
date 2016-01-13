<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MirBrand */

$this->title = '品牌信息详情';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '品牌信息详情'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-brand-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->brand_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->brand_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'brand_id',
            'brand_name',
            'brand_name_e',
        ],
    ]) ?>

</div>
