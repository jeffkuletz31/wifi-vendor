<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5457bbd92777f1df131a0c86ca3bfe69
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5457bbd92777f1df131a0c86ca3bfe69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5457bbd92777f1df131a0c86ca3bfe69::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
