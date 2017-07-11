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
 * Class JplayerAsset
 * @package rhosocial\assets
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class JplayerAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/jplayer/dist';

    /**
     * @inheritdoc
     */
    public $js = [
        'jplayer/jquery.jplayer.js',
        'add-on/jplayer.playlist.js',
    ];

    /**
     * @inheritdoc
     */
    public $css = ['skin/blue.monday/css/jplayer.blue.monday.min.css'];
}
