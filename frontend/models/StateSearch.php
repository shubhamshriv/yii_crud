<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RmsStates;

/**
 * StateSearch represents the model behind the search form of `app\models\RmsStates`.
 */
class StateSearch extends RmsStates
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rms_state_id', 'State_added_by'], 'integer'],
            [['rms_state_name', 'rms_createdate', 'state_status'], 'safe'],
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
        $query = RmsStates::find();

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
            'rms_state_id' => $this->rms_state_id,
            'rms_createdate' => $this->rms_createdate,
            'State_added_by' => $this->State_added_by,
        ]);

        $query->andFilterWhere(['like', 'rms_state_name', $this->rms_state_name])
            ->andFilterWhere(['like', 'state_status', $this->state_status]);

        return $dataProvider;
    }
}
