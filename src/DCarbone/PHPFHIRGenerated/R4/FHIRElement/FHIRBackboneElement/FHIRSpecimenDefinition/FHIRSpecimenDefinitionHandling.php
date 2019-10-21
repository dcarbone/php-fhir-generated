<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A kind of specimen with associated set of requirements.
 *
 * Class FHIRSpecimenDefinitionHandling
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition
 */
class FHIRSpecimenDefinitionHandling extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_HANDLING;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_INSTRUCTION = 'instruction';
    const FIELD_INSTRUCTION_EXT = '_instruction';
    const FIELD_MAX_DURATION = 'maxDuration';
    const FIELD_TEMPERATURE_QUALIFIER = 'temperatureQualifier';
    const FIELD_TEMPERATURE_RANGE = 'temperatureRange';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional textual instructions for the preservation or transport of the
     * specimen. For instance, 'Protect from light exposure'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $instruction = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $maxDuration = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * It qualifies the interval of temperature, which characterizes an occurrence of
     * handling. Conditions that are not related to temperature may be handled in the
     * instruction element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $temperatureQualifier = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The temperature interval for this set of handling instructions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    private $temperatureRange = null;

    /**
     * FHIRSpecimenDefinitionHandling Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinitionHandling::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_INSTRUCTION])) {
            $ext = (isset($data[self::FIELD_INSTRUCTION_EXT]) && is_array($data[self::FIELD_INSTRUCTION_EXT]))
                ? $data[self::FIELD_INSTRUCTION_EXT]
                : null;
            if ($data[self::FIELD_INSTRUCTION] instanceof FHIRString) {
                $this->setInstruction($data[self::FIELD_INSTRUCTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_INSTRUCTION])) {
                $this->setInstruction(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_INSTRUCTION]] + $ext));
            } else {
                $this->setInstruction(new FHIRString($data[self::FIELD_INSTRUCTION]));
            }
        }
        if (isset($data[self::FIELD_MAX_DURATION])) {
            if ($data[self::FIELD_MAX_DURATION] instanceof FHIRDuration) {
                $this->setMaxDuration($data[self::FIELD_MAX_DURATION]);
            } else {
                $this->setMaxDuration(new FHIRDuration($data[self::FIELD_MAX_DURATION]));
            }
        }
        if (isset($data[self::FIELD_TEMPERATURE_QUALIFIER])) {
            if ($data[self::FIELD_TEMPERATURE_QUALIFIER] instanceof FHIRCodeableConcept) {
                $this->setTemperatureQualifier($data[self::FIELD_TEMPERATURE_QUALIFIER]);
            } else {
                $this->setTemperatureQualifier(new FHIRCodeableConcept($data[self::FIELD_TEMPERATURE_QUALIFIER]));
            }
        }
        if (isset($data[self::FIELD_TEMPERATURE_RANGE])) {
            if ($data[self::FIELD_TEMPERATURE_RANGE] instanceof FHIRRange) {
                $this->setTemperatureRange($data[self::FIELD_TEMPERATURE_RANGE]);
            } else {
                $this->setTemperatureRange(new FHIRRange($data[self::FIELD_TEMPERATURE_RANGE]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
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
        return "<SpecimenDefinitionHandling{$xmlns}></SpecimenDefinitionHandling>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional textual instructions for the preservation or transport of the
     * specimen. For instance, 'Protect from light exposure'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Additional textual instructions for the preservation or transport of the
     * specimen. For instance, 'Protect from light exposure'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $instruction
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
     */
    public function setInstruction($instruction = null)
    {
        if (null === $instruction) {
            $this->instruction = null;
            return $this;
        }
        if ($instruction instanceof FHIRString) {
            $this->instruction = $instruction;
            return $this;
        }
        $this->instruction = new FHIRString($instruction);
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getMaxDuration()
    {
        return $this->maxDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $maxDuration
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
     */
    public function setMaxDuration(FHIRDuration $maxDuration = null)
    {
        $this->maxDuration = $maxDuration;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * It qualifies the interval of temperature, which characterizes an occurrence of
     * handling. Conditions that are not related to temperature may be handled in the
     * instruction element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getTemperatureQualifier()
    {
        return $this->temperatureQualifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * It qualifies the interval of temperature, which characterizes an occurrence of
     * handling. Conditions that are not related to temperature may be handled in the
     * instruction element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $temperatureQualifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
     */
    public function setTemperatureQualifier(FHIRCodeableConcept $temperatureQualifier = null)
    {
        $this->temperatureQualifier = $temperatureQualifier;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The temperature interval for this set of handling instructions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getTemperatureRange()
    {
        return $this->temperatureRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The temperature interval for this set of handling instructions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $temperatureRange
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
     */
    public function setTemperatureRange(FHIRRange $temperatureRange = null)
    {
        $this->temperatureRange = $temperatureRange;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
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
                throw new \DomainException(sprintf('FHIRSpecimenDefinitionHandling::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSpecimenDefinitionHandling::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSpecimenDefinitionHandling;
        } elseif (!is_object($type) || !($type instanceof FHIRSpecimenDefinitionHandling)) {
            throw new \RuntimeException(sprintf(
                'FHIRSpecimenDefinitionHandling::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling or null, %s seen.',
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
        if (isset($attributes->instruction)) {
            $type->setInstruction((string)$attributes->instruction);
        }
        if (isset($children->instruction)) {
            $type->setInstruction(FHIRString::xmlUnserialize($children->instruction));
        }
        if (isset($children->maxDuration)) {
            $type->setMaxDuration(FHIRDuration::xmlUnserialize($children->maxDuration));
        }
        if (isset($children->temperatureQualifier)) {
            $type->setTemperatureQualifier(FHIRCodeableConcept::xmlUnserialize($children->temperatureQualifier));
        }
        if (isset($children->temperatureRange)) {
            $type->setTemperatureRange(FHIRRange::xmlUnserialize($children->temperatureRange));
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
        if (null !== ($v = $this->getInstruction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INSTRUCTION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getMaxDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_DURATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getTemperatureQualifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEMPERATURE_QUALIFIER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getTemperatureRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEMPERATURE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getInstruction())) {
            $a[self::FIELD_INSTRUCTION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_INSTRUCTION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getMaxDuration())) {
            $a[self::FIELD_MAX_DURATION] = $v;
        }
        if (null !== ($v = $this->getTemperatureQualifier())) {
            $a[self::FIELD_TEMPERATURE_QUALIFIER] = $v;
        }
        if (null !== ($v = $this->getTemperatureRange())) {
            $a[self::FIELD_TEMPERATURE_RANGE] = $v;
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