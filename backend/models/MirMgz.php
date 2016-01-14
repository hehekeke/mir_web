<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mir_mgz".
 *
 * @property integer $mgz_id
 * @property integer $mgz_page
 * @property integer $mgz_year
 * @property integer $mgz_num
 * @property string $mgz_pic
 * @property integer $mgz_isfirst
 * @property integer $mgz_znum
 */
class MirMgz extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mir_mgz';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['mgz_znum','required','message'=>'请输入总期数'],
            ['mgz_page','required','message'=>'请输入页码'],
            [['mgz_id', 'mgz_page', 'mgz_year', 'mgz_num', 'mgz_isfirst', 'mgz_znum'], 'integer'],
            [['mgz_pic'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mgz_id' => '杂志ID',
            'mgz_page' => '杂志第几页',
            'mgz_year' => '杂志年份',
            'mgz_num' => '杂志第几期',
            'mgz_pic' => '杂志缩略图',
            'mgz_isfirst' => '是否封面',
            'mgz_znum' => '杂志总期数',
        ];
    }
}
