<?php

namespace app\controllers;

use app\models\Parts;

class PartController extends \yii\web\Controller
{
    public function actionIndex()
    {

        // $part = new Parts();
        // $part->name = 'D38L';
        // $part->full_name = 'Panel wheel Housing';
        // $part->quantity = 120;

        // $part->save();

        $parts = Parts::find()->all();

        return $this->render('index',compact('parts'));

    }

    public function actionEdit()
    {
        $part = Parts::findOne(3);
        $part->quantity = 100;
        $part->save();
        return $this->render('edit', compact('part'));
        }
        

    public function actionAbout()
    {

        $data = "this is data <br>";
        $data2 = "also, is data another data <br>";

        return $this->render('about', compact('data', 'data2'));

    }


}
