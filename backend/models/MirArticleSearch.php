<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MirArticle;

/**
 * MirArticleSearch represents the model behind the search form about `\backend\models\MirArticle`.
 */
class MirArticleSearch extends MirArticle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'article_istop','article_rank'], 'integer'],
            [['article_title', 'article_source','article_titile_e', 'article_class', 'article_date', 'article_contents', 'article_contents_e', 'article_makerid', 'article_pic', 'article_zy'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MirArticle::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'article_id' => $this->article_id,
            'article_date' => $this->article_date,
            'article_istop' => $this->article_istop,
            'article_rank' => $this->article_rank,
        ]);

        $query->andFilterWhere(['like', 'article_title', $this->article_title])
            ->andFilterWhere(['like', 'article_titile_e', $this->article_titile_e])
            ->andFilterWhere(['like', 'article_class', $this->article_class])
            ->andFilterWhere(['like', 'article_contents', $this->article_contents])
            ->andFilterWhere(['like', 'article_contents_e', $this->article_contents_e])
            ->andFilterWhere(['like', 'article_makerid', $this->article_makerid])
            ->andFilterWhere(['like', 'article_pic', $this->article_pic])
            ->andFilterWhere(['like', 'article_zy', $this->article_zy])
            ->andFilterWhere(['like', 'article_source', $this->article_source])
            ->orderBy("article_id desc");

        return $dataProvider;
    }
}
