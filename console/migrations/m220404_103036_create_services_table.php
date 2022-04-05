<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%services}}`.
 */
class m220404_103036_create_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%services}}', [
            'id' => $this->primaryKey(),
            'section_id'=>$this->integer(),
            'name_uz'=>$this->string(255),
            'name_en'=>$this->string(255),
            'name_ru'=>$this->string(255),
            'uz_measurement'=>$this->string(100),
            'ru_measurement'=>$this->string(100),
            'en_measurement'=>$this->string(100),
            'uz_price'=>$this->string(20),
            'eu_price'=>$this->string(20),
            'date'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%services}}');
    }
}
