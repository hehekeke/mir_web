<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MirUser */

$this->title = '会员信息';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-user-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'user_id',
                            'user_name',
                            'user_pwd',
                            'user_class',
                            'user_tel',
                            'user_email:email',
                            'user_chk',
                            'user_date',
                            'user_place',
                            'user_xm',
                            'user_com',
                        ],
                    ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

