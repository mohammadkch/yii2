<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sliders */
/* @var $modelUpload app\models\UploadForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sliders-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['type'=>'number']) ?>

    <?= $form->field($model, 'status')->dropDownList(['active' => Yii::t('app', 'Active'), 'inactive' => Yii::t('app', 'Inactive'), 'deleted' => Yii::t('app', 'Deleted'),], ['prompt' => Yii::t('app', 'Choose one of the following options')]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
