<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit505e1c53ef8b836978beeccc3fbda16f
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit505e1c53ef8b836978beeccc3fbda16f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit505e1c53ef8b836978beeccc3fbda16f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit505e1c53ef8b836978beeccc3fbda16f::$classMap;

        }, null, ClassLoader::class);
    }
}