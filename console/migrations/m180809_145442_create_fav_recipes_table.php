<?php

use yii\db\Migration;

/**
 * Handles the creation of table `fav_recipes`.
 */
class m180809_145442_create_fav_recipes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('fav_recipes', [
            'id' => $this->primaryKey()->comment("ID записи"),
            'name' => $this->string(255)->comment("Название закладки")->notNull(),
            'description' => $this->text()->comment("Описание закладки"),
            'recipes' => $this->text()->comment("ID рецептов"),
            'author' => $this->integer()->comment("ID автора закладки")->notNull(),
        ],'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('fav_recipes');
    }
}
