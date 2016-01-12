<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "Classify".
 *
 * @property integer $ID
 * @property integer $ModuleID
 * @property integer $RootID
 * @property integer $Depth
 * @property string $ClassName
 * @property string $ClassName_e
 * @property string $Readme
 * @property integer $Orders
 * @property integer $ParentID
 * @property string $ParentStr
 * @property integer $Child
 * @property string $ChildStr
 * @property integer $ShowCount
 */
class Classify extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Classify';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'ModuleID', 'RootID', 'Depth', 'Orders', 'ParentID', 'Child', 'ShowCount'], 'integer'],
            [['ParentStr', 'ChildStr'], 'string'],
            [['ClassName', 'ClassName_e', 'Readme'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ModuleID' => 'Module ID',
            'RootID' => 'Root ID',
            'Depth' => 'Depth',
            'ClassName' => '分类名称',
            'ClassName_e' => '分类名称英文',
            'Readme' => '分类注释',
            'Orders' => 'Orders',
            'ParentID' => '所属主分类',
            'ParentStr' => 'Parent Str',
            'Child' => 'Child',
            'ChildStr' => 'Child Str',
            'ShowCount' => 'Show Count',
        ];
    }
    /**
     * 产品主分类 用于下拉列表
     * @author wonguohui
     * @Date   2016-01-10T19:19:30+0800
     */
    public static function mainClass()
    {
        $mainClass = self::find()->select(['ID','ClassName'])->where(['ParentID'=>0])
                                ->asArray()->all();
        return ArrayHelper::map($mainClass,'ID','ClassName');
    }
    /**
     * 返回产品的子分类
     * @author wonguohui
     * @Date   2016-01-10T19:27:06+0800
     * @param  $parentId 主分类id
     */
    public function childClass($parentId)
    {
        $childData = $this->find()->select(['ChildStr'])->where(['ID'=>$parentId])
                                 ->asArray()->one();

        $ids = explode(',', $childData['ChildStr']);
        $map = ['in','ID',$ids];
        $childClass = $this->find()->select(['ID','ClassName'])->where($map)
                                 ->asArray()->all();

        return ArrayHelper::map($childClass,'ID','ClassName');
    }
    public function getAllClassify()
    {
        $mainClass = self::mainClass();
        $classifyArray = [];
        foreach ($mainClass as $k => $v) {
            $classifyArray[$k] = $v;
            $child = $this->childClass($k);
            foreach ($child as $kk => $vv) {
                if($k == $kk){
                    continue;
                }else{
                    $classifyArray[$kk] = ' |-'.$vv;
                }
            }
        }
        return $classifyArray;
    }
}
