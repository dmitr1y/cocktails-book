<?php

use yii\db\Migration;

/**
 * Handles the creation of table `instruments`.
 */
class m180809_145757_create_instruments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('instruments', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->comment("Название инструмента")->notNull(),
            'description' => $this->text()->comment("Описание инструмента"),
            'coast' => $this->float()->comment("Цена инструмента")->defaultValue('0.00'),
            'url' => $this->text()->comment("Ссылка на магазин с инструментом"),
            'image' => $this->text()->comment("Путь к изображению"),
            'category' => $this->text()->comment("Категории инструмента"),
        ],'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('instruments');
    }
}
