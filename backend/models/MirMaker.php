<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

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
class MirMaker extends \backend\models\MirBase
{
    public $makerClass = ['0'=>'生产商','1'=>'经销商'];
    public $makerCharacter = ['私营'=>'私营','国有'=>'国有','合资'=>'合资','独资'=>'独资'];
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
            'maker_proclass' => '企业产品类别',
            'maker_date' => 'Maker Date',
            'maker_class' => '企业类别',
            'maker_contact' => '联系方式',
            'maker_contact_e' => '英文联系方式',
            'maker_disp' => 'Maker Disp',
        ];
    }
    /**
     * 获取生产厂商的名称与id作为map返回
     * @author wonguohui
     * @Date   2016-01-10T00:42:59+0800
     */
    public function getMakerNameIdMap()
    {
        $maker = $this->find()->select(['maker_id','maker_name'])
                      ->asArray()->all();
        $map = ArrayHelper::map($maker,'maker_id','maker_name');
        return $map;
    }
}
