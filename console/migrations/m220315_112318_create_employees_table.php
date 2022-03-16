<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employees}}`.
 */
class m220315_112318_create_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employees}}', [
            'id' => $this->primaryKey(),
            'fullname_uz'=> $this->string(255),
            'fullname_en'=> $this->string(255),
            'fullname_ru'=> $this->string(255),
            'section_id' => $this->integer(),
            'position_id' => $this->integer(),
            'phone_1'=>$this->string(200),
            'phone_2'=>$this->string(200),
            'email'=>$this->string(255),
            'data_birth'=>$this->date(),
            'address_birth'=>$this->string(255),
            'completed_institution' => $this->string(255),
            'spec'=>$this->string(255),
            'degree'=>$this->string(255),
            'image' => $this->string(200),
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
        $this->dropTable('{{%employees}}');
    }
}
