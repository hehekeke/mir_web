<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mir_360".
 *
 * @property integer $mir360_id
 * @property string $mir360_title
 * @property string $mir360_title_e
 * @property string $mir360_class
 * @property string $mir360_pic
 * @property string $mir360_date
 * @property string $mir360_remark
 * @property string $mir360_remark_e
 * @property string $mir360_company
 * @property string $mir360_company_e
 * @property string $mir360_zy
 */
class MirIvd extends \backend\models\MirBase
{
    public $classify = ['1'=>'品牌力量','2'=>'主题专访','3'=>'临床在线','4'=>'专家专栏'];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mir_360';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mir360_rank'], 'integer'],
            [['mir360_pic','mir360_pic_m', 'mir360_remark', 'mir360_remark_e'], 'string'],
            [['mir360_date'], 'safe'],
            [['mir360_title', 'mir360_title_e', 'mir360_class', 'mir360_company', 'mir360_company_e', 'mir360_zy'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mir360_id' => Yii::t('app', '编号'),
            'mir360_title' => Yii::t('app', '标题'),
            'mir360_title_e' => Yii::t('app', '英文标题'),
            'mir360_class' => Yii::t('app', '类别'),
            'mir360_pic' => Yii::t('app', '访谈图片'),
            'mir360_pic_m' => Yii::t('app', '访谈小图'),
            'mir360_date' => Yii::t('app', '添加时间'),
            'mir360_rank' => Yii::t('app', '排序'),
            'mir360_remark' => Yii::t('app', 'Mir360 Remark'),
            'mir360_remark_e' => Yii::t('app', 'Mir360 Remark E'),
            'mir360_company' => Yii::t('app', 'Mir360 Company'),
            'mir360_company_e' => Yii::t('app', 'Mir360 Company E'),
            'mir360_zy' => Yii::t('app', '摘要'),
        ];
    }
    public function getIvdlist($type=""){
        if(empty($type)){
            $type = array("1","2","3");
        }
        $list = $this->find()->select("*")->where(["mir360_class"=>$type])->orderBy('mir360_rank desc,mir360_id desc')->limit(5)->all();
        return $list;
    }
}
