<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vehicle".
 *
 * @property int $id
 * @property string $name
 * @property int $capacity
 * @property string $type
 * @property int $line_id
 *
 * @property Driver[] $drivers
 * @property Line $line
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehicle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['capacity', 'line_id'], 'default', 'value' => null],
            [['capacity', 'line_id'], 'integer'],
            [['name', 'type'], 'string', 'max' => 30],
            [['line_id'], 'exist', 'skipOnError' => true, 'targetClass' => Line::className(), 'targetAttribute' => ['line_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'capacity' => 'Capacity',
            'type' => 'Type',
            'line_id' => 'Line ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrivers()
    {
        return $this->hasMany(Driver::className(), ['vehicle_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLine()
    {
        return $this->hasOne(Line::className(), ['id' => 'line_id']);
    }
}
