Component seo for SkeekS CMS
===================================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist skeeks/cms-seo "*"
```

or add

```
"skeeks/cms-seo": "*"
```

Configuration app
----------

```php

'bootstrap' => ['seo'],

'components' =>
[
    'seo' => [
        'class'     => 'skeeks\cms\seo\CmsSeoComponent',
        
        'canUrl' => [
            'scheme' => 'https',
            'host' => 'site.ru',
        ],
        
        
    ],

    'i18n' => [
        'translations' =>
        [
            'skeeks/seo' => [
                'class'             => 'yii\i18n\PhpMessageSource',
                'basePath'          => '@skeeks/cms/seo/messages',
                'fileMap' => [
                    'skeeks/seo' => 'main.php',
                ],
            ]
        ]
    ],

    'urlManager' => [
        'rules' => [
            'robots.txt'                  => '/seo/robots/on-request',
            'sitemap.xml'                 => '/seo/sitemap/on-request',
        ]
    ]
],

'modules' =>
[
    'seo' => [
        'class'         => 'skeeks\cms\seo\CmsSeoModule',
    ]
]

```

___

> [![skeeks!](https://skeeks.com/img/logo/logo-no-title-80px.png)](https://skeeks.com)  
<i>SkeekS CMS (Yii2) — quickly, easily and effectively!</i>  
[skeeks.com](https://skeeks.com) | [cms.skeeks.com](https://cms.skeeks.com)


