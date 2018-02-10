<?php namespace PHPFHIRGenerated\FHIRResource\FHIRCondition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Use to record detailed information about conditions, problems or diagnoses recognized by a clinician. There are many uses including: recording a diagnosis during an encounter; populating a problem list or a summary statement, such as a discharge summary.
 */
class FHIRConditionStage extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A simple summary of the stage such as "Stage 3". The determination of the stage is disease-specific.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $summary = null;

    /**
     * Reference to a formal record of the evidence on which the staging assessment is based.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $assessment = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Condition.Stage';

    /**
     * A simple summary of the stage such as "Stage 3". The determination of the stage is disease-specific.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * A simple summary of the stage such as "Stage 3". The determination of the stage is disease-specific.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Reference to a formal record of the evidence on which the staging assessment is based.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAssessment()
    {
        return $this->assessment;
    }

    /**
     * Reference to a formal record of the evidence on which the staging assessment is based.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $assessment
     * @return $this
     */
    public function addAssessment($assessment)
    {
        $this->assessment[] = $assessment;
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
        if (null !== $this->summary) $json['summary'] = $this->summary;
        if (0 < count($this->assessment)) {
            $json['assessment'] = [];
            foreach($this->assessment as $assessment) {
                $json['assessment'][] = $assessment;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConditionStage xmlns="http://hl7.org/fhir"></ConditionStage>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->summary) $this->summary->xmlSerialize(true, $sxe->addChild('summary'));
        if (0 < count($this->assessment)) {
            foreach($this->assessment as $assessment) {
                $assessment->xmlSerialize(true, $sxe->addChild('assessment'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}