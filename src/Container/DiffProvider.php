<?php

declare(strict_types=1);

namespace Ghostwriter\Diff\Container;

use Ghostwriter\Container\Interface\Service\ExtensionInterface;
use Ghostwriter\Container\Interface\Service\FactoryInterface;
use Ghostwriter\Container\Service\Provider\AbstractProvider;
use Ghostwriter\Diff\Container\Factory\SebastianBergmann\Diff\Output\StrictUnifiedDiffOutputBuilderFactory;
use SebastianBergmann\Diff\Output\DiffOutputBuilderInterface;
use SebastianBergmann\Diff\Output\StrictUnifiedDiffOutputBuilder;

/**
 * @see DiffProviderTest
 */
final class DiffProvider extends AbstractProvider
{
    /**
     * [alias => service].
     *
     * @var array<class-string,class-string>
     */
    public const array ALIAS = [
        DiffOutputBuilderInterface::class => StrictUnifiedDiffOutputBuilder::class,
    ];

    /**
     * [concrete => [abstract => implementation]].
     *
     * @var array<class-string,array<class-string,class-string>>
     */
    public const array BIND = [];

    /**
     * [service => [extension, ...]].
     *
     * @var array<class-string,list<class-string<ExtensionInterface>>>
     */
    public const array EXTEND = [];

    /**
     * [service => factory].
     *
     * @var array<class-string,class-string<FactoryInterface>>
     */
    public const array FACTORY = [
        StrictUnifiedDiffOutputBuilder::class => StrictUnifiedDiffOutputBuilderFactory::class,
    ];
}
