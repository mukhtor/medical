<?php

use yii\db\Migration;

/**
 * Class m220328_134925_create_add_position
 */
class m220328_134925_create_add_position extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('position','degree',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220328_134925_create_add_position cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220328_134925_create_add_position cannot be reverted.\n";

        return false;
    }
    */
}
