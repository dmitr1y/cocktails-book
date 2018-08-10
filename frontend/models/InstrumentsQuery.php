<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Instruments]].
 *
 * @see Instruments
 */
class InstrumentsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Instruments[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Instruments|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
