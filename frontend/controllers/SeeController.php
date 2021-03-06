<?php
namespace frontend\controllers;
use Yii;
use common\models\LoginForm;

use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\controllers\CommonController;

use backend\models\MirIvd;

/**
 * Site controller
 */
class SeeController extends CommonController
{
    

    public function actionIndex()
    {
         $ivdModel = new  MirIvd();
        $zhutizhuanfang = $ivdModel->getIvdlist(2);
        $pinpaililiang = $ivdModel->getIvdlist(1);
        $zhuanjiazhuanlan = $ivdModel->getIvdlist(4);
        $linchuangyixues = $ivdModel->getIvdlist(3);
        
        // p($zhutizhuanfang);
        return $this->render('index',[
            'zhutizhuanfang'=>$zhutizhuanfang,
            'pinpaililiang'=>$pinpaililiang,
            'zhuanjiazhuanlan'=>$zhuanjiazhuanlan,
            'linchuangyixues'=>$linchuangyixues,
        ]);
    }

    public function actionIndex2()
    {
    	$ivdModel = new  MirIvd();
        $linchuangyixues = $ivdModel->find()->select("mir360_id,mir360_date,mir360_title,mir360_title_e")->where(["mir360_class"=>'3'])->orderBy("mir360_date desc")->all();
        for ($i=0; $i < count($linchuangyixues); $i++) { 
        	$data[substr($linchuangyixues[$i]['mir360_date'], 0,4)][] = $linchuangyixues[$i];
        }

        $id = Yii::$app->request->get("id");
        $type = Yii::$app->request->get("type");
        if(empty($type) || $type == '1'){
            $type = "临床在线";
        }else if($type == '2'){
            $type = "主题专访";
        }else if($type == '3'){
            $type = "专家专栏";
        }else if($type == '4'){
            $type = "品牌力量";
        }
        if(!empty($id)){
    		$model = MirIvd::findOne(["mir360_id"=>$id]);
        }
        // p($model);
        return $this->render('index2',[
        	'data'=>$data,
        	'model'=>$model,
        	'id'=>$id,
            'type'=>$type
        ]);
    }

    public function actionIndex3()
    {
    	$id = Yii::$app->request->get("id");
    	$model = MirIvd::findOne(["mir360_id"=>$id]);
    	p($model);
        return $this->render('index3');
    }

}