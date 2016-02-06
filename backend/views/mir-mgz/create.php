<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MirMgz */

$this->title = '创建杂志';
$this->params['breadcrumbs'][] = ['label' => 'Mir Mgzs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-mgz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
