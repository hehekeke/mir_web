<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MirAd;

/**
 * MirAdSearch represents the model behind the search form about `\backend\models\MirAd`.
 */
class MirAdSearch extends MirAd
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ad_rank'], 'integer'],
            [['ad_picture', 'ad_desc', 'ad_url'], 'safe'],
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
        $query = MirAd::find();

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
            'id' => $this->id,
            'ad_rank' => $this->ad_rank,
        ]);

        $query->andFilterWhere(['like', 'ad_picture', $this->ad_picture])
            ->andFilterWhere(['like', 'ad_desc', $this->ad_desc])
            ->andFilterWhere(['like', 'ad_url', $this->ad_url])
            ->orderby('id desc');

        return $dataProvider;
    }
}
