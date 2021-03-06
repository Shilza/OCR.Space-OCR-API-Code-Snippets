<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita38c72fcb6d7c32a59712913a19da5af
{
    public static $files = array (
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '08f0b98653e7fb18336e88ccdf306d96' => __DIR__ . '/..' . '/puzzlehttp/streams/src/main/php/puzzle/stream/functions.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        'c8c60732af4148b9301360dbad439239' => __DIR__ . '/..' . '/puzzlehttp/puzzle/src/main/php/puzzle/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'p' => 
        array (
            'puzzle_stream_' => 
            array (
                0 => __DIR__ . '/..' . '/puzzlehttp/streams/src/main/php',
            ),
            'puzzle_' => 
            array (
                0 => __DIR__ . '/..' . '/puzzlehttp/puzzle/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita38c72fcb6d7c32a59712913a19da5af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita38c72fcb6d7c32a59712913a19da5af::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita38c72fcb6d7c32a59712913a19da5af::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
