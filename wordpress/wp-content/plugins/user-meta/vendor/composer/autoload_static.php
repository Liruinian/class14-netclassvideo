<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7964e08754a13a51ecc4e5667d0f6cca
{
    public static $files = array (
        '18deab8a52be96cfc50a45f1edb7ca0b' => __DIR__ . '/..' . '/user-meta/html/src/wp.php',
        'fa0b3f6e2c1b8f4cffea4be25916a576' => __DIR__ . '/../..' . '/lib/Framework.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UserMeta\\Html\\' => 14,
            'UserMeta\\Field\\' => 15,
            'UserMeta\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UserMeta\\Html\\' => 
        array (
            0 => __DIR__ . '/..' . '/user-meta/html/src',
        ),
        'UserMeta\\Field\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models/classes/Field',
            1 => __DIR__ . '/../..' . '/models/classes/Field/pro',
        ),
        'UserMeta\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models/classes/builder',
            1 => __DIR__ . '/../..' . '/models/classes/generate',
            2 => __DIR__ . '/../..' . '/models/classes',
            3 => __DIR__ . '/../..' . '/models/classes/pro',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7964e08754a13a51ecc4e5667d0f6cca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7964e08754a13a51ecc4e5667d0f6cca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
