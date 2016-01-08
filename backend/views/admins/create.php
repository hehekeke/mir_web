<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Admins */

$this->title = Yii::t('app', '添加管理员');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admins-create">

    <h1><?= Html::encode($this->title) ?>
    	<small>带<span class="required">*</span>的为必填项</small></h1>
    </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
