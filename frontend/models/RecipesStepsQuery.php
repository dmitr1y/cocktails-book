<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[RecipesSteps]].
 *
 * @see RecipesSteps
 */
class RecipesStepsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return RecipesSteps[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return RecipesSteps|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
