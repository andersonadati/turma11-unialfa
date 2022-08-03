<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6cad26227473b0259449be4acc0c932
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Unialfa\\Phpxdebug\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Unialfa\\Phpxdebug\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6cad26227473b0259449be4acc0c932::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6cad26227473b0259449be4acc0c932::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf6cad26227473b0259449be4acc0c932::$classMap;

        }, null, ClassLoader::class);
    }
}