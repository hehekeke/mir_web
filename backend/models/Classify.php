<?php

namespace backend\models;

use Yii;

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
            'ClassName' => 'Class Name',
            'ClassName_e' => 'Class Name E',
            'Readme' => 'Readme',
            'Orders' => 'Orders',
            'ParentID' => '父节点',
            'ParentStr' => 'Parent Str',
            'Child' => 'Child',
            'ChildStr' => 'Child Str',
            'ShowCount' => 'Show Count',
        ];
    }
}
