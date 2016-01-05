<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\Url;
// 仪表盘， 根据不同角色跳转到不同的URL
class IndexController extends Controller {

	
	public function actionIndex($ud = null)
	{
		p(11);
	}
}

?>