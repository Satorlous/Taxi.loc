<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Station;

/**
 * StationSearch represents the model behind the search form of `frontend\models\Station`.
 */
class StationSearch extends Station
{
    public $lineName;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'line_id'], 'integer'],
            [['name', 'lineName'], 'safe'],
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
        $query = Station::find()->joinWith(['line']);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['roleName'] = [
            'asc' => [Line::tableName().'.code' => SORT_ASC],
            'desc' => [Line::tableName().'.code' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'line_id' => $this->line_id,
        ]);


        $query
            ->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', Line::tableName().'.code', $this->lineName]);

        return $dataProvider;
    }
}
