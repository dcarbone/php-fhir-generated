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
class FHIRCarePlanActivity extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @var \[]
     */
    public $goal = array();

    /**
     * Identifies what progress is being made for the specific activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     */
    public $status = null;

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $prohibited = null;

    /**
     * Resources that describe follow-on actions resulting from the plan, such as drug prescriptions, encounter records, appointments, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $actionResulting = array();

    /**
     * Notes about the execution of the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $notes = null;

    /**
     * The details of the proposed activity represented in a specific resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $detail = null;

    /**
     * A simple summary of details suitable for a general care plan system (e.g. form driven) that doesn't know about specific resources such as procedure etc.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanSimple
     */
    public $simple = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'CarePlan.Activity';

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @return \[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @param \ $goal
     * @return $this
     */
    public function addGoal($goal)
    {
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * Identifies what progress is being made for the specific activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Identifies what progress is being made for the specific activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getProhibited()
    {
        return $this->prohibited;
    }

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $prohibited
     * @return $this
     */
    public function setProhibited($prohibited)
    {
        $this->prohibited = $prohibited;
        return $this;
    }

    /**
     * Resources that describe follow-on actions resulting from the plan, such as drug prescriptions, encounter records, appointments, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getActionResulting()
    {
        return $this->actionResulting;
    }

    /**
     * Resources that describe follow-on actions resulting from the plan, such as drug prescriptions, encounter records, appointments, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $actionResulting
     * @return $this
     */
    public function addActionResulting($actionResulting)
    {
        $this->actionResulting[] = $actionResulting;
        return $this;
    }

    /**
     * Notes about the execution of the activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Notes about the execution of the activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * The details of the proposed activity represented in a specific resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * The details of the proposed activity represented in a specific resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $detail
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * A simple summary of details suitable for a general care plan system (e.g. form driven) that doesn't know about specific resources such as procedure etc.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanSimple
     */
    public function getSimple()
    {
        return $this->simple;
    }

    /**
     * A simple summary of details suitable for a general care plan system (e.g. form driven) that doesn't know about specific resources such as procedure etc.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanSimple $simple
     * @return $this
     */
    public function setSimple($simple)
    {
        $this->simple = $simple;
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
        if (0 < count($this->goal)) {
            $json['goal'] = [];
            foreach($this->goal as $goal) {
                $json['goal'][] = json_encode($goal);
            }
        }
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->prohibited) $json['prohibited'] = json_encode($this->prohibited);
        if (0 < count($this->actionResulting)) {
            $json['actionResulting'] = [];
            foreach($this->actionResulting as $actionResulting) {
                $json['actionResulting'][] = json_encode($actionResulting);
            }
        }
        if (null !== $this->notes) $json['notes'] = json_encode($this->notes);
        if (null !== $this->detail) $json['detail'] = json_encode($this->detail);
        if (null !== $this->simple) $json['simple'] = json_encode($this->simple);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CarePlanActivity xmlns="http://hl7.org/fhir"></CarePlanActivity>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->goal)) {
            foreach($this->goal as $goal) {
                $goal->xmlSerialize(true, $sxe->addChild('goal'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->prohibited) $this->prohibited->xmlSerialize(true, $sxe->addChild('prohibited'));
        if (0 < count($this->actionResulting)) {
            foreach($this->actionResulting as $actionResulting) {
                $actionResulting->xmlSerialize(true, $sxe->addChild('actionResulting'));
            }
        }
        if (null !== $this->notes) $this->notes->xmlSerialize(true, $sxe->addChild('notes'));
        if (null !== $this->detail) $this->detail->xmlSerialize(true, $sxe->addChild('detail'));
        if (null !== $this->simple) $this->simple->xmlSerialize(true, $sxe->addChild('simple'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}