<?php

return [
    'class' => '\yii\mongodb\Connection',
    'dsn'   => 'mongodb://{host}:27017/{document}',
    'options' => [
        'socketTimeoutMS' => 120000
    ]
];
