<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite83fc837f98c88b68e8c109ab93f2917
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\Uts\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\Uts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite83fc837f98c88b68e8c109ab93f2917::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite83fc837f98c88b68e8c109ab93f2917::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite83fc837f98c88b68e8c109ab93f2917::$classMap;

        }, null, ClassLoader::class);
    }
}
