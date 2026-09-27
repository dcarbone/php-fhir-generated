<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Client;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: September 27th, 2026 01:12+0000
 *
 * PHPFHIR Copyright:
 *
 * Copyright 2016-2026 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *        http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum;

class Response
{
    /**
     * HTTP request method.
     */
    public HTTPMethodEnum $method;

    /**
     * Request URL.
     */
    public string $url;

    /**
     * The serialized format used to encode the request, if applicable.
     */
    public SerializeFormatEnum $requestFormat;

    /**
     * HTTP response status code.
     */
    public int $code;

    /**
     * HTTP response headers.
     */
    public ResponseHeaders $headers;

    /**
     * HTTP response body.
     */
    public string $resp;

    /**
     * Client error.
     */
    public string $err;

    /**
     * Client error number.
     */
    public int $errno;

    public function __construct(HTTPMethodEnum $method,
                                string $url,
                                SerializeFormatEnum $requestFormat)
    {
        $this->method = $method;
        $this->url = $url;
    }

    /**
     * Return the HTTP request method used.
     */
    public function getMethod(): null|HTTPMethodEnum
    {
        return $this->method ?? null;
    }

    /**
     * Return the full URL used.
     */
    public function getURL(): null|string
    {
        return $this->url ?? null;
    }

    /**
     * Return the HTTP response code seen.
     */
    public function getCode(): null|int
    {
        return $this->code ?? null;
    }

    /**
     * Return the HTTP response headers seen.
     */
    public function getHeaders(): null|ResponseHeaders
    {
        return $this->headers ?? null;
    }

    /**
     * Return the full response seen, if there was one.
     */
    public function getResp(): null|string
    {
        return $this->resp ?? null;
    }

    /**
     * Client error message, if there was one.
     */
    public function getErr(): null|string
    {
        return $this->err ?? null;
    }

    /**
     * Client error code, if there was one.
     */
    public function getErrno(): null|int
    {
        return $this->errno ?? null;
    }

    /**
     * Attempts to extract the serialization format from the response Content-Type header.  Returns null if response
     * headers were not parsed, if the Content-Type header is not present or parseable.
     */
    public function getResponseFormat(): null|SerializeFormatEnum
    {
        if (!isset($this->headers)) {
            return $this->requestFormat ?? null;
        }
        $ctHeaders = $this->headers->get('content-type');
        if ([] === $ctHeaders) {
            return $this->requestFormat ?? null;
        }
        foreach ($ctHeaders as $header) {
            $lower = strtolower($header);
            switch (true) {
                case str_contains($lower, 'application/json'):
                case str_contains($lower, 'application/fhir+json'):
                case str_contains($lower, 'application/json+fhir'):
                    return SerializeFormatEnum::JSON;

                case str_contains($lower, 'application/xml'):
                case str_contains($lower, 'application/fhir+xml'):
                case str_contains($lower, 'application/xml+fhir'):
                    return SerializeFormatEnum::XML;
            }
        }
        return $this->requestFormat ?? null;
    }
}
