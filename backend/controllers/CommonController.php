<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

/**
 * 公用的controller
 */
class CommonController extends Controller
{

    /**
     * @inheritdoc
     */
    public function actions()
    {
        
        
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    public function beforeAction($action)
    {
    	if($action->id !== 'login'){
    		$this->layout = 'main_back';
    	}
    	return true;
    }
    public function ajaxJson($data)
    {
        echo json_encode($data);
        exit;
    }

    
}
