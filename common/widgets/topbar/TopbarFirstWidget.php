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

namespace common\widgets\topbar;

use yii\base\Widget;

/**
 * Class TopbarFirstWidget
 * @package common\widgets\topbar
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class TopbarFirstWidget extends Widget
{
    public function run()
    {
        return $this->render('topbar-first');
    }
}
