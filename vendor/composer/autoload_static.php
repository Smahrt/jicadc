<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd31672b4b82185a26983a6e1dcf46f2
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd31672b4b82185a26983a6e1dcf46f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd31672b4b82185a26983a6e1dcf46f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
