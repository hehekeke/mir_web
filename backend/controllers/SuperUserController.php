<?php

namespace backend\controllers;

use Yii;
use backend\models\SuperUser;
use backend\models\SuperUserSearch;
use backend\controllers\CommonController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuperUserController implements the CRUD actions for SuperUser model.
 */
class SuperUserController extends CommonController
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
     * Lists all SuperUser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SuperUserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * 修改超级管理员
     * @author wonguohui
     * @Date   2016-01-06T22:21:34+0800
     */
    public function actionStatus()
    {
        $id = Yii::$app->request->get('id');
        $model = new \backend\models\SuperUser;
        $res = $model->chageStatus($id);
        if($res){
            return $this->redirect(['super-user/index']);
        }
    }

    /**
     * Displays a single SuperUser model.
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
     * Creates a new SuperUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SuperUser();

        if ($model->load(Yii::$app->request->post())) {
        	$res = $model->saveAdmin(Yii::$app->request->post());
            if($res){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SuperUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SuperUser model.
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
     * 修改当前账户密码
     * @author wonguohui
     * @Date   2016-01-06T23:23:46+0800
     */
    public function actionPassword()
    {
        $model = new SuperUser();
        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            if($model->validateUserPassword($data['SuperUser']['password_ohash'],Yii::$app->user->identity->id)){
                $map = ['id'=>Yii::$app->user->identity->id];
                $data['SuperUser']['password_hash'] = Yii::$app->getSecurity()->generatePasswordHash($data['SuperUser']['password_hash']);
                $res = $model->updateByMap(['password_hash'=>$data['SuperUser']['password_hash']],$map);
                if($res) return $this->redirect(['super-user/index']);
            }else{
                Yii::$app->getSession()->setFlash('user.error', '原始密码错误');
                $this->refresh();
                return;
            }
        }
        return $this->render('password',[
            'model'=>$model
        ]);
    }
    /**
     * Finds the SuperUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SuperUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SuperUser::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
