<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use backend\models\FriendLink;

/**
 * Site controller
 */
class CommonController extends Controller
{
    

    public function actions()
    {
        
        return [
            'error' =>
[
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
     public function beforeAction($action)
    {
        Yii::$app->params['title'] = array(
                        'home'=>array(
                            '0'=>'首页',
                            '1'=>'Home'
                        ),
                        'news'=>array(
                            '0'=>'新闻中心',
                            '1'=>'New Center'
                        ),
                        'ivd'=>array(
                            '0'=>'IVD展厅',
                            '1'=>'IVD'
                        ),
                        'meeting'=>array(
                            '0'=>'会议信息',
                            '1'=>'Meeting'
                        ),
                        'video'=>array(
                            '0'=>'视频中心',
                            '1'=>'VIDEO'
                        ),
                        'job'=>array(
                            '0'=>'行业招聘',
                            '1'=>'Jobs'
                        ),
                        'search'=>array(
                            '0'=>'搜索',
                            '1'=>'Search'
                        ),
                        'aboutUs'=>array(
                            '0'=>'关于我们',
                            '1'=>'AboutUs'
                        ),
                        'login'=>array(
                            '0'=>'登陆',
                            '1'=>'Login'
                        ),
                        'register'=>array(
                            '0'=>'注册',
                            '1'=>'Register'
                        ),
                        'WonderfulAspect'=>array(
                            '0'=>'精彩看点',
                            '1'=>'Wonderful'
                        ),
                        'home'=>array(
                            '0'=>'首页',
                            '1'=>'Home'
                        ),
                         'xueshuhuiyi'=>array(
                            '0'=>'学术会议',
                            '1'=>'Academic Conference'
                        ),
                        'zhanhuixinxi'=>array(
                            '0'=>'展会信息',
                            '1'=>'Exhibition information'
                        ),
                        'zuixinhuiyi'=>array(
                            '0'=>'最新会议',
                            '1'=>'Latest meeting'
                        ),
                        'tuijianzhaopin'=>array(
                            '0'=>'推荐招聘',
                            '1'=>'Recommended recruitment'
                        ),
                        'mingqizhaopin'=>array(
                            '0'=>'名企招聘',
                            '1'=>'Famous enterprises recruitment'
                        ),
                        'linchuanzaixian'=>array(
                            '0'=>'临床在线',
                            '1'=>'clinical medicine'
                        ),
                        'zhutizhuanfang'=>array(
                            '0'=>'主题专访',
                            '1'=>'Theme interview'
                        ),
                        'zhuanjiazhuanlan'=>array(
                            '0'=>'专家专栏',
                            '1'=>'Expert column'
                        ),
                        'pinpaililiang'=>array(
                            '0'=>'品牌力量',
                            '1'=>'Brand power'
                        ),
                        'zhaobiaoguanggao'=>array(
                            '0'=>'招标公告',
                            '1'=>'Bidding advertisement'
                        ),
                        'jishufenxiang'=>array(
                            '0'=>'技术分享',
                            '1'=>'Technology sharing'
                        ),
                        'linchuanyixue'=>array(
                            '0'=>'临床医学',
                            '1'=>'clinical medicine'
                        ),
                        'suokan'=>array(
                            '0'=>'索刊',
                            '1'=>'Cable'
                        ),
                        'zhengwen'=>array(
                            '0'=>'正文',
                            '1'=>'text'
                        ),
                        // 'faburiqi'发布日期
                        'faburiqi'=>array(
                            '0'=>'发布日期',
                            '1'=>'Release date'
                        ),
                        'laiyuan'=>array(
                            '0'=>'来源',
                            '1'=>'come From'
                        ),
                        'pinpaizhanshi'=>array(
                            '0'=>'品牌展示',
                            '1'=>'Brand show'
                        ),
                        'qiyexinxi'=>array(
                            '0'=>'企业信息',
                            '1'=>'Enterprise information'
                        ),
                        'gongsijieshao'=>array(
                            '0'=>'公司介绍',
                            '1'=>'Company introduction'
                        ),
                        'zhaopinzhiwei'=>array(
                            '0'=>'招聘职位',
                            '1'=>'Recruitment post'
                        ),
                        'yixuejiancewang'=>array(
                            '0'=>'医学检测网',
                            '1'=>'Medical examination network'
                        ),
                        'youqinglianjie'=>array(
                            '0'=>'友情链接',
                            '1'=>'Friendship link'
                        ),
                        'tebietuijian'=>array(
                            '0'=>'特别推荐',
                            '1'=>'Special recommendation'
                        ),
                        'qiteshipin'=>array(
                            '0'=>'其他视频',
                            '1'=>'Other screen'
                        ),
                        'zhengwen'=>array(
                            '0'=>'正文',
                            '1'=>'text'
                        ),


                    );
        return true;
    }

}