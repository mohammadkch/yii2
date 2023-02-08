<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
$url = Yii::$app->urlManager;

?>
<div class="site-error text-center mt-5 text-white">


    <?php
    switch (Yii::$app->response->statusCode)
    {
        case 404:{
            $this->title = 'صفحه ای پیدا نشده';
            echo '<h1 style="font-size: 100px">'.Yii::$app->response->statusCode.'</h1>';
            break;
        }
        case 403:{
            $this->title = 'شما به این قسمت دست رسی ندارید';
            echo '<h1 style="font-size: 100px">'.Yii::$app->response->statusCode.'</h1>';
            break;
        }

    }
    echo '<h1>'.$this->title.'</h1>';
    ?>


    <h3>
        خطا در بالا رخ داده است در حالی که وب سرور پردازش درخواست شما بود.    </h3>
    <h3>
        اگر فکر می کنید این یک خطای سرور است، لطفا با ما تماس بگیرید. متشکرم.
    </h3>
    <img  src="<?=$url->baseUrl?>/dist/img/logo-kachab.png" class="w-25 mt-5">

</div>
