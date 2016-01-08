<?php
namespace frontend\controllers;
use Yii;


use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use backend\models\MirArticle;

/**
 * Site controller
 */
class JobController extends Controller
{
    

    public function actionIndex()
    {
    	$articleModel = new MirArticle();
    	$list = $articleModel->find()->where(["article_class"=>'5'])->orderBy("article_id desc")->all();
        // p($list[0]->mirMake->);
        return $this->render('index',[
        	'list'=>$list,
        ]);
    }

    public function actionIndex2()
    {
        $id = Yii::$app->request->get("id");
        $model = MirArticle::findOne(["article_id"=>$id]);
        // p($model);
        return $this->render('index2',[
            'model'=>$model,
        ]);
    }

}

    

    

