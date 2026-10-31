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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRResearchStudy;

/**
 * Class ProfileR5ResearchStudyR4
 *
 * Profile: http://hl7.org/fhir/5.0/StructureDefinition/profile-ResearchStudy
 * Title: Cross-version Profile for R5.ResearchStudy for use in FHIR R4
 * Constrains: ResearchStudy
 */
class ProfileR5ResearchStudyR4 extends FHIRResearchStudy implements ProfileTypeInterface
{
    public const PROFILE_URL = 'http://hl7.org/fhir/5.0/StructureDefinition/profile-ResearchStudy';
    public const PROFILE_VERSION = '0.1.0';
    public const PROFILE_NAME = 'Profile_R5_ResearchStudy_R4';
    public const PROFILE_BASE_TYPE = 'ResearchStudy';

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
                    'name' => 'url',
                    'match' => self::_SLICE_MATCH_0,
                    'max' => 1,
                ],
                [
                    'name' => 'version',
                    'match' => self::_SLICE_MATCH_1,
                    'max' => 1,
                ],
                [
                    'name' => 'name',
                    'match' => self::_SLICE_MATCH_2,
                    'max' => 1,
                ],
                [
                    'name' => 'date',
                    'match' => self::_SLICE_MATCH_4,
                    'max' => 1,
                ],
                [
                    'name' => 'descriptionSummary',
                    'match' => self::_SLICE_MATCH_6,
                    'max' => 1,
                ],
                [
                    'name' => 'targetNumber',
                    'match' => self::_SLICE_MATCH_10,
                    'max' => 1,
                ],
                [
                    'name' => 'actualNumber',
                    'match' => self::_SLICE_MATCH_11,
                    'max' => 1,
                ],
                [
                    'name' => 'actualGroup',
                    'match' => self::_SLICE_MATCH_12,
                    'max' => 1,
                ],
            ],
        ],
        'enrollment.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'eligibility',
                    'match' => self::_SLICE_MATCH_17,
                    'max' => 1,
                ],
            ],
        ],
        'site.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'site',
                    'match' => self::_SLICE_MATCH_18,
                    'max' => 1,
                ],
            ],
        ],
        'arm.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'linkId',
                    'match' => self::_SLICE_MATCH_19,
                    'max' => 1,
                ],
                [
                    'name' => 'observedGroup',
                    'match' => self::_SLICE_MATCH_21,
                    'max' => 1,
                ],
            ],
        ],
        'objective.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'description',
                    'match' => self::_SLICE_MATCH_22,
                    'max' => 1,
                ],
            ],
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_0 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.url',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_1 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.version',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_2 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.name',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_3 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.label',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_4 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.date',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_5 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.studyDesign',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_6 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.descriptionSummary',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_7 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.classifier',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_8 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.associatedParty',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_9 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.progressStatus',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_10 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.recruitment.targetNumber',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_11 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.recruitment.actualNumber',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_12 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.recruitment.actualGroup',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_13 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.outcomeMeasure',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_14 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.result',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_16 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.focus',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_17 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/alternate-reference',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_18 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/alternate-reference',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_19 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.comparisonGroup.linkId',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_20 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.comparisonGroup.intendedExposure',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_21 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.comparisonGroup.observedGroup',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_22 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ResearchStudy.objective.description',
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
     * @return null|FHIRExtension The "url" slice of extension, if present.
     */
    public function getUrlExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_0)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "version" slice of extension, if present.
     */
    public function getVersionExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_1)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "name" slice of extension, if present.
     */
    public function getNameExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_2)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "label" slice of extension.
     */
    public function getLabelExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_3)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "date" slice of extension, if present.
     */
    public function getDateExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_4)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "studyDesign" slice of extension.
     */
    public function getStudyDesignExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_5)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "descriptionSummary" slice of extension, if present.
     */
    public function getDescriptionSummaryExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_6)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "classifier" slice of extension.
     */
    public function getClassifierExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_7)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "associatedParty" slice of extension.
     */
    public function getAssociatedPartyExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_8)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "progressStatus" slice of extension.
     */
    public function getProgressStatusExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_9)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "targetNumber" slice of extension, if present.
     */
    public function getTargetNumberExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_10)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "actualNumber" slice of extension, if present.
     */
    public function getActualNumberExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_11)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "actualGroup" slice of extension, if present.
     */
    public function getActualGroupExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_12)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "outcomeMeasure" slice of extension.
     */
    public function getOutcomeMeasureExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_13)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "result" slice of extension.
     */
    public function getResultExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_14)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }
}
