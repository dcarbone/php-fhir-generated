<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\R4Core\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 31st, 2026 01:12+0000
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
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 *
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 *
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 *
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 *
 *
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 *
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 *
 *
 * Profile Copyright Notice:
 *
 * Package: hl7.fhir.r4.core 4.0.1
 * Author: HL7 Inc
 * License: CC0-1.0
 */

use DCarbone\PHPFHIRGenerated\Types\ProfileTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Validation\ValueMatcher;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRObservation;

/**
 * Class ObservationVitalsigns
 *
 * Profile: http://hl7.org/fhir/StructureDefinition/vitalsigns
 * Title: Vital Signs Profile
 * Constrains: Observation
 */
class ObservationVitalsigns extends FHIRObservation implements ProfileTypeInterface
{
    public const PROFILE_URL = 'http://hl7.org/fhir/StructureDefinition/vitalsigns';
    public const PROFILE_VERSION = '4.0.1';
    public const PROFILE_NAME = 'observation-vitalsigns';
    public const PROFILE_BASE_TYPE = 'Observation';

    /**
     * Invariants declared by the profile.  Informational only; these are not evaluated.
     *
     * @var array<int, array<string, null|string>>
     */
    public const PROFILE_INVARIANTS = [
        [
            'key' => 'vs-1',
            'severity' => 'error',
            'human' => 'if Observation.effective[x] is dateTime and has a value then that value shall be precise to the day',
            'expression' => '($this as dateTime).toString().length() >= 8',
            'path' => 'effective[x]',
        ],
        [
            'key' => 'vs-3',
            'severity' => 'error',
            'human' => 'If there is no a value a data absent reason must be present',
            'expression' => 'value.exists() or dataAbsentReason.exists()',
            'path' => 'component',
        ],
    ];

    private const _PROFILE_VALIDATION_RULES = [
        self::FIELD_CATEGORY => [
            'slice_occurs' => [
                [
                    'name' => 'VSCat',
                    'match' => self::_SLICE_MATCH_0,
                    'min' => 1,
                    'max' => 1,
                ],
            ],
            'min_occurs' => 1,
        ],
        self::FIELD_STATUS => [
            'min_occurs' => 1,
            'code_binding' => [
                [
                    'http://hl7.org/fhir/observation-status',
                    'registered',
                ],
                [
                    'http://hl7.org/fhir/observation-status',
                    'preliminary',
                ],
                [
                    'http://hl7.org/fhir/observation-status',
                    'final',
                ],
                [
                    'http://hl7.org/fhir/observation-status',
                    'amended',
                ],
                [
                    'http://hl7.org/fhir/observation-status',
                    'corrected',
                ],
                [
                    'http://hl7.org/fhir/observation-status',
                    'cancelled',
                ],
                [
                    'http://hl7.org/fhir/observation-status',
                    'entered-in-error',
                ],
                [
                    'http://hl7.org/fhir/observation-status',
                    'unknown',
                ],
            ],
        ],
        self::FIELD_CODE => [
            'min_occurs' => 1,
        ],
        self::FIELD_SUBJECT => [
            'min_occurs' => 1,
        ],
        'effective[x]' => [
            'choice_occurs' => [
                'fields' => [
                    'effectiveDateTime',
                    'effectivePeriod',
                    'effectiveTiming',
                    'effectiveInstant',
                ],
                'allowed' => [
                    'effectiveDateTime',
                    'effectivePeriod',
                ],
                'min' => 1,
                'max' => 1,
            ],
        ],
        'value[x]' => [
            'choice_occurs' => [
                'fields' => [
                    'valueQuantity',
                    'valueCodeableConcept',
                    'valueString',
                    'valueBoolean',
                    'valueInteger',
                    'valueRange',
                    'valueRatio',
                    'valueSampledData',
                    'valueTime',
                    'valueDateTime',
                    'valuePeriod',
                ],
                'max' => 1,
            ],
        ],
        'component.code' => [
            'min_occurs' => 1,
        ],
        'component.value[x]' => [
            'choice_occurs' => [
                'fields' => [
                    'valueQuantity',
                    'valueCodeableConcept',
                    'valueString',
                    'valueBoolean',
                    'valueInteger',
                    'valueRange',
                    'valueRatio',
                    'valueSampledData',
                    'valueTime',
                    'valueDateTime',
                    'valuePeriod',
                ],
                'max' => 1,
            ],
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_0 = [
        'coding' => [
            'code' => 'vital-signs',
            'system' => 'http://terminology.hl7.org/CodeSystem/observation-category',
        ],
    ];

    public static function _getProfileUrl(): string
    {
        return self::PROFILE_URL;
    }

    public static function _getProfileVersion(): null|string
    {
        return self::PROFILE_VERSION;
    }

    /**
     * Executes only the validation rules added or tightened by this profile and the profiles derived from it.
     */
    public function _getProfileValidationErrors(): array
    {
        $combined = $this->_getCombinedValidationRules();
        $rules = [];
        foreach (static::_getProfileValidationRuleNames() as $field => $names) {
            foreach ($names as $rule => $_) {
                if (isset($combined[$field]) && array_key_exists($rule, $combined[$field])) {
                    $rules[$field][$rule] = $combined[$field][$rule];
                }
            }
        }
        return $this->_collectValidationErrors($rules, false);
    }

    /**
     * Returns the rules set by this profile and the profiles it derives from, as a map of field => [rule => true].
     *
     * @return array<string, array<string, bool>>
     */
    protected static function _getProfileValidationRuleNames(): array
    {
        $out = [];
        foreach (self::_PROFILE_VALIDATION_RULES as $field => $rules) {
            foreach ($rules as $rule => $_) {
                $out[$field][$rule] = true;
            }
        }
        return $out;
    }

    /**
     * Returns the type's validation rules with those of the profile applied on top.  A profile may only constrain its
     * base: cardinalities are tightened, never loosened.
     */
    public function _getCombinedValidationRules(): array
    {
        $out = parent::_getCombinedValidationRules();
        foreach (self::_PROFILE_VALIDATION_RULES as $field => $rules) {
            $out[$field] = Validator::tighten($out[$field] ?? [], $rules);
        }
        return $out;
    }

    /**
     * @return null|FHIRCodeableConcept The "VSCat" slice of category, if present.
     */
    public function getVSCatCategory(): null|FHIRCodeableConcept
    {
        foreach ($this->getCategory() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_0)) {
                return $item;
            }
        }
        return null;
    }
}
