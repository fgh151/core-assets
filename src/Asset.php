<?php
/**
 * @author : Fedor B Gorsky
 */

namespace fgh151\core\assets;


abstract class Asset extends \CComponent
{
    public static $js = [];
    public static $css = [];
    public static $depends = [];
    public static $externalCss = [];
    public static $externalJs = [];

    public static function init()
    {
    }

}