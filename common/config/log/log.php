<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link https://vistart.me/
 * @copyright Copyright (c) 2016 - 2017 vistart
 * @license https://vistart.me/license/
 */

return [
    'traceLevel' => YII_DEBUG ? 3 : 0,
    'targets' => [
        'dbEmail' => [
            'class' => 'yii\log\EmailTarget',
            'levels' => YII_ENV_DEV ? ['error', 'warning'] : ['error'],
            'categories' => ['yii\db\*'],
            'message' => [
                'from' => ['webmonitor@wangpan.group'],
                'to' => ['webmaster@wangpan.group'],
                'subject' => 'Database errors at wangpan.group',
            ],
        ],
        'mongodbEmail' => [
            'class' => 'yii\log\EmailTarget',
            'levels' => YII_ENV_DEV ? ['error', 'warning'] : ['error'],
            'categories' => ['yii\mongodb\*'],
            'message' => [
                'from' => ['webmonitor@wangpan.group'],
                'to' => ['webmaster@wangpan.group'],
                'subject' => 'MongoDB errors wangpan.group',
            ],
        ],
        'redisEmail' => [
            'class' => 'yii\log\EmailTarget',
            'levels' => YII_ENV_DEV ? ['error', 'warning'] : ['error'],
            'categories' => ['yii\redis\*'],
            'message' => [
                'from' => ['webmonitor@wangpan.group'],
                'to' => ['webmaster@wangpan.group'],
                'subject' => 'Redis server errors at wangpan.group',
            ],
        ],
        /*
        'mongodb' => [
            'class' => 'yii\mongodb\log\MongoDbTarget',
            'levels' => YII_ENV_DEV ? 0 : ['error', 'warning'],
            'logCollection' => 'wangpan_group.log',
        ],*/
    ],
];
