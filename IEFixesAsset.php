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
 * Class IEFixesAsset
 * @package rhosocial\assets
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class IEFixesAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@rhosocial/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/ie.css',
    ];

    /**
     * @inheritdoc
     */
    public $cssOptions = [
        'condition' => 'lt IE 9'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        Html5shivAsset::class,
    ];
}