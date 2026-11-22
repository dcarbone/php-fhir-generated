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

use DCarbone\PHPFHIRGenerated\Validation\Rules\ChoiceOccursRule;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockElementType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockResourceType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockStringPrimitiveType;
use PHPUnit\Framework\TestCase;

class ChoiceOccursRuleTest extends TestCase
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
        // every variant is a field of the type, whether or not it is set.
        $fields += $this->field('valueString', MockStringPrimitiveType::class, null) + $this->field('valueCode', MockStringPrimitiveType::class, null);
        return new MockResourceType(name: 'mock', fields: $fields);
    }

    private function constraint(array $extra = []): array
    {
        return ['fields' => ['valueString', 'valueCode']] + $extra;
    }

    public function testNoErrorWithExactlyOneVariant()
    {
        $type = $this->resource($this->field('valueString', MockStringPrimitiveType::class, $this->prim('x')));
        $this->assertNull((new ChoiceOccursRule())->assert($type, 'value[x]', $this->constraint(['min' => 1, 'max' => 1]), null));
    }

    public function testErrorWhenNoVariantSetAndMinimumRequired()
    {
        $type = $this->resource($this->field('other', MockStringPrimitiveType::class, $this->prim('x')));
        $this->assertNotNull((new ChoiceOccursRule())->assert($type, 'value[x]', $this->constraint(['min' => 1]), null));
    }

    public function testErrorWhenTooManyVariantsSet()
    {
        $type = $this->resource(
            $this->field('valueString', MockStringPrimitiveType::class, $this->prim('x'))
            + $this->field('valueCode', MockStringPrimitiveType::class, $this->prim('y')),
        );
        $this->assertNotNull((new ChoiceOccursRule())->assert($type, 'value[x]', $this->constraint(['max' => 1]), null));
    }

    public function testErrorWhenDisallowedVariantSet()
    {
        $type = $this->resource($this->field('valueCode', MockStringPrimitiveType::class, $this->prim('y')));
        $rule = new ChoiceOccursRule();
        $this->assertNull($rule->assert($type, 'value[x]', $this->constraint(['allowed' => ['valueCode']]), null));
        $err = $rule->assert($type, 'value[x]', $this->constraint(['allowed' => ['valueString']]), null);
        $this->assertNotNull($err);
        $this->assertStringContainsString('valueCode', $err);
    }
}
