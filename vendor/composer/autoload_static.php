<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0ad574275713d0b844a109abb1bba07
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jerickcm\\Inspire\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jerickcm\\Inspire\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0ad574275713d0b844a109abb1bba07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0ad574275713d0b844a109abb1bba07::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf0ad574275713d0b844a109abb1bba07::$classMap;

        }, null, ClassLoader::class);
    }
}
