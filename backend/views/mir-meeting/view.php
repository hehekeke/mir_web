<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMeeting */

$this->title = '展会详细信息';
$this->params['breadcrumbs'][] = ['label' => 'Mir Meetings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-meeting-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->meeting_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->meeting_id], [
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
            'meeting_id',
            'meeting_class',
            'meeting_loc',
            'meeting_loc_e',
            'meeting_name',
            'meeting_name_e',
            'meeting_bdate',
            'meeting_edate',
            'meeting_pic',
            'meeting_mem:ntext',
            'meeting_mem_e:ntext',
            'meeting_sub',
            'meeting_sub_e',
        ],
    ]) ?>

</div>
