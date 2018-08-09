<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ingredients_category`.
 */
class m180809_145815_create_ingredients_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ingredients_category', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->comment("Название категории")->notNull(),
            'description' => $this->text()->comment("Описание категории"),
            'image' => $this->text()->comment("Путь к изображению"),
        ],'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ingredients_category');
    }
}
