<?php 
namespace backend\widget;

use yii;
use yii\base\InvalidCallException;
use yii\base\Widget;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\Json;
use \backend\assets\UploadAsset;
/**
 * Ueditor
 */
class Ueditor extends Widget {

	/**
	 * 绑定id
	 */
	public $obj = '';

	public function init()
	{
		$obj = ini_get('obj');
		parent::init();
	}

	public function run() {

		$view = $this->getView();
		$view->registerJsFile(Yii::getAlias('@pluginPath').'/ueditor/ueditor.config.js',['position' => \yii\web\View::POS_HEAD]);
		$view->registerJsFile(Yii::getAlias('@pluginPath').'/ueditor/ueditor.all.min.js',['position' => \yii\web\View::POS_HEAD]);
		$view->registerJsFile(Yii::getAlias('@pluginPath').'/ueditor/lang/zh-cn/zh-cn.js',['position' => \yii\web\View::POS_HEAD]);

		$view->registerJs('
			var '.$this->obj.' = UE.getEditor("'.$this->obj.'");
		');
	}
}


?>