<?php

use yii\db\Migration;

class m161226_121334_like extends Migration
{
    public function up()
    {
        $this->createTable('topic', [
            'user_id'=>$this->integer(),
            'video_id'=>$this->integer(),
        ]);
    }

    public function down()
    {
        echo "m161226_121334_like cannot be reverted.\n";

        return false;
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
