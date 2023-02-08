<?php

use dosamigos\ckeditor\CKEditor;
use dosamigos\multiselect\MultiSelect;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $modelTeachers app\models\Teachers */
/* @var $modelUpload app\models\UploadForm */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="products-form">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <div class="row">
            <div class="col-6">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'type')->dropDownList(['virtual' => Yii::t('app', 'Virtual'), 'videos' => Yii::t('app', 'Videos'), 'attendance' => Yii::t('app', 'Attendance'), 'books_and_pamphlets' => Yii::t('app', 'Books and pamphlets')], ['prompt' => '']) ?>
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
                <div id="panel-date">

                    <?php if (in_array($model->type, [$model::SCENARIO_TYPE_BOOKS_PAMPHLETS, $model::SCENARIO_TYPE_VIDEOS])): ?>


                        <?= $form->field($model, 'count_student')->textInput() ?>

                        <?= $form->field($model, 'datetime_start')->textInput() ?>

                        <?= $form->field($model, 'datetime_end')->textInput() ?>
                    <?php
                    endif;
                    ?>
                </div>
                <div id="panel-attachment">
                    <?php
                    if (in_array($model->type, [$model::SCENARIO_TYPE_BOOKS_PAMPHLETS, $model::SCENARIO_TYPE_VIDEOS])):
                        ?>
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
                    <?php
                    endif;
                    ?>
                </div>
                <div id="panel-address-1">
                    <?php
                    if ($model->type == $model::SCENARIO_TYPE_ATTENDANCE):
                        ?>
                        <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

                    <?php
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-6">
                <?= $form->field($model, 'teacher_ids')->dropDownList(ArrayHelper::map($modelTeachers, 'id', 'full_name'), ['multiple' => 'multiple']) ?>

                <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'discounted_price')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'status')->dropDownList(['active' => Yii::t('app', 'Active'), 'inactive' => Yii::t('app', 'Inactive'), 'deleted' => Yii::t('app', 'Deleted'),], ['prompt' => Yii::t('app', 'Choose one of the following options')]) ?>
                <div id="panel-address-2">
                    <?php
                    if ($model->type == $model::SCENARIO_TYPE_ATTENDANCE):
                        ?>

                        <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>

        <?= $form->field($model, 'description')->widget(CKEditor::class, [
        ]) ?>


        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

<?php
$city = $form->field($model, 'city')->textInput(['maxlength' => true]);
$select_type = <<< JS
$('#products-type').change((element)=>{
    var conceptName = $('#products-type').find(":selected").val()
    if(conceptName == 'attendance'){
        $('#panel-address-1').append('<div class="form-group field-products-city required">'+
'<label class="control-label" for="products-city">شهر برگزاری</label>'+
'<input type="text" id="products-city" class="form-control" name="Products[city]" maxlength="100" aria-required="true">'+
'<div class="help-block"></div></div>')
        $('#panel-address-2').show()
    }else {
        $('#panel-address-1').hide()
        $('#panel-address-2').hide()
    }
    
     if(conceptName=='videos' || conceptName=='books_and_pamphlets'){
        $('#panel-date').hide()
        $('#panel-attachment').show()
    }else {
        $('#panel-date').show()
        $('#panel-attachment').hide()
    }
    
    
})
JS;

$this->registerJs($select_type, \yii\web\View::POS_END);
