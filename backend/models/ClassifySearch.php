<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Classify;

/**
 * ClassifySearch represents the model behind the search form about `backend\models\Classify`.
 */
class ClassifySearch extends Classify
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'ModuleID', 'RootID', 'Depth', 'Orders', 'ParentID', 'Child', 'ShowCount'], 'integer'],
            [['ClassName', 'ClassName_e', 'Readme', 'ParentStr', 'ChildStr'], 'safe'],
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
        $query = Classify::find();

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
            'ID' => $this->ID,
            'ModuleID' => $this->ModuleID,
            'RootID' => $this->RootID,
            'Depth' => $this->Depth,
            'Orders' => $this->Orders,
            'ParentID' => $this->ParentID,
            'Child' => $this->Child,
            'ShowCount' => $this->ShowCount,
        ]);

        $query->andFilterWhere(['like', 'ClassName', $this->ClassName])
            ->andFilterWhere(['like', 'ClassName_e', $this->ClassName_e])
            ->andFilterWhere(['like', 'Readme', $this->Readme])
            ->andFilterWhere(['like', 'ParentStr', $this->ParentStr])
            ->andFilterWhere(['like', 'ChildStr', $this->ChildStr]);

        return $dataProvider;
    }
}
