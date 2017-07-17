<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    getParamsFromFile(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    getParamsFromFile(__DIR__ . '/params-local.php')
);

return [
    'id' => 'special_wangpan_group',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'special_wangpan_group\controllers',
    'components' => [
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => require('urlManager.php'),
    ],
    'params' => $params,
];
