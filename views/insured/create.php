<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $modelUpload app\models\UploadForm */

$this->title = Yii::t('app', 'Create Insured');
?>
<div class="profile-create">

    <div class="breadcrumbs mt-3 mb-3   ">
        <ul>
            <li><a href="<?= Url::to(['site/index']) ?>"><i class="icofont icofont-lg align-middle">home</i></a></li>
            <li><a href="<?= Url::to(['insured/index']) ?>"><?=Yii::t('app','Insured')?></a></li>
            <li class="active"><a href="#!"><?=Yii::t('app','Create Insured')?></a></li>
        </ul>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'modelUpload' => $modelUpload,
    ]) ?>

</div>
