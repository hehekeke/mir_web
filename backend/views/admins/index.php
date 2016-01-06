<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '管理员管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admins-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'columns' => [
                                'Admin_id',
                                'Admin_user',
                                'Admin_name',
                                [
                                    'attribute'=>'Admin_state',
                                    'value'=>function($data){
                                        return ($data->Admin_state == 1)?'是':'否';
                                    }
                                ],
                                'Admin_email:email',
                                'Admin_logintime',
                                'Admin_logintimes',
                                'Admin_addtime',

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'header'=>'操作',
                                    'template' => '{update} {status} {delete}',
                                    'buttons'=>[
                                        'status' => function ($url, $model, $key) {
                                            if($model->Admin_state == '0'){
                                                return Html::a('<span class="glyphicon glyphicon-arrow-up"></span>', $url,['title' => '升级','class'=>'btn btn-xs']);
                                            }else{
                                                return Html::a('<span class="glyphicon glyphicon-arrow-down"></span>', $url,['class'=>'btn btn-xs','title'=>'降级']);
                                            }
                                         },
                                    ],
                                    'headerOptions' => ['width' => '120'],
                                ],
                            ],
                        ]); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
