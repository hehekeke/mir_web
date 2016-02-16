<?php

namespace backend\controllers;

use Yii;
use backend\models\Classify;
use backend\models\MirProduct;
use backend\models\MirProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;


/**
 * MirProductController implements the CRUD actions for MirProduct model.
 */
class MirProductController extends CommonController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all MirProduct models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new MirProduct;

        $searchModel = new MirProductSearch();
        $params = Yii::$app->request->queryParams;
        $sort = trim(Yii::$app->request->get('sort'));
        if(empty($sort)){
            $_GET['sort'] = '-product_id';
        }
        
        if(isset($params['MirProductSearch']['product_maker']) && !empty($params['MirProductSearch']['product_maker'])){
            $params['MirProductSearch']['product_maker'] = $model->searchMaker($params['MirProductSearch']['product_maker']);
        }
        $dataProvider = $searchModel->search($params);

        $mainClass = Classify::mainClass();

        return $this->render('index', [
            'mainClass'=>$mainClass,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * 返回主分类下面的子分类，供ajax请求使用
     * @author wonguohui
     * @Date   2016-01-10T19:59:45+0800
     */
    public function actionChildClass()
    {
        $data = Yii::$app->request->post();
        $model = new MirProduct;
        $childClass = $model->childClass($data['parentId']);

        $this->ajaxJson($childClass);
    }
    /**
     * 返回城市的拼音
     * @author wonguohui
     * @Date   2016-01-10T23:17:30+0800
     */
    public function actionCityEnglish()
    {
        $data = Yii::$app->request->post();
        $en = Yii::$app->params['city'][$data['cityName']];
        $this->ajaxJson(['city_en'=>$en]);
    }
    /**
     * Displays a single MirProduct model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MirProduct model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MirProduct();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->product_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MirProduct model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->product_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MirProduct model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MirProduct model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MirProduct the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MirProduct::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
