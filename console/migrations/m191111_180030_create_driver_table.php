<?php

use \yii\db\Migration;

/**
 * Handles the creation of table `{{%driver}}`.
 */
class m191111_180030_create_driver_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%driver}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(45),
            'birth_date' => $this->date(),
            'email' => $this->string(50),
            'phone' => $this->string(40),
            'avatar' => $this->string(50),
            'vehicle_id' => $this->integer()
        ]);

        $this->addForeignKey(
            'FK_vehicle_id',  // это "условное имя" ключа
            'driver', // это название текущей таблицы
            'vehicle_id', // это имя поля в текущей таблице, которое будет ключом
            'vehicle', // это имя таблицы, с которой хотим связаться
            'id', // это поле таблицы, с которым хотим связаться
            'SET NULL', // что делать при удалении сущности, на которую ссылаемся
            'CASCADE'  // что делать при обновлении сущности, на которую ссылаемся
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%driver}}');
        $this->dropForeignKey('FK_vehicle_id', 'driver');
    }
}
