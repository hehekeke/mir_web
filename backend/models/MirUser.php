<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mir_user".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_pwd
 * @property string $user_class
 * @property string $user_tel
 * @property string $user_email
 * @property integer $user_chk
 * @property string $user_date
 * @property string $user_place
 * @property string $user_xm
 * @property string $user_com
 */
class MirUser extends \backend\models\MirBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mir_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'user_chk'], 'integer'],
            [['user_date'], 'safe'],
            [['user_name', 'user_pwd', 'user_class', 'user_tel', 'user_email', 'user_place', 'user_xm', 'user_com'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => '编号',
            'user_name' => '姓名',
            'user_pwd' => 'User Pwd',
            'user_class' => 'User Class',
            'user_tel' => '联系电话',
            'user_email' => '电子邮件',
            'user_chk' => '是否审核',
            'user_date' => '注册日期',
            'user_place' => '所在地',
            'user_xm' => 'User Xm',
            'user_com' => '单位',
        ];
    }
    /**
     * 审核
     * @author wonguohui
     * @Date   2016-01-06T21:02:29+0800
     * @param  $id 主键id 
     */
    public function chageStatus($id)
    {
        $statusArray = ['0'=>1,'1'=>0];
        $data = $this->find()->where(['user_id'=>$id])->select(['user_chk'])->asArray()->one();
        $curStatus = $data['user_chk'];
        return $this->updateAll(['user_chk'=>$statusArray[$curStatus]],['user_id'=>$id]);
    }

}
