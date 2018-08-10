<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recipes_steps".
 *
 * @property int $id ID записи
 * @property int $comment ID комментария
 * @property string $description Описание шага
 * @property string $actions ID действий шага
 */
class RecipesSteps extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recipes_steps';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment'], 'integer'],
            [['description', 'actions'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID записи',
            'comment' => 'ID комментария',
            'description' => 'Описание шага',
            'actions' => 'ID действий шага',
        ];
    }

    /**
     * {@inheritdoc}
     * @return RecipesStepsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RecipesStepsQuery(get_called_class());
    }
}
