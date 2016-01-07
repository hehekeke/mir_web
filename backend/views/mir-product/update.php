<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MirProduct */

$this->title = 'Update Mir Product: ' . ' ' . $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Mir Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_id, 'url' => ['view', 'id' => $model->product_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mir-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
