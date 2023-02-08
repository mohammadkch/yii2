<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$url = Yii::$app->urlManager;
?>

    <div class="container">
        <div class="content-center">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center mb-5">آپلود  فاکتور</h1>
                            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

                            <div class="my-4">
                                <?= $form->field($model, '_factor')->fileInput() ?>

                                <p class="help-block help-block-error"><?=Yii::$app->session->getFlash('error_access')?></p>
                            </div>
                            <div class="text-center my-2">
                                <?= Html::submitButton('ثبت', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
