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
            'section_id' =>$this->integer(),
            'employee_id' => $this->integer(),
            'fullname'=>$this->string(255),
            'phone'=>$this->string(100),
            'email'=>$this->string(200),
            'date' => $this->integer(),
            'information'=>$this->text(),
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
        $this->dropTable('{{%register}}');
    }
}
