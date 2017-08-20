<?php

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