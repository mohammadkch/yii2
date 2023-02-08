<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Notifications */
$this->title = Yii::$app->name . ' | ویرایش اعلان : '. $model->title;

?>
<div class="notifications-update">

    <div class="breadcrumbs mt-3 mb-3  ">

        <ul>
            <li><a href="<?=Url::to(['site/index'])?>"><i class="icofont icofont-lg align-middle">home</i></a></li>
            <li><a href="<?=Url::to(['notifications/index'])?>">اعلان‌ها</a></li>
            <li class="active"><a href="#!"><?=' ویرایش اعلان : '. $model->title?></a></li>
        </ul>
        <p class="float-left">
            <?= Html::a('بازگشت', ['index'], ['class' => 'btn btn-danger']) ?>
        </p>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
