<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMinLengthRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueOneOfRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

class FHIROperationOutcomeCodesEnum extends FHIRCodePrimitive
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OPERATION_OUTCOME_CODES_ENUM;


    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_VALUE => [
            ValuePatternMatchRule::NAME => '/^[^\\s]+( [^\\s]+)*$/',
            ValueMinLengthRule::NAME => 1,
            ValueOneOfRule::NAME => [
                0 => 'DELETE_MULTIPLE_MATCHES',
                1 => 'MSG_AUTH_REQUIRED',
                2 => 'MSG_BAD_FORMAT',
                3 => 'MSG_BAD_SYNTAX',
                4 => 'MSG_CANT_PARSE_CONTENT',
                5 => 'MSG_CANT_PARSE_ROOT',
                6 => 'MSG_CREATED',
                7 => 'MSG_DATE_FORMAT',
                8 => 'MSG_DELETED',
                9 => 'MSG_DELETED_DONE',
                10 => 'MSG_DELETED_ID',
                11 => 'MSG_DUPLICATE_ID',
                12 => 'MSG_ERROR_PARSING',
                13 => 'MSG_ID_INVALID',
                14 => 'MSG_ID_TOO_LONG',
                15 => 'MSG_INVALID_ID',
                16 => 'MSG_JSON_OBJECT',
                17 => 'MSG_LOCAL_FAIL',
                18 => 'MSG_NO_EXIST',
                19 => 'MSG_NO_MATCH',
                20 => 'MSG_NO_MODULE',
                21 => 'MSG_NO_SUMMARY',
                22 => 'MSG_OP_NOT_ALLOWED',
                23 => 'MSG_PARAM_CHAINED',
                24 => 'MSG_PARAM_INVALID',
                25 => 'MSG_PARAM_MODIFIER_INVALID',
                26 => 'MSG_PARAM_NO_REPEAT',
                27 => 'MSG_PARAM_UNKNOWN',
                28 => 'MSG_REMOTE_FAIL',
                29 => 'MSG_RESOURCE_EXAMPLE_PROTECTED',
                30 => 'MSG_RESOURCE_ID_FAIL',
                31 => 'MSG_RESOURCE_ID_MISMATCH',
                32 => 'MSG_RESOURCE_ID_MISSING',
                33 => 'MSG_RESOURCE_NOT_ALLOWED',
                34 => 'MSG_RESOURCE_REQUIRED',
                35 => 'MSG_RESOURCE_TYPE_MISMATCH',
                36 => 'MSG_SORT_UNKNOWN',
                37 => 'MSG_TRANSACTION_DUPLICATE_ID',
                38 => 'MSG_TRANSACTION_MISSING_ID',
                39 => 'MSG_UNHANDLED_NODE_TYPE',
                40 => 'MSG_UNKNOWN_CONTENT',
                41 => 'MSG_UNKNOWN_OPERATION',
                42 => 'MSG_UNKNOWN_TYPE',
                43 => 'MSG_UPDATED',
                44 => 'MSG_VERSION_AWARE',
                45 => 'MSG_VERSION_AWARE_CONFLICT',
                46 => 'MSG_VERSION_AWARE_URL',
                47 => 'MSG_WRONG_NS',
                48 => 'SEARCH_MULTIPLE',
                49 => 'SEARCH_NONE',
                50 => 'UPDATE_MULTIPLE_MATCHES',
            ],
        ],
    ];

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:192 */
}