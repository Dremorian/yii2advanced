<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'name' => 'Организации',
    'language' => 'ru-RU',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'user' => [
            'identityClass' => 'common\models\Customer',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
                ['class' => 'yii\rest\UrlRule', 'controller' => 'street', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'group', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'house', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'man', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'man_house', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'price', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'counter', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'indication', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'pay', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'testimony', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'deposit', 'pluralize' => false],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'history', 'pluralize' => false]
            ],
        ],
    ],
    'params' => $params,
];
