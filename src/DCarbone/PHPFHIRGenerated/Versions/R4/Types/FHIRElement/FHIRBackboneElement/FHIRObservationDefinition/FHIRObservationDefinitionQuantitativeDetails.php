<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

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
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 */
class FHIRObservationDefinitionQuantitativeDetails extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS;


    public const FIELD_CUSTOMARY_UNIT = 'customaryUnit';
    public const FIELD_UNIT = 'unit';
    public const FIELD_CONVERSION_FACTOR = 'conversionFactor';
    public const FIELD_CONVERSION_FACTOR_EXT = '_conversionFactor';
    public const FIELD_DECIMAL_PRECISION = 'decimalPrecision';
    public const FIELD_DECIMAL_PRECISION_EXT = '_decimalPrecision';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Customary unit used to report quantitative results of observations conforming to
     * this ObservationDefinition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $decimalPrecision;

    /** Default validation map for fields in type ObservationDefinition.QuantitativeDetails */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRObservationDefinitionQuantitativeDetails Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $customaryUnit
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $unit
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal $conversionFactor
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $decimalPrecision
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
     * Customary unit used to report quantitative results of observations conforming to
     * this ObservationDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $customaryUnit
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $unit
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDecimal $conversionFactor
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setConversionFactor(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $conversionFactor,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $conversionFactor) {
            unset($this->conversionFactor);
            return $this;
        }
        if (!($conversionFactor instanceof FHIRDecimal)) {
            $conversionFactor = new FHIRDecimal(value: $conversionFactor);
        }
        if (null !== $valueXMLLocation) {
            $conversionFactor->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $conversionFactor->_getValueXMLLocation()) {
            $conversionFactor->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->conversionFactor = $conversionFactor;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $decimalPrecision
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDecimalPrecision(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $decimalPrecision,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $decimalPrecision) {
            unset($this->decimalPrecision);
            return $this;
        }
        if (!($decimalPrecision instanceof FHIRInteger)) {
            $decimalPrecision = new FHIRInteger(value: $decimalPrecision);
        }
        if (null !== $valueXMLLocation) {
            $decimalPrecision->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $decimalPrecision->_getValueXMLLocation()) {
            $decimalPrecision->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->decimalPrecision = $decimalPrecision;
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

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
            } else if (self::FIELD_CUSTOMARY_UNIT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCustomaryUnit(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_UNIT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setUnit(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONVERSION_FACTOR === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setConversionFactor(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DECIMAL_PRECISION === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDecimalPrecision(FHIRInteger::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_CONVERSION_FACTOR])) {
            $pt = $type->getConversionFactor();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CONVERSION_FACTOR]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setConversionFactor(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_CONVERSION_FACTOR],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DECIMAL_PRECISION])) {
            $pt = $type->getDecimalPrecision();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DECIMAL_PRECISION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDecimalPrecision(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_DECIMAL_PRECISION],
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
            $xw->openRootNode('ObservationDefinitionQuantitativeDetails', $this->_getSourceXMLNS());
        }
        if (isset($this->conversionFactor) && $this->conversionFactor->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CONVERSION_FACTOR, $this->conversionFactor->getValue()?->_getFormattedValue());
        }
        if (isset($this->decimalPrecision) && $this->decimalPrecision->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DECIMAL_PRECISION, $this->decimalPrecision->getValue()?->_getFormattedValue());
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
        if (isset($this->conversionFactor) && $this->conversionFactor->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CONVERSION_FACTOR);
            $this->conversionFactor->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->decimalPrecision) && $this->decimalPrecision->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DECIMAL_PRECISION);
            $this->decimalPrecision->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_CUSTOMARY_UNIT]) || array_key_exists(self::FIELD_CUSTOMARY_UNIT, $json)) {
            if ($json[self::FIELD_CUSTOMARY_UNIT] instanceof FHIRCodeableConcept) {
                $type->setCustomaryUnit($json[self::FIELD_CUSTOMARY_UNIT]);
            } else {
                $type->setCustomaryUnit(new FHIRCodeableConcept($json[self::FIELD_CUSTOMARY_UNIT]));
            }
        }
        if (isset($json[self::FIELD_UNIT]) || array_key_exists(self::FIELD_UNIT, $json)) {
            if ($json[self::FIELD_UNIT] instanceof FHIRCodeableConcept) {
                $type->setUnit($json[self::FIELD_UNIT]);
            } else {
                $type->setUnit(new FHIRCodeableConcept($json[self::FIELD_UNIT]));
            }
        }
        if (isset($json[self::FIELD_CONVERSION_FACTOR]) || isset($json[self::FIELD_CONVERSION_FACTOR_EXT]) || array_key_exists(self::FIELD_CONVERSION_FACTOR, $json) || array_key_exists(self::FIELD_CONVERSION_FACTOR_EXT, $json)) {
            $value = $json[self::FIELD_CONVERSION_FACTOR] ?? null;
            $ext = (isset($json[self::FIELD_CONVERSION_FACTOR_EXT]) && is_array($json[self::FIELD_CONVERSION_FACTOR_EXT])) ? $json[self::FIELD_CONVERSION_FACTOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setConversionFactor($value);
                } else if (is_array($value)) {
                    $type->setConversionFactor(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setConversionFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setConversionFactor(new FHIRDecimal($ext));
            } else {
                $type->setConversionFactor(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_DECIMAL_PRECISION]) || isset($json[self::FIELD_DECIMAL_PRECISION_EXT]) || array_key_exists(self::FIELD_DECIMAL_PRECISION, $json) || array_key_exists(self::FIELD_DECIMAL_PRECISION_EXT, $json)) {
            $value = $json[self::FIELD_DECIMAL_PRECISION] ?? null;
            $ext = (isset($json[self::FIELD_DECIMAL_PRECISION_EXT]) && is_array($json[self::FIELD_DECIMAL_PRECISION_EXT])) ? $json[self::FIELD_DECIMAL_PRECISION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setDecimalPrecision($value);
                } else if (is_array($value)) {
                    $type->setDecimalPrecision(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setDecimalPrecision(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDecimalPrecision(new FHIRInteger($ext));
            } else {
                $type->setDecimalPrecision(new FHIRInteger(null));
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

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}