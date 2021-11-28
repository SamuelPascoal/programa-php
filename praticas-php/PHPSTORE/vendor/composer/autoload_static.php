<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc329e90321527638a0f21e6fdf277f13
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc329e90321527638a0f21e6fdf277f13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc329e90321527638a0f21e6fdf277f13::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc329e90321527638a0f21e6fdf277f13::$classMap;

        }, null, ClassLoader::class);
    }
}