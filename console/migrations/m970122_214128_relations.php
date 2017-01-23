<?php

use yii\db\Migration;

class m970122_214128_relations extends Migration
{
    public function up()
    {

//        topic-section
        $this->createIndex('fk_topic_section_idx', '{{%topic}}', 'section_id');
        $this->addForeignKey('fk_topic_section', '{{%topic}}', 'section_id', '{{%section}}', 'id');

//        video-topic
        $this->createIndex('fk_video_topic_idx', '{{%video}}', 'topic_id');
        $this->addForeignKey('fk_video_topic', '{{%video}}', 'topic_id', '{{%topic}}', 'id');

//       video-images
        $this->createIndex('fk_video_images_idx', '{{%video}}', 'images_id');
        $this->addForeignKey('fk_video_images', '{{%video}}', 'images_id', '{{%images}}', 'id');

//        section-images
        $this->createIndex('fk_section_images_idx', '{{%section}}', 'images_id');
        $this->addForeignKey('fk_section_images', '{{%section}}', 'images_id', '{{%images}}', 'id');

//        subscription-section
        $this->createIndex('fk_subscription_section_idx', '{{%subscription}}', 'section_id');
        $this->addForeignKey('fk_subscription_section', '{{%subscription}}', 'section_id', '{{%section}}', 'id');

//       subscription-user
        $this->createIndex('fk_subscription_user_idx', '{{%subscription}}', 'user_id');
        $this->addForeignKey('fk_subscription_user', '{{%subscription}}', 'user_id', '{{%user}}', 'id');

//        like-video
        $this->createIndex('fk_like_video_idx', '{{%like}}', 'video_id');
        $this->addForeignKey('fk_like_video', '{{%like}}', 'video_id', '{{%video}}', 'id');

//        like-user
        $this->createIndex('fk_like_user_idx', '{{%like}}', 'user_id');
        $this->addForeignKey('fk_like_user', '{{%like}}', 'user_id', '{{%user}}', 'id');

    }

    public function down()
    {
        echo "m970122_214128_relations cannot be reverted.\n";

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
