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
 * @var Summary
 */
interface Summary
{
    /**
     * The allergy tolerance resource
     * @param  RequestInterface $request psr7 request
     * @return ResponseInterface $response The psr7 allergy tolerance response
     */
    public function allergyTolerance(RequestInterface $request): ResponseInterface;

    /**
     * The Condition resource (Problem)
     * @param  RequestInterface $request psr7 request
     * @return ResponseInterface $response The psr7 condition response
     */
    public function condition(RequestInterface $request): ResponseInterface;

    /**
     * The Prodecure Resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function procedure(RequestInterface $request): ResponseInterface;

    /**
     * The Family Member History resource
     * @param  RequestInterface $request psr7 request
     * @return ResponseInterface $response The psr7 family member history response
     */
    public function familyMemberHistory(RequestInterface $request): ResponseInterface;

    /**
     * The clinical impression resource
     * @param  RequestInterface $request psr7 request
     * @return ResponseInterface $response The psr7 clinical impression response
     */
    public function clinicalImpression(RequestInterface $request): ResponseInterface;

    /**
     * The Detected Issue resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function detectedIssue(RequestInterface $request): ResponseInterface;
}
