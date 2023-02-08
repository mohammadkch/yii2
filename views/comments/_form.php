<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'count_view')->textInput(['disabled'=>true]) ?>

    <?= $form->field($model, 'count_like')->textInput(['disabled'=>true]) ?>

    <?= $form->field($model, 'count_dislike')->textInput(['disabled'=>true]) ?>

    <?= $form->field($model, 'category_id')->textInput(['disabled'=>true]) ?>

    <?= $form->field($model, 'comment_id')->textInput(['disabled'=>true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', 'deleted' => 'Deleted', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput(['disabled'=>true]) ?>

    <?= $form->field($model, 'updated_at')->textInput(['disabled'=>true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
