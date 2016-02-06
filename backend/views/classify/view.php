<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Classify */

$this->title = '查看分类信息';
$this->params['breadcrumbs'][] = ['label' => 'Classifies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classify-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
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
            'ID',
            'ModuleID',
            'RootID',
            'Depth',
            'ClassName',
            'ClassName_e',
            'Readme',
            'Orders',
            'ParentID',
            'ParentStr:ntext',
            'Child',
            'ChildStr:ntext',
            'ShowCount',
        ],
    ]) ?>

</div>
