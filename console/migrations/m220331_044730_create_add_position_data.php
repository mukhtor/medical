<?php

use yii\db\Migration;

/**
 * Class m220331_044730_create_add_position_data
 */
class m220331_044730_create_add_position_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('position','type',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220331_044730_create_add_position_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220331_044730_create_add_position_data cannot be reverted.\n";

        return false;
    }
    */
}
