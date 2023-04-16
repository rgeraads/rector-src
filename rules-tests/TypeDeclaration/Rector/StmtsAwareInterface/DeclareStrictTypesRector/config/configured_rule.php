<?php

declare(strict_types=1);
use Rector\TypeDeclaration\Rector\StmtsAwareInterface\DeclareStrictTypesRector;

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(DeclareStrictTypesRector::class);
};
