<?php

use yii\db\Migration;

class m161226_114110_video extends Migration
{
    public function up()
    {
        $this->createTable('video', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull()->unique(),
            'path'=>$this->string(),
            'description'=>$this->string()->notNull(),
            'topic_id'=>$this->integer()->notNull()->unique(),
            'video_id'=>$this->string()->notNull()->unique(),
            'created_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('video');
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
