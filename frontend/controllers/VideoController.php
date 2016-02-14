<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\controllers\CommonController;



use backend\models\MirVideo;
/**
 * Site controller
 */
class VideoController extends CommonController
{
    

    public function actionIndex()
    {
        $videoModel = new MirVideo();
        // p($videoModel);
        $videos = $videoModel->find()->orderBy("video_id desc")->all();
        // p($videos);
        return $this->render('index',[
        	'videos'=>$videos,
        ]);
    }

    public function actionIndex2()
    {
    	$id = Yii::$app->request->get("id");
    	$videoModel = new MirVideo();
    	$model = $videoModel::findOne(["video_id"=>$id]); 
    	// p($model);
        return $this->render('index2',[
        	"model"=>$model
        ]);
    }

}

    

    

