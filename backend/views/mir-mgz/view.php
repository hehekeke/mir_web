<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMgz */

$this->title = $model->mgz_id;
$this->params['breadcrumbs'][] = ['label' => 'Mir Mgzs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-mgz-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mgz_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mgz_id], [
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
            'mgz_id',
            'mgz_page',
            'mgz_year',
            'mgz_num',
            'mgz_pic',
            'mgz_isfirst',
            'mgz_znum',
        ],
    ]) ?>

</div>
