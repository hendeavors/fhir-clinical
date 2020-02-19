<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Clinical\Three;

use Psr\Http\Message\{RequestInterface, ResponseInterface};
use Endeavors\Fhir\Http\Contracts\Clinical\Shared\Summary as SharedSummary;

interface Summary extends SharedSummary
{
    /**
     * The adverse event resource
     * @param  RequestInterface $request psr7 request
     * @return ResponseInterface $response The psr7 adverse event response
     */
    public function adverseEvent(RequestInterface $request): ResponseInterface;
}
