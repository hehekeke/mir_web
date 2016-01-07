<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mir_maker".
 *
 * @property integer $maker_id
 * @property string $maker_name
 * @property string $maker_name_e
 * @property string $maker_info
 * @property string $maker_info_e
 * @property string $maker_character
 * @property string $maker_character_e
 * @property string $maker_place
 * @property string $maker_place_e
 * @property string $maker_proclass
 * @property string $maker_date
 * @property string $maker_class
 * @property string $maker_contact
 * @property string $maker_contact_e
 * @property integer $maker_disp
 */
class MirMaker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mir_maker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['maker_id', 'maker_disp'], 'integer'],
            [['maker_info', 'maker_info_e', 'maker_contact', 'maker_contact_e'], 'string'],
            [['maker_date'], 'safe'],
            [['maker_name', 'maker_name_e', 'maker_character', 'maker_character_e', 'maker_place', 'maker_place_e', 'maker_proclass', 'maker_class'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'maker_id' => '厂商ID',
            'maker_name' => '厂商名称',
            'maker_name_e' => '厂商英文名称',
            'maker_info' => '企业简介',
            'maker_info_e' => '企业简介英文',
            'maker_character' => '企业性质',
            'maker_character_e' => '企业性质英文',
            'maker_place' => '企业所在地',
            'maker_place_e' => '企业所在地英文',
            'maker_proclass' => 'Maker Proclass',
            'maker_date' => 'Maker Date',
            'maker_class' => 'Maker Class',
            'maker_contact' => '联系方式',
            'maker_contact_e' => '英文联系方式',
            'maker_disp' => 'Maker Disp',
        ];
    }
}
