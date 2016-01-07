<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mir_product".
 *
 * @property integer $product_id
 * @property string $product_name
 * @property string $product_name_e
 * @property double $product_price
 * @property string $product_date
 * @property string $product_class
 * @property string $product_place
 * @property string $product_place_e
 * @property string $product_standards
 * @property string $product_standards_e
 * @property string $product_model
 * @property string $product_model_e
 * @property string $product_performance
 * @property string $product_performance_e
 * @property string $product_parameter
 * @property string $product_parameter_e
 * @property string $product_contrast
 * @property string $product_contrast_e
 * @property string $product_appraise
 * @property string $product_appraise_e
 * @property string $product_pic
 * @property string $product_mainclass
 * @property string $product_brand
 * @property string $product_tui
 * @property string $product_maker
 * @property integer $product_disp
 */
class MirProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mir_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'product_disp'], 'integer'],
            [['product_price'], 'number'],
            [['product_standards', 'product_standards_e', 'product_model', 'product_model_e', 'product_performance', 'product_performance_e', 'product_parameter', 'product_parameter_e', 'product_contrast', 'product_contrast_e', 'product_appraise', 'product_appraise_e'], 'string'],
            [['product_name', 'product_name_e', 'product_date', 'product_class', 'product_place', 'product_place_e', 'product_pic', 'product_mainclass', 'product_brand', 'product_tui', 'product_maker'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => '产品ID',
            'product_name' => '产品名称',
            'product_name_e' => '英文名称',
            'product_price' => '产品价格',
            'product_date' => 'Product Date',
            'product_class' => 'Product Class',
            'product_place' => '产地',
            'product_place_e' => '产地英文',
            'product_standards' => '产品规格',
            'product_standards_e' => '产品规格英文',
            'product_model' => 'Product Model',
            'product_model_e' => 'Product Model E',
            'product_performance' => 'Product Performance',
            'product_performance_e' => 'Product Performance E',
            'product_parameter' => '产品参数',
            'product_parameter_e' => '产品参数英文',
            'product_contrast' => 'Product Contrast',
            'product_contrast_e' => 'Product Contrast E',
            'product_appraise' => 'Product Appraise',
            'product_appraise_e' => 'Product Appraise E',
            'product_pic' => '产品图片',
            'product_mainclass' => 'Product Mainclass',
            'product_brand' => '产品品牌',
            'product_tui' => '推荐产品',
            'product_maker' => '生产厂商',
            'product_disp' => 'Product Disp',
        ];
    }
}
