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

namespace rhosocial\assets;

use yii\bootstrap\BootstrapAsset;
use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\View;
use yii\web\YiiAsset;

/**
 * Class AppAsset
 * @package rhosocial\assets
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class AppAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@rhosocial/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/temp.css',
        'css/flatelements.css',
    ];

    /**
     * @inheritdoc
     */
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $js = [
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class,
        BluebirdAsset::class,
        JqueryTimeAgoAsset::class,
        JqueryWidgetAsset::class,
        JqueryColorAsset::class,
        JqueryPlaceholderAsset::class,
        FontAwesomeAsset::class,
        BlueimpFileUploadAsset::class,
        BlueimpGalleryAsset::class,
        JqueryHighlightAsset::class,
        JqueryCookieAsset::class,
        JqueryAutosizeAsset::class,
        AtJsAsset::class,
        AnimateCssAsset::class,
        NProgressAsset::class,
        IE9FixesAsset::class,
        IEFixesAsset::class,
        ClipboardJsAsset::class,
    ];
}
