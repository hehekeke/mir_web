<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MirAd */

$this->title = Yii::t('app', '新建广告');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mir Ads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mir-ad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
