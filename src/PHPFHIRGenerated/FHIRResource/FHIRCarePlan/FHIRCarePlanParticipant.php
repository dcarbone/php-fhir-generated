<?php namespace PHPFHIRGenerated\FHIRResource\FHIRCarePlan;

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
class FHIRCarePlanParticipant extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Indicates specific responsibility of an individual within the care plan.  E.g. "Primary physician", "Team coordinator", "Caregiver", etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $role = null;

    /**
     * The specific person or organization who is participating/expected to participate in the care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $member = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'CarePlan.Participant';

    /**
     * Indicates specific responsibility of an individual within the care plan.  E.g. "Primary physician", "Team coordinator", "Caregiver", etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Indicates specific responsibility of an individual within the care plan.  E.g. "Primary physician", "Team coordinator", "Caregiver", etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * The specific person or organization who is participating/expected to participate in the care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * The specific person or organization who is participating/expected to participate in the care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $member
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
        if (null !== $this->role) $json['role'] = $this->role;
        if (null !== $this->member) $json['member'] = $this->member;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CarePlanParticipant xmlns="http://hl7.org/fhir"></CarePlanParticipant>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->role) $this->role->xmlSerialize(true, $sxe->addChild('role'));
        if (null !== $this->member) $this->member->xmlSerialize(true, $sxe->addChild('member'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}