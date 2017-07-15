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

use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $title1 string */
/* @var $title2 string */

?>
<?php if (Yii::$app->user->isGuest): ?>
    <?= Html::a("登录 / 注册", '#', ['class' => 'btn btn-enter']) ?>
<?php else: ?>
<ul class="nav">
    <li class="dropdown account">
        <a href="#" id="account-dropdown-link" class="dropdown-toggle" data-toggle="dropdown">

            <div class="user-title pull-left hidden-xs">
                <strong><?= $title1 ?></strong><br><span class="truncate"><?= $title2 ?></span>
            </div>

            <img id="user-account-image" class="img-rounded" height="32" width="32" alt="32x32" data-src="holder.js/32x32" style="width: 32px; height: 32px;">

            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu pull-right">
            <li>
                <a href="/u/vistart/user/profile/home">
                    <i class="fa fa-user"></i> 我的资料                            </a>
            </li>
            <li>
                <a href="/user/account/edit">
                    <i class="fa fa-edit"></i> 帐户设置                            </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="/hostinginfo/main">
                    <i class="fa fa-cloud"></i> Cloud Hosting                            </a>
            </li>
            <li>
                <a href="/admin">
                    <i class="fa fa-cogs"></i> 管理                            </a>
            </li>
            <li class="divider"></li>
            <li>
                <a id="account-logout" href="/user/auth/logout" data-pjax-prevent="">
                    <i class="fa fa-sign-out"></i> 退出                            </a>
            </li>
        </ul>
    </li>
</ul>
<?php endif; ?>
