<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sliders */
/* @var $modelUpload app\models\UploadForm */

$this->title = Yii::t('app', 'Create Sliders');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sliders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliders-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelUpload' => $modelUpload,
    ]) ?>

</div>
