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
 * Class JqueryTimeAgoLocaleAsset
 * @package rhosocial\assets
 * @version 1.0
 * @author vistart <i@vistart.me>
 */
class JqueryTimeAgoLocaleAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/jquery-timeago';

    /**
     * @var array language mapping between rhosocial locale id and timeago messages
     */
    public $languageMapping = [
        'nb_no' => 'no',
        'pt_br' => 'pt-br',
        'zh_cn' => 'zh-CN',
        'zh_tw' => 'zh-TW',
        'fa_ir' => 'fa',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->registerLocale();
    }

    /**
     * Adds the correct locale file to js files
     */
    protected function registerLocale()
    {
        $languageCode = Yii::$app->language;

        if (array_key_exists($languageCode, $this->languageMapping)) {
            $languageCode = $this->languageMapping[$languageCode];
        }

        $localeFile = 'locales' . DIRECTORY_SEPARATOR . 'jquery.timeago.' . $languageCode . '.js';
        if (file_exists(Yii::getAlias($this->sourcePath . '/' . $localeFile))) {
            $this->js[] = $localeFile;
        }
    }
}
