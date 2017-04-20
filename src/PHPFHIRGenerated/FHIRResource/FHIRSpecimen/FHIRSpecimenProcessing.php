<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSpecimen;

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
 * A sample to be used for analysis.
 */
class FHIRSpecimenProcessing extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Textual description of procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A coded value specifying the procedure used to process the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $procedure = null;

    /**
     * Material used in the processing step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $additive = array();

    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $timeDateTime = null;

    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $timePeriod = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Specimen.Processing';

    /**
     * Textual description of procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Textual description of procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A coded value specifying the procedure used to process the specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * A coded value specifying the procedure used to process the specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $procedure
     * @return $this
     */
    public function setProcedure($procedure)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Material used in the processing step.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    /**
     * Material used in the processing step.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $additive
     * @return $this
     */
    public function addAdditive($additive)
    {
        $this->additive[] = $additive;
        return $this;
    }

    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimeDateTime()
    {
        return $this->timeDateTime;
    }

    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $timeDateTime
     * @return $this
     */
    public function setTimeDateTime($timeDateTime)
    {
        $this->timeDateTime = $timeDateTime;
        return $this;
    }

    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimePeriod()
    {
        return $this->timePeriod;
    }

    /**
     * A record of the time or period when the specimen processing occurred.  For example the time of sample fixation or the period of time the sample was in formalin. (choose any one of time*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $timePeriod
     * @return $this
     */
    public function setTimePeriod($timePeriod)
    {
        $this->timePeriod = $timePeriod;
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
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->procedure) $json['procedure'] = json_encode($this->procedure);
        if (0 < count($this->additive)) {
            $json['additive'] = [];
            foreach($this->additive as $additive) {
                $json['additive'][] = json_encode($additive);
            }
        }
        if (null !== $this->timeDateTime) $json['timeDateTime'] = json_encode($this->timeDateTime);
        if (null !== $this->timePeriod) $json['timePeriod'] = json_encode($this->timePeriod);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SpecimenProcessing xmlns="http://hl7.org/fhir"></SpecimenProcessing>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->procedure) $this->procedure->xmlSerialize(true, $sxe->addChild('procedure'));
        if (0 < count($this->additive)) {
            foreach($this->additive as $additive) {
                $additive->xmlSerialize(true, $sxe->addChild('additive'));
            }
        }
        if (null !== $this->timeDateTime) $this->timeDateTime->xmlSerialize(true, $sxe->addChild('timeDateTime'));
        if (null !== $this->timePeriod) $this->timePeriod->xmlSerialize(true, $sxe->addChild('timePeriod'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}