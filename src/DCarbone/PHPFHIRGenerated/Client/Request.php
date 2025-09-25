<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Client;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 25th, 2025 15:14+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum;
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;

class Request
{
    /** @var \DCarbone\PHPFHIRGenerated\Client\HTTPMethodEnum */
    public HTTPMethodEnum $method;

    /** @var string */
    public string $path;

    /** @var int */
    public int $count;
    /** @var string */
    public string $since;
    /** @var string */
    public string $at;

    /**
     * The serialization format to use.
     *
     * @var \DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum
     */
    public SerializeFormatEnum $format;

    /** @var string */
    public string $sort;

    /**
     * FHIR version to set as the desired response version.
     *
     * @var \DCarbone\PHPFHIRGenerated\FHIRVersion
     */
    public FHIRVersion $acceptVersion;

    /**
     * The resource to send as part of a write request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface
     */
    public ResourceTypeInterface $resource;

    /**
     * If a resource is defined, the config to use when serializing its data.
     *
     * @var \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig
     */
    public SerializeConfig $resourceSerializeConfig;

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
     * Extra client clientOptions.  Possible entries will vary depending on what client implementation you are using.
     *
     * If using the provided client (@see \DCarbone\PHPFHIRGenerated\Client\Client class),
     * these must be valid PHP curl clientOptions.
     */
    public array $clientOptions;

    public function __construct(HTTPMethodEnum $method,
                                string $path,
                                null|int $count = null,
                                null|string $since = null,
                                null|string $at = null,
                                null|SerializeFormatEnum $format = null,
                                null|string|SortDirectionEnum $sort = null,
                                null|FHIRVersion $acceptVersion = null,
                                null|ResourceTypeInterface $resource = null,
                                null|SerializeConfig $resourceSerializeConfig = null,
                                null|array $queryParams = null,
                                null|bool $parseResponseHeaders = null,
                                null|array $clientOptions = null)
    {
        $this->method = $method;
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
            $this->format = $format;
        }
        if (null !== $sort) {
            $this->sort = ($sort instanceof SortDirectionEnum) ? $sort->value : $sort;
        }
        if (null !== $acceptVersion) {
            $this->acceptVersion = $acceptVersion;
        }
        if (null !== $resource) {
            $this->resource = $resource;
        }
        if (null !== $resourceSerializeConfig) {
            $this->resourceSerializeConfig = $resourceSerializeConfig;
        }
        if (null !== $queryParams) {
            $this->queryParams = $queryParams;
        }
        if (null !== $parseResponseHeaders) {
            $this->parseResponseHeaders = $parseResponseHeaders;
        }
        if (null !== $clientOptions) {
            $this->clientOptions = $clientOptions;
        }
    }
}
