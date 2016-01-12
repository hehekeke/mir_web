<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MirBrand */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => '修改品牌信息',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Brands'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->brand_id, 'url' => ['view', 'id' => $model->brand_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mir-brand-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
