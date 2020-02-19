<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Clinical\Four;

use Psr\Http\Message\{RequestInterface, ResponseInterface};
use Endeavors\Fhir\Http\Contracts\Clinical\Shared\CareProvision as SharedCareProvision;

interface CareProvision extends SharedCareProvision
{
    /**
     * [carePlan description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function carePlan(RequestInterface $request): ResponseInterface;

    /**
     * [careTeam description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function careTeam(RequestInterface $request): ResponseInterface;

    /**
     * [goal description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function goal(RequestInterface $request): ResponseInterface;

    /**
     * [serviceRequest description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function serviceRequest(RequestInterface $request): ResponseInterface;

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
