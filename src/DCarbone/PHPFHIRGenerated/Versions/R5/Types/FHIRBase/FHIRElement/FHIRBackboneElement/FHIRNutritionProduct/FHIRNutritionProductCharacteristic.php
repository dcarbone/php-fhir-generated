<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionProduct;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A food or supplement that is consumed by patients.
 */
class FHIRNutritionProductCharacteristic extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_NUTRITION_PRODUCT_DOT_CHARACTERISTIC;


    public const FIELD_TYPE = 'type';
    public const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    public const FIELD_VALUE_STRING = 'valueString';
    public const FIELD_VALUE_STRING_EXT = '_valueString';
    public const FIELD_VALUE_QUANTITY = 'valueQuantity';
    public const FIELD_VALUE_BASE_64BINARY = 'valueBase64Binary';
    public const FIELD_VALUE_BASE_64BINARY_EXT = '_valueBase64Binary';
    public const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
    public const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    public const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying which characteristic of the product is being described (for
     * example, colour, shape).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $valueCodeableConcept;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $valueString;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $valueQuantity;
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $valueBase64Binary;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment 
     */
    protected FHIRAttachment $valueAttachment;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $valueBoolean;

    /** Default validation map for fields in type NutritionProduct.Characteristic */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VALUE_CODEABLE_CONCEPT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VALUE_STRING => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VALUE_QUANTITY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VALUE_BASE_64BINARY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VALUE_ATTACHMENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VALUE_BOOLEAN => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRNutritionProductCharacteristic Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $valueCodeableConcept
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $valueString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $valueQuantity
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $valueAttachment
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $valueBoolean
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRCodeableConcept $valueCodeableConcept = null,
                                null|string|FHIRStringPrimitive|FHIRString $valueString = null,
                                null|FHIRQuantity $valueQuantity = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $valueBase64Binary = null,
                                null|FHIRAttachment $valueAttachment = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $valueCodeableConcept) {
            $this->setValueCodeableConcept($valueCodeableConcept);
        }
        if (null !== $valueString) {
            $this->setValueString($valueString);
        }
        if (null !== $valueQuantity) {
            $this->setValueQuantity($valueQuantity);
        }
        if (null !== $valueBase64Binary) {
            $this->setValueBase64Binary($valueBase64Binary);
        }
        if (null !== $valueAttachment) {
            $this->setValueAttachment($valueAttachment);
        }
        if (null !== $valueBoolean) {
            $this->setValueBoolean($valueBoolean);
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
     * A code specifying which characteristic of the product is being described (for
     * example, colour, shape).
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
     * A code specifying which characteristic of the product is being described (for
     * example, colour, shape).
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getValueCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->valueCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(null|FHIRCodeableConcept $valueCodeableConcept): self
    {
        if (null === $valueCodeableConcept) {
            unset($this->valueCodeableConcept);
            return $this;
        }
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getValueString(): null|FHIRString
    {
        return $this->valueString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $valueString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueString(null|string|FHIRStringPrimitive|FHIRString $valueString,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueString) {
            unset($this->valueString);
            return $this;
        }
        if (!($valueString instanceof FHIRString)) {
            $valueString = new FHIRString(value: $valueString);
        }
        if (null !== $valueXMLLocation) {
            $valueString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueString->_getValueXMLLocation()) {
            $valueString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getValueQuantity(): null|FHIRQuantity
    {
        return $this->valueQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $valueQuantity
     * @return static
     */
    public function setValueQuantity(null|FHIRQuantity $valueQuantity): self
    {
        if (null === $valueQuantity) {
            unset($this->valueQuantity);
            return $this;
        }
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary(): null|FHIRBase64Binary
    {
        return $this->valueBase64Binary ?? null;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $valueBase64Binary,
                                         null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueBase64Binary) {
            unset($this->valueBase64Binary);
            return $this;
        }
        if (!($valueBase64Binary instanceof FHIRBase64Binary)) {
            $valueBase64Binary = new FHIRBase64Binary(value: $valueBase64Binary);
        }
        if (null !== $valueXMLLocation) {
            $valueBase64Binary->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueBase64Binary->_getValueXMLLocation()) {
            $valueBase64Binary->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment
     */
    public function getValueAttachment(): null|FHIRAttachment
    {
        return $this->valueAttachment ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $valueAttachment
     * @return static
     */
    public function setValueAttachment(null|FHIRAttachment $valueAttachment): self
    {
        if (null === $valueAttachment) {
            unset($this->valueAttachment);
            return $this;
        }
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean(): null|FHIRBoolean
    {
        return $this->valueBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual characteristic value corresponding to the type.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $valueBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $valueBoolean) {
            unset($this->valueBoolean);
            return $this;
        }
        if (!($valueBoolean instanceof FHIRBoolean)) {
            $valueBoolean = new FHIRBoolean(value: $valueBoolean);
        }
        if (null !== $valueXMLLocation) {
            $valueBoolean->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $valueBoolean->_getValueXMLLocation()) {
            $valueBoolean->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->valueBoolean = $valueBoolean;
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
        if (null !== ($v = $this->getValueCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_BOOLEAN] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
            $v = $this->getValueCodeableConcept();
            foreach($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_VALUE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_STRING])) {
            $v = $this->getValueString();
            foreach($validationRules[self::FIELD_VALUE_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_STRING])) {
                        $errs[self::FIELD_VALUE_STRING] = [];
                    }
                    $errs[self::FIELD_VALUE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_QUANTITY])) {
            $v = $this->getValueQuantity();
            foreach($validationRules[self::FIELD_VALUE_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_QUANTITY])) {
                        $errs[self::FIELD_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_BASE_64BINARY])) {
            $v = $this->getValueBase64Binary();
            foreach($validationRules[self::FIELD_VALUE_BASE_64BINARY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_BASE_64BINARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_BASE_64BINARY])) {
                        $errs[self::FIELD_VALUE_BASE_64BINARY] = [];
                    }
                    $errs[self::FIELD_VALUE_BASE_64BINARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_ATTACHMENT])) {
            $v = $this->getValueAttachment();
            foreach($validationRules[self::FIELD_VALUE_ATTACHMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_ATTACHMENT])) {
                        $errs[self::FIELD_VALUE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_VALUE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_BOOLEAN])) {
            $v = $this->getValueBoolean();
            foreach($validationRules[self::FIELD_VALUE_BOOLEAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALUE_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_BOOLEAN])) {
                        $errs[self::FIELD_VALUE_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_VALUE_BOOLEAN][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionProduct\FHIRNutritionProductCharacteristic $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionProduct\FHIRNutritionProductCharacteristic
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRNutritionProductCharacteristic)) {
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
            } else if (self::FIELD_VALUE_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setValueQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_BASE_64BINARY === $childName) {
                $v = new FHIRBase64Binary(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_ATTACHMENT === $childName) {
                $v = new FHIRAttachment();
                $type->setValueAttachment(FHIRAttachment::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VALUE_BOOLEAN === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setValueBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_VALUE_STRING])) {
            $pt = $type->getValueString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueString(new FHIRString(
                    value: (string)$attributes[self::FIELD_VALUE_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_BASE_64BINARY])) {
            $pt = $type->getValueBase64Binary();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_BASE_64BINARY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueBase64Binary(new FHIRBase64Binary(
                    value: (string)$attributes[self::FIELD_VALUE_BASE_64BINARY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VALUE_BOOLEAN])) {
            $pt = $type->getValueBoolean();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_VALUE_BOOLEAN]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setValueBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_VALUE_BOOLEAN],
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
            $xw->openRootNode('NutritionProductCharacteristic', $this->_getSourceXMLNS());
        }
        if (isset($this->valueString) && $this->valueString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_STRING, $this->valueString->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueBase64Binary) && $this->valueBase64Binary->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_BASE_64BINARY, $this->valueBase64Binary->getValue()?->_getFormattedValue());
        }
        if (isset($this->valueBoolean) && $this->valueBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VALUE_BOOLEAN, $this->valueBoolean->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueCodeableConcept)) {
            $xw->startElement(self::FIELD_VALUE_CODEABLE_CONCEPT);
            $this->valueCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueString) && $this->valueString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_STRING);
            $this->valueString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueQuantity)) {
            $xw->startElement(self::FIELD_VALUE_QUANTITY);
            $this->valueQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueBase64Binary) && $this->valueBase64Binary->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_BASE_64BINARY);
            $this->valueBase64Binary->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueAttachment)) {
            $xw->startElement(self::FIELD_VALUE_ATTACHMENT);
            $this->valueAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueBoolean) && $this->valueBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VALUE_BOOLEAN);
            $this->valueBoolean->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionProduct\FHIRNutritionProductCharacteristic $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionProduct\FHIRNutritionProductCharacteristic
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRNutritionProductCharacteristic)) {
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
        if (isset($json[self::FIELD_VALUE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_VALUE_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setValueCodeableConcept($json[self::FIELD_VALUE_CODEABLE_CONCEPT]);
            } else {
                $type->setValueCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_VALUE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($json[self::FIELD_VALUE_STRING]) || isset($json[self::FIELD_VALUE_STRING_EXT]) || array_key_exists(self::FIELD_VALUE_STRING, $json) || array_key_exists(self::FIELD_VALUE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_STRING] ?? null;
            $ext = (isset($json[self::FIELD_VALUE_STRING_EXT]) && is_array($json[self::FIELD_VALUE_STRING_EXT])) ? $json[self::FIELD_VALUE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setValueString($value);
                } else if (is_array($value)) {
                    $type->setValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setValueString(new FHIRString($ext));
            } else {
                $type->setValueString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_VALUE_QUANTITY]) || array_key_exists(self::FIELD_VALUE_QUANTITY, $json)) {
            if ($json[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $type->setValueQuantity($json[self::FIELD_VALUE_QUANTITY]);
            } else {
                $type->setValueQuantity(new FHIRQuantity($json[self::FIELD_VALUE_QUANTITY]));
            }
        }
        if (isset($json[self::FIELD_VALUE_BASE_64BINARY]) || isset($json[self::FIELD_VALUE_BASE_64BINARY_EXT]) || array_key_exists(self::FIELD_VALUE_BASE_64BINARY, $json) || array_key_exists(self::FIELD_VALUE_BASE_64BINARY_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_BASE_64BINARY] ?? null;
            $ext = (isset($json[self::FIELD_VALUE_BASE_64BINARY_EXT]) && is_array($json[self::FIELD_VALUE_BASE_64BINARY_EXT])) ? $json[self::FIELD_VALUE_BASE_64BINARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $type->setValueBase64Binary($value);
                } else if (is_array($value)) {
                    $type->setValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $type->setValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setValueBase64Binary(new FHIRBase64Binary($ext));
            } else {
                $type->setValueBase64Binary(new FHIRBase64Binary(null));
            }
        }
        if (isset($json[self::FIELD_VALUE_ATTACHMENT]) || array_key_exists(self::FIELD_VALUE_ATTACHMENT, $json)) {
            if ($json[self::FIELD_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $type->setValueAttachment($json[self::FIELD_VALUE_ATTACHMENT]);
            } else {
                $type->setValueAttachment(new FHIRAttachment($json[self::FIELD_VALUE_ATTACHMENT]));
            }
        }
        if (isset($json[self::FIELD_VALUE_BOOLEAN]) || isset($json[self::FIELD_VALUE_BOOLEAN_EXT]) || array_key_exists(self::FIELD_VALUE_BOOLEAN, $json) || array_key_exists(self::FIELD_VALUE_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_BOOLEAN] ?? null;
            $ext = (isset($json[self::FIELD_VALUE_BOOLEAN_EXT]) && is_array($json[self::FIELD_VALUE_BOOLEAN_EXT])) ? $json[self::FIELD_VALUE_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setValueBoolean($value);
                } else if (is_array($value)) {
                    $type->setValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setValueBoolean(new FHIRBoolean($ext));
            } else {
                $type->setValueBoolean(new FHIRBoolean(null));
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
        if (isset($this->valueCodeableConcept)) {
            $out->valueCodeableConcept = $this->valueCodeableConcept;
        }
        if (isset($this->valueString)) {
            if (null !== ($val = $this->valueString->getValue())) {
                $out->valueString = $val;
            }
            $ext = $this->valueString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueString = $ext;
            }
        }
        if (isset($this->valueQuantity)) {
            $out->valueQuantity = $this->valueQuantity;
        }
        if (isset($this->valueBase64Binary)) {
            if (null !== ($val = $this->valueBase64Binary->getValue())) {
                $out->valueBase64Binary = $val;
            }
            $ext = $this->valueBase64Binary->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueBase64Binary = $ext;
            }
        }
        if (isset($this->valueAttachment)) {
            $out->valueAttachment = $this->valueAttachment;
        }
        if (isset($this->valueBoolean)) {
            if (null !== ($val = $this->valueBoolean->getValue())) {
                $out->valueBoolean = $val;
            }
            $ext = $this->valueBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_valueBoolean = $ext;
            }
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