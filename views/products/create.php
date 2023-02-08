<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $modelTeachers app\models\Teachers */
/* @var $modelUpload app\models\UploadForm */

$this->title = Yii::t('app', 'Create Product');

?>
<div class="products-create">

    <div class="breadcrumbs mt-3 mb-3   ">
        <ul>
            <li><a href="<?= Url::to(['site/index']) ?>"><i class="icofont icofont-lg align-middle">home</i></a></li>
            <li class="active"><a href="<?= Url::to(['products/index']) ?>"><?=Yii::t('app','Products')?></a></li>
            <li class="active"><a href="#!"><?=Yii::t('app','Create Product')?></a></li>
        </ul>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
        'modelTeachers'=>$modelTeachers,
        'modelUpload' => $modelUpload,
    ]) ?>

</div>
