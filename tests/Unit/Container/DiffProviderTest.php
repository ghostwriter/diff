<?php

declare(strict_types=1);

namespace Tests\Unit\Container;

use Ghostwriter\Container\Interface\Service\ProviderInterface;
use Ghostwriter\Container\Service\Provider\AbstractProvider;
use Ghostwriter\Diff\Container\DiffProvider;
use Ghostwriter\PHPUnitAssertions\Trait\AssertionsTrait;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Unit\AbstractTestCase;
use Throwable;

#[CoversClass(DiffProvider::class)]
final class DiffProviderTest extends AbstractTestCase
{
    use AssertionsTrait;

    /** @throws Throwable */
    public function testExtendsGhostwriterContainerServiceProviderAbstractProvider(): void
    {
        self::assertClassExtendsClass(DiffProvider::class, AbstractProvider::class);
    }

    /** @throws Throwable */
    public function testImplementsGhostwriterContainerInterfaceServiceProviderInterface(): void
    {
        self::assertClassImplementsInterface(DiffProvider::class, ProviderInterface::class);
    }
}
