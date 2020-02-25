<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Clinical\Two\Section;

use Psr\Http\Message\{RequestInterface, ResponseInterface};
use Endeavors\Fhir\Http\Contracts\Clinical\Shared\General as SharedGeneral;

/**
 * The General section of the Clinical Category
 * @see https://www.hl7.org/fhir/versions.html#maturity
 * @var General
 */
interface General extends SharedGeneral
{
    /**
     * The Risk Assessment resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function riskAssessment(RequestInterface $request): ResponseInterface;
}
