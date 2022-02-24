<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0431d2a4c3bc4ad850374e1c6c239c37
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colors\\' => 7,
            'Class\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
        'Class\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0431d2a4c3bc4ad850374e1c6c239c37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0431d2a4c3bc4ad850374e1c6c239c37::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0431d2a4c3bc4ad850374e1c6c239c37::$classMap;

        }, null, ClassLoader::class);
    }
}
