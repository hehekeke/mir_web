<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use backend\models\FriendLink;

/**
 * Site controller
 */
class CommonController extends Controller
{
    

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

}

    

    

