<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Validation\Rules;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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

use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueOneOfRule;
use Tests\DCarbone\PHPFHIRGenerated\Types\MockResourceType;
use Tests\DCarbone\PHPFHIRGenerated\Types\MockStringPrimitiveType;
use PHPUnit\Framework\TestCase;

class ValueOnOfRuleTest extends TestCase
{
    public function testNoErrorWhenValueOnlyAllowed()
    {
        $type = new MockStringPrimitiveType('string-primitive', 'one');
        $rule = new ValueOneOfRule();
        $err = $rule->assert($type, 'value', ['one'], $type->getValue());
        $this->assertNull($err);
    }

    public function testNoErrorWhenValueAllowed()
    {
        $type = new MockStringPrimitiveType('string-primitive', 'one');
        $rule = new ValueOneOfRule();
        $err = $rule->assert($type, 'value', ['one', 'two'], $type->getValue());
        $this->assertNull($err);
    }

    public function testNoErrorWhemValueEmpty()
    {
        $type = new MockStringPrimitiveType('string-primitive', null);
        $rule = new ValueOneOfRule();
        $err = $rule->assert($type, 'value', ['one'], $type->getValue());
        $this->assertNull($err);
    }

    public function testNoErrorWhenConstraintEmpty()
    {
        $type = new MockStringPrimitiveType('string-primitive', null);
        $rule = new ValueOneOfRule();
        $err = $rule->assert($type, 'value', [], $type->getValue());
        $this->assertNull($err);
    }

    public function testErrWhenValueNotAllowed()
    {
        $type = new MockStringPrimitiveType('string-primitive', 'three');
        $rule = new ValueOneOfRule();
        $err = $rule->assert($type, 'value', ['one', 'two'], $type->getValue());
        $this->assertNotNull($err);
    }
}
