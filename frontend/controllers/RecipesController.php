<?php

namespace frontend\controllers;

class RecipesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
