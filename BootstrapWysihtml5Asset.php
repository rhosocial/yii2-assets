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
 * Class BootstrapWysihtml5Asset
 * @package rhosocial\assets
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class BootstrapWysihtml5Asset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/bootstrap-wysihtml5';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/bootstrap-wysihtml5.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/bootstrap-wysihtml5.js',
    ];
}
