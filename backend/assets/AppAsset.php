<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\JqueryAsset;
use yii\web\AssetBundle;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web/Public/Admin/';
    public $pluginsUrl = '@web/Public/plugins';
    public $css = [
        // <!-- Bootstrap Core CSS -->
        'css/bootstrap.min.css',
        // <!-- MetisMenu CSS -->
        'css/plugins/metisMenu/metisMenu.min.css',
        // <!-- Timeline CSS -->
        'css/plugins/timeline.css',
        // <!-- Custom CSS -->
        'css/sb-admin-2.css',
        // <!-- Morris Charts CSS -->
        'css/plugins/morris.css',
        // <!-- Custom Fonts -->
        'css/../font-awesome-4.1.0/css/font-awesome.min.css',
        // <!--  金数据 -->
        // 'css/jinshuju.css',
    ];

    public $js = [
        // 'js/jquery-1.11.0.js',
        //<!-- jQuery Version 1.11.0 -->        
        // //<!-- Bootstrap Core JavaScript -->
        'js/bootstrap.min.js',
        'js/json2.js',
        // //<!-- Metis Menu Plugin JavaScript -->
        'js/plugins/metisMenu/metisMenu.min.js',
        
        // //<!-- Morris Charts JavaScript -->
        'js/plugins/morris/raphael.min.js',
        
        'js/date.js',



        // //<!-- Custom Theme JavaScript -->
        'js/sb-admin-2.js',        
    ];
    public $depends = [
       'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
    ];
}
