<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport;

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
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;

/**
 * The MeasureReport resource contains the results of the calculation of a measure; and optionally a reference to the resources involved in that calculation.
 *
 * Class FHIRMeasureReportStratum
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport
 */
class FHIRMeasureReportStratum extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MeasureReport.Stratum';

    /**
     * The measure score for this stratum, calculated as appropriate for the measure type and scoring method, and based on only the members of this stratum.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $measureScore = null;

    /**
     * The populations that make up the stratum, one for each type of population appropriate to the measure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1
     */
    public $population = null;

    /**
     * The value for this stratum, expressed as a CodeableConcept. When defining stratifiers on complex values, the value must be rendered such that the value for each stratum within the stratifier is unique.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $value = null;

    /**
     * FHIRMeasureReportStratum Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['measureScore'])) {
                $this->setMeasureScore($data['measureScore']);
            }
            if (isset($data['population'])) {
                $this->setPopulation($data['population']);
            }
            if (isset($data['value'])) {
                $this->setValue($data['value']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The measure score for this stratum, calculated as appropriate for the measure type and scoring method, and based on only the members of this stratum.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setMeasureScore(FHIRQuantity $measureScore = null)
    {
        if (null === $measureScore) {
            return $this; 
        }
        $this->measureScore = $measureScore;
        return $this;
    }

    /**
     * The measure score for this stratum, calculated as appropriate for the measure type and scoring method, and based on only the members of this stratum.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMeasureScore()
    {
        return $this->measureScore;
    }


    /**
     * The populations that make up the stratum, one for each type of population appropriate to the measure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1
     * @return $this
     */
    public function setPopulation(FHIRMeasureReportPopulation1 $population = null)
    {
        if (null === $population) {
            return $this; 
        }
        $this->population = $population;
        return $this;
    }

    /**
     * The populations that make up the stratum, one for each type of population appropriate to the measure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1
     */
    public function getPopulation()
    {
        return $this->population;
    }


    /**
     * The value for this stratum, expressed as a CodeableConcept. When defining stratifiers on complex values, the value must be rendered such that the value for each stratum within the stratifier is unique.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setValue(FHIRCodeableConcept $value = null)
    {
        if (null === $value) {
            return $this; 
        }
        $this->value = $value;
        return $this;
    }

    /**
     * The value for this stratum, expressed as a CodeableConcept. When defining stratifiers on complex values, the value must be rendered such that the value for each stratum within the stratifier is unique.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValue()
    {
        return $this->value;
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
        if (null !== ($v = $this->getMeasureScore())) {
            $a['measureScore'] = $v;
        }
        if (null !== ($v = $this->getPopulation())) {
            $a['population'] = $v;
        }
        if (null !== ($v = $this->getValue())) {
            $a['value'] = $v;
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
            $sxe = new \SimpleXMLElement('<MeasureReportStratum xmlns="http://hl7.org/fhir"></MeasureReportStratum>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}