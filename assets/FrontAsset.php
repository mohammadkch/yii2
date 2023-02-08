<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class FrontAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'css/site.css',
        'dist/assets/libs/swiper/dist/css/swiper.min.cs',
        'dist/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css',
        'dist/assets/libs/@fortawesome/fontawesome-free/css/all.min.css',
        'dist/assets/css/quick-website.css',
        'dist/assets/libs/animate.css/animate.min.css',
        'dist/assets/libs/swiper/dist/css/swiper.min.css',
        'dist/assets/libs/swiper/swiper.min.css'
    ];
    public $js = [
        'dist/assets/libs/typed.js/lib/typed.min.js',
        'dist/assets/libs/swiper/dist/js/swiper.min.js',
        'dist/assets/libs/jquery/dist/jquery.min.js',
        'dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js',
        'dist/assets/libs/in-view/dist/in-view.min.js',
        'dist/assets/libs/sticky-kit/dist/sticky-kit.min.js',
        'dist/assets/libs/svg-injector/dist/svg-injector.min.js',
        'dist/assets/libs/feather-icons/dist/feather.min.js',
        'dist/assets/libs/imagesloaded/imagesloaded.pkgd.min.js',
        'dist/assets/libs/jquery.scrollbar/jquery.scrollbar.min.js',
        'dist/assets/libs/jquery-scroll-lock/dist/jquery-scrollLock.min.js',
        'dist/assets/libs/swiper/dist/js/swiper.min.js',
        'dist/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js',
        'dist/assets/js/quick-website.js',
    ];
    public $depends = [
        //        'yii\web\YiiAsset',
        //        'yii\bootstrap\BootstrapAsset',
    ];
}
