<?php namespace PHPFHIRGenerated\FHIRResource\FHIRCarePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient for a period of time, possibly limited to care for a specific condition or set of conditions.
 */
class FHIRCarePlanGoal extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Human-readable description of a specific desired objective of the care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanGoalStatus
     */
    public $status = null;

    /**
     * Any comments related to the goal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $notes = null;

    /**
     * The identified conditions that this goal relates to - the condition that caused it to be created, or that it is intended to address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $concern = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'CarePlan.Goal';

    /**
     * Human-readable description of a specific desired objective of the care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human-readable description of a specific desired objective of the care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCarePlanGoalStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCarePlanGoalStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Any comments related to the goal.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Any comments related to the goal.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * The identified conditions that this goal relates to - the condition that caused it to be created, or that it is intended to address.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getConcern()
    {
        return $this->concern;
    }

    /**
     * The identified conditions that this goal relates to - the condition that caused it to be created, or that it is intended to address.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $concern
     * @return $this
     */
    public function addConcern($concern)
    {
        $this->concern[] = $concern;
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
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->notes) $json['notes'] = json_encode($this->notes);
        if (0 < count($this->concern)) {
            $json['concern'] = [];
            foreach($this->concern as $concern) {
                $json['concern'][] = json_encode($concern);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CarePlanGoal xmlns="http://hl7.org/fhir"></CarePlanGoal>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->notes) $this->notes->xmlSerialize(true, $sxe->addChild('notes'));
        if (0 < count($this->concern)) {
            foreach($this->concern as $concern) {
                $concern->xmlSerialize(true, $sxe->addChild('concern'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}