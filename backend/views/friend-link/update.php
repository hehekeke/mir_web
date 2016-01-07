<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FriendLink */

$this->title = '更新友情链接 ' . ' ' . $model->Link_id;
$this->params['breadcrumbs'][] = ['label' => 'Friend Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Link_id, 'url' => ['view', 'id' => $model->Link_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="friend-link-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
