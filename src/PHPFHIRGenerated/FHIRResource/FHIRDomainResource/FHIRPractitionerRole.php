<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A specific set of Roles/Locations/specialties/services that a practitioner may perform at an organization for a period of time.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRPractitionerRole
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRPractitionerRole extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'PractitionerRole';

    /**
     * Whether this practitioner role record is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $availabilityExceptions = null;

    /**
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime
     */
    public $availableTime = null;

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Technical endpoints providing access to services operated for the practitioner with this role.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $endpoint = null;

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $healthcareService = null;

    /**
     * Business Identifiers that are specific to a role/location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The location(s) at which this practitioner provides care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * The practitioner is not available or performing this role during this period of time due to the provided reason.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable
     */
    public $notAvailable = null;

    /**
     * The organization where the Practitioner performs the roles associated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Practitioner that is able to provide the defined services for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $practitioner = null;

    /**
     * Specific specialty of the practitioner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $specialty = null;

    /**
     * Contact details that are specific to the role/location/service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $telecom = null;

    /**
     * FHIRPractitionerRole Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['active'])) {
                $this->setActive($data['active']);
            }
            if (isset($data['availabilityExceptions'])) {
                $this->setAvailabilityExceptions($data['availabilityExceptions']);
            }
            if (isset($data['availableTime'])) {
                $this->setAvailableTime($data['availableTime']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['endpoint'])) {
                $this->setEndpoint($data['endpoint']);
            }
            if (isset($data['healthcareService'])) {
                $this->setHealthcareService($data['healthcareService']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['notAvailable'])) {
                $this->setNotAvailable($data['notAvailable']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['practitioner'])) {
                $this->setPractitioner($data['practitioner']);
            }
            if (isset($data['specialty'])) {
                $this->setSpecialty($data['specialty']);
            }
            if (isset($data['telecom'])) {
                $this->setTelecom($data['telecom']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPractitionerRole::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Whether this practitioner role record is in active use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setActive($active)
    {
        if (null === $active) {
            return $this; 
        }
        if (is_scalar($active)) {
            $active = new FHIRBoolean($active);
        }
        if (!($active instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPractitionerRole::setActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($active)
            ));
        }
        $this->active = $active;
        return $this;
    }

    /**
     * Whether this practitioner role record is in active use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }


    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAvailabilityExceptions($availabilityExceptions)
    {
        if (null === $availabilityExceptions) {
            return $this; 
        }
        if (is_scalar($availabilityExceptions)) {
            $availabilityExceptions = new FHIRString($availabilityExceptions);
        }
        if (!($availabilityExceptions instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPractitionerRole::setAvailabilityExceptions - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($availabilityExceptions)
            ));
        }
        $this->availabilityExceptions = $availabilityExceptions;
        return $this;
    }

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions()
    {
        return $this->availabilityExceptions;
    }


    /**
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime
     * @return $this
     */
    public function setAvailableTime(FHIRPractitionerRoleAvailableTime $availableTime = null)
    {
        if (null === $availableTime) {
            return $this; 
        }
        $this->availableTime = $availableTime;
        return $this;
    }

    /**
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime
     */
    public function getAvailableTime()
    {
        return $this->availableTime;
    }


    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Technical endpoints providing access to services operated for the practitioner with this role.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEndpoint(FHIRReference $endpoint = null)
    {
        if (null === $endpoint) {
            return $this; 
        }
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Technical endpoints providing access to services operated for the practitioner with this role.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }


    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setHealthcareService(FHIRReference $healthcareService = null)
    {
        if (null === $healthcareService) {
            return $this; 
        }
        $this->healthcareService = $healthcareService;
        return $this;
    }

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getHealthcareService()
    {
        return $this->healthcareService;
    }


    /**
     * Business Identifiers that are specific to a role/location.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Business Identifiers that are specific to a role/location.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The location(s) at which this practitioner provides care.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * The location(s) at which this practitioner provides care.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * The practitioner is not available or performing this role during this period of time due to the provided reason.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable
     * @return $this
     */
    public function setNotAvailable(FHIRPractitionerRoleNotAvailable $notAvailable = null)
    {
        if (null === $notAvailable) {
            return $this; 
        }
        $this->notAvailable = $notAvailable;
        return $this;
    }

    /**
     * The practitioner is not available or performing this role during this period of time due to the provided reason.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable
     */
    public function getNotAvailable()
    {
        return $this->notAvailable;
    }


    /**
     * The organization where the Practitioner performs the roles associated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        if (null === $organization) {
            return $this; 
        }
        $this->organization = $organization;
        return $this;
    }

    /**
     * The organization where the Practitioner performs the roles associated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }


    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * Practitioner that is able to provide the defined services for the organization.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPractitioner(FHIRReference $practitioner = null)
    {
        if (null === $practitioner) {
            return $this; 
        }
        $this->practitioner = $practitioner;
        return $this;
    }

    /**
     * Practitioner that is able to provide the defined services for the organization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPractitioner()
    {
        return $this->practitioner;
    }


    /**
     * Specific specialty of the practitioner.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSpecialty(FHIRCodeableConcept $specialty = null)
    {
        if (null === $specialty) {
            return $this; 
        }
        $this->specialty = $specialty;
        return $this;
    }

    /**
     * Specific specialty of the practitioner.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }


    /**
     * Contact details that are specific to the role/location/service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setTelecom(FHIRContactPoint $telecom = null)
    {
        if (null === $telecom) {
            return $this; 
        }
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * Contact details that are specific to the role/location/service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getTelecom()
    {
        return $this->telecom;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getActive())) {
            $a['active'] = $v;
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            $a['availabilityExceptions'] = $v;
        }
        if (null !== ($v = $this->getAvailableTime())) {
            $a['availableTime'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getEndpoint())) {
            $a['endpoint'] = $v;
        }
        if (null !== ($v = $this->getHealthcareService())) {
            $a['healthcareService'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getNotAvailable())) {
            $a['notAvailable'] = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a['organization'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPractitioner())) {
            $a['practitioner'] = $v;
        }
        if (null !== ($v = $this->getSpecialty())) {
            $a['specialty'] = $v;
        }
        if (null !== ($v = $this->getTelecom())) {
            $a['telecom'] = $v;
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
            $sxe = new \SimpleXMLElement('<PractitionerRole xmlns="http://hl7.org/fhir"></PractitionerRole>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}