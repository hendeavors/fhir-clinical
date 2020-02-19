<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Clinical\Shared;

use Psr\Http\Message\{RequestInterface, ResponseInterface};
use Endeavors\Fhir\Http\Contracts\Clinical\Shared\Summary;

/**
 * We'll inherit from Summary as this provides
 * Clarity from the perspective of DSTU2
 * @inheritdoc
 * @var General
 */
interface General extends Summary
{
}
