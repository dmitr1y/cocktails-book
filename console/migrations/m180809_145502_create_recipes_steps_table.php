<?php

use yii\db\Migration;

/**
 * Handles the creation of table `recipes_steps`.
 */
class m180809_145502_create_recipes_steps_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('recipes_steps', [
            'id' => $this->primaryKey()->comment("ID записи"),
            'comment' => $this->integer()->comment("ID комментария"),
            'description' => $this->text()->comment("Описание шага"),
            'actions' => $this->text()->comment("ID действий шага"),
        ],'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('recipes_steps');
    }
}
