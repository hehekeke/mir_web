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
/**
 * Site controller
 */
class ContactController extends CommonController
{
    
	//联系我们
    public function actionIndex()
    {
        // p(111);
        $this->layout='about.php';
        return $this->render('index');
    }
    //广告服务指南
     public function actionIndex2()
    {
        // p(111);
        $this->layout='about.php';
        return $this->render('index2');
    }
    //服务指南
     public function actionIndex3()
    {
        // p(111);
        $this->layout='about.php';
        return $this->render('index3');
    }


     //学术投稿
     public function actionIndex4()
    {
        // p(111);
        $this->layout='about.php';
        return $this->render('index4');
    }
    //免责声明
     public function actionIndex5()
    {
        // p(111);
        $this->layout='about.php';
        return $this->render('index5');
    }
}

    

    

