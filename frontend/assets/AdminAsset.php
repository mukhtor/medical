<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/style';
    public $css = [
        'css/style.css',
        'css/site.min.css',
        'css/special.css',
        'css/cards-gallery.css',
        'plugins/icofont/icofont.min.css',
//        'plugins/icomoon/style.css',
//        'plugins/icomoon/demo-files/demo.css',
//        'plugins/slick-carousel/slick/slick.css',
//        'plugins/slick-carousel/slick/slick-theme.css',

    ];
    public $js = [
        'js/contact.js',
        'js/script.js',
        'js/jquery-ui.js',
        'js/jquery.cookie.min.js',
        'js/specialView.js',
//        'js/specialview2.js',
        'js/custom.js',
        'plugins/counterup/jquery.easing.js',
        'plugins/counterup/jquery.waypoints.min.js',
        'plugins/shuffle/shuffle.min.js',
        'plugins/counterup/jquery.counterup.min.js',
        'plugins/google-map/map.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}