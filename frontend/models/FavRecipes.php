<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fav_recipes".
 *
 * @property int $id ID записи
 * @property string $name Название закладки
 * @property string $description Описание закладки
 * @property string $recipes ID рецептов
 * @property int $author ID автора закладки
 */
class FavRecipes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fav_recipes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'author'], 'required'],
            [['description', 'recipes'], 'string'],
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
            'id' => 'ID записи',
            'name' => 'Название закладки',
            'description' => 'Описание закладки',
            'recipes' => 'ID рецептов',
            'author' => 'ID автора закладки',
        ];
    }

    /**
     * {@inheritdoc}
     * @return FavRecipesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FavRecipesQuery(get_called_class());
    }
}
