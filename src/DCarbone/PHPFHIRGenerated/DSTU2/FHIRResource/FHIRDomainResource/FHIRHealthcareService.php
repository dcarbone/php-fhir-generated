<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:21+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * The details of a healthcare service available at a location.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRHealthcareService
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRHealthcareService extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE;
    const FIELD_APPOINTMENT_REQUIRED = 'appointmentRequired';
    const FIELD_APPOINTMENT_REQUIRED_EXT = '_appointmentRequired';
    const FIELD_AVAILABILITY_EXCEPTIONS = 'availabilityExceptions';
    const FIELD_AVAILABILITY_EXCEPTIONS_EXT = '_availabilityExceptions';
    const FIELD_AVAILABLE_TIME = 'availableTime';
    const FIELD_CHARACTERISTIC = 'characteristic';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_COVERAGE_AREA = 'coverageArea';
    const FIELD_ELIGIBILITY = 'eligibility';
    const FIELD_ELIGIBILITY_NOTE = 'eligibilityNote';
    const FIELD_ELIGIBILITY_NOTE_EXT = '_eligibilityNote';
    const FIELD_EXTRA_DETAILS = 'extraDetails';
    const FIELD_EXTRA_DETAILS_EXT = '_extraDetails';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_LOCATION = 'location';
    const FIELD_NOT_AVAILABLE = 'notAvailable';
    const FIELD_PHOTO = 'photo';
    const FIELD_PROGRAM_NAME = 'programName';
    const FIELD_PROGRAM_NAME_EXT = '_programName';
    const FIELD_PROVIDED_BY = 'providedBy';
    const FIELD_PUBLIC_KEY = 'publicKey';
    const FIELD_PUBLIC_KEY_EXT = '_publicKey';
    const FIELD_REFERRAL_METHOD = 'referralMethod';
    const FIELD_SERVICE_CATEGORY = 'serviceCategory';
    const FIELD_SERVICE_NAME = 'serviceName';
    const FIELD_SERVICE_NAME_EXT = '_serviceName';
    const FIELD_SERVICE_PROVISION_CODE = 'serviceProvisionCode';
    const FIELD_SERVICE_TYPE = 'serviceType';
    const FIELD_TELECOM = 'telecom';
    const FIELD_TELECOM_EXT = '_telecom';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether or not a prospective consumer will require an appointment for
     * a particular service at a site to be provided by the Organization. Indicates if
     * an appointment is required for access to this service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $appointmentRequired = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of site availability exceptions, e.g. public holiday availability.
     * Succinctly describing all possible exceptions to normal site availability as
     * details in the available Times and not available Times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $availabilityExceptions = null;

    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[]
     */
    protected $availableTime = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Collection of characteristics (attributes).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $characteristic = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any additional description of the service and/or any specific issues not covered
     * by the other attributes, which can be displayed as further detail under the
     * serviceName.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $comment = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location(s) that this service is available to (not where the service is
     * provided).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $coverageArea = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Does this service have specific eligibility requirements that need to be met in
     * order to use the service?
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $eligibility = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the eligibility conditions for the service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $eligibilityNote = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra details about the service that can't be placed in the other fields.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $extraDetails = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where this healthcare service may be provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $location = null;

    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[]
     */
    protected $notAvailable = [];

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If there is a photo/symbol associated with this HealthcareService, it may be
     * included here to facilitate quick identification of the service in a list.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment
     */
    protected $photo = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Program Names that can be used to categorize the service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    protected $programName = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that provides this healthcare service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $providedBy = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The public part of the 'keys' allocated to an Organization by an accredited body
     * to support secure exchange of data over the internet. To be provided by the
     * Organization, where available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $publicKey = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ways that the service accepts referrals, if this is not provided then it is
     * implied that no referral is required.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $referralMethod = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the broad category of service being performed or delivered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $serviceCategory = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Further description of the service as it would be presented to a consumer while
     * searching.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $serviceName = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The code(s) that detail the conditions under which the healthcare service is
     * available/offered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $serviceProvisionCode = [];

    /**
     * The details of a healthcare service available at a location.
     *
     * A specific type of service that may be delivered or performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType[]
     */
    protected $serviceType = [];

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of contacts related to this specific healthcare service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint[]
     */
    protected $telecom = [];

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

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
        if (isset($data[self::FIELD_APPOINTMENT_REQUIRED])) {
            $ext = (isset($data[self::FIELD_APPOINTMENT_REQUIRED_EXT]) && is_array($data[self::FIELD_APPOINTMENT_REQUIRED_EXT]))
                ? $data[self::FIELD_APPOINTMENT_REQUIRED_EXT]
                : null;
            if ($data[self::FIELD_APPOINTMENT_REQUIRED] instanceof FHIRBoolean) {
                $this->setAppointmentRequired($data[self::FIELD_APPOINTMENT_REQUIRED]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_APPOINTMENT_REQUIRED])) {
                    $this->setAppointmentRequired(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_APPOINTMENT_REQUIRED]] + $ext));
                } else if (is_array($data[self::FIELD_APPOINTMENT_REQUIRED])) {
                    $this->setAppointmentRequired(new FHIRBoolean(array_merge($ext, $data[self::FIELD_APPOINTMENT_REQUIRED])));
                }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
                    $this->setAvailabilityExceptions(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_AVAILABILITY_EXCEPTIONS]] + $ext));
                } else if (is_array($data[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
                    $this->setAvailabilityExceptions(new FHIRString(array_merge($ext, $data[self::FIELD_AVAILABILITY_EXCEPTIONS])));
                }
            } else {
                $this->setAvailabilityExceptions(new FHIRString($data[self::FIELD_AVAILABILITY_EXCEPTIONS]));
            }
        }
        if (isset($data[self::FIELD_AVAILABLE_TIME])) {
            if (is_array($data[self::FIELD_AVAILABLE_TIME])) {
                foreach($data[self::FIELD_AVAILABLE_TIME] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_CHARACTERISTIC])) {
            if (is_array($data[self::FIELD_CHARACTERISTIC])) {
                foreach($data[self::FIELD_CHARACTERISTIC] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_COMMENT])) {
                    $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COMMENT]] + $ext));
                } else if (is_array($data[self::FIELD_COMMENT])) {
                    $this->setComment(new FHIRString(array_merge($ext, $data[self::FIELD_COMMENT])));
                }
            } else {
                $this->setComment(new FHIRString($data[self::FIELD_COMMENT]));
            }
        }
        if (isset($data[self::FIELD_COVERAGE_AREA])) {
            if (is_array($data[self::FIELD_COVERAGE_AREA])) {
                foreach($data[self::FIELD_COVERAGE_AREA] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
            if ($data[self::FIELD_ELIGIBILITY] instanceof FHIRCodeableConcept) {
                $this->setEligibility($data[self::FIELD_ELIGIBILITY]);
            } else {
                $this->setEligibility(new FHIRCodeableConcept($data[self::FIELD_ELIGIBILITY]));
            }
        }
        if (isset($data[self::FIELD_ELIGIBILITY_NOTE])) {
            $ext = (isset($data[self::FIELD_ELIGIBILITY_NOTE_EXT]) && is_array($data[self::FIELD_ELIGIBILITY_NOTE_EXT]))
                ? $data[self::FIELD_ELIGIBILITY_NOTE_EXT]
                : null;
            if ($data[self::FIELD_ELIGIBILITY_NOTE] instanceof FHIRString) {
                $this->setEligibilityNote($data[self::FIELD_ELIGIBILITY_NOTE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_ELIGIBILITY_NOTE])) {
                    $this->setEligibilityNote(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ELIGIBILITY_NOTE]] + $ext));
                } else if (is_array($data[self::FIELD_ELIGIBILITY_NOTE])) {
                    $this->setEligibilityNote(new FHIRString(array_merge($ext, $data[self::FIELD_ELIGIBILITY_NOTE])));
                }
            } else {
                $this->setEligibilityNote(new FHIRString($data[self::FIELD_ELIGIBILITY_NOTE]));
            }
        }
        if (isset($data[self::FIELD_EXTRA_DETAILS])) {
            $ext = (isset($data[self::FIELD_EXTRA_DETAILS_EXT]) && is_array($data[self::FIELD_EXTRA_DETAILS_EXT]))
                ? $data[self::FIELD_EXTRA_DETAILS_EXT]
                : null;
            if ($data[self::FIELD_EXTRA_DETAILS] instanceof FHIRString) {
                $this->setExtraDetails($data[self::FIELD_EXTRA_DETAILS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_EXTRA_DETAILS])) {
                    $this->setExtraDetails(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_EXTRA_DETAILS]] + $ext));
                } else if (is_array($data[self::FIELD_EXTRA_DETAILS])) {
                    $this->setExtraDetails(new FHIRString(array_merge($ext, $data[self::FIELD_EXTRA_DETAILS])));
                }
            } else {
                $this->setExtraDetails(new FHIRString($data[self::FIELD_EXTRA_DETAILS]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addIdentifier(new FHIRIdentifier(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_NOT_AVAILABLE])) {
            if (is_array($data[self::FIELD_NOT_AVAILABLE])) {
                foreach($data[self::FIELD_NOT_AVAILABLE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_PROGRAM_NAME])) {
            $ext = (isset($data[self::FIELD_PROGRAM_NAME_EXT]) && is_array($data[self::FIELD_PROGRAM_NAME_EXT]))
                ? $data[self::FIELD_PROGRAM_NAME_EXT]
                : null;
            if (is_array($data[self::FIELD_PROGRAM_NAME])) {
                foreach($data[self::FIELD_PROGRAM_NAME] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRString) {
                        $this->addProgramName($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addProgramName(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addProgramName(new FHIRString(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addProgramName(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_PROGRAM_NAME] instanceof FHIRString) {
                $this->addProgramName($data[self::FIELD_PROGRAM_NAME]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_PROGRAM_NAME])) {
                $this->addProgramName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PROGRAM_NAME]] + $ext));
            } else {
                $this->addProgramName(new FHIRString($data[self::FIELD_PROGRAM_NAME]));
            }
        }
        if (isset($data[self::FIELD_PROVIDED_BY])) {
            if ($data[self::FIELD_PROVIDED_BY] instanceof FHIRReference) {
                $this->setProvidedBy($data[self::FIELD_PROVIDED_BY]);
            } else {
                $this->setProvidedBy(new FHIRReference($data[self::FIELD_PROVIDED_BY]));
            }
        }
        if (isset($data[self::FIELD_PUBLIC_KEY])) {
            $ext = (isset($data[self::FIELD_PUBLIC_KEY_EXT]) && is_array($data[self::FIELD_PUBLIC_KEY_EXT]))
                ? $data[self::FIELD_PUBLIC_KEY_EXT]
                : null;
            if ($data[self::FIELD_PUBLIC_KEY] instanceof FHIRString) {
                $this->setPublicKey($data[self::FIELD_PUBLIC_KEY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PUBLIC_KEY])) {
                    $this->setPublicKey(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PUBLIC_KEY]] + $ext));
                } else if (is_array($data[self::FIELD_PUBLIC_KEY])) {
                    $this->setPublicKey(new FHIRString(array_merge($ext, $data[self::FIELD_PUBLIC_KEY])));
                }
            } else {
                $this->setPublicKey(new FHIRString($data[self::FIELD_PUBLIC_KEY]));
            }
        }
        if (isset($data[self::FIELD_REFERRAL_METHOD])) {
            if (is_array($data[self::FIELD_REFERRAL_METHOD])) {
                foreach($data[self::FIELD_REFERRAL_METHOD] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_SERVICE_CATEGORY])) {
            if ($data[self::FIELD_SERVICE_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setServiceCategory($data[self::FIELD_SERVICE_CATEGORY]);
            } else {
                $this->setServiceCategory(new FHIRCodeableConcept($data[self::FIELD_SERVICE_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_NAME])) {
            $ext = (isset($data[self::FIELD_SERVICE_NAME_EXT]) && is_array($data[self::FIELD_SERVICE_NAME_EXT]))
                ? $data[self::FIELD_SERVICE_NAME_EXT]
                : null;
            if ($data[self::FIELD_SERVICE_NAME] instanceof FHIRString) {
                $this->setServiceName($data[self::FIELD_SERVICE_NAME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_SERVICE_NAME])) {
                    $this->setServiceName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SERVICE_NAME]] + $ext));
                } else if (is_array($data[self::FIELD_SERVICE_NAME])) {
                    $this->setServiceName(new FHIRString(array_merge($ext, $data[self::FIELD_SERVICE_NAME])));
                }
            } else {
                $this->setServiceName(new FHIRString($data[self::FIELD_SERVICE_NAME]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_PROVISION_CODE])) {
            if (is_array($data[self::FIELD_SERVICE_PROVISION_CODE])) {
                foreach($data[self::FIELD_SERVICE_PROVISION_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_SERVICE_TYPE])) {
            if (is_array($data[self::FIELD_SERVICE_TYPE])) {
                foreach($data[self::FIELD_SERVICE_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRHealthcareServiceServiceType) {
                        $this->addServiceType($v);
                    } else {
                        $this->addServiceType(new FHIRHealthcareServiceServiceType($v));
                    }
                }
            } else if ($data[self::FIELD_SERVICE_TYPE] instanceof FHIRHealthcareServiceServiceType) {
                $this->addServiceType($data[self::FIELD_SERVICE_TYPE]);
            } else {
                $this->addServiceType(new FHIRHealthcareServiceServiceType($data[self::FIELD_SERVICE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_TELECOM])) {
            $ext = (isset($data[self::FIELD_TELECOM_EXT]) && is_array($data[self::FIELD_TELECOM_EXT]))
                ? $data[self::FIELD_TELECOM_EXT]
                : null;
            if (is_array($data[self::FIELD_TELECOM])) {
                foreach($data[self::FIELD_TELECOM] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactPoint) {
                        $this->addTelecom($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addTelecom(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addTelecom(new FHIRContactPoint(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addTelecom(new FHIRContactPoint($v));
                    }
                }
            } elseif ($data[self::FIELD_TELECOM] instanceof FHIRContactPoint) {
                $this->addTelecom($data[self::FIELD_TELECOM]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_TELECOM])) {
                $this->addTelecom(new FHIRContactPoint([FHIRContactPoint::FIELD_VALUE => $data[self::FIELD_TELECOM]] + $ext));
            } else {
                $this->addTelecom(new FHIRContactPoint($data[self::FIELD_TELECOM]));
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
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether or not a prospective consumer will require an appointment for
     * a particular service at a site to be provided by the Organization. Indicates if
     * an appointment is required for access to this service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getAppointmentRequired()
    {
        return $this->appointmentRequired;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether or not a prospective consumer will require an appointment for
     * a particular service at a site to be provided by the Organization. Indicates if
     * an appointment is required for access to this service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $appointmentRequired
     * @return static
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of site availability exceptions, e.g. public holiday availability.
     * Succinctly describing all possible exceptions to normal site availability as
     * details in the available Times and not available Times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions()
    {
        return $this->availabilityExceptions;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of site availability exceptions, e.g. public holiday availability.
     * Succinctly describing all possible exceptions to normal site availability as
     * details in the available Times and not available Times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $availabilityExceptions
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime $availableTime
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[] $availableTime
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Collection of characteristics (attributes).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Collection of characteristics (attributes).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $characteristic
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Collection of characteristics (attributes).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $characteristic
     * @return static
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any additional description of the service and/or any specific issues not covered
     * by the other attributes, which can be displayed as further detail under the
     * serviceName.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any additional description of the service and/or any specific issues not covered
     * by the other attributes, which can be displayed as further detail under the
     * serviceName.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $comment
     * @return static
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location(s) that this service is available to (not where the service is
     * provided).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getCoverageArea()
    {
        return $this->coverageArea;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location(s) that this service is available to (not where the service is
     * provided).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $coverageArea
     * @return static
     */
    public function addCoverageArea(FHIRReference $coverageArea = null)
    {
        $this->coverageArea[] = $coverageArea;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location(s) that this service is available to (not where the service is
     * provided).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $coverageArea
     * @return static
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Does this service have specific eligibility requirements that need to be met in
     * order to use the service?
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getEligibility()
    {
        return $this->eligibility;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Does this service have specific eligibility requirements that need to be met in
     * order to use the service?
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $eligibility
     * @return static
     */
    public function setEligibility(FHIRCodeableConcept $eligibility = null)
    {
        $this->eligibility = $eligibility;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the eligibility conditions for the service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getEligibilityNote()
    {
        return $this->eligibilityNote;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the eligibility conditions for the service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $eligibilityNote
     * @return static
     */
    public function setEligibilityNote($eligibilityNote = null)
    {
        if (null === $eligibilityNote) {
            $this->eligibilityNote = null;
            return $this;
        }
        if ($eligibilityNote instanceof FHIRString) {
            $this->eligibilityNote = $eligibilityNote;
            return $this;
        }
        $this->eligibilityNote = new FHIRString($eligibilityNote);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra details about the service that can't be placed in the other fields.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra details about the service that can't be placed in the other fields.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $extraDetails
     * @return static
     */
    public function setExtraDetails($extraDetails = null)
    {
        if (null === $extraDetails) {
            $this->extraDetails = null;
            return $this;
        }
        if ($extraDetails instanceof FHIRString) {
            $this->extraDetails = $extraDetails;
            return $this;
        }
        $this->extraDetails = new FHIRString($extraDetails);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where this healthcare service may be provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where this healthcare service may be provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable $notAvailable
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[] $notAvailable
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If there is a photo/symbol associated with this HealthcareService, it may be
     * included here to facilitate quick identification of the service in a list.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If there is a photo/symbol associated with this HealthcareService, it may be
     * included here to facilitate quick identification of the service in a list.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment $photo
     * @return static
     */
    public function setPhoto(FHIRAttachment $photo = null)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Program Names that can be used to categorize the service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Program Names that can be used to categorize the service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $programName
     * @return static
     */
    public function addProgramName($programName = null)
    {
        if (null === $programName) {
            $this->programName = [];
            return $this;
        }
        if ($programName instanceof FHIRString) {
            $this->programName[] = $programName;
            return $this;
        }
        $this->programName[] = new FHIRString($programName);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Program Names that can be used to categorize the service.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[] $programName
     * @return static
     */
    public function setProgramName(array $programName = [])
    {
        $this->programName = [];
        if ([] === $programName) {
            return $this;
        }
        foreach($programName as $v) {
            if ($v instanceof FHIRString) {
                $this->addProgramName($v);
            } else {
                $this->addProgramName(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that provides this healthcare service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getProvidedBy()
    {
        return $this->providedBy;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that provides this healthcare service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $providedBy
     * @return static
     */
    public function setProvidedBy(FHIRReference $providedBy = null)
    {
        $this->providedBy = $providedBy;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The public part of the 'keys' allocated to an Organization by an accredited body
     * to support secure exchange of data over the internet. To be provided by the
     * Organization, where available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The public part of the 'keys' allocated to an Organization by an accredited body
     * to support secure exchange of data over the internet. To be provided by the
     * Organization, where available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $publicKey
     * @return static
     */
    public function setPublicKey($publicKey = null)
    {
        if (null === $publicKey) {
            $this->publicKey = null;
            return $this;
        }
        if ($publicKey instanceof FHIRString) {
            $this->publicKey = $publicKey;
            return $this;
        }
        $this->publicKey = new FHIRString($publicKey);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ways that the service accepts referrals, if this is not provided then it is
     * implied that no referral is required.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReferralMethod()
    {
        return $this->referralMethod;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ways that the service accepts referrals, if this is not provided then it is
     * implied that no referral is required.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $referralMethod
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ways that the service accepts referrals, if this is not provided then it is
     * implied that no referral is required.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $referralMethod
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the broad category of service being performed or delivered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the broad category of service being performed or delivered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return static
     */
    public function setServiceCategory(FHIRCodeableConcept $serviceCategory = null)
    {
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Further description of the service as it would be presented to a consumer while
     * searching.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Further description of the service as it would be presented to a consumer while
     * searching.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $serviceName
     * @return static
     */
    public function setServiceName($serviceName = null)
    {
        if (null === $serviceName) {
            $this->serviceName = null;
            return $this;
        }
        if ($serviceName instanceof FHIRString) {
            $this->serviceName = $serviceName;
            return $this;
        }
        $this->serviceName = new FHIRString($serviceName);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The code(s) that detail the conditions under which the healthcare service is
     * available/offered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceProvisionCode()
    {
        return $this->serviceProvisionCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The code(s) that detail the conditions under which the healthcare service is
     * available/offered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $serviceProvisionCode
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The code(s) that detail the conditions under which the healthcare service is
     * available/offered.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $serviceProvisionCode
     * @return static
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
     * The details of a healthcare service available at a location.
     *
     * A specific type of service that may be delivered or performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A specific type of service that may be delivered or performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType $serviceType
     * @return static
     */
    public function addServiceType(FHIRHealthcareServiceServiceType $serviceType = null)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A specific type of service that may be delivered or performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType[] $serviceType
     * @return static
     */
    public function setServiceType(array $serviceType = [])
    {
        $this->serviceType = [];
        if ([] === $serviceType) {
            return $this;
        }
        foreach($serviceType as $v) {
            if ($v instanceof FHIRHealthcareServiceServiceType) {
                $this->addServiceType($v);
            } else {
                $this->addServiceType(new FHIRHealthcareServiceServiceType($v));
            }
        }
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of contacts related to this specific healthcare service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of contacts related to this specific healthcare service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint $telecom
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of contacts related to this specific healthcare service.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint[] $telecom
     * @return static
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRHealthcareService $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRHealthcareService
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
                'FHIRHealthcareService::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRHealthcareService or null, %s seen.',
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
        if (isset($children->coverageArea)) {
            foreach($children->coverageArea as $child) {
                $type->addCoverageArea(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->eligibility)) {
            $type->setEligibility(FHIRCodeableConcept::xmlUnserialize($children->eligibility));
        }
        if (isset($attributes->eligibilityNote)) {
            $type->setEligibilityNote((string)$attributes->eligibilityNote);
        }
        if (isset($children->eligibilityNote)) {
            $type->setEligibilityNote(FHIRString::xmlUnserialize($children->eligibilityNote));
        }
        if (isset($attributes->extraDetails)) {
            $type->setExtraDetails((string)$attributes->extraDetails);
        }
        if (isset($children->extraDetails)) {
            $type->setExtraDetails(FHIRString::xmlUnserialize($children->extraDetails));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($children->notAvailable)) {
            foreach($children->notAvailable as $child) {
                $type->addNotAvailable(FHIRHealthcareServiceNotAvailable::xmlUnserialize($child));
            }
        }
        if (isset($children->photo)) {
            $type->setPhoto(FHIRAttachment::xmlUnserialize($children->photo));
        }
        if (isset($attributes->programName)) {
            $type->addProgramName((string)$attributes->programName);
        }
        if (isset($children->programName)) {
            foreach($children->programName as $child) {
                $type->addProgramName(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->providedBy)) {
            $type->setProvidedBy(FHIRReference::xmlUnserialize($children->providedBy));
        }
        if (isset($attributes->publicKey)) {
            $type->setPublicKey((string)$attributes->publicKey);
        }
        if (isset($children->publicKey)) {
            $type->setPublicKey(FHIRString::xmlUnserialize($children->publicKey));
        }
        if (isset($children->referralMethod)) {
            foreach($children->referralMethod as $child) {
                $type->addReferralMethod(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->serviceCategory)) {
            $type->setServiceCategory(FHIRCodeableConcept::xmlUnserialize($children->serviceCategory));
        }
        if (isset($attributes->serviceName)) {
            $type->setServiceName((string)$attributes->serviceName);
        }
        if (isset($children->serviceName)) {
            $type->setServiceName(FHIRString::xmlUnserialize($children->serviceName));
        }
        if (isset($children->serviceProvisionCode)) {
            foreach($children->serviceProvisionCode as $child) {
                $type->addServiceProvisionCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->serviceType)) {
            foreach($children->serviceType as $child) {
                $type->addServiceType(FHIRHealthcareServiceServiceType::xmlUnserialize($child));
            }
        }
        if (isset($children->telecom)) {
            foreach($children->telecom as $child) {
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getCoverageArea())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COVERAGE_AREA, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getEligibility())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ELIGIBILITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEligibilityNote())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ELIGIBILITY_NOTE, null, $v->_getFHIRXMLNamespace()));
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

        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getProgramName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROGRAM_NAME, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getProvidedBy())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROVIDED_BY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPublicKey())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLIC_KEY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getReferralMethod())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERRAL_METHOD, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getServiceCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getServiceName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getServiceProvisionCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_PROVISION_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getServiceType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_TYPE, null, $v->_getFHIRXMLNamespace()));
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

        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAppointmentRequired())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_APPOINTMENT_REQUIRED] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_APPOINTMENT_REQUIRED_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_APPOINTMENT_REQUIRED] = $v;
            }
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_AVAILABILITY_EXCEPTIONS] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_AVAILABILITY_EXCEPTIONS] = $v;
            }
        }
        if ([] !== ($vs = $this->getAvailableTime())) {
            $a[self::FIELD_AVAILABLE_TIME] = $vs;
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            $a[self::FIELD_CHARACTERISTIC] = $vs;
        }
        if (null !== ($v = $this->getComment())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_COMMENT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_COMMENT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_COMMENT] = $v;
            }
        }
        if ([] !== ($vs = $this->getCoverageArea())) {
            $a[self::FIELD_COVERAGE_AREA] = $vs;
        }
        if (null !== ($v = $this->getEligibility())) {
            $a[self::FIELD_ELIGIBILITY] = $v;
        }
        if (null !== ($v = $this->getEligibilityNote())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ELIGIBILITY_NOTE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_ELIGIBILITY_NOTE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_ELIGIBILITY_NOTE] = $v;
            }
        }
        if (null !== ($v = $this->getExtraDetails())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EXTRA_DETAILS] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_EXTRA_DETAILS_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_EXTRA_DETAILS] = $v;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_IDENTIFIER][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_IDENTIFIER_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_IDENTIFIER_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_IDENTIFIER][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if ([] !== ($vs = $this->getNotAvailable())) {
            $a[self::FIELD_NOT_AVAILABLE] = $vs;
        }
        if (null !== ($v = $this->getPhoto())) {
            $a[self::FIELD_PHOTO] = $v;
        }
        if ([] !== ($vs = $this->getProgramName())) {
            $a[self::FIELD_PROGRAM_NAME] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_PROGRAM_NAME][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_PROGRAM_NAME_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_PROGRAM_NAME_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_PROGRAM_NAME][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getProvidedBy())) {
            $a[self::FIELD_PROVIDED_BY] = $v;
        }
        if (null !== ($v = $this->getPublicKey())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PUBLIC_KEY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_PUBLIC_KEY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_PUBLIC_KEY] = $v;
            }
        }
        if ([] !== ($vs = $this->getReferralMethod())) {
            $a[self::FIELD_REFERRAL_METHOD] = $vs;
        }
        if (null !== ($v = $this->getServiceCategory())) {
            $a[self::FIELD_SERVICE_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getServiceName())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SERVICE_NAME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_SERVICE_NAME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_SERVICE_NAME] = $v;
            }
        }
        if ([] !== ($vs = $this->getServiceProvisionCode())) {
            $a[self::FIELD_SERVICE_PROVISION_CODE] = $vs;
        }
        if ([] !== ($vs = $this->getServiceType())) {
            $a[self::FIELD_SERVICE_TYPE] = $vs;
        }
        if ([] !== ($vs = $this->getTelecom())) {
            $a[self::FIELD_TELECOM] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_TELECOM][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_TELECOM_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_TELECOM_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_TELECOM][] = $v;
                }
            }
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