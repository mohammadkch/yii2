<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\sarafi\StepMap;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'لیست درخواست ها';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'user.username',
                'label' => 'نام کاربری',
            ],
            [
                'attribute' => 'type',
                'label' => 'نوع درخواست',
                'value' => function ($model) {
                    if ($model->type == 'sell_sana_real') {
                        return 'فروش سنا (حقیقی)';
                    }
                    if ($model->type == 'buy_sana_real') {
                        return 'خرید سنا (حقیقی)';
                    }
                    if ($model->type == 'sell_sana_legal') {
                        return 'فروش سنا (حقوقی)';
                    }
                    if ($model->type == 'buy_sana_legal') {
                        return 'خرید سنا (حقوقی)';
                    }
                    if ($model->type == 'sell_nima') {
                        return 'فروش نیما';
                    }
                    if ($model->type == 'buy_nima') {
                        return 'خرید نیما';
                    }
                }
            ],
            [
                'attribute' => 'current_step',
                'label' => 'وضعیت فعلی',
                'filter' => true,
                'format' => 'raw',
                'value' => function ($model) use ($all_steps) {
                    return $all_steps[$model->current_step];
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => ' {set-next-step} {decline-next-step} {cancel-request} {view-comment} {all_files}',
                'buttons' => [
                    'set-next-step' => function ($url, $model) use ($all_steps) {
                        if ($step_name = $model->userCanDoNextStep()) {
                            $step_name = $all_steps[$step_name];
                            return Html::a($step_name, $url, ['class' => 'btn btn-success']);
                        }
                    },
                    'decline-next-step' => function ($url, $model) use ($all_steps) {
                        if ($model->userCanCancel() && $step_name = $model->userCanDoNextStep()) {
                            $step_name = $all_steps[$step_name];
                            $step_name = str_replace('تایید', '', $step_name);
                            $step_name = 'قبول نکردن ' . $step_name;
                            return Html::a($step_name, $url, ['class' => 'btn btn-warning']);
                        }
                    },
                    'cancel-request' => function ($url, $model) {
                        if ($model->userCanCancel() && $model->current_step != StepMap::CANCEL_REQUEST) {
                            return Html::a('لغو درخواست', $url, ['class' => 'btn btn-danger']);
                        }
                    },
                    'view-comment' => function ($url, $model) {
                        if ($model->comments) {
                            return Html::a('ملاحظات', $url, ['class' => 'btn btn-danger']);
                        }
                    },
                    'all_files' => function ($url, $model) {

                        if ($model->current_step != 'init') {
                                return Html::a('مشاهده همه فایل ها', $url, ['class' => 'btn btn-info']);
                            }
                    },
                ],
            ],
        ],
    ]); ?>


</div>