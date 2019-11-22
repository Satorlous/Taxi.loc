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
 * @property int $vehicle_id
 * @property string $avatar
 * @property Vehicle $vehicle
 */
class Driver extends \yii\db\ActiveRecord
{
    public $avatarFile;

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
            [['avatar'], 'string'],
            [['avatarFile'], 'file'],
            [['name'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 40],
            [['vehicle_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vehicle::class, 'targetAttribute' => ['vehicle_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'birth_date' => 'Дата рождения',
            'email' => 'E-Mail',
            'phone' => 'Телефон',
            'avatar' => 'Аватара',
            'vehicle_id' => 'ТС',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::class, ['id' => 'vehicle_id']);
    }

    public function upload()
    {
        $this->avatarFile->saveAs("uploads/{$this->avatarFile->baseName}.{$this->avatarFile->extension}");
    }
}
