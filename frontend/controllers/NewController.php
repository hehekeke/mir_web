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
use frontend\controllers\CommonController;

/**
 * Site controller
 */
class NewController extends CommonController
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

        $comeForm = Yii::$app->request->get("comeForm");
        if($comeForm == 'jishu'){
            $title = "技术分享";
        }else{
            $title = '新闻中心';
        }
        $id = Yii::$app->request->get("id");
        $articleModel = new MirArticle();
        $model = $articleModel->find()->where(["article_id"=>$id])->one();
        $prevModeLst = $articleModel->find()->where(["article_class"=>'0'])->andWhere(["<","article_id",$id])->all();
        $prevModel = $prevModeLst[count($prevModeLst)-1];
        $nextModel = $articleModel->find()->where(["article_class"=>'0'])->andWhere([">","article_id",$id])->limit("article_id desc")->one();
        // p($prevMode);
        return $this->render('index2',[
            "model"=>$model,
            'title'=>$title,
            'prevModel'=>$prevModel,
            'nextModel'=>$nextModel,
        ]);
    }

}