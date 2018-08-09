<?php

use yii\db\Migration;

/**
 * Handles the creation of table `steps_comments`.
 */
class m180809_145703_create_steps_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('steps_comments', [
            'id' => $this->primaryKey()->comment("ID записи"),
            'author' => $this->integer()->comment("ID автора")->notNull(),
            'description' => $this->text()->comment("Содержание комментария"),
            'date' => $this->dateTime()->comment("Дата создания комментария"),
        ],'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('steps_comments');
    }
}
