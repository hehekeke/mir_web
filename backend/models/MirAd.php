<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mir_ad".
 *
 * @property integer $id
 * @property string $ad_picture
 * @property string $ad_desc
 * @property string $ad_url
 * @property integer $ad_rank
 */
class MirAd extends \backend\models\MirBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mir_ad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ad_rank'], 'integer'],
            [['ad_picture', 'ad_desc', 'ad_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ad_picture' => Yii::t('app', '广告图片'),
            'ad_desc' => Yii::t('app', '广告描述'),
            'ad_url' => Yii::t('app', '广告链接'),
            'ad_rank' => Yii::t('app', '排序'),
        ];
    }
}
