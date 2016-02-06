<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MirIvd */

$this->title = $model->mir360_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Ivds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-ivd-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->mir360_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->mir360_id], [
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
            'mir360_id',
            'mir360_title',
            'mir360_title_e',
            'mir360_class',
            'mir360_pic:ntext',
            'mir360_date',
            'mir360_remark:ntext',
            'mir360_remark_e:ntext',
            'mir360_company',
            'mir360_company_e',
            'mir360_zy',
        ],
    ]) ?>

</div>
