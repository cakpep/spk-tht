<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
            'admin' => [
                'class' => 'mdm\admin\Module',
                 // 'layout' => 'right-menu' , //'left-menu', // default null. other avaliable value 'right-menu' 
            ],
        
    ],
    'as access' => [
            'class' => 'mdm\admin\components\AccessControl',
            /*'allowActions' => [
                'admin/*', // add or remove allowed actions to this list
            ]*/
        ],
    'components' => [
                /*'request' => [
                    'csrfParam' => '_backendCSRF',
                    'csrfCookie' => [
                        'httpOnly' => true,
                        'path' => '/adm',
                    ],
                ],
                'user' => [
                    'identityCookie' => [
                        'name' => '_backendIdentity',
                        'path' => '/adm',
                        'httpOnly' => true,
                    ],
                ],
                'session' => [
                    'name' => 'BACKENDSESSID',
                    'cookieParams' => [
                        'path' => '/adm',
                    ],
                ],*/
        'authManager' => [
            'class' => 'yii\rbac\DbManager', //'yii\rbac\PhpManager', 
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
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
        'tcpdf' => [
            'class' => 'cinghie\tcpdf\TCPDF',
        ],
    ],
    'params' => $params,
];
