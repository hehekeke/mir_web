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

use backend\models\MirMgz;


use yii\data\Pagination;
/**
 * Site controller
 */
class CableController extends CommonController
{
    

    public function actionIndex()
    {
        $mgzModel = new MirMgz();
        $mgz_year = Yii::$app->request->get("mgzYear");
        $mgz_num = Yii::$app->request->get("mgzNum");

        if(!empty($mgz_year)&&!empty($mgz_num)){
            $newMgz = $mgzModel->find()->where(["mgz_year"=>$mgz_year,'mgz_num'=>$mgz_num])->all();
        }else{
            $mgz = $mgzModel->find()->orderBy("mgz_id desc")->limit(1)->all();
            $newMgz = $mgzModel->find()->where(["mgz_year"=>$mgz[0]->mgz_year,'mgz_num'=>$mgz[0]->mgz_num])->all();
        }
        
        $mgzList = $mgzModel->find()->orderBy("mgz_id desc")->groupBy("mgz_year,mgz_num")->all();
        for ($i=0; $i < count($mgzList); $i++) { 
            $mgzYear[] = $mgzList[$i]->mgz_year;
            $mgzNum[] = $mgzList[$i]->mgz_num;
        }

        // p($newMgz);
        return $this->render('index',[
        	'newMgz'=>$newMgz,
            'mgzYear'=>$mgzYear,
            'mgzNum'=>$mgzNum,
        ]);
    }

    public function actionIndex2()
    {
     
        
    }
      

}

    

    

