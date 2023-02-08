<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'صفحه اصلی';
$url = Yii::$app->urlManager;
?>

    <div class="container">
        <div class="content-center">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center mb-5">نیما</h1>

                            <div class="text-center my-2">
                                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl('site/sell-nima')?>" class="btn btn-primary btn-block">فروشنده ارز</a>
                            </div>

                            <div class="text-center my-2">
                                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl('site/buy-nima')?>" class="btn btn-outline-secondary btn-block">خریدار ارز</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center mb-5">سنا</h1>

                            <div class="text-center my-2">
                                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl('site/sell-sana')?>" class="btn btn-primary btn-block">فروشنده ارز</a>
                            </div>

                            <div class="text-center my-2">
                                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl('site/buy-sana')?>" class="btn btn-outline-secondary btn-block">خریدار ارز</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
