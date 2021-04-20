<?php

$baseDir = dirname(dirname(dirname(__DIR__)));


return array (
  'components' => 
  array (
    'urlManager' => 
    array (
      'rules' => 
      array (
        0 => 
        array (
          'class' => 'skeeks\\cms\\components\\urlRules\\UrlRuleContentElement',
        ),
        1 => 
        array (
          'class' => 'skeeks\\cms\\components\\urlRules\\UrlRuleTree',
        ),
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\caching\\FileCache',
    ),
    'assetManager' => 
    array (
      'linkAssets' => false,
    ),
    'templateBoomerang' => 
    array (
      'class' => 'common\\components\\boomerang\\TemplateBoomerang',
    ),
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=skeeks',
      'username' => 'root',
      'password' => 'Derw45sh84',
      'charset' => 'utf8',
      'enableSchemaCache' => true,
      'schemaCacheDuration' => 3600,
    ),
  ),
  'bootstrap' => 
  array (
  ),
  'params' => NULL,
  'aliases' => 
  array (
    '@yii/debug' => $baseDir . '/vendor/yiisoft/yii2-debug/src',
  ),
);
