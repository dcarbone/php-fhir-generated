<?php declare(strict_types=1);

namespace Tests\DCarbone\PHPFHIRGenerated\Mock;

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

use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;

abstract class AbstractMockType implements TypeInterface
{
    use MockJSONFieldExtractorTrait;

    public const DEFAULT_MOCK_VERSION_NAME = 'mock';
    public const DEFAULT_MOCK_SEMANTIC_VERSION = 'v99.99.99';

    protected string $_name;
    protected FHIRVersion $_fhirVersion;

    public function __construct(string $name,
                                string $versionName = self::DEFAULT_MOCK_VERSION_NAME,
                                string $semanticVersion = self::DEFAULT_MOCK_SEMANTIC_VERSION)
    {
        $this->_name = $name;

        $shortVersion = ltrim($semanticVersion, 'v');
        $shortVersion = match (substr_count($shortVersion, '.')) {
            1 => $shortVersion,
            2 => substr($shortVersion, 0, strrpos($shortVersion, '.')),
            default => implode('.', array_chunk(explode('.', $shortVersion), 2)[0])
        };

        $this->_fhirVersion = new FHIRVersion(
            $versionName,
            $semanticVersion,
            $shortVersion,
            intval(sprintf("%'.-08s", str_replace(['v', '.'], '', $semanticVersion))),
        );
    }

    public function _getFHIRTypeName(): string
    {
        return $this->_name;
    }

    public function _getFHIRVersion(): FHIRVersion
    {
        return $this->_fhirVersion;
    }
}
