<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Categories */
/* @var $categories app\models\Categories */

?>
<div class="categories-create">

    <div class="breadcrumbs mt-3 mb-3   ">
        <ul>
            <li><a href="<?= Url::to(['site/index']) ?>"><i class="icofont icofont-lg align-middle">home</i></a></li>
            <li><a href="<?= Url::to(['categories/index']) ?>"><?=Yii::t('app','Categories')?></a></li>
            <li class="active"><a href="#!"><?=Yii::t('app','Create Categories')?></a></li>
        </ul>
    </div>

    <?=
    $this->render('_form', [
        'model' => $model,
        'categories'=> $categories
    ]) ?>

</div>
