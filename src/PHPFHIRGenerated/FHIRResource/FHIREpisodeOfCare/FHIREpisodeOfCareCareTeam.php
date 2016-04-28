<?php namespace PHPFHIRGenerated\FHIRResource\FHIREpisodeOfCare;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use PHPFHIRGenerated\JsonSerializable;

/**
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.
 */
class FHIREpisodeOfCareCareTeam extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * The role this team member is taking within this episode of care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $role = array();

    /**
     * The period of time this practitioner is performing some role within the episode of care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The practitioner (or Organization) within the team.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $member = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'EpisodeOfCare.CareTeam';

    /**
     * The role this team member is taking within this episode of care.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * The role this team member is taking within this episode of care.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $role
     * @return $this
     */
    public function addRole($role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * The period of time this practitioner is performing some role within the episode of care.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The period of time this practitioner is performing some role within the episode of care.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * The practitioner (or Organization) within the team.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * The practitioner (or Organization) within the team.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $member
     * @return $this
     */
    public function setMember($member)
    {
        $this->member = $member;
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
        if (0 < count($this->role)) {
            $json['role'] = array();
            foreach($this->role as $role) {
                $json['role'][] = $role->jsonSerialize();
            }
        }
        if (null !== $this->period) $json['period'] = $this->period->jsonSerialize();
        if (null !== $this->member) $json['member'] = $this->member->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EpisodeOfCareCareTeam xmlns="http://hl7.org/fhir"></EpisodeOfCareCareTeam>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->role)) {
            foreach($this->role as $role) {
                $role->xmlSerialize(true, $sxe->addChild('role'));
            }
        }
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->member) $this->member->xmlSerialize(true, $sxe->addChild('member'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}