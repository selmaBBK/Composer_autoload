<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23e687eb05d0a822a01a00f63881a72d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Wcs',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23e687eb05d0a822a01a00f63881a72d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23e687eb05d0a822a01a00f63881a72d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23e687eb05d0a822a01a00f63881a72d::$classMap;

        }, null, ClassLoader::class);
    }
}
