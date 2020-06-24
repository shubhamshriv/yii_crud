<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RmsDistrict;

/**
 * DistrictSearch represents the model behind the search form of `app\models\RmsDistrict`.
 */
class DistrictSearch extends RmsDistrict
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['district_id', 'state_id', 'district_added_by'], 'integer'],
            [['district_name', 'district_status', 'created_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = RmsDistrict::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'district_id' => $this->district_id,
            'state_id' => $this->state_id,
            'district_added_by' => $this->district_added_by,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'district_name', $this->district_name])
            ->andFilterWhere(['like', 'district_status', $this->district_status]);

        return $dataProvider;
    }
}
