<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => require(__DIR__ . '/bootstrap/bootstrap.php'),
    'modules' => require(__DIR__ . '/modules/modules.php'),
    'catchAll' => ['offline/under-construction'],
    'components' => [
        'assetManager' => require(__DIR__ . '/assetManager/assetManager.php'),
        'authManager' => require(__DIR__ . '/authManager/authManager.php'),
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => require(__DIR__ . '/db/db.php'),
        'formatter' => require(__DIR__ . '/formatter/formatter.php'),
        'i18n' => require(__DIR__ . '/i18n/i18n.php'),
        'log' => require(__DIR__ . '/log/log.php'),
        'mailer' => require(__DIR__ . '/mailer/mailer.php'),
        'multiDomainsManager' => require(__DIR__ . '/mdManager/multiDomainsManager.php'),
        'redis' => require(__DIR__ . '/redis/redis.php'),
        'request' => getParamsFromFile(__DIR__ . '/request/request-local.php', require(__DIR__ . '/request/request.php')),
        'session' => require(__DIR__ . '/redis/session.php'),
        'user' => require(__DIR__ . '/user/user.php'),
    ],
    'on beforeRequest' => function ($event) {
        $sender = $event->sender;
        /* @var $sender yii\web\Application */
        $sender->language = $sender->request->getPreferredLanguage(['en-US', 'zh-CN']);
        \Yii::trace("Determined language: {$sender->language}", __METHOD__);
    },
    'name' => '网盘组',
];
