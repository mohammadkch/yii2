<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'سنا -خریداران  ارز';
$url = Yii::$app->urlManager;
?>

    <div class="container">
        <div class="content-center">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center mb-5"> حقیقی</h1>

                            <div class="text-center my-2">
                                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl('site/buy_sana_real')?>" class="btn  btn-primary btn-block">خریدار ارز</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center mb-5">حقوقی</h1>

                            <div class="text-center my-2">
                                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl('site/buy_sana_legal')?>" class="btn btn-outline-secondary btn-block">خریدار ارز</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
