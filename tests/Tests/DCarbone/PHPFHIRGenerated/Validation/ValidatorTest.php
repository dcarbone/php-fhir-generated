<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Validation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 20th, 2026 01:17+0000
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
use DCarbone\PHPFHIRGenerated\Validation\Rules\CodeBindingRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\FixedValueRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MaxOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\PatternValueRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\SliceOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMaxLengthRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMinLengthRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueOneOfRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    public function testValidatorHasBaseRules()
    {
        $rules = Validator::getRules();
        $this->assertCount(11, $rules);

        $this->assertArrayHasKey(ValueOneOfRule::NAME, $rules);
        $this->assertInstanceOf(ValueOneOfRule::class, $rules[ValueOneOfRule::NAME]);

        $this->assertArrayHasKey(ValueMinLengthRule::NAME, $rules);
        $this->assertInstanceOf(ValueMinLengthRule::class, $rules[ValueMinLengthRule::NAME]);

        $this->assertArrayHasKey(ValueMaxLengthRule::NAME, $rules);
        $this->assertInstanceOf(ValueMaxLengthRule::class, $rules[ValueMaxLengthRule::NAME]);

        $this->assertArrayHasKey(ValuePatternMatchRule::NAME, $rules);
        $this->assertInstanceOf(ValuePatternMatchRule::class, $rules[ValuePatternMatchRule::NAME]);

        $this->assertArrayHasKey(MinOccursRule::NAME, $rules);
        $this->assertInstanceOf(MinOccursRule::class, $rules[MinOccursRule::NAME]);

        $this->assertArrayHasKey(MaxOccursRule::NAME, $rules);
        $this->assertInstanceOf(MaxOccursRule::class, $rules[MaxOccursRule::NAME]);

        $this->assertArrayHasKey(FixedValueRule::NAME, $rules);
        $this->assertInstanceOf(FixedValueRule::class, $rules[FixedValueRule::NAME]);

        $this->assertArrayHasKey(PatternValueRule::NAME, $rules);
        $this->assertInstanceOf(PatternValueRule::class, $rules[PatternValueRule::NAME]);

        $this->assertArrayHasKey(SliceOccursRule::NAME, $rules);
        $this->assertInstanceOf(SliceOccursRule::class, $rules[SliceOccursRule::NAME]);

        $this->assertArrayHasKey(ChoiceOccursRule::NAME, $rules);
        $this->assertInstanceOf(ChoiceOccursRule::class, $rules[ChoiceOccursRule::NAME]);

        $this->assertArrayHasKey(CodeBindingRule::NAME, $rules);
        $this->assertInstanceOf(CodeBindingRule::class, $rules[CodeBindingRule::NAME]);
    }

    public function testTightenAddsRulesMissingFromBase()
    {
        $out = Validator::tighten([MinOccursRule::NAME => 1], [MaxOccursRule::NAME => 3]);
        $this->assertSame([MinOccursRule::NAME => 1, MaxOccursRule::NAME => 3], $out);
    }

    public function testTightenNeverLowersMinimum()
    {
        $this->assertSame([MinOccursRule::NAME => 2], Validator::tighten([MinOccursRule::NAME => 2], [MinOccursRule::NAME => 1]));
        $this->assertSame([MinOccursRule::NAME => 3], Validator::tighten([MinOccursRule::NAME => 2], [MinOccursRule::NAME => 3]));
        $this->assertSame([MinOccursRule::NAME => 1], Validator::tighten([MinOccursRule::NAME => 0], [MinOccursRule::NAME => 1]));
    }

    public function testTightenNeverRaisesMaximum()
    {
        $this->assertSame([MaxOccursRule::NAME => 2], Validator::tighten([MaxOccursRule::NAME => 2], [MaxOccursRule::NAME => 5]));
        $this->assertSame([MaxOccursRule::NAME => 1], Validator::tighten([MaxOccursRule::NAME => 2], [MaxOccursRule::NAME => 1]));
    }

    public function testTightenTreatsUnlimitedMaximumAsNoBound()
    {
        $this->assertSame([MaxOccursRule::NAME => 4], Validator::tighten([MaxOccursRule::NAME => -1], [MaxOccursRule::NAME => 4]));
        $this->assertSame([MaxOccursRule::NAME => 4], Validator::tighten([MaxOccursRule::NAME => 4], [MaxOccursRule::NAME => -1]));
    }

    public function testTightenReplacesOtherRules()
    {
        $out = Validator::tighten([ValuePatternMatchRule::NAME => '/a/'], [ValuePatternMatchRule::NAME => '/b/']);
        $this->assertSame([ValuePatternMatchRule::NAME => '/b/'], $out);
    }
}
