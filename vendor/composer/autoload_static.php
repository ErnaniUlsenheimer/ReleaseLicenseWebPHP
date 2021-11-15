<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2d93ee146c26c1c354105044391e681
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Percolore\\' => 10,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Percolore\\' => 
        array (
            0 => __DIR__ . '/..' . '/Percolore/php-classes/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2d93ee146c26c1c354105044391e681::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2d93ee146c26c1c354105044391e681::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb2d93ee146c26c1c354105044391e681::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb2d93ee146c26c1c354105044391e681::$classMap;

        }, null, ClassLoader::class);
    }
}