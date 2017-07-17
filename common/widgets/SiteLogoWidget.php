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

namespace common\widgets;

use yii\base\Widget;

/**
 * Class SiteLogoWidget
 * @package common\widgets
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class SiteLogoWidget extends Widget
{
    const PLACE_TOP_MENU = 'topmenu';
    const PLACE_LOGIN = 'login';

    /**
     * @var string
     */
    public $place = self::PLACE_TOP_MENU;

    /**
     * @return string
     */
    public function run()
    {
        return $this->render('site-logo', ['logo' => '', 'place' => $this->place]);
    }
}
