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

/* @var $logo string */
/* @var $place string */

use common\widgets\SiteLogoWidget;
use yii\helpers\Html;
?>

<?php if ($place == SiteLogoWidget::PLACE_TOP_MENU): ?>
    <a class="navbar-brand" href="<?= Yii::$app->homeUrl; ?>" id="text-logo">
        <?= Html::encode(Yii::$app->name); ?>
    </a>
<?php elseif ($place == SiteLogoWidget::PLACE_LOGIN): ?>
    <h1 id="app-title" class="animated fadeIn"><?= Html::encode(Yii::$app->name); ?></h1>
<?php endif; ?>
