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
            [['ModuleID', 'RootID', 'Depth', 'Orders', 'ParentID', 'Child', 'ShowCount'], 'integer'],
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
    /**
     * 获取全部分类，包括主分类及其下面的子分类
     * @author wonguohui
     * @Date   2016-01-12T22:08:49+0800
     * @return [type]
     */
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
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if($this->isNewRecord){
                /**  新增主分类 */
                if($this->ParentID == ''){
                    $this->ParentID = 0;
                    $this->ParentStr = 0;
                    $this->Depth = 0;
                    $this->ModuleID = 1;
                    return true;
                }elseif ($this->isMainClass($this->ParentID)) {
                    /** 新增主分类下面的一个子分类 */
                    $this->ParentStr = $this->ParentID;
                    $this->Depth = 1;
                    $this->ModuleID = 1;
                    return true;
                }else{
                    /** 子分类下再填子分类  */
                    $this->ParentStr = $this->ParentID;
                    $this->Depth = 2;
                    $this->ModuleID = 1;
                    return true;
                }
            }else{
                return true;
            }
        } else {
            return false;
        }
    }
    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert,$changedAttributes);
        /** 如果不是父级分类，给其父级更新其下面的子分类childstr */
        if($this->ParentID !== 0){
            $map = ['ID'=>$this->ParentID];
            $children = $this->find()->select(['ChildStr'])->where($map)->asArray()->one();
            $data = [];
            if(empty($children['ChildStr'])){
                $data[] = $this->ID;
            }else{
                $data = explode(',', $children['ChildStr']);
                $data[] = $this->ID;
            }
            $this->updateAll(['ChildStr'=>implode(',', $data)],$map);
            return true;
        }else{
            return true;
        }

    }
    /**
     * 判断是否为一个分类id是否为主分类
     * @author wonguohui
     * @Date   2016-01-12T23:41:03+0800
     * @param  [type] $id
     * @return boolean
     */
    public function isMainClass($id)
    {
        $mainClass = self::mainClass();
        $mainIds = [];
        foreach ($mainClass as $k => $v) {
            $mainIds[] = $k;
        }
        if(in_array($id,$mainIds)){
            return true;
        }else{
            return false;
        }
    }
    /**
     * 判断是否为一个分类id是否为子分类
     * @author wonguohui
     * @Date   2016-01-12T23:41:03+0800
     * @param  [type] $id
     * @return boolean
     */
    public function isChildClass($id)
    {
        $allClass = $this->getAllClassify();
        $childIds = [];
        foreach ($allClass as $k => $v) {
            $childIds[] = $k;
        }

        if(in_array($id,$childIds)){
            return true;
        }else{
            return false;
        }
    }
}
