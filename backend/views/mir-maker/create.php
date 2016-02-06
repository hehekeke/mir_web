<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MirMaker */

$this->title = '添加厂商';
$this->params['breadcrumbs'][] = ['label' => 'Mir Makers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-maker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
