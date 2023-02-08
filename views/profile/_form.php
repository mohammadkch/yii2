<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $modelUpload app\models\UploadForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">
    <?= Yii::$app->session->getFlash('message') ?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-6">
            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'national_code')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'birth_date')->textInput(['maxlength' => true]) ?>

          
    <?= $form->field($modelUpload, 'imageFile', [
                'template' => '
                <label class="control-label">' . $modelUpload->getAttributeLabel('imageFile') . '</label>
                <div class="custom-file">
                {input}
                {label}
                {error}
                </div>
            ',
                'labelOptions' => ['class' => 'custom-file-label'],
                'inputOptions' => ['class' => 'custom-file-input']
            ])->textInput(['type' => 'file']) ?>
        </div>
        <div class="col-6">
        
            <?= $form->field($model, 'landline_phone')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'address')->textArea(['rows' => 6]) ?>

        </div>

    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
