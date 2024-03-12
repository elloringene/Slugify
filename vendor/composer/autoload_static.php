<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb29058dca3e28dd01bfb454280fcb60f
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Elloringene\\Slugify\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Elloringene\\Slugify\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb29058dca3e28dd01bfb454280fcb60f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb29058dca3e28dd01bfb454280fcb60f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb29058dca3e28dd01bfb454280fcb60f::$classMap;

        }, null, ClassLoader::class);
    }
}
