<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MirIvd */

$this->title = Yii::t('app', '添加Ivd访谈');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Ivds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-ivd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
