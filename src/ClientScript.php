<?php
/**
 * @author : Fedor B Gorsky
 */

namespace fgh151\core\assets;


use Yii;

class ClientScript extends \CClientScript
{

    public function register($assetName)
    {
        /** @var Asset $assetName */
        $assetName::init();

        if ( ! empty($assetName::$depends)) {
            foreach ($assetName::$depends as $depend) {
                $this->register($depend);
            }
        }

        foreach ($assetName::$js as $jsFile) {
            $this->registerScriptFile(
                Yii::$app->assetManager->publish($jsFile)
            );
        }

        foreach ($assetName::$css as $cssFile) {
            $this->registerCssFile(
                Yii::$app->assetManager->publish($cssFile)
            );
        }

        foreach ($assetName::$externalCss as $cssFile) {
            $this->registerCssFile(
                $cssFile
            );
        }

        foreach ($assetName::$externalJs as $jsFile) {
            $this->registerScriptFile(
                $jsFile
            );
        }

    }

}