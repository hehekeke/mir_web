<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MirMeeting;

/**
 * MirMeetingSearch represents the model behind the search form about `backend\models\MirMeeting`.
 */
class MirMeetingSearch extends MirMeeting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meeting_id'], 'integer'],
            [['meeting_class', 'meeting_loc', 'meeting_loc_e', 'meeting_name', 'meeting_name_e', 'meeting_bdate', 'meeting_edate', 'meeting_pic', 'meeting_mem', 'meeting_mem_e', 'meeting_sub', 'meeting_sub_e'], 'safe'],
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
        $query = MirMeeting::find();

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
            'meeting_id' => $this->meeting_id,
            'meeting_bdate' => $this->meeting_bdate,
            'meeting_edate' => $this->meeting_edate,
        ]);

        $query->andFilterWhere(['like', 'meeting_class', $this->meeting_class])
            ->andFilterWhere(['like', 'meeting_loc', $this->meeting_loc])
            ->andFilterWhere(['like', 'meeting_loc_e', $this->meeting_loc_e])
            ->andFilterWhere(['like', 'meeting_name', $this->meeting_name])
            ->andFilterWhere(['like', 'meeting_name_e', $this->meeting_name_e])
            ->andFilterWhere(['like', 'meeting_pic', $this->meeting_pic])
            ->andFilterWhere(['like', 'meeting_mem', $this->meeting_mem])
            ->andFilterWhere(['like', 'meeting_mem_e', $this->meeting_mem_e])
            ->andFilterWhere(['like', 'meeting_sub', $this->meeting_sub])
            ->andFilterWhere(['like', 'meeting_sub_e', $this->meeting_sub_e])
            ->orderBy("meeting_id desc");;

        return $dataProvider;
    }
}
