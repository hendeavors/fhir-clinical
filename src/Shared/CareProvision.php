<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Clinical\Shared;

use Psr\Http\Message\{RequestInterface, ResponseInterface};

/**
 * The HL7 FHIR specification contains maturity levels for each versioned resource
 * The maturity level of the resources are abstracted from this library by the end user.
 * The end user of this library provides the maturity level by specifying the
 * fhir resource version via a predefined versioning scheme defined in each respective psr7 request.
 * This ultimately allows us to provide a shared component to the versioned contracts.
 * @see https://www.hl7.org/fhir/versions.html#maturity
 * @var CareProvision
 */
interface CareProvision
{
    /**
     * [carePlan description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function carePlan(RequestInterface $request): ResponseInterface;

    /**
     * [goal description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function goal(RequestInterface $request): ResponseInterface;

    /**
     * [nutritionOrder description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function nutritionOrder(RequestInterface $request): ResponseInterface;

    /**
     * [visionPrescription description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function visionPrescription(RequestInterface $request): ResponseInterface;
}
