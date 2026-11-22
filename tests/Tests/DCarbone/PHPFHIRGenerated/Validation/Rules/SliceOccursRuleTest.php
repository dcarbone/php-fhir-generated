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

use DCarbone\PHPFHIRGenerated\Validation\Rules\SliceOccursRule;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockElementType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockResourceType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockStringPrimitiveType;
use PHPUnit\Framework\TestCase;

class SliceOccursRuleTest extends TestCase
{
    private function prim(string $value): MockStringPrimitiveType
    {
        return new MockStringPrimitiveType(value: $value);
    }

    private function field(string $name, string $class, mixed $value, bool $collection = false): array
    {
        return [$name => ['class' => $class, 'collection' => $collection, 'value' => $value]];
    }

    private function coding(string $system, string $code): MockElementType
    {
        return new MockElementType(
            name: 'Coding',
            fields: $this->field('system', MockStringPrimitiveType::class, $this->prim($system))
                + $this->field('code', MockStringPrimitiveType::class, $this->prim($code)),
        );
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

    private function slices(): array
    {
        return [
            ['name' => 'a', 'match' => ['system' => 'sa'], 'min' => 1, 'max' => 1],
            ['name' => 'b', 'match' => ['system' => 'sb'], 'max' => 2],
        ];
    }

    public function testNoErrorWhenAllSlicesWithinBounds()
    {
        $values = [$this->coding('sa', '1'), $this->coding('sb', '2'), $this->coding('other', '3')];
        $this->assertNull((new SliceOccursRule())->assert($this->resource([]), 'identifier', $this->slices(), $values));
    }

    public function testErrorWhenMinimumNotMet()
    {
        $err = (new SliceOccursRule())->assert($this->resource([]), 'identifier', $this->slices(), [$this->coding('sb', '2')]);
        $this->assertNotNull($err);
        $this->assertStringContainsString('"a"', $err);
    }

    public function testErrorWhenMinimumNotMetByNullValue()
    {
        $this->assertNotNull((new SliceOccursRule())->assert($this->resource([]), 'identifier', $this->slices(), null));
    }

    public function testErrorWhenMaximumExceeded()
    {
        $values = [$this->coding('sa', '1'), $this->coding('sa', '2')];
        $err = (new SliceOccursRule())->assert($this->resource([]), 'identifier', $this->slices(), $values);
        $this->assertNotNull($err);
        $this->assertStringContainsString('at most 1', $err);
    }

    public function testSingleValueIsTreatedAsCollection()
    {
        $this->assertNull((new SliceOccursRule())->assert($this->resource([]), 'identifier', [['name' => 'a', 'match' => ['code' => '1'], 'min' => 1]], $this->coding('sa', '1')));
    }
}
