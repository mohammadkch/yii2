<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\web\View;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
//exit;

$url = Yii::$app->urlManager;
//$profileModel = \app\models\Profile::find()->where(['user_id' => Yii::$app->user->getId()])->one();
$profileModel = \app\models\Profile::find()->one();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <?php $this->head() ?>

</head>

<style>
    * {
        font-size: 0.9rem;
    }

    .help-block {
        color: red;
    }

    th a {
        color: white;
    }

    .table-bordered:not(.detail-view) {
        text-align: center;
    }
</style>

<body class="dashboard fanum">

    <?php $this->beginBody() ?>

    <header class="mb-4 py-3 bg-white border-bottom fixed-top mb-5" style="z-index: 2!important;">
        <div class="container-fluid">
            <div class="row">
                <div class="d-none d-lg-block col-4 col-lg-3 col-xl-2"></div>
                <div class="col-12 col-8 col-lg-9 col-xl-10">
                    <div class="row">
                        <div class="col">
                            <a class="btn float-right mr-5" style="border-radius: 5px;border: 1px solid #007bff;color: white;background-color: #007bff">اعتبارحساب
                                :<span class="mr-2"><?= Yii::$app->formatter->asCurrency(10000, '') ?></span><span class="mr-2">ریال</span></a>

                            <a class="btn float-left ml-5" style="border-radius: 5px;border: 1px solid #007bff;color: white;background-color: #007bff"><span class="mr-3">شماره های تماس : </span><span>09906565397-09120890801</span></a>
                            <a class="btn float-left ml-5" style="border-radius: 5px;border: 1px solid #2ecc71;color: white;background-color: #2ecc71"><span class="mr-3">تیکت و پشتیبانی</span></a>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>
    <br>
    <div class="container-fluid" id="main-container mt-5" style="margin-top: 3.5rem">
        <div class="row" id="main-row">
            <div class="d-none d-lg-block col-4 col-lg-3 col-xl-2">
                <div class="sidebar bg-white shadow">
                    <div class="sidebar-inner">
                        <div class="row h-100 no-gutters">
                            <div class="col">
                                <div class="sidebarlogo">
                                    <a href=""><img src="" class="img-fluid" /></a>
                                </div>
                                <div class="text-center mt-4">
                                    <div class="d-inline-block rounded-circle p-1 bg-white">
                                        <img src="../../web/uploads/<?= $profileModel->avatar ?? 'avatar.png' ?>" alt="avatar no photo" width="80" height="80" class="rounded-circle shadow img-fluid" />
                                    </div>

                                    <h3 class="mt-4 text-info"><?= $profileModel->full_name /* ?? Yii::$app->user->identity->username */ ?></h3>
                                    <ul class="nav p-0 m-0 justify-content-center">
                                        <li class="nav-item">
                                            <?php
                                            if ($profileModel) {
                                            ?>
                                                <a class="nav-link" href="<?= $url->createAbsoluteUrl(['profile/update']) ?>"><i class="icofont align-middle">ui_edit</i>
                                                    <?= Yii::t('app', 'Edit Profile') ?></a>
                                        </li>

                                    <?php
                                            } else { ?>
                                        <a class="nav-link" href="<?= $url->createAbsoluteUrl(['profile/create']) ?>"><i class="icofont align-middle">ui_edit</i>
                                            <?= Yii::t('app', 'Profile registration') ?></a></li>

                                    <?php
                                            }
                                    ?>
                                    <li class="nav-item"><a class="nav-link logout" href="<?= $url->createAbsoluteUrl(['site/logout']) ?>"><i class="icofont align-middle">logout</i> خروج</a></li>
                                    </ul>
                                </div>
                                <h4 class="text-center mt-3"><a href="<?= Yii::$app->request->hostInfo ?>" class="btn btn-warning btn-sm py-1 text-white">رفتن
                                        به صفحه اصلی سایت</a></h4>
                                <ul class="nav nav-mainmenu flex-column p-0 m-0 mt-3">
                                    <?php /*<li class="nav-item">
            <a class="nav-link rounded<?php echo (get_instance()->uri->segment('1') == 'mpanel' && !get_instance()->uri->segment('2')) ? ' active' : ''; ?>"
               href="<?php echo base_url('mpanel'); ?>"><i class="icofont icofont-lg align-middle">frontend</i> پیشخوان
                مدیریت</a>
        </li>*/ ?>
                                    <li class="nav-item <?= Yii::$app->controller->id == 'notifications' ? 'open' : '' ?>">
                                        <a class="nav-link rounded <?= Yii::$app->controller->id == 'notifications' ? 'active' : '' ?>" href="<?= $url->createAbsoluteUrl(['notifications\index']) ?>"><i class="icofont icofont-lg align-middle">alarm</i>اعلان‌ها</a>
                                        <div class="nav-mainmenu-submenu rounded mt-2">
                                            <ul>
                                                <li><a href="<?= $url->createAbsoluteUrl(['notifications\index']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>">اعلان‌ها</a>
                                                </li>
                                                <li><a href="<?= $url->createAbsoluteUrl(['notifications\create']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'create' ? 'active' : '' ?>">اعلان
                                                        جدید</a>
                                                </li>
                                                <li><a href="<?= $url->createAbsoluteUrl(['notifications\sends']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'sends' ? 'active' : '' ?>">ارسال
                                                        شده‌ها</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item <?= Yii::$app->controller->id == 'demands' ? 'open' : '' ?>">
                                        <a class="nav-link rounded <?= Yii::$app->controller->id == 'demands' ? 'active' : '' ?>" href="<?= $url->createAbsoluteUrl(['demands\index']) ?>"><i class="icofont icofont-lg align-middle">tasks</i>درخواستها</a>
                                        <div class="nav-mainmenu-submenu rounded mt-2">
                                            <ul>
                                                <li><a href="<?= $url->createAbsoluteUrl(['demands\index']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>">درخواست
                                                        های ثبت شده</a>
                                                </li>
                                                <li><a href="<?= $url->createAbsoluteUrl(['demands\create']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'create' ? 'active' : '' ?>">درخواست
                                                        جدید</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item <?= Yii::$app->controller->id == 'posts' ? 'open' : '' ?>">
                                        <a class="nav-link rounded <?= Yii::$app->controller->id == 'posts' ? 'active' : '' ?>" href="<?= $url->createAbsoluteUrl(['posts\index']) ?>"><i class="icofont icofont-lg align-middle">paper</i><?= Yii::t('app', 'Posts') ?></a>
                                        <div class="nav-mainmenu-submenu rounded mt-2">
                                            <ul>
                                                <li><a href="<?= $url->createAbsoluteUrl(['posts\index']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>"><?= Yii::t('app', 'Posts') ?></a>
                                                </li>
                                                <li><a href="<?= $url->createAbsoluteUrl(['posts\create']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'create' ? 'active' : '' ?>"><?= Yii::t('app', 'Create Posts') ?></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item <?= Yii::$app->controller->id == 'categories' ? 'open' : '' ?>">
                                        <a class="nav-link rounded <?= Yii::$app->controller->id == 'categories' ? 'active' : '' ?>" href="<?= $url->createAbsoluteUrl(['categories\index']) ?>"><i class="icofont icofont-lg align-middle">listing_number</i><?= Yii::t('app', 'Categories') ?></a>
                                        <div class="nav-mainmenu-submenu rounded mt-2">
                                            <ul>
                                                <li><a href="<?= $url->createAbsoluteUrl(['categories\index']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>"><?= Yii::t('app', 'Categories') ?></a>
                                                </li>
                                                <li><a href="<?= $url->createAbsoluteUrl(['categories\create']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'create' ? 'active' : '' ?>"><?= Yii::t('app', 'Create Categories') ?></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item <?= Yii::$app->controller->id == 'profiles' ? 'open' : '' ?>">
                                        <a class="nav-link rounded <?= Yii::$app->controller->id == 'profiles' ? 'active' : '' ?>" href="<?= $url->createAbsoluteUrl(['profiles\index']) ?>"><i class="icofont icofont-lg align-middle">users_alt_4</i>مشتری‌ها</a>
                                        <div class="nav-mainmenu-submenu rounded mt-2">
                                            <ul>
                                                <li><a href="<?= $url->createAbsoluteUrl(['profiles\index']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>">مشتری‌ها</a>
                                                </li>
                                                <li><a href="<?= $url->createAbsoluteUrl(['profiles\create']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'create' ? 'active' : '' ?>">مشتری‌‌
                                                        جدید</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item <?= Yii::$app->controller->id == 'products' ? 'open' : '' ?>">
                                        <a class="nav-link rounded <?= Yii::$app->controller->id == 'products' ? 'active' : '' ?>" href="<?= $url->createAbsoluteUrl(['products\index']) ?>"><i class="icofont icofont-lg align-middle">box</i>محصولات</a>
                                        <div class="nav-mainmenu-submenu rounded mt-2">
                                            <ul>
                                                <li><a href="<?= $url->createAbsoluteUrl(['products\index']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>">محصولات</a>
                                                </li>
                                                <li><a href="<?= $url->createAbsoluteUrl(['products\create']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'create' ? 'active' : '' ?>">محصول‌جدید</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item <?= Yii::$app->controller->id == 'sliders' ? 'open' : '' ?>">
                                        <a class="nav-link rounded <?= Yii::$app->controller->id == 'sliders' ? 'active' : '' ?>" href="<?= $url->createAbsoluteUrl(['sliders\index']) ?>"><i class="icofont icofont-lg align-middle">slidshare</i><?= Yii::t('app', 'Sliders') ?></a>
                                        <div class="nav-mainmenu-submenu rounded mt-2">
                                            <ul>
                                                <li><a href="<?= $url->createAbsoluteUrl(['sliders\index']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>"><?= Yii::t('app', 'Sliders') ?></a>
                                                </li>
                                                <li><a href="<?= $url->createAbsoluteUrl(['sliders\create']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'create' ? 'active' : '' ?>"><?= Yii::t('app', 'Create Sliders') ?></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item <?= Yii::$app->controller->id == 'provinces' ? 'open' : '' ?>">
                                        <a class="nav-link rounded <?= Yii::$app->controller->id == 'provinces' ? 'active' : '' ?>" href="<?= $url->createAbsoluteUrl(['provinces\index']) ?>"><i class="icofont icofont-lg align-middle">map</i>استان‌ها</a>
                                        <div class="nav-mainmenu-submenu rounded mt-2">
                                            <ul>
                                                <li><a href="<?= $url->createAbsoluteUrl(['provinces\index']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>">استان‌ها</a>
                                                </li>
                                                <li><a href="<?= $url->createAbsoluteUrl(['provinces\create']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'create' ? 'active' : '' ?>">استان‌جدید</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item <?= Yii::$app->controller->id == 'cities' ? 'open' : '' ?>">
                                        <a class="nav-link rounded <?= Yii::$app->controller->id == 'cities' ? 'active' : '' ?>" href="<?= $url->createAbsoluteUrl(['cities\index']) ?>"><i class="icofont icofont-lg align-middle">map_pins</i>شهرستان‌ها</a>
                                        <div class="nav-mainmenu-submenu rounded mt-2">
                                            <ul>
                                                <li><a href="<?= $url->createAbsoluteUrl(['cities\index']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>">شهرستان‌ها</a>
                                                </li>
                                                <li><a href="<?= $url->createAbsoluteUrl(['cities\create']) ?>" class="rounded <?= Yii::$app->controller->action->id == 'create' ? 'active' : '' ?>">شهرستان‌جدید</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                                <div class="sidebar-footer text-center">
                                    <div class="d-inline-block bg-light text-muted small rounded px-2"><span class="fanum"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-8 col-lg-9 col-xl-10" id="page-content-area">
                <div id="page-content" class="px-sm-3">
                    <div class="card p-3 mr-5">
                        <?= $content ?>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="bg-light copyright">
                <div class="row align-items-center">
                    <div class="d-none d-lg-block col-4 col-lg-3 col-xl-2"></div>
                    <div class="col">
                        <div class="text-muted">تمامی حقوق پلتفرم <b><?= Yii::$app->name ?></b> برای شرکت <b class="text-info"><?= Yii::$app->name ?></b> میباشد محفوظ
                            است. هر گونه کپی برداری یا استفاده از متد های پلتفرم <b><?= Yii::$app->name ?></b> با پیگرد قانونی همراه خواهد
                            بود.
                        </div>
                    </div>
                </div>
            </div>


            <?php $this->endBody() ?>

</body>

</html>
<?php $this->endPage() ?>