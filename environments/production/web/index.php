<?php

if (isset($_SERVER['BURI']) && $_SERVER['BURI'] == '/api/') {
    header(sprintf('Location: %s/%s', $_SERVER['BASE_URI'], 'api'));
    exit;
}

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');
$stand = isset($_SERVER['APPLICATION_ENV']) ? $_SERVER['APPLICATION_ENV'] : 'production';
//$config['params']['environment'] = $stand;

(new yii\web\Application($config))->run();

