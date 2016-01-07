<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FriendLink */

$this->title = '添加友情链接';
$this->params['breadcrumbs'][] = ['label' => 'Friend Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="friend-link-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
