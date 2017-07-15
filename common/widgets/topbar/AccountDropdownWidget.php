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
 * Class AccountDropdownWidget
 * @package common\widgets\topbar
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class AccountDropdownWidget extends Widget
{
    /**
     * @var string
     */
    public $title1 = '';

    /**
     * @var string
     */
    public $title2 = '';

    /**
     * @return string
     */
    public function run()
    {
        return $this->render('account-dropdown', ['title1' => $this->title1, 'title2' => $this->title2]);
    }
}
