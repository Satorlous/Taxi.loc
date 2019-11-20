<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Vehicle;

/**
 * VehicleSearch represents the model behind the search form of `frontend\models\Vehicle`.
 */
class VehicleSearch extends Vehicle
{
    public $lineName;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'capacity', 'line_id'], 'integer'],
            [['name', 'type', 'lineName'], 'safe'],
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
        $query = Vehicle::find()->joinWith(['line']);;

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['lineName'] = [
            'asc' => [Line::tableName().'.code' => SORT_ASC],
            'desc' => [Line::tableName().'.code' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'capacity' => $this->capacity,
            'line_id' => $this->lineName,
        ]);

        $query->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'type', $this->type])
            ->andFilterWhere(['ilike', Line::tableName().'.code', $this->lineName]);

        return $dataProvider;
    }
}
