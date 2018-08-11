<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "recipes_category".
 *
 * @property int $id ID записи
 * @property string $name Название категории
 * @property string $description Описание категории
 * @property string $image Путь к фотографии
 */
class RecipesCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recipes_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description', 'image'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID записи',
            'name' => 'Название категории',
            'description' => 'Описание категории',
            'image' => 'Путь к фотографии',
        ];
    }

    /**
     * {@inheritdoc}
     * @return RecipesCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RecipesCategoryQuery(get_called_class());
    }
}
