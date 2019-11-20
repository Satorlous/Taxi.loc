<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;
use yii\web\UploadedFile;

/**
 * Signup form
 */

class DriverForm extends Model
{
    public $name;
    public $birth_date;
    public $email;
    public $avatar;
    public $phone;
    public $vehicle_id;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'birth_date', 'email', 'avatar', 'phone', 'vehicle_id'], 'required']
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function saveform()
    {
        if (!$this->validate()) {
            return null;
        }

        $driver = new Driver();
        $driver->name = $this->name;
        $driver->birth_date = $this->birth_date;
        $driver->email = $this->email;
        $driver->phone = $this->phone;
        $driver->vehicle_id = $this->vehicle_id;
        $driver->avatar = $this->avatar;
        return $driver->save();
    }

    public function upload()
    {
        $this->avatar->saveAs("uploads/{$this->avatar->baseName}.{$this->avatar->extension}");
    }
}
