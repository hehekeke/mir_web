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
/**
 * Site controller
 */
class IdvController extends CommonController
{
    

    public function actionIndex()
    {
    	$classifyModel = new Classify();
    	$dafenlei = $classifyModel->find()->where(["ParentID"=>'0'])->limit(8)->all();
    	// p($dafenlei);
    	$articleModel = new MirArticle();
    	$jobs = $articleModel->articleToIndex(5);
        return $this->render('index',[
        	'dafenlei'=>$dafenlei,
        	'jobs'=>$jobs,
        ]);
    }

    public function actionIndex2()
    {
        return $this->render('index2');
    }

}

    

    

