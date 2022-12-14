<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit19f769cb9ae974ab1cd9cf7293b9dbdc
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit19f769cb9ae974ab1cd9cf7293b9dbdc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit19f769cb9ae974ab1cd9cf7293b9dbdc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit19f769cb9ae974ab1cd9cf7293b9dbdc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
