<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NotificationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::$app->name . ' | اعلان‌های ارسال‌شده';
?>
<style>
    .truncate {
        max-width: 150px !important;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .truncate:hover {
        overflow: visible;
        white-space: normal;
        width: auto;
    }
</style>
<div class="categories-index">

    <div class="breadcrumbs mt-3 mb-3   ">
        <ul>
            <li><a href="<?= Url::to(['site/index']) ?>"><i class="icofont icofont-lg align-middle">home</i></a></li>
            <li><a href="<?= Url::to(['notifications/index']) ?>">اعلان‌ها</a></li>
            <li class="active"><a href="#!">اعلان‌های ارسال‌شده</a></li>
        </ul>
    </div>

    <?php
        echo Yii::$app->session->getFlash('error');
    ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'notification.title',
            [
                'attribute' => 'notification.body',
                'contentOptions' => ['class' => 'truncate'],
            ],
            'created_at',

        ],
    ]); ?>
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
    "
  $(document).on('click','.btn-del',function () {
        $('.href-del').attr('href',$(this).attr('id'))
    })
",
    View::POS_END
);

?>

</div>
