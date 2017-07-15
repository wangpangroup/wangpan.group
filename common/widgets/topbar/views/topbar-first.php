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
use common\widgets\topbar\AccountDropdownWidget;
use yii\helpers\Html;
?>
<div id="topbar-first" class="topbar">
    <div class="container">
        <div class="topbar-brand hidden-xs">
            <?= Html::a(Yii::$app->name, Yii::$app->multiDomainsManager->get('www')->createAbsoluteUrl(['site/index']), ['class' => 'navbar-brand', 'id' => 'text-logo']) ?>
        </div>
        <div class="topbar-actions pull-right">
            <?= AccountDropdownWidget::widget() ?>
        </div>
    </div>
</div>