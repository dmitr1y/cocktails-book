<?php
/**
 * Created by PhpStorm.
 * User: dmitriy
 * Date: 10.08.18
 * Time: 20:21
 */

/* @var $this yii\web\View */
/* @var $model app\models\Ingredients */


//echo "<pre>";
//print_r($model);
//echo "<pre>";
$this->title = $model->name;
?>

<section class="first ingredients">
    <div class="container">
        <div class="card-content">

            <h1 class="text-left"><?= $model->name ?></h1>
            <div class="card-header-image animated pulse ">
                <img src="https://cosmetology-info.ru/img_lib/2014/05/1400092219_c220.jpg" class="product-image">
            </div>

        </div>
    </div>
</section>
<section>
    <div class="card-line">
        <div class="card-subline"><?= $model->calories . " ккал" ?></div>
        <div class="card-subline"><?= $model->proteins . " белки" ?></div>
        <div class="card-subline"><?= $model->fats . " жиры" ?></div>
        <div class="card-subline"><?= $model->carbohydrates . " углеводы" ?></div>
    </div>

    <div class="container">
        <p>
        <h2>О помидоре</h2>
        <p><?= $model->description ?></p>

        </p>
    </div>
</section>