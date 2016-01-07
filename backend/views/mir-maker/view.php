<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MirMaker */

$this->title = $model->maker_id;
$this->params['breadcrumbs'][] = ['label' => 'Mir Makers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-maker-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->maker_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->maker_id], [
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
            'maker_id',
            'maker_name',
            'maker_name_e',
            'maker_info:ntext',
            'maker_info_e:ntext',
            'maker_character',
            'maker_character_e',
            'maker_place',
            'maker_place_e',
            'maker_proclass',
            'maker_date',
            'maker_class',
            'maker_contact:ntext',
            'maker_contact_e:ntext',
            'maker_disp',
        ],
    ]) ?>

</div>
