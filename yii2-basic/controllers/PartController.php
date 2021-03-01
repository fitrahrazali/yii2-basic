<?php

namespace app\controllers;

class PartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {

        $data = "this is data <br>";
        $data2 = "also, is data another data <br>";

        return $this->render('about', compact('data', 'data2'));

    }


}
