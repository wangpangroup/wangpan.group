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

namespace common\components\web;

use yii\web\Application as WebApplication;

/**
 * Class Application
 * @package common\components\web
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class Application extends WebApplication
{
    /**
     * @return null|object
     */
    public function getMultiDomainsManager()
    {
        return $this->get('multiDomainsManager');
    }

    /**
     * @return array
     */
    public function coreComponents()
    {
        return array_merge(parent::coreComponents(), [
            'multiDomainsManager' => ['class' => 'common\components\web\MultiDomainsManager'],
            'user' => ['class' => 'common\components\web\SSOUser'],
        ]);
    }
}
