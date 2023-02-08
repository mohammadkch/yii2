<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Notifications */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notifications-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'type')->dropDownList([ 'all' => 'همه' ]) ?>

        </div>
        <div class="col-6">
            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

        </div>
    </div>

<!--    --><?//= $form->field($model, 'userId')->textInput() ?>




<!--    --><?//= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('ثبت اطلاعات اعلان', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
