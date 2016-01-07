<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mir_article".
 *
 * @property integer $article_id
 * @property string $article_title
 * @property string $article_titile_e
 * @property string $article_class
 * @property string $article_date
 * @property string $article_contents
 * @property string $article_contents_e
 * @property integer $article_istop
 * @property string $article_makerid
 * @property string $article_pic
 * @property string $article_zy
 */
class MirArticle extends \backend\models\MirBase
{
    public $classify = ['0'=>'新闻中心','1'=>'展会报道','2'=>'展会报道','3'=>'技术分享','4'=>'产品应用','5'=>'人才招聘'];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mir_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id'], 'required'],
            [['article_id', 'article_istop'], 'integer'],
            [['article_date'], 'safe'],
            [['article_contents', 'article_contents_e'], 'string'],
            [['article_title', 'article_titile_e', 'article_class', 'article_makerid', 'article_pic', 'article_zy'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => Yii::t('app', 'ID'),
            'article_title' => Yii::t('app', '文章标题'),
            'article_titile_e' => Yii::t('app', '英文标题'),
            'article_class' => Yii::t('app', '文章类别'),
            'article_date' => Yii::t('app', '发布日期'),
            'article_contents' => Yii::t('app', '文章内容'),
            'article_contents_e' => Yii::t('app', '文章内容英文'),
            'article_istop' => Yii::t('app', '是否置顶'),
            'article_makerid' => Yii::t('app', '所属厂商编号'),
            'article_pic' => Yii::t('app', '新闻封面'),
            'article_zy' => Yii::t('app', '新闻摘要'),
        ];
    }
}
