<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FriendLink;

/**
 * FriendLinkSearch represents the model behind the search form about `backend\models\FriendLink`.
 */
class FriendLinkSearch extends FriendLink
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Link_id', 'Link_state'], 'integer'],
            [['Link_url', 'Link_name', 'Link_imgurl', 'Link_info', 'Link_addtime'], 'safe'],
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
        $query = FriendLink::find();

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
            'Link_id' => $this->Link_id,
            'Link_state' => $this->Link_state,
            'Link_addtime' => $this->Link_addtime,
        ]);

        $query->andFilterWhere(['like', 'Link_url', $this->Link_url])
            ->andFilterWhere(['like', 'Link_name', $this->Link_name])
            ->andFilterWhere(['like', 'Link_imgurl', $this->Link_imgurl])
            ->andFilterWhere(['like', 'Link_info', $this->Link_info])
            ->orderBy("Link_id desc");

        return $dataProvider;
    }
}
