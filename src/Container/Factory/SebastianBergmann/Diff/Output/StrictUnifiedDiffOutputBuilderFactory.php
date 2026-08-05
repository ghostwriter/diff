<?php

declare(strict_types=1);

namespace Ghostwriter\Diff\Container\Factory\SebastianBergmann\Diff\Output;

use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\Service\FactoryInterface;
use Override;
use SebastianBergmann\Diff\Output\StrictUnifiedDiffOutputBuilder;
use Throwable;

/**
 * @see StrictUnifiedDiffOutputBuilderFactoryTest
 *
 * @implements FactoryInterface<StrictUnifiedDiffOutputBuilder>
 */
final readonly class StrictUnifiedDiffOutputBuilderFactory implements FactoryInterface
{
    /** @throws Throwable */
    #[Override]
    public function __invoke(ContainerInterface $container): StrictUnifiedDiffOutputBuilder
    {
        return new StrictUnifiedDiffOutputBuilder([
            'fromFile' => 'Original',
            'toFile' => 'New',
        ]);
    }
}
