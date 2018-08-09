<?php

use yii\db\Migration;

/**
 * Handles the creation of table `recipes_category`.
 */
class m180809_145525_create_recipes_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('recipes_category', [
            'id' => $this->primaryKey()->comment("ID записи"),
            'name' => $this->string(255)->comment("Название категории")->notNull(),
            'description' => $this->text()->comment("Описание категории"),
            'image' => $this->text()->comment("Путь к фотографии"),
        ],'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('recipes_category');
    }
}
