<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'access' => ['@'],
//						'uploadMaxSize'=>'2M',
            'roots' => [
                //   'global'=>[
                //      'baseUrl'=>'https://urdu.uz',
                //       'basePath'=>Yii::getAlias('@public'),
                //       'path'=>'/uploads/global/',
                //       'name' => 'Global'
                //   ],
                //   'users'=>[
                //       'baseUrl'=>'https://urdu.uz',
                //       'basePath'=>Yii::getAlias('@public'),
                //       'path'=>'/uploads/users/',
                //       'name' => 'Users'
                //  ],
                'Documents' => [
                    'baseUrl' => 'http://medical.loc/uploads',
                    'class' => 'mihaildev\elfinder\volume\UserPath',
                    'basePath' => Yii::getAlias('@uploads'),
                    'path' => 'user_files/user_{id}',
                    'name' => 'My Documents',

                ],

                /**
                 * 'my'=> [
                 * 'path'   => '/my/some/',
                 * 'basePath'=>Yii::getAlias('@public'),
                 * 'name'   => ['category' => 'my','message' => 'Some Name'],
                 * 'access' => ['read' => '*', 'write' => 'UserFilesAccess'] ,
                 * ]*/
            ],
        ],
    ],
    'homeUrl' => '/admin',

    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
            'baseUrl' => '/admin',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'assetManager' => [
            'class' => \yii\web\AssetManager::class,
            'bundles' => [
                'linkAssets' => true,
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

        ],

    ],
    'params' => $params,
];
