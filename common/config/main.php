<?php

use yii\web\JqueryAsset;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(__DIR__, 2) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'assetManager' => [
            'linkAssets' => true,
            'bundles' => [

//                \yii\web\JqueryAsset::class => [
//                    'sourcePath' => null,   // не опубликовывать комплект
//                    'basePath' => '@webroot/assets/jquery',
//                    'baseUrl' => '@web/assets/jquery',
//                    'js' => [
//                        'dist/jquery.min.js',
//                    ]
//                ],
//                \hail812\adminlte3\assets\FontAwesomeAsset::class => [
//                    'sourcePath' => null,
//                    'basePath' => '@webroot/assets/fontawesome-free',
//                    'baseUrl' => '@web/assets/fontawesome-free',
//                    'css' => [
//                        'css/all.min.css',
//                    ]
//                ],
//                \hail812\adminlte3\assets\AdminLteAsset::class => [
//                    'sourcePath' => null,
//                    'basePath' => '@webroot/assets/adminlte',
//                    'baseUrl' => '@web/assets/adminlte',
//                    'css' => [
//                        'css/adminlte.min.css',
//                    ],
//                    'js' => [
//                        'js/adminlte.min.js',
//                    ]
//                ],
//                \yii\bootstrap4\BootstrapAsset::class=>[
//                    'sourcePath' => null,
//                    'basePath' => '@webroot/assets/bootstrap',
//                    'baseUrl' => '@web/assets/bootstrap',
//                    'css' => [
//                        'css/bootstrap.min.css',
//                    ],
//
//                ],
//                \yii\bootstrap4\BootstrapPluginAsset::class=>[
//                    'sourcePath' => null,
//                    'basePath' => '@webroot/assets/bootstrap',
//                    'baseUrl' => '@web/assets/bootstrap',
//                    'js' => [
//                        'js/bootstrap.bundle.min.js',
//                    ]
//                ],



            ],
            ]
    ],
];
