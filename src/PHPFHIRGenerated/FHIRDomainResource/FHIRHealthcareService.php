<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The details of a healthcare service available at a location.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRHealthcareService extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * External identifiers for this item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * This flag is used to mark the record to not be used. This is not used when a centre is closed for maintenance, or for holidays, the notAvailable period is to be used for this.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * The organization that provides this healthcare service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $providedBy = null;

    /**
     * Identifies the broad category of service being performed or delivered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The specific type of service that may be delivered or performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = [];

    /**
     * Collection of specialties handled by the service site. This is more of a medical term.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialty = [];

    /**
     * The location(s) where this healthcare service may be provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $location = [];

    /**
     * Further description of the service as it would be presented to a consumer while searching.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * Extra details about the service that can't be placed in the other fields.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $extraDetails = null;

    /**
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $photo = null;

    /**
     * List of contacts related to this specific healthcare service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = [];

    /**
     * The location(s) that this service is available to (not where the service is provided).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $coverageArea = [];

    /**
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $serviceProvisionCode = [];

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
     * Program Names that can be used to categorize the service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $programName = [];

    /**
     * Collection of characteristics (attributes).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $characteristic = [];

    /**
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $referralMethod = [];

    /**
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $appointmentRequired = null;

    /**
     * A collection of times that the Service Site is available.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[]
     */
    public $availableTime = [];

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[]
     */
    public $notAvailable = [];

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $availabilityExceptions = null;

    /**
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $endpoint = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'HealthcareService';

    /**
     * External identifiers for this item.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * External identifiers for this item.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * This flag is used to mark the record to not be used. This is not used when a centre is closed for maintenance, or for holidays, the notAvailable period is to be used for this.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * This flag is used to mark the record to not be used. This is not used when a centre is closed for maintenance, or for holidays, the notAvailable period is to be used for this.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $active
     * @return $this
     */
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * The organization that provides this healthcare service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvidedBy() {
        return $this->providedBy;
    }

    /**
     * The organization that provides this healthcare service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $providedBy
     * @return $this
     */
    public function setProvidedBy($providedBy) {
        $this->providedBy = $providedBy;
        return $this;
    }

    /**
     * Identifies the broad category of service being performed or delivered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Identifies the broad category of service being performed or delivered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * The specific type of service that may be delivered or performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The specific type of service that may be delivered or performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function addType($type) {
        $this->type[] = $type;
        return $this;
    }

    /**
     * Collection of specialties handled by the service site. This is more of a medical term.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty() {
        return $this->specialty;
    }

    /**
     * Collection of specialties handled by the service site. This is more of a medical term.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $specialty
     * @return $this
     */
    public function addSpecialty($specialty) {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * The location(s) where this healthcare service may be provided.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * The location(s) where this healthcare service may be provided.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function addLocation($location) {
        $this->location[] = $location;
        return $this;
    }

    /**
     * Further description of the service as it would be presented to a consumer while searching.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Further description of the service as it would be presented to a consumer while searching.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comment
     * @return $this
     */
    public function setComment($comment) {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Extra details about the service that can't be placed in the other fields.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExtraDetails() {
        return $this->extraDetails;
    }

    /**
     * Extra details about the service that can't be placed in the other fields.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $extraDetails
     * @return $this
     */
    public function setExtraDetails($extraDetails) {
        $this->extraDetails = $extraDetails;
        return $this;
    }

    /**
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $photo
     * @return $this
     */
    public function setPhoto($photo) {
        $this->photo = $photo;
        return $this;
    }

    /**
     * List of contacts related to this specific healthcare service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom() {
        return $this->telecom;
    }

    /**
     * List of contacts related to this specific healthcare service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $telecom
     * @return $this
     */
    public function addTelecom($telecom) {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * The location(s) that this service is available to (not where the service is provided).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getCoverageArea() {
        return $this->coverageArea;
    }

    /**
     * The location(s) that this service is available to (not where the service is provided).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $coverageArea
     * @return $this
     */
    public function addCoverageArea($coverageArea) {
        $this->coverageArea[] = $coverageArea;
        return $this;
    }

    /**
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceProvisionCode() {
        return $this->serviceProvisionCode;
    }

    /**
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $serviceProvisionCode
     * @return $this
     */
    public function addServiceProvisionCode($serviceProvisionCode) {
        $this->serviceProvisionCode[] = $serviceProvisionCode;
        return $this;
    }

    /**
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEligibility() {
        return $this->eligibility;
    }

    /**
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $eligibility
     * @return $this
     */
    public function setEligibility($eligibility) {
        $this->eligibility = $eligibility;
        return $this;
    }

    /**
     * Describes the eligibility conditions for the service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getEligibilityNote() {
        return $this->eligibilityNote;
    }

    /**
     * Describes the eligibility conditions for the service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $eligibilityNote
     * @return $this
     */
    public function setEligibilityNote($eligibilityNote) {
        $this->eligibilityNote = $eligibilityNote;
        return $this;
    }

    /**
     * Program Names that can be used to categorize the service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getProgramName() {
        return $this->programName;
    }

    /**
     * Program Names that can be used to categorize the service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $programName
     * @return $this
     */
    public function addProgramName($programName) {
        $this->programName[] = $programName;
        return $this;
    }

    /**
     * Collection of characteristics (attributes).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCharacteristic() {
        return $this->characteristic;
    }

    /**
     * Collection of characteristics (attributes).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $characteristic
     * @return $this
     */
    public function addCharacteristic($characteristic) {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReferralMethod() {
        return $this->referralMethod;
    }

    /**
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $referralMethod
     * @return $this
     */
    public function addReferralMethod($referralMethod) {
        $this->referralMethod[] = $referralMethod;
        return $this;
    }

    /**
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAppointmentRequired() {
        return $this->appointmentRequired;
    }

    /**
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $appointmentRequired
     * @return $this
     */
    public function setAppointmentRequired($appointmentRequired) {
        $this->appointmentRequired = $appointmentRequired;
        return $this;
    }

    /**
     * A collection of times that the Service Site is available.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[]
     */
    public function getAvailableTime() {
        return $this->availableTime;
    }

    /**
     * A collection of times that the Service Site is available.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime $availableTime
     * @return $this
     */
    public function addAvailableTime($availableTime) {
        $this->availableTime[] = $availableTime;
        return $this;
    }

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[]
     */
    public function getNotAvailable() {
        return $this->notAvailable;
    }

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable $notAvailable
     * @return $this
     */
    public function addNotAvailable($notAvailable) {
        $this->notAvailable[] = $notAvailable;
        return $this;
    }

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions() {
        return $this->availabilityExceptions;
    }

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $availabilityExceptions
     * @return $this
     */
    public function setAvailabilityExceptions($availabilityExceptions) {
        $this->availabilityExceptions = $availabilityExceptions;
        return $this;
    }

    /**
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEndpoint() {
        return $this->endpoint;
    }

    /**
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $endpoint
     * @return $this
     */
    public function addEndpoint($endpoint) {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['active'])) {
                $this->setActive($data['active']);
            }
            if (isset($data['providedBy'])) {
                $this->setProvidedBy($data['providedBy']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['type'])) {
                if (is_array($data['type'])) {
                    foreach($data['type'] as $d) {
                        $this->addType($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"type" must be array of objects or null, '.gettype($data['type']).' seen.');
                }
            }
            if (isset($data['specialty'])) {
                if (is_array($data['specialty'])) {
                    foreach($data['specialty'] as $d) {
                        $this->addSpecialty($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"specialty" must be array of objects or null, '.gettype($data['specialty']).' seen.');
                }
            }
            if (isset($data['location'])) {
                if (is_array($data['location'])) {
                    foreach($data['location'] as $d) {
                        $this->addLocation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"location" must be array of objects or null, '.gettype($data['location']).' seen.');
                }
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['extraDetails'])) {
                $this->setExtraDetails($data['extraDetails']);
            }
            if (isset($data['photo'])) {
                $this->setPhoto($data['photo']);
            }
            if (isset($data['telecom'])) {
                if (is_array($data['telecom'])) {
                    foreach($data['telecom'] as $d) {
                        $this->addTelecom($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"telecom" must be array of objects or null, '.gettype($data['telecom']).' seen.');
                }
            }
            if (isset($data['coverageArea'])) {
                if (is_array($data['coverageArea'])) {
                    foreach($data['coverageArea'] as $d) {
                        $this->addCoverageArea($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"coverageArea" must be array of objects or null, '.gettype($data['coverageArea']).' seen.');
                }
            }
            if (isset($data['serviceProvisionCode'])) {
                if (is_array($data['serviceProvisionCode'])) {
                    foreach($data['serviceProvisionCode'] as $d) {
                        $this->addServiceProvisionCode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"serviceProvisionCode" must be array of objects or null, '.gettype($data['serviceProvisionCode']).' seen.');
                }
            }
            if (isset($data['eligibility'])) {
                $this->setEligibility($data['eligibility']);
            }
            if (isset($data['eligibilityNote'])) {
                $this->setEligibilityNote($data['eligibilityNote']);
            }
            if (isset($data['programName'])) {
                if (is_array($data['programName'])) {
                    foreach($data['programName'] as $d) {
                        $this->addProgramName($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"programName" must be array of objects or null, '.gettype($data['programName']).' seen.');
                }
            }
            if (isset($data['characteristic'])) {
                if (is_array($data['characteristic'])) {
                    foreach($data['characteristic'] as $d) {
                        $this->addCharacteristic($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"characteristic" must be array of objects or null, '.gettype($data['characteristic']).' seen.');
                }
            }
            if (isset($data['referralMethod'])) {
                if (is_array($data['referralMethod'])) {
                    foreach($data['referralMethod'] as $d) {
                        $this->addReferralMethod($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"referralMethod" must be array of objects or null, '.gettype($data['referralMethod']).' seen.');
                }
            }
            if (isset($data['appointmentRequired'])) {
                $this->setAppointmentRequired($data['appointmentRequired']);
            }
            if (isset($data['availableTime'])) {
                if (is_array($data['availableTime'])) {
                    foreach($data['availableTime'] as $d) {
                        $this->addAvailableTime($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"availableTime" must be array of objects or null, '.gettype($data['availableTime']).' seen.');
                }
            }
            if (isset($data['notAvailable'])) {
                if (is_array($data['notAvailable'])) {
                    foreach($data['notAvailable'] as $d) {
                        $this->addNotAvailable($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"notAvailable" must be array of objects or null, '.gettype($data['notAvailable']).' seen.');
                }
            }
            if (isset($data['availabilityExceptions'])) {
                $this->setAvailabilityExceptions($data['availabilityExceptions']);
            }
            if (isset($data['endpoint'])) {
                if (is_array($data['endpoint'])) {
                    foreach($data['endpoint'] as $d) {
                        $this->addEndpoint($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"endpoint" must be array of objects or null, '.gettype($data['endpoint']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->active)) $json['active'] = $this->active;
        if (isset($this->providedBy)) $json['providedBy'] = $this->providedBy;
        if (isset($this->category)) $json['category'] = $this->category;
        if (0 < count($this->type)) {
            $json['type'] = [];
            foreach($this->type as $type) {
                if (null !== $type) $json['type'][] = $type;
            }
        }
        if (0 < count($this->specialty)) {
            $json['specialty'] = [];
            foreach($this->specialty as $specialty) {
                if (null !== $specialty) $json['specialty'][] = $specialty;
            }
        }
        if (0 < count($this->location)) {
            $json['location'] = [];
            foreach($this->location as $location) {
                if (null !== $location) $json['location'][] = $location;
            }
        }
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->comment)) $json['comment'] = $this->comment;
        if (isset($this->extraDetails)) $json['extraDetails'] = $this->extraDetails;
        if (isset($this->photo)) $json['photo'] = $this->photo;
        if (0 < count($this->telecom)) {
            $json['telecom'] = [];
            foreach($this->telecom as $telecom) {
                if (null !== $telecom) $json['telecom'][] = $telecom;
            }
        }
        if (0 < count($this->coverageArea)) {
            $json['coverageArea'] = [];
            foreach($this->coverageArea as $coverageArea) {
                if (null !== $coverageArea) $json['coverageArea'][] = $coverageArea;
            }
        }
        if (0 < count($this->serviceProvisionCode)) {
            $json['serviceProvisionCode'] = [];
            foreach($this->serviceProvisionCode as $serviceProvisionCode) {
                if (null !== $serviceProvisionCode) $json['serviceProvisionCode'][] = $serviceProvisionCode;
            }
        }
        if (isset($this->eligibility)) $json['eligibility'] = $this->eligibility;
        if (isset($this->eligibilityNote)) $json['eligibilityNote'] = $this->eligibilityNote;
        if (0 < count($this->programName)) {
            $json['programName'] = [];
            foreach($this->programName as $programName) {
                if (null !== $programName) $json['programName'][] = $programName;
            }
        }
        if (0 < count($this->characteristic)) {
            $json['characteristic'] = [];
            foreach($this->characteristic as $characteristic) {
                if (null !== $characteristic) $json['characteristic'][] = $characteristic;
            }
        }
        if (0 < count($this->referralMethod)) {
            $json['referralMethod'] = [];
            foreach($this->referralMethod as $referralMethod) {
                if (null !== $referralMethod) $json['referralMethod'][] = $referralMethod;
            }
        }
        if (isset($this->appointmentRequired)) $json['appointmentRequired'] = $this->appointmentRequired;
        if (0 < count($this->availableTime)) {
            $json['availableTime'] = [];
            foreach($this->availableTime as $availableTime) {
                if (null !== $availableTime) $json['availableTime'][] = $availableTime;
            }
        }
        if (0 < count($this->notAvailable)) {
            $json['notAvailable'] = [];
            foreach($this->notAvailable as $notAvailable) {
                if (null !== $notAvailable) $json['notAvailable'][] = $notAvailable;
            }
        }
        if (isset($this->availabilityExceptions)) $json['availabilityExceptions'] = $this->availabilityExceptions;
        if (0 < count($this->endpoint)) {
            $json['endpoint'] = [];
            foreach($this->endpoint as $endpoint) {
                if (null !== $endpoint) $json['endpoint'][] = $endpoint;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<HealthcareService xmlns="http://hl7.org/fhir"></HealthcareService>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->active)) $this->active->xmlSerialize(true, $sxe->addChild('active'));
        if (isset($this->providedBy)) $this->providedBy->xmlSerialize(true, $sxe->addChild('providedBy'));
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (0 < count($this->specialty)) {
            foreach($this->specialty as $specialty) {
                $specialty->xmlSerialize(true, $sxe->addChild('specialty'));
            }
        }
        if (0 < count($this->location)) {
            foreach($this->location as $location) {
                $location->xmlSerialize(true, $sxe->addChild('location'));
            }
        }
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->comment)) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if (isset($this->extraDetails)) $this->extraDetails->xmlSerialize(true, $sxe->addChild('extraDetails'));
        if (isset($this->photo)) $this->photo->xmlSerialize(true, $sxe->addChild('photo'));
        if (0 < count($this->telecom)) {
            foreach($this->telecom as $telecom) {
                $telecom->xmlSerialize(true, $sxe->addChild('telecom'));
            }
        }
        if (0 < count($this->coverageArea)) {
            foreach($this->coverageArea as $coverageArea) {
                $coverageArea->xmlSerialize(true, $sxe->addChild('coverageArea'));
            }
        }
        if (0 < count($this->serviceProvisionCode)) {
            foreach($this->serviceProvisionCode as $serviceProvisionCode) {
                $serviceProvisionCode->xmlSerialize(true, $sxe->addChild('serviceProvisionCode'));
            }
        }
        if (isset($this->eligibility)) $this->eligibility->xmlSerialize(true, $sxe->addChild('eligibility'));
        if (isset($this->eligibilityNote)) $this->eligibilityNote->xmlSerialize(true, $sxe->addChild('eligibilityNote'));
        if (0 < count($this->programName)) {
            foreach($this->programName as $programName) {
                $programName->xmlSerialize(true, $sxe->addChild('programName'));
            }
        }
        if (0 < count($this->characteristic)) {
            foreach($this->characteristic as $characteristic) {
                $characteristic->xmlSerialize(true, $sxe->addChild('characteristic'));
            }
        }
        if (0 < count($this->referralMethod)) {
            foreach($this->referralMethod as $referralMethod) {
                $referralMethod->xmlSerialize(true, $sxe->addChild('referralMethod'));
            }
        }
        if (isset($this->appointmentRequired)) $this->appointmentRequired->xmlSerialize(true, $sxe->addChild('appointmentRequired'));
        if (0 < count($this->availableTime)) {
            foreach($this->availableTime as $availableTime) {
                $availableTime->xmlSerialize(true, $sxe->addChild('availableTime'));
            }
        }
        if (0 < count($this->notAvailable)) {
            foreach($this->notAvailable as $notAvailable) {
                $notAvailable->xmlSerialize(true, $sxe->addChild('notAvailable'));
            }
        }
        if (isset($this->availabilityExceptions)) $this->availabilityExceptions->xmlSerialize(true, $sxe->addChild('availabilityExceptions'));
        if (0 < count($this->endpoint)) {
            foreach($this->endpoint as $endpoint) {
                $endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}