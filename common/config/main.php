<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'authManager' => [
        'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        ],
        'user' => [
        'identityClass' => 'mdm\admin\models\User',
        'loginUrl' => ['admin/user/login'],
        ],
    ],
    'modules' => [
    'admin' => [
        'class' => 'mdm\admin\Module',
    ]
],
];
