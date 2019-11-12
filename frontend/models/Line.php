<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "line".
 *
 * @property int $id
 * @property string $code
 * @property string $start_time_operation
 * @property string $end_time_operation
 * @property string $type
 * @property string $map
 *
 * @property Station[] $stations
 * @property Vehicle[] $vehicles
 */
class Line extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'line';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['start_time_operation', 'end_time_operation'], 'safe'],
            [['code', 'map'], 'string', 'max' => 50],
            [['type'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'start_time_operation' => 'Start Time Operation',
            'end_time_operation' => 'End Time Operation',
            'type' => 'Type',
            'map' => 'Map',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStations()
    {
        return $this->hasMany(Station::class, ['line_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::class, ['line_id' => 'id']);
    }
}
