<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->importNames();

    $rectorConfig->paths([__DIR__ . '/src/auto', __DIR__ . '/tests']);

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

    $rectorConfig->sets([LevelSetList::UP_TO_PHP_82, SetList::DEAD_CODE, SetList::CODE_QUALITY, SetList::NAMING]);
};
