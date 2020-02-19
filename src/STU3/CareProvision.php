<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Clinical\STU3;

use Psr\Http\Message\{RequestInterface, ResponseInterface};
use Endeavors\Fhir\Http\Contracts\Clinical\Shared\CareProvision as SharedCareProvision;

/**
 * The HL7 FHIR specification contains maturity levels for each versioned resource
 * The maturity level of the resources are abstracted from this library by the end user.
 * The end user of this library provides the maturity level by specifying the
 * fhir resource version via a predefined versioning scheme defined in each respective psr7 request.
 * This ultimately allows us to provide a shared component to the versioned contracts.
 * @see https://www.hl7.org/fhir/versions.html#maturity
 * @var CareProvision
 */
interface CareProvision extends SharedCareProvision
{
    /**
     * [careTeam description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function careTeam(RequestInterface $request): ResponseInterface;

    /**
     * [referralRequest description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function referralRequest(RequestInterface $request): ResponseInterface;

    /**
     * [procedureRequest description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function procedureRequest(RequestInterface $request): ResponseInterface;

    /**
     * [riskAssessment description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function riskAssessment(RequestInterface $request): ResponseInterface;

    /**
     * [requestGroup description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function requestGroup(RequestInterface $request): ResponseInterface;
}
