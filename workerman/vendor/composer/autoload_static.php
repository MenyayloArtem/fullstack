<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23d2078ccf1acaf7bc8354a605897058
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23d2078ccf1acaf7bc8354a605897058::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23d2078ccf1acaf7bc8354a605897058::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23d2078ccf1acaf7bc8354a605897058::$classMap;

        }, null, ClassLoader::class);
    }
}
