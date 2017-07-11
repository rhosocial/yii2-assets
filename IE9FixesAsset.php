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
 * Class IE9FixesAsset
 * @package rhosocial\assets
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class IE9FixesAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@rhosocial/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/ie9.css',
    ];

    /**
     * @inheritdoc
     */
    public $cssOptions = [
        'condition' => 'IE 9'
    ];
}
