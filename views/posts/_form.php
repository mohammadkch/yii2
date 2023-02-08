<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */
/* @var $categories app\models\Categories[] */
/* @var $modelUpload app\models\UploadForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-6">
            <?= $form->field($model, 'title_fa')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'category_id')->dropDownList($categories,['prompt'=>Yii::t('app', 'Choose one of the following options')]) ?>
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
            <?= $form->field($model, 'time_review')->textInput(['type' => 'number']) ?>
            <?= $form->field($model, 'status')->dropDownList(['active' => Yii::t('app', 'Active'), 'inactive' => Yii::t('app', 'Inactive'), 'deleted' => Yii::t('app', 'Deleted'),], ['prompt' => Yii::t('app', 'Choose one of the following options')]) ?>
            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'text')->widget(CKEditor::class, [
            ]) ?> </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
