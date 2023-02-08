<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$url = Yii::$app->urlManager;
?>

    <div class="container">
        <div class="content-center">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center mb-5">دانلود  فاکتورها</h1>
                            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

                            <div class="my-4">
                                <?php foreach($Documents as $Document):?>
                                    <a href="<?=Url::base(true).$Document->file?>" target="_blank">
                                        دانلود <?=$Document->type?>
                                    </a>
                                    <br>

                                <?php endforeach;?>
                            </div>
                            <div class="text-center my-2">
                                <?= Html::submitButton('تایید', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
