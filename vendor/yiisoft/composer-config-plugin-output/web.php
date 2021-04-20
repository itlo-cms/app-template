<?php

$baseDir = dirname(__DIR__, 3);

$_ENV = array_merge((array) require __DIR__ . '/envs.php', $_ENV);



$params = (array) require __DIR__ . '/params.php';

return [
    'components' => [
        'urlManager' => [
            'rules' => [
                [
                    'class' => 'skeeks\\cms\\components\\urlRules\\UrlRuleContentElement',
                ],
                [
                    'class' => 'skeeks\\cms\\components\\urlRules\\UrlRuleTree',
                ],
            ],
        ],
        'cache' => [
            'class' => 'yii\\caching\\FileCache',
        ],
        'assetManager' => [
            'linkAssets' => false,
        ],
        'templateBoomerang' => [
            'class' => 'common\\components\\boomerang\\TemplateBoomerang',
        ],
        'db' => [
            'class' => 'yii\\db\\Connection',
            'dsn' => 'mysql:host=localhost;dbname=skeeks',
            'username' => 'root',
            'password' => 'Derw45sh84',
            'charset' => 'utf8',
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 3600,
        ],
        'request' => [
            'cookieValidationKey' => 'skeeks2',
        ],
        'user' => [
            'identityClass' => 'common\\models\\User',
        ],
    ],
    'params' => [],
    'on beforeRequest' => function ($event) {
         \Yii::setAlias('template', '@app/views');
    },
];
