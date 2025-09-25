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

use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\VersionTypeMapInterface;

class MockVersionTypeMap implements VersionTypeMapInterface
{
    public static function getMap(): array
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public static function getContainableTypes(): array
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public static function getTypeClassname(string|\stdClass|\SimpleXMLElement $input): null|string
    {
        return match (true) {
            is_string($input) => MockResourceType::class,
            $input instanceof \stdClass && isset($input->resourceType) => MockResourceType::class,
            default => throw new \BadMethodCallException('Not implemented'),
        };
    }

    public static function getContainedTypeClassname(string|\stdClass|\SimpleXMLElement $input): null|string
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public static function isContainableType(string|\stdClass|\SimpleXMLElement|TypeInterface $input): bool
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public static function mustGetContainedTypeClassnameFromXML(\SimpleXMLElement $node): string
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public static function mustGetContainedTypeClassnameFromJSON(\stdClass $decoded): string
    {
        throw new \BadMethodCallException('Not implemented');
    }
}
