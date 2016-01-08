<?php
namespace frontend\controllers;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;

use backend\models\MirArticle;

use yii\data\Pagination;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class NewController extends Controller
{
    

    public function actionIndex()
    {
    	//新闻中心
        $articleModel = new MirArticle();
    	$data = $articleModel->find()->where(["article_class"=>'0']);
       	$pages = new Pagination(['totalCount'=>$data->count(), 'pageSize' => '10']);
        $news = $articleModel->articleToIndex(0);
        $news = $data->offset($pages->offset)->limit($pages->limit)->orderBy("article_id desc")->all();
        // p(count($news));
        return $this->render('index',[
        	 'news' => $news,
             'pages' => $pages,
        	]);
    }

    public function actionIndex2()
    {
        $id = Yii::$app->request->get("id");
        $articleModel = new MirArticle();
        $model = $articleModel->find()->where(["article_id"=>$id])->one();
        // p($model);
        return $this->render('index2',[
            "model"=>$model
        ]);
    }

}