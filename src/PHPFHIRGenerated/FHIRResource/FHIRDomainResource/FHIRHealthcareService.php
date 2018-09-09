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

use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The details of a healthcare service available at a location.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRHealthcareService
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRHealthcareService extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'HealthcareService';

    /**
     * This flag is used to mark the record to not be used. This is not used when a center is closed for maintenance, or for holidays, the notAvailable period is to be used for this.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $appointmentRequired = null;

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $availabilityExceptions = null;

    /**
     * A collection of times that the Service Site is available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime
     */
    public $availableTime = null;

    /**
     * Identifies the broad category of service being performed or delivered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Collection of characteristics (attributes).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $characteristic = null;

    /**
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * The location(s) that this service is available to (not where the service is provided).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $coverageArea = null;

    /**
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $eligibility = null;

    /**
     * Describes the eligibility conditions for the service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $eligibilityNote = null;

    /**
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $endpoint = null;

    /**
     * Extra details about the service that can't be placed in the other fields.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $extraDetails = null;

    /**
     * External identifiers for this item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The location(s) where this healthcare service may be provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Further description of the service as it would be presented to a consumer while searching.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable
     */
    public $notAvailable = null;

    /**
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $photo = null;

    /**
     * Program Names that can be used to categorize the service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $programName = null;

    /**
     * The organization that provides this healthcare service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $providedBy = null;

    /**
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $referralMethod = null;

    /**
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $serviceProvisionCode = null;

    /**
     * Collection of specialties handled by the service site. This is more of a medical term.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $specialty = null;

    /**
     * List of contacts related to this specific healthcare service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $telecom = null;

    /**
     * The specific type of service that may be delivered or performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRHealthcareService Constructor
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
            if (isset($data['appointmentRequired'])) {
                $this->setAppointmentRequired($data['appointmentRequired']);
            }
            if (isset($data['availabilityExceptions'])) {
                $this->setAvailabilityExceptions($data['availabilityExceptions']);
            }
            if (isset($data['availableTime'])) {
                $this->setAvailableTime($data['availableTime']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['characteristic'])) {
                $this->setCharacteristic($data['characteristic']);
            }
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['coverageArea'])) {
                $this->setCoverageArea($data['coverageArea']);
            }
            if (isset($data['eligibility'])) {
                $this->setEligibility($data['eligibility']);
            }
            if (isset($data['eligibilityNote'])) {
                $this->setEligibilityNote($data['eligibilityNote']);
            }
            if (isset($data['endpoint'])) {
                $this->setEndpoint($data['endpoint']);
            }
            if (isset($data['extraDetails'])) {
                $this->setExtraDetails($data['extraDetails']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['notAvailable'])) {
                $this->setNotAvailable($data['notAvailable']);
            }
            if (isset($data['photo'])) {
                $this->setPhoto($data['photo']);
            }
            if (isset($data['programName'])) {
                $this->setProgramName($data['programName']);
            }
            if (isset($data['providedBy'])) {
                $this->setProvidedBy($data['providedBy']);
            }
            if (isset($data['referralMethod'])) {
                $this->setReferralMethod($data['referralMethod']);
            }
            if (isset($data['serviceProvisionCode'])) {
                $this->setServiceProvisionCode($data['serviceProvisionCode']);
            }
            if (isset($data['specialty'])) {
                $this->setSpecialty($data['specialty']);
            }
            if (isset($data['telecom'])) {
                $this->setTelecom($data['telecom']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRHealthcareService::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * This flag is used to mark the record to not be used. This is not used when a center is closed for maintenance, or for holidays, the notAvailable period is to be used for this.
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
                'FHIRHealthcareService::setActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($active)
            ));
        }
        $this->active = $active;
        return $this;
    }

    /**
     * This flag is used to mark the record to not be used. This is not used when a center is closed for maintenance, or for holidays, the notAvailable period is to be used for this.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }


    /**
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAppointmentRequired($appointmentRequired)
    {
        if (null === $appointmentRequired) {
            return $this; 
        }
        if (is_scalar($appointmentRequired)) {
            $appointmentRequired = new FHIRBoolean($appointmentRequired);
        }
        if (!($appointmentRequired instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHealthcareService::setAppointmentRequired - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($appointmentRequired)
            ));
        }
        $this->appointmentRequired = $appointmentRequired;
        return $this;
    }

    /**
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAppointmentRequired()
    {
        return $this->appointmentRequired;
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
                'FHIRHealthcareService::setAvailabilityExceptions - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
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
     * A collection of times that the Service Site is available.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime
     * @return $this
     */
    public function setAvailableTime(FHIRHealthcareServiceAvailableTime $availableTime = null)
    {
        if (null === $availableTime) {
            return $this; 
        }
        $this->availableTime = $availableTime;
        return $this;
    }

    /**
     * A collection of times that the Service Site is available.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime
     */
    public function getAvailableTime()
    {
        return $this->availableTime;
    }


    /**
     * Identifies the broad category of service being performed or delivered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * Identifies the broad category of service being performed or delivered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Collection of characteristics (attributes).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCharacteristic(FHIRCodeableConcept $characteristic = null)
    {
        if (null === $characteristic) {
            return $this; 
        }
        $this->characteristic = $characteristic;
        return $this;
    }

    /**
     * Collection of characteristics (attributes).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }


    /**
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setComment($comment)
    {
        if (null === $comment) {
            return $this; 
        }
        if (is_scalar($comment)) {
            $comment = new FHIRString($comment);
        }
        if (!($comment instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHealthcareService::setComment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($comment)
            ));
        }
        $this->comment = $comment;
        return $this;
    }

    /**
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * The location(s) that this service is available to (not where the service is provided).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCoverageArea(FHIRReference $coverageArea = null)
    {
        if (null === $coverageArea) {
            return $this; 
        }
        $this->coverageArea = $coverageArea;
        return $this;
    }

    /**
     * The location(s) that this service is available to (not where the service is provided).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCoverageArea()
    {
        return $this->coverageArea;
    }


    /**
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setEligibility(FHIRCodeableConcept $eligibility = null)
    {
        if (null === $eligibility) {
            return $this; 
        }
        $this->eligibility = $eligibility;
        return $this;
    }

    /**
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEligibility()
    {
        return $this->eligibility;
    }


    /**
     * Describes the eligibility conditions for the service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setEligibilityNote($eligibilityNote)
    {
        if (null === $eligibilityNote) {
            return $this; 
        }
        if (is_scalar($eligibilityNote)) {
            $eligibilityNote = new FHIRString($eligibilityNote);
        }
        if (!($eligibilityNote instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHealthcareService::setEligibilityNote - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($eligibilityNote)
            ));
        }
        $this->eligibilityNote = $eligibilityNote;
        return $this;
    }

    /**
     * Describes the eligibility conditions for the service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getEligibilityNote()
    {
        return $this->eligibilityNote;
    }


    /**
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
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
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }


    /**
     * Extra details about the service that can't be placed in the other fields.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setExtraDetails($extraDetails)
    {
        if (null === $extraDetails) {
            return $this; 
        }
        if (is_scalar($extraDetails)) {
            $extraDetails = new FHIRString($extraDetails);
        }
        if (!($extraDetails instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHealthcareService::setExtraDetails - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($extraDetails)
            ));
        }
        $this->extraDetails = $extraDetails;
        return $this;
    }

    /**
     * Extra details about the service that can't be placed in the other fields.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }


    /**
     * External identifiers for this item.
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
     * External identifiers for this item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The location(s) where this healthcare service may be provided.
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
     * The location(s) where this healthcare service may be provided.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * Further description of the service as it would be presented to a consumer while searching.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHealthcareService::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Further description of the service as it would be presented to a consumer while searching.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable
     * @return $this
     */
    public function setNotAvailable(FHIRHealthcareServiceNotAvailable $notAvailable = null)
    {
        if (null === $notAvailable) {
            return $this; 
        }
        $this->notAvailable = $notAvailable;
        return $this;
    }

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable
     */
    public function getNotAvailable()
    {
        return $this->notAvailable;
    }


    /**
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setPhoto(FHIRAttachment $photo = null)
    {
        if (null === $photo) {
            return $this; 
        }
        $this->photo = $photo;
        return $this;
    }

    /**
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPhoto()
    {
        return $this->photo;
    }


    /**
     * Program Names that can be used to categorize the service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setProgramName($programName)
    {
        if (null === $programName) {
            return $this; 
        }
        if (is_scalar($programName)) {
            $programName = new FHIRString($programName);
        }
        if (!($programName instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHealthcareService::setProgramName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($programName)
            ));
        }
        $this->programName = $programName;
        return $this;
    }

    /**
     * Program Names that can be used to categorize the service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getProgramName()
    {
        return $this->programName;
    }


    /**
     * The organization that provides this healthcare service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProvidedBy(FHIRReference $providedBy = null)
    {
        if (null === $providedBy) {
            return $this; 
        }
        $this->providedBy = $providedBy;
        return $this;
    }

    /**
     * The organization that provides this healthcare service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvidedBy()
    {
        return $this->providedBy;
    }


    /**
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReferralMethod(FHIRCodeableConcept $referralMethod = null)
    {
        if (null === $referralMethod) {
            return $this; 
        }
        $this->referralMethod = $referralMethod;
        return $this;
    }

    /**
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReferralMethod()
    {
        return $this->referralMethod;
    }


    /**
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setServiceProvisionCode(FHIRCodeableConcept $serviceProvisionCode = null)
    {
        if (null === $serviceProvisionCode) {
            return $this; 
        }
        $this->serviceProvisionCode = $serviceProvisionCode;
        return $this;
    }

    /**
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceProvisionCode()
    {
        return $this->serviceProvisionCode;
    }


    /**
     * Collection of specialties handled by the service site. This is more of a medical term.
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
     * Collection of specialties handled by the service site. This is more of a medical term.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }


    /**
     * List of contacts related to this specific healthcare service.
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
     * List of contacts related to this specific healthcare service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getTelecom()
    {
        return $this->telecom;
    }


    /**
     * The specific type of service that may be delivered or performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The specific type of service that may be delivered or performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
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
        if (null !== ($v = $this->getAppointmentRequired())) {
            $a['appointmentRequired'] = $v;
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            $a['availabilityExceptions'] = $v;
        }
        if (null !== ($v = $this->getAvailableTime())) {
            $a['availableTime'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getCharacteristic())) {
            $a['characteristic'] = $v;
        }
        if (null !== ($v = $this->getComment())) {
            $a['comment'] = $v;
        }
        if (null !== ($v = $this->getCoverageArea())) {
            $a['coverageArea'] = $v;
        }
        if (null !== ($v = $this->getEligibility())) {
            $a['eligibility'] = $v;
        }
        if (null !== ($v = $this->getEligibilityNote())) {
            $a['eligibilityNote'] = $v;
        }
        if (null !== ($v = $this->getEndpoint())) {
            $a['endpoint'] = $v;
        }
        if (null !== ($v = $this->getExtraDetails())) {
            $a['extraDetails'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getNotAvailable())) {
            $a['notAvailable'] = $v;
        }
        if (null !== ($v = $this->getPhoto())) {
            $a['photo'] = $v;
        }
        if (null !== ($v = $this->getProgramName())) {
            $a['programName'] = $v;
        }
        if (null !== ($v = $this->getProvidedBy())) {
            $a['providedBy'] = $v;
        }
        if (null !== ($v = $this->getReferralMethod())) {
            $a['referralMethod'] = $v;
        }
        if (null !== ($v = $this->getServiceProvisionCode())) {
            $a['serviceProvisionCode'] = $v;
        }
        if (null !== ($v = $this->getSpecialty())) {
            $a['specialty'] = $v;
        }
        if (null !== ($v = $this->getTelecom())) {
            $a['telecom'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<HealthcareService xmlns="http://hl7.org/fhir"></HealthcareService>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}