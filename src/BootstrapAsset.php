<?php
/**
 * @author : Fedor B Gorsky
 */

namespace fgh151\core\assets;

use Yii;

class BootstrapAsset extends Asset
{
    public static $depends = [
        JqueryAsset::class
    ];

    public static function init()
    {
        $assetFolder = Yii::$app->assetManager->publish(BASE_PATH . '/node_modules/bootstrap/dist/');

        self::$externalJs = [
            $assetFolder . '/js/bootstrap.min.js'
        ];

        self::$externalCss = [
            $assetFolder . '/css/bootstrap.min.css'
        ];

    }
}