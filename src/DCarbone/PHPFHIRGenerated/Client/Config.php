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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum;

/**
 * Class Config
 *
 * Configuration class for built-in FHIR API client.  If you are not using the built-in client,
 * you can ignore this class.
 */
class Config
{
    private string $_address;
    private array $_curlOpts;
    private array $_defaultQueryParams;
    private SerializeFormatEnum $_defaultFormat;
    private bool $_parseResponseHeaders;

    /**
     * Config Constructor
     *
     * @param string $address Fully qualified address of FHIR server, including scheme, port, and any path prefix.
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum $defaultFormat Default serialization format.  Defaults to XML.
     * @param array $defaultQueryParams Base query parameters array.  These will be added to every request.  May be overridden by an individual request.
     * @param array $curlOpts Base curl options array.  These will be added to every request.  May be overridden by an individual request.
     * @param bool $parseResponseHeaders Whether or not to parse headers from response.  This adds overhead to parsing each response, but is also necessary to extract response version information.
     */
    public function __construct(string $address,
                                SerializeFormatEnum $defaultFormat = SerializeFormatEnum::XML,
                                array $defaultQueryParams = [],
                                array $curlOpts = [],
                                bool $parseResponseHeaders = true)
    {
        $this->_address = $address;
        $this->_defaultFormat = $defaultFormat;
        $this->_defaultQueryParams = $defaultQueryParams;
        $this->_curlOpts = $curlOpts;
        $this->_parseResponseHeaders = $parseResponseHeaders;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->_address;
    }

    /**
     * @return \DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum
     */
    public function getDefaultFormat(): SerializeFormatEnum
    {
        return $this->_defaultFormat;
    }

    /**
     * @return array
     */
    public function getDefaultQueryParams(): array
    {
        return $this->_defaultQueryParams;
    }

    /**
     * @return array
     */
    public function getCurlOpts(): array
    {
        return $this->_curlOpts;
    }

    /**
     * @return bool
     */
    public function getParseResponseHeaders(): bool
    {
        return $this->_parseResponseHeaders;
    }
}
