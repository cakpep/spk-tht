<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'timeZone' => 'Asia/Jakarta',
    'components' => [
    	/*'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],*/
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=diagnosa_tht',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        
        
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'authManager' => [
            'class' =>'yii\rbac\DbManager' // 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // 'viewPath' => '@backend/mail',
            // 'viewPath' => '@app/mailer',
            // send all mails to a file by default. You have to set
            'useFileTransport' => false,// 'useFileTransport' to false and configure a transport  for the mailer to send real emails.
            
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'febrimaschut@gmail.com',
                'password' => 'febrimaschutwicaksono',
                'port' => '587',//587',//465',
                'encryption' => 'tls',
            ],
         
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
