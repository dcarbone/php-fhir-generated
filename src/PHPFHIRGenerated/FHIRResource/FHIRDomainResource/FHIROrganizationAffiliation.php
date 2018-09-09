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

use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Defines an affiliation/assotiation/relationship between 2 distinct oganizations, that is not a part-of relationship/sub-division relationship.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIROrganizationAffiliation
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIROrganizationAffiliation extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'OrganizationAffiliation';

    /**
     * Whether this organization affiliation record is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * Definition of the role the participatingOrganization plays in the association.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Technical endpoints providing access to services operated for this role.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $endpoint = null;

    /**
     * Healthcare services provided through the role.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $healthcareService = null;

    /**
     * Business identifiers that are specific to this role.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The location(s) at which the role occurs.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Health insurance provider network in which the participatingOrganization provides the role's services (if defined) at the indicated locations (if defined).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $network = null;

    /**
     * Organization where the role is available (primary organization/has members).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * The Participating Organization provides/performs the role(s) defined by the code to the Primary Organization (e.g. providing services or is a member of).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $participatingOrganization = null;

    /**
     * The period during which the participatingOrganization is affiliated with the primary organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Specific specialty of the participatingOrganization in the context of the role.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $specialty = null;

    /**
     * Contact details at the participatingOrganization relevant to this Affiliation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $telecom = null;

    /**
     * FHIROrganizationAffiliation Constructor
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
            if (isset($data['network'])) {
                $this->setNetwork($data['network']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['participatingOrganization'])) {
                $this->setParticipatingOrganization($data['participatingOrganization']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['specialty'])) {
                $this->setSpecialty($data['specialty']);
            }
            if (isset($data['telecom'])) {
                $this->setTelecom($data['telecom']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Whether this organization affiliation record is in active use.
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
                'FHIROrganizationAffiliation::setActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($active)
            ));
        }
        $this->active = $active;
        return $this;
    }

    /**
     * Whether this organization affiliation record is in active use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }


    /**
     * Definition of the role the participatingOrganization plays in the association.
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
     * Definition of the role the participatingOrganization plays in the association.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Technical endpoints providing access to services operated for this role.
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
     * Technical endpoints providing access to services operated for this role.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }


    /**
     * Healthcare services provided through the role.
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
     * Healthcare services provided through the role.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getHealthcareService()
    {
        return $this->healthcareService;
    }


    /**
     * Business identifiers that are specific to this role.
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
     * Business identifiers that are specific to this role.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The location(s) at which the role occurs.
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
     * The location(s) at which the role occurs.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * Health insurance provider network in which the participatingOrganization provides the role's services (if defined) at the indicated locations (if defined).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setNetwork(FHIRReference $network = null)
    {
        if (null === $network) {
            return $this; 
        }
        $this->network = $network;
        return $this;
    }

    /**
     * Health insurance provider network in which the participatingOrganization provides the role's services (if defined) at the indicated locations (if defined).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getNetwork()
    {
        return $this->network;
    }


    /**
     * Organization where the role is available (primary organization/has members).
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
     * Organization where the role is available (primary organization/has members).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }


    /**
     * The Participating Organization provides/performs the role(s) defined by the code to the Primary Organization (e.g. providing services or is a member of).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setParticipatingOrganization(FHIRReference $participatingOrganization = null)
    {
        if (null === $participatingOrganization) {
            return $this; 
        }
        $this->participatingOrganization = $participatingOrganization;
        return $this;
    }

    /**
     * The Participating Organization provides/performs the role(s) defined by the code to the Primary Organization (e.g. providing services or is a member of).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParticipatingOrganization()
    {
        return $this->participatingOrganization;
    }


    /**
     * The period during which the participatingOrganization is affiliated with the primary organization.
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
     * The period during which the participatingOrganization is affiliated with the primary organization.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * Specific specialty of the participatingOrganization in the context of the role.
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
     * Specific specialty of the participatingOrganization in the context of the role.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }


    /**
     * Contact details at the participatingOrganization relevant to this Affiliation.
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
     * Contact details at the participatingOrganization relevant to this Affiliation.
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
        if (null !== ($v = $this->getNetwork())) {
            $a['network'] = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a['organization'] = $v;
        }
        if (null !== ($v = $this->getParticipatingOrganization())) {
            $a['participatingOrganization'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
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
            $sxe = new \SimpleXMLElement('<OrganizationAffiliation xmlns="http://hl7.org/fhir"></OrganizationAffiliation>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}