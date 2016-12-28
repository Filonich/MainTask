<?php

use yii\db\Migration;

class m161226_114120_images extends Migration
{
    public function up()
    {
        $this->createTable('image', [
            'name'=>$this->string()->unique()->notNull(),
            'path'=>$this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('images');

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
