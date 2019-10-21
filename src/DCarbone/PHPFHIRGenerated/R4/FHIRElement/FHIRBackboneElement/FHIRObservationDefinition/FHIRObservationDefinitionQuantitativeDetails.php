<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CONVERSION_FACTOR = 'conversionFactor';
    const FIELD_CONVERSION_FACTOR_EXT = '_conversionFactor';
    const FIELD_CUSTOMARY_UNIT = 'customaryUnit';
    const FIELD_DECIMAL_PRECISION = 'decimalPrecision';
    const FIELD_DECIMAL_PRECISION_EXT = '_decimalPrecision';
    const FIELD_UNIT = 'unit';

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Factor for converting value expressed with SI unit to value expressed with
     * customary unit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $conversionFactor = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Customary unit used to report quantitative results of observations conforming to
     * this ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $customaryUnit = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Number of digits after decimal separator when the results of such observations
     * are of type Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $decimalPrecision = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * SI unit used to report quantitative results of observations conforming to this
     * ObservationDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $unit = null;

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
        if (isset($data[self::FIELD_CONVERSION_FACTOR])) {
            $ext = (isset($data[self::FIELD_CONVERSION_FACTOR_EXT]) && is_array($data[self::FIELD_CONVERSION_FACTOR_EXT]))
                ? $data[self::FIELD_CONVERSION_FACTOR_EXT]
                : null;
            if ($data[self::FIELD_CONVERSION_FACTOR] instanceof FHIRDecimal) {
                $this->setConversionFactor($data[self::FIELD_CONVERSION_FACTOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONVERSION_FACTOR])) {
                $this->setConversionFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_CONVERSION_FACTOR]] + $ext));
            } else {
                $this->setConversionFactor(new FHIRDecimal($data[self::FIELD_CONVERSION_FACTOR]));
            }
        }
        if (isset($data[self::FIELD_CUSTOMARY_UNIT])) {
            if ($data[self::FIELD_CUSTOMARY_UNIT] instanceof FHIRCodeableConcept) {
                $this->setCustomaryUnit($data[self::FIELD_CUSTOMARY_UNIT]);
            } else {
                $this->setCustomaryUnit(new FHIRCodeableConcept($data[self::FIELD_CUSTOMARY_UNIT]));
            }
        }
        if (isset($data[self::FIELD_DECIMAL_PRECISION])) {
            $ext = (isset($data[self::FIELD_DECIMAL_PRECISION_EXT]) && is_array($data[self::FIELD_DECIMAL_PRECISION_EXT]))
                ? $data[self::FIELD_DECIMAL_PRECISION_EXT]
                : null;
            if ($data[self::FIELD_DECIMAL_PRECISION] instanceof FHIRInteger) {
                $this->setDecimalPrecision($data[self::FIELD_DECIMAL_PRECISION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DECIMAL_PRECISION])) {
                $this->setDecimalPrecision(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_DECIMAL_PRECISION]] + $ext));
            } else {
                $this->setDecimalPrecision(new FHIRInteger($data[self::FIELD_DECIMAL_PRECISION]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Factor for converting value expressed with SI unit to value expressed with
     * customary unit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $conversionFactor
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Customary unit used to report quantitative results of observations conforming to
     * this ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $customaryUnit
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     */
    public function setCustomaryUnit(FHIRCodeableConcept $customaryUnit = null)
    {
        $this->customaryUnit = $customaryUnit;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Number of digits after decimal separator when the results of such observations
     * are of type Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $decimalPrecision
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * SI unit used to report quantitative results of observations conforming to this
     * ObservationDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $unit
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     */
    public function setUnit(FHIRCodeableConcept $unit = null)
    {
        $this->unit = $unit;
        return $this;
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
        if (isset($attributes->conversionFactor)) {
            $type->setConversionFactor((string)$attributes->conversionFactor);
        }
        if (isset($children->conversionFactor)) {
            $type->setConversionFactor(FHIRDecimal::xmlUnserialize($children->conversionFactor));
        }
        if (isset($children->customaryUnit)) {
            $type->setCustomaryUnit(FHIRCodeableConcept::xmlUnserialize($children->customaryUnit));
        }
        if (isset($attributes->decimalPrecision)) {
            $type->setDecimalPrecision((string)$attributes->decimalPrecision);
        }
        if (isset($children->decimalPrecision)) {
            $type->setDecimalPrecision(FHIRInteger::xmlUnserialize($children->decimalPrecision));
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
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_CONVERSION_FACTOR_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getCustomaryUnit())) {
            $a[self::FIELD_CUSTOMARY_UNIT] = $v;
        }
        if (null !== ($v = $this->getDecimalPrecision())) {
            $a[self::FIELD_DECIMAL_PRECISION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DECIMAL_PRECISION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getUnit())) {
            $a[self::FIELD_UNIT] = $v;
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