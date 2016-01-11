<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

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
    public $makerMap = [];
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
            'product_date' => '添加时间',
            'product_class' => '产品类别',
            'product_place' => '产地',
            'product_place_e' => '产地英文',
            'product_standards' => '产品规格',
            'product_standards_e' => '产品规格英文',
            'product_model' => '产品型号',
            'product_model_e' => '产品型号英文',
            'product_performance' => '性能',
            'product_performance_e' => '性能英文',
            'product_parameter' => '产品参数',
            'product_parameter_e' => '产品参数英文',
            'product_contrast' => 'Product Contrast',
            'product_contrast_e' => 'Product Contrast E',
            'product_appraise' => 'Product Appraise',
            'product_appraise_e' => 'Product Appraise E',
            'product_pic' => '产品图片',
            'product_mainclass' => '产品主分类',
            'product_brand' => '产品品牌',
            'product_tui' => '推荐产品',
            'product_maker' => '生产厂商',
            'product_disp' => 'Product Disp',
        ];
    }
    /**
     * 根据厂商id获取其名称
     * @author wonguohui
     * @Date   2016-01-10T00:56:52+0800
     * @param  $id 厂商id
     */
    public static function makerMap($id)
    {
        $maker = new \backend\models\MirMaker;
        $map = $maker->getMakerNameIdMap();
        return $map[$id];
    }
    /**
     * 搜索某一个生产厂商生产的产品
     * @author wonguohui
     * @Date   2016-01-10T01:22:32+0800
     * @param  $name 厂商名称
     * @return array
     */
    public function searchMaker($name)
    {
        $maker = \backend\models\MirMaker::find()->select(['maker_id'])->where(['like','maker_name',$name])->asArray()->all();
        return ArrayHelper::getColumn($maker,'maker_id');
    }
    /**
     * 产品主分类 用于下拉列表
     * @author wonguohui
     * @Date   2016-01-10T19:19:30+0800
     */
    public static function mainClass()
    {
        return \backend\models\Classify::mainClass();
    }
    /**
     * 返回产品的子分类
     * @author wonguohui
     * @Date   2016-01-10T19:27:06+0800
     * @param  $parentId 主分类id
     */
    public function childClass($parentId)
    {
        $classModel = new \backend\models\Classify;
        return $classModel->childClass($parentId);
    }
    /**
     * 产品的生产厂商id=>name的map供下拉列表使用
     * @author wonguohui
     * @Date   2016-01-10T20:08:53+0800
     */
    public static function productMakerMap()
    {
        $maker = new \backend\models\MirMaker;
        $map = $maker->getMakerNameIdMap();
        return $map;
    }
    /**
     * 全部的品牌列表 map
     * @author wonguohui
     * @Date   2016-01-10T20:14:31+0800
     */
    public static function productBrandMap()    
    {
        $brand = new \backend\models\MirBrand;
        $map = $brand->getBrandNameIdMap();
        return $map;
    }
    /**
     * 城市下来列表用
     * @author wonguohui
     * @Date   2016-01-10T22:46:56+0800
     */
    public static function cityMap()
    {
        $city = Yii::$app->params['city'];
        foreach ($city as $k => $v) {
            $list[$k] = $k;
        }
        return $list;
    }
}








