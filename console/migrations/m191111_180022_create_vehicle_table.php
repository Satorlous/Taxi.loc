<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vehicle}}`.
 */
class m191111_180022_create_vehicle_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vehicle}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30),
            'capacity' => $this->integer(15),
            'type' => $this->string(30),
            'line_id' => $this->integer(),
        ]);

        $this->addForeignKey(
            'FK_line_id_vehicle',  // это "условное имя" ключа
            'vehicle', // это название текущей таблицы
            'line_id', // это имя поля в текущей таблице, которое будет ключом
            'line', // это имя таблицы, с которой хотим связаться
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
        $this->dropTable('{{%vehicle}}');
        $this->dropForeignKey('FK_line_id_vehicle', 'vehicle');
    }
}
