<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Clinical\Three;

use Psr\Http\Message\{RequestInterface, ResponseInterface};

/**
 * HL7 R4 Clinical Diagnostics Fhir Resource representation
 * We Omit Response Resources for this contract
 */
interface Diagnostics
{
    /**
     * [observation description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function observation(RequestInterface $request): ResponseInterface;

    /**
     * [diagnosticReport description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function diagnosticReport(RequestInterface $request): ResponseInterface;

    /**
     * [specimen description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function specimen(RequestInterface $request): ResponseInterface;

    /**
     * [bodySite description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function bodySite(RequestInterface $request): ResponseInterface;

    /**
     * [imagingStudy description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function imagingStudy(RequestInterface $request): ResponseInterface;

    /**
     * [imagingManifest description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function imagingManifest(RequestInterface $request): ResponseInterface;

    /**
     * [sequence description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function sequence(RequestInterface $request): ResponseInterface;
}
