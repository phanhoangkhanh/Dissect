<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38859f7837118b16cf01d7822cab6c98
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Khanh\\Core\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Khanh\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38859f7837118b16cf01d7822cab6c98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38859f7837118b16cf01d7822cab6c98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit38859f7837118b16cf01d7822cab6c98::$classMap;

        }, null, ClassLoader::class);
    }
}
