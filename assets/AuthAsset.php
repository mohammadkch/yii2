<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Site backend application asset bundle.
 */
class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'dist/js/jquery-3.2.1.min.js',
        'dist/css/bootstrap.min.css',
        'dist/css/icofont.min.css',
        'dist/css/base.css',
        'dist/css/rtl.css',
        'dist/css/authentication.css'


    ];
    public $js = [
//        'dist/js/jquery-3.3.1.slim.min.js',
        'dist/js/popper.min.js',
        'dist/js/bootstrap.min.js',
        ];
    public $depends = [
    //    'yii\web\YiiAsset',
    //    'yii\bootstrap\BootstrapAsset',
    ];
}
