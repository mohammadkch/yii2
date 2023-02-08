<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Notifications */

$this->title = Yii::$app->name . ' | نمایش اطلاعات اعلان';

\yii\web\YiiAsset::register($this);
?>
<div class="notifications-view">

    <h1>اطلاعات اعلان : <?= Html::encode($model->title) ?></h1>
    <div class="breadcrumbs mt-3 mb-3   ">
        <ul>
            <li><a href="<?= Url::to(['site/index']) ?>"><i class="icofont icofont-lg align-middle">home</i></a></li>
            <li><a href="<?= Url::to(['notifications/index']) ?>"">اعلان‌ها</a></li>
            <li class="active"><a href="#!">نمایش اطلاعات اعلان</a></li>
        </ul>
    </div>
    <p>
        <?= Html::a('ویرایش اطلاعات اعلان', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <button type="button"
                id="<?= Yii::$app->urlManager->createAbsoluteUrl(['notifications/delete?id=' . $model->id]) ?>"
                class="btn btn-outline-danger btn-del" data-toggle="modal" data-target="#exampleModal">حذف اعلان
        </button>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
//            'userId',
            'title',
            'body:ntext',
//            'type',
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف اعلان</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>آیا از حذف اعلان اطمینان کامل دارید؟</p>
                <small class="text-danger">بعد از حذف امکان بازگشت وجود نخواهد داشت و تمام اطلاعات مرتبط با این
                    اعلان حذف خواهد شد.
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

