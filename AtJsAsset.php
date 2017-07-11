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

use yii\web\AssetBundle;

/**
 * Class AtJsAsset
 * @package rhosocial\assets
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class AtJsAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/At.js';

    /**
     * @inheritdoc
     */
    public $js = [
        'dist/js/jquery.atwho.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        //'dist/css/jquery.atwho.min.css',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'rhosocial\assets\CaretJsAsset',
        'rhosocial\assets\AtJsStyleAsset',
    ];
}
