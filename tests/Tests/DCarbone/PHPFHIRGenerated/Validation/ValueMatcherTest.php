<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Validation;

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

use DCarbone\PHPFHIRGenerated\Validation\ValueMatcher;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockElementType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockResourceType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockStringPrimitiveType;
use PHPUnit\Framework\TestCase;

class ValueMatcherTest extends TestCase
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

    public function testScalarMatchesPrimitive()
    {
        $this->assertTrue(ValueMatcher::matches($this->prim('a'), 'a'));
        $this->assertFalse(ValueMatcher::matches($this->prim('a'), 'b'));
        $this->assertFalse(ValueMatcher::matches(null, 'a'));
    }

    public function testNumericComparisonIgnoresRepresentation()
    {
        $this->assertTrue(ValueMatcher::matches($this->prim('1.0'), 1));
        $this->assertFalse(ValueMatcher::matches($this->prim('2'), 1));
        $this->assertFalse(ValueMatcher::matches($this->prim('x'), 1));
        $this->assertTrue(ValueMatcher::matches($this->prim('-0.50'), -0.5));
        $this->assertTrue(ValueMatcher::matches($this->prim('+7'), 7));
        // beyond float precision: a float cast would call these equal
        $this->assertFalse(ValueMatcher::matches($this->prim('9007199254740993'), 9007199254740992));
        $this->assertFalse(ValueMatcher::matches($this->prim('0.1000000000000000001'), 0.1));
    }

    public function testExponentNotationIsExpanded()
    {
        $this->assertTrue(ValueMatcher::matches($this->prim('1e0'), 1));
        $this->assertTrue(ValueMatcher::matches($this->prim('1.5E+2'), 150));
        $this->assertTrue(ValueMatcher::matches($this->prim('15e-1'), 1.5));
        $this->assertTrue(ValueMatcher::matches($this->prim('-2.50e1'), -25));
        $this->assertFalse(ValueMatcher::matches($this->prim('1e1'), 1));
        $this->assertFalse(ValueMatcher::matches($this->prim('1e'), 1));
        $this->assertFalse(ValueMatcher::matches($this->prim('e1'), 10));
    }

    public function testVerySmallFloats()
    {
        $this->assertTrue(ValueMatcher::matches($this->prim('0.0000005'), 0.0000005));
        $this->assertTrue(ValueMatcher::matches($this->prim('0.00000050'), 5.0E-7));
        $this->assertTrue(ValueMatcher::matches($this->prim('5e-7'), 0.0000005));
        $this->assertTrue(ValueMatcher::matches($this->prim('-0.0000005'), -0.0000005));
        $this->assertTrue(ValueMatcher::matches($this->prim('0.000000000000000000001'), 1e-21));
        $this->assertFalse(ValueMatcher::matches($this->prim('0.000005'), 0.0000005));
        $this->assertFalse(ValueMatcher::matches($this->prim('0'), 0.0000005));
    }

    public function testVeryLargeFloats()
    {
        $this->assertTrue(ValueMatcher::matches($this->prim('10000000000000000000000000'), 1e25));
        $this->assertTrue(ValueMatcher::matches($this->prim('1.5e25'), 1.5e25));
        $this->assertFalse(ValueMatcher::matches($this->prim('10000000000000000000000001'), 1e25));
    }

    public function testFloatsNeedingFullPrecision()
    {
        $this->assertTrue(ValueMatcher::matches($this->prim('0.30000000000000004'), 0.1 + 0.2));
        $this->assertFalse(ValueMatcher::matches($this->prim('0.3'), 0.1 + 0.2));
        $this->assertTrue(ValueMatcher::matches($this->prim('0.1'), 0.1));
    }

    public function testFloatComparisonIgnoresIniPrecision()
    {
        $precision = ini_get('precision');
        $serializePrecision = ini_get('serialize_precision');
        ini_set('precision', '3');
        ini_set('serialize_precision', '17');
        try {
            $this->assertTrue(ValueMatcher::matches($this->prim('0.1'), 0.1));
            $this->assertTrue(ValueMatcher::matches($this->prim('123456.789'), 123456.789));
        } finally {
            ini_set('precision', $precision);
            ini_set('serialize_precision', $serializePrecision);
        }
    }

    public function testZerosSignsAndLeadingZeros()
    {
        $this->assertTrue(ValueMatcher::matches($this->prim('-0.0'), 0));
        $this->assertTrue(ValueMatcher::matches($this->prim('+0'), -0.0));
        $this->assertTrue(ValueMatcher::matches($this->prim('0e5'), 0));
        $this->assertTrue(ValueMatcher::matches($this->prim('007'), 7));
        $this->assertTrue(ValueMatcher::matches($this->prim('00.50'), 0.5));
        $this->assertFalse(ValueMatcher::matches($this->prim('-1'), 1));
        $this->assertFalse(ValueMatcher::matches($this->prim('.5'), 0.5));
        $this->assertFalse(ValueMatcher::matches($this->prim('5.'), 5));
        $this->assertFalse(ValueMatcher::matches($this->prim(' 5'), 5));
    }

    public function testNonFiniteAndOutOfRangeNumbersNeverMatch()
    {
        $this->assertFalse(ValueMatcher::matches($this->prim('1'), INF));
        $this->assertFalse(ValueMatcher::matches($this->prim('1'), NAN));
        $this->assertFalse(ValueMatcher::matches($this->prim('1e1001'), 1));
        $this->assertFalse(ValueMatcher::matches($this->prim('1e99999999999999999999'), 1));
        $this->assertFalse(ValueMatcher::matches($this->prim('1e1000'), 1));
    }

    public function testRawScalars()
    {
        $this->assertTrue(ValueMatcher::matches(5, 5));
        $this->assertTrue(ValueMatcher::matches(5, 5.0));
        $this->assertTrue(ValueMatcher::matches(0.0000005, 5e-7));
        $this->assertTrue(ValueMatcher::matches(true, true));
        $this->assertFalse(ValueMatcher::matches('true', true));
        $this->assertFalse(ValueMatcher::matches(1, true));
        $this->assertFalse(ValueMatcher::matches(5, '5'));
    }

    public function testPatternIsSubsetMatch()
    {
        $coding = $this->coding('http://sys', 'c1');
        $this->assertTrue(ValueMatcher::matches($coding, ['system' => 'http://sys']));
        $this->assertTrue(ValueMatcher::matches($coding, ['system' => 'http://sys', 'code' => 'c1']));
        $this->assertFalse(ValueMatcher::matches($coding, ['system' => 'http://sys', 'code' => 'c2']));
    }

    public function testPatternMatchesAnyValueOfCollectionField()
    {
        $cc = $this->codeableConcept([$this->coding('s1', 'a'), $this->coding('s2', 'b')]);
        $this->assertTrue(ValueMatcher::matches($cc, ['coding' => [['system' => 's2', 'code' => 'b']]]));
        $this->assertTrue(ValueMatcher::matches($cc, ['coding' => ['system' => 's1']]));
        $this->assertFalse(ValueMatcher::matches($cc, ['coding' => [['system' => 's1', 'code' => 'b']]]));
    }

    public function testListRequiresEveryEntry()
    {
        $cc = $this->codeableConcept([$this->coding('s1', 'a'), $this->coding('s2', 'b')]);
        $this->assertTrue(ValueMatcher::matches($cc, ['coding' => [['code' => 'a'], ['code' => 'b']]]));
        $this->assertFalse(ValueMatcher::matches($cc, ['coding' => [['code' => 'a'], ['code' => 'z']]]));
    }

    public function testMatchesEachRequiresEveryOccurrence()
    {
        $this->assertTrue(ValueMatcher::matchesEach([$this->coding('s', 'a'), $this->coding('s', 'b')], ['system' => 's']));
        $this->assertFalse(ValueMatcher::matchesEach([$this->coding('s', 'a'), $this->coding('t', 'b')], ['system' => 's']));
        $this->assertTrue(ValueMatcher::matchesEach($this->coding('s', 'a'), ['system' => 's']));
        // within a value, a list entry still only has to match some entry of the field.
        $cc = $this->codeableConcept([$this->coding('s1', 'a'), $this->coding('s2', 'b')]);
        $this->assertTrue(ValueMatcher::matchesEach([$cc], ['coding' => [['code' => 'b']]]));
    }

    public function testEqualsIsExact()
    {
        $this->assertTrue(ValueMatcher::equals($this->prim('a'), 'a'));
        $this->assertTrue(ValueMatcher::equals($this->coding('s', 'c'), ['system' => 's', 'code' => 'c']));
        $this->assertFalse(ValueMatcher::equals($this->coding('s', 'c', 'C'), ['system' => 's', 'code' => 'c']));
        $this->assertFalse(ValueMatcher::equals($this->coding('s', 'c'), ['system' => 's', 'code' => 'c', 'display' => 'C']));
        $this->assertFalse(ValueMatcher::equals($this->coding('s', 'c'), 'c'));
        $this->assertFalse(ValueMatcher::equals(null, ['code' => 'c']));
    }

    public function testEqualsComparesListsInFull()
    {
        $fixed = ['coding' => [['system' => 's1', 'code' => 'a'], ['system' => 's2', 'code' => 'b']]];
        $this->assertTrue(ValueMatcher::equals($this->codeableConcept([$this->coding('s1', 'a'), $this->coding('s2', 'b')]), $fixed));
        $this->assertFalse(ValueMatcher::equals($this->codeableConcept([$this->coding('s2', 'b'), $this->coding('s1', 'a')]), $fixed));
        $this->assertFalse(ValueMatcher::equals($this->codeableConcept([$this->coding('s1', 'a')]), $fixed));
        $this->assertFalse(ValueMatcher::equals($this->codeableConcept([$this->coding('s1', 'a'), $this->coding('s2', 'b'), $this->coding('s3', 'c')]), $fixed));
    }

    public function testEqualsRequiresEveryOccurrence()
    {
        $this->assertTrue(ValueMatcher::equals([$this->coding('s', 'c'), $this->coding('s', 'c')], ['system' => 's', 'code' => 'c']));
        $this->assertFalse(ValueMatcher::equals([$this->coding('s', 'c'), $this->coding('s', 'd')], ['system' => 's', 'code' => 'c']));
    }

    public function testNullsAndEmptyCollections()
    {
        $this->assertFalse(ValueMatcher::matches([], 'a'));
        $this->assertFalse(ValueMatcher::matches([null], 'a'));
        $this->assertTrue(ValueMatcher::matches([null, $this->prim('a')], 'a'));
        $this->assertFalse(ValueMatcher::matchesEach([null, $this->prim('a')], 'a'));
        $this->assertFalse(ValueMatcher::equals([null, $this->prim('a')], 'a'));
        $this->assertFalse(ValueMatcher::matchesEach(null, 'a'));
        // an absent value is the rules' concern, not the matcher's.
        $this->assertTrue(ValueMatcher::matchesEach([], 'a'));
        $this->assertTrue(ValueMatcher::equals([], 'a'));
    }

    public function testPatternListOnScalarField()
    {
        $this->assertTrue(ValueMatcher::matches([$this->prim('a'), $this->prim('b')], ['a', 'b']));
        $this->assertFalse(ValueMatcher::matches([$this->prim('a')], ['a', 'b']));
        $this->assertTrue(ValueMatcher::matches($this->prim('a'), ['a']));
    }

    public function testEmptyPatternMatchesAnyValue()
    {
        $this->assertTrue(ValueMatcher::matches($this->coding('s', 'c'), []));
        $this->assertTrue(ValueMatcher::matches($this->prim('a'), []));
        $this->assertFalse(ValueMatcher::equals($this->coding('s', 'c'), []));
    }

    public function testEqualsAcceptsElidedSingletonList()
    {
        $cc = new MockElementType(
            name: 'CodeableConcept',
            fields: $this->field('coding', MockElementType::class, $this->coding('s', 'c')),
        );
        $this->assertTrue(ValueMatcher::equals($cc, ['coding' => [['system' => 's', 'code' => 'c']]]));
        $this->assertFalse(ValueMatcher::equals($cc, ['coding' => [['system' => 's', 'code' => 'c'], ['system' => 's', 'code' => 'd']]]));
    }

    public function testEqualsIgnoresComments()
    {
        $coding = new MockElementType(
            name: 'Coding',
            fields: $this->field('fhir_comments', MockStringPrimitiveType::class, $this->prim('note'))
                + $this->field('code', MockStringPrimitiveType::class, $this->prim('c')),
        );
        $this->assertTrue(ValueMatcher::equals($coding, ['code' => 'c']));
    }

    public function testEqualsComparesNestedNumbersByValue()
    {
        $quantity = new MockElementType(
            name: 'Quantity',
            fields: $this->field('value', MockStringPrimitiveType::class, $this->prim('0.00000050'))
                + $this->field('unit', MockStringPrimitiveType::class, $this->prim('mg')),
        );
        $this->assertTrue(ValueMatcher::equals($quantity, ['value' => 5e-7, 'unit' => 'mg']));
        $this->assertFalse(ValueMatcher::equals($quantity, ['value' => 5e-6, 'unit' => 'mg']));
        $this->assertFalse(ValueMatcher::equals($quantity, ['value' => ['nested' => 1], 'unit' => 'mg']));
        $this->assertFalse(ValueMatcher::equals($quantity, ['value' => [5e-7], 'unit' => 'mg']));
    }

    public function testComplexValueDoesNotMatchScalar()
    {
        $this->assertFalse(ValueMatcher::matches($this->coding('http://sys', 'c1'), 'c1'));
    }
}
