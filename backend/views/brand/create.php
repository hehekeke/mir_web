<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MirBrand */

$this->title = Yii::t('app', '添加品牌信息');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '添加品牌信息'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-brand-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
