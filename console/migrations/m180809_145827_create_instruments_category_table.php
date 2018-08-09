<?php

use yii\db\Migration;

/**
 * Handles the creation of table `instruments_category`.
 */
class m180809_145827_create_instruments_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('instruments_category', [
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
        $this->dropTable('instruments_category');
    }
}
