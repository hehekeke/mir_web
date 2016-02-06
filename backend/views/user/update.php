<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MirUser */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mir User',
]) . ' ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mir-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
