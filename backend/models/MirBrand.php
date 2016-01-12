<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mir_brand".
 *
 * @property integer $brand_id
 * @property string $brand_name
 * @property string $brand_name_e
 */
class MirBrand extends \backend\models\MirBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mir_brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_id'], 'required'],
            [['brand_id'], 'integer'],
            [['brand_name', 'brand_name_e'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'brand_id' => Yii::t('app', 'ID'),
            'brand_name' => Yii::t('app', '商品中文名称'),
            'brand_name_e' => Yii::t('app', '商品英文名称'),
        ];
    }
    /**
     * 获取品牌id=>name map数组
     * @author wonguohui
     * @Date   2016-01-10T20:14:04+0800
     */
    public function getBrandNameIdMap()
    {
        $data = $this->find()->asArray()->all();
        $map = ArrayHelper::map($data,'brand_id','brand_name');
        return $map;
    }
}
