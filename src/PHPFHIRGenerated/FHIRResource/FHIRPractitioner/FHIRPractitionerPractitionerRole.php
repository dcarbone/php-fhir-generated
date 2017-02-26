<?php namespace PHPFHIRGenerated\FHIRResource\FHIRPractitioner;

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
 * A person who is directly or indirectly involved in the provisioning of healthcare.
 */
class FHIRPractitionerPractitionerRole extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The organization where the Practitioner performs the roles associated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $role = null;

    /**
     * Specific specialty of the practitioner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialty = array();

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The location(s) at which this practitioner provides care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $location = array();

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $healthcareService = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Practitioner.PractitionerRole';

    /**
     * The organization where the Practitioner performs the roles associated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * The organization where the Practitioner performs the roles associated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $managingOrganization
     * @return $this
     */
    public function setManagingOrganization($managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Specific specialty of the practitioner.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Specific specialty of the practitioner.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $specialty
     * @return $this
     */
    public function addSpecialty($specialty)
    {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * The location(s) at which this practitioner provides care.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location(s) at which this practitioner provides care.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function addLocation($location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getHealthcareService()
    {
        return $this->healthcareService;
    }

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $healthcareService
     * @return $this
     */
    public function addHealthcareService($healthcareService)
    {
        $this->healthcareService[] = $healthcareService;
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
        if (null !== $this->managingOrganization) $json['managingOrganization'] = json_encode($this->managingOrganization);
        if (null !== $this->role) $json['role'] = json_encode($this->role);
        if (0 < count($this->specialty)) {
            $json['specialty'] = [];
            foreach($this->specialty as $specialty) {
                $json['specialty'][] = json_encode($specialty);
            }
        }
        if (null !== $this->period) $json['period'] = json_encode($this->period);
        if (0 < count($this->location)) {
            $json['location'] = [];
            foreach($this->location as $location) {
                $json['location'][] = json_encode($location);
            }
        }
        if (0 < count($this->healthcareService)) {
            $json['healthcareService'] = [];
            foreach($this->healthcareService as $healthcareService) {
                $json['healthcareService'][] = json_encode($healthcareService);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<PractitionerPractitionerRole xmlns="http://hl7.org/fhir"></PractitionerPractitionerRole>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->managingOrganization) $this->managingOrganization->xmlSerialize(true, $sxe->addChild('managingOrganization'));
        if (null !== $this->role) $this->role->xmlSerialize(true, $sxe->addChild('role'));
        if (0 < count($this->specialty)) {
            foreach($this->specialty as $specialty) {
                $specialty->xmlSerialize(true, $sxe->addChild('specialty'));
            }
        }
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (0 < count($this->location)) {
            foreach($this->location as $location) {
                $location->xmlSerialize(true, $sxe->addChild('location'));
            }
        }
        if (0 < count($this->healthcareService)) {
            foreach($this->healthcareService as $healthcareService) {
                $healthcareService->xmlSerialize(true, $sxe->addChild('healthcareService'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}