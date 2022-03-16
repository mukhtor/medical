<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sections}}`.
 */
class m220315_112329_create_sections_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sections}}', [
            'id' => $this->primaryKey(),
            'name_uz'=>$this->string(255),
            'name_en'=>$this->string(255),
            'name_ru'=>$this->string(255),
            'desc_uz'=>$this->text(),
            'desc_en'=>$this->text(),
            'desc_ru'=>$this->text(),
            'image'=>$this->string(255),
            'status'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sections}}');
    }
}
