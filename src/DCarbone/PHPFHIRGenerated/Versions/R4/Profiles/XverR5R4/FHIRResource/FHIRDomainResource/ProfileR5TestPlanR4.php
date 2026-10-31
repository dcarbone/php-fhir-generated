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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRBasic;

/**
 * Class ProfileR5TestPlanR4
 *
 * Profile: http://hl7.org/fhir/5.0/StructureDefinition/profile-TestPlan
 * Title: Cross-version Profile for R5.TestPlan for use in FHIR R4
 * Constrains: Basic
 */
class ProfileR5TestPlanR4 extends FHIRBasic implements ProfileTypeInterface
{
    public const PROFILE_URL = 'http://hl7.org/fhir/5.0/StructureDefinition/profile-TestPlan';
    public const PROFILE_VERSION = '0.1.0';
    public const PROFILE_NAME = 'Profile_R5_TestPlan_R4';
    public const PROFILE_BASE_TYPE = 'Basic';

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
                    'name' => 'versionAlgorithm',
                    'match' => self::_SLICE_MATCH_2,
                    'max' => 1,
                ],
                [
                    'name' => 'name',
                    'match' => self::_SLICE_MATCH_3,
                    'max' => 1,
                ],
                [
                    'name' => 'title',
                    'match' => self::_SLICE_MATCH_4,
                    'max' => 1,
                ],
                [
                    'name' => 'experimental',
                    'match' => self::_SLICE_MATCH_5,
                    'max' => 1,
                ],
                [
                    'name' => 'date',
                    'match' => self::_SLICE_MATCH_6,
                    'max' => 1,
                ],
                [
                    'name' => 'publisher',
                    'match' => self::_SLICE_MATCH_7,
                    'max' => 1,
                ],
                [
                    'name' => 'description',
                    'match' => self::_SLICE_MATCH_9,
                    'max' => 1,
                ],
                [
                    'name' => 'purpose',
                    'match' => self::_SLICE_MATCH_12,
                    'max' => 1,
                ],
                [
                    'name' => 'copyright',
                    'match' => self::_SLICE_MATCH_13,
                    'max' => 1,
                ],
                [
                    'name' => 'copyrightLabel',
                    'match' => self::_SLICE_MATCH_14,
                    'max' => 1,
                ],
                [
                    'name' => 'testTools',
                    'match' => self::_SLICE_MATCH_17,
                    'max' => 1,
                ],
                [
                    'name' => 'exitCriteria',
                    'match' => self::_SLICE_MATCH_19,
                    'max' => 1,
                ],
            ],
        ],
        self::FIELD_MODIFIER_EXTENSION => [
            'slice_occurs' => [
                [
                    'name' => 'status',
                    'match' => self::_SLICE_MATCH_21,
                    'min' => 1,
                    'max' => 1,
                ],
            ],
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_0 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.url',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_1 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.version',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_2 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.versionAlgorithm',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_3 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.name',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_4 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.title',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_5 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.experimental',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_6 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.date',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_7 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.publisher',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_8 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.contact',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_9 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.description',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_10 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.useContext',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_11 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.jurisdiction',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_12 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.purpose',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_13 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.copyright',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_14 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.copyrightLabel',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_15 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.category',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_16 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.scope',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_17 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.testTools',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_18 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.dependency',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_19 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.exitCriteria',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_20 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.testCase',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_21 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-TestPlan.status',
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
     * @return null|FHIRExtension The "versionAlgorithm" slice of extension, if present.
     */
    public function getVersionAlgorithmExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_2)) {
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
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_3)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "title" slice of extension, if present.
     */
    public function getTitleExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_4)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "experimental" slice of extension, if present.
     */
    public function getExperimentalExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_5)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "date" slice of extension, if present.
     */
    public function getDateExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_6)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "publisher" slice of extension, if present.
     */
    public function getPublisherExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_7)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "contact" slice of extension.
     */
    public function getContactExtension(): array
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
     * @return null|FHIRExtension The "description" slice of extension, if present.
     */
    public function getDescriptionExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_9)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "useContext" slice of extension.
     */
    public function getUseContextExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_10)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "jurisdiction" slice of extension.
     */
    public function getJurisdictionExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_11)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "purpose" slice of extension, if present.
     */
    public function getPurposeExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_12)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "copyright" slice of extension, if present.
     */
    public function getCopyrightExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_13)) {
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
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_14)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "category" slice of extension.
     */
    public function getCategoryExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_15)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "scope" slice of extension.
     */
    public function getScopeExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_16)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "testTools" slice of extension, if present.
     */
    public function getTestToolsExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_17)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "dependency" slice of extension.
     */
    public function getDependencyExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_18)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "exitCriteria" slice of extension, if present.
     */
    public function getExitCriteriaExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_19)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "testCase" slice of extension.
     */
    public function getTestCaseExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_20)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "status" slice of modifierExtension, if present.
     */
    public function getStatusModifierExtension(): null|FHIRExtension
    {
        foreach ($this->getModifierExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_21)) {
                return $item;
            }
        }
        return null;
    }
}
