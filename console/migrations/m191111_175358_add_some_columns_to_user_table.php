<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m191111_175358_add_some_columns_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'gender', $this->char(2));
        $this->addColumn('user', 'birth_date', $this->date());
        $this->addColumn('user', 'admin', $this->boolean()->defaultValue(false));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'gender');
        $this->dropColumn('user', 'birth_date');
        $this->dropColumn('user', 'admin');
    }
}
