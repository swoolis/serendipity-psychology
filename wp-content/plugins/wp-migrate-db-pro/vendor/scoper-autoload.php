<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('ComposerAutoloaderInitd6fa7b6968dfd5b3a45bd1f9ef27e732', false) && !interface_exists('ComposerAutoloaderInitd6fa7b6968dfd5b3a45bd1f9ef27e732', false) && !trait_exists('ComposerAutoloaderInitd6fa7b6968dfd5b3a45bd1f9ef27e732', false)) {
    spl_autoload_call('DeliciousBrains\WPMDB\Container\ComposerAutoloaderInitd6fa7b6968dfd5b3a45bd1f9ef27e732');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('composerRequired6fa7b6968dfd5b3a45bd1f9ef27e732')) {
    function composerRequired6fa7b6968dfd5b3a45bd1f9ef27e732() {
        return \DeliciousBrains\WPMDB\Container\composerRequired6fa7b6968dfd5b3a45bd1f9ef27e732(...func_get_args());
    }
}

return $loader;