<?php
namespace frontend\controllers;
use Yii;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\controllers\CommonController;

use backend\models\MirProduct;
/**
 * Site controller
 */
class ProductController extends CommonController
{
    

    public function actionIndex()
    {
    	$productModel = new MirProduct();
    	$list = $productModel->mainClass();
    	p($list);
        return $this->render('index');
    }

    public function actionIndex2()
    {
        return $this->render('index2');
    }

}