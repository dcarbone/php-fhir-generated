<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Set of definitional characteristics for a kind of observation or measurement
 * produced or consumed by an orderable health care service.
 *
 * Class FHIRObservationDefinitionQuantitativeDetails
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition
 */
class FHIRObservationDefinitionQuantitativeDetails extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS;
    const FIELD_CONVERSION_FACTOR = 'conversionFactor';
    const FIELD_CONVERSION_FACTOR_EXT = '_conversionFactor';
    const FIELD_CUSTOMARY_UNIT = 'customaryUnit';
    const FIELD_DECIMAL_PRECISION = 'decimalPrecision';
    const FIELD_DECIMAL_PRECISION_EXT = '_decimalPrecision';
    const FIELD_UNIT = 'unit';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Factor for converting value expressed with SI unit to value expressed with
     * customary unit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $conversionFactor = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Customary unit used to report quantitative results of observations conforming to
     * this ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $customaryUnit = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of digits after decimal separator when the results of such observations
     * are of type Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $decimalPrecision = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * SI unit used to report quantitative results of observations conforming to this
     * ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $unit = null;

    /**
     * Validation map for fields in type ObservationDefinition.QuantitativeDetails
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRObservationDefinitionQuantitativeDetails Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinitionQuantitativeDetails::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONVERSION_FACTOR]) || isset($data[self::FIELD_CONVERSION_FACTOR_EXT])) {
            if (isset($data[self::FIELD_CONVERSION_FACTOR])) {
                $value = $data[self::FIELD_CONVERSION_FACTOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONVERSION_FACTOR_EXT]) && is_array($data[self::FIELD_CONVERSION_FACTOR_EXT])) {
                $ext = $data[self::FIELD_CONVERSION_FACTOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setConversionFactor($value);
                } else if (is_array($value)) {
                    $this->setConversionFactor(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setConversionFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setConversionFactor(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_CUSTOMARY_UNIT])) {
            if ($data[self::FIELD_CUSTOMARY_UNIT] instanceof FHIRCodeableConcept) {
                $this->setCustomaryUnit($data[self::FIELD_CUSTOMARY_UNIT]);
            } else {
                $this->setCustomaryUnit(new FHIRCodeableConcept($data[self::FIELD_CUSTOMARY_UNIT]));
            }
        }
        if (isset($data[self::FIELD_DECIMAL_PRECISION]) || isset($data[self::FIELD_DECIMAL_PRECISION_EXT])) {
            if (isset($data[self::FIELD_DECIMAL_PRECISION])) {
                $value = $data[self::FIELD_DECIMAL_PRECISION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DECIMAL_PRECISION_EXT]) && is_array($data[self::FIELD_DECIMAL_PRECISION_EXT])) {
                $ext = $data[self::FIELD_DECIMAL_PRECISION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDecimalPrecision($value);
                } else if (is_array($value)) {
                    $this->setDecimalPrecision(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDecimalPrecision(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDecimalPrecision(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_UNIT])) {
            if ($data[self::FIELD_UNIT] instanceof FHIRCodeableConcept) {
                $this->setUnit($data[self::FIELD_UNIT]);
            } else {
                $this->setUnit(new FHIRCodeableConcept($data[self::FIELD_UNIT]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ObservationDefinitionQuantitativeDetails{$xmlns}></ObservationDefinitionQuantitativeDetails>";
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getConversionFactor()
    {
        return $this->conversionFactor;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $conversionFactor
     * @return static
     */
    public function setConversionFactor($conversionFactor = null)
    {
        if (null === $conversionFactor) {
            $this->conversionFactor = null;
            return $this;
        }
        if ($conversionFactor instanceof FHIRDecimal) {
            $this->conversionFactor = $conversionFactor;
            return $this;
        }
        $this->conversionFactor = new FHIRDecimal($conversionFactor);
        return $this;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCustomaryUnit()
    {
        return $this->customaryUnit;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $customaryUnit
     * @return static
     */
    public function setCustomaryUnit(FHIRCodeableConcept $customaryUnit = null)
    {
        $this->customaryUnit = $customaryUnit;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getDecimalPrecision()
    {
        return $this->decimalPrecision;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of digits after decimal separator when the results of such observations
     * are of type Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $decimalPrecision
     * @return static
     */
    public function setDecimalPrecision($decimalPrecision = null)
    {
        if (null === $decimalPrecision) {
            $this->decimalPrecision = null;
            return $this;
        }
        if ($decimalPrecision instanceof FHIRInteger) {
            $this->decimalPrecision = $decimalPrecision;
            return $this;
        }
        $this->decimalPrecision = new FHIRInteger($decimalPrecision);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getUnit()
    {
        return $this->unit;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $unit
     * @return static
     */
    public function setUnit(FHIRCodeableConcept $unit = null)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getConversionFactor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONVERSION_FACTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCustomaryUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CUSTOMARY_UNIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDecimalPrecision())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DECIMAL_PRECISION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONVERSION_FACTOR])) {
            $v = $this->getConversionFactor();
            foreach($validationRules[self::FIELD_CONVERSION_FACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS, self::FIELD_CONVERSION_FACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONVERSION_FACTOR])) {
                        $errs[self::FIELD_CONVERSION_FACTOR] = [];
                    }
                    $errs[self::FIELD_CONVERSION_FACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CUSTOMARY_UNIT])) {
            $v = $this->getCustomaryUnit();
            foreach($validationRules[self::FIELD_CUSTOMARY_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS, self::FIELD_CUSTOMARY_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CUSTOMARY_UNIT])) {
                        $errs[self::FIELD_CUSTOMARY_UNIT] = [];
                    }
                    $errs[self::FIELD_CUSTOMARY_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECIMAL_PRECISION])) {
            $v = $this->getDecimalPrecision();
            foreach($validationRules[self::FIELD_DECIMAL_PRECISION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS, self::FIELD_DECIMAL_PRECISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECIMAL_PRECISION])) {
                        $errs[self::FIELD_DECIMAL_PRECISION] = [];
                    }
                    $errs[self::FIELD_DECIMAL_PRECISION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT])) {
            $v = $this->getUnit();
            foreach($validationRules[self::FIELD_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS, self::FIELD_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT])) {
                        $errs[self::FIELD_UNIT] = [];
                    }
                    $errs[self::FIELD_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRObservationDefinitionQuantitativeDetails::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRObservationDefinitionQuantitativeDetails::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRObservationDefinitionQuantitativeDetails;
        } elseif (!is_object($type) || !($type instanceof FHIRObservationDefinitionQuantitativeDetails)) {
            throw new \RuntimeException(sprintf(
                'FHIRObservationDefinitionQuantitativeDetails::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->conversionFactor)) {
            $type->setConversionFactor(FHIRDecimal::xmlUnserialize($children->conversionFactor));
        }
        if (isset($attributes->conversionFactor)) {
            $pt = $type->getConversionFactor();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->conversionFactor);
            } else {
                $type->setConversionFactor((string)$attributes->conversionFactor);
            }
        }
        if (isset($children->customaryUnit)) {
            $type->setCustomaryUnit(FHIRCodeableConcept::xmlUnserialize($children->customaryUnit));
        }
        if (isset($children->decimalPrecision)) {
            $type->setDecimalPrecision(FHIRInteger::xmlUnserialize($children->decimalPrecision));
        }
        if (isset($attributes->decimalPrecision)) {
            $pt = $type->getDecimalPrecision();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->decimalPrecision);
            } else {
                $type->setDecimalPrecision((string)$attributes->decimalPrecision);
            }
        }
        if (isset($children->unit)) {
            $type->setUnit(FHIRCodeableConcept::xmlUnserialize($children->unit));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getConversionFactor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONVERSION_FACTOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCustomaryUnit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CUSTOMARY_UNIT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDecimalPrecision())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DECIMAL_PRECISION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUnit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNIT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getConversionFactor())) {
            $a[self::FIELD_CONVERSION_FACTOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_CONVERSION_FACTOR_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCustomaryUnit())) {
            $a[self::FIELD_CUSTOMARY_UNIT] = $v;
        }
        if (null !== ($v = $this->getDecimalPrecision())) {
            $a[self::FIELD_DECIMAL_PRECISION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_DECIMAL_PRECISION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUnit())) {
            $a[self::FIELD_UNIT] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}