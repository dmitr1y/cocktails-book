<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Instruments */

$this->title = 'Create Instruments';
$this->params['breadcrumbs'][] = ['label' => 'Instruments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instruments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
