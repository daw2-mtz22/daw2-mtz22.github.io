<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite028b71db4a3e4b2bb70985608bece19
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite028b71db4a3e4b2bb70985608bece19::$classMap;

        }, null, ClassLoader::class);
    }
}
