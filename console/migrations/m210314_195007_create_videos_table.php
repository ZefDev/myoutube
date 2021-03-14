<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%videos}}`.
 */
class m210314_195007_create_videos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%videos}}', [
            'video_id' => $this->string(16)->notNull(),
            'title' => $this->string(512)->notNull(),
            'description' => $this->text(),
            'tags' => $this->string(512),
            'status' => $this->integer(1),
            'has_thumbnail' => $this->boolean(),
            'video_name' => $this->string(512),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->integer(11),
        ]);
        $this->addPrimaryKey('PK_videos_video_id','{{%videos}}','video_id');
    }

         /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%videos}}');
    }
}
