<?php
/* @Var \yii\data\ActiveDataProvider $dataProvider */
?>
<div class="container">
    <?php

    echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_blog_item',
        'options' => ['class' => 'row'],
        'itemOptions' => [
            'tag' => false,
        ],
        'pager' => [
            'prevPageLabel' => '&laquo;',
            'nextPageLabel' => '&raquo;',
            'maxButtonCount' => 5,

            // Customzing options for pager container tag
            'options' => [
                'tag' => 'div',
                'class' => 'pagination justify-content-center',
            ],

            // Customzing CSS class for pager link
            'linkOptions' => ['class' => 'page-link'],
            'activePageCssClass' => 'page-item active',
            'disabledPageCssClass' => ' page-link disabled',
            ],
        'layout' => "<div class='row m-5'>{summary}</div><div class='row'>{items}</div>{pager}",
    ]);
    ?>
</div>