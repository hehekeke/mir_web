<?php
error_reporting(E_ALL-E_NOTICE);
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'prod');
defined('YII_PATH') or define('YII_PATH', __DIR__.'/');
defined('BACK_PATH') or define('BACK_PATH', YII_PATH.'backend/');
require(YII_PATH . 'vendor/autoload.php');;
require(YII_PATH . 'vendor/yiisoft/yii2/Yii.php');
require(YII_PATH . 'common/config/bootstrap.php');
require(BACK_PATH . 'config/bootstrap.php');
$config = yii\helpers\ArrayHelper::merge(
    require(YII_PATH  . 'common/config/main.php'),
    require(YII_PATH  . 'common/config/main-local.php'),
    require(BACK_PATH . 'config/main.php'),
    require(BACK_PATH . 'config/main-local.php')
);
$application = new yii\web\Application($config);
$application->run();
/**
 * 格式化打印数组
 * @var $var  需要打印的数组
 * @var $type 打印的方式 p=print v=var_dump
 * @return mixed;
 * */
function p($var, $type='p') {
	header('Content-type:text/html;charset=utf-8;');
	if ( !is_array($var) && !is_object($var) ) {
		echo "要打印的变量需要是数组或者对象";
	}

	echo "<pre>";
	if(!$type || $type == 'p') {
		print_r($var);

	} else if( $type ='v' ){
		var_dump($var);

	} else {
		return $var;
	}
	echo "</pre>";
	exit;
}
