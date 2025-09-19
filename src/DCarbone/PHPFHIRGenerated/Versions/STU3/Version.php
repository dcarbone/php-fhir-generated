<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 19th, 2025 16:36+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Versions\VersionConfig;
use DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;
use DCarbone\PHPFHIRGenerated\Versions\VersionTypeMapInterface;

class Version implements VersionInterface
{
    public const NAME = 'STU3';
    public const FHIR_SEMANTIC_VERSION = 'v3.0.1';
    public const FHIR_SHORT_VERSION = 'v3.0';
    public const FHIR_VERSION_INTEGER = 30100000;
    public const FHIR_GENERATION_DATE = 'Wed, Apr 19, 2017 07:44+1000';

    private const _GENERATED_CONFIG = [];

    private static FHIRVersion $_fhirVersion;

    /** @var \DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface */
    private VersionConfigInterface $_config;

    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypeMap */
    private static VersionTypeMapInterface $_typeMap;

    /**
     * Version Constructor
     * @param null|array|\DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface $config
     */
    public function __construct(null|array|VersionConfigInterface $config = null)
    {
        if (!is_object($config)) {
            $config = new VersionConfig(array_merge(self::_GENERATED_CONFIG, (array)$config));
        } else if (!($config instanceof VersionConfig)) {
            throw new \InvalidArgumentException(sprintf(
                '$config must be an instance of \\%s, %s given',
                VersionConfig::class,
                get_class($config)
            ));
        }
        $this->_config = $config;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }

    /**
     * @return \DCarbone\PHPFHIRGenerated\FHIRVersion
     */
    public static function getFHIRVersion(): FHIRVersion
    {
        if (!isset(self::$_fhirVersion)) {
            self::$_fhirVersion = new FHIRVersion(
                self::NAME,
                self::FHIR_SEMANTIC_VERSION,
                self::FHIR_SHORT_VERSION,
                self::FHIR_VERSION_INTEGER,
            );
        }
        return self::$_fhirVersion;
    }

    /**
     * @return string
     */
    public function getFHIRSemanticVersion(): string
    {
        return self::FHIR_SEMANTIC_VERSION;
    }

    /**
     * @return string
     */
    public function getFHIRShortVersion(): string
    {
        return self::FHIR_SHORT_VERSION;
    }

    /**
     * @return int
     */
    public function getFHIRVersionInteger(): int
    {
        return self::FHIR_VERSION_INTEGER;
    }

    /**
     * @return string
     */
    public function getFHIRGenerationDate(): string
    {
        return self::FHIR_GENERATION_DATE;
    }

    /**
     * @return \DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface
     */
    public function getConfig(): VersionConfigInterface
    {
        return $this->_config;
    }

    /**
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypeMap
     */
    public function getTypeMap(): VersionTypeMapInterface
    {
        if (!isset(self::$_typeMap)) {
            self::$_typeMap = new VersionTypeMap();
        }
        return self::$_typeMap;
    }

    public function __toString(): string
    {
        return (string)self::getFHIRVersion();
    }
}
