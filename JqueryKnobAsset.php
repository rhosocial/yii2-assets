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
 * Class JqueryKnobAsset
 * @package rhosocial\assets
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class JqueryKnobAsset extends AssetBundle
{
    public $jsOptions = ['position' => View::POS_BEGIN];

    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/jquery-knob';

    /**
     * @inheritdoc
     */
    public $js = ['dist/jquery.knob.min.js'];

    /**
     * @inheritdoc
     */
    public $depends = [
        AppAsset::class
    ];
}
