<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb36983cc74e4dceca71afb01b417762b
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Danal\\ComposerNamespace\\' => 24,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
            'ClassesB\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Danal\\ComposerNamespace\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes_a',
        ),
        'ClassesB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes_b',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb36983cc74e4dceca71afb01b417762b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb36983cc74e4dceca71afb01b417762b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb36983cc74e4dceca71afb01b417762b::$classMap;

        }, null, ClassLoader::class);
    }
}
