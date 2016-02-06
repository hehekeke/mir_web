<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Admins".
 *
 * @property integer $Admin_id
 * @property string $Admin_user
 * @property string $Admin_pass
 * @property string $Admin_name
 * @property integer $Admin_state
 * @property string $Admin_logintime
 * @property integer $Admin_logintimes
 * @property string $Admin_loginip
 * @property string $Admin_addtime
 * @property string $Admin_email
 * @property string $Admin_info
 */
class Admins extends \backend\models\MirBase
{
    public $Admin_rpass;/** 重复密码*/
    public $Admin_opass;/** 原始密码 */
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Admins';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Admin_user','Admin_email','Admin_name'], 'required'],
            [['Admin_id', 'Admin_state', 'Admin_logintimes'], 'integer'],
            [['Admin_logintime', 'Admin_addtime'], 'safe'],
            [['Admin_email'],'email','message'=>'邮箱地址格式错误'],
            [['Admin_user', 'Admin_pass', 'Admin_rpass','Admin_opass','Admin_name', 'Admin_loginip', 'Admin_email', 'Admin_info'], 'string', 'max' => 255],
            [['Admin_rpass'], 'compare','compareAttribute'=>'Admin_pass'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Admin_id' => Yii::t('app', 'ID'),
            'Admin_user' => Yii::t('app', '用户名'),
            'Admin_pass' => Yii::t('app', '密码'),
            'Admin_rpass' => Yii::t('app', '确认密码'),
            'Admin_opass' => Yii::t('app', '原始密码'),
            'Admin_name' => Yii::t('app', '真实姓名'),
            'Admin_state' => Yii::t('app', '超级管理员'),
            'Admin_logintime' => Yii::t('app', '最后登入'),
            'Admin_logintimes' => Yii::t('app', '登入次数'),
            'Admin_loginip' => Yii::t('app', 'Admin Loginip'),
            'Admin_addtime' => Yii::t('app', '添加日期'),
            'Admin_email' => Yii::t('app', '管理员E-mail'),
            'Admin_info' => Yii::t('app', '个人说明'),
        ];
    }
    /**
     * 修改管理员级别
     * @author wonguohui
     * @Date   2016-01-06T21:24:56+0800
     * @param  $id 主键
     */
    public function chageStatus($id)
    {
        $statusArray = ['0'=>1,'1'=>0];
        $data = $this->find()->where(['Admin_id'=>$id])->select(['Admin_state'])->asArray()->one();
        $curStatus = $data['Admin_state'];
        return $this->updateAll(['Admin_state'=>$statusArray[$curStatus]],['Admin_id'=>$id]);
    }
    /**
     * 新增管理员
     * @author wonguohui
     * @Date   2016-01-06T23:11:09+0800
     * @param  $data
     */
    public function saveAdmin($data)
    {
        unset($data['Admins']['Admin_rpass']);
        $data['Admins']['Admin_addtime'] = date('Y-m-d H:s:i',time());
        $data['Admins']['Admin_state'] = 0;
        $this->attributes = $data['Admins'];

        return ($this->save())?$this->getPrimaryKey():false;
    }
    /**
     * 验证原始密码是否正确
     * @author wonguohui
     * @Date   2016-01-06T23:15:49+0800
     * @param  $password 原始密码   
     * @param  id 主键id
     */
    public function validatePassword($password,$id)
    {
        $res = $this->find()->where(['Admin_id'=>$id])
                    ->select('Admin_pass')
                    ->asArray()->one();
        if(!empty($res) && $res['Admin_pass'] == $password){
            return true;
        }else{
            return false;
        }
    }
}
