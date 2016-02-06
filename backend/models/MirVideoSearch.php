<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MirVideo;

/**
 * MirVideoSearch represents the model behind the search form about `backend\models\MirVideo`.
 */
class MirVideoSearch extends MirVideo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['video_id'], 'integer'],
            [['video_title', 'video_title_e', 'video_filename', 'video_mem', 'video_mem_e', 'video_size', 'video_class', 'video_date'], 'safe'],
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
        $query = MirVideo::find();

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
            'video_id' => $this->video_id,
        ]);

        $query->andFilterWhere(['like', 'video_title', $this->video_title])
            ->andFilterWhere(['like', 'video_title_e', $this->video_title_e])
            ->andFilterWhere(['like', 'video_filename', $this->video_filename])
            ->andFilterWhere(['like', 'video_mem', $this->video_mem])
            ->andFilterWhere(['like', 'video_mem_e', $this->video_mem_e])
            ->andFilterWhere(['like', 'video_size', $this->video_size])
            ->andFilterWhere(['like', 'video_class', $this->video_class])
            ->andFilterWhere(['like', 'video_date', $this->video_date]);

        return $dataProvider;
    }
}
