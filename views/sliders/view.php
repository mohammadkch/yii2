<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sliders */

$this->title = $model->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sliders-view">

    <div class="breadcrumbs mt-3 mb-3   ">
        <ul>
            <li><a href="<?= Url::to(['site/index']) ?>"><i class="icofont icofont-lg align-middle">home</i></a></li>
            <li><a href="<?= Url::to(['sliders/index']) ?>"><?= Yii::t('app', 'Sliders') ?></a></li>
            <li class="active"><a href="#!"><?= Yii::t('app', 'View Sliders: {name}', [
                                                'name' => $model->title
                                            ]) ?></a></li>
        </ul>
    </div>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <button type="button" id="<?= Yii::$app->urlManager->createAbsoluteUrl(['sliders/delete?id=' . $model->id]) ?>" class="btn btn-outline-danger btn-del" data-toggle="modal" data-target="#exampleModal">
            <?= Yii::t('app', 'Delete') ?>
        </button>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            [
                'attribute' => 'image',
                'format' => 'Html',
                'value' => function ($model) {
                    /* @Var $model app\models\Sliders */
                    return Html::img($model->getImageUrl(), ['class' => 'img-fluid']);
                }
            ],
            'link:url',
            'position',
            [
                'attribute' => 'status',
                'format' => 'Html',
                'value' => function ($model) {
                    /* @var $mdoel app\models\Sliders */
                    if ($model->status == 'active') {
                        return '<span class="badge badge-success">' . Yii::t('app', 'Active') . '</span>';
                    }
                    return '<span class="badge badge-danger">' . Yii::t('app', 'Inactive') . '</span>';
                },
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف اسلایدر</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>آیا از حذف اسلایدر اطمینان کامل دارید؟</p>
                <small class="text-danger">بعد از حذف امکان بازگشت وجود نخواهد داشت و تمام اطلاعات مرتبط با این
                    اسلایدر حذف خواهد شد.
                </small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary mr-3 ml-3" data-dismiss="modal">لغو</button>
                <a href="" class="btn btn-danger mr-3 ml-3 href-del" data-method="post" data-pjax="0">بله مطمئنم</a>
            </div>
        </div>
    </div>
</div>

<?php
$this->registerJs(
    "$(document).on('click','.btn-del',function () {
        $('.href-del').attr('href',$(this).attr('id'))
    })
",
    View::POS_END
);

?>