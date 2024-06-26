<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit594c5cbdf1e83ecf444953b0524e9c4e
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nazliguelaydin\\Logger\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nazliguelaydin\\Logger\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit594c5cbdf1e83ecf444953b0524e9c4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit594c5cbdf1e83ecf444953b0524e9c4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit594c5cbdf1e83ecf444953b0524e9c4e::$classMap;

        }, null, ClassLoader::class);
    }
}
