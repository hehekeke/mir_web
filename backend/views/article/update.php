<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MirArticle */

$this->title = Yii::t('app', '{modelClass}: ', [
    'modelClass' => '修改文章',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->article_id, 'url' => ['view', 'id' => $model->article_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mir-article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
