<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\FrontAsset;

FrontAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<style>
    body {
        direction: rtl;
        text-align: right;
    }

    @keyframes hidePreloader {
        0% {
            width: 100%;
            height: 100%;
        }

        100% {
            width: 0;
            height: 0;
        }
    }

    body > div.preloader {
        position: fixed;
        background: white;
        width: 100%;
        height: 100%;
        z-index: 1071;
        opacity: 0;
        transition: opacity .5s ease;
        overflow: hidden;
        pointer-events: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    body:not(.loaded) > div.preloader {
        opacity: 1;
    }

    body:not(.loaded) {
        overflow: hidden;
    }

    body.loaded > div.preloader {
        animation: hidePreloader .5s linear .5s forwards;
    }
</style>
<script>
    window.addEventListener("load", function () {
        setTimeout(function () {
            document.querySelector('body').classList.add('loaded');
        }, 300);
    });
</script>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>

<!-- Preloader -->
<div class="preloader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">لطفا صبرکنید...</span>
    </div>
</div>
<!-- Header -->
<header class="header-transparent" id="header-main">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-dark bg-dark" id="navbar-main">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">
                <img alt="Image placeholder" src="../../web/dist/img/logo-p.png" id="navbar-logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse"
                    aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse navbar-collapse-overlay" id="navbar-main-collapse">
                <!-- Collapse header  -->
                <div class="collapse-header align-items-center">
                    <div class="col-6">
                        <a class="navbar-brand" href="index.html">
                            <img alt="Image placeholder" src="../../web/dist/img/logo-p.png">
                        </a>
                    </div>
                    <div class="col-6">
                        <!-- Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                </div>
                <!-- Navigation -->
                <ul class="navbar-nav ml-auto text-right">

                    <li class="nav-item ">
                        <a class="nav-link text-md-right" title="<?= Yii::t('app', 'home') ?>"
                           href="<?= Yii::$app->urlManager->createUrl(['frontend/home']) ?>"><?= Yii::t('app', 'home') ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= Yii::$app->urlManager->createUrl(['frontend/semesters']) ?>" id="navbarDropdown" role="button"
                           title="<?= Yii::t('app', 'semesters') ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= Yii::t('app', 'semesters') ?>
                        </a>
                        <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?=Yii::$app->urlManager->createUrl(['frontend/educational-calender'])?>"><?= Yii::t('app', 'Educational Calendar') ?></a>
                            <a class="dropdown-item" href="#"><?= Yii::t('app', 'Attendance Courses') ?></a>
                            <a class="dropdown-item" href="#"><?= Yii::t('app', 'Virtual Courses') ?></a>
                            <a class="dropdown-item" href="#"><?= Yii::t('app', 'Intra-organizational Courses') ?></a>
                            <a class="dropdown-item" href="#"><?= Yii::t('app', 'Professional Capital Market Qualifications') ?></a>
                            <a class="dropdown-item" href="#"><?= Yii::t('app', 'International Professional Qualifications') ?></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= Yii::$app->urlManager->createUrl(['frontend/semesters']) ?>" id="navbarDropdown" role="button"
                           title="<?= Yii::t('app', 'seminar-conference') ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= Yii::t('app', 'seminar-conference') ?>
                        </a>
                        <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><?= Yii::t('app', 'Specialized webinars') ?></a>
                            <a class="dropdown-item" href="#"><?= Yii::t('app', 'seminar-conference') ?></a>
                      </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-md-right" title="<?= Yii::t('app', 'consultation') ?>"
                           href="<?= Yii::$app->urlManager->createUrl(['frontend/consultation']) ?>"><?= Yii::t('app', 'consultation') ?></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-md-right" title="<?= Yii::t('app', 'blogs') ?>"
                           href="<?= Yii::$app->urlManager->createUrl(['frontend/blogs']) ?>"><?= Yii::t('app', 'blogs') ?></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-md-right" title="<?= Yii::t('app', 'about-us') ?>"
                           href="<?= Yii::$app->urlManager->createUrl(['frontend/about-us']) ?>"><?= Yii::t('app', 'about-us') ?></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-md-right" title="<?= Yii::t('app', 'contact-us') ?>"
                           href="<?= Yii::$app->urlManager->createUrl(['frontend/contact-us']) ?>"><?= Yii::t('app', 'contact-us') ?></a>
                    </li>
                    <?php if (!Yii::$app->user->isGuest): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= Yii::t('app', 'Profile') ?>(<? // =Yii::$app->user->identity->profile->full_name??Yii::$app->user->username?>)
                            </a>
                            <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"><?= Yii::t('app', 'Dashboard') ?></a>
                                <a class="dropdown-item" href="#"><?= Yii::t('app', 'Profile') ?></a>
                                <a class="dropdown-item" href="#"><?= Yii::t('app', 'Basket') ?></a>
                                <a class="dropdown-item" href="#"><?= Yii::t('app', 'Orders') ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><?= Yii::t('app', 'Transactions') ?></a>
                                <a class="dropdown-item" href="<?= Yii::$app->urlManager->createUrl(['site/logout']) ?>"><?= Yii::t('app', 'Logout') ?></a>
                            </div>
                        </li>
                    <?php else: ?>
                        <li class="nav-item ">
                            <a class="nav-link text-md-right" title="<?= Yii::t('app', 'login') ?>"
                               href="<?= Yii::$app->urlManager->createUrl(['site/login']) ?>"><?= Yii::t('app', 'Login') ?></a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <!-- Main content -->
    <?= $content ?>
    <!-- Main content -->
</div>

<footer id="footer-main">
    <div class="footer footer-light">
        <div class="container">
            <div class="row pt-md">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <!-- Icon -->
                            <img alt="Image placeholder"
                                 src="<?= Yii::$app->homeUrl ?>dist/assets/img/svg/icons/Apps.svg" class="img-fluid"
                                 style="width: 30px;">
                            <!-- Title -->
                            <h5 class="h6 font-weight-bold mt-4 mb-2" style="font-size: 1.2rem !important;">Quick</h5>
                            <!-- Text -->
                            <p class="text-sm mb-2">
                                An innovative HTML template solution which combines beautiful design and flawless
                                functionality.
                            </p>
                            <a href="https://themes.getbootstrap.com/product/quick-website-ui-kit/" class="text-sm">Purchase
                                now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 offset-lg-1 mb-5 mb-lg-0">
                    <h6 class="heading mb-3" style="font-size: 1.1rem !important;">Account</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" style="font-size: 1rem !important;">Profile</a></li>
                        <li><a href="#" style="font-size: 1rem !important;">Settings</a></li>
                        <li><a href="#" style="font-size: 1rem !important;">Billing</a></li>
                        <li><a href="#" style="font-size: 1rem !important;">Notifications</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3" style="font-size: 1.1rem !important;">About</h6>
                    <ul class="list-unstyled text-small">
                        <li><a href="#" style="font-size: 1rem !important;">Services</a></li>
                        <li><a href="#" style="font-size: 1rem !important;">Contact</a></li>
                        <li><a href="#" style="font-size: 1rem !important;">Careers</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3" style="font-size: 1.1rem !important;">Company</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" style="font-size: 1rem !important;">Terms</a></li>
                        <li><a href="#" style="font-size: 1rem !important;">Privacy</a></li>
                        <li><a href="#" style="font-size: 1rem !important;">Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center justify-content-md-between py-4 mt-4 border-top mx-0">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        © 2019 <a href="https://webpixels.io" class="font-weight-bold" target="_blank">Webpixels</a>.
                        All rights reserved.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav align-items-center justify-content-center justify-content-md-end">
                        <li class="nav-item dropdown border-right pr-2">
                            <a class="nav-link btn btn-xs btn-neutral" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <img alt="Image placeholder" src="" class="svg-inject icon-flag">
                                <span class="h6 text-sm mb-0">Romanian</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <a href="#" class="dropdown-item"><img alt="Image placeholder" src=""
                                                                       class="svg-inject icon-flag">Spanish</a>
                                <a href="#" class="dropdown-item"><img alt="Image placeholder" src=""
                                                                       class="svg-inject icon-flag">English</a>
                                <a href="#" class="dropdown-item"><img alt="Image placeholder" src=""
                                                                       class="svg-inject icon-flag">Greek</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-0" href="#">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
<!---begin GOFTINO code--->
<script type="text/javascript">
    !function () {
        var g = document.createElement("script"), s = "https://www.goftino.com/widget/fCzCa3",
            e = document.getElementsByTagName("script")[0];
        g.type = "text/javascript";
        g.async = !0;
        g.src = localStorage.getItem("goftino") ? s + "?o=" + localStorage.getItem("goftino") : s;
        e.parentNode.insertBefore(g, e);
    }();
    var mySwiper = new Swiper('.swiper-container', {
        speed: 400,
        spaceBetween: 100
    });
</script>

<!---end GOFTINO code--->
</html>
<?php $this->endPage() ?>
