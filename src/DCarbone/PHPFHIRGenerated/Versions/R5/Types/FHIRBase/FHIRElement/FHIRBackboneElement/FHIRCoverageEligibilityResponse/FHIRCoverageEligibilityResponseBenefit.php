<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * This resource provides eligibility and plan details from the processing of an
 * CoverageEligibilityRequest resource.
 */
class FHIRCoverageEligibilityResponseBenefit extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_BENEFIT;


    public const FIELD_TYPE = 'type';
    public const FIELD_ALLOWED_UNSIGNED_INT = 'allowedUnsignedInt';
    public const FIELD_ALLOWED_UNSIGNED_INT_EXT = '_allowedUnsignedInt';
    public const FIELD_ALLOWED_STRING = 'allowedString';
    public const FIELD_ALLOWED_STRING_EXT = '_allowedString';
    public const FIELD_ALLOWED_MONEY = 'allowedMoney';
    public const FIELD_USED_UNSIGNED_INT = 'usedUnsignedInt';
    public const FIELD_USED_UNSIGNED_INT_EXT = '_usedUnsignedInt';
    public const FIELD_USED_STRING = 'usedString';
    public const FIELD_USED_STRING_EXT = '_usedString';
    public const FIELD_USED_MONEY = 'usedMoney';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of benefit being provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $allowedUnsignedInt;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $allowedString;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    protected FHIRMoney $allowedMoney;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $usedUnsignedInt;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $usedString;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    protected FHIRMoney $usedMoney;

    /** Default validation map for fields in type CoverageEligibilityResponse.Benefit */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRCoverageEligibilityResponseBenefit Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $allowedUnsignedInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $allowedString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $allowedMoney
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $usedUnsignedInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $usedString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $usedMoney
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $allowedUnsignedInt = null,
                                null|string|FHIRStringPrimitive|FHIRString $allowedString = null,
                                null|FHIRMoney $allowedMoney = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $usedUnsignedInt = null,
                                null|string|FHIRStringPrimitive|FHIRString $usedString = null,
                                null|FHIRMoney $usedMoney = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $allowedUnsignedInt) {
            $this->setAllowedUnsignedInt($allowedUnsignedInt);
        }
        if (null !== $allowedString) {
            $this->setAllowedString($allowedString);
        }
        if (null !== $allowedMoney) {
            $this->setAllowedMoney($allowedMoney);
        }
        if (null !== $usedUnsignedInt) {
            $this->setUsedUnsignedInt($usedUnsignedInt);
        }
        if (null !== $usedString) {
            $this->setUsedString($usedString);
        }
        if (null !== $usedMoney) {
            $this->setUsedMoney($usedMoney);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of benefit being provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of benefit being provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getAllowedUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->allowedUnsignedInt ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $allowedUnsignedInt
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAllowedUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $allowedUnsignedInt,
                                          null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $allowedUnsignedInt) {
            unset($this->allowedUnsignedInt);
            return $this;
        }
        if (!($allowedUnsignedInt instanceof FHIRUnsignedInt)) {
            $allowedUnsignedInt = new FHIRUnsignedInt(value: $allowedUnsignedInt);
        }
        if (null !== $valueXMLLocation) {
            $allowedUnsignedInt->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $allowedUnsignedInt->_getValueXMLLocation()) {
            $allowedUnsignedInt->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->allowedUnsignedInt = $allowedUnsignedInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getAllowedString(): null|FHIRString
    {
        return $this->allowedString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $allowedString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAllowedString(null|string|FHIRStringPrimitive|FHIRString $allowedString,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $allowedString) {
            unset($this->allowedString);
            return $this;
        }
        if (!($allowedString instanceof FHIRString)) {
            $allowedString = new FHIRString(value: $allowedString);
        }
        if (null !== $valueXMLLocation) {
            $allowedString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $allowedString->_getValueXMLLocation()) {
            $allowedString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->allowedString = $allowedString;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getAllowedMoney(): null|FHIRMoney
    {
        return $this->allowedMoney ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which is permitted under the coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $allowedMoney
     * @return static
     */
    public function setAllowedMoney(null|FHIRMoney $allowedMoney): self
    {
        if (null === $allowedMoney) {
            unset($this->allowedMoney);
            return $this;
        }
        $this->allowedMoney = $allowedMoney;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getUsedUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->usedUnsignedInt ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $usedUnsignedInt
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUsedUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $usedUnsignedInt,
                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $usedUnsignedInt) {
            unset($this->usedUnsignedInt);
            return $this;
        }
        if (!($usedUnsignedInt instanceof FHIRUnsignedInt)) {
            $usedUnsignedInt = new FHIRUnsignedInt(value: $usedUnsignedInt);
        }
        if (null !== $valueXMLLocation) {
            $usedUnsignedInt->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $usedUnsignedInt->_getValueXMLLocation()) {
            $usedUnsignedInt->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->usedUnsignedInt = $usedUnsignedInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getUsedString(): null|FHIRString
    {
        return $this->usedString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $usedString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUsedString(null|string|FHIRStringPrimitive|FHIRString $usedString,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $usedString) {
            unset($this->usedString);
            return $this;
        }
        if (!($usedString instanceof FHIRString)) {
            $usedString = new FHIRString(value: $usedString);
        }
        if (null !== $valueXMLLocation) {
            $usedString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $usedString->_getValueXMLLocation()) {
            $usedString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->usedString = $usedString;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getUsedMoney(): null|FHIRMoney
    {
        return $this->usedMoney ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $usedMoney
     * @return static
     */
    public function setUsedMoney(null|FHIRMoney $usedMoney): self
    {
        if (null === $usedMoney) {
            unset($this->usedMoney);
            return $this;
        }
        $this->usedMoney = $usedMoney;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALLOWED_UNSIGNED_INT])) {
            $v = $this->getAllowedUnsignedInt();
            foreach($validationRules[self::FIELD_ALLOWED_UNSIGNED_INT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALLOWED_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALLOWED_UNSIGNED_INT])) {
                        $errs[self::FIELD_ALLOWED_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_ALLOWED_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALLOWED_STRING])) {
            $v = $this->getAllowedString();
            foreach($validationRules[self::FIELD_ALLOWED_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALLOWED_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALLOWED_STRING])) {
                        $errs[self::FIELD_ALLOWED_STRING] = [];
                    }
                    $errs[self::FIELD_ALLOWED_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALLOWED_MONEY])) {
            $v = $this->getAllowedMoney();
            foreach($validationRules[self::FIELD_ALLOWED_MONEY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALLOWED_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALLOWED_MONEY])) {
                        $errs[self::FIELD_ALLOWED_MONEY] = [];
                    }
                    $errs[self::FIELD_ALLOWED_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USED_UNSIGNED_INT])) {
            $v = $this->getUsedUnsignedInt();
            foreach($validationRules[self::FIELD_USED_UNSIGNED_INT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_USED_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USED_UNSIGNED_INT])) {
                        $errs[self::FIELD_USED_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_USED_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USED_STRING])) {
            $v = $this->getUsedString();
            foreach($validationRules[self::FIELD_USED_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_USED_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USED_STRING])) {
                        $errs[self::FIELD_USED_STRING] = [];
                    }
                    $errs[self::FIELD_USED_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USED_MONEY])) {
            $v = $this->getUsedMoney();
            foreach($validationRules[self::FIELD_USED_MONEY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_USED_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USED_MONEY])) {
                        $errs[self::FIELD_USED_MONEY] = [];
                    }
                    $errs[self::FIELD_USED_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCoverageEligibilityResponseBenefit)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ALLOWED_UNSIGNED_INT === $childName) {
                $v = new FHIRUnsignedInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAllowedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ALLOWED_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAllowedString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ALLOWED_MONEY === $childName) {
                $v = new FHIRMoney();
                $type->setAllowedMoney(FHIRMoney::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_USED_UNSIGNED_INT === $childName) {
                $v = new FHIRUnsignedInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUsedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_USED_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUsedString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_USED_MONEY === $childName) {
                $v = new FHIRMoney();
                $type->setUsedMoney(FHIRMoney::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ALLOWED_UNSIGNED_INT])) {
            $pt = $type->getAllowedUnsignedInt();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ALLOWED_UNSIGNED_INT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAllowedUnsignedInt(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_ALLOWED_UNSIGNED_INT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ALLOWED_STRING])) {
            $pt = $type->getAllowedString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ALLOWED_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAllowedString(new FHIRString(
                    value: (string)$attributes[self::FIELD_ALLOWED_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_USED_UNSIGNED_INT])) {
            $pt = $type->getUsedUnsignedInt();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_USED_UNSIGNED_INT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUsedUnsignedInt(new FHIRUnsignedInt(
                    value: (string)$attributes[self::FIELD_USED_UNSIGNED_INT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_USED_STRING])) {
            $pt = $type->getUsedString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_USED_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUsedString(new FHIRString(
                    value: (string)$attributes[self::FIELD_USED_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('CoverageEligibilityResponseBenefit', $this->_getSourceXMLNS());
        }
        if (isset($this->allowedUnsignedInt) && $this->allowedUnsignedInt->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ALLOWED_UNSIGNED_INT, $this->allowedUnsignedInt->getValue()?->_getFormattedValue());
        }
        if (isset($this->allowedString) && $this->allowedString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ALLOWED_STRING, $this->allowedString->getValue()?->_getFormattedValue());
        }
        if (isset($this->usedUnsignedInt) && $this->usedUnsignedInt->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_USED_UNSIGNED_INT, $this->usedUnsignedInt->getValue()?->_getFormattedValue());
        }
        if (isset($this->usedString) && $this->usedString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_USED_STRING, $this->usedString->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->allowedUnsignedInt) && $this->allowedUnsignedInt->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ALLOWED_UNSIGNED_INT);
            $this->allowedUnsignedInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->allowedString) && $this->allowedString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ALLOWED_STRING);
            $this->allowedString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->allowedMoney)) {
            $xw->startElement(self::FIELD_ALLOWED_MONEY);
            $this->allowedMoney->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->usedUnsignedInt) && $this->usedUnsignedInt->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_USED_UNSIGNED_INT);
            $this->usedUnsignedInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->usedString) && $this->usedString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_USED_STRING);
            $this->usedString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->usedMoney)) {
            $xw->startElement(self::FIELD_USED_MONEY);
            $this->usedMoney->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCoverageEligibilityResponseBenefit)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if ($json[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $type->setType($json[self::FIELD_TYPE]);
            } else {
                $type->setType(new FHIRCodeableConcept($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_ALLOWED_UNSIGNED_INT]) || isset($json[self::FIELD_ALLOWED_UNSIGNED_INT_EXT]) || array_key_exists(self::FIELD_ALLOWED_UNSIGNED_INT, $json) || array_key_exists(self::FIELD_ALLOWED_UNSIGNED_INT_EXT, $json)) {
            $value = $json[self::FIELD_ALLOWED_UNSIGNED_INT] ?? null;
            $ext = (isset($json[self::FIELD_ALLOWED_UNSIGNED_INT_EXT]) && is_array($json[self::FIELD_ALLOWED_UNSIGNED_INT_EXT])) ? $json[self::FIELD_ALLOWED_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setAllowedUnsignedInt($value);
                } else if (is_array($value)) {
                    $type->setAllowedUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setAllowedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAllowedUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $type->setAllowedUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_ALLOWED_STRING]) || isset($json[self::FIELD_ALLOWED_STRING_EXT]) || array_key_exists(self::FIELD_ALLOWED_STRING, $json) || array_key_exists(self::FIELD_ALLOWED_STRING_EXT, $json)) {
            $value = $json[self::FIELD_ALLOWED_STRING] ?? null;
            $ext = (isset($json[self::FIELD_ALLOWED_STRING_EXT]) && is_array($json[self::FIELD_ALLOWED_STRING_EXT])) ? $json[self::FIELD_ALLOWED_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setAllowedString($value);
                } else if (is_array($value)) {
                    $type->setAllowedString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setAllowedString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAllowedString(new FHIRString($ext));
            } else {
                $type->setAllowedString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_ALLOWED_MONEY]) || array_key_exists(self::FIELD_ALLOWED_MONEY, $json)) {
            if ($json[self::FIELD_ALLOWED_MONEY] instanceof FHIRMoney) {
                $type->setAllowedMoney($json[self::FIELD_ALLOWED_MONEY]);
            } else {
                $type->setAllowedMoney(new FHIRMoney($json[self::FIELD_ALLOWED_MONEY]));
            }
        }
        if (isset($json[self::FIELD_USED_UNSIGNED_INT]) || isset($json[self::FIELD_USED_UNSIGNED_INT_EXT]) || array_key_exists(self::FIELD_USED_UNSIGNED_INT, $json) || array_key_exists(self::FIELD_USED_UNSIGNED_INT_EXT, $json)) {
            $value = $json[self::FIELD_USED_UNSIGNED_INT] ?? null;
            $ext = (isset($json[self::FIELD_USED_UNSIGNED_INT_EXT]) && is_array($json[self::FIELD_USED_UNSIGNED_INT_EXT])) ? $json[self::FIELD_USED_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $type->setUsedUnsignedInt($value);
                } else if (is_array($value)) {
                    $type->setUsedUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $type->setUsedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUsedUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $type->setUsedUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (isset($json[self::FIELD_USED_STRING]) || isset($json[self::FIELD_USED_STRING_EXT]) || array_key_exists(self::FIELD_USED_STRING, $json) || array_key_exists(self::FIELD_USED_STRING_EXT, $json)) {
            $value = $json[self::FIELD_USED_STRING] ?? null;
            $ext = (isset($json[self::FIELD_USED_STRING_EXT]) && is_array($json[self::FIELD_USED_STRING_EXT])) ? $json[self::FIELD_USED_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setUsedString($value);
                } else if (is_array($value)) {
                    $type->setUsedString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setUsedString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUsedString(new FHIRString($ext));
            } else {
                $type->setUsedString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_USED_MONEY]) || array_key_exists(self::FIELD_USED_MONEY, $json)) {
            if ($json[self::FIELD_USED_MONEY] instanceof FHIRMoney) {
                $type->setUsedMoney($json[self::FIELD_USED_MONEY]);
            } else {
                $type->setUsedMoney(new FHIRMoney($json[self::FIELD_USED_MONEY]));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->allowedUnsignedInt)) {
            if (null !== ($val = $this->allowedUnsignedInt->getValue())) {
                $out->allowedUnsignedInt = $val;
            }
            $ext = $this->allowedUnsignedInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_allowedUnsignedInt = $ext;
            }
        }
        if (isset($this->allowedString)) {
            if (null !== ($val = $this->allowedString->getValue())) {
                $out->allowedString = $val;
            }
            $ext = $this->allowedString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_allowedString = $ext;
            }
        }
        if (isset($this->allowedMoney)) {
            $out->allowedMoney = $this->allowedMoney;
        }
        if (isset($this->usedUnsignedInt)) {
            if (null !== ($val = $this->usedUnsignedInt->getValue())) {
                $out->usedUnsignedInt = $val;
            }
            $ext = $this->usedUnsignedInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_usedUnsignedInt = $ext;
            }
        }
        if (isset($this->usedString)) {
            if (null !== ($val = $this->usedString->getValue())) {
                $out->usedString = $val;
            }
            $ext = $this->usedString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_usedString = $ext;
            }
        }
        if (isset($this->usedMoney)) {
            $out->usedMoney = $this->usedMoney;
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}