<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RecipesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recipes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'coast') ?>

    <?php // echo $form->field($model, 'complexity') ?>

    <?php // echo $form->field($model, 'steps') ?>

    <?php // echo $form->field($model, 'author') ?>

    <?php // echo $form->field($model, 'calories') ?>

    <?php // echo $form->field($model, 'proteins') ?>

    <?php // echo $form->field($model, 'fats') ?>

    <?php // echo $form->field($model, 'carbohydrates') ?>

    <?php // echo $form->field($model, 'ingredients') ?>

    <?php // echo $form->field($model, 'instruments') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
