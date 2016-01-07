<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMgz */

$this->title = 'Update Mir Mgz: ' . ' ' . $model->mgz_id;
$this->params['breadcrumbs'][] = ['label' => 'Mir Mgzs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mgz_id, 'url' => ['view', 'id' => $model->mgz_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mir-mgz-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
