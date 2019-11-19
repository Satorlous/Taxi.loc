<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "station".
 *
 * @property int $id
 * @property string $name
 * @property int $line_id
 *
 * @property Line $line
 */
class Station extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'station';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['line_id'], 'default', 'value' => null],
            [['line_id'], 'integer'],
            [['name'], 'string', 'max' => 80],
            [['line_id'], 'exist', 'skipOnError' => true, 'targetClass' => Line::class, 'targetAttribute' => ['line_id' => 'id']],
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
            'line_id' => 'Line ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLine()
    {
        return $this->hasOne(Line::class, ['id' => 'line_id']);
    }
}
