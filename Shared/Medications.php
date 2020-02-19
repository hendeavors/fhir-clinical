<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Clinical\Shared;

use Psr\Http\Message\{RequestInterface, ResponseInterface};

/**
 * DSTU2 this is Medication & Immunization
 * @var Medications
 */
interface Medications
{
    /**
     * Medication Administration Resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function medicationAdministration(RequestInterface $request): ResponseInterface;

    /**
     * Medication Dispense resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function medicationDispense(RequestInterface $request): ResponseInterface;

    /**
     * Medication Statement resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function medicationStatement(RequestInterface $request): ResponseInterface;

    /**
     * Medication resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function medication(RequestInterface $request): ResponseInterface;

    /**
     * Immunization resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function immunization(RequestInterface $request): ResponseInterface;

    /**
     * Immunization Recommendation resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function immunizationRecommendation(RequestInterface $request): ResponseInterface;
}
