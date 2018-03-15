<?php
/**
 * @author : Fedor B Gorsky
 */

namespace fgh151\core\assets;


class JqueryAsset extends Asset
{
    public static function init()
    {
        $base_path = dirname(__FILE__);
        self::$js = [
            $base_path . '/node_modules/jquery/jquery.min.js'
        ];
        parent::init();
    }
}