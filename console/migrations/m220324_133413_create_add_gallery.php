<?php

use yii\db\Migration;

/**
 * Class m220324_133413_create_add_gallery
 */
class m220324_133413_create_add_gallery extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('gallery','type',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220324_133413_create_add_gallery cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220324_133413_create_add_gallery cannot be reverted.\n";

        return false;
    }
    */
}
