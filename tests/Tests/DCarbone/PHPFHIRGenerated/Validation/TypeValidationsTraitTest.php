<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Validation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:49+0000
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

use DCarbone\PHPFHIRGenerated\Validation\Rules\MaxOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMaxLengthRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMinLengthRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueOneOfRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use Tests\DCarbone\PHPFHIRGenerated\Types\MockElementType;
use Tests\DCarbone\PHPFHIRGenerated\Types\MockPrimitiveContainerType;
use Tests\DCarbone\PHPFHIRGenerated\Types\MockResourceType;
use Tests\DCarbone\PHPFHIRGenerated\Types\MockStringPrimitiveType;
use PHPUnit\Framework\TestCase;

class TypeValidationsTraitTest extends TestCase
{
    public function testCanSetValidationRules()
    {
        $valueRules = [ValuePatternMatchRule::NAME => '/^[a-z-]+$/'];
        $type = new MockStringPrimitiveType();
        $type->_setFieldValidationRules('value', $valueRules);
        $rules = $type->_getCombinedValidationRules();
        $this->assertCount(1, $rules, var_export($rules, true));
        $this->assertArrayHasKey('value', $rules);
        $this->assertEquals($valueRules, $rules['value'] ?? []);
        $this->assertArrayHasKey(ValuePatternMatchRule::NAME, $rules['value'] ?? []);
    }

    function testCanValidateSimpleTypeNoErrors()
    {
        $type = new MockStringPrimitiveType(value: 'ye-p', validationRuleMap: ['value' => [ValuePatternMatchRule::NAME => '/^[a-z-]+$/']]);
        $errs = $type->_getValidationErrors();
        $this->assertCount(0, $errs, var_export($errs, true));
    }

    function testCanValidateSimpleTypeWithErrors()
    {
        $type = new MockStringPrimitiveType(value: 'NOPE.', validationRuleMap: ['value' => [ValuePatternMatchRule::NAME => '/^[a-z-]+$/']]);
        $errs = $type->_getValidationErrors();
        $this->assertCount(1, $errs, var_export($errs, true));
    }

    public function testCanValidateComplexTypeNoErrors()
    {
        $type = new MockResourceType(
            name: 'mock',
            fields: [
                'identifier' => [
                    'class' => MockPrimitiveContainerType::class,
                    'value' => new MockPrimitiveContainerType(
                        name: 'string',
                        fields: [
                            'value' => [
                                'class' => MockStringPrimitiveType::class,
                                'value' => new MockStringPrimitiveType(
                                    value: 'mock-1',
                                    validationRuleMap: ['value' => [ValuePatternMatchRule::NAME => '/^[a-z0-9-]+$/']],
                                ),
                            ],
                        ],
                    ),
                ],
            ],
        );
        $this->assertCount(1, $type->getIdentifier()->getValue()->_getCombinedValidationRules());
        $errs = $type->_getValidationErrors();
        $this->assertEmpty($errs, var_export($errs, true));
    }

    public function testCanValidateComplexTypeWithErrors()
    {
        $type = new MockResourceType(
            name: 'mock',
            fields: [
                'identifier' => [
                    'class' => MockPrimitiveContainerType::class,
                    'value' => new MockPrimitiveContainerType(
                        name: 'string',
                        fields: [
                            'value' => [
                                'class' => MockStringPrimitiveType::class,
                                'value' => new MockStringPrimitiveType(
                                    value: 'mock_1',
                                    validationRuleMap: ['value' => [ValuePatternMatchRule::NAME => '/^[a-z-]+$/']],
                                ),
                            ],
                        ],
                    ),
                ],
            ],
        );
        $this->assertCount(1, $type->getIdentifier()->getValue()->_getCombinedValidationRules());
        $errs = $type->_getValidationErrors();
        $this->assertCount(1, $errs, var_export($errs, true));
    }

    public function testCanValidateSimpleCollectionFieldNoErrors()
    {
        $type = new MockElementType(
            name: 'mock',
            fields: [
                'code' => [
                    'class' => MockStringPrimitiveType::class,
                    'collection' => true,
                    'value' => [
                        new MockStringPrimitiveType(
                            value: 'mock-1',
                            validationRuleMap: ['value' => [ValuePatternMatchRule::NAME => '/^[a-z0-9-]+$/']],
                        ),
                        new MockStringPrimitiveType(
                            value: 'mock-2',
                            validationRuleMap: ['value' => [ValuePatternMatchRule::NAME => '/^[a-z0-9-]+$/']],
                        ),
                    ],
                ],
            ],
            validationRuleMap: [
                'code' => [
                    MinOccursRule::NAME => 2,
                ],
            ],
        );
        $errs = $type->_getValidationErrors();
        $this->assertCount(0, $errs, var_export($errs, true));
    }

    public function testCanValidateSimpleCollectionFieldErrors()
    {
        $type = new MockElementType(
            name: 'mock',
            fields: [
                'code' => [
                    'class' => MockStringPrimitiveType::class,
                    'collection' => true,
                    'value' => [
                        new MockStringPrimitiveType(
                            value: 'mock-1',
                            validationRuleMap: ['value' => [ValuePatternMatchRule::NAME => '/^[a-z0-9-]+$/']],
                        ),
                        new MockStringPrimitiveType(
                            value: 'mock-2',
                            validationRuleMap: ['value' => [ValuePatternMatchRule::NAME => '/^[a-z-]+$/']],
                        ),
                    ],
                ],
            ],
            validationRuleMap: [
                'code' => [
                    MinOccursRule::NAME => 3,
                ],
            ],
        );
        $errs = $type->_getValidationErrors();
        $this->assertCount(2, $errs, var_export($errs, true));
    }
}
