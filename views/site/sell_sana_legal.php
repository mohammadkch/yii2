`<?php

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
                        <h1 class="text-center mb-5">آپلود مدارک هویتی فروشندگان ارز</h1>
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="my-4">
                                    <?= $form->field($model, '_asasname', [
                                        'template' => '
                                            <label class="control-label">' . $model->getAttributeLabel('_asasname') . '</label>
                                            <div class="custom-file">
                                            {input}
                                            {label}
                                            {error}
                                            </div>
                                        ',
                                        'labelOptions' => ['class' => 'custom-file-label'],
                                        'inputOptions' => ['class' => 'custom-file-input']
                                    ])->textInput(['type' => 'file']) ?>

                                    <p class="help-block help-block-error"><?= Yii::$app->session->getFlash('error_access') ?></p>
                                </div>
                                <div class="my-4">
                                    <?= $form->field($model, '_tasis', [
                                        'template' => '
                                            <label class="control-label">' . $model->getAttributeLabel('_tasis') . '</label>
                                            <div class="custom-file">
                                            {input}
                                            {label}
                                            {error}
                                            </div>
                                        ',
                                        'labelOptions' => ['class' => 'custom-file-label'],
                                        'inputOptions' => ['class' => 'custom-file-input']
                                    ])->textInput(['type' => 'file']) ?>

                                    <p class="help-block help-block-error"><?= Yii::$app->session->getFlash('error_access') ?></p>
                                </div>
                                <div class="my-4">
                                    <?= $form->field($model, '_taghir', [
                                        'template' => '
                                            <label class="control-label">' . $model->getAttributeLabel('_taghir') . '</label>
                                            <div class="custom-file">
                                            {input}
                                            {label}
                                            {error}
                                            </div>
                                        ',
                                        'labelOptions' => ['class' => 'custom-file-label'],
                                        'inputOptions' => ['class' => 'custom-file-input']
                                    ])->textInput(['type' => 'file']);
                                    ?>

                                    <p class="help-block help-block-error"><?= Yii::$app->session->getFlash('error_access') ?></p>
                                </div>
                                <div class="my-4">
                                    <?= $form->field($model, '_moshakhasat_sherkat', [
                                        'template' => '
                                            <label class="control-label">' . $model->getAttributeLabel('_moshakhasat_sherkat') . '</label>
                                            <div class="custom-file">
                                            {input}
                                            {label}
                                            {error}
                                            </div>
                                        ',
                                        'labelOptions' => ['class' => 'custom-file-label'],
                                        'inputOptions' => ['class' => 'custom-file-input']
                                    ])->textInput(['type' => 'file']);
                                    ?>
                                    <p class="help-block help-block-error"><?= Yii::$app->session->getFlash('error_access') ?></p>
                                </div>
                                <div class="my-4">
                                    <?= $form->field($model, '_information_form', [
                                        'template' => '
                                            <label class="control-label">' . $model->getAttributeLabel('_information_form') . '</label>
                                            <div class="custom-file">
                                            {input}
                                            {label}
                                            {error}
                                            </div>
                                        ',
                                        'labelOptions' => ['class' => 'custom-file-label'],
                                        'inputOptions' => ['class' => 'custom-file-input']
                                    ])->textInput(['type' => 'file']);
                                    ?>
                                    <p class="help-block help-block-error"><?= Yii::$app->session->getFlash('error_access') ?></p>
                                </div>
                                <div class="my-4">
                                    <?= $form->field($model, '_request_to_sell_letter', [
                                        'template' => '
                                            <label class="control-label">' . $model->getAttributeLabel('_request_to_sell_letter') . '</label>
                                            <div class="custom-file">
                                            {input}
                                            {label}
                                            {error}
                                            </div>
                                        ',
                                        'labelOptions' => ['class' => 'custom-file-label'],
                                        'inputOptions' => ['class' => 'custom-file-input']
                                    ])->textInput(['type' => 'file']);
                                    ?>
                                    <p class="help-block help-block-error"><?= Yii::$app->session->getFlash('error_access') ?></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="my-4">
                                    <?= $form->field($model, '_moadian', [
                                        'template' => '
                                            <label class="control-label">' . $model->getAttributeLabel('_moadian') . '</label>
                                            <div class="custom-file">
                                            {input}
                                            {label}
                                            {error}
                                            </div>
                                        ',
                                        'labelOptions' => ['class' => 'custom-file-label'],
                                        'inputOptions' => ['class' => 'custom-file-input']
                                    ])->textInput(['type' => 'file']);
                                    ?>
                                    <p class="help-block help-block-error"><?= Yii::$app->session->getFlash('error_access') ?></p>
                                </div>
                                <div class="my-4">
                                    <?= $form->field($model, '_kart_melli', [
                                        'template' => '
                                            <label class="control-label">' . $model->getAttributeLabel('_kart_melli') . '</label>
                                            <div class="custom-file">
                                            {input}
                                            {label}
                                            {error}
                                            </div>
                                        ',
                                        'labelOptions' => ['class' => 'custom-file-label'],
                                        'inputOptions' => ['class' => 'custom-file-input']
                                    ])->textInput(['type' => 'file']);
                                    ?>
                                    <p class="help-block help-block-error"><?= Yii::$app->session->getFlash('error_access') ?></p>
                                </div>
                                <div class="my-4">
                                    <?= $form->field($model, '_kart_bazargany', [
                                        'template' => '
                                            <label class="control-label">' . $model->getAttributeLabel('_kart_bazargany') . '</label>
                                            <div class="custom-file">
                                            {input}
                                            {label}
                                            {error}
                                            </div>
                                        ',
                                        'labelOptions' => ['class' => 'custom-file-label'],
                                        'inputOptions' => ['class' => 'custom-file-input']
                                    ])->textInput(['type' => 'file']);
                                    ?>
                                    <p class="help-block help-block-error"><?= Yii::$app->session->getFlash('error_access') ?></p>
                                </div>
                                <div class="my-4">
                                    <?= $form->field($model, '_poolshooii', [
                                        'template' => '
                                            <label class="control-label">' . $model->getAttributeLabel('_poolshooii') . '</label>
                                            <div class="custom-file">
                                            {input}
                                            {label}
                                            {error}
                                            </div>
                                        ',
                                        'labelOptions' => ['class' => 'custom-file-label'],
                                        'inputOptions' => ['class' => 'custom-file-input']
                                    ])->textInput(['type' => 'file']);
                                    ?>
                                    <p class="help-block help-block-error"><?= Yii::$app->session->getFlash('error_access') ?></p>
                                </div>

                                <div class="my-4">
                                    <?= $form->field($model, '_request_to_sell_docs', [
                                        'template' => '
                                            <label class="control-label">' . $model->getAttributeLabel('_request_to_sell_docs') . '</label>
                                            <div class="custom-file">
                                            {input}
                                            {label}
                                            {error}
                                            </div>
                                        ',
                                        'labelOptions' => ['class' => 'custom-file-label'],
                                        'inputOptions' => ['class' => 'custom-file-input']
                                    ])->textInput(['type' => 'file']);
                                    ?>
                                    <p class="help-block help-block-error"><?= Yii::$app->session->getFlash('error_access') ?></p>
                                </div>
                            </div>
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
`