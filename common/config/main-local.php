<?php

$config = [
    'components' => [
        'db' => getParamsFromFile(__DIR__ . '/db/db-local.php'),
        'log' => getParamsFromFile(__DIR__ . '/log/log-local.php'),
        'mailer' => getParamsFromFile(__DIR__ . '/mailer/mailer-local.php'),
        'redis' => getParamsFromFile(__DIR__ . '/redis/redis-local.php'),
        'request' => getParamsFromFile(__DIR__ . '/request/request-local.php'),
        'session' => getParamsFromFile(__DIR__ . '/redis/session-local.php'),
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
