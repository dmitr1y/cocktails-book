<?php

use yii\db\Migration;

/**
 * Handles the creation of table `steps_actions`.
 */
class m180809_145717_create_steps_actions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('steps_actions', [
            'id' => $this->primaryKey(),
            'description' => $this->text()->comment("Описание действия"),
            'ingredient' => $this->integer()->comment("ID ингредиента"),
            'ingredient_count' => $this->float()->comment("Количество ингредента"),
            'instrument' => $this->integer()->comment("ID инструмента"),
        ],'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('steps_actions');
    }
}
