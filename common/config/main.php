<?php

use yii\web\JqueryAsset;

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
                \yii\web\JqueryAsset::class => [
                    'sourcePath' => null,
                    'js' => [
                        '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
                    ]
                ],
                \hail812\adminlte3\assets\FontAwesomeAsset::class => [
                    'sourcePath' => null,
                    'css' => [
                        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
                    ]
                ],
                \hail812\adminlte3\assets\AdminLteAsset::class => [
                    'sourcePath' => null,
                    'css' => [
                        'https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css',
                    ],
                    'js' => [
                        'https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js',
                    ]
                ],
                \yii\bootstrap4\BootstrapAsset::class => [
                    'sourcePath' => null,
                    'css' => [
                        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css',
                    ],

                ],
                \yii\bootstrap4\BootstrapPluginAsset::class => [
                    'sourcePath' => null,
                    'js' => [
                        '//cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js',
                    ]
                ],
                \hail812\adminlte3\assets\PluginAsset::class => [
                    'sourcePath' => null,
                ],

                \yii\gii\GiiAsset::class => [
                    'sourcePath' => null,
                    'js'=>[
                        '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
                    ]

                ]

            ],
        ]
    ],
];
