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
    	$data = $articleModel->find()->where(["article_class"=>'0'])->orderBy("article_rank desc");
       	$pages = new Pagination(['totalCount'=>$data->count(), 'pageSize' => '10']);
        $news = $articleModel->articleToIndex(0);
        $news = $data->offset($pages->offset)->limit($pages->limit)->orderBy("article_rank desc,article_id desc")->all();
        // p(count($news));
        // 本周热点
        $renDian = $articleModel->find()->where(["article_class"=>'0','article_istop'=>'1'])->all();
        // p($renDian);
        //热门排行
        $paiHang = $articleModel->find()->where(["article_class"=>'0','article_istop'=>'0'])->orderBy("article_id desc")->all();
        // p($paiHang);
        return $this->render('index',[
        	 'news' => $news,
             'pages' => $pages,
             'renDian'=>$renDian,
             'paiHang'=>$paiHang
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
        // 本周热点
        $renDian = $articleModel->find()->where(["article_class"=>'0','article_istop'=>'1'])->all();
        // p($renDian);
        //热门排行
        $paiHang = $articleModel->find()->where(["article_class"=>'0','article_istop'=>'0'])->orderBy("article_id desc")->all();
        // p($paiHang);
        return $this->render('index2',[
            "model"=>$model,
            'title'=>$title,
            'prevModel'=>$prevModel,
            'nextModel'=>$nextModel,
            'renDian'=>$renDian,
            'paiHang'=>$paiHang,
        ]);
    }
    public function actionIndex3(){
        $articleModel = new MirArticle();
        $data = MirArticle::find()->select("article_pic,article_id")->all();
        for ($i=0; $i < count($data); $i++) { 
            $pics[$i]['id'] =$data[$i]->article_id;
            $pics[$i]['pic'] =$data[$i]->article_pic; 
        }
        for ($i=0; $i < count($pics); $i++) { 
            if($pics[$i]['pic'] == 'nopic.gif'){
                $model = MirArticle::find()->where(["article_id"=>$pics[$i]['id']])->one();
                $model->article_pic = "moren.png";
                $model->save();
            }
        }
        echo "ok";
    }

}