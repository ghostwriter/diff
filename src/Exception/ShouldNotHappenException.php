<?php

declare(strict_types=1);

namespace Ghostwriter\Diff\Exception;

use Ghostwriter\Diff\Interface\DiffExceptionInterface;
use LogicException;

final class ShouldNotHappenException extends LogicException implements DiffExceptionInterface {}
