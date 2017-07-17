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

namespace www_wangpan_group\controllers;

use yii\web\Controller;

/**
 * Class OfflineController
 * @package www_wangpan_group\controllers
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class OfflineController extends Controller
{
    /**
     * @inheritdoc
     */
    public $layout = "@www_wangpan_group/views/layouts/offline";

    /**
     * @return string
     */
    public function actionUnderConstruction()
    {
        return $this->render('under-construction');
    }
}
