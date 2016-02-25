<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MirProduct;

/**
 * MirProductSearch represents the model behind the search form about `backend\models\MirProduct`.
 */
class MirProductSearch extends MirProduct
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'product_disp','product_rank'], 'integer'],
            [['product_name', 'product_name_e', 'product_date', 'product_class', 'product_place', 'product_place_e', 'product_standards', 'product_standards_e', 'product_model', 'product_model_e', 'product_performance', 'product_performance_e', 'product_parameter', 'product_parameter_e', 'product_contrast', 'product_contrast_e', 'product_appraise', 'product_appraise_e', 'product_pic', 'product_mainclass', 'product_brand', 'product_tui', 'product_maker'], 'safe'],
            [['product_price'], 'number'],
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
        /**
         *  根据参数选择展示的商品
         *  @var dis=>1 不现实的 0=>显示的 
         */
        $display = Yii::$app->request->get('dis');

        $map = ['product_disp'=>$display];

        $query = MirProduct::find()->where($map);

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
            'product_id' => $this->product_id,
            'product_price' => $this->product_price,
            'product_disp' => $this->product_disp,
            'product_rank' => $this->product_rank,
        ]);

        $query->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'product_name_e', $this->product_name_e])
            ->andFilterWhere(['like', 'product_date', $this->product_date])
            ->andFilterWhere(['like', 'product_class', $this->product_class])
            ->andFilterWhere(['like', 'product_place', $this->product_place])
            ->andFilterWhere(['like', 'product_place_e', $this->product_place_e])
            ->andFilterWhere(['like', 'product_standards', $this->product_standards])
            ->andFilterWhere(['like', 'product_standards_e', $this->product_standards_e])
            ->andFilterWhere(['like', 'product_model', $this->product_model])
            ->andFilterWhere(['like', 'product_model_e', $this->product_model_e])
            ->andFilterWhere(['like', 'product_performance', $this->product_performance])
            ->andFilterWhere(['like', 'product_performance_e', $this->product_performance_e])
            ->andFilterWhere(['like', 'product_parameter', $this->product_parameter])
            ->andFilterWhere(['like', 'product_parameter_e', $this->product_parameter_e])
            ->andFilterWhere(['like', 'product_contrast', $this->product_contrast])
            ->andFilterWhere(['like', 'product_contrast_e', $this->product_contrast_e])
            ->andFilterWhere(['like', 'product_appraise', $this->product_appraise])
            ->andFilterWhere(['like', 'product_appraise_e', $this->product_appraise_e])
            ->andFilterWhere(['like', 'product_pic', $this->product_pic])
            ->andFilterWhere(['like', 'product_mainclass', $this->product_mainclass])
            ->andFilterWhere(['like', 'product_brand', $this->product_brand])
            ->andFilterWhere(['like', 'product_tui', $this->product_tui])
            ->andFilterWhere(['in', 'product_maker', $this->product_maker]);

        return $dataProvider;
    }
}
