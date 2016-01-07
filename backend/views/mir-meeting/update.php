<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMeeting */

$this->title = '更新会议: ' . ' ' . $model->meeting_id;
$this->params['breadcrumbs'][] = ['label' => 'Mir Meetings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->meeting_id, 'url' => ['view', 'id' => $model->meeting_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mir-meeting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
