<?php

namespace backend\controllers;

use Yii;
use backend\models\Admins;
use yii\data\ActiveDataProvider;
use backend\controllers\CommonController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminsController implements the CRUD actions for Admins model.
 */
class AdminsController extends CommonController
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
     * Lists all Admins models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Admins::find(),
        ]);

        return $this->render('index', [
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
        $model = new \backend\models\Admins;
        $res = $model->chageStatus($id);
        if($res){
            return $this->redirect(['admins/index']);
        }
    }
    /**
     * Displays a single Admins model.
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
     * Creates a new Admins model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Admins();

        if($model->load(Yii::$app->request->post())){

            $res = $model->saveAdmin(Yii::$app->request->post());
            if($res){
                return $this->redirect(['view', 'id' => $model->Admin_id]);
            }
        }else{
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Admins model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Admin_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Admins model.
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
        $model = new Admins();
        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();

            if($model->validatePassword($data['Admins']['Admin_opass'],Yii::$app->user->identity->id)){
                $map = ['Admin_id'=>Yii::$app->user->identity->id];
                $res = $model->updateByMap(['Admin_pass'=>$data['Admins']['Admin_pass']],$map);
                if($res) return $this->redirect(['admins/index']);
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
     * Finds the Admins model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Admins the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Admins::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
