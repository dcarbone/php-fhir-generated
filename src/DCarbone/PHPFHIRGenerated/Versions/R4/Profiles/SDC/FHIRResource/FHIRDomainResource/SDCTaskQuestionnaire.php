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
use DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\XverR5R4\FHIRResource\FHIRDomainResource\ProfileR5TaskR4;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;

/**
 * Class SDCTaskQuestionnaire
 *
 * Profile: http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-task
 * Title: Task Questionnaire
 * Constrains: Task
 */
class SDCTaskQuestionnaire extends ProfileR5TaskR4
{
    public const PROFILE_URL = 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-task';
    public const PROFILE_VERSION = '4.0.0';
    public const PROFILE_NAME = 'SDCTaskQuestionnaire';
    public const PROFILE_BASE_TYPE = 'Task';

    /**
     * Invariants declared by the profile.  Informational only; these are not evaluated.
     *
     * @var array<int, array<string, null|string>>
     */
    public const PROFILE_INVARIANTS = [];

    private const _PROFILE_VALIDATION_RULES = [
        self::FIELD_INPUT => [
            'slice_occurs' => [
                [
                    'name' => 'questionnaire',
                    'match' => self::_SLICE_MATCH_0,
                    'max' => 1,
                ],
            ],
        ],
        self::FIELD_OUTPUT => [
            'slice_occurs' => [
                [
                    'name' => 'response',
                    'match' => self::_SLICE_MATCH_2,
                    'max' => 1,
                ],
            ],
        ],
        self::FIELD_EXTENSION => [
            'slice_occurs' => [
                [
                    'name' => 'requestedPeriod',
                    'match' => self::_SLICE_MATCH_3,
                    'max' => 1,
                ],
            ],
        ],
        self::FIELD_MODIFIER_EXTENSION => [
            'slice_occurs' => [
                [
                    'name' => 'doNotPerform',
                    'match' => self::_SLICE_MATCH_6,
                    'max' => 1,
                ],
            ],
        ],
        'statusReason.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'statusReason',
                    'match' => self::_SLICE_MATCH_7,
                    'max' => 1,
                ],
            ],
        ],
        'input.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'value',
                    'match' => self::_SLICE_MATCH_8,
                    'max' => 1,
                ],
            ],
        ],
        'output.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'value',
                    'match' => self::_SLICE_MATCH_9,
                    'max' => 1,
                ],
            ],
        ],
        self::FIELD_STATUS => [
            'min_occurs' => 1,
            'code_binding' => [
                [
                    'http://hl7.org/fhir/task-status',
                    'draft',
                ],
                [
                    'http://hl7.org/fhir/task-status',
                    'requested',
                ],
                [
                    'http://hl7.org/fhir/task-status',
                    'received',
                ],
                [
                    'http://hl7.org/fhir/task-status',
                    'accepted',
                ],
                [
                    'http://hl7.org/fhir/task-status',
                    'rejected',
                ],
                [
                    'http://hl7.org/fhir/task-status',
                    'ready',
                ],
                [
                    'http://hl7.org/fhir/task-status',
                    'cancelled',
                ],
                [
                    'http://hl7.org/fhir/task-status',
                    'in-progress',
                ],
                [
                    'http://hl7.org/fhir/task-status',
                    'on-hold',
                ],
                [
                    'http://hl7.org/fhir/task-status',
                    'failed',
                ],
                [
                    'http://hl7.org/fhir/task-status',
                    'completed',
                ],
                [
                    'http://hl7.org/fhir/task-status',
                    'entered-in-error',
                ],
            ],
        ],
        self::FIELD_INTENT => [
            'min_occurs' => 1,
            'code_binding' => [
                [
                    'http://hl7.org/fhir/task-intent',
                    'unknown',
                ],
                [
                    'http://hl7.org/fhir/request-intent',
                    'proposal',
                ],
                [
                    'http://hl7.org/fhir/request-intent',
                    'plan',
                ],
                [
                    'http://hl7.org/fhir/request-intent',
                    'order',
                ],
                [
                    'http://hl7.org/fhir/request-intent',
                    'original-order',
                ],
                [
                    'http://hl7.org/fhir/request-intent',
                    'reflex-order',
                ],
                [
                    'http://hl7.org/fhir/request-intent',
                    'filler-order',
                ],
                [
                    'http://hl7.org/fhir/request-intent',
                    'instance-order',
                ],
                [
                    'http://hl7.org/fhir/request-intent',
                    'option',
                ],
            ],
        ],
        self::FIELD_CODE => [
            'min_occurs' => 1,
            'code_binding' => [
                [
                    'http://hl7.org/fhir/uv/sdc/CodeSystem/temp',
                    'complete-questionnaire',
                ],
                [
                    'http://hl7.org/fhir/CodeSystem/task-code',
                    'fulfill',
                ],
            ],
        ],
        self::FIELD_AUTHORED_ON => [
            'min_occurs' => 1,
        ],
        self::FIELD_REQUESTER => [
            'min_occurs' => 1,
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_0 = [
        'type' => [
            'coding' => [
                [
                    'system' => 'http://hl7.org/fhir/uv/sdc/CodeSystem/temp',
                    'code' => 'questionnaire',
                ],
            ],
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_1 = [
        'type' => [
            'coding' => [
                [
                    'system' => 'http://hl7.org/fhir/uv/sdc/CodeSystem/temp',
                    'code' => 'response-endpoint',
                ],
            ],
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_2 = [
        'type' => [
            'coding' => [
                [
                    'system' => 'http://hl7.org/fhir/uv/sdc/CodeSystem/temp',
                    'code' => 'questionnaire-response',
                ],
            ],
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_3 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Task.requestedPeriod',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_4 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Task.requestedPerformer',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_5 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Task.performer',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_6 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/request-doNotPerform',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_7 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Task.statusReason',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_8 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Task.input.value',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_9 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Task.output.value',
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
     * @return null|FHIRTaskInput The "questionnaire" slice of input, if present.
     */
    public function getQuestionnaireInput(): null|FHIRTaskInput
    {
        foreach ($this->getInput() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_0)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRTaskInput[] The items of the "responseEndpoint" slice of input.
     */
    public function getResponseEndpointInput(): array
    {
        $matched = [];
        foreach ($this->getInput() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_1)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRTaskOutput The "response" slice of output, if present.
     */
    public function getResponseOutput(): null|FHIRTaskOutput
    {
        foreach ($this->getOutput() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_2)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "requestedPeriod" slice of extension, if present.
     */
    public function getRequestedPeriodExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_3)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "requestedPerformer" slice of extension.
     */
    public function getRequestedPerformerExtension(): array
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
     * @return FHIRExtension[] The items of the "performer" slice of extension.
     */
    public function getPerformerExtension(): array
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
     * @return null|FHIRExtension The "doNotPerform" slice of modifierExtension, if present.
     */
    public function getDoNotPerformModifierExtension(): null|FHIRExtension
    {
        foreach ($this->getModifierExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_6)) {
                return $item;
            }
        }
        return null;
    }
}
