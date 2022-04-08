<?php

use yii\db\Migration;

/**
 * Class m220407_173845_create_add_user
 */
class m220407_173845_create_add_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user','employee_id',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220407_173845_create_add_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220407_173845_create_add_user cannot be reverted.\n";

        return false;
    }
    */
}
