<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $modelTeachers app\models\Teachers */
/* @var $modelUpload app\models\UploadForm */

$this->title = Yii::t('app', 'Update products: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="products-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelTeachers'=>$modelTeachers,
        'modelUpload' => $modelUpload,
    ]) ?>

</div>
