<?php
/**
 * @author : Fedor B Gorsky
 */

namespace fgh151\core\assets;


use Yii;

class FontAwesomeAsset extends Asset
{
    public static function init()
    {
        $assetFolder = Yii::$app->assetManager->publish(BASE_PATH . '/node_modules/font-awesome/');

        self::$externalCss = [
            $assetFolder . '/css/font-awesome.min.css'
        ];
    }
}