<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%statistics}}`.
 */
class m220315_112431_create_statistics_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%statistics}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%statistics}}');
    }
}
