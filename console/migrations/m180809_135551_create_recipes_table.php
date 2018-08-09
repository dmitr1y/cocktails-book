<?php

use yii\db\Migration;

/**
 * Handles the creation of table `recipes`.
 */
class m180809_135551_create_recipes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('recipes', [
            'id' => $this->primaryKey()->comment("ID рецепта"),
            'name' => $this->string(255)->comment("Название рецепта")->notNull(),
            'description' => $this->text()->comment("Описание рецепта"),
            'category' => $this->text()->comment("Категории рецепта"),
            'date' => $this->dateTime()->comment("Дата создания рецепта"),
            'coast' => $this->float()->comment("Стоимость выполнения рецепта")->defaultValue('0.00'),
            'complexity' => $this->float()->comment("Сложность выполнения рецепта")->defaultValue('0.00'),
            'steps' => $this->text()->comment("Шаги рецепта"),
            'author' => $this->integer()->comment("ID автора рецепта"),
            'calories' => $this->float()->comment("Каллорийность рецепта")->defaultValue('0.00'),
            'proteins' => $this->float()->comment("Количество белков в рецепте")->defaultValue('0.00'),
            'fats' => $this->float()->comment("Количество жиров в рецепте")->defaultValue('0.00'),
            'carbohydrates' => $this->float()->comment("Количество углеводов в рецепте")->defaultValue('0.00'),
            'ingredients' => $this->text()->comment("Список необходимых ингредиентов"),
            'instruments' => $this->text()->comment("Список необходимых инструментов"),
        ],'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('recipes');
    }
}
