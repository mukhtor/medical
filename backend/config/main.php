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
    ],
    'params' => $params,
];
