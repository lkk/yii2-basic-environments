<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host={host};dbname={dbname}',
    'username' => '',
    'password' => '',
    'charset' => 'utf8',
    'schemaCacheDuration' => 3600 * 24, // cache DB schemas for 1 day
    'enableSchemaCache' => true,
    'schemaCache' => 'cache',
];
