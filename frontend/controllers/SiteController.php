<?php
namespace frontend\controllers;

use Yii;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use backend\models\FriendLink;

use backend\models\MirMeeting;
use backend\models\MirArticle;

use frontend\controllers\CommonController;
use backend\models\MirIvd;
use backend\models\MirProduct;
/**
 * Site controller
 */
class SiteController extends CommonController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        //友情链接
        $friendLink = new FriendLink();
        $friendLinks = $friendLink->getFriendLinks();
        $num = ceil(count($friendLinks)/8);
        for ($i=0; $i < count($friendLinks); $i++) { 
            $newFriendLinks[floor($i/8)][] = $friendLinks[$i];
        }
        // p($newFriendLinks[0][1]);
        //学术会议和展览展会
        $meetingModel = new MirMeeting();
        $xueshuMeetings = $meetingModel->find()->select("meeting_id,meeting_name,meeting_bdate")->where(["meeting_class"=>'1'])->orderBy('meeting_id desc')->limit(5)->all();
        $zhanhuiMeetings = $meetingModel->find()->select("meeting_id,meeting_name,meeting_bdate")->where(["meeting_class"=>'2'])->orderBy('meeting_id desc')->limit(5)->all();
        $meetingModel = new MirMeeting();
        //新闻中心
        $articleModel = new MirArticle();
        $news = $articleModel->articleToIndex(0);
        //招标公告
        $zhaobiao = $articleModel->articleToIndex(2);
        //技术分享
        $jishus = $articleModel->articleToIndex(3);
        // p($zhaobiao);
        //临床医学
        $ivdModel = new  MirIvd();
        $linchuangyixues = $ivdModel->getIvdlist(3);
        $pinpaililiang = $ivdModel->getIvdlist(1);
        $zhutizhuanfang = $ivdModel->getIvdlist(2);
        $zhuanjiazhuanlan = $ivdModel->getIvdlist(4);
        // p($linchuangyixues);
        // 把主题专访  四个合并成一个
        $firstData[] = $linchuangyixues;
        $firstData[] = $zhutizhuanfang;
        $firstData[] = $zhuanjiazhuanlan;
        $firstData[] = $pinpaililiang;
        // p($firstData);

        // p($linchuangyixues);
        // IVD展厅
        $porduct = new MirProduct();
        $porducts = MirProduct::find()->orderBy("product_id desc")->limit(5)->all();
        // p($porducts[0]->product_pic);
        return $this->render('index',[
                'newFriendLinks'=>$newFriendLinks,
                'zhanhuiMeetings'=>$zhanhuiMeetings,
                'xueshuMeetings'=>$xueshuMeetings,
                'news'=>$news,
                'zhaobiao'=>$zhaobiao,
                'jishus'=>$jishus,
                'firstData'=>$firstData,
                'porducts'=>$porducts,
                
            ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
