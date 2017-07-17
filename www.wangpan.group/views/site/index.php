<?php

/* @var $this yii\web\View */

$this->title = '网盘组';
?>
<div class="site-index">

    <div class="jumbotron">
    </div>

    <div class="body-content">
        <?= Yii::$app->multiDomainsManager->getCurrent()->createAbsoluteUrl(['offline/under-construction']) ?>
    </div>
</div>
