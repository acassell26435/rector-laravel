<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Set\LaravelSetList;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src/gpauto',
    ]);

    $rectorConfig->skip([
        __DIR__ . '/tests',
        __DIR__ . '/src/gpauto/vendor',

    ]);
    $rectorConfig->disableParallel();
    $rectorConfig->sets([LevelSetList::UP_TO_PHP_82,LaravelSetList::LARAVEL_100, SetList::DEAD_CODE, SetList::CODE_QUALITY, SetList::NAMING]);
};
