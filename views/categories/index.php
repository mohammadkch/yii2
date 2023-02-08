<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
?>
<div class="categories-index">

    <div class="breadcrumbs mt-3 mb-3   ">
        <ul>
            <li><a href="<?= Url::to(['site/index']) ?>"><i class="icofont icofont-lg align-middle">home</i></a></li>
            <li><a href="<?= Url::to(['categories/index']) ?>"><?=Yii::t('app','Categories')?></a></li>
            <li class="active"><a href="#!"><?=Yii::t('app','Categories')?></a></li>
        </ul>
    </div>

    <p>
        <?= Html::a(Yii::t('app', 'Create Categories'), ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'parent_id',
                'value' => 'parent.name',
                'filter' => \yii\helpers\ArrayHelper::map($dataProvider->models,'id','name')
            ],
            'name',
            [
                'attribute' => 'status',
                'format' => 'Html',
                'value' => function ($model) {
                    /* @var $mdoel app\models\Categories */
                    if ($model->status == 'active') {
                        return '<span class="badge badge-success">' . Yii::t('app', 'Active') . '</span>';
                    }
                    return '<span class="badge badge-danger">' . Yii::t('app', 'Inactive') . '</span>';

                },
                'filter' => ['active'=>'فعال','inactive'=>'غیرفعال']
            ],

            [

                'class' => 'yii\grid\ActionColumn',

                'template' => '{update} {delete}{view}',

                'buttons' => [

                    'update' => function ($url, $model, $key) {

                        return '<a href="' . $url . '" class="btn btn-sm btn-success mr-2 ml-2">ویرایش</a>';

                    },

                    'delete' => function ($url, $model, $key) {

                        return '<button type="button" id="' . $url . '" class="btn btn-outline-danger btn-del btn-sm" data-toggle="modal" data-target="#exampleModal">حذف</button>';
                    },

                    'view' => function ($url, $model, $key) {

                        return '<a href="' . $url . '"   class="btn btn-sm btn-info mr-2 ml-2">نمایش</a>';

                    },

                ]

            ],

        ],
    ]); ?>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف دسته</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>آیا از حذف دسته اطمینان کامل دارید؟</p>
                <small class="text-danger">بعد از حذف امکان بازگشت وجود نخواهد داشت و تمام اطلاعات مرتبط با این
                    دسته حذف خواهد شد.
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
