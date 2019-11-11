<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%line}}`.
 */
class m191111_180038_create_line_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%line}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(50),
            'start_time_operation' => $this->time(),
            'end_time_operation' => $this->time(),
            'type' => $this->string(30),
            'map' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%line}}');
    }
}
