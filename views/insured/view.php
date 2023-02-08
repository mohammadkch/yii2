<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */

$this->title = $model->id;
\yii\web\YiiAsset::register($this);
?>
<div class="profile-view">

     <div class="breadcrumbs mt-3 mb-3   ">
        <ul>
            <li><a href="<?= Url::to(['site/index']) ?>"><i class="icofont icofont-lg align-middle">home</i></a></li>
            <li><a href="<?= Url::to(['insured/index']) ?>"><?=Yii::t('app','Insured')?></a></li>
        
            <li class="active"><a href="#!"><?=Yii::t('app','ٰView Insured : {name}',[
            'name'=>$model->full_name
            ])?></a></li>
        </u

    </div>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'full_name',
            'national_code',
            'address',
            'birth_date',
            'landline_phone',
            'mobile',
            'avatar',
            'bio',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
