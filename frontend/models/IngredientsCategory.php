<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingredients_category".
 *
 * @property int $id
 * @property string $name Название категории
 * @property string $description Описание категории
 * @property string $image Путь к изображению
 */
class IngredientsCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingredients_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'description', 'image'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название категории',
            'description' => 'Описание категории',
            'image' => 'Путь к изображению',
        ];
    }

    /**
     * {@inheritdoc}
     * @return IngredientsCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new IngredientsCategoryQuery(get_called_class());
    }
}
