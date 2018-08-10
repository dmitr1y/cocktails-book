<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingredients".
 *
 * @property int $id
 * @property string $name Название ингредиента
 * @property string $description Описание ингредиента
 * @property double $coast Цена ингредиента
 * @property string $url Ссылка на магазин с ингредиентом
 * @property string $image Путь к изображению
 * @property double $calories Каллорийность ингредиента
 * @property double $proteins Количество белков в ингредиенте
 * @property double $fats Количество жиров в ингредиенте
 * @property double $carbohydrates Количество углеводов в ингредиенте
 * @property string $unit Единица измерения количества ингредиента
 * @property string $category Категории ингредиента
 */
class Ingredients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingredients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'description', 'url', 'image', 'category'], 'string'],
            [['coast', 'calories', 'proteins', 'fats', 'carbohydrates'], 'number'],
            [['unit'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название ингредиента',
            'description' => 'Описание ингредиента',
            'coast' => 'Цена ингредиента',
            'url' => 'Ссылка на магазин с ингредиентом',
            'image' => 'Путь к изображению',
            'calories' => 'Каллорийность ингредиента',
            'proteins' => 'Количество белков в ингредиенте',
            'fats' => 'Количество жиров в ингредиенте',
            'carbohydrates' => 'Количество углеводов в ингредиенте',
            'unit' => 'Единица измерения количества ингредиента',
            'category' => 'Категории ингредиента',
        ];
    }

    /**
     * {@inheritdoc}
     * @return IngredientsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new IngredientsQuery(get_called_class());
    }
}
