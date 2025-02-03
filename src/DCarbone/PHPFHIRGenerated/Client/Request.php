<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Client;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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


class Request
{
    /** @var string */
    public string $method;

    /** @var string */
    public string $path;

    /** @var int */
    public int $count;
    /** @var string */
    public string $since;
    /** @var string */
    public string $at;

    /**
     * The serialization type to request from the server.  Typically this is 'json' or 'xml'.
     *
     * @var string
     */
    public string $format;

    /** @var string */
    public string $sort;

    /**
     * Extra query parameters.
     *
     * @var array
     */
    public array $queryParams;

    /**
     * If true, headers from the response must be returned and defined in the response object.
     *
     * @see \DCarbone\PHPFHIRGenerated\Client\Response::$headers
     *
     * @var bool
     */
    public bool $parseResponseHeaders;

    /**
     * Extra client options.  Possible entries will vary depending on what client implementation you are using.
     *
     * If using the provided client (@see \DCarbone\PHPFHIRGenerated\Client\Client class),
     * these must be valid PHP curl options.
     *
     * @var array
     */
    public array $options;

    public function __construct(HTTPMethodEnum $method,
                                string $path,
                                null|int $count = null,
                                null|string $since = null,
                                null|string $at = null,
                                null|ResponseFormatEnum $format = null,
                                null|SortDirectionEnum $sort = null,
                                null|array $queryParams = null,
                                null|bool $parseResponseHeaders = null,
                                null|array $options = null)
    {
        $this->method = $method->value;
        $this->path = $path;
        if (null !== $count) {
            $this->count = $count;
        }
        if (null !== $since) {
            $this->since = $since;
        }
        if (null !== $at) {
            $this->at = $at;
        }
        if (null !== $format) {
            $this->format = $format->value;
        }
        if (null !== $sort) {
            $this->sort = $format->value;
        }
        if (null !== $queryParams) {
            $this->queryParams = $queryParams;
        }
        if (null !== $parseResponseHeaders) {
            $this->parseResponseHeaders = $parseResponseHeaders;
        }
        if (null !== $options) {
            $this->options = $options;
        }
    }
}
