<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;

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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *
 *
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 *
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 *
 */
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIROperationOutcomeCodesEnum extends FHIRCodePrimitive
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OPERATION_OUTCOME_CODES_ENUM;


    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_VALUE => [
            'value_pattern_match' => '/^[^\\s]+( [^\\s]+)*$/',
            'value_min_length' => 1,
            'value_one_of' => [
                'DELETE_MULTIPLE_MATCHES',
                'MSG_AUTH_REQUIRED',
                'MSG_BAD_FORMAT',
                'MSG_BAD_SYNTAX',
                'MSG_CANT_PARSE_CONTENT',
                'MSG_CANT_PARSE_ROOT',
                'MSG_CREATED',
                'MSG_DATE_FORMAT',
                'MSG_DELETED',
                'MSG_DELETED_DONE',
                'MSG_DELETED_ID',
                'MSG_DUPLICATE_ID',
                'MSG_ERROR_PARSING',
                'MSG_ID_INVALID',
                'MSG_ID_TOO_LONG',
                'MSG_INVALID_ID',
                'MSG_JSON_OBJECT',
                'MSG_LOCAL_FAIL',
                'MSG_NO_EXIST',
                'MSG_NO_MATCH',
                'MSG_NO_MODULE',
                'MSG_NO_SUMMARY',
                'MSG_OP_NOT_ALLOWED',
                'MSG_PARAM_CHAINED',
                'MSG_PARAM_INVALID',
                'MSG_PARAM_MODIFIER_INVALID',
                'MSG_PARAM_NO_REPEAT',
                'MSG_PARAM_UNKNOWN',
                'MSG_REMOTE_FAIL',
                'MSG_RESOURCE_EXAMPLE_PROTECTED',
                'MSG_RESOURCE_ID_FAIL',
                'MSG_RESOURCE_ID_MISMATCH',
                'MSG_RESOURCE_ID_MISSING',
                'MSG_RESOURCE_NOT_ALLOWED',
                'MSG_RESOURCE_REQUIRED',
                'MSG_RESOURCE_TYPE_MISMATCH',
                'MSG_SORT_UNKNOWN',
                'MSG_TRANSACTION_DUPLICATE_ID',
                'MSG_TRANSACTION_MISSING_ID',
                'MSG_UNHANDLED_NODE_TYPE',
                'MSG_UNKNOWN_CONTENT',
                'MSG_UNKNOWN_OPERATION',
                'MSG_UNKNOWN_TYPE',
                'MSG_UPDATED',
                'MSG_VERSION_AWARE',
                'MSG_VERSION_AWARE_CONFLICT',
                'MSG_VERSION_AWARE_URL',
                'MSG_WRONG_NS',
                'SEARCH_MULTIPLE',
                'SEARCH_NONE',
                'UPDATE_MULTIPLE_MATCHES',
            ],
        ],
    ];

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:201 */
}
