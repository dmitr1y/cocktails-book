<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ingredients`.
 */
class m180809_145740_create_ingredients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ingredients', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->comment("Название ингредиента")->notNull(),
            'description' => $this->text()->comment("Описание ингредиента"),
            'coast' => $this->float()->comment("Цена ингредиента")->defaultValue('0.00'),
            'url' => $this->text()->comment("Ссылка на магазин с ингредиентом"),
            'image' => $this->text()->comment("Путь к изображению"),
            'calories' => $this->float()->comment("Каллорийность ингредиента")->defaultValue('0.00'),
            'proteins' => $this->float()->comment("Количество белков в ингредиенте")->defaultValue('0.00'),
            'fats' => $this->float()->comment("Количество жиров в ингредиенте")->defaultValue('0.00'),
            'carbohydrates' => $this->float()->comment("Количество углеводов в ингредиенте")->defaultValue('0.00'),
            'unit' => $this->string("50")->comment("Единица измерения количества ингредиента")->notNull()->defaultValue("шт."),
            'category' => $this->text()->comment("Категории ингредиента"),
        ],'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ingredients');
    }
}
