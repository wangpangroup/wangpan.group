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

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Wangpan Group, used for sharing links.">
        <meta name="author" content="vistart">
        <link href="https://cdn.bootcss.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Yii::getAlias("@web") ?>/css/narrow-jumbotron.css" rel="stylesheet">
        <link href="favicon.ico" rel="icon">
        <title><?= Html::encode(Yii::$app->name) ?></title>
    </head>
    <body>
        <div class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills float-right">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">首页 <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </nav>
                <h3 class="text-muted"><?= Html::encode(Yii::$app->name) ?></h3>
            </div>
            <div class="jumbotron">
                <?= $content ?>
            </div>
            <div class="row marketing">
                <div class="col-lg-6">
                    <h4>分发链接</h4>
                    <p>发布并分享您的网盘链接。</p>
                    <h4>Share links</h4>
                    <p>Publish your web links and share them.</p>
                </div>
                <div class="col-lg-6">
                    <h4>回收链接</h4>
                    <p>从文章回复中回收网盘链接。</p>
                    <h4>Recollect links</h4>
                    <p>Recollect web links from article reply.</p>
                </div>
            </div>
            <footer class="footer">
                <div style="margin:0 auto; text-align:center">© vistart 2017</div>
            </footer>
        </div>
        <div style="display: none">
            <?= \vistart\Widgets\CnzzWidget::widget(['cnzzCode' => Yii::$app->params['cnzz'], 'host' => 'www.wangpan.group']) ?>
        </div>
        <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.bootcss.com/tether/1.4.0/js/tether.min.js"></script>
        <script type="text/javascript" src="https://cdn.bootcss.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    </body>
</html>
