<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMaker */

$this->title = '修改厂商信息';
$this->params['breadcrumbs'][] = ['label' => 'Mir Makers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->maker_id, 'url' => ['view', 'id' => $model->maker_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mir-maker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
