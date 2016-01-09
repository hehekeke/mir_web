<?php
namespace frontend\controllers;
use Yii;


use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
 
use backend\models\MirMeeting;
use frontend\controllers\CommonController;
/**
 * Site controller
 */
class MeetingController extends CommonController
{
    

    public function actionIndex()
    {
    	$meetingModel = new MirMeeting();
    	$newMeetings = $meetingModel->find()->select("meeting_id,meeting_name")->orderBy('meeting_id desc')->limit(10)->all();
    	// p($meetings);
    	$xueshuMeetings = $meetingModel->find()->select("meeting_id,meeting_name,meeting_loc,meeting_bdate,meeting_edate")->where(["meeting_class"=>'1'])->orderBy('meeting_id desc')->limit(30)->all();
        for ($i=0; $i <count($xueshuMeetings) ; $i++) { 
        	$startTime = date("Y-m-d",strtotime($xueshuMeetings[$i]->meeting_bdate));
        	$xueshuMeetings[$i]->meeting_bdate = $startTime;
        }

        $zhanhuiMeetings = $meetingModel->find()->select("meeting_id,meeting_name,meeting_loc,meeting_bdate,meeting_edate")->where(["meeting_class"=>'2'])->orderBy('meeting_id desc')->limit(30)->all();
        for ($i=0; $i <count($xueshuMeetings) ; $i++) { 
        	$startTime = date("Y-m-d",strtotime($zhanhuiMeetings[$i]->meeting_bdate));
        	$zhanhuiMeetings[$i]->meeting_bdate = $startTime;
        }
        return $this->render('index',[
        	"newMeetings"=>$newMeetings,
        	"xueshuMeetings"=>$xueshuMeetings,
        	'zhanhuiMeetings'=>$zhanhuiMeetings
        ]);
    }

    public function actionIndex2()
    {
        $meetingModel = new MirMeeting();
        $newMeetings = $meetingModel->find()->select("meeting_id,meeting_name")->orderBy('meeting_id desc')->limit(10)->all();
        
        $id =Yii::$app->request->get("id");
        $model = $meetingModel->findOne(["meeting_id"=>$id]);
        // p($model);
        return $this->render('index2',[
            'newMeetings'=>$newMeetings,
            'model'=>$model,
        ]);
    }

}

    

    

