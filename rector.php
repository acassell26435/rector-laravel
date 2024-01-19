<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\ValueObject\PhpVersion;
use Rector\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    $rectorConfig->skip([
        __DIR__ . '/src/gpauto/vendor',
    ]);
    $rectorConfig->disableParallel();
   $rectorConfig->sets([LevelSetList::UP_TO_PHP_82, SetList::DEAD_CODE, SetList::CODE_QUALITY, SetList::NAMING]);
};
