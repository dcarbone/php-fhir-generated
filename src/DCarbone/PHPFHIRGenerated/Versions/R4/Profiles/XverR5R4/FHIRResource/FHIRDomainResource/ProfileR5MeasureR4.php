<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\XverR5R4\FHIRResource\FHIRDomainResource;

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
 * Package: hl7.fhir.uv.xver-r5.r4 0.1.0
 * Author: FHIR Infrastructure
 * License: CC0-1.0
 */

use DCarbone\PHPFHIRGenerated\Types\ProfileTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Validation\ValueMatcher;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMeasure;

/**
 * Class ProfileR5MeasureR4
 *
 * Profile: http://hl7.org/fhir/5.0/StructureDefinition/profile-Measure
 * Title: Cross-version Profile for R5.Measure for use in FHIR R4
 * Constrains: Measure
 */
class ProfileR5MeasureR4 extends FHIRMeasure implements ProfileTypeInterface
{
    public const PROFILE_URL = 'http://hl7.org/fhir/5.0/StructureDefinition/profile-Measure';
    public const PROFILE_VERSION = '0.1.0';
    public const PROFILE_NAME = 'Profile_R5_Measure_R4';
    public const PROFILE_BASE_TYPE = 'Measure';

    /**
     * Invariants declared by the profile.  Informational only; these are not evaluated.
     *
     * @var array<int, array<string, null|string>>
     */
    public const PROFILE_INVARIANTS = [];

    private const _PROFILE_VALIDATION_RULES = [
        self::FIELD_EXTENSION => [
            'slice_occurs' => [
                [
                    'name' => 'versionAlgorithm',
                    'match' => self::_SLICE_MATCH_0,
                    'max' => 1,
                ],
                [
                    'name' => 'basis',
                    'match' => self::_SLICE_MATCH_1,
                    'max' => 1,
                ],
                [
                    'name' => 'copyrightLabel',
                    'match' => self::_SLICE_MATCH_2,
                    'max' => 1,
                ],
                [
                    'name' => 'scoringUnit',
                    'match' => self::_SLICE_MATCH_3,
                    'max' => 1,
                ],
            ],
        ],
        'group.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'linkId',
                    'match' => self::_SLICE_MATCH_5,
                    'max' => 1,
                ],
                [
                    'name' => 'subject',
                    'match' => self::_SLICE_MATCH_7,
                    'max' => 1,
                ],
                [
                    'name' => 'basis',
                    'match' => self::_SLICE_MATCH_8,
                    'max' => 1,
                ],
                [
                    'name' => 'scoring',
                    'match' => self::_SLICE_MATCH_9,
                    'max' => 1,
                ],
                [
                    'name' => 'scoringUnit',
                    'match' => self::_SLICE_MATCH_10,
                    'max' => 1,
                ],
                [
                    'name' => 'rateAggregation',
                    'match' => self::_SLICE_MATCH_11,
                    'max' => 1,
                ],
                [
                    'name' => 'improvementNotation',
                    'match' => self::_SLICE_MATCH_12,
                    'max' => 1,
                ],
            ],
        ],
        'group.population.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'linkId',
                    'match' => self::_SLICE_MATCH_14,
                    'max' => 1,
                ],
                [
                    'name' => 'groupDefinition',
                    'match' => self::_SLICE_MATCH_15,
                    'max' => 1,
                ],
                [
                    'name' => 'inputPopulationId',
                    'match' => self::_SLICE_MATCH_16,
                    'max' => 1,
                ],
                [
                    'name' => 'aggregateMethod',
                    'match' => self::_SLICE_MATCH_17,
                    'max' => 1,
                ],
            ],
        ],
        'group.stratifier.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'linkId',
                    'match' => self::_SLICE_MATCH_18,
                    'max' => 1,
                ],
                [
                    'name' => 'groupDefinition',
                    'match' => self::_SLICE_MATCH_19,
                    'max' => 1,
                ],
            ],
        ],
        'group.stratifier.component.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'linkId',
                    'match' => self::_SLICE_MATCH_20,
                    'max' => 1,
                ],
                [
                    'name' => 'groupDefinition',
                    'match' => self::_SLICE_MATCH_21,
                    'max' => 1,
                ],
            ],
        ],
        'supplementalData.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'linkId',
                    'match' => self::_SLICE_MATCH_22,
                    'max' => 1,
                ],
            ],
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_0 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-versionAlgorithm',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_1 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.basis',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_2 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-copyrightLabel',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_3 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.scoringUnit',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_4 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.term',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_5 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.linkId',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_6 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.type',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_7 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.subject',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_8 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.basis',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_9 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.scoring',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_10 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.scoringUnit',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_11 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.rateAggregation',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_12 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.improvementNotation',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_13 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.library',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_14 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.population.linkId',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_15 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.population.groupDefinition',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_16 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.population.inputPopulationId',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_17 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.population.aggregateMethod',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_18 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.stratifier.linkId',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_19 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.stratifier.groupDefinition',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_20 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.stratifier.component.linkId',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_21 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.group.stratifier.component.groupDefinition',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_22 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Measure.supplementalData.linkId',
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
     * @return null|FHIRExtension The "versionAlgorithm" slice of extension, if present.
     */
    public function getVersionAlgorithmExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_0)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "basis" slice of extension, if present.
     */
    public function getBasisExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_1)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "copyrightLabel" slice of extension, if present.
     */
    public function getCopyrightLabelExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_2)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "scoringUnit" slice of extension, if present.
     */
    public function getScoringUnitExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_3)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "term" slice of extension.
     */
    public function getTermExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_4)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }
}
