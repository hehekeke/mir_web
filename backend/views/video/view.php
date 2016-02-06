<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MirVideo */

$this->title = '查看视频信息';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Videos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-video-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->video_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->video_id], [
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
            'video_id',
            'video_title',
            'video_title_e',
            'video_filename',
            'video_mem:ntext',
            'video_mem_e:ntext',
            'video_size',
            'video_class',
            'video_date',
        ],
    ]) ?>

</div>
