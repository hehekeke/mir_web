<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MirMeetingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '展会列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-meeting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加新会议', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'meeting_id',
            // 'meeting_class',
            'meeting_name',
            'meeting_loc',
            'meeting_loc_e',
            // 'meeting_name_e',
            'meeting_bdate',
            'meeting_edate',
            // 'meeting_pic',
            // 'meeting_mem:ntext',
            // 'meeting_mem_e:ntext',
            // 'meeting_sub',
            // 'meeting_sub_e',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
