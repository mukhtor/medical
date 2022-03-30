<?php

use yii\db\Migration;

/**
 * Class m220330_141817_create_add_user
 */
class m220330_141817_create_add_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user','role',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220330_141817_create_add_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220330_141817_create_add_user cannot be reverted.\n";

        return false;
    }
    */
}
