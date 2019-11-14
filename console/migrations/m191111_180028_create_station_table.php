<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%station}}`.
 */
class m191111_180028_create_station_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%station}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80),
            'position_station' => $this->string(15),
            'line_id' => $this->integer(),
        ]);

        $this->addForeignKey(
            'FK_line_id_station',  // это "условное имя" ключа
            'station', // это название текущей таблицы
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
        $this->dropTable('{{%station}}');
        $this->dropForeignKey('FK_line_id_station', 'driver');
    }
}
