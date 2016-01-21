<?php

namespace backend\models;

use Yii;
use backend\helpers\Password;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $role
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $name
 * @property integer $state
 * @property integer $login_times
 * @property integer $last_login
 */
class SuperUser extends \backend\models\MirBase
{
    public $password_rhash;/** 重复密码*/
    public $password_ohash;/** 原始密码 */
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['role', 'status', 'created_at', 'updated_at', 'state', 'login_times'], 'integer'],
            [['username', 'password_hash','password_ohash', 'password_reset_token', 'password_rhash','email', 'name','last_login','info'], 'string', 'max' => 255],
            [['email'],'email','message'=>'邮箱地址格式错误'],
            [['auth_key'], 'string', 'max' => 32],
            [['password_rhash'], 'compare','compareAttribute'=>'password_hash'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', '用户名'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'password_hash' => Yii::t('app', '密码'),
            'password_rhash' => Yii::t('app', '确认密码'),
            'password_ohash' => Yii::t('app', '原始密码'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'email' => Yii::t('app', '电子邮箱'),
            'role' => Yii::t('app', '角色'),
            'status' => Yii::t('app', '状态'),
            'created_at' => Yii::t('app', '创建时间'),
            'updated_at' => Yii::t('app', '更新时间'),
            'name' => Yii::t('app', '姓名'),
            'state' => Yii::t('app', '超级管理员'),
            'login_times' => Yii::t('app', '登陆次数'),
            'last_login' => Yii::t('app', '最后登陆时间'),
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
        $data = $this->find()->where(['id'=>$id])->select(['state'])->asArray()->one();
        $curStatus = $data['state'];
        return $this->updateAll(['state'=>$statusArray[$curStatus]],['id'=>$id]);
    }
    /**
     * 新增管理员
     * @author wonguohui
     * @Date   2016-01-06T23:11:09+0800
     * @param  $data
     */
    public function saveAdmin($data)
    {
        unset($data['SuperUser']['password_rhash']);

        $data['SuperUser']['created_at'] = time();
        $data['SuperUser']['updated_at'] = time();
        $data['SuperUser']['auth_key'] = Yii::$app->security->generateRandomString();
        $data['SuperUser']['password_hash'] = Yii::$app->getSecurity()->generatePasswordHash($data['SuperUser']['password_hash']);
        $this->password_rhash = $data['SuperUser']['password_hash'];
        $data['SuperUser']['state'] = 0;
        $this->attributes = $data['SuperUser'];

        return ($this->save())?$this->getPrimaryKey():false;
    }
    /**
     * 验证原始密码是否正确
     * @author wonguohui
     * @Date   2016-01-06T23:15:49+0800
     * @param  $password 原始密码   
     * @param  id 主键id
     */
    public function validateUserPassword($password,$id)
    {
        $user = $this->find()->where(['id'=>$id])
                    ->select('password_hash')
                    ->one();
        if(!empty($user) && Password::validate($password, $user->password_hash)){
            return true;
        }else{
            return false;
        }
    }

}
