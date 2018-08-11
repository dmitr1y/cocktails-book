<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/css/navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!---->
<!--<div class="wrap">-->
    <?php
    $searchRecipe = new \frontend\models\Recipes();
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Рецепты', 'url' => ['/recipes']],
        ['label' => 'Категори', 'url' => ['/recipe-category']],
        ['label' => 'Ингредиенты', 'url' => ['/ingredients']],
        ['label' => 'Инструменты', 'url' => ['/instruments']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Вход', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выйти (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,

    ]);
    echo "<form class='navbar-form navbar-right' role='search'>
       <div class='form-group has-feedback'>
            <input id='searchbox' type='text' placeholder='Поиск рецепта' class='form-control'>
            <span id='searchicon' class='fa fa-search form-control-feedback'></span>
        </div>
  </form>";
    NavBar::end();
    ?>
<!---->
<!--    <div class="container">-->
<!--        --><? //= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
<!--        --><? //= Alert::widget() ?>
<!--        --><? //= $content ?>
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="400">-->
<!--    <div class="container">-->
<!--        <div class="navbar-header">-->
<!--            <a href="#" class="navbar-brand">Brand</a>-->
<!--            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
<!--                <i class="fa fa-bars"></i>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="navbar-collapse collapse">-->
<!--            <ul class="nav navbar-nav">-->
<!--                <li><a href="#">Link</a></li>-->
<!--                <li><a href="#">Link</a></li>-->
<!--            </ul>-->
<!--            <ul class="nav navbar-right navbar-nav">-->
<!--                <li>-->
<!--                    <a href="#">Link</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#"><span class="badge">2</span></a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div><!-- /.navbar -->-->


<!--<section>-->
<!--    <div class="container">-->
<!--        <h1>Here is some more content</h1>-->
<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
<?= Alert::widget() ?>
<?= $content ?>
<!--    </div>-->
<!--</section>-->

<!--<section>-->
<!---->
<!--    <div class="container">-->
<!---->
<!--        <h1>Here is some more content</h1>-->
<!---->
<!--    </div>-->
<!---->
<!--</section>-->
<!---->
<!--<section>-->
<!---->
<!--    <div class="container">-->
<!---->
<!--        <h1>Here is some more content</h1>-->
<!---->
<!--    </div>-->
<!---->
<!--</section>-->

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
