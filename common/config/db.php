<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 18.11.2017
 */
return
[
    'components'    => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=skeeks',
            'username' => 'root',
            'password' => 'Derw45sh84',
            //'dsn' => 'pgsql:host=localhost;dbname=test',
            //'username' => 'test',
            //'password' => 'gk-wIJI4OMIYqOJ4EfW1jD1Yj',
            'charset' => 'utf8',
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 3600,
        ]
    ]
];
