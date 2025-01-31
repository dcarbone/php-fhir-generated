<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 */
class FHIRObservationDefinitionQuantitativeDetails extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS;

    /* class_default.php:48 */
    public const FIELD_CUSTOMARY_UNIT = 'customaryUnit';
    public const FIELD_UNIT = 'unit';
    public const FIELD_CONVERSION_FACTOR = 'conversionFactor';
    public const FIELD_CONVERSION_FACTOR_EXT = '_conversionFactor';
    public const FIELD_DECIMAL_PRECISION = 'decimalPrecision';
    public const FIELD_DECIMAL_PRECISION_EXT = '_decimalPrecision';

    /* class_default.php:67 */
    private static array $_validationRules = [];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_CONVERSION_FACTOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECIMAL_PRECISION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Customary unit used to report quantitative results of observations conforming to
     * this ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $customaryUnit;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * SI unit used to report quantitative results of observations conforming to this
     * ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $unit;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Factor for converting value expressed with SI unit to value expressed with
     * customary unit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $conversionFactor;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of digits after decimal separator when the results of such observations
     * are of type Quantity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $decimalPrecision;

    /* constructor.php:63 */
    /**
     * FHIRObservationDefinitionQuantitativeDetails Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $customaryUnit
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $unit
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $conversionFactor
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $decimalPrecision
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $customaryUnit = null,
                                null|FHIRCodeableConcept $unit = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $conversionFactor = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $decimalPrecision = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $customaryUnit) {
            $this->setCustomaryUnit($customaryUnit);
        }
        if (null !== $unit) {
            $this->setUnit($unit);
        }
        if (null !== $conversionFactor) {
            $this->setConversionFactor($conversionFactor);
        }
        if (null !== $decimalPrecision) {
            $this->setDecimalPrecision($decimalPrecision);
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
     * Customary unit used to report quantitative results of observations conforming to
     * this ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCustomaryUnit(): null|FHIRCodeableConcept
    {
        return $this->customaryUnit ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Customary unit used to report quantitative results of observations conforming to
     * this ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $customaryUnit
     * @return static
     */
    public function setCustomaryUnit(null|FHIRCodeableConcept $customaryUnit): self
    {
        if (null === $customaryUnit) {
            unset($this->customaryUnit);
            return $this;
        }
        $this->customaryUnit = $customaryUnit;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * SI unit used to report quantitative results of observations conforming to this
     * ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getUnit(): null|FHIRCodeableConcept
    {
        return $this->unit ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * SI unit used to report quantitative results of observations conforming to this
     * ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $unit
     * @return static
     */
    public function setUnit(null|FHIRCodeableConcept $unit): self
    {
        if (null === $unit) {
            unset($this->unit);
            return $this;
        }
        $this->unit = $unit;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Factor for converting value expressed with SI unit to value expressed with
     * customary unit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal
     */
    public function getConversionFactor(): null|FHIRDecimal
    {
        return $this->conversionFactor ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Factor for converting value expressed with SI unit to value expressed with
     * customary unit.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $conversionFactor
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setConversionFactor(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $conversionFactor,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $conversionFactor) {
            unset($this->conversionFactor);
            return $this;
        }
        if (!($conversionFactor instanceof FHIRDecimal)) {
            $conversionFactor = new FHIRDecimal(value: $conversionFactor);
        }
        $this->conversionFactor = $conversionFactor;
        if ($this->_valueXMLLocations[self::FIELD_CONVERSION_FACTOR] !== $valueXMLLocation) {
            $this->_setConversionFactorValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the conversionFactor element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getConversionFactorValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONVERSION_FACTOR];
    }

    /**
     * Set the location the "value" field of the conversionFactor element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setConversionFactorValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONVERSION_FACTOR] = $valueXMLLocation;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of digits after decimal separator when the results of such observations
     * are of type Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger
     */
    public function getDecimalPrecision(): null|FHIRInteger
    {
        return $this->decimalPrecision ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of digits after decimal separator when the results of such observations
     * are of type Quantity.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $decimalPrecision
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDecimalPrecision(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $decimalPrecision,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $decimalPrecision) {
            unset($this->decimalPrecision);
            return $this;
        }
        if (!($decimalPrecision instanceof FHIRInteger)) {
            $decimalPrecision = new FHIRInteger(value: $decimalPrecision);
        }
        $this->decimalPrecision = $decimalPrecision;
        if ($this->_valueXMLLocations[self::FIELD_DECIMAL_PRECISION] !== $valueXMLLocation) {
            $this->_setDecimalPrecisionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the decimalPrecision element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDecimalPrecisionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DECIMAL_PRECISION];
    }

    /**
     * Set the location the "value" field of the decimalPrecision element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDecimalPrecisionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DECIMAL_PRECISION] = $valueXMLLocation;
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
        if (isset($validationRules[self::FIELD_CUSTOMARY_UNIT])) {
            $v = $this->getCustomaryUnit();
            foreach($validationRules[self::FIELD_CUSTOMARY_UNIT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CUSTOMARY_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CUSTOMARY_UNIT])) {
                        $errs[self::FIELD_CUSTOMARY_UNIT] = [];
                    }
                    $errs[self::FIELD_CUSTOMARY_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT])) {
            $v = $this->getUnit();
            foreach($validationRules[self::FIELD_UNIT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT])) {
                        $errs[self::FIELD_UNIT] = [];
                    }
                    $errs[self::FIELD_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONVERSION_FACTOR])) {
            $v = $this->getConversionFactor();
            foreach($validationRules[self::FIELD_CONVERSION_FACTOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONVERSION_FACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONVERSION_FACTOR])) {
                        $errs[self::FIELD_CONVERSION_FACTOR] = [];
                    }
                    $errs[self::FIELD_CONVERSION_FACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECIMAL_PRECISION])) {
            $v = $this->getDecimalPrecision();
            foreach($validationRules[self::FIELD_DECIMAL_PRECISION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DECIMAL_PRECISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECIMAL_PRECISION])) {
                        $errs[self::FIELD_DECIMAL_PRECISION] = [];
                    }
                    $errs[self::FIELD_DECIMAL_PRECISION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinitionQuantitativeDetails)) {
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
            } else if (self::FIELD_CUSTOMARY_UNIT === $cen) {
                $type->setCustomaryUnit(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UNIT === $cen) {
                $type->setUnit(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONVERSION_FACTOR === $cen) {
                $type->setConversionFactor(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECIMAL_PRECISION === $cen) {
                $type->setDecimalPrecision(FHIRInteger::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CONVERSION_FACTOR])) {
            if (isset($type->conversionFactor)) {
                $type->conversionFactor->setValue((string)$attributes[self::FIELD_CONVERSION_FACTOR]);
                $type->_setConversionFactorValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setConversionFactor((string)$attributes[self::FIELD_CONVERSION_FACTOR], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DECIMAL_PRECISION])) {
            if (isset($type->decimalPrecision)) {
                $type->decimalPrecision->setValue((string)$attributes[self::FIELD_DECIMAL_PRECISION]);
                $type->_setDecimalPrecisionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDecimalPrecision((string)$attributes[self::FIELD_DECIMAL_PRECISION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->conversionFactor) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONVERSION_FACTOR]) {
            $xw->writeAttribute(self::FIELD_CONVERSION_FACTOR, $this->conversionFactor->_getFormattedValue());
        }
        if (isset($this->decimalPrecision) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DECIMAL_PRECISION]) {
            $xw->writeAttribute(self::FIELD_DECIMAL_PRECISION, $this->decimalPrecision->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->customaryUnit)) {
            $xw->startElement(self::FIELD_CUSTOMARY_UNIT);
            $this->customaryUnit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->unit)) {
            $xw->startElement(self::FIELD_UNIT);
            $this->unit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->conversionFactor)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONVERSION_FACTOR]
                || $this->conversionFactor->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONVERSION_FACTOR);
            $this->conversionFactor->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONVERSION_FACTOR]);
            $xw->endElement();
        }
        if (isset($this->decimalPrecision)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DECIMAL_PRECISION]
                || $this->decimalPrecision->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DECIMAL_PRECISION);
            $this->decimalPrecision->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DECIMAL_PRECISION]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationDefinitionQuantitativeDetails)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CUSTOMARY_UNIT]) || array_key_exists(self::FIELD_CUSTOMARY_UNIT, $json)) {
            $type->setCustomaryUnit(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CUSTOMARY_UNIT], $config));
        }
        if (isset($json[self::FIELD_UNIT]) || array_key_exists(self::FIELD_UNIT, $json)) {
            $type->setUnit(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_UNIT], $config));
        }
        if (isset($json[self::FIELD_CONVERSION_FACTOR])
            || isset($json[self::FIELD_CONVERSION_FACTOR_EXT])
            || array_key_exists(self::FIELD_CONVERSION_FACTOR, $json)
            || array_key_exists(self::FIELD_CONVERSION_FACTOR_EXT, $json)) {
            $value = $json[self::FIELD_CONVERSION_FACTOR] ?? null;
            $type->setConversionFactor(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_CONVERSION_FACTOR_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DECIMAL_PRECISION])
            || isset($json[self::FIELD_DECIMAL_PRECISION_EXT])
            || array_key_exists(self::FIELD_DECIMAL_PRECISION, $json)
            || array_key_exists(self::FIELD_DECIMAL_PRECISION_EXT, $json)) {
            $value = $json[self::FIELD_DECIMAL_PRECISION] ?? null;
            $type->setDecimalPrecision(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_DECIMAL_PRECISION_EXT] ?? []),
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
        if (isset($this->customaryUnit)) {
            $out->customaryUnit = $this->customaryUnit;
        }
        if (isset($this->unit)) {
            $out->unit = $this->unit;
        }
        if (isset($this->conversionFactor)) {
            if (null !== ($val = $this->conversionFactor->getValue())) {
                $out->conversionFactor = $val;
            }
            $ext = $this->conversionFactor->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_conversionFactor = $ext;
            }
        }
        if (isset($this->decimalPrecision)) {
            if (null !== ($val = $this->decimalPrecision->getValue())) {
                $out->decimalPrecision = $val;
            }
            $ext = $this->decimalPrecision->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_decimalPrecision = $ext;
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