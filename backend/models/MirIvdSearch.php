<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MirIvd;

/**
 * MirIvdSearch represents the model behind the search form about `backend\models\MirIvd`.
 */
class MirIvdSearch extends MirIvd
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mir360_id'], 'integer'],
            [['mir360_title', 'mir360_title_e', 'mir360_class', 'mir360_pic', 'mir360_date', 'mir360_remark', 'mir360_remark_e', 'mir360_company', 'mir360_company_e', 'mir360_zy'], 'safe'],
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
        $query = MirIvd::find();

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
            'mir360_id' => $this->mir360_id,
            'mir360_date' => $this->mir360_date,
        ]);

        $query->andFilterWhere(['like', 'mir360_title', $this->mir360_title])
            ->andFilterWhere(['like', 'mir360_title_e', $this->mir360_title_e])
            ->andFilterWhere(['like', 'mir360_class', $this->mir360_class])
            ->andFilterWhere(['like', 'mir360_pic', $this->mir360_pic])
            ->andFilterWhere(['like', 'mir360_remark', $this->mir360_remark])
            ->andFilterWhere(['like', 'mir360_remark_e', $this->mir360_remark_e])
            ->andFilterWhere(['like', 'mir360_company', $this->mir360_company])
            ->andFilterWhere(['like', 'mir360_company_e', $this->mir360_company_e])
            ->andFilterWhere(['like', 'mir360_zy', $this->mir360_zy]);

        return $dataProvider;
    }
}
