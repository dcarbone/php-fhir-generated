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

use DCarbone\PHPFHIRGenerated\Validation\Rules\PatternValueRule;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockElementType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockResourceType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockStringPrimitiveType;
use PHPUnit\Framework\TestCase;

class PatternValueRuleTest extends TestCase
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

    public function testNoErrorWhenValueIsNull()
    {
        $this->assertNull((new PatternValueRule())->assert($this->resource([]), 'code', ['coding' => [['code' => 'c']]], null));
    }

    public function testNoErrorWhenPatternSatisfied()
    {
        $cc = $this->codeableConcept([$this->coding('s', 'c'), $this->coding('s', 'd')]);
        $this->assertNull((new PatternValueRule())->assert($this->resource([]), 'code', ['coding' => [['system' => 's', 'code' => 'c']]], $cc));
    }

    public function testErrorWhenPatternNotSatisfied()
    {
        $cc = $this->codeableConcept([$this->coding('s', 'd')]);
        $this->assertNotNull((new PatternValueRule())->assert($this->resource([]), 'code', ['coding' => [['system' => 's', 'code' => 'c']]], $cc));
    }

    public function testCollectionOfValuesMatchesOnlyWhenEveryOneDoes()
    {
        $rule = new PatternValueRule();
        $mixed = [$this->coding('s', 'c'), $this->coding('other', 'c')];
        $this->assertNotNull($rule->assert($this->resource([]), 'code', ['system' => 's'], $mixed));
        $matching = [$this->coding('s', 'c'), $this->coding('s', 'd')];
        $this->assertNull($rule->assert($this->resource([]), 'code', ['system' => 's'], $matching));
    }
}
