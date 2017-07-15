Configuring Composer
====================

After the project template is installed it's a good idea to adjust default `composer.json` that can be found in the root
directory:

```json
{
    "name": "wangpangroup/wangpan.group",
    "description": "Wangpan Group, used for sharing links. (Developed by rhosocial)",
    "keywords": ["wangpan", "group", "netdisk", "share", "link", "rhosocial"],
    "homepage": "https://dev.wangpan.group/",
    "type": "project",
    "license": "AGPLv3",
    "minimum-stability": "dev",
    "require": {
        "php": ">=5.6.0",
        "yiisoft/yii2": "~2.0.12",
        "yiisoft/yii2-bootstrap": "~2.0.6",
        "yiisoft/yii2-swiftmailer": "~2.0.7",
        "rhosocial/helpers": "^1.0",
        "rhosocial/yii2-base-models": ">=1.1.0",
        "rhosocial/yii2-user": "dev-master",
        "rhosocial/yii2-organization": "dev-master",
        "rhosocial/yii2-assets": "dev-master",
        "yiisoft/yii2-redis": "*",
        "yiisoft/yii2-mongodb": "~2.1"
    },
    "require-dev": {
        "yiisoft/yii2-debug": "~2.0.9",
        "yiisoft/yii2-gii": "~2.0.5",
        "yiisoft/yii2-faker": "~2.0.3",
        "codeception/base": "^2.2.3",
        "codeception/verify": "~0.3.1",
        "codeception/specify": "~0.4.3"
    },
    "config": {
        "process-timeout": 1800
    }
}
```

First we're updating basic information. Change `name`, `description`, `keywords`, `homepage` and `support` to match
your project.

Now the interesting part. You can add more packages your application needs to the `require` section.
All these packages are coming from [packagist.org](https://packagist.org/) so feel free to browse the website for useful code.

After your `composer.json` is changed you can run `composer update --prefer-dist`, wait till packages are downloaded and
installed and then just use them. Autoloading of classes will be handled automatically.
