<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MirUser */

$this->title = Yii::t('app', 'Create Mir User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
