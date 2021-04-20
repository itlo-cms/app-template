<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 10.11.2017
 */
return [

    'basePath' => "@root/frontend",

    'controllerNamespace' => 'frontend\controllers',

    'components' => [
        'view' => [
            'theme' => [
                'class' => \skeeks\cms\cmsbasic\DefaultTheme::class,
            ],
        ],
    ],
];