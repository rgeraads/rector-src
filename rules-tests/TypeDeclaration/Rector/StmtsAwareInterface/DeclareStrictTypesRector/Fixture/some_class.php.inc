<?php

namespace Rector\Tests\TypeDeclaration\Rector\StmtsAwareInterface\DeclareStrictTypesRector\Fixture;

function someFunction()
{
}

?>
-----
<?php

namespace Rector\Tests\TypeDeclaration\Rector\StmtsAwareInterface\DeclareStrictTypesRector\Fixture;

declare(strict_types=1);

function someFunction()
{
}

?>
