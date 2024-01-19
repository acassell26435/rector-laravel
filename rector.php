<?php

use RectorLaravel\Set\LaravelSetList;
use Rector\Config\RectorConfig;



return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->importNames();

    $rectorConfig->paths([__DIR__ . '/src/auto']);

    $rectorConfig->skip([
        // for tests
        '*/Source/*',
        '*/Fixture/*',
        __DIR__ . '/tests',
        __DIR__ . '/src/auto/vendor',

        // skip for handle scoped, like in the rector-src as well
        // @see https://github.com/rectorphp/rector-src/blob/7f73cf017214257c170d34db3af7283eaeeab657/rector.php#L71
        StringClassNameToClassConstantRector::class,
    ]);
    $rectorConfig->disableParallel();

    $rectorConfig->sets([LaravelSetList::LARAVEL_80]);
};
