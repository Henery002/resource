<?php
/**
 * Created by PhpStorm.
 * User: love
 * Date: 2016/11/5
 * Time: 15:40
 */

// 第一种加载方式
//function __autoload($className)
//{
//    if (file_exists($className.'.php')) {
//        include($className.'.php');
//    } else {
//        exit('class no exists!');
//    }
//}
define('DIR_PATH', __DIR__.'/../');

class Autoload
{

    public static function loadClass($className)
    {
        $className = DIR_PATH.str_replace('\\', DIRECTORY_SEPARATOR, $className).'.php';
        if (file_exists($className)) {
            include $className;
        } else {
            return;
        }
    }
}

spl_autoload_register(['Autoload', 'loadClass']);