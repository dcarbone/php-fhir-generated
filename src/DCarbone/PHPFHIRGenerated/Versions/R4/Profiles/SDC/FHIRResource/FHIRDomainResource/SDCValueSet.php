<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\SDC\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 30th, 2026 00:59+0000
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
 * Package: hl7.fhir.uv.sdc.r4 4.0.0
 * Author: HL7 International / FHIR Infrastructure
 * License: CC0-1.0
 */

use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Validation\ValueMatcher;
use DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\XverR5R4\FHIRResource\FHIRDomainResource\ProfileR5ValueSetR4;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;

/**
 * Class SDCValueSet
 *
 * Profile: http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-valueset
 * Title: SDC Value Set
 * Constrains: ValueSet
 */
class SDCValueSet extends ProfileR5ValueSetR4
{
    public const PROFILE_URL = 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-valueset';
    public const PROFILE_VERSION = '4.0.0';
    public const PROFILE_NAME = 'SDCValueSet';
    public const PROFILE_BASE_TYPE = 'ValueSet';

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
                    'name' => 'copyrightLabel',
                    'match' => self::_SLICE_MATCH_20,
                    'max' => 1,
                ],
                [
                    'name' => 'approvalDate',
                    'match' => self::_SLICE_MATCH_21,
                    'max' => 1,
                ],
                [
                    'name' => 'lastReviewDate',
                    'match' => self::_SLICE_MATCH_22,
                    'max' => 1,
                ],
                [
                    'name' => 'effectivePeriod',
                    'match' => self::_SLICE_MATCH_23,
                    'max' => 1,
                ],
                [
                    'name' => 'scope',
                    'match' => self::_SLICE_MATCH_30,
                    'max' => 1,
                ],
            ],
        ],
        'compose.include.concept.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'conceptLabel',
                    'match' => self::_SLICE_MATCH_2,
                    'max' => 1,
                ],
                [
                    'name' => 'conceptConceptOrder',
                    'match' => self::_SLICE_MATCH_3,
                    'max' => 1,
                ],
            ],
        ],
        'compose.include.concept.designation.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'designation-renderingStyle',
                    'match' => self::_SLICE_MATCH_7,
                    'max' => 1,
                ],
                [
                    'name' => 'designation-markdown',
                    'match' => self::_SLICE_MATCH_8,
                    'max' => 1,
                ],
                [
                    'name' => 'designation-xhtml',
                    'match' => self::_SLICE_MATCH_9,
                    'max' => 1,
                ],
            ],
        ],
        'expansion.contains.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'expansionLabel',
                    'match' => self::_SLICE_MATCH_12,
                    'max' => 1,
                ],
                [
                    'name' => 'conceptConceptOrder',
                    'match' => self::_SLICE_MATCH_13,
                    'max' => 1,
                ],
            ],
        ],
        'expansion.contains.designation.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'expansionDesignation-renderingStyle',
                    'match' => self::_SLICE_MATCH_17,
                    'max' => 1,
                ],
                [
                    'name' => 'expansionDesignation-markdown',
                    'match' => self::_SLICE_MATCH_18,
                    'max' => 1,
                ],
                [
                    'name' => 'expansionDesignation-xhtml',
                    'match' => self::_SLICE_MATCH_19,
                    'max' => 1,
                ],
            ],
        ],
        'compose.include.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'copyright',
                    'match' => self::_SLICE_MATCH_32,
                    'max' => 1,
                ],
            ],
        ],
        'expansion.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'next',
                    'match' => self::_SLICE_MATCH_35,
                    'max' => 1,
                ],
            ],
        ],
        self::FIELD_STATUS => [
            'min_occurs' => 1,
            'code_binding' => [
                [
                    'http://hl7.org/fhir/publication-status',
                    'draft',
                ],
                [
                    'http://hl7.org/fhir/publication-status',
                    'active',
                ],
                [
                    'http://hl7.org/fhir/publication-status',
                    'retired',
                ],
                [
                    'http://hl7.org/fhir/publication-status',
                    'unknown',
                ],
            ],
        ],
        self::FIELD_IMMUTABLE => [
            'min_occurs' => 1,
        ],
        'compose.include' => [
            'min_occurs' => 1,
        ],
        'compose.include.concept.code' => [
            'min_occurs' => 1,
        ],
        'compose.include.filter.property' => [
            'min_occurs' => 1,
        ],
        'compose.include.filter.op' => [
            'min_occurs' => 1,
            'code_binding' => [
                [
                    'http://hl7.org/fhir/filter-operator',
                    '=',
                ],
                [
                    'http://hl7.org/fhir/filter-operator',
                    'is-a',
                ],
                [
                    'http://hl7.org/fhir/filter-operator',
                    'descendent-of',
                ],
                [
                    'http://hl7.org/fhir/filter-operator',
                    'is-not-a',
                ],
                [
                    'http://hl7.org/fhir/filter-operator',
                    'regex',
                ],
                [
                    'http://hl7.org/fhir/filter-operator',
                    'in',
                ],
                [
                    'http://hl7.org/fhir/filter-operator',
                    'not-in',
                ],
                [
                    'http://hl7.org/fhir/filter-operator',
                    'generalizes',
                ],
                [
                    'http://hl7.org/fhir/filter-operator',
                    'exists',
                ],
            ],
        ],
        'compose.include.filter.value' => [
            'min_occurs' => 1,
        ],
        'expansion.timestamp' => [
            'min_occurs' => 1,
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_0 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-versionAlgorithm',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_1 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-rendering-criticalExtension',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_2 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/valueset-label',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_3 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/valueset-conceptOrder',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_7 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/rendering-style',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_8 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/rendering-markdown',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_9 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/rendering-xhtml',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_10 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ValueSet.expansion.property',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_11 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ValueSet.expansion.contains.property',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_12 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/valueset-label',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_13 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/valueset-conceptOrder',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_17 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/rendering-style',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_18 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/rendering-markdown',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_19 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/rendering-xhtml',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_20 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-copyrightLabel',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_21 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-approvalDate',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_22 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-lastReviewDate',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_23 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-effectivePeriod',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_24 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-topic',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_25 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-author',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_26 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-editor',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_27 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-reviewer',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_28 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-endorser',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_29 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-relatedArtifact',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_30 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ValueSet.scope',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_31 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ValueSet.compose.property',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_32 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ValueSet.compose.include.copyright',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_33 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ValueSet.compose.include.concept.designation.additionalUse',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_35 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-ValueSet.expansion.next',
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
     * Returns the rules set by this profile and the profiles it derives from, as a map of field => [rule => true].
     *
     * @return array<string, array<string, bool>>
     */
    protected static function _getProfileValidationRuleNames(): array
    {
        $out = parent::_getProfileValidationRuleNames();
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
     * @return FHIRExtension[] The items of the "rendering-criticalExtension" slice of modifierExtension.
     */
    public function getRenderingCriticalExtensionModifierExtension(): array
    {
        $matched = [];
        foreach ($this->getModifierExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_1)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "copyrightLabel" slice of extension, if present.
     */
    public function getCopyrightLabelExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_20)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "approvalDate" slice of extension, if present.
     */
    public function getApprovalDateExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_21)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "lastReviewDate" slice of extension, if present.
     */
    public function getLastReviewDateExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_22)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "effectivePeriod" slice of extension, if present.
     */
    public function getEffectivePeriodExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_23)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "topic" slice of extension.
     */
    public function getTopicExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_24)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "author" slice of extension.
     */
    public function getAuthorExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_25)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "editor" slice of extension.
     */
    public function getEditorExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_26)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "reviewer" slice of extension.
     */
    public function getReviewerExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_27)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "endorser" slice of extension.
     */
    public function getEndorserExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_28)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "relatedArtifact" slice of extension.
     */
    public function getRelatedArtifactExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_29)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "scope" slice of extension, if present.
     */
    public function getScopeExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_30)) {
                return $item;
            }
        }
        return null;
    }
}
