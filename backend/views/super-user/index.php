<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SuperUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '管理员管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="super-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Super User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'username',
            'name',
            [
                'attribute'=>'state',
                'value'=>function($data){
                    return ($data->state == 1)?'是':'否';
                }
            ],
            'email:email',
            'login_times',
            'last_login',
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'操作',
                'template' => '{update} {status} {delete}',
                'buttons'=>[
                    'status' => function ($url, $model, $key) {
                        if($model->state == '0'){
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
