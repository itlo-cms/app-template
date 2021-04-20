<?php

$baseDir = dirname(__DIR__, 3);

$_ENV = array_merge((array) require __DIR__ . '/envs.php', $_ENV);



$params = (array) require __DIR__ . '/params.php';

return [
    'yiisoft/yii2-composer' => [
        'name' => 'yiisoft/yii2-composer',
        'version' => '2.0.8.0',
        'reference' => '5c7ca9836cf80b34db265332a7f2f8438eb469b9',
    ],
    'ezyang/htmlpurifier' => [
        'name' => 'ezyang/htmlpurifier',
        'version' => '4.12.0.0',
        'reference' => 'a617e55bc62a87eec73bd456d146d134ad716f03',
    ],
    'cebe/markdown' => [
        'name' => 'cebe/markdown',
        'version' => '1.2.1.0',
        'reference' => '9bac5e971dd391e2802dca5400bbeacbaea9eb86',
    ],
    'bower-asset/jquery' => [
        'name' => 'bower-asset/jquery',
        'version' => '2.2.4.0',
        'reference' => 'c0185ab7c75aab88762c5aae780b9d83b80eda72',
    ],
    'bower-asset/inputmask' => [
        'name' => 'bower-asset/inputmask',
        'version' => '3.3.11.0',
        'reference' => '5e670ad62f50c738388d4dcec78d2888505ad77b',
    ],
    'bower-asset/punycode' => [
        'name' => 'bower-asset/punycode',
        'version' => '1.3.2.0',
        'reference' => '38c8d3131a82567bfef18da09f7f4db68c84f8a3',
    ],
    'bower-asset/yii2-pjax' => [
        'name' => 'bower-asset/yii2-pjax',
        'version' => '2.0.7.1',
        'reference' => 'aef7b953107264f00234902a3880eb50dafc48be',
    ],
    'yiisoft/yii2' => [
        'name' => 'yiisoft/yii2',
        'version' => '2.0.31.0',
        'reference' => '0329b2db8bbf9719b1add17d6defd2d6045b4f09',
    ],
    'opis/closure' => [
        'name' => 'opis/closure',
        'version' => '3.5.1.0',
        'reference' => '93ebc5712cdad8d5f489b500c59d122df2e53969',
    ],
    'yiisoft/yii2-debug' => [
        'name' => 'yiisoft/yii2-debug',
        'version' => '2.1.12.0',
        'reference' => 'bf9234ba1369116d12ebe266d98006416a5ae304',
    ],
    'itlo/app-template' => [
        'name' => 'itlo/app-template',
        'version' => '0.0.1.0',
    ],
];
