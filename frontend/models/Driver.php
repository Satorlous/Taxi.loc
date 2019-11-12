<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property int $id
 * @property string $name
 * @property string $birth_date
 * @property string $email
 * @property string $phone
 * @property string $avatar
 * @property int $vehicle_id
 *
 * @property Vehicle $vehicle
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birth_date'], 'safe'],
            [['vehicle_id'], 'default', 'value' => null],
            [['vehicle_id'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['email', 'avatar'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 40],
            [['vehicle_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vehicle::className(), 'targetAttribute' => ['vehicle_id' => 'id']],
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
            'birth_date' => 'Birth Date',
            'email' => 'Email',
            'phone' => 'Phone',
            'avatar' => 'Avatar',
            'vehicle_id' => 'Vehicle ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::className(), ['id' => 'vehicle_id']);
    }
}
