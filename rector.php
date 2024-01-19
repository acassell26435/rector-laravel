<?php

use RectorLaravel\Set\LaravelSetList;
use Rector\Config\RectorConfig;



return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->importNames();

    $rectorConfig->paths([__DIR__ . '/src']);

    $rectorConfig->skip([
        // for tests
        '*/Source/*',
        '*/Fixture/*',
        __DIR__ . '/tests',
        __DIR__ . '/src/gpauto',

    ]);
    $rectorConfig->disableParallel();

    $rectorConfig->sets([LaravelSetList::LARAVEL_80]);
};
