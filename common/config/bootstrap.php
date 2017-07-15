<?php

Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@admin_wangpan_group', dirname(dirname(__DIR__)) . '/admin.wangpan.group');
Yii::setAlias('@api_wangpan_group', dirname(dirname(__DIR__)) . '/api.wangpan.group');
Yii::setAlias('@dev_wangpan_group', dirname(dirname(__DIR__)) . '/dev.wangpan.group');
Yii::setAlias('@go_wangpan_group', dirname(dirname(__DIR__)) . '/go.wangpan.group');
Yii::setAlias('@my_wangpan_group', dirname(dirname(__DIR__)) . '/my.wangpan.group');
Yii::setAlias('@post_wangpan_group', dirname(dirname(__DIR__)) . '/post.wangpan.group');
Yii::setAlias('@reg_wangpan_group', dirname(dirname(__DIR__)) . '/reg.wangpan.group');
Yii::setAlias('@sso_wangpan_group', dirname(dirname(__DIR__)) . '/sso.wangpan.group');
Yii::setAlias('@special_wangpan_group', dirname(dirname(__DIR__)) . '/special.wangpan.group');
Yii::setAlias('@user_wangpan_group', dirname(dirname(__DIR__)) . '/user.wangpan.group');
Yii::setAlias('@www_wangpan_group', dirname(dirname(__DIR__)) . '/www.wangpan.group');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

function getParamsFromFile($file, $default = [])
{
    return file_exists($file) ? require ($file) : $default;
}

$baseDomain = getParamsFromFile(__DIR__ . '/base/baseDomain-local.php', getParamsFromFile(__DIR__ . '/base/baseDomain.php', 'wangpan.group'));
defined('BASE_DOMAIN') or define('BASE_DOMAIN', $baseDomain);
