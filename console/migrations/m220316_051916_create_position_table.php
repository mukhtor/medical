<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%position}}`.
 */
class m220316_051916_create_position_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%position}}', [
            'id' => $this->primaryKey(),
            'name_uz'=>$this->string(200),
            'name_en'=>$this->string(200),
            'name_ru'=>$this->string(200),
            'status'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%position}}');
    }
}
