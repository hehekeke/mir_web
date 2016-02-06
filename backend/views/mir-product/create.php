<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MirProduct */

$this->title = '添加产品信息';
$this->params['breadcrumbs'][] = ['label' => 'Mir Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
