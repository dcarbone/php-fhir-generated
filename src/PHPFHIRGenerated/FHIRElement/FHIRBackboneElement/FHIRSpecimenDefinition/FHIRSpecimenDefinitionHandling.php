<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A kind of specimen with associated set of requirements.
 *
 * Class FHIRSpecimenDefinitionHandling
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition
 */
class FHIRSpecimenDefinitionHandling extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SpecimenDefinition.Handling';

    /**
     * Additional textual instructions for the preservation or transport of the specimen. For instance, 'Protect from light exposure'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $instruction = null;

    /**
     * The maximum time interval of preservation of the specimen with these conditions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $maxDuration = null;

    /**
     * It qualifies the interval of temperature, which characterizes an occurrence of handling. Conditions that are not related to temperature may be handled in the instruction element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $temperatureQualifier = null;

    /**
     * The temperature interval for this set of handling instructions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $temperatureRange = null;

    /**
     * FHIRSpecimenDefinitionHandling Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['instruction'])) {
                $this->setInstruction($data['instruction']);
            }
            if (isset($data['maxDuration'])) {
                $this->setMaxDuration($data['maxDuration']);
            }
            if (isset($data['temperatureQualifier'])) {
                $this->setTemperatureQualifier($data['temperatureQualifier']);
            }
            if (isset($data['temperatureRange'])) {
                $this->setTemperatureRange($data['temperatureRange']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Additional textual instructions for the preservation or transport of the specimen. For instance, 'Protect from light exposure'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setInstruction($instruction)
    {
        if (null === $instruction) {
            return $this; 
        }
        if (is_scalar($instruction)) {
            $instruction = new FHIRString($instruction);
        }
        if (!($instruction instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinitionHandling::setInstruction - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($instruction)
            ));
        }
        $this->instruction = $instruction;
        return $this;
    }

    /**
     * Additional textual instructions for the preservation or transport of the specimen. For instance, 'Protect from light exposure'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getInstruction()
    {
        return $this->instruction;
    }


    /**
     * The maximum time interval of preservation of the specimen with these conditions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setMaxDuration(FHIRDuration $maxDuration = null)
    {
        if (null === $maxDuration) {
            return $this; 
        }
        $this->maxDuration = $maxDuration;
        return $this;
    }

    /**
     * The maximum time interval of preservation of the specimen with these conditions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getMaxDuration()
    {
        return $this->maxDuration;
    }


    /**
     * It qualifies the interval of temperature, which characterizes an occurrence of handling. Conditions that are not related to temperature may be handled in the instruction element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setTemperatureQualifier(FHIRCodeableConcept $temperatureQualifier = null)
    {
        if (null === $temperatureQualifier) {
            return $this; 
        }
        $this->temperatureQualifier = $temperatureQualifier;
        return $this;
    }

    /**
     * It qualifies the interval of temperature, which characterizes an occurrence of handling. Conditions that are not related to temperature may be handled in the instruction element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTemperatureQualifier()
    {
        return $this->temperatureQualifier;
    }


    /**
     * The temperature interval for this set of handling instructions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setTemperatureRange(FHIRRange $temperatureRange = null)
    {
        if (null === $temperatureRange) {
            return $this; 
        }
        $this->temperatureRange = $temperatureRange;
        return $this;
    }

    /**
     * The temperature interval for this set of handling instructions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getTemperatureRange()
    {
        return $this->temperatureRange;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getInstruction())) {
            $a['instruction'] = $v;
        }
        if (null !== ($v = $this->getMaxDuration())) {
            $a['maxDuration'] = $v;
        }
        if (null !== ($v = $this->getTemperatureQualifier())) {
            $a['temperatureQualifier'] = $v;
        }
        if (null !== ($v = $this->getTemperatureRange())) {
            $a['temperatureRange'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SpecimenDefinitionHandling xmlns="http://hl7.org/fhir"></SpecimenDefinitionHandling>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}