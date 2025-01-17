<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011-2013, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\Client\ClientErrorException;
use DCarbone\PHPFHIRGenerated\Client\ClientInterface;
use DCarbone\PHPFHIRGenerated\Client\HTTPMethodEnum;
use DCarbone\PHPFHIRGenerated\Client\Request;
use DCarbone\PHPFHIRGenerated\Client\Response;
use DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum;
use DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum;
use DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException;
use DCarbone\PHPFHIRGenerated\ResponseParser;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;

class VersionClient
{
    private const _STATUS_OK = 200;

    protected ClientInterface $_client;
    protected Version $_version;

    /**
     * VersionClient Constructor
     *
     * @param \DCarbone\PHPFHIRGenerated\Client\ClientInterface $client
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version $version
     */
    public function __construct(ClientInterface $client, Version $version)
    {
        $this->_client = $client;
        $this->_version = $version;
    }

    /**
     * Queries for one or more resources of a given type, returning the raw response fromm the server.
     *
     * @see https://www.hl7.org/fhir/http.html#read
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypesEnum $resourceType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|int $count
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum $sort
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @param null|array $queryParams
     * @param null|bool $parseResponseHeaders
     * @return \DCarbone\PHPFHIRGenerated\Client\Response
     * @throws \Exception
     */
    public function readRaw(string|VersionTypesEnum $resourceType,
                            null|string|FHIRId|FHIRIdPrimitive $resourceID = null,
                            null|int $count = null,
                            null|string|SortDirectionEnum $sort = null,
                            null|string|ResponseFormatEnum $format = null,
                            null|array $queryParams = null,
                            null|bool $parseResponseHeaders = null): Response
    {
        if (!is_string($resourceType)) {
            $resourceType = $resourceType->value;
        }
        $path = "/{$resourceType}";
        if (null !== $resourceID) {
            $resourceID = trim((string)$resourceID);
            if ('' === $resourceID) {
                throw new \InvalidArgumentException('Resource ID must be null or valued.');
            }
            $path .= "/{$resourceID}";
        }
        $req = new Request(
            method: HTTPMethodEnum::GET,
            path: $path,
        );
        if (null !== $count) {
            $req->count = $count;
        }
        if (null !== $sort) {
            $req->sort = (string)$sort;
        }
        if (null !== $format) {
            $req->format = (string)$format;
        }
        if (null !== $parseResponseHeaders) {
            $req->parseResponseHeaders = $parseResponseHeaders;
        }
        if (null !== $queryParams) {
            $req->queryParams = $queryParams;
        }
        return $this->_client->exec($req);
    }

    /**
     * Queries for one or more resources of a given type, returning the unserialized response from the server.
     *
     * @see https://www.hl7.org/fhir/http.html#read
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypesEnum $resourceType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $resourceID
     * @param null|int $count
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\SortDirectionEnum $sort
     * @param null|string|\DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum $format
     * @param null|array $queryParams
     * @param null|bool $parseResponseHeaders
     * @return null|\DCarbone\PHPFHIRGenerated\TypeInterface
     * @throws \Exception
     */
    public function read(string|VersionTypesEnum $resourceType,
                         null|string|FHIRId|FHIRIdPrimitive $resourceID = null,
                         null|int $count = null,
                         null|string|SortDirectionEnum $sort = null,
                         null|string|ResponseFormatEnum $format = null,
                         null|array $queryParams = null,
                         null|bool $parseResponseHeaders = null): null|TypeInterface
    {
        $rc = $this->readRaw($resourceType, $resourceID, $count, $sort, $format, $queryParams, $parseResponseHeaders);
        $this->_requireOK($rc);
        return ResponseParser::parse($this->_version, $rc->resp);
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Client\Response $rc
     * @throws \DCarbone\PHPFHIRGenerated\Client\ClientErrorException
     * @throws \DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException
     */
    protected function _requireOK(Response $rc): void
    {
        if (isset($rc->err)) {
            throw new ClientErrorException($rc);
        }
        if (!isset($rc->code) || self::_STATUS_OK !== $rc->code) {
            throw new UnexpectedResponseCodeException($rc, self::_STATUS_OK);
        }
    }

}
