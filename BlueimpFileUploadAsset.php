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
 * Class BlueimpFileUploadAsset
 * @package rhosocial\assets
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class BlueimpFileUploadAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/blueimp-file-upload';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/jquery.fileupload.js',
        'js/jquery.iframe-transport.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        JqueryWidgetAsset::class,
    ];
}
