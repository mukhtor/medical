<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%register}}`.
 */
class m220315_112634_create_register_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%register}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%register}}');
    }
}
