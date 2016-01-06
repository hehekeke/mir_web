<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mir_meeting".
 *
 * @property integer $meeting_id
 * @property string $meeting_class
 * @property string $meeting_loc
 * @property string $meeting_loc_e
 * @property string $meeting_name
 * @property string $meeting_name_e
 * @property string $meeting_bdate
 * @property string $meeting_edate
 * @property string $meeting_pic
 * @property string $meeting_mem
 * @property string $meeting_mem_e
 * @property string $meeting_sub
 * @property string $meeting_sub_e
 */
class MirMeeting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mir_meeting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meeting_id'], 'required'],
            [['meeting_id'], 'integer'],
            [['meeting_bdate', 'meeting_edate'], 'safe'],
            [['meeting_mem', 'meeting_mem_e'], 'string'],
            [['meeting_class', 'meeting_loc', 'meeting_loc_e', 'meeting_name', 'meeting_name_e', 'meeting_pic', 'meeting_sub', 'meeting_sub_e'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'meeting_id' => '会议序号',
            'meeting_class' => '会议类别',
            'meeting_loc' => '会议召开地点',
            'meeting_loc_e' => '会议召开地点英文',
            'meeting_name' => '会议标题',
            'meeting_name_e' => '标题英文',
            'meeting_bdate' => '会议召开时间',
            'meeting_edate' => '会议介绍时间',
            'meeting_pic' => '会议图片',
            'meeting_mem' => '会议详情',
            'meeting_mem_e' => '会议详情英文',
            'meeting_sub' => '学科分类',
            'meeting_sub_e' => '学科分类英文',
        ];
    }
}
