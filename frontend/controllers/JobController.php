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

/**
 * Site controller
 */
class JobController extends Controller
{
    

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionIndex2()
    {
        return $this->render('index2');
    }

}

    

    

