<?php

use yii\db\Migration;

/**
 * Class m191112_154246_remove_position_station_column_from_station_table
 */
class m191112_154246_remove_position_station_column_from_station_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%station}}', 'position_station');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%station}}', 'position_station', $this->string(15));
    }

}
