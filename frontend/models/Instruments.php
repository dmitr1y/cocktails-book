<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instruments".
 *
 * @property int $id
 * @property string $name Название инструмента
 * @property string $description Описание инструмента
 * @property double $coast Цена инструмента
 * @property string $url Ссылка на магазин с инструментом
 * @property string $image Путь к изображению
 * @property string $category Категории инструмента
 */
class Instruments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instruments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'description', 'url', 'image', 'category'], 'string'],
            [['coast'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название инструмента',
            'description' => 'Описание инструмента',
            'coast' => 'Цена инструмента',
            'url' => 'Ссылка на магазин с инструментом',
            'image' => 'Путь к изображению',
            'category' => 'Категории инструмента',
        ];
    }

    /**
     * {@inheritdoc}
     * @return InstrumentsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InstrumentsQuery(get_called_class());
    }
}
