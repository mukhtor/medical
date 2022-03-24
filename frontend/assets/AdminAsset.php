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
        'css/cards-gallery.css',
        'plugins/bootstrap/css/bootstrap.min.css',
        'plugins/icofont/icofont.min.css',
        'plugins/slick-carousel/slick/slick.css',
        'plugins/slick-carousel/slick/slick-theme.css',
    ];
    public $js = [
        'js/contact.js',
        'js/script.js',
        'js/specialview.js',
        'plugins/jquery/jquery.js',
        'plugins/bootstrap/js/popper.js',
        'plugins/bootstrap/js/bootstrap.min.js',
        'plugins/counterup/jquery.easing.js',
        'plugins/slick-carousel/slick/slick.min.js',
        'plugins/slick-carousel/slick/slick.js',
        'plugins/counterup/jquery.waypoints.min.js',
        'plugins/shuffle/shuffle.min.js',
        'plugins/counterup/jquery.counterup.min.js',
        'plugins/google-map/map.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}