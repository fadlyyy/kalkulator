<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf99774ce6c7a17224ac1af21e5707a6a
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fadli\\Kalkulator\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fadli\\Kalkulator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf99774ce6c7a17224ac1af21e5707a6a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf99774ce6c7a17224ac1af21e5707a6a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
