<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Validation\Rules;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: November 22nd, 2026 04:37+0000
 *
 * PHPFHIR Copyright:
 *
 * Copyright 2016-2026 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Validation\Rules\FixedValueRule;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockElementType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockResourceType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockStringPrimitiveType;
use PHPUnit\Framework\TestCase;

class FixedValueRuleTest extends TestCase
{
    private function prim(string $value): MockStringPrimitiveType
    {
        return new MockStringPrimitiveType(value: $value);
    }

    private function field(string $name, string $class, mixed $value, bool $collection = false): array
    {
        return [$name => ['class' => $class, 'collection' => $collection, 'value' => $value]];
    }

    private function coding(string $system, string $code, null|string $display = null): MockElementType
    {
        $fields = $this->field('system', MockStringPrimitiveType::class, $this->prim($system))
            + $this->field('code', MockStringPrimitiveType::class, $this->prim($code));
        if (null !== $display) {
            $fields += $this->field('display', MockStringPrimitiveType::class, $this->prim($display));
        }
        return new MockElementType(name: 'Coding', fields: $fields);
    }

    private function codeableConcept(array $codings): MockElementType
    {
        return new MockElementType(
            name: 'CodeableConcept',
            fields: $this->field('coding', MockElementType::class, $codings, true),
        );
    }

    private function resource(array $fields): MockResourceType
    {
        return new MockResourceType(name: 'mock', fields: $fields);
    }

    public function testNoErrorWhenValueIsNull()
    {
        $type = $this->resource([]);
        $this->assertNull((new FixedValueRule())->assert($type, 'status', 'final', null));
    }

    public function testNoErrorWhenFixedValueMatches()
    {
        $type = $this->resource([]);
        $this->assertNull((new FixedValueRule())->assert($type, 'status', 'final', $this->prim('final')));
    }

    public function testErrorWhenFixedValueDiffers()
    {
        $type = $this->resource([]);
        $this->assertNotNull((new FixedValueRule())->assert($type, 'status', 'final', $this->prim('draft')));
    }

    public function testComplexFixedValue()
    {
        $type = $this->resource([]);
        $rule = new FixedValueRule();
        $this->assertNull($rule->assert($type, 'code', ['system' => 's', 'code' => 'c'], $this->coding('s', 'c')));
        $this->assertNotNull($rule->assert($type, 'code', ['system' => 's', 'code' => 'c'], $this->coding('s', 'd')));
    }

    public function testComplexFixedValueRejectsAdditionalFields()
    {
        $type = $this->resource([]);
        $rule = new FixedValueRule();
        $this->assertNotNull($rule->assert($type, 'code', ['system' => 's', 'code' => 'c'], $this->coding('s', 'c', 'C')));
        $this->assertNull($rule->assert($type, 'code', ['system' => 's', 'code' => 'c', 'display' => 'C'], $this->coding('s', 'c', 'C')));
    }

    public function testComplexFixedValueRejectsAdditionalEntries()
    {
        $type = $this->resource([]);
        $rule = new FixedValueRule();
        $fixed = ['coding' => [['system' => 's', 'code' => 'c']]];
        $this->assertNull($rule->assert($type, 'code', $fixed, $this->codeableConcept([$this->coding('s', 'c')])));
        $this->assertNotNull($rule->assert($type, 'code', $fixed, $this->codeableConcept([$this->coding('s', 'c'), $this->coding('s', 'd')])));
    }

    public function testEveryOccurrenceMustMatch()
    {
        $type = $this->resource([]);
        $rule = new FixedValueRule();
        $this->assertNull($rule->assert($type, 'code', ['system' => 's', 'code' => 'c'], [$this->coding('s', 'c'), $this->coding('s', 'c')]));
        $this->assertNotNull($rule->assert($type, 'code', ['system' => 's', 'code' => 'c'], [$this->coding('s', 'c'), $this->coding('s', 'd')]));
        $this->assertNotNull($rule->assert($type, 'status', 'final', [$this->prim('final'), $this->prim('draft')]));
    }
}
