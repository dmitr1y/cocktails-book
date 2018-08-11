<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "recipes".
 *
 * @property int $id ID рецепта
 * @property string $name Название рецепта
 * @property string $description Описание рецепта
 * @property string $category Категории рецепта
 * @property string $date Дата создания рецепта
 * @property double $coast Стоимость выполнения рецепта
 * @property double $complexity Сложность выполнения рецепта
 * @property string $steps Шаги рецепта
 * @property int $author ID автора рецепта
 * @property double $calories Каллорийность рецепта
 * @property double $proteins Количество белков в рецепте
 * @property double $fats Количество жиров в рецепте
 * @property double $carbohydrates Количество углеводов в рецепте
 * @property string $ingredients Список необходимых ингредиентов
 * @property string $instruments Список необходимых инструментов
 */
class Recipes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recipes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description', 'category', 'steps', 'ingredients', 'instruments'], 'string'],
            [['date'], 'safe'],
            [['coast', 'complexity', 'calories', 'proteins', 'fats', 'carbohydrates'], 'number'],
            [['author'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID рецепта',
            'name' => 'Название рецепта',
            'description' => 'Описание рецепта',
            'category' => 'Категории рецепта',
            'date' => 'Дата создания рецепта',
            'coast' => 'Стоимость выполнения рецепта',
            'complexity' => 'Сложность выполнения рецепта',
            'steps' => 'Шаги рецепта',
            'author' => 'ID автора рецепта',
            'calories' => 'Каллорийность рецепта',
            'proteins' => 'Количество белков в рецепте',
            'fats' => 'Количество жиров в рецепте',
            'carbohydrates' => 'Количество углеводов в рецепте',
            'ingredients' => 'Список необходимых ингредиентов',
            'instruments' => 'Список необходимых инструментов',
        ];
    }

    /**
     * {@inheritdoc}
     * @return RecipesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RecipesQuery(get_called_class());
    }
}
