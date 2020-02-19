<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Clinical\Four;

use Psr\Http\Message\{RequestInterface, ResponseInterface};

interface Medications
{
    /**
     * Medication Request resource
     * @param  RequestInterface  $request psr7 request
     * @return ResponseInterface psr7 Medication Request response
     */
    public function medicationRequest(RequestInterface $request): ResponseInterface;

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
     * Medication knowledge resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function medicationKnowledge(RequestInterface $request): ResponseInterface;

    /**
     * Immunization resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function immunization(RequestInterface $request): ResponseInterface;

    /**
     * Immunization Evaluation resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function immunizationEvaluation(RequestInterface $request): ResponseInterface;

    /**
     * Immunization Recommendation resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function immunizationRecommendation(RequestInterface $request): ResponseInterface;
}
