<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[FavRecipes]].
 *
 * @see FavRecipes
 */
class FavRecipesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return FavRecipes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return FavRecipes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
