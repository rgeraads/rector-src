<?php

declare(strict_types=1);

namespace Rector\TypeDeclaration\Rector\StmtsAwareInterface;

use Rector\Core\Contract\PhpParser\Node\StmtsAwareInterface;
use PhpParser\Node;
use Rector\Core\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

/**

 * @see \Rector\Tests\TypeDeclaration\Rector\StmtsAwareInterface\DeclareStrictTypesRector\DeclareStrictTypesRectorTest
 */
final class DeclareStrictTypesRector extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Add declare(strict_types=1) if missing', [
            new CodeSample(
                <<<'CODE_SAMPLE'
function someFunction()
{
}
CODE_SAMPLE

                ,
                <<<'CODE_SAMPLE'
declare(strict_types=1);

function someFunction()
{
}
CODE_SAMPLE

            )
        ]);
    }

    /**
     * @return array<class-string<Node>>
     */
    public function getNodeTypes(): array
    {
        return [StmtsAwareInterface::class];
    }

    /**
     * @param StmtsAwareInterface $node
     */
    public function refactor(Node $node): ?Node
    {
        // change the node

        return $node;
    }
}
