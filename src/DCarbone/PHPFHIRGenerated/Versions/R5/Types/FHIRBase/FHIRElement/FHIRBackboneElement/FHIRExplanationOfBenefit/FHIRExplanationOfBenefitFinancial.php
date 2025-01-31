<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * This resource provides: the claim details; adjudication details from the
 * processing of a Claim; and optionally account balance information, for informing
 * the subscriber of the benefits provided.
 */
class FHIRExplanationOfBenefitFinancial extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL;

    /* class_default.php:48 */
    public const FIELD_TYPE = 'type';
    public const FIELD_ALLOWED_UNSIGNED_INT = 'allowedUnsignedInt';
    public const FIELD_ALLOWED_UNSIGNED_INT_EXT = '_allowedUnsignedInt';
    public const FIELD_ALLOWED_STRING = 'allowedString';
    public const FIELD_ALLOWED_STRING_EXT = '_allowedString';
    public const FIELD_ALLOWED_MONEY = 'allowedMoney';
    public const FIELD_ALLOWED_MONEY_EXT = '_allowedMoney';
    public const FIELD_USED_UNSIGNED_INT = 'usedUnsignedInt';
    public const FIELD_USED_UNSIGNED_INT_EXT = '_usedUnsignedInt';
    public const FIELD_USED_MONEY = 'usedMoney';
    public const FIELD_USED_MONEY_EXT = '_usedMoney';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_ALLOWED_UNSIGNED_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ALLOWED_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ALLOWED_MONEY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_USED_UNSIGNED_INT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_USED_MONEY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
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
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of the benefit which have been consumed to date.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    protected FHIRMoney $usedMoney;

    /* constructor.php:63 */
    /**
     * FHIRExplanationOfBenefitFinancial Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $allowedUnsignedInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $allowedString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $allowedMoney
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $usedUnsignedInt
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $usedMoney
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $allowedUnsignedInt = null,
                                null|string|FHIRStringPrimitive|FHIRString $allowedString = null,
                                null|FHIRDecimal|FHIRMoney $allowedMoney = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $usedUnsignedInt = null,
                                null|FHIRDecimal|FHIRMoney $usedMoney = null,
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
        if (null !== $usedMoney) {
            $this->setUsedMoney($usedMoney);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAllowedUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $allowedUnsignedInt,
                                          ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $allowedUnsignedInt) {
            unset($this->allowedUnsignedInt);
            return $this;
        }
        if (!($allowedUnsignedInt instanceof FHIRUnsignedInt)) {
            $allowedUnsignedInt = new FHIRUnsignedInt(value: $allowedUnsignedInt);
        }
        $this->allowedUnsignedInt = $allowedUnsignedInt;
        if ($this->_valueXMLLocations[self::FIELD_ALLOWED_UNSIGNED_INT] !== $valueXMLLocation) {
            $this->_setAllowedUnsignedIntValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the allowedUnsignedInt element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAllowedUnsignedIntValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ALLOWED_UNSIGNED_INT];
    }

    /**
     * Set the location the "value" field of the allowedUnsignedInt element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAllowedUnsignedIntValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ALLOWED_UNSIGNED_INT] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAllowedString(null|string|FHIRStringPrimitive|FHIRString $allowedString,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $allowedString) {
            unset($this->allowedString);
            return $this;
        }
        if (!($allowedString instanceof FHIRString)) {
            $allowedString = new FHIRString(value: $allowedString);
        }
        $this->allowedString = $allowedString;
        if ($this->_valueXMLLocations[self::FIELD_ALLOWED_STRING] !== $valueXMLLocation) {
            $this->_setAllowedStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the allowedString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAllowedStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ALLOWED_STRING];
    }

    /**
     * Set the location the "value" field of the allowedString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAllowedStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ALLOWED_STRING] = $valueXMLLocation;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $allowedMoney
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAllowedMoney(null|FHIRDecimal|FHIRMoney $allowedMoney,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $allowedMoney) {
            unset($this->allowedMoney);
            return $this;
        }
        if (!($allowedMoney instanceof FHIRMoney)) {
            $allowedMoney = new FHIRMoney(value: $allowedMoney);
        }
        $this->allowedMoney = $allowedMoney;
        if ($this->_valueXMLLocations[self::FIELD_ALLOWED_MONEY] !== $valueXMLLocation) {
            $this->_setAllowedMoneyValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the allowedMoney element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAllowedMoneyValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ALLOWED_MONEY];
    }

    /**
     * Set the location the "value" field of the allowedMoney element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAllowedMoneyValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ALLOWED_MONEY] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUsedUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $usedUnsignedInt,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $usedUnsignedInt) {
            unset($this->usedUnsignedInt);
            return $this;
        }
        if (!($usedUnsignedInt instanceof FHIRUnsignedInt)) {
            $usedUnsignedInt = new FHIRUnsignedInt(value: $usedUnsignedInt);
        }
        $this->usedUnsignedInt = $usedUnsignedInt;
        if ($this->_valueXMLLocations[self::FIELD_USED_UNSIGNED_INT] !== $valueXMLLocation) {
            $this->_setUsedUnsignedIntValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the usedUnsignedInt element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getUsedUnsignedIntValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_USED_UNSIGNED_INT];
    }

    /**
     * Set the location the "value" field of the usedUnsignedInt element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setUsedUnsignedIntValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_USED_UNSIGNED_INT] = $valueXMLLocation;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $usedMoney
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUsedMoney(null|FHIRDecimal|FHIRMoney $usedMoney,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $usedMoney) {
            unset($this->usedMoney);
            return $this;
        }
        if (!($usedMoney instanceof FHIRMoney)) {
            $usedMoney = new FHIRMoney(value: $usedMoney);
        }
        $this->usedMoney = $usedMoney;
        if ($this->_valueXMLLocations[self::FIELD_USED_MONEY] !== $valueXMLLocation) {
            $this->_setUsedMoneyValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the usedMoney element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getUsedMoneyValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_USED_MONEY];
    }

    /**
     * Set the location the "value" field of the usedMoney element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setUsedMoneyValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_USED_MONEY] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExplanationOfBenefitFinancial)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALLOWED_UNSIGNED_INT === $cen) {
                $type->setAllowedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALLOWED_STRING === $cen) {
                $type->setAllowedString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALLOWED_MONEY === $cen) {
                $type->setAllowedMoney(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USED_UNSIGNED_INT === $cen) {
                $type->setUsedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USED_MONEY === $cen) {
                $type->setUsedMoney(FHIRMoney::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ALLOWED_UNSIGNED_INT])) {
            if (isset($type->allowedUnsignedInt)) {
                $type->allowedUnsignedInt->setValue((string)$attributes[self::FIELD_ALLOWED_UNSIGNED_INT]);
                $type->_setAllowedUnsignedIntValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAllowedUnsignedInt((string)$attributes[self::FIELD_ALLOWED_UNSIGNED_INT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ALLOWED_STRING])) {
            if (isset($type->allowedString)) {
                $type->allowedString->setValue((string)$attributes[self::FIELD_ALLOWED_STRING]);
                $type->_setAllowedStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAllowedString((string)$attributes[self::FIELD_ALLOWED_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ALLOWED_MONEY])) {
            if (isset($type->allowedMoney)) {
                $type->allowedMoney->setValue((string)$attributes[self::FIELD_ALLOWED_MONEY]);
                $type->_setAllowedMoneyValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAllowedMoney((string)$attributes[self::FIELD_ALLOWED_MONEY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_USED_UNSIGNED_INT])) {
            if (isset($type->usedUnsignedInt)) {
                $type->usedUnsignedInt->setValue((string)$attributes[self::FIELD_USED_UNSIGNED_INT]);
                $type->_setUsedUnsignedIntValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setUsedUnsignedInt((string)$attributes[self::FIELD_USED_UNSIGNED_INT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_USED_MONEY])) {
            if (isset($type->usedMoney)) {
                $type->usedMoney->setValue((string)$attributes[self::FIELD_USED_MONEY]);
                $type->_setUsedMoneyValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setUsedMoney((string)$attributes[self::FIELD_USED_MONEY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->allowedUnsignedInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ALLOWED_UNSIGNED_INT]) {
            $xw->writeAttribute(self::FIELD_ALLOWED_UNSIGNED_INT, $this->allowedUnsignedInt->_getFormattedValue());
        }
        if (isset($this->allowedString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ALLOWED_STRING]) {
            $xw->writeAttribute(self::FIELD_ALLOWED_STRING, $this->allowedString->_getFormattedValue());
        }
        if (isset($this->allowedMoney) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ALLOWED_MONEY]) {
            $xw->writeAttribute(self::FIELD_ALLOWED_MONEY, $this->allowedMoney->_getFormattedValue());
        }
        if (isset($this->usedUnsignedInt) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_USED_UNSIGNED_INT]) {
            $xw->writeAttribute(self::FIELD_USED_UNSIGNED_INT, $this->usedUnsignedInt->_getFormattedValue());
        }
        if (isset($this->usedMoney) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_USED_MONEY]) {
            $xw->writeAttribute(self::FIELD_USED_MONEY, $this->usedMoney->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->allowedUnsignedInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ALLOWED_UNSIGNED_INT]
                || $this->allowedUnsignedInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ALLOWED_UNSIGNED_INT);
            $this->allowedUnsignedInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ALLOWED_UNSIGNED_INT]);
            $xw->endElement();
        }
        if (isset($this->allowedString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ALLOWED_STRING]
                || $this->allowedString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ALLOWED_STRING);
            $this->allowedString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ALLOWED_STRING]);
            $xw->endElement();
        }
        if (isset($this->allowedMoney)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ALLOWED_MONEY]
                || $this->allowedMoney->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ALLOWED_MONEY);
            $this->allowedMoney->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ALLOWED_MONEY]);
            $xw->endElement();
        }
        if (isset($this->usedUnsignedInt)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_USED_UNSIGNED_INT]
                || $this->usedUnsignedInt->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_USED_UNSIGNED_INT);
            $this->usedUnsignedInt->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_USED_UNSIGNED_INT]);
            $xw->endElement();
        }
        if (isset($this->usedMoney)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_USED_MONEY]
                || $this->usedMoney->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_USED_MONEY);
            $this->usedMoney->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_USED_MONEY]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExplanationOfBenefitFinancial)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $type->setType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_TYPE], $config));
        }
        if (isset($json[self::FIELD_ALLOWED_UNSIGNED_INT])
            || isset($json[self::FIELD_ALLOWED_UNSIGNED_INT_EXT])
            || array_key_exists(self::FIELD_ALLOWED_UNSIGNED_INT, $json)
            || array_key_exists(self::FIELD_ALLOWED_UNSIGNED_INT_EXT, $json)) {
            $value = $json[self::FIELD_ALLOWED_UNSIGNED_INT] ?? null;
            $type->setAllowedUnsignedInt(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_ALLOWED_UNSIGNED_INT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ALLOWED_STRING])
            || isset($json[self::FIELD_ALLOWED_STRING_EXT])
            || array_key_exists(self::FIELD_ALLOWED_STRING, $json)
            || array_key_exists(self::FIELD_ALLOWED_STRING_EXT, $json)) {
            $value = $json[self::FIELD_ALLOWED_STRING] ?? null;
            $type->setAllowedString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ALLOWED_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ALLOWED_MONEY])
            || isset($json[self::FIELD_ALLOWED_MONEY_EXT])
            || array_key_exists(self::FIELD_ALLOWED_MONEY, $json)
            || array_key_exists(self::FIELD_ALLOWED_MONEY_EXT, $json)) {
            $value = $json[self::FIELD_ALLOWED_MONEY] ?? null;
            $type->setAllowedMoney(FHIRMoney::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMoney::FIELD_VALUE => $value]) + ($json[self::FIELD_ALLOWED_MONEY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_USED_UNSIGNED_INT])
            || isset($json[self::FIELD_USED_UNSIGNED_INT_EXT])
            || array_key_exists(self::FIELD_USED_UNSIGNED_INT, $json)
            || array_key_exists(self::FIELD_USED_UNSIGNED_INT_EXT, $json)) {
            $value = $json[self::FIELD_USED_UNSIGNED_INT] ?? null;
            $type->setUsedUnsignedInt(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_USED_UNSIGNED_INT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_USED_MONEY])
            || isset($json[self::FIELD_USED_MONEY_EXT])
            || array_key_exists(self::FIELD_USED_MONEY, $json)
            || array_key_exists(self::FIELD_USED_MONEY_EXT, $json)) {
            $value = $json[self::FIELD_USED_MONEY] ?? null;
            $type->setUsedMoney(FHIRMoney::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMoney::FIELD_VALUE => $value]) + ($json[self::FIELD_USED_MONEY_EXT] ?? []),
                $config,
            ));
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
            if (null !== ($val = $this->allowedMoney->getValue())) {
                $out->allowedMoney = $val;
            }
            $ext = $this->allowedMoney->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_allowedMoney = $ext;
            }
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
        if (isset($this->usedMoney)) {
            if (null !== ($val = $this->usedMoney->getValue())) {
                $out->usedMoney = $val;
            }
            $ext = $this->usedMoney->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_usedMoney = $ext;
            }
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}