<?php
use RectorLaravel\Set\LaravelSetList;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\ValueObject\PhpVersion;


return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src/gpauto',
    ]);

    $rectorConfig->skip([
        __DIR__ . '/tests',
           __DIR__ . '/src/gpauto/vendor',
                     
    ]);
    $rectorConfig->disableParallel();
   $rectorConfig->sets([LaravelSetList::LARAVEL_70, SetList::DEAD_CODE, SetList::CODE_QUALITY, SetList::NAMING]);
};
