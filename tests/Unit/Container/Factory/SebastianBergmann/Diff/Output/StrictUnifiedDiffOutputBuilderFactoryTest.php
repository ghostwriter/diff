<?php

declare(strict_types=1);

namespace Tests\Unit\Container\Factory\SebastianBergmann\Diff\Output;

use Ghostwriter\Container\Interface\Service\FactoryInterface;
use Ghostwriter\Diff\Container\Factory\SebastianBergmann\Diff\Output\StrictUnifiedDiffOutputBuilderFactory;
use Ghostwriter\PHPUnitAssertions\Trait\AssertionsTrait;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Unit\AbstractTestCase;
use Throwable;

#[CoversClass(StrictUnifiedDiffOutputBuilderFactory::class)]
final class StrictUnifiedDiffOutputBuilderFactoryTest extends AbstractTestCase
{
    use AssertionsTrait;

    /** @throws Throwable */
    public function testImplementsGhostwriterContainerInterfaceServiceFactoryInterface(): void
    {
        self::assertClassImplementsInterface(StrictUnifiedDiffOutputBuilderFactory::class, FactoryInterface::class);
    }
}
