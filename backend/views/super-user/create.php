<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SuperUser */

$this->title = Yii::t('app', 'Create Super User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Super Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="super-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
