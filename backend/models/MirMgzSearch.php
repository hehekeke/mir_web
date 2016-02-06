<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MirMgz;

/**
 * MirMgzSearch represents the model behind the search form about `backend\models\MirMgz`.
 */
class MirMgzSearch extends MirMgz
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mgz_id', 'mgz_page', 'mgz_year', 'mgz_num', 'mgz_isfirst', 'mgz_znum'], 'integer'],
            [['mgz_pic'], 'safe'],
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
        $query = MirMgz::find();

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
            'mgz_id' => $this->mgz_id,
            'mgz_page' => $this->mgz_page,
            'mgz_year' => $this->mgz_year,
            'mgz_num' => $this->mgz_num,
            'mgz_isfirst' => $this->mgz_isfirst,
            'mgz_znum' => $this->mgz_znum,
        ]);

        $query->andFilterWhere(['like', 'mgz_pic', $this->mgz_pic])
              ->orderBy("mgz_id desc");

        return $dataProvider;
    }
}
