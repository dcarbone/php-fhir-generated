<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\XverR5R4\FHIRResource\FHIRDomainResource;

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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification;

/**
 * Class ProfileR5SubstanceDefinitionR4SubstanceSpecification
 *
 * Profile: http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceDefinition-for-SubstanceSpecification
 * Title: Cross-version Profile for R5.SubstanceDefinition for use in FHIR R4
 * Constrains: SubstanceSpecification
 */
class ProfileR5SubstanceDefinitionR4SubstanceSpecification extends FHIRSubstanceSpecification implements ProfileTypeInterface
{
    public const PROFILE_URL = 'http://hl7.org/fhir/5.0/StructureDefinition/profile-SubstanceDefinition-for-SubstanceSpecification';
    public const PROFILE_VERSION = '0.1.0';
    public const PROFILE_NAME = 'Profile_R5_SubstanceDefinition_R4_SubstanceSpecification';
    public const PROFILE_BASE_TYPE = 'SubstanceSpecification';

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
                    'name' => 'version',
                    'match' => self::_SLICE_MATCH_0,
                    'max' => 1,
                ],
                [
                    'name' => 'referenceInformation',
                    'match' => self::_SLICE_MATCH_8,
                    'max' => 1,
                ],
                [
                    'name' => 'nucleicAcid',
                    'match' => self::_SLICE_MATCH_9,
                    'max' => 1,
                ],
                [
                    'name' => 'polymer',
                    'match' => self::_SLICE_MATCH_10,
                    'max' => 1,
                ],
                [
                    'name' => 'protein',
                    'match' => self::_SLICE_MATCH_11,
                    'max' => 1,
                ],
            ],
        ],
        'status.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'status',
                    'match' => self::_SLICE_MATCH_13,
                    'max' => 1,
                ],
            ],
        ],
        'moiety.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'measurementType',
                    'match' => self::_SLICE_MATCH_15,
                    'max' => 1,
                ],
            ],
        ],
        'property.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'type',
                    'match' => self::_SLICE_MATCH_16,
                    'min' => 1,
                    'max' => 1,
                ],
                [
                    'name' => 'value',
                    'match' => self::_SLICE_MATCH_17,
                    'max' => 1,
                ],
            ],
            'min_occurs' => 1,
        ],
        'structure.representation.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'format',
                    'match' => self::_SLICE_MATCH_20,
                    'max' => 1,
                ],
                [
                    'name' => 'document',
                    'match' => self::_SLICE_MATCH_21,
                    'max' => 1,
                ],
            ],
        ],
        'code.source.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'source',
                    'match' => self::_SLICE_MATCH_23,
                    'max' => 1,
                ],
            ],
        ],
        'name.source.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'source',
                    'match' => self::_SLICE_MATCH_26,
                    'max' => 1,
                ],
            ],
        ],
        'molecularWeight.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'method',
                    'match' => self::_SLICE_MATCH_27,
                    'max' => 1,
                ],
                [
                    'name' => 'type',
                    'match' => self::_SLICE_MATCH_28,
                    'max' => 1,
                ],
                [
                    'name' => 'amount',
                    'match' => self::_SLICE_MATCH_29,
                    'min' => 1,
                    'max' => 1,
                ],
            ],
            'min_occurs' => 1,
        ],
        'relationship.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'substanceDefinition',
                    'match' => self::_SLICE_MATCH_30,
                    'max' => 1,
                ],
                [
                    'name' => 'type',
                    'match' => self::_SLICE_MATCH_31,
                    'min' => 1,
                    'max' => 1,
                ],
                [
                    'name' => 'ratioHighLimitAmount',
                    'match' => self::_SLICE_MATCH_32,
                    'max' => 1,
                ],
                [
                    'name' => 'comparator',
                    'match' => self::_SLICE_MATCH_33,
                    'max' => 1,
                ],
            ],
            'min_occurs' => 1,
        ],
        'relationship.source.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'source',
                    'match' => self::_SLICE_MATCH_34,
                    'max' => 1,
                ],
            ],
        ],
        'sourceMaterial.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'type',
                    'match' => self::_SLICE_MATCH_35,
                    'max' => 1,
                ],
                [
                    'name' => 'genus',
                    'match' => self::_SLICE_MATCH_36,
                    'max' => 1,
                ],
                [
                    'name' => 'species',
                    'match' => self::_SLICE_MATCH_37,
                    'max' => 1,
                ],
                [
                    'name' => 'part',
                    'match' => self::_SLICE_MATCH_38,
                    'max' => 1,
                ],
            ],
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_0 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-version',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_1 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.classification',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_2 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.grade',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_3 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.informationSource',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_4 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.note',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_5 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.manufacturer',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_6 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.supplier',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_7 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.characterization',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_8 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.referenceInformation',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_9 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.nucleicAcid',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_10 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.polymer',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_11 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.protein',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_12 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-identifier',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_13 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-status',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_15 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.moiety.measurementType',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_16 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.property.type',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_17 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.property.value',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_18 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.structure.technique',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_19 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.structure.sourceDocument',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_20 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.structure.representation.format',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_21 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.structure.representation.document',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_22 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.code.note',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_23 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/alternate-reference',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_24 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-name',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_25 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.name.language',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_26 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/alternate-reference',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_27 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.molecularWeight.method',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_28 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.molecularWeight.type',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_29 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.molecularWeight.amount',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_30 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.relationship.substanceDefinition',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_31 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.relationship.type',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_32 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.relationship.ratioHighLimitAmount',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_33 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.relationship.comparator',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_34 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/alternate-reference',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_35 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.sourceMaterial.type',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_36 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.sourceMaterial.genus',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_37 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.sourceMaterial.species',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_38 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.sourceMaterial.part',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_39 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-SubstanceDefinition.sourceMaterial.countryOfOrigin',
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
     * @return null|FHIRExtension The "version" slice of extension, if present.
     */
    public function getVersionExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_0)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "classification" slice of extension.
     */
    public function getClassificationExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_1)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "grade" slice of extension.
     */
    public function getGradeExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_2)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "informationSource" slice of extension.
     */
    public function getInformationSourceExtension(): array
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
     * @return FHIRExtension[] The items of the "note" slice of extension.
     */
    public function getNoteExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_4)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "manufacturer" slice of extension.
     */
    public function getManufacturerExtension(): array
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
     * @return FHIRExtension[] The items of the "supplier" slice of extension.
     */
    public function getSupplierExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_6)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return FHIRExtension[] The items of the "characterization" slice of extension.
     */
    public function getCharacterizationExtension(): array
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
     * @return null|FHIRExtension The "referenceInformation" slice of extension, if present.
     */
    public function getReferenceInformationExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_8)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "nucleicAcid" slice of extension, if present.
     */
    public function getNucleicAcidExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_9)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "polymer" slice of extension, if present.
     */
    public function getPolymerExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_10)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "protein" slice of extension, if present.
     */
    public function getProteinExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_11)) {
                return $item;
            }
        }
        return null;
    }
}
