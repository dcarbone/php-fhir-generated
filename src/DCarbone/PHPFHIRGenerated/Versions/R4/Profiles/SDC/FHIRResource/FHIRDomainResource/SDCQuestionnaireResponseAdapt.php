<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\SDC\FHIRResource\FHIRDomainResource;

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
 * Package: hl7.fhir.uv.sdc.r4 4.0.0
 * Author: HL7 International / FHIR Infrastructure
 * License: CC0-1.0
 */

use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Validation\ValueMatcher;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;

/**
 * Class SDCQuestionnaireResponseAdapt
 *
 * Profile: http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaireresponse-adapt
 * Title: Adaptive Questionnaire Response
 * Constrains: QuestionnaireResponse
 */
class SDCQuestionnaireResponseAdapt extends SDCQuestionnaireResponseCommon
{
    public const PROFILE_URL = 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaireresponse-adapt';
    public const PROFILE_VERSION = '4.0.0';
    public const PROFILE_NAME = 'SDCQuestionnaireResponseAdapt';
    public const PROFILE_BASE_TYPE = 'QuestionnaireResponse';

    /**
     * Invariants declared by the profile.  Informational only; these are not evaluated.
     *
     * @var array<int, array<string, null|string>>
     */
    public const PROFILE_INVARIANTS = [
        [
            'key' => 'qrs-2',
            'severity' => 'error',
            'human' => 'Repeated answers are combined in the answers array of a single item',
            'expression' => 'repeat(answer|item).select(item.where(answer.value.exists()).linkId.isDistinct()).allTrue()',
            'path' => 'item',
        ],
    ];

    private const _PROFILE_VALIDATION_RULES = [
        self::FIELD_EXTENSION => [
            'slice_occurs' => [
                [
                    'name' => 'triggeredBy',
                    'match' => self::_SLICE_MATCH_1,
                    'max' => 1,
                ],
                [
                    'name' => 'completionMode',
                    'match' => self::_SLICE_MATCH_3,
                    'max' => 1,
                ],
            ],
        ],
        'source.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'r5Source',
                    'match' => self::_SLICE_MATCH_4,
                    'max' => 1,
                ],
            ],
        ],
        'item.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'itemMedia',
                    'match' => self::_SLICE_MATCH_5,
                    'max' => 1,
                ],
            ],
        ],
        'item.answer.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'itemAnswerMedia',
                    'match' => self::_SLICE_MATCH_7,
                    'max' => 1,
                ],
                [
                    'name' => 'itemWeight',
                    'match' => self::_SLICE_MATCH_8,
                    'max' => 1,
                ],
            ],
        ],
        self::FIELD_QUESTIONNAIRE => [
            'min_occurs' => 1,
        ],
        self::FIELD_STATUS => [
            'min_occurs' => 1,
            'code_binding' => [
                [
                    'http://hl7.org/fhir/questionnaire-answers-status',
                    'in-progress',
                ],
                [
                    'http://hl7.org/fhir/questionnaire-answers-status',
                    'completed',
                ],
                [
                    'http://hl7.org/fhir/questionnaire-answers-status',
                    'amended',
                ],
                [
                    'http://hl7.org/fhir/questionnaire-answers-status',
                    'entered-in-error',
                ],
                [
                    'http://hl7.org/fhir/questionnaire-answers-status',
                    'stopped',
                ],
            ],
        ],
        self::FIELD_AUTHORED => [
            'min_occurs' => 1,
        ],
        'item.linkId' => [
            'min_occurs' => 1,
        ],
        'item.answer.value[x]' => [
            'choice_occurs' => [
                'fields' => [
                    'valueBoolean',
                    'valueDecimal',
                    'valueInteger',
                    'valueDate',
                    'valueDateTime',
                    'valueTime',
                    'valueString',
                    'valueUri',
                    'valueAttachment',
                    'valueCoding',
                    'valueQuantity',
                    'valueReference',
                ],
                'max' => 1,
            ],
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_0 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/workflow-adheresTo',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_1 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/workflow-triggeredBy',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_2 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/questionnaireresponse-signature',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_3 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/questionnaireresponse-completionMode',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_4 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/alternate-reference',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_5 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-itemMedia',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_6 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/questionnaireresponse-signature',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_7 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-itemAnswerMedia',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_8 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/itemWeight',
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
     * @return FHIRExtension[] The items of the "adheresTo" slice of extension.
     */
    public function getAdheresToExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_0)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "triggeredBy" slice of extension, if present.
     */
    public function getTriggeredByExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_1)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "signature" slice of extension.
     */
    public function getSignatureExtension(): array
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
     * @return null|FHIRExtension The "completionMode" slice of extension, if present.
     */
    public function getCompletionModeExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_3)) {
                return $item;
            }
        }
        return null;
    }
}
