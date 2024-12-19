<?php

/**
 * This file is part of the ddex-php package.
 * 
 * (c) Sebastian Wolff <seabass88@gmail.com>
 */

namespace DDEXWrapper;

class Bootstrap
{

    const DIR_GLUE = DIRECTORY_SEPARATOR;
    const NS_GLUE = '\\';

    public static $registered = false;

    /**
     * Register the autoloader and any other setup needed
     */
    public static function init()
    {
        spl_autoload_register(array('\DDEXWrapper\Bootstrap', 'autoload'));
        self::registerHandlers();
    }

    /**
     * The autoload magic (PSR-0 style)
     *
     * @param string $classname
     */
    public static function autoload($classname)
    {
    	$dir = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'DDEXWrapper' . DIRECTORY_SEPARATOR . 'schema';
        self::_autoload($dir, $classname);
    }

    /**
     * Register the autoloader and any other setup needed
     */
    public static function pharInit()
    {
        spl_autoload_register(array('\DDEXWrapper\Bootstrap', 'pharAutoload'));
        self::registerHandlers();
    }

    /**
     * Phar specific autoloader
     *
     * @param string $classname
     */
    public static function pharAutoload($classname)
    {
        self::_autoload('phar://DDEXWrapper.phar', $classname);
    }

    /**
     * @param string $base
     * @param string $classname
     */
    private static function _autoload($base, $classname)
    {
        $parts      = explode(self::NS_GLUE, $classname);
        $path       = $base . self::DIR_GLUE . implode(self::DIR_GLUE, $parts) . '.php';

        if (file_exists($path)) {
            require_once($path);
        }
    }
    /**
     * Register default mime handlers.  Is idempotent.
     */
    public static function registerHandlers()
    {
        if (self::$registered === true) {
            return;
        }

        self::$registered = true;
    }
}
