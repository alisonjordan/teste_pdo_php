<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit185ea527a2396227fc14065b13bd2352
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

        spl_autoload_register(array('ComposerAutoloaderInit185ea527a2396227fc14065b13bd2352', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit185ea527a2396227fc14065b13bd2352', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit185ea527a2396227fc14065b13bd2352::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
