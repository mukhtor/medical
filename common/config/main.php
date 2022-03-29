<?php

use hail812\adminlte3\assets\AdminLteAsset;
use hail812\adminlte3\assets\FontAwesomeAsset;
use hail812\adminlte3\assets\PluginAsset;
use yii\bootstrap4\BootstrapAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\gii\GiiAsset;
use yii\web\JqueryAsset;
use yii\widgets\MaskedInputAsset;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(__DIR__, 2) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'assetManager' => [
            'linkAssets' => true,
            'bundles' => [
                JqueryAsset::class => [
                    'sourcePath' => null,
                    'js' => [
                        '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
                    ]
                ],
                FontAwesomeAsset::class => [
                    'sourcePath' => null,
                    'css' => [
                        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
                    ]
                ],
                AdminLteAsset::class => [
                    'sourcePath' => null,
                    'css' => [
                        'https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css',
                    ],
                    'js' => [
                        'https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js',
                    ]
                ],
                BootstrapAsset::class => [
                    'sourcePath' => null,
                    'css' => [
                        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css',
                    ],

                ],
                BootstrapPluginAsset::class => [
                    'sourcePath' => null,
                    'js' => [
                        '//cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js',
                    ]
                ],
                PluginAsset::class => [
                    'sourcePath' => null,
                ],

//                GiiAsset::class => [
//                    'sourcePath' => null,
//                    'js' => [
//                        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap.native/4.1.2/bootstrap-native.min.js'
//                    ]
//
//                ],


            ],
        ]
    ],
];
