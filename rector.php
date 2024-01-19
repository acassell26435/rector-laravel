<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\ValueObject\PhpVersion;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);
    $rectorConfig->phpVersion(PhpVersion::PHP_74);
     $rectorConfig->skip([
        __DIR__ . '/src/gpauto/vendor',

$rectorConfig->disableParallel();

    $rectorConfig->sets([
        SetList::DEAD_CODE,
    ]);
};
