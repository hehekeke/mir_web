<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\Url;
// 仪表盘， 根据不同角色跳转到不同的URL
class IndexController extends Controller {

	public $enableCsrfValidation = false;
	//这个来控制不通的  中英文
	public function actionIndex($ud = null)
	{	
		$id = Yii::$app->request->post("id");
		if($id == "1" ){
			$session = Yii::$app->session;
			$session['language'] = '1';
		}else{
			$session = Yii::$app->session;
			unset($session['language']);
		}
	}
}

?>