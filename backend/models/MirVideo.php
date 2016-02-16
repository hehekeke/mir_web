<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mir_video".
 *
 * @property integer $video_id
 * @property string $video_title
 * @property string $video_title_e
 * @property string $video_filename
 * @property string $video_mem
 * @property string $video_mem_e
 * @property string $video_size
 * @property string $video_class
 * @property string $video_date
 */
class MirVideo extends \backend\models\MirBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mir_video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['video_mem', 'video_mem_e'], 'string'],
            [['video_title', 'video_title_e', 'video_filename', 'video_size', 'video_class', 'video_date','video_cover'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'video_id' => Yii::t('app', 'ID'),
            'video_title' => Yii::t('app', '标题'),
            'video_title_e' => Yii::t('app', '英文标题'),
            'video_filename' => Yii::t('app', '视频文件名'),
            'video_mem' => Yii::t('app', '中文介绍'),
            'video_mem_e' => Yii::t('app', '英文介绍'),
            'video_size' => Yii::t('app', '视频大小'),
            'video_class' => Yii::t('app', 'Video Class'),
            'video_date' => Yii::t('app', '日期'),
            'video_cover' => Yii::t('app', '视频封面'),
        ];
    }
}
