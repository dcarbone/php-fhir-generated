<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\USCore\FHIRResource\FHIRDomainResource;

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
 * Package: hl7.fhir.us.core 9.0.0
 * Author: HL7 International / Cross-Group Projects
 * License: CC0-1.0
 */

use DCarbone\PHPFHIRGenerated\Types\ProfileTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Validation\ValueMatcher;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPatient;

/**
 * Class USCorePatientProfile
 *
 * Profile: http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient
 * Title: US Core Patient Profile
 * Constrains: Patient
 */
class USCorePatientProfile extends FHIRPatient implements ProfileTypeInterface
{
    public const PROFILE_URL = 'http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient';
    public const PROFILE_VERSION = '9.0.0';
    public const PROFILE_NAME = 'USCorePatientProfile';
    public const PROFILE_BASE_TYPE = 'Patient';

    /**
     * Invariants declared by the profile.  Informational only; these are not evaluated.
     *
     * @var array<int, array<string, null|string>>
     */
    public const PROFILE_INVARIANTS = [
        [
            'key' => 'us-core-6',
            'severity' => 'error',
            'human' => 'At least name.given and/or name.family are present or, if neither is available, the Data Absent Reason Extension is present.',
            'expression' => '(family.exists() or given.exists()) xor extension.where(url=\'http://hl7.org/fhir/StructureDefinition/data-absent-reason\').exists()',
            'path' => 'name',
        ],
    ];

    private const _PROFILE_VALIDATION_RULES = [
        self::FIELD_EXTENSION => [
            'slice_occurs' => [
                [
                    'name' => 'race',
                    'match' => self::_SLICE_MATCH_0,
                    'max' => 1,
                ],
                [
                    'name' => 'ethnicity',
                    'match' => self::_SLICE_MATCH_1,
                    'max' => 1,
                ],
                [
                    'name' => 'sex',
                    'match' => self::_SLICE_MATCH_3,
                    'max' => 1,
                ],
                [
                    'name' => 'interpreterRequired',
                    'match' => self::_SLICE_MATCH_4,
                    'max' => 1,
                ],
            ],
        ],
        self::FIELD_IDENTIFIER => [
            'min_occurs' => 1,
        ],
        'identifier.system' => [
            'min_occurs' => 1,
        ],
        'identifier.value' => [
            'min_occurs' => 1,
        ],
        self::FIELD_NAME => [
            'min_occurs' => 1,
        ],
        'name.use' => [
            'code_binding' => [
                [
                    'http://hl7.org/fhir/name-use',
                    'usual',
                ],
                [
                    'http://hl7.org/fhir/name-use',
                    'official',
                ],
                [
                    'http://hl7.org/fhir/name-use',
                    'temp',
                ],
                [
                    'http://hl7.org/fhir/name-use',
                    'nickname',
                ],
                [
                    'http://hl7.org/fhir/name-use',
                    'anonymous',
                ],
                [
                    'http://hl7.org/fhir/name-use',
                    'old',
                ],
                [
                    'http://hl7.org/fhir/name-use',
                    'maiden',
                ],
            ],
        ],
        'telecom.system' => [
            'min_occurs' => 1,
            'code_binding' => [
                [
                    'http://hl7.org/fhir/contact-point-system',
                    'phone',
                ],
                [
                    'http://hl7.org/fhir/contact-point-system',
                    'fax',
                ],
                [
                    'http://hl7.org/fhir/contact-point-system',
                    'email',
                ],
                [
                    'http://hl7.org/fhir/contact-point-system',
                    'pager',
                ],
                [
                    'http://hl7.org/fhir/contact-point-system',
                    'url',
                ],
                [
                    'http://hl7.org/fhir/contact-point-system',
                    'sms',
                ],
                [
                    'http://hl7.org/fhir/contact-point-system',
                    'other',
                ],
            ],
        ],
        'telecom.value' => [
            'min_occurs' => 1,
        ],
        'telecom.use' => [
            'code_binding' => [
                [
                    'http://hl7.org/fhir/contact-point-use',
                    'home',
                ],
                [
                    'http://hl7.org/fhir/contact-point-use',
                    'work',
                ],
                [
                    'http://hl7.org/fhir/contact-point-use',
                    'temp',
                ],
                [
                    'http://hl7.org/fhir/contact-point-use',
                    'old',
                ],
                [
                    'http://hl7.org/fhir/contact-point-use',
                    'mobile',
                ],
            ],
        ],
        'deceased[x]' => [
            'choice_occurs' => [
                'fields' => [
                    'deceasedBoolean',
                    'deceasedDateTime',
                ],
                'max' => 1,
            ],
        ],
        'address.use' => [
            'code_binding' => [
                [
                    'http://hl7.org/fhir/address-use',
                    'home',
                ],
                [
                    'http://hl7.org/fhir/address-use',
                    'work',
                ],
                [
                    'http://hl7.org/fhir/address-use',
                    'temp',
                ],
                [
                    'http://hl7.org/fhir/address-use',
                    'old',
                ],
                [
                    'http://hl7.org/fhir/address-use',
                    'billing',
                ],
            ],
        ],
        'communication.language' => [
            'min_occurs' => 1,
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_0 = [
        'url' => 'http://hl7.org/fhir/us/core/StructureDefinition/us-core-race',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_1 = [
        'url' => 'http://hl7.org/fhir/us/core/StructureDefinition/us-core-ethnicity',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_2 = [
        'url' => 'http://hl7.org/fhir/us/core/StructureDefinition/us-core-tribal-affiliation',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_3 = [
        'url' => 'http://hl7.org/fhir/us/core/StructureDefinition/us-core-individual-sex',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_4 = [
        'url' => 'http://hl7.org/fhir/us/core/StructureDefinition/us-core-interpreter-needed',
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
     * @return null|FHIRExtension The "race" slice of extension, if present.
     */
    public function getRaceExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_0)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "ethnicity" slice of extension, if present.
     */
    public function getEthnicityExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_1)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "tribalAffiliation" slice of extension.
     */
    public function getTribalAffiliationExtension(): array
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
     * @return null|FHIRExtension The "sex" slice of extension, if present.
     */
    public function getSexExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_3)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "interpreterRequired" slice of extension, if present.
     */
    public function getInterpreterRequiredExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_4)) {
                return $item;
            }
        }
        return null;
    }
}
