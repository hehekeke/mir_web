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

use yii\data\Pagination;
/**
 * Site controller
 */
class IdvController extends CommonController
{
    

    public function actionIndex()
    {
    	$classifyModel = new Classify();
    	$dafenlei = $classifyModel->find()->where(["ParentID"=>'0'])->limit(8)->all();
    	// p($dafenlei);
    	$articleModel = new MirArticle();
    	$jobs = $articleModel->articleToIndex(5);
        //技术分享
        $jishus = $articleModel->articleToIndex(3);
        //ivd 四个图
        $ivdModel = new MirIvd();
        $ivdList = $ivdModel->getIvdlist(); 
        // P($ivdList);
        //产品照片显示
        $productModel = new MirProduct();
        $mainClass = $productModel->mainClass();
        foreach ($mainClass as $k => $v) {
            $mainClassId[] = $k;
        }
        for ($i=0; $i < count($mainClassId)-1; $i++) { 
            $products[] = MirProduct::find()->where(['product_mainclass'=>$mainClassId[$i]])->orderBy("product_id desc")->all();
            $data = $productModel->find()->where(["product_mainclass"=>$mainClassId[$i]]);
            $pages = new Pagination(['totalCount'=>$data->count(), 'pageSize' => '10']);
            $dataShow = $data->offset($pages->offset)->limit($pages->limit)->orderBy("product_id desc")->all();
            $pagesArray[] = $pages;
            $productArray[] = $dataShow;
            
        }
        // p($pagesArray);
        // p($mainClass);
        $mainClass = array_values($mainClass);
        // p($products[0]);
        return $this->render('index',[
        	'dafenlei'=>$dafenlei,
        	'jobs'=>$jobs,
            'jishus'=>$jishus,
            'ivdList'=>$ivdList,
            'mainClass'=>$mainClass,
            'products'=>$products,
            'productArray'=>$productArray,
            'pagesArray'=>$pagesArray,
        ]);
    }

    public function actionIndex2()
    {
        $session = Yii::$app->session;
        $language = empty($session['language'])?0:1;

        //寻找品牌库
        $brandModel = new MirBrand();
        $lists = $brandModel->find()->all();
        // p($lists);
        for ($i=0; $i < count($lists); $i++) { 
            if(!$language){
                $data[$i]['name'] = $lists[$i]->brand_name;
            }else{
                $data[$i]['name'] = $lists[$i]->brand_name_e;
            }
            $data[$i]['pinyi'] = strtoupper(substr(trim($lists[$i]->brand_name_e), 0,1));
        }
        
        $data = $this->array_sort($data,'pinyi',"asc");
        for ($i=0; $i < count($data); $i++) { 
            $newData[$data[$i]['pinyi']][] = $data[$i]['name'];
        }
        // p($newData);
        return $this->render('index2',[
            'newData'=>$newData,
        ]);
    }
    public function array_sort($arr,$keys,$orderby='asc'){
      $keysvalue = $new_array = array();
      foreach ($arr as $k=>$v){
        $keysvalue[$k] = $v[$keys];
      }
      if($orderby== 'asc'){
        asort($keysvalue);
      }else{
        arsort($keysvalue);
      }
      reset($keysvalue);
      foreach ($keysvalue as $k=>$v){
        $new_array[] = $arr[$k];
      }
      return $new_array;
    }

    /**
     * 到达产品详情页面
     * @AuthorHTL
     * @DateTime  2016-01-12T17:21:01+0800
     * @return    [type]                   [description]
     */
    public function actionIndex3(){
        $id = Yii::$app->request->get("id");
        $model = MirProduct::findOne(["product_id"=>$id]);
        // p($model);
        return $this->render('index3',[
            'model'=>$model,
        ]);
    }   

}

    

    

