<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\FriendLink */

$this->title = $model->Link_id;
$this->params['breadcrumbs'][] = ['label' => 'Friend Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="friend-link-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Link_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Link_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'Link_id',
            'Link_url:url',
            'Link_name',
            'Link_imgurl:url',
            'Link_info:ntext',
            
            // 'Link_state',
            // 'Link_addtime',
        ],
    ]) ?>

</div>
