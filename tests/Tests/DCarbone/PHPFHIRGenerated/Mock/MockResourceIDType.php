<?php declare(strict_types=1);

namespace Tests\DCarbone\PHPFHIRGenerated\Mock;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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

use DCarbone\PHPFHIRGenerated\Types\ResourceIDTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMinLengthRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;

class MockResourceIDType extends MockPrimitiveContainerType implements ResourceIDTypeInterface
{
    public function __construct(string|MockStringPrimitiveType $value,
                                array $fields = [],
                                array $validationRuleMap = [],
                                array $fhirComments = [],
                                string $versionName = self::DEFAULT_MOCK_VERSION_NAME,
                                string $semanticVersion = self::DEFAULT_MOCK_SEMANTIC_VERSION)
    {
        parent::__construct(
            name: 'id',
            fields: [
                'value' => [
                    'class' => MockStringPrimitiveType::class,
                    'value' => $value,
                ],
            ] + $fields,
            validationRuleMap: [
                'value' => [
                    ValuePatternMatchRule::NAME => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
                    ValueMinLengthRule::NAME => 1,
                ],
            ] + $validationRuleMap,
            fhirComments: $fhirComments,
            versionName: $versionName,
            semanticVersion: $semanticVersion,
        );
    }
}
