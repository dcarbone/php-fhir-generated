<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A container for slots of time that may be available for booking appointments.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSchedule extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * External Ids for this item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Whether this schedule record is in active use, or should not be used (such as was entered in error).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * A broad categorisation of the service that is to be performed during this appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $serviceCategory = null;

    /**
     * The specific service that is to be performed during this appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $serviceType = array();

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialty = array();

    /**
     * The resource this Schedule resource is providing availability information for. These are expected to usually be one of HealthcareService, Location, Practitioner, PractitionerRole, Device, Patient or RelatedPerson.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $actor = array();

    /**
     * The period of time that the slots that are attached to this Schedule resource cover (even if none exist). These  cover the amount of time that an organization's planning horizon; the interval for which they are currently accepting appointments. This does not define a "template" for planning outside these dates.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $planningHorizon = null;

    /**
     * Comments on the availability to describe any extended information. Such as custom constraints on the slots that may be associated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Schedule';

    /**
     * External Ids for this item.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * External Ids for this item.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Whether this schedule record is in active use, or should not be used (such as was entered in error).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Whether this schedule record is in active use, or should not be used (such as was entered in error).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * A broad categorisation of the service that is to be performed during this appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * A broad categorisation of the service that is to be performed during this appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return $this
     */
    public function setServiceCategory($serviceCategory)
    {
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * The specific service that is to be performed during this appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * The specific service that is to be performed during this appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $serviceType
     * @return $this
     */
    public function addServiceType($serviceType)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $specialty
     * @return $this
     */
    public function addSpecialty($specialty)
    {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * The resource this Schedule resource is providing availability information for. These are expected to usually be one of HealthcareService, Location, Practitioner, PractitionerRole, Device, Patient or RelatedPerson.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * The resource this Schedule resource is providing availability information for. These are expected to usually be one of HealthcareService, Location, Practitioner, PractitionerRole, Device, Patient or RelatedPerson.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $actor
     * @return $this
     */
    public function addActor($actor)
    {
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * The period of time that the slots that are attached to this Schedule resource cover (even if none exist). These  cover the amount of time that an organization's planning horizon; the interval for which they are currently accepting appointments. This does not define a "template" for planning outside these dates.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPlanningHorizon()
    {
        return $this->planningHorizon;
    }

    /**
     * The period of time that the slots that are attached to this Schedule resource cover (even if none exist). These  cover the amount of time that an organization's planning horizon; the interval for which they are currently accepting appointments. This does not define a "template" for planning outside these dates.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $planningHorizon
     * @return $this
     */
    public function setPlanningHorizon($planningHorizon)
    {
        $this->planningHorizon = $planningHorizon;
        return $this;
    }

    /**
     * Comments on the availability to describe any extended information. Such as custom constraints on the slots that may be associated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Comments on the availability to describe any extended information. Such as custom constraints on the slots that may be associated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (null !== $this->active) $json['active'] = json_encode($this->active);
        if (null !== $this->serviceCategory) $json['serviceCategory'] = json_encode($this->serviceCategory);
        if (0 < count($this->serviceType)) {
            $json['serviceType'] = [];
            foreach($this->serviceType as $serviceType) {
                $json['serviceType'][] = json_encode($serviceType);
            }
        }
        if (0 < count($this->specialty)) {
            $json['specialty'] = [];
            foreach($this->specialty as $specialty) {
                $json['specialty'][] = json_encode($specialty);
            }
        }
        if (0 < count($this->actor)) {
            $json['actor'] = [];
            foreach($this->actor as $actor) {
                $json['actor'][] = json_encode($actor);
            }
        }
        if (null !== $this->planningHorizon) $json['planningHorizon'] = json_encode($this->planningHorizon);
        if (null !== $this->comment) $json['comment'] = json_encode($this->comment);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Schedule xmlns="http://hl7.org/fhir"></Schedule>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->active) $this->active->xmlSerialize(true, $sxe->addChild('active'));
        if (null !== $this->serviceCategory) $this->serviceCategory->xmlSerialize(true, $sxe->addChild('serviceCategory'));
        if (0 < count($this->serviceType)) {
            foreach($this->serviceType as $serviceType) {
                $serviceType->xmlSerialize(true, $sxe->addChild('serviceType'));
            }
        }
        if (0 < count($this->specialty)) {
            foreach($this->specialty as $specialty) {
                $specialty->xmlSerialize(true, $sxe->addChild('specialty'));
            }
        }
        if (0 < count($this->actor)) {
            foreach($this->actor as $actor) {
                $actor->xmlSerialize(true, $sxe->addChild('actor'));
            }
        }
        if (null !== $this->planningHorizon) $this->planningHorizon->xmlSerialize(true, $sxe->addChild('planningHorizon'));
        if (null !== $this->comment) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}