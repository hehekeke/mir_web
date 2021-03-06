<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MirArticle */

$this->title = '文章信息';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->article_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->article_id], [
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
            'article_id',
            'article_title',
            'article_titile_e',
            'article_class',
            'article_date',
            'article_contents:ntext',
            'article_contents_e:ntext',
            'article_istop',
            'article_makerid',
            'article_pic',
            'article_source',
            'article_zy',
        ],
    ]) ?>

</div>
