<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU2;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 8th, 2024 03:16+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Copyright (c) 2011+, HL7, Inc.
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

/**
 * This client is intended for debug purposes only, and is not intended to be used in a production environment.
 *
 * Its API is subject to change at any time.
 *
 * Class PHPFHIRDebugClient
 * @package \DCarbone\PHPFHIRGenerated\DSTU2
 */
class PHPFHIRDebugClient
{
    private const _BASE_CURL_OPTS = [
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => 0,
        CURLOPT_USERAGENT => 'php-fhir debug client (build: Sat, Oct 24, 2015 07:41+1100; fhir version: DSTU2)',
    ];

    /** @var string */
    private string $_baseUrl;
    /** @var array */
    private array $_curlOpts;

    /**
     * PHPFHIRDebugClient Constructor
     *
     * @param string $baseUrl URL of FHIR server to query
     * @param array $curlOpts Base curl options array
     */
    public function __construct(string $baseUrl, array $curlOpts = [], )
    {
        $this->_baseUrl = $baseUrl;
        $this->_curlOpts = $curlOpts;
    }

    /**
     * @return string
     */
    public function _getBaseUrl(): string
    {
        return $this->_baseUrl;
    }

    /**
     * @return array
     */
    public function _getBaseCurlOpts(): array
    {
        return $this->_curlOpts;
    }

    /**
     * @param string $path
     * @param array $queryParams
     * @param array $curlOpts
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRDebugClientResponse
     */
    public function get(string $path, array $queryParams = [], array $curlOpts = []): PHPFHIRDebugClientResponse    {
        $url = sprintf('%s%s?%s', $this->_baseUrl, $path, http_build_query($queryParams, '', '&',  PHP_QUERY_RFC3986));

        $ch = curl_init($url);
        curl_setopt_array(
            $ch,
            self::_BASE_CURL_OPTS + $this->_curlOpts + $curlOpts
        );

        $resp = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err = curl_error($ch);
        curl_close($ch);

        $rc = new PHPFHIRDebugClientResponse();
        $rc->url = $url;
        $rc->code = $code;
        $rc->resp = $resp;
        $rc->err = $err;

        return $rc;
    }

    /**
     * Execute a read operation for a particular resource.
     *
     * @see https://www.hl7.org/fhir/http.html#read
     *
     * @param string|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeEnum $resource
     * @param string $id
     * @param string|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRApiFormatEnum $format
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRResponseParser $parser
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface
     * @throws \Exception
     */
    public function readOne(string|PHPFHIRTypeEnum $resource, string $id, string|PHPFHIRApiFormatEnum $format = PHPFHIRApiFormatEnum::JSON, null|PHPFHIRResponseParser $parser = null): null|PHPFHIRTypeInterface
    {
        if (!is_string($resource)) {
            $resource = $resource->value;
        }
        if (!is_string($format)) {
            $format = $format->value;
        }

        $rc = $this->get(sprintf('/%s/%s', $resource, $id), ['_format' => $format]);

        if ('' !== $rc->err) {
            throw new \Exception(sprintf('Error executing "%s": %s', $rc->url, $rc->err));
        }
        if (200 !== $rc->code) {
            throw new \Exception(sprintf('Error executing "%s": Expected 200 OK, saw %d', $rc->url, $rc->code));
        }

        if (null === $parser) {
            $parser = new PHPFHIRResponseParser(new PHPFHIRConfig());
        }

        return $parser->parse($rc->resp);
    }

    /**
     * Queries for the first available of a given resource
     *
     * @see https://www.hl7.org/fhir/http.html#read
     *
     * @param string|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeEnum $resource
     * @param string|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRApiFormatEnum $format
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRResponseParser $parser
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface
     * @throws \Exception
     */
    public function readFirst(string|PHPFHIRTypeEnum $resource, string|PHPFHIRApiFormatEnum $format = PHPFHIRApiFormatEnum::JSON, null|PHPFHIRResponseParser $parser = null): null|PHPFHIRTypeInterface
    {
        if (!is_string($resource)) {
            $resource = $resource->value;
        }
        if (!is_string($format)) {
            $format = $format->value;
        }

        $rc = $this->get(sprintf('/%s', $resource), ['_format' => $format, '_count' => '1']);

        if ('' !== $rc->err) {
            throw new \Exception(sprintf('Error executing "%s": %s', $rc->url, $rc->err));
        }
        if (200 !== $rc->code) {
            throw new \Exception(sprintf('Error executing "%s": Expected 200 OK, saw %d', $rc->url, $rc->code));
        }

        if (null === $parser) {
            $parser = new PHPFHIRResponseParser(new PHPFHIRConfig());
        }

        return $parser->parse($rc->resp);
    }
}
