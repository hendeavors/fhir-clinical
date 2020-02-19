<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Clinical\Four;

use Psr\Http\Message\{RequestInterface, ResponseInterface};

interface Summary
{
    /**
     * The allergy tolerance resource
     * @param  RequestInterface $request psr7 request
     * @return ResponseInterface $response The psr7 allergy tolerance response
     */
    public function allergyTolerance(RequestInterface $request): ResponseInterface;

    /**
     * The adverse event resource
     * @param  RequestInterface $request psr7 request
     * @return ResponseInterface $response The psr7 adverse event response
     */
    public function adverseEvent(RequestInterface $request): ResponseInterface;

    /**
     * The Condition resource (Problem) Maturity Level 3
     * @param  RequestInterface $request psr7 request
     * @return ResponseInterface $response The psr7 condition response
     */
    public function condition(RequestInterface $request): ResponseInterface;

    /**
     * The Prodecure Resource Maturity Level 3
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function procedure(RequestInterface $request): ResponseInterface;

    /**
     * The Family Member History resource Maturity Level 2
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
