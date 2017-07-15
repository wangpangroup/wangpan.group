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
    'class' => 'common\components\web\MultiDomainsManager',
    'baseDomain' => $baseDomain,
    'subDomains' => [
        'admin' => [
            'component' => require(__DIR__ . '/../../../admin.wangpan.group/config/urlManager.php'),
        ],
        'api' => [
            'component' => require(__DIR__ . '/../../../api.wangpan.group/config/urlManager.php'),
        ],
        'go' => [
            'component' => require(__DIR__ . '/../../../go.wangpan.group/config/urlManager.php'),
        ],
        'my' => [
            'component' => require(__DIR__ . '/../../../my.wangpan.group/config/urlManager.php'),
        ],
        'post' => [
            'component' => require(__DIR__ . '/../../../post.wangpan.group/config/urlManager.php'),
        ],
        'reg' => [
            'component' => require(__DIR__ . '/../../../reg.wangpan.group/config/urlManager.php'),
        ],
        'special' => [
            'component' => require(__DIR__ . '/../../../special.wangpan.group/config/urlManager.php'),
        ],
        'sso' => [
            'component' => require(__DIR__ . '/../../../sso.wangpan.group/config/urlManager.php'),
        ],
        'user' => [
            'component' => require(__DIR__ . '/../../../user.wangpan.group/config/urlManager.php'),
        ],
        'www' => [
            'component' => require(__DIR__ . '/../../../www.wangpan.group/config/urlManager.php'),
        ],
    ],
];
