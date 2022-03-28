<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%events}}`.
 */
class m220328_053537_create_events_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%events}}', [
            'id' => $this->primaryKey(),
            'image'=>$this->string(255),
            'title_uz'=>$this->string(200),
            'title_en'=>$this->string(200),
            'title_ru'=>$this->string(200),
            'text_uz'=>$this->text(),
            'text_en'=>$this->text(),
            'text_ru'=>$this->text(),
            'count'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%events}}');
    }
}
