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
    'class' => 'common\components\web\SSOUser',
    'identityClass' => 'common\models\user\User',
    'enableAutoLogin' => true,
    'identityCookie' => require(__DIR__ . '/identityCookie.php'),
];
