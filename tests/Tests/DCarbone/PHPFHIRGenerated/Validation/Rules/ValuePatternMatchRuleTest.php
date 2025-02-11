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

use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use Tests\DCarbone\PHPFHIRGenerated\Types\MockResourceType;
use Tests\DCarbone\PHPFHIRGenerated\Types\MockStringPrimitiveType;
use PHPUnit\Framework\TestCase;

class ValuePatternMatchRuleTest extends TestCase
{
    public function testNoErrorWithValidPatternAndValue()
    {
        $type = new MockStringPrimitiveType('string-primitive', 'the quick brown fox jumped over the lazy dog');
        $rule = new ValuePatternMatchRule();
        $err = $rule->assert($type, 'value', '/^[a-z\s]+$/', $type->getValue());
        $this->assertNull($err);
    }

    public function testErrorWithValidPatternAndInvalidValue()
    {
        $type = new MockStringPrimitiveType('string-primitive', 'the quick brown fox jumped over the lazy dog');
        $rule = new ValuePatternMatchRule();
        $err = $rule->assert($type, 'value', '/^[a-z]+$/', $type->getValue());
        $this->assertNotNull($err);
    }

    public function testErrorWithInvalidPattern()
    {
        $type = new MockStringPrimitiveType('string-primitive', 'the quick brown fox jumped over the lazy dog');
        $rule = new ValuePatternMatchRule();
        $err = $rule->assert($type, 'value', '/^[a-+$/', $type->getValue());
        $this->assertNotNull($err);
    }

    /**
     * @see https://github.com/dcarbone/php-fhir/issues/150
     */
    public function testErrorWithValueOverflow()
    {
        $bigval = base64_encode(str_repeat('a', 12000));
        $type = new MockStringPrimitiveType('base64-primitive', $bigval);
        $rule = new ValuePatternMatchRule();
        $err = $rule->assert($type, 'value', '/^(\\s*([0-9a-zA-Z\\+\\/=]){4}\\s*)+$/', $type->getValue());
        $this->assertNotNull($err);
    }
}
