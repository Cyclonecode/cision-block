<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdcb1623ef96d600fd90c5887f9ef46bf
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CisionBlock\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CisionBlock\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'CisionBlock\\Backend\\Backend' => __DIR__ . '/../..' . '/src/Backend/Backend.php',
        'CisionBlock\\Frontend\\Frontend' => __DIR__ . '/../..' . '/src/Frontend/Frontend.php',
        'CisionBlock\\Plugin\\Common\\Singleton' => __DIR__ . '/../..' . '/src/Plugin/Common/Singleton.php',
        'CisionBlock\\Plugin\\Http\\AbstractRequest' => __DIR__ . '/../..' . '/src/Plugin/Http/AbstractRequest.php',
        'CisionBlock\\Plugin\\Http\\AbstractResponse' => __DIR__ . '/../..' . '/src/Plugin/Http/AbstractResponse.php',
        'CisionBlock\\Plugin\\Http\\RemoteRequest' => __DIR__ . '/../..' . '/src/Plugin/Http/RemoteRequest.php',
        'CisionBlock\\Plugin\\Http\\RequestInterface' => __DIR__ . '/../..' . '/src/Plugin/Http/RequestInterface.php',
        'CisionBlock\\Plugin\\Http\\Response' => __DIR__ . '/../..' . '/src/Plugin/Http/Response.php',
        'CisionBlock\\Plugin\\Http\\ResponseInterface' => __DIR__ . '/../..' . '/src/Plugin/Http/ResponseInterface.php',
        'CisionBlock\\Plugin\\Settings\\Settings' => __DIR__ . '/../..' . '/src/Plugin/Settings/Settings.php',
        'CisionBlock\\Plugin\\Widget\\Widget' => __DIR__ . '/../..' . '/src/Plugin/Widget/Widget.php',
        'CisionBlock\\Settings\\Settings' => __DIR__ . '/../..' . '/src/Settings/Settings.php',
        'CisionBlock\\Widget\\Widget' => __DIR__ . '/../..' . '/src/Widget/Widget.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdcb1623ef96d600fd90c5887f9ef46bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdcb1623ef96d600fd90c5887f9ef46bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdcb1623ef96d600fd90c5887f9ef46bf::$classMap;

        }, null, ClassLoader::class);
    }
}
