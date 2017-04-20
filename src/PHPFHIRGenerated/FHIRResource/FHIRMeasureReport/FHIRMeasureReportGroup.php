<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMeasureReport;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * The MeasureReport resource contains the results of evaluating a measure.
 */
class FHIRMeasureReportGroup extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The identifier of the population group as defined in the measure definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The populations that make up the population group, one for each type of population appropriate for the measure.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMeasureReport\FHIRMeasureReportPopulation[]
     */
    public $population = array();

    /**
     * The measure score for this population group, calculated as appropriate for the measure type and scoring method, and based on the contents of the populations defined in the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $measureScore = null;

    /**
     * When a measure includes multiple stratifiers, there will be a stratifier group for each stratifier defined by the measure.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMeasureReport\FHIRMeasureReportStratifier[]
     */
    public $stratifier = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MeasureReport.Group';

    /**
     * The identifier of the population group as defined in the measure definition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The identifier of the population group as defined in the measure definition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The populations that make up the population group, one for each type of population appropriate for the measure.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMeasureReport\FHIRMeasureReportPopulation[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * The populations that make up the population group, one for each type of population appropriate for the measure.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMeasureReport\FHIRMeasureReportPopulation $population
     * @return $this
     */
    public function addPopulation($population)
    {
        $this->population[] = $population;
        return $this;
    }

    /**
     * The measure score for this population group, calculated as appropriate for the measure type and scoring method, and based on the contents of the populations defined in the group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getMeasureScore()
    {
        return $this->measureScore;
    }

    /**
     * The measure score for this population group, calculated as appropriate for the measure type and scoring method, and based on the contents of the populations defined in the group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $measureScore
     * @return $this
     */
    public function setMeasureScore($measureScore)
    {
        $this->measureScore = $measureScore;
        return $this;
    }

    /**
     * When a measure includes multiple stratifiers, there will be a stratifier group for each stratifier defined by the measure.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMeasureReport\FHIRMeasureReportStratifier[]
     */
    public function getStratifier()
    {
        return $this->stratifier;
    }

    /**
     * When a measure includes multiple stratifiers, there will be a stratifier group for each stratifier defined by the measure.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMeasureReport\FHIRMeasureReportStratifier $stratifier
     * @return $this
     */
    public function addStratifier($stratifier)
    {
        $this->stratifier[] = $stratifier;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (0 < count($this->population)) {
            $json['population'] = [];
            foreach($this->population as $population) {
                $json['population'][] = json_encode($population);
            }
        }
        if (null !== $this->measureScore) $json['measureScore'] = json_encode($this->measureScore);
        if (0 < count($this->stratifier)) {
            $json['stratifier'] = [];
            foreach($this->stratifier as $stratifier) {
                $json['stratifier'][] = json_encode($stratifier);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MeasureReportGroup xmlns="http://hl7.org/fhir"></MeasureReportGroup>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (0 < count($this->population)) {
            foreach($this->population as $population) {
                $population->xmlSerialize(true, $sxe->addChild('population'));
            }
        }
        if (null !== $this->measureScore) $this->measureScore->xmlSerialize(true, $sxe->addChild('measureScore'));
        if (0 < count($this->stratifier)) {
            foreach($this->stratifier as $stratifier) {
                $stratifier->xmlSerialize(true, $sxe->addChild('stratifier'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}