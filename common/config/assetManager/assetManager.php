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

use yii\web\View;

return [
    'bundles' => [
        'yii\web\JqueryAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/jquery/2.2.4/jquery.js' : 'https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js',
            ],
            'jsOptions' => [
                'position' => View::POS_HEAD,
            ],
        ],
        'yii\bootstrap\BootstrapAsset' => [
            'sourcePath' => null,
            'css' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css' : 'https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css',
            ],
        ],
        'yii\bootstrap\BootstrapPluginAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js' : 'https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js',
            ],
            'jsOptions' => [
                'position' => View::POS_HEAD,
            ],
        ],
        'yii\gii\TypeAheadAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/typeahead.js/0.11.1/typeahead.bundle.js' : 'https://cdn.bootcss.com/typeahead.js/0.11.1/typeahead.bundle.min.js',
            ],
        ],
        'rhosocial\assets\HolderAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/holder/2.9.4/holder.js' : 'https://cdn.bootcss.com/holder/2.9.4/holder.min.js',
            ],
        ],
        'rhosocial\assets\JqueryKnobAsset' => [
            'sourcePath' => null,
            'js' => [
                'https://cdn.bootcss.com/jQuery-Knob/1.2.13/jquery.knob.min.js',
            ],
        ],
        'rhosocial\assets\AnimateCssAsset' => [
            'sourcePath' => null,
            'css' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/animate.css/3.5.2/animate.css' : 'https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css',
            ],
        ],
        'rhosocial\assets\AtJsAsset' => [
            'sourcePath' => null,
            'css' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/at.js/1.5.4/css/jquery.atwho.css' : 'https://cdn.bootcss.com/at.js/1.5.4/css/jquery.atwho.min.css',
            ],
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/at.js/1.5.4/js/jquery.atwho.js' : 'https://cdn.bootcss.com/at.js/1.5.4/js/jquery.atwho.min.js',
            ],
        ],
        'rhosocial\assets\AutosizeAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/autosize.js/3.0.21/autosize.js' : 'https://cdn.bootcss.com/autosize.js/3.0.21/autosize.min.js',
            ],
        ],
        'rhosocial\assets\BluebirdAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/bluebird/3.5.0/bluebird.js' : 'https://cdn.bootcss.com/bluebird/3.5.0/bluebird.min.js',
            ],
        ],
        'rhosocial\assets\BlueimpFileUploadAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/blueimp-file-upload/9.18.0/js/jquery.fileupload.js' : 'https://cdn.bootcss.com/blueimp-file-upload/9.18.0/js/jquery.fileupload.min.js',
                YII_ENV_DEV ? 'https://cdn.bootcss.com/blueimp-file-upload/9.18.0/js/jquery.iframe-transport.js' : 'https://cdn.bootcss.com/blueimp-file-upload/9.18.0/js/jquery.iframe-transport.min.js',
            ],
        ],
        'rhosocial\assets\BlueimpGalleryAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/blueimp-gallery/2.25.2/js/blueimp-gallery.js' : 'https://cdn.bootcss.com/blueimp-gallery/2.25.2/js/blueimp-gallery.min.js',
            ],
            'css' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/blueimp-gallery/2.25.2/css/blueimp-gallery.css' : 'https://cdn.bootcss.com/blueimp-gallery/2.25.2/css/blueimp-gallery.min.css',
            ],
        ],
        'rhosocial\assets\BootstrapMarkdownAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/bootstrap-markdown/2.10.0/js/bootstrap-markdown.js' : 'https://cdn.bootcss.com/bootstrap-markdown/2.10.0/js/bootstrap-markdown.min.js',
            ],
            'css' => [
                'https://cdn.bootcss.com/bootstrap-markdown/2.10.0/css/bootstrap-markdown.min.css',
            ],
        ],
        'rhosocial\assets\CaretJsAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/Caret.js/0.2.2/jquery.caret.js' : 'https://cdn.bootcss.com/Caret.js/0.2.2/jquery.caret.min.js',
            ],
        ],
        'rhosocial\assets\ClipboardJsAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/clipboard.js/1.7.1/clipboard.js' : 'https://cdn.bootcss.com/clipboard.js/1.7.1/clipboard.min.js',
            ],
        ],
        'rhosocial\assets\FontAwesomeAsset' => [
            'sourcePath' => null,
            'css' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css' : 'https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css',
            ],
        ],
        'rhosocial\assets\HolderjsAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/holder/2.9.4/holder.js' : 'https://cdn.bootcss.com/holder/2.9.4/holder.min.js',
            ],
        ],
        'rhosocial\assets\Html5shivAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/html5shiv/r29/html5.js' : 'https://cdn.bootcss.com/html5shiv/r29/html5.min.js',
            ],
        ],
        'rhosocial\assets\JplayerAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/jplayer/2.9.2/jplayer/jquery.jplayer.js' : 'https://cdn.bootcss.com/jplayer/2.9.2/jplayer/jquery.jplayer.min.js',
                YII_ENV_DEV ? 'https://cdn.bootcss.com/jplayer/2.9.2/add-on/jplayer.playlist.js' : 'https://cdn.bootcss.com/jplayer/2.9.2/add-on/jplayer.playlist.min.js',
            ],
            'css' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/jplayer/2.9.2/skin/blue.monday/css/jplayer.blue.monday.css' : 'https://cdn.bootcss.com/jplayer/2.9.2/skin/blue.monday/css/jplayer.blue.monday.min.css',
            ],
        ],
        'rhosocial\assets\JqueryColorAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/jquery-color/2.1.2/jquery.color.js' : 'https://cdn.bootcss.com/jquery-color/2.1.2/jquery.color.min.js',
            ],
        ],
        'rhosocial\assets\JqueryCookieAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.js' : 'https://cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js',
            ],
        ],
        'rhosocial\assets\JqueryKnobAsset' => [
            'sourcePath' => null,
            'js' => [
                'https://cdn.bootcss.com/jQuery-Knob/1.2.13/jquery.knob.min.js',
            ],
        ],
        'rhosocial\assets\JqueryNiceScrollAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/jquery.nicescroll/3.7.4/jquery.nicescroll.js' : 'https://cdn.bootcss.com/jquery.nicescroll/3.7.4/jquery.nicescroll.min.js',
            ],
        ],
        'rhosocial\assets\JqueryWidgetAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/jqueryui/1.12.1/jquery-ui.js' : 'https://cdn.bootcss.com/jqueryui/1.12.1/jquery-ui.min.js',
            ],
        ],
        'rhosocial\assets\NProgressAsset' => [
            'sourcePath' => null,
            'js' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/nprogress/0.2.0/nprogress.js' : 'https://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.js',
            ],
            'css' => [
                YII_ENV_DEV ? 'https://cdn.bootcss.com/nprogress/0.2.0/nprogress.css' : 'https://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.css',
            ],
        ],
    ],
    //'linkAssets' => true,
    'appendTimestamp' => true,
];