<?php
namespace frontend\controllers;

use Yii;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use backend\models\Classify;
use backend\models\MirArticle;
use frontend\controllers\CommonController;
use backend\models\MirIvd;
use backend\models\MirProduct;
use backend\models\MirBrand;

use yii\data\Pagination;
/**
 * Site controller
 */
class CableController extends CommonController
{
    

    public function actionIndex()
    {
    	
        return $this->render('index',[
        	
        ]);
    }

    public function actionIndex2()
    {
     
        
    }
      

}

    

    

