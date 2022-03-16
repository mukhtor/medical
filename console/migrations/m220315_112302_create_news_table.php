<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m220315_112302_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title_uz' => $this->string(255),
            'title_ru' => $this->string(255),
            'title_en' => $this->string(255),
            'text_uz'=>$this->text(),
            'text_ru'=>$this->text(),
            'text_en'=>$this->text(),
            'image' => $this->string(250),
            'author' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'show_count' => $this->integer()->defaultValue(null),
            'status' => $this->integer(),
            'cate_id' => $this->json(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
