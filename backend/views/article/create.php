<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MirArticle */

$this->title = Yii::t('app', '创建文章');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
