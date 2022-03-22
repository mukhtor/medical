<?php

use yii\db\Migration;

/**
 * Class m220322_192256_create_add_employee
 */
class m220322_192256_create_add_employee extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('employees','activity',$this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220322_192256_create_add_employee cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220322_192256_create_add_employee cannot be reverted.\n";

        return false;
    }
    */
}
