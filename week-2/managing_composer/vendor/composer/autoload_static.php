<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7bbc2ae6dc68788dd0fbe5433196dc0c
{
    public static $prefixesPsr0 = array (
        'F' => 
        array (
            'Faker' => 
            array (
                0 => __DIR__ . '/..' . '/fakerphp/faker/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit7bbc2ae6dc68788dd0fbe5433196dc0c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7bbc2ae6dc68788dd0fbe5433196dc0c::$classMap;

        }, null, ClassLoader::class);
    }
}