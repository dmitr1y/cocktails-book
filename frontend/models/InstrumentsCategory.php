<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instruments_category".
 *
 * @property int $id
 * @property string $name Название категории
 * @property string $description Описание категории
 * @property string $image Путь к изображению
 */
class InstrumentsCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instruments_category';
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
     * @return InstrumentsCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InstrumentsCategoryQuery(get_called_class());
    }
}
