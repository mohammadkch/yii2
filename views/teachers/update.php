<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Teachers */
/* @var $modelUpload app\models\UploadForm */

$this->title = Yii::t('app', 'Update Teachers: {name}', [
    'name' => $model->full_name,
]);
?>
<div class="teachers-update">


    <div class="breadcrumbs mt-3 mb-3   ">
        <ul>
            <li><a href="<?= Url::to(['site/index']) ?>"><i class="icofont icofont-lg align-middle">home</i></a></li>
            <li class="active"><a href="<?= Url::to(['teachers/index']) ?>"><?=Yii::t('app','Teachers')?></a></li>
            <li class="active"><a href="#!"><?= Yii::t('app', 'Update Teachers: {name}', [
                        'name' => $model->full_name,
                    ]); ?></a></li>
        </ul>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'modelUpload' => $modelUpload,
    ]) ?>

</div>
