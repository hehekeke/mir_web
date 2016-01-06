<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Admins */

$this->title = '查看管理员信息';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '管理员管理'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admins-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->Admin_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->Admin_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Admin_id',
            'Admin_user',
            'Admin_pass',
            'Admin_name',
            'Admin_state',
            'Admin_logintime',
            'Admin_logintimes',
            'Admin_loginip',
            'Admin_addtime',
            'Admin_email:email',
            'Admin_info',
        ],
    ]) ?>

</div>
