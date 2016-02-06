<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Admins */

$this->title = Yii::t('app', '管理员编辑', [
    'modelClass' => 'Admins',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Admin_id, 'url' => ['view', 'id' => $model->Admin_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="admins-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
