<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 22nd, 2019 01:52+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceEligibility;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The details of a healthcare service available at a location.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRHealthcareService
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRHealthcareService extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACTIVE = 'active';
    const FIELD_ACTIVE_EXT = '_active';
    const FIELD_APPOINTMENT_REQUIRED = 'appointmentRequired';
    const FIELD_APPOINTMENT_REQUIRED_EXT = '_appointmentRequired';
    const FIELD_AVAILABILITY_EXCEPTIONS = 'availabilityExceptions';
    const FIELD_AVAILABILITY_EXCEPTIONS_EXT = '_availabilityExceptions';
    const FIELD_AVAILABLE_TIME = 'availableTime';
    const FIELD_CATEGORY = 'category';
    const FIELD_CHARACTERISTIC = 'characteristic';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_COMMUNICATION = 'communication';
    const FIELD_COVERAGE_AREA = 'coverageArea';
    const FIELD_ELIGIBILITY = 'eligibility';
    const FIELD_ENDPOINT = 'endpoint';
    const FIELD_EXTRA_DETAILS = 'extraDetails';
    const FIELD_EXTRA_DETAILS_EXT = '_extraDetails';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_LOCATION = 'location';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_NOT_AVAILABLE = 'notAvailable';
    const FIELD_PHOTO = 'photo';
    const FIELD_PROGRAM = 'program';
    const FIELD_PROVIDED_BY = 'providedBy';
    const FIELD_REFERRAL_METHOD = 'referralMethod';
    const FIELD_SERVICE_PROVISION_CODE = 'serviceProvisionCode';
    const FIELD_SPECIALTY = 'specialty';
    const FIELD_TELECOM = 'telecom';
    const FIELD_TELECOM_EXT = '_telecom';
    const FIELD_TYPE = 'type';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This flag is used to mark the record to not be used. This is not used when a
     * center is closed for maintenance, or for holidays, the notAvailable period is to
     * be used for this.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $active = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether or not a prospective consumer will require an appointment for
     * a particular service at a site to be provided by the Organization. Indicates if
     * an appointment is required for access to this service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $appointmentRequired = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of site availability exceptions, e.g. public holiday availability.
     * Succinctly describing all possible exceptions to normal site availability as
     * details in the available Times and not available Times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $availabilityExceptions = null;
    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[]
     */
    private $availableTime = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the broad category of service being performed or delivered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $category = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Collection of characteristics (attributes).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $characteristic = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Any additional description of the service and/or any specific issues not covered
     * by the other attributes, which can be displayed as further detail under the
     * serviceName.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $comment = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Some services are specifically made available in multiple languages, this
     * property permits a directory to declare the languages this is offered in.
     * Typically this is only provided where a service operates in communities with
     * mixed languages used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $communication = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location(s) that this service is available to (not where the service is
     * provided).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $coverageArea = [];
    /**
     * The details of a healthcare service available at a location.
     *
     * Does this service have specific eligibility requirements that need to be met in
     * order to use the service?
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceEligibility[]
     */
    private $eligibility = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the specific
     * healthcare services defined at this resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $endpoint = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Extra details about the service that can't be placed in the other fields.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    private $extraDetails = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location(s) where this healthcare service may be provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $location = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Further description of the service as it would be presented to a consumer while
     * searching.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $name = null;
    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[]
     */
    private $notAvailable = [];
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If there is a photo/symbol associated with this HealthcareService, it may be
     * included here to facilitate quick identification of the service in a list.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    private $photo = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Programs that this service is applicable to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $program = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that provides this healthcare service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $providedBy = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Ways that the service accepts referrals, if this is not provided then it is
     * implied that no referral is required.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $referralMethod = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The code(s) that detail the conditions under which the healthcare service is
     * available/offered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $serviceProvisionCode = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Collection of specialties handled by the service site. This is more of a medical
     * term.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $specialty = [];
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * List of contacts related to this specific healthcare service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[]
     */
    private $telecom = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific type of service that may be delivered or performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $type = [];

    /**
     * FHIRHealthcareService Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHealthcareService::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTIVE])) {
            $ext = (isset($data[self::FIELD_ACTIVE_EXT]) && is_array($data[self::FIELD_ACTIVE_EXT]))
                ? $data[self::FIELD_ACTIVE_EXT]
                : null;
            if ($data[self::FIELD_ACTIVE] instanceof FHIRBoolean) {
                $this->setActive($data[self::FIELD_ACTIVE]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACTIVE])) {
                $this->setActive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ACTIVE]] + $ext));
            } else {
                $this->setActive(new FHIRBoolean($data[self::FIELD_ACTIVE]));
            }
        }
        if (isset($data[self::FIELD_APPOINTMENT_REQUIRED])) {
            $ext = (isset($data[self::FIELD_APPOINTMENT_REQUIRED_EXT]) && is_array($data[self::FIELD_APPOINTMENT_REQUIRED_EXT]))
                ? $data[self::FIELD_APPOINTMENT_REQUIRED_EXT]
                : null;
            if ($data[self::FIELD_APPOINTMENT_REQUIRED] instanceof FHIRBoolean) {
                $this->setAppointmentRequired($data[self::FIELD_APPOINTMENT_REQUIRED]);
            } elseif ($ext && is_scalar($data[self::FIELD_APPOINTMENT_REQUIRED])) {
                $this->setAppointmentRequired(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_APPOINTMENT_REQUIRED]] + $ext));
            } else {
                $this->setAppointmentRequired(new FHIRBoolean($data[self::FIELD_APPOINTMENT_REQUIRED]));
            }
        }
        if (isset($data[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
            $ext = (isset($data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT]) && is_array($data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT]))
                ? $data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT]
                : null;
            if ($data[self::FIELD_AVAILABILITY_EXCEPTIONS] instanceof FHIRString) {
                $this->setAvailabilityExceptions($data[self::FIELD_AVAILABILITY_EXCEPTIONS]);
            } elseif ($ext && is_scalar($data[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
                $this->setAvailabilityExceptions(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_AVAILABILITY_EXCEPTIONS]] + $ext));
            } else {
                $this->setAvailabilityExceptions(new FHIRString($data[self::FIELD_AVAILABILITY_EXCEPTIONS]));
            }
        }
        if (isset($data[self::FIELD_AVAILABLE_TIME])) {
            if (is_array($data[self::FIELD_AVAILABLE_TIME])) {
                foreach($data[self::FIELD_AVAILABLE_TIME] as $v) {
                    if ($v instanceof FHIRHealthcareServiceAvailableTime) {
                        $this->addAvailableTime($v);
                    } else {
                        $this->addAvailableTime(new FHIRHealthcareServiceAvailableTime($v));
                    }
                }
            } else if ($data[self::FIELD_AVAILABLE_TIME] instanceof FHIRHealthcareServiceAvailableTime) {
                $this->addAvailableTime($data[self::FIELD_AVAILABLE_TIME]);
            } else {
                $this->addAvailableTime(new FHIRHealthcareServiceAvailableTime($data[self::FIELD_AVAILABLE_TIME]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CHARACTERISTIC])) {
            if (is_array($data[self::FIELD_CHARACTERISTIC])) {
                foreach($data[self::FIELD_CHARACTERISTIC] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCharacteristic($v);
                    } else {
                        $this->addCharacteristic(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CHARACTERISTIC] instanceof FHIRCodeableConcept) {
                $this->addCharacteristic($data[self::FIELD_CHARACTERISTIC]);
            } else {
                $this->addCharacteristic(new FHIRCodeableConcept($data[self::FIELD_CHARACTERISTIC]));
            }
        }
        if (isset($data[self::FIELD_COMMENT])) {
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT]))
                ? $data[self::FIELD_COMMENT_EXT]
                : null;
            if ($data[self::FIELD_COMMENT] instanceof FHIRString) {
                $this->setComment($data[self::FIELD_COMMENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_COMMENT])) {
                $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COMMENT]] + $ext));
            } else {
                $this->setComment(new FHIRString($data[self::FIELD_COMMENT]));
            }
        }
        if (isset($data[self::FIELD_COMMUNICATION])) {
            if (is_array($data[self::FIELD_COMMUNICATION])) {
                foreach($data[self::FIELD_COMMUNICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCommunication($v);
                    } else {
                        $this->addCommunication(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COMMUNICATION] instanceof FHIRCodeableConcept) {
                $this->addCommunication($data[self::FIELD_COMMUNICATION]);
            } else {
                $this->addCommunication(new FHIRCodeableConcept($data[self::FIELD_COMMUNICATION]));
            }
        }
        if (isset($data[self::FIELD_COVERAGE_AREA])) {
            if (is_array($data[self::FIELD_COVERAGE_AREA])) {
                foreach($data[self::FIELD_COVERAGE_AREA] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addCoverageArea($v);
                    } else {
                        $this->addCoverageArea(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_COVERAGE_AREA] instanceof FHIRReference) {
                $this->addCoverageArea($data[self::FIELD_COVERAGE_AREA]);
            } else {
                $this->addCoverageArea(new FHIRReference($data[self::FIELD_COVERAGE_AREA]));
            }
        }
        if (isset($data[self::FIELD_ELIGIBILITY])) {
            if (is_array($data[self::FIELD_ELIGIBILITY])) {
                foreach($data[self::FIELD_ELIGIBILITY] as $v) {
                    if ($v instanceof FHIRHealthcareServiceEligibility) {
                        $this->addEligibility($v);
                    } else {
                        $this->addEligibility(new FHIRHealthcareServiceEligibility($v));
                    }
                }
            } else if ($data[self::FIELD_ELIGIBILITY] instanceof FHIRHealthcareServiceEligibility) {
                $this->addEligibility($data[self::FIELD_ELIGIBILITY]);
            } else {
                $this->addEligibility(new FHIRHealthcareServiceEligibility($data[self::FIELD_ELIGIBILITY]));
            }
        }
        if (isset($data[self::FIELD_ENDPOINT])) {
            if (is_array($data[self::FIELD_ENDPOINT])) {
                foreach($data[self::FIELD_ENDPOINT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEndpoint($v);
                    } else {
                        $this->addEndpoint(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ENDPOINT] instanceof FHIRReference) {
                $this->addEndpoint($data[self::FIELD_ENDPOINT]);
            } else {
                $this->addEndpoint(new FHIRReference($data[self::FIELD_ENDPOINT]));
            }
        }
        if (isset($data[self::FIELD_EXTRA_DETAILS])) {
            $ext = (isset($data[self::FIELD_EXTRA_DETAILS_EXT]) && is_array($data[self::FIELD_EXTRA_DETAILS_EXT]))
                ? $data[self::FIELD_EXTRA_DETAILS_EXT]
                : null;
            if ($data[self::FIELD_EXTRA_DETAILS] instanceof FHIRMarkdown) {
                $this->setExtraDetails($data[self::FIELD_EXTRA_DETAILS]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXTRA_DETAILS])) {
                $this->setExtraDetails(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_EXTRA_DETAILS]] + $ext));
            } else {
                $this->setExtraDetails(new FHIRMarkdown($data[self::FIELD_EXTRA_DETAILS]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if (is_array($data[self::FIELD_LOCATION])) {
                foreach($data[self::FIELD_LOCATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addLocation($v);
                    } else {
                        $this->addLocation(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->addLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->addLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_NOT_AVAILABLE])) {
            if (is_array($data[self::FIELD_NOT_AVAILABLE])) {
                foreach($data[self::FIELD_NOT_AVAILABLE] as $v) {
                    if ($v instanceof FHIRHealthcareServiceNotAvailable) {
                        $this->addNotAvailable($v);
                    } else {
                        $this->addNotAvailable(new FHIRHealthcareServiceNotAvailable($v));
                    }
                }
            } else if ($data[self::FIELD_NOT_AVAILABLE] instanceof FHIRHealthcareServiceNotAvailable) {
                $this->addNotAvailable($data[self::FIELD_NOT_AVAILABLE]);
            } else {
                $this->addNotAvailable(new FHIRHealthcareServiceNotAvailable($data[self::FIELD_NOT_AVAILABLE]));
            }
        }
        if (isset($data[self::FIELD_PHOTO])) {
            if ($data[self::FIELD_PHOTO] instanceof FHIRAttachment) {
                $this->setPhoto($data[self::FIELD_PHOTO]);
            } else {
                $this->setPhoto(new FHIRAttachment($data[self::FIELD_PHOTO]));
            }
        }
        if (isset($data[self::FIELD_PROGRAM])) {
            if (is_array($data[self::FIELD_PROGRAM])) {
                foreach($data[self::FIELD_PROGRAM] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addProgram($v);
                    } else {
                        $this->addProgram(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PROGRAM] instanceof FHIRCodeableConcept) {
                $this->addProgram($data[self::FIELD_PROGRAM]);
            } else {
                $this->addProgram(new FHIRCodeableConcept($data[self::FIELD_PROGRAM]));
            }
        }
        if (isset($data[self::FIELD_PROVIDED_BY])) {
            if ($data[self::FIELD_PROVIDED_BY] instanceof FHIRReference) {
                $this->setProvidedBy($data[self::FIELD_PROVIDED_BY]);
            } else {
                $this->setProvidedBy(new FHIRReference($data[self::FIELD_PROVIDED_BY]));
            }
        }
        if (isset($data[self::FIELD_REFERRAL_METHOD])) {
            if (is_array($data[self::FIELD_REFERRAL_METHOD])) {
                foreach($data[self::FIELD_REFERRAL_METHOD] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReferralMethod($v);
                    } else {
                        $this->addReferralMethod(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REFERRAL_METHOD] instanceof FHIRCodeableConcept) {
                $this->addReferralMethod($data[self::FIELD_REFERRAL_METHOD]);
            } else {
                $this->addReferralMethod(new FHIRCodeableConcept($data[self::FIELD_REFERRAL_METHOD]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_PROVISION_CODE])) {
            if (is_array($data[self::FIELD_SERVICE_PROVISION_CODE])) {
                foreach($data[self::FIELD_SERVICE_PROVISION_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addServiceProvisionCode($v);
                    } else {
                        $this->addServiceProvisionCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SERVICE_PROVISION_CODE] instanceof FHIRCodeableConcept) {
                $this->addServiceProvisionCode($data[self::FIELD_SERVICE_PROVISION_CODE]);
            } else {
                $this->addServiceProvisionCode(new FHIRCodeableConcept($data[self::FIELD_SERVICE_PROVISION_CODE]));
            }
        }
        if (isset($data[self::FIELD_SPECIALTY])) {
            if (is_array($data[self::FIELD_SPECIALTY])) {
                foreach($data[self::FIELD_SPECIALTY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialty($v);
                    } else {
                        $this->addSpecialty(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SPECIALTY] instanceof FHIRCodeableConcept) {
                $this->addSpecialty($data[self::FIELD_SPECIALTY]);
            } else {
                $this->addSpecialty(new FHIRCodeableConcept($data[self::FIELD_SPECIALTY]));
            }
        }
        if (isset($data[self::FIELD_TELECOM])) {
            $ext = (isset($data[self::FIELD_TELECOM_EXT]) && is_array($data[self::FIELD_TELECOM_EXT]))
                ? $data[self::FIELD_TELECOM_EXT]
                : null;
            if (is_array($data[self::FIELD_TELECOM])) {
                foreach($data[self::FIELD_TELECOM] as $i => $v) {
                    if ($v instanceof FHIRContactPoint) {
                        $this->addTelecom($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addTelecom(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addTelecom(new FHIRContactPoint($v));
                    }
                }
            } elseif ($data[self::FIELD_TELECOM] instanceof FHIRContactPoint) {
                $this->addTelecom($data[self::FIELD_TELECOM]);
            } elseif ($ext && is_scalar($data[self::FIELD_TELECOM])) {
                $this->addTelecom(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $data[self::FIELD_TELECOM]] + $ext));
            } else {
                $this->addTelecom(new FHIRContactPoint($data[self::FIELD_TELECOM]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<HealthcareService{$xmlns}></HealthcareService>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This flag is used to mark the record to not be used. This is not used when a
     * center is closed for maintenance, or for holidays, the notAvailable period is to
     * be used for this.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This flag is used to mark the record to not be used. This is not used when a
     * center is closed for maintenance, or for holidays, the notAvailable period is to
     * be used for this.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $active
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setActive($active = null)
    {
        if (null === $active) {
            $this->active = null;
            return $this;
        }
        if ($active instanceof FHIRBoolean) {
            $this->active = $active;
            return $this;
        }
        $this->active = new FHIRBoolean($active);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether or not a prospective consumer will require an appointment for
     * a particular service at a site to be provided by the Organization. Indicates if
     * an appointment is required for access to this service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getAppointmentRequired()
    {
        return $this->appointmentRequired;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether or not a prospective consumer will require an appointment for
     * a particular service at a site to be provided by the Organization. Indicates if
     * an appointment is required for access to this service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $appointmentRequired
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setAppointmentRequired($appointmentRequired = null)
    {
        if (null === $appointmentRequired) {
            $this->appointmentRequired = null;
            return $this;
        }
        if ($appointmentRequired instanceof FHIRBoolean) {
            $this->appointmentRequired = $appointmentRequired;
            return $this;
        }
        $this->appointmentRequired = new FHIRBoolean($appointmentRequired);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of site availability exceptions, e.g. public holiday availability.
     * Succinctly describing all possible exceptions to normal site availability as
     * details in the available Times and not available Times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions()
    {
        return $this->availabilityExceptions;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of site availability exceptions, e.g. public holiday availability.
     * Succinctly describing all possible exceptions to normal site availability as
     * details in the available Times and not available Times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $availabilityExceptions
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setAvailabilityExceptions($availabilityExceptions = null)
    {
        if (null === $availabilityExceptions) {
            $this->availabilityExceptions = null;
            return $this;
        }
        if ($availabilityExceptions instanceof FHIRString) {
            $this->availabilityExceptions = $availabilityExceptions;
            return $this;
        }
        $this->availabilityExceptions = new FHIRString($availabilityExceptions);
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[]
     */
    public function getAvailableTime()
    {
        return $this->availableTime;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime $availableTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addAvailableTime(FHIRHealthcareServiceAvailableTime $availableTime = null)
    {
        $this->availableTime[] = $availableTime;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[] $availableTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setAvailableTime(array $availableTime = [])
    {
        $this->availableTime = [];
        if ([] === $availableTime) {
            return $this;
        }
        foreach($availableTime as $v) {
            if ($v instanceof FHIRHealthcareServiceAvailableTime) {
                $this->addAvailableTime($v);
            } else {
                $this->addAvailableTime(new FHIRHealthcareServiceAvailableTime($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the broad category of service being performed or delivered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the broad category of service being performed or delivered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $category
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addCategory(FHIRCodeableConcept $category = null)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the broad category of service being performed or delivered.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $category
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setCategory(array $category = [])
    {
        $this->category = [];
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Collection of characteristics (attributes).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Collection of characteristics (attributes).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $characteristic
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addCharacteristic(FHIRCodeableConcept $characteristic = null)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Collection of characteristics (attributes).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $characteristic
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setCharacteristic(array $characteristic = [])
    {
        $this->characteristic = [];
        if ([] === $characteristic) {
            return $this;
        }
        foreach($characteristic as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCharacteristic($v);
            } else {
                $this->addCharacteristic(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Any additional description of the service and/or any specific issues not covered
     * by the other attributes, which can be displayed as further detail under the
     * serviceName.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Any additional description of the service and/or any specific issues not covered
     * by the other attributes, which can be displayed as further detail under the
     * serviceName.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $comment
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setComment($comment = null)
    {
        if (null === $comment) {
            $this->comment = null;
            return $this;
        }
        if ($comment instanceof FHIRString) {
            $this->comment = $comment;
            return $this;
        }
        $this->comment = new FHIRString($comment);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Some services are specifically made available in multiple languages, this
     * property permits a directory to declare the languages this is offered in.
     * Typically this is only provided where a service operates in communities with
     * mixed languages used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Some services are specifically made available in multiple languages, this
     * property permits a directory to declare the languages this is offered in.
     * Typically this is only provided where a service operates in communities with
     * mixed languages used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $communication
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addCommunication(FHIRCodeableConcept $communication = null)
    {
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Some services are specifically made available in multiple languages, this
     * property permits a directory to declare the languages this is offered in.
     * Typically this is only provided where a service operates in communities with
     * mixed languages used.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $communication
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setCommunication(array $communication = [])
    {
        $this->communication = [];
        if ([] === $communication) {
            return $this;
        }
        foreach($communication as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCommunication($v);
            } else {
                $this->addCommunication(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location(s) that this service is available to (not where the service is
     * provided).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getCoverageArea()
    {
        return $this->coverageArea;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location(s) that this service is available to (not where the service is
     * provided).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $coverageArea
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addCoverageArea(FHIRReference $coverageArea = null)
    {
        $this->coverageArea[] = $coverageArea;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location(s) that this service is available to (not where the service is
     * provided).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $coverageArea
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setCoverageArea(array $coverageArea = [])
    {
        $this->coverageArea = [];
        if ([] === $coverageArea) {
            return $this;
        }
        foreach($coverageArea as $v) {
            if ($v instanceof FHIRReference) {
                $this->addCoverageArea($v);
            } else {
                $this->addCoverageArea(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * Does this service have specific eligibility requirements that need to be met in
     * order to use the service?
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceEligibility[]
     */
    public function getEligibility()
    {
        return $this->eligibility;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * Does this service have specific eligibility requirements that need to be met in
     * order to use the service?
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceEligibility $eligibility
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addEligibility(FHIRHealthcareServiceEligibility $eligibility = null)
    {
        $this->eligibility[] = $eligibility;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * Does this service have specific eligibility requirements that need to be met in
     * order to use the service?
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceEligibility[] $eligibility
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setEligibility(array $eligibility = [])
    {
        $this->eligibility = [];
        if ([] === $eligibility) {
            return $this;
        }
        foreach($eligibility as $v) {
            if ($v instanceof FHIRHealthcareServiceEligibility) {
                $this->addEligibility($v);
            } else {
                $this->addEligibility(new FHIRHealthcareServiceEligibility($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the specific
     * healthcare services defined at this resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the specific
     * healthcare services defined at this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $endpoint
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addEndpoint(FHIRReference $endpoint = null)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Technical endpoints providing access to services operated for the specific
     * healthcare services defined at this resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $endpoint
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setEndpoint(array $endpoint = [])
    {
        $this->endpoint = [];
        if ([] === $endpoint) {
            return $this;
        }
        foreach($endpoint as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEndpoint($v);
            } else {
                $this->addEndpoint(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Extra details about the service that can't be placed in the other fields.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Extra details about the service that can't be placed in the other fields.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $extraDetails
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setExtraDetails($extraDetails = null)
    {
        if (null === $extraDetails) {
            $this->extraDetails = null;
            return $this;
        }
        if ($extraDetails instanceof FHIRMarkdown) {
            $this->extraDetails = $extraDetails;
            return $this;
        }
        $this->extraDetails = new FHIRMarkdown($extraDetails);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location(s) where this healthcare service may be provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location(s) where this healthcare service may be provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $location
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addLocation(FHIRReference $location = null)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The location(s) where this healthcare service may be provided.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $location
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setLocation(array $location = [])
    {
        $this->location = [];
        if ([] === $location) {
            return $this;
        }
        foreach($location as $v) {
            if ($v instanceof FHIRReference) {
                $this->addLocation($v);
            } else {
                $this->addLocation(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Further description of the service as it would be presented to a consumer while
     * searching.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Further description of the service as it would be presented to a consumer while
     * searching.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[]
     */
    public function getNotAvailable()
    {
        return $this->notAvailable;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable $notAvailable
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addNotAvailable(FHIRHealthcareServiceNotAvailable $notAvailable = null)
    {
        $this->notAvailable[] = $notAvailable;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[] $notAvailable
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setNotAvailable(array $notAvailable = [])
    {
        $this->notAvailable = [];
        if ([] === $notAvailable) {
            return $this;
        }
        foreach($notAvailable as $v) {
            if ($v instanceof FHIRHealthcareServiceNotAvailable) {
                $this->addNotAvailable($v);
            } else {
                $this->addNotAvailable(new FHIRHealthcareServiceNotAvailable($v));
            }
        }
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If there is a photo/symbol associated with this HealthcareService, it may be
     * included here to facilitate quick identification of the service in a list.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If there is a photo/symbol associated with this HealthcareService, it may be
     * included here to facilitate quick identification of the service in a list.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment $photo
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setPhoto(FHIRAttachment $photo = null)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Programs that this service is applicable to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Programs that this service is applicable to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $program
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addProgram(FHIRCodeableConcept $program = null)
    {
        $this->program[] = $program;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Programs that this service is applicable to.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $program
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setProgram(array $program = [])
    {
        $this->program = [];
        if ([] === $program) {
            return $this;
        }
        foreach($program as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addProgram($v);
            } else {
                $this->addProgram(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that provides this healthcare service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getProvidedBy()
    {
        return $this->providedBy;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that provides this healthcare service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $providedBy
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setProvidedBy(FHIRReference $providedBy = null)
    {
        $this->providedBy = $providedBy;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Ways that the service accepts referrals, if this is not provided then it is
     * implied that no referral is required.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReferralMethod()
    {
        return $this->referralMethod;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Ways that the service accepts referrals, if this is not provided then it is
     * implied that no referral is required.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $referralMethod
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addReferralMethod(FHIRCodeableConcept $referralMethod = null)
    {
        $this->referralMethod[] = $referralMethod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Ways that the service accepts referrals, if this is not provided then it is
     * implied that no referral is required.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $referralMethod
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setReferralMethod(array $referralMethod = [])
    {
        $this->referralMethod = [];
        if ([] === $referralMethod) {
            return $this;
        }
        foreach($referralMethod as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReferralMethod($v);
            } else {
                $this->addReferralMethod(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The code(s) that detail the conditions under which the healthcare service is
     * available/offered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceProvisionCode()
    {
        return $this->serviceProvisionCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The code(s) that detail the conditions under which the healthcare service is
     * available/offered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $serviceProvisionCode
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addServiceProvisionCode(FHIRCodeableConcept $serviceProvisionCode = null)
    {
        $this->serviceProvisionCode[] = $serviceProvisionCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The code(s) that detail the conditions under which the healthcare service is
     * available/offered.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $serviceProvisionCode
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setServiceProvisionCode(array $serviceProvisionCode = [])
    {
        $this->serviceProvisionCode = [];
        if ([] === $serviceProvisionCode) {
            return $this;
        }
        foreach($serviceProvisionCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addServiceProvisionCode($v);
            } else {
                $this->addServiceProvisionCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Collection of specialties handled by the service site. This is more of a medical
     * term.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Collection of specialties handled by the service site. This is more of a medical
     * term.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $specialty
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addSpecialty(FHIRCodeableConcept $specialty = null)
    {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Collection of specialties handled by the service site. This is more of a medical
     * term.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $specialty
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setSpecialty(array $specialty = [])
    {
        $this->specialty = [];
        if ([] === $specialty) {
            return $this;
        }
        foreach($specialty as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSpecialty($v);
            } else {
                $this->addSpecialty(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * List of contacts related to this specific healthcare service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * List of contacts related to this specific healthcare service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint $telecom
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addTelecom(FHIRContactPoint $telecom = null)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * List of contacts related to this specific healthcare service.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactPoint[] $telecom
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setTelecom(array $telecom = [])
    {
        $this->telecom = [];
        if ([] === $telecom) {
            return $this;
        }
        foreach($telecom as $v) {
            if ($v instanceof FHIRContactPoint) {
                $this->addTelecom($v);
            } else {
                $this->addTelecom(new FHIRContactPoint($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific type of service that may be delivered or performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific type of service that may be delivered or performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function addType(FHIRCodeableConcept $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific type of service that may be delivered or performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRHealthcareService::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRHealthcareService::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRHealthcareService;
        } elseif (!is_object($type) || !($type instanceof FHIRHealthcareService)) {
            throw new \RuntimeException(sprintf(
                'FHIRHealthcareService::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->active)) {
            $type->setActive((string)$attributes->active);
        }
        if (isset($children->active)) {
            $type->setActive(FHIRBoolean::xmlUnserialize($children->active));
        }
        if (isset($attributes->appointmentRequired)) {
            $type->setAppointmentRequired((string)$attributes->appointmentRequired);
        }
        if (isset($children->appointmentRequired)) {
            $type->setAppointmentRequired(FHIRBoolean::xmlUnserialize($children->appointmentRequired));
        }
        if (isset($attributes->availabilityExceptions)) {
            $type->setAvailabilityExceptions((string)$attributes->availabilityExceptions);
        }
        if (isset($children->availabilityExceptions)) {
            $type->setAvailabilityExceptions(FHIRString::xmlUnserialize($children->availabilityExceptions));
        }
        if (isset($children->availableTime)) {
            foreach($children->availableTime as $child) {
                $type->addAvailableTime(FHIRHealthcareServiceAvailableTime::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->characteristic)) {
            foreach($children->characteristic as $child) {
                $type->addCharacteristic(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->comment)) {
            $type->setComment((string)$attributes->comment);
        }
        if (isset($children->comment)) {
            $type->setComment(FHIRString::xmlUnserialize($children->comment));
        }
        if (isset($children->communication)) {
            foreach($children->communication as $child) {
                $type->addCommunication(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->coverageArea)) {
            foreach($children->coverageArea as $child) {
                $type->addCoverageArea(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->eligibility)) {
            foreach($children->eligibility as $child) {
                $type->addEligibility(FHIRHealthcareServiceEligibility::xmlUnserialize($child));
            }
        }
        if (isset($children->endpoint)) {
            foreach($children->endpoint as $child) {
                $type->addEndpoint(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->extraDetails)) {
            $type->setExtraDetails((string)$attributes->extraDetails);
        }
        if (isset($children->extraDetails)) {
            $type->setExtraDetails(FHIRMarkdown::xmlUnserialize($children->extraDetails));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->location)) {
            foreach($children->location as $child) {
                $type->addLocation(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->notAvailable)) {
            foreach($children->notAvailable as $child) {
                $type->addNotAvailable(FHIRHealthcareServiceNotAvailable::xmlUnserialize($child));
            }
        }
        if (isset($children->photo)) {
            $type->setPhoto(FHIRAttachment::xmlUnserialize($children->photo));
        }
        if (isset($children->program)) {
            foreach($children->program as $child) {
                $type->addProgram(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->providedBy)) {
            $type->setProvidedBy(FHIRReference::xmlUnserialize($children->providedBy));
        }
        if (isset($children->referralMethod)) {
            foreach($children->referralMethod as $child) {
                $type->addReferralMethod(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->serviceProvisionCode)) {
            foreach($children->serviceProvisionCode as $child) {
                $type->addServiceProvisionCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->specialty)) {
            foreach($children->specialty as $child) {
                $type->addSpecialty(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->telecom)) {
            foreach($children->telecom as $child) {
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getActive())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTIVE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAppointmentRequired())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_APPOINTMENT_REQUIRED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AVAILABILITY_EXCEPTIONS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getAvailableTime())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AVAILABLE_TIME, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getCharacteristic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CHARACTERISTIC, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getComment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENT, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getCommunication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMMUNICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getCoverageArea())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COVERAGE_AREA, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getEligibility())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ELIGIBILITY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getEndpoint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENDPOINT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getExtraDetails())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXTRA_DETAILS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getLocation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getNotAvailable())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOT_AVAILABLE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getPhoto())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PHOTO, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getProgram())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROGRAM, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getProvidedBy())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROVIDED_BY, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getReferralMethod())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERRAL_METHOD, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getServiceProvisionCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_PROVISION_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getSpecialty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIALTY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getTelecom())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TELECOM, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getActive())) {
            $a[self::FIELD_ACTIVE] = $v->getValue();
            $a[self::FIELD_ACTIVE_EXT] = $v;
        }
        if (null !== ($v = $this->getAppointmentRequired())) {
            $a[self::FIELD_APPOINTMENT_REQUIRED] = $v->getValue();
            $a[self::FIELD_APPOINTMENT_REQUIRED_EXT] = $v;
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            $a[self::FIELD_AVAILABILITY_EXCEPTIONS] = $v->getValue();
            $a[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT] = $v;
        }
        if ([] !== ($vs = $this->getAvailableTime())) {
            $a[self::FIELD_AVAILABLE_TIME] = $vs;
        }
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $vs;
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            $a[self::FIELD_CHARACTERISTIC] = $vs;
        }
        if (null !== ($v = $this->getComment())) {
            $a[self::FIELD_COMMENT] = $v->getValue();
            $a[self::FIELD_COMMENT_EXT] = $v;
        }
        if ([] !== ($vs = $this->getCommunication())) {
            $a[self::FIELD_COMMUNICATION] = $vs;
        }
        if ([] !== ($vs = $this->getCoverageArea())) {
            $a[self::FIELD_COVERAGE_AREA] = $vs;
        }
        if ([] !== ($vs = $this->getEligibility())) {
            $a[self::FIELD_ELIGIBILITY] = $vs;
        }
        if ([] !== ($vs = $this->getEndpoint())) {
            $a[self::FIELD_ENDPOINT] = $vs;
        }
        if (null !== ($v = $this->getExtraDetails())) {
            $a[self::FIELD_EXTRA_DETAILS] = $v->getValue();
            $a[self::FIELD_EXTRA_DETAILS_EXT] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getNotAvailable())) {
            $a[self::FIELD_NOT_AVAILABLE] = $vs;
        }
        if (null !== ($v = $this->getPhoto())) {
            $a[self::FIELD_PHOTO] = $v;
        }
        if ([] !== ($vs = $this->getProgram())) {
            $a[self::FIELD_PROGRAM] = $vs;
        }
        if (null !== ($v = $this->getProvidedBy())) {
            $a[self::FIELD_PROVIDED_BY] = $v;
        }
        if ([] !== ($vs = $this->getReferralMethod())) {
            $a[self::FIELD_REFERRAL_METHOD] = $vs;
        }
        if ([] !== ($vs = $this->getServiceProvisionCode())) {
            $a[self::FIELD_SERVICE_PROVISION_CODE] = $vs;
        }
        if ([] !== ($vs = $this->getSpecialty())) {
            $a[self::FIELD_SPECIALTY] = $vs;
        }
        if ([] !== ($vs = $this->getTelecom())) {
            $a[self::FIELD_TELECOM] = $vs;
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}