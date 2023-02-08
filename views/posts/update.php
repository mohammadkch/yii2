<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */
/* @var $modelUpload app\models\UploadForm */
/* @var $categories app\models\Categories[] */

$this->title = Yii::t('app', 'Update Posts: {name}', [
    'name' => $model->id,
]);

?>
<div class="posts-update">

    <div class="breadcrumbs mt-3 mb-3   ">
        <ul>
            <li><a href="<?= Url::to(['site/index']) ?>"><i class="icofont icofont-lg align-middle">home</i></a></li>
            <li class="active"><a href="<?= Url::to(['posts/index']) ?>"><?=Yii::t('app','Posts')?></a></li>
            <li class="active"><a href="#!"><?=Yii::t('app','Update Posts: {name}',[
                    'name'=>$model->title_fa
                    ])?></a></li>
        </ul>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'modelUpload' => $modelUpload,
        'categories' => $categories,
    ]) ?>

</div>
