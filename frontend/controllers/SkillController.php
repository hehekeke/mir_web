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

use backend\models\MirArticle;
/**
 * Site controller
 */
class SkillController extends CommonController
{
    

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionIndex2()
    {
    	$id = Yii::$app->request->get("id");
    	// p($id);
    	$articleModel = new MirArticle();
    	$jishu = $articleModel::findOne(["article_id"=>$id]);
        $tuijiannews = $articleModel->find()->where(["article_class"=>'3'])->orderBy("article_id desc")->limit(10)->all();
        // p($tuijiannews);
    	// p($jishu);
        return $this->render('index2',[
        	'model'=>$jishu,
            'newMeetings'=>$tuijiannews,
        ]);
    }

}

    

    

