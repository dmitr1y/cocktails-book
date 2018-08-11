<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[RecipesCategory]].
 *
 * @see RecipesCategory
 */
class RecipesCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return RecipesCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return RecipesCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
