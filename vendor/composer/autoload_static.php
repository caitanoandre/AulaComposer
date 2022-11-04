<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2054777d84af2b8eee29f80820b00ee
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2054777d84af2b8eee29f80820b00ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2054777d84af2b8eee29f80820b00ee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc2054777d84af2b8eee29f80820b00ee::$classMap;

        }, null, ClassLoader::class);
    }
}
