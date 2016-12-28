<?php

use yii\db\Migration;

class m961226_114817_subscription extends Migration
{
    public function up()
    {
        $this->createTable('topic', [
            'user_id'=>$this->integer()->notNull(),
            'section_id'=>$this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('subscription');
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
