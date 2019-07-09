<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1164af787945da9937e7612a36ba708
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spatie\\SchemaOrg\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spatie\\SchemaOrg\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/schema-org/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1164af787945da9937e7612a36ba708::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1164af787945da9937e7612a36ba708::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
