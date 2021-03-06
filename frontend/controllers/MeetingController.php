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

use yii\data\Pagination;
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
        $data = $meetingModel->find()->where(["meeting_class"=>'1']);
        $xuehuipages = new Pagination(['totalCount'=>$data->count(), 'pageSize' => '10']);
        $xueshuMeetingsM = $data->offset($xuehuipages->offset)->limit($xuehuipages->limit)->orderBy("meeting_id desc")->all();
        


        $zhanhuiMeetings = $meetingModel->find()->select("meeting_id,meeting_name,meeting_loc,meeting_bdate,meeting_edate")->where(["meeting_class"=>'2'])->orderBy('meeting_id desc')->limit(30)->all();
        $data1 = $meetingModel->find()->where(["meeting_class"=>'2']);
        $zhanhuipages = new Pagination(['totalCount'=>$data1->count(), 'pageSize' => '10']);
        $zhanhuiMeetingsM = $data1->offset($zhanhuipages->offset)->limit($zhanhuipages->limit)->orderBy("meeting_id desc")->all();
        for ($i=0; $i <count($xueshuMeetings) ; $i++) { 
        	$startTime = date("Y-m-d",strtotime($zhanhuiMeetings[$i]->meeting_bdate));
        	$zhanhuiMeetings[$i]->meeting_bdate = $startTime;
        }
        return $this->render('index',[
        	"newMeetings"=>$newMeetings,
        	"xueshuMeetings"=>$xueshuMeetings,
        	'zhanhuiMeetings'=>$zhanhuiMeetings,
            'xuehuipages' => $xuehuipages,
            'zhanhuipages' => $zhanhuipages,
            'xueshuMeetingsM'=>$xueshuMeetingsM,
            'zhanhuiMeetingsM'=>$zhanhuiMeetingsM,
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

    

    

