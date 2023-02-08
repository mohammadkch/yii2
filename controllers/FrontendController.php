<?php

namespace app\controllers;

use app\models\Slider;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class FrontendController extends Controller
{

    public function behaviors()
    {
        return parent::behaviors();
    }

    public function actionIndex()
    {
        $this->layout = 'frontend';
        $sliders = Slider::findAll([]);
        return $this->render('home', ['sliders' => $sliders]);
    }
}
