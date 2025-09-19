<?php declare(strict_types=1);

namespace Tests\DCarbone\PHPFHIRGenerated\Mock;

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
 */

use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;
use DCarbone\PHPFHIRGenerated\Versions\VersionTypeMapInterface;

class MockVersion implements VersionInterface
{
    public const NAME = 'Mock';
    public const FHIR_SEMANTIC_VERSION = 'v99.99.99';
    public const FHIR_SHORT_VERSION = 'v9.9';
    public const FHIR_VERSION_INTEGER = 999999999;

    private static FHIRVersion $_fhirVersion;
    private static VersionTypeMapInterface $_typeMap;

    private VersionConfigInterface $_config;

    public function __construct(null|VersionConfigInterface $config = null)
    {
        $this->_config = $config ?? new MockVersionConfig();
    }

    public function getName(): string
    {
        return self::NAME;
    }

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

    public function getFHIRSemanticVersion(): string
    {
        return self::FHIR_SEMANTIC_VERSION;
    }

    public function getFHIRShortVersion(): string
    {
        return self::FHIR_SHORT_VERSION;
    }

    public function getFHIRVersionInteger(): int
    {
        return self::FHIR_VERSION_INTEGER;
    }

    public function getFHIRGenerationDate(): string
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public function getConfig(): VersionConfigInterface
    {
        return $this->_config;
    }

    public function getTypeMap(): VersionTypeMapInterface
    {
        if (!isset(self::$_typeMap)) {
            self::$_typeMap = new MockVersionTypeMap();
        }
        return self::$_typeMap;
    }
}
