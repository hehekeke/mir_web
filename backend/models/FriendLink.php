<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "FriendLink".
 *
 * @property integer $Link_id
 * @property string $Link_url
 * @property string $Link_name
 * @property string $Link_imgurl
 * @property string $Link_info
 * @property integer $Link_state
 * @property string $Link_addtime
 */
class FriendLink extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'FriendLink';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Link_info'], 'string'],
            [['Link_state'], 'integer'],
            [['Link_addtime'], 'safe'],
            [['Link_url', 'Link_name', 'Link_imgurl'], 'string', 'max' =>
255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Link_id' => '链接ID',
            'Link_url' => '链接网址',
            'Link_name' => '链接名称',
            'Link_imgurl' => '链接显示的图片',
            'Link_info' => '链接备注',
            'Link_state' => '审核状态',
            'Link_addtime' => '链接添加时间',
        ];
    }
    //获得友情链接
    public function getFriendLinks(){
        $data = $this->find()->all();
        return $data;
    }

    public function beforeSave($insert){
        if (parent::beforeSave($insert)) {
            $this->Link_addtime=date("Y-m-d H:i:s",time());
        }
        return true;
    }
     public function beforeUpdate($insert){
        if (parent::beforeUpdate($insert)) {
            $this->Link_addtime=date("Y-m-d H:i:s",time());
        }
        return true;
    }
}