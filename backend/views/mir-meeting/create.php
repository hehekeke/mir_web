<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MirMeeting */

$this->title = '添加新会议';
$this->params['breadcrumbs'][] = ['label' => 'Mir Meetings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-meeting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
