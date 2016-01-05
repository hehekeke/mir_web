<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MirUser;

/**
 * MirUserSearch represents the model behind the search form about `\backend\models\MirUser`.
 */
class MirUserSearch extends MirUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_chk'], 'integer'],
            [['user_name', 'user_pwd', 'user_class', 'user_tel', 'user_email', 'user_date', 'user_place', 'user_xm', 'user_com'], 'safe'],
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
        $query = MirUser::find();

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
            'user_id' => $this->user_id,
            'user_chk' => $this->user_chk,
            'user_date' => $this->user_date,
        ]);

        $query->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'user_pwd', $this->user_pwd])
            ->andFilterWhere(['like', 'user_class', $this->user_class])
            ->andFilterWhere(['like', 'user_tel', $this->user_tel])
            ->andFilterWhere(['like', 'user_email', $this->user_email])
            ->andFilterWhere(['like', 'user_place', $this->user_place])
            ->andFilterWhere(['like', 'user_xm', $this->user_xm])
            ->andFilterWhere(['like', 'user_com', $this->user_com]);

        return $dataProvider;
    }
}
