<?php
error_reporting(E_ALL & ~E_NOTICE); 
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../common/config/bootstrap.php');
require(__DIR__ . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../common/config/main.php'),
    require(__DIR__ . '/../../common/config/main-local.php'),
    // require(__DIR__ . '/../../backend/config/main.php'),
    // require(__DIR__ . '/../../backend/config/main-local.php'),
    require(__DIR__ . '/../config/main.php'),
    require(__DIR__ . '/../config/main-local.php')
);

$application = new yii\web\Application($config);


$application->run();

//下面是全局的英文标题的数组


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
