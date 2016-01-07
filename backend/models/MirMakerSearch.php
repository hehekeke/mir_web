<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MirMaker;

/**
 * MirMakerSearch represents the model behind the search form about `backend\models\MirMaker`.
 */
class MirMakerSearch extends MirMaker
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['maker_id', 'maker_disp'], 'integer'],
            [['maker_name', 'maker_name_e', 'maker_info', 'maker_info_e', 'maker_character', 'maker_character_e', 'maker_place', 'maker_place_e', 'maker_proclass', 'maker_date', 'maker_class', 'maker_contact', 'maker_contact_e'], 'safe'],
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
        $query = MirMaker::find();

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
            'maker_id' => $this->maker_id,
            'maker_date' => $this->maker_date,
            'maker_disp' => $this->maker_disp,
        ]);

        $query->andFilterWhere(['like', 'maker_name', $this->maker_name])
            ->andFilterWhere(['like', 'maker_name_e', $this->maker_name_e])
            ->andFilterWhere(['like', 'maker_info', $this->maker_info])
            ->andFilterWhere(['like', 'maker_info_e', $this->maker_info_e])
            ->andFilterWhere(['like', 'maker_character', $this->maker_character])
            ->andFilterWhere(['like', 'maker_character_e', $this->maker_character_e])
            ->andFilterWhere(['like', 'maker_place', $this->maker_place])
            ->andFilterWhere(['like', 'maker_place_e', $this->maker_place_e])
            ->andFilterWhere(['like', 'maker_proclass', $this->maker_proclass])
            ->andFilterWhere(['like', 'maker_class', $this->maker_class])
            ->andFilterWhere(['like', 'maker_contact', $this->maker_contact])
            ->andFilterWhere(['like', 'maker_contact_e', $this->maker_contact_e]);

        return $dataProvider;
    }
}
