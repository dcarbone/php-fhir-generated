<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Validation\Rules;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 20th, 2025 13:35+0000
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

use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockResourceType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockStringPrimitiveType;
use PHPUnit\Framework\TestCase;

class MinOccursRuleTest extends TestCase
{
    public function testNoErrorWithExact()
    {
        $type = new MockResourceType(
            name: 'mock',
            fields: [
                'stuff' => [
                    'class' => MockStringPrimitiveType::class,
                    'collection' => true,
                    'value' => ['value-1', 'value-2'],
                ],
            ],
        );
        $rule = new MinOccursRule();
        $err = $rule->assert($type, 'stuff', 2, $type->getStuff());
        $this->assertNull($err);
    }

    public function testNoErrorWithMore()
    {
        $type = new MockResourceType(
            name: 'mock',
            fields: [
                'stuff' => [
                    'class' => MockStringPrimitiveType::class,
                    'collection' => true,
                    'value' => ['value-1', 'value-2', 'value-3'],
                ],
            ],
        );
        $rule = new MinOccursRule();
        $err = $rule->assert($type, 'stuff', 2, $type->getStuff());
        $this->assertNull($err);
    }

    public function testErrorWithEmptyValue()
    {
        $type = new MockResourceType(
            name: 'mock',
            fields: [
                'stuff' => [
                    'class' => MockStringPrimitiveType::class,
                    'collection' => true,
                ],
            ],
        );
        $rule = new MinOccursRule();
        $err = $rule->assert($type, 'stuff', 2, $type->getStuff());
        $this->assertNotNull($err);
    }

    public function testErrorWithLess()
    {
        $type = new MockResourceType(
            name: 'mock',
            fields: [
                'stuff' => [
                    'class' => MockStringPrimitiveType::class,
                    'collection' => true,
                    'value' => ['value-1'],
                ],
            ],
        );
        $rule = new MinOccursRule();
        $err = $rule->assert($type, 'stuff', 2, $type->getStuff());
        $this->assertNotNull($err);
    }
}
