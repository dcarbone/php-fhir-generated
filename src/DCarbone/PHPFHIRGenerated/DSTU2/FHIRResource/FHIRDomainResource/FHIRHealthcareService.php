<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter;

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

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_PROVIDED_BY = 'providedBy';
    const FIELD_SERVICE_CATEGORY = 'serviceCategory';
    const FIELD_SERVICE_TYPE = 'serviceType';
    const FIELD_LOCATION = 'location';
    const FIELD_SERVICE_NAME = 'serviceName';
    const FIELD_SERVICE_NAME_EXT = '_serviceName';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_EXTRA_DETAILS = 'extraDetails';
    const FIELD_EXTRA_DETAILS_EXT = '_extraDetails';
    const FIELD_PHOTO = 'photo';
    const FIELD_TELECOM = 'telecom';
    const FIELD_COVERAGE_AREA = 'coverageArea';
    const FIELD_SERVICE_PROVISION_CODE = 'serviceProvisionCode';
    const FIELD_ELIGIBILITY = 'eligibility';
    const FIELD_ELIGIBILITY_NOTE = 'eligibilityNote';
    const FIELD_ELIGIBILITY_NOTE_EXT = '_eligibilityNote';
    const FIELD_PROGRAM_NAME = 'programName';
    const FIELD_PROGRAM_NAME_EXT = '_programName';
    const FIELD_CHARACTERISTIC = 'characteristic';
    const FIELD_REFERRAL_METHOD = 'referralMethod';
    const FIELD_PUBLIC_KEY = 'publicKey';
    const FIELD_PUBLIC_KEY_EXT = '_publicKey';
    const FIELD_APPOINTMENT_REQUIRED = 'appointmentRequired';
    const FIELD_APPOINTMENT_REQUIRED_EXT = '_appointmentRequired';
    const FIELD_AVAILABLE_TIME = 'availableTime';
    const FIELD_NOT_AVAILABLE = 'notAvailable';
    const FIELD_AVAILABILITY_EXCEPTIONS = 'availabilityExceptions';
    const FIELD_AVAILABILITY_EXCEPTIONS_EXT = '_availabilityExceptions';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that provides this healthcare service.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $providedBy = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the broad category of service being performed or delivered.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $serviceCategory = null;
    /**
     * The details of a healthcare service available at a location.
     *
     * A specific type of service that may be delivered or performed.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType[]
     */
    protected null|array $serviceType = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where this healthcare service may be provided.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $location = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Further description of the service as it would be presented to a consumer while
     * searching.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $serviceName = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any additional description of the service and/or any specific issues not covered
     * by the other attributes, which can be displayed as further detail under the
     * serviceName.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $comment = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra details about the service that can't be placed in the other fields.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $extraDetails = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If there is a photo/symbol associated with this HealthcareService, it may be
     * included here to facilitate quick identification of the service in a list.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment
     */
    protected null|FHIRAttachment $photo = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of contacts related to this specific healthcare service.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint[]
     */
    protected null|array $telecom = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location(s) that this service is available to (not where the service is
     * provided).
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected null|array $coverageArea = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The code(s) that detail the conditions under which the healthcare service is
     * available/offered.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $serviceProvisionCode = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Does this service have specific eligibility requirements that need to be met in
     * order to use the service?
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $eligibility = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the eligibility conditions for the service.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $eligibilityNote = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Program Names that can be used to categorize the service.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    protected null|array $programName = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Collection of characteristics (attributes).
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $characteristic = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ways that the service accepts referrals, if this is not provided then it is
     * implied that no referral is required.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $referralMethod = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The public part of the 'keys' allocated to an Organization by an accredited body
     * to support secure exchange of data over the internet. To be provided by the
     * Organization, where available.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $publicKey = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether or not a prospective consumer will require an appointment for
     * a particular service at a site to be provided by the Organization. Indicates if
     * an appointment is required for access to this service.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $appointmentRequired = null;
    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[]
     */
    protected null|array $availableTime = [];
    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[]
     */
    protected null|array $notAvailable = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of site availability exceptions, e.g. public holiday availability.
     * Succinctly describing all possible exceptions to normal site availability as
     * details in the available Times and not available Times.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $availabilityExceptions = null;

    /**
     * Validation map for fields in type HealthcareService
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_LOCATION => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRHealthcareService Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_PROVIDED_BY, $data)) {
            if ($data[self::FIELD_PROVIDED_BY] instanceof FHIRReference) {
                $this->setProvidedBy($data[self::FIELD_PROVIDED_BY]);
            } else {
                $this->setProvidedBy(new FHIRReference($data[self::FIELD_PROVIDED_BY]));
            }
        }
        if (array_key_exists(self::FIELD_SERVICE_CATEGORY, $data)) {
            if ($data[self::FIELD_SERVICE_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setServiceCategory($data[self::FIELD_SERVICE_CATEGORY]);
            } else {
                $this->setServiceCategory(new FHIRCodeableConcept($data[self::FIELD_SERVICE_CATEGORY]));
            }
        }
        if (array_key_exists(self::FIELD_SERVICE_TYPE, $data)) {
            if (is_array($data[self::FIELD_SERVICE_TYPE])) {
                foreach($data[self::FIELD_SERVICE_TYPE] as $v) {
                    if ($v instanceof FHIRHealthcareServiceServiceType) {
                        $this->addServiceType($v);
                    } else {
                        $this->addServiceType(new FHIRHealthcareServiceServiceType($v));
                    }
                }
            } elseif ($data[self::FIELD_SERVICE_TYPE] instanceof FHIRHealthcareServiceServiceType) {
                $this->addServiceType($data[self::FIELD_SERVICE_TYPE]);
            } else {
                $this->addServiceType(new FHIRHealthcareServiceServiceType($data[self::FIELD_SERVICE_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_LOCATION, $data)) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (array_key_exists(self::FIELD_SERVICE_NAME, $data) || array_key_exists(self::FIELD_SERVICE_NAME_EXT, $data)) {
            $value = $data[self::FIELD_SERVICE_NAME] ?? null;
            $ext = (isset($data[self::FIELD_SERVICE_NAME_EXT]) && is_array($data[self::FIELD_SERVICE_NAME_EXT])) ? $data[self::FIELD_SERVICE_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setServiceName($value);
                } else if (is_array($value)) {
                    $this->setServiceName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setServiceName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setServiceName(new FHIRString($ext));
            } else {
                $this->setServiceName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_COMMENT, $data) || array_key_exists(self::FIELD_COMMENT_EXT, $data)) {
            $value = $data[self::FIELD_COMMENT] ?? null;
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])) ? $data[self::FIELD_COMMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setComment($value);
                } else if (is_array($value)) {
                    $this->setComment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setComment(new FHIRString($ext));
            } else {
                $this->setComment(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_EXTRA_DETAILS, $data) || array_key_exists(self::FIELD_EXTRA_DETAILS_EXT, $data)) {
            $value = $data[self::FIELD_EXTRA_DETAILS] ?? null;
            $ext = (isset($data[self::FIELD_EXTRA_DETAILS_EXT]) && is_array($data[self::FIELD_EXTRA_DETAILS_EXT])) ? $data[self::FIELD_EXTRA_DETAILS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setExtraDetails($value);
                } else if (is_array($value)) {
                    $this->setExtraDetails(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setExtraDetails(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExtraDetails(new FHIRString($ext));
            } else {
                $this->setExtraDetails(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PHOTO, $data)) {
            if ($data[self::FIELD_PHOTO] instanceof FHIRAttachment) {
                $this->setPhoto($data[self::FIELD_PHOTO]);
            } else {
                $this->setPhoto(new FHIRAttachment($data[self::FIELD_PHOTO]));
            }
        }
        if (array_key_exists(self::FIELD_TELECOM, $data)) {
            if (is_array($data[self::FIELD_TELECOM])) {
                foreach($data[self::FIELD_TELECOM] as $v) {
                    if ($v instanceof FHIRContactPoint) {
                        $this->addTelecom($v);
                    } else {
                        $this->addTelecom(new FHIRContactPoint($v));
                    }
                }
            } elseif ($data[self::FIELD_TELECOM] instanceof FHIRContactPoint) {
                $this->addTelecom($data[self::FIELD_TELECOM]);
            } else {
                $this->addTelecom(new FHIRContactPoint($data[self::FIELD_TELECOM]));
            }
        }
        if (array_key_exists(self::FIELD_COVERAGE_AREA, $data)) {
            if (is_array($data[self::FIELD_COVERAGE_AREA])) {
                foreach($data[self::FIELD_COVERAGE_AREA] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addCoverageArea($v);
                    } else {
                        $this->addCoverageArea(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_COVERAGE_AREA] instanceof FHIRReference) {
                $this->addCoverageArea($data[self::FIELD_COVERAGE_AREA]);
            } else {
                $this->addCoverageArea(new FHIRReference($data[self::FIELD_COVERAGE_AREA]));
            }
        }
        if (array_key_exists(self::FIELD_SERVICE_PROVISION_CODE, $data)) {
            if (is_array($data[self::FIELD_SERVICE_PROVISION_CODE])) {
                foreach($data[self::FIELD_SERVICE_PROVISION_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addServiceProvisionCode($v);
                    } else {
                        $this->addServiceProvisionCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SERVICE_PROVISION_CODE] instanceof FHIRCodeableConcept) {
                $this->addServiceProvisionCode($data[self::FIELD_SERVICE_PROVISION_CODE]);
            } else {
                $this->addServiceProvisionCode(new FHIRCodeableConcept($data[self::FIELD_SERVICE_PROVISION_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_ELIGIBILITY, $data)) {
            if ($data[self::FIELD_ELIGIBILITY] instanceof FHIRCodeableConcept) {
                $this->setEligibility($data[self::FIELD_ELIGIBILITY]);
            } else {
                $this->setEligibility(new FHIRCodeableConcept($data[self::FIELD_ELIGIBILITY]));
            }
        }
        if (array_key_exists(self::FIELD_ELIGIBILITY_NOTE, $data) || array_key_exists(self::FIELD_ELIGIBILITY_NOTE_EXT, $data)) {
            $value = $data[self::FIELD_ELIGIBILITY_NOTE] ?? null;
            $ext = (isset($data[self::FIELD_ELIGIBILITY_NOTE_EXT]) && is_array($data[self::FIELD_ELIGIBILITY_NOTE_EXT])) ? $data[self::FIELD_ELIGIBILITY_NOTE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setEligibilityNote($value);
                } else if (is_array($value)) {
                    $this->setEligibilityNote(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setEligibilityNote(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEligibilityNote(new FHIRString($ext));
            } else {
                $this->setEligibilityNote(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PROGRAM_NAME, $data) || array_key_exists(self::FIELD_PROGRAM_NAME_EXT, $data)) {
            $value = $data[self::FIELD_PROGRAM_NAME] ?? null;
            $ext = (isset($data[self::FIELD_PROGRAM_NAME_EXT]) && is_array($data[self::FIELD_PROGRAM_NAME_EXT])) ? $data[self::FIELD_PROGRAM_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addProgramName($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addProgramName($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addProgramName(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addProgramName(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addProgramName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addProgramName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addProgramName(new FHIRString($iext));
                }
            } else {
                $this->addProgramName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CHARACTERISTIC, $data)) {
            if (is_array($data[self::FIELD_CHARACTERISTIC])) {
                foreach($data[self::FIELD_CHARACTERISTIC] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCharacteristic($v);
                    } else {
                        $this->addCharacteristic(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CHARACTERISTIC] instanceof FHIRCodeableConcept) {
                $this->addCharacteristic($data[self::FIELD_CHARACTERISTIC]);
            } else {
                $this->addCharacteristic(new FHIRCodeableConcept($data[self::FIELD_CHARACTERISTIC]));
            }
        }
        if (array_key_exists(self::FIELD_REFERRAL_METHOD, $data)) {
            if (is_array($data[self::FIELD_REFERRAL_METHOD])) {
                foreach($data[self::FIELD_REFERRAL_METHOD] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReferralMethod($v);
                    } else {
                        $this->addReferralMethod(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REFERRAL_METHOD] instanceof FHIRCodeableConcept) {
                $this->addReferralMethod($data[self::FIELD_REFERRAL_METHOD]);
            } else {
                $this->addReferralMethod(new FHIRCodeableConcept($data[self::FIELD_REFERRAL_METHOD]));
            }
        }
        if (array_key_exists(self::FIELD_PUBLIC_KEY, $data) || array_key_exists(self::FIELD_PUBLIC_KEY_EXT, $data)) {
            $value = $data[self::FIELD_PUBLIC_KEY] ?? null;
            $ext = (isset($data[self::FIELD_PUBLIC_KEY_EXT]) && is_array($data[self::FIELD_PUBLIC_KEY_EXT])) ? $data[self::FIELD_PUBLIC_KEY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPublicKey($value);
                } else if (is_array($value)) {
                    $this->setPublicKey(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPublicKey(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPublicKey(new FHIRString($ext));
            } else {
                $this->setPublicKey(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_APPOINTMENT_REQUIRED, $data) || array_key_exists(self::FIELD_APPOINTMENT_REQUIRED_EXT, $data)) {
            $value = $data[self::FIELD_APPOINTMENT_REQUIRED] ?? null;
            $ext = (isset($data[self::FIELD_APPOINTMENT_REQUIRED_EXT]) && is_array($data[self::FIELD_APPOINTMENT_REQUIRED_EXT])) ? $data[self::FIELD_APPOINTMENT_REQUIRED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAppointmentRequired($value);
                } else if (is_array($value)) {
                    $this->setAppointmentRequired(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAppointmentRequired(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAppointmentRequired(new FHIRBoolean($ext));
            } else {
                $this->setAppointmentRequired(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_AVAILABLE_TIME, $data)) {
            if (is_array($data[self::FIELD_AVAILABLE_TIME])) {
                foreach($data[self::FIELD_AVAILABLE_TIME] as $v) {
                    if ($v instanceof FHIRHealthcareServiceAvailableTime) {
                        $this->addAvailableTime($v);
                    } else {
                        $this->addAvailableTime(new FHIRHealthcareServiceAvailableTime($v));
                    }
                }
            } elseif ($data[self::FIELD_AVAILABLE_TIME] instanceof FHIRHealthcareServiceAvailableTime) {
                $this->addAvailableTime($data[self::FIELD_AVAILABLE_TIME]);
            } else {
                $this->addAvailableTime(new FHIRHealthcareServiceAvailableTime($data[self::FIELD_AVAILABLE_TIME]));
            }
        }
        if (array_key_exists(self::FIELD_NOT_AVAILABLE, $data)) {
            if (is_array($data[self::FIELD_NOT_AVAILABLE])) {
                foreach($data[self::FIELD_NOT_AVAILABLE] as $v) {
                    if ($v instanceof FHIRHealthcareServiceNotAvailable) {
                        $this->addNotAvailable($v);
                    } else {
                        $this->addNotAvailable(new FHIRHealthcareServiceNotAvailable($v));
                    }
                }
            } elseif ($data[self::FIELD_NOT_AVAILABLE] instanceof FHIRHealthcareServiceNotAvailable) {
                $this->addNotAvailable($data[self::FIELD_NOT_AVAILABLE]);
            } else {
                $this->addNotAvailable(new FHIRHealthcareServiceNotAvailable($data[self::FIELD_NOT_AVAILABLE]));
            }
        }
        if (array_key_exists(self::FIELD_AVAILABILITY_EXCEPTIONS, $data) || array_key_exists(self::FIELD_AVAILABILITY_EXCEPTIONS_EXT, $data)) {
            $value = $data[self::FIELD_AVAILABILITY_EXCEPTIONS] ?? null;
            $ext = (isset($data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT]) && is_array($data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT])) ? $data[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAvailabilityExceptions($value);
                } else if (is_array($value)) {
                    $this->setAvailabilityExceptions(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAvailabilityExceptions(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAvailabilityExceptions(new FHIRString($ext));
            } else {
                $this->setAvailabilityExceptions(new FHIRString(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
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
    public function getIdentifier(): null|array
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
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
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
    public function getProvidedBy(): null|FHIRReference
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
    public function setProvidedBy(null|FHIRReference $providedBy = null): self
    {
        if (null === $providedBy) {
            $providedBy = new FHIRReference();
        }
        $this->_trackValueSet($this->providedBy, $providedBy);
        $this->providedBy = $providedBy;
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
    public function getServiceCategory(): null|FHIRCodeableConcept
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
    public function setServiceCategory(null|FHIRCodeableConcept $serviceCategory = null): self
    {
        if (null === $serviceCategory) {
            $serviceCategory = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->serviceCategory, $serviceCategory);
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A specific type of service that may be delivered or performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType[]
     */
    public function getServiceType(): null|array
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
    public function addServiceType(null|FHIRHealthcareServiceServiceType $serviceType = null): self
    {
        if (null === $serviceType) {
            $serviceType = new FHIRHealthcareServiceServiceType();
        }
        $this->_trackValueAdded();
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A specific type of service that may be delivered or performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType ...$serviceType
     * @return static
     */
    public function setServiceType(FHIRHealthcareServiceServiceType ...$serviceType): self
    {
        if ([] !== $this->serviceType) {
            $this->_trackValuesRemoved(count($this->serviceType));
            $this->serviceType = [];
        }
        if ([] === $serviceType) {
            return $this;
        }
        foreach($serviceType as $v) {
            $this->addServiceType($v);
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
    public function getLocation(): null|FHIRReference
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
    public function setLocation(null|FHIRReference $location = null): self
    {
        if (null === $location) {
            $location = new FHIRReference();
        }
        $this->_trackValueSet($this->location, $location);
        $this->location = $location;
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
    public function getServiceName(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $serviceName
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setServiceName(null|string|FHIRStringPrimitive|FHIRString $serviceName = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $serviceName && !($serviceName instanceof FHIRString)) {
            $serviceName = new FHIRString($serviceName);
        }
        $this->_trackValueSet($this->serviceName, $serviceName);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SERVICE_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_SERVICE_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SERVICE_NAME][0] = $xmlLocation;
        $this->serviceName = $serviceName;
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
    public function getComment(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $comment
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setComment(null|string|FHIRStringPrimitive|FHIRString $comment = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $comment && !($comment instanceof FHIRString)) {
            $comment = new FHIRString($comment);
        }
        $this->_trackValueSet($this->comment, $comment);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_COMMENT])) {
            $this->_primitiveXmlLocations[self::FIELD_COMMENT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_COMMENT][0] = $xmlLocation;
        $this->comment = $comment;
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
    public function getExtraDetails(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $extraDetails
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExtraDetails(null|string|FHIRStringPrimitive|FHIRString $extraDetails = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $extraDetails && !($extraDetails instanceof FHIRString)) {
            $extraDetails = new FHIRString($extraDetails);
        }
        $this->_trackValueSet($this->extraDetails, $extraDetails);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_EXTRA_DETAILS])) {
            $this->_primitiveXmlLocations[self::FIELD_EXTRA_DETAILS] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_EXTRA_DETAILS][0] = $xmlLocation;
        $this->extraDetails = $extraDetails;
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
    public function getPhoto(): null|FHIRAttachment
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
    public function setPhoto(null|FHIRAttachment $photo = null): self
    {
        if (null === $photo) {
            $photo = new FHIRAttachment();
        }
        $this->_trackValueSet($this->photo, $photo);
        $this->photo = $photo;
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
    public function getTelecom(): null|array
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
    public function addTelecom(null|FHIRContactPoint $telecom = null): self
    {
        if (null === $telecom) {
            $telecom = new FHIRContactPoint();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint ...$telecom
     * @return static
     */
    public function setTelecom(FHIRContactPoint ...$telecom): self
    {
        if ([] !== $this->telecom) {
            $this->_trackValuesRemoved(count($this->telecom));
            $this->telecom = [];
        }
        if ([] === $telecom) {
            return $this;
        }
        foreach($telecom as $v) {
            $this->addTelecom($v);
        }
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
    public function getCoverageArea(): null|array
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
    public function addCoverageArea(null|FHIRReference $coverageArea = null): self
    {
        if (null === $coverageArea) {
            $coverageArea = new FHIRReference();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference ...$coverageArea
     * @return static
     */
    public function setCoverageArea(FHIRReference ...$coverageArea): self
    {
        if ([] !== $this->coverageArea) {
            $this->_trackValuesRemoved(count($this->coverageArea));
            $this->coverageArea = [];
        }
        if ([] === $coverageArea) {
            return $this;
        }
        foreach($coverageArea as $v) {
            $this->addCoverageArea($v);
        }
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
    public function getServiceProvisionCode(): null|array
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
    public function addServiceProvisionCode(null|FHIRCodeableConcept $serviceProvisionCode = null): self
    {
        if (null === $serviceProvisionCode) {
            $serviceProvisionCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept ...$serviceProvisionCode
     * @return static
     */
    public function setServiceProvisionCode(FHIRCodeableConcept ...$serviceProvisionCode): self
    {
        if ([] !== $this->serviceProvisionCode) {
            $this->_trackValuesRemoved(count($this->serviceProvisionCode));
            $this->serviceProvisionCode = [];
        }
        if ([] === $serviceProvisionCode) {
            return $this;
        }
        foreach($serviceProvisionCode as $v) {
            $this->addServiceProvisionCode($v);
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
    public function getEligibility(): null|FHIRCodeableConcept
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
    public function setEligibility(null|FHIRCodeableConcept $eligibility = null): self
    {
        if (null === $eligibility) {
            $eligibility = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->eligibility, $eligibility);
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
    public function getEligibilityNote(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $eligibilityNote
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setEligibilityNote(null|string|FHIRStringPrimitive|FHIRString $eligibilityNote = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $eligibilityNote && !($eligibilityNote instanceof FHIRString)) {
            $eligibilityNote = new FHIRString($eligibilityNote);
        }
        $this->_trackValueSet($this->eligibilityNote, $eligibilityNote);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ELIGIBILITY_NOTE])) {
            $this->_primitiveXmlLocations[self::FIELD_ELIGIBILITY_NOTE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ELIGIBILITY_NOTE][0] = $xmlLocation;
        $this->eligibilityNote = $eligibilityNote;
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
    public function getProgramName(): null|array
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $programName
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addProgramName(null|string|FHIRStringPrimitive|FHIRString $programName = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $programName && !($programName instanceof FHIRString)) {
            $programName = new FHIRString($programName);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PROGRAM_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_PROGRAM_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PROGRAM_NAME][] = $xmlLocation;
        $this->programName[] = $programName;
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setProgramName(array $programName = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_PROGRAM_NAME]);
        if ([] !== $this->programName) {
            $this->_trackValuesRemoved(count($this->programName));
            $this->programName = [];
        }
        if ([] === $programName) {
            return $this;
        }
        foreach($programName as $v) {
            if ($v instanceof FHIRString) {
                $this->addProgramName($v, $xmlLocation);
            } else {
                $this->addProgramName(new FHIRString($v), $xmlLocation);
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
    public function getCharacteristic(): null|array
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
    public function addCharacteristic(null|FHIRCodeableConcept $characteristic = null): self
    {
        if (null === $characteristic) {
            $characteristic = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept ...$characteristic
     * @return static
     */
    public function setCharacteristic(FHIRCodeableConcept ...$characteristic): self
    {
        if ([] !== $this->characteristic) {
            $this->_trackValuesRemoved(count($this->characteristic));
            $this->characteristic = [];
        }
        if ([] === $characteristic) {
            return $this;
        }
        foreach($characteristic as $v) {
            $this->addCharacteristic($v);
        }
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
    public function getReferralMethod(): null|array
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
    public function addReferralMethod(null|FHIRCodeableConcept $referralMethod = null): self
    {
        if (null === $referralMethod) {
            $referralMethod = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept ...$referralMethod
     * @return static
     */
    public function setReferralMethod(FHIRCodeableConcept ...$referralMethod): self
    {
        if ([] !== $this->referralMethod) {
            $this->_trackValuesRemoved(count($this->referralMethod));
            $this->referralMethod = [];
        }
        if ([] === $referralMethod) {
            return $this;
        }
        foreach($referralMethod as $v) {
            $this->addReferralMethod($v);
        }
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
    public function getPublicKey(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $publicKey
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPublicKey(null|string|FHIRStringPrimitive|FHIRString $publicKey = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $publicKey && !($publicKey instanceof FHIRString)) {
            $publicKey = new FHIRString($publicKey);
        }
        $this->_trackValueSet($this->publicKey, $publicKey);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PUBLIC_KEY])) {
            $this->_primitiveXmlLocations[self::FIELD_PUBLIC_KEY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PUBLIC_KEY][0] = $xmlLocation;
        $this->publicKey = $publicKey;
        return $this;
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
    public function getAppointmentRequired(): null|FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $appointmentRequired
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAppointmentRequired(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $appointmentRequired = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $appointmentRequired && !($appointmentRequired instanceof FHIRBoolean)) {
            $appointmentRequired = new FHIRBoolean($appointmentRequired);
        }
        $this->_trackValueSet($this->appointmentRequired, $appointmentRequired);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_APPOINTMENT_REQUIRED])) {
            $this->_primitiveXmlLocations[self::FIELD_APPOINTMENT_REQUIRED] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_APPOINTMENT_REQUIRED][0] = $xmlLocation;
        $this->appointmentRequired = $appointmentRequired;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[]
     */
    public function getAvailableTime(): null|array
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
    public function addAvailableTime(null|FHIRHealthcareServiceAvailableTime $availableTime = null): self
    {
        if (null === $availableTime) {
            $availableTime = new FHIRHealthcareServiceAvailableTime();
        }
        $this->_trackValueAdded();
        $this->availableTime[] = $availableTime;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime ...$availableTime
     * @return static
     */
    public function setAvailableTime(FHIRHealthcareServiceAvailableTime ...$availableTime): self
    {
        if ([] !== $this->availableTime) {
            $this->_trackValuesRemoved(count($this->availableTime));
            $this->availableTime = [];
        }
        if ([] === $availableTime) {
            return $this;
        }
        foreach($availableTime as $v) {
            $this->addAvailableTime($v);
        }
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
    public function getNotAvailable(): null|array
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
    public function addNotAvailable(null|FHIRHealthcareServiceNotAvailable $notAvailable = null): self
    {
        if (null === $notAvailable) {
            $notAvailable = new FHIRHealthcareServiceNotAvailable();
        }
        $this->_trackValueAdded();
        $this->notAvailable[] = $notAvailable;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable ...$notAvailable
     * @return static
     */
    public function setNotAvailable(FHIRHealthcareServiceNotAvailable ...$notAvailable): self
    {
        if ([] !== $this->notAvailable) {
            $this->_trackValuesRemoved(count($this->notAvailable));
            $this->notAvailable = [];
        }
        if ([] === $notAvailable) {
            return $this;
        }
        foreach($notAvailable as $v) {
            $this->addNotAvailable($v);
        }
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
    public function getAvailabilityExceptions(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $availabilityExceptions
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAvailabilityExceptions(null|string|FHIRStringPrimitive|FHIRString $availabilityExceptions = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $availabilityExceptions && !($availabilityExceptions instanceof FHIRString)) {
            $availabilityExceptions = new FHIRString($availabilityExceptions);
        }
        $this->_trackValueSet($this->availabilityExceptions, $availabilityExceptions);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
            $this->_primitiveXmlLocations[self::FIELD_AVAILABILITY_EXCEPTIONS] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_AVAILABILITY_EXCEPTIONS][0] = $xmlLocation;
        $this->availabilityExceptions = $availabilityExceptions;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getProvidedBy())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROVIDED_BY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getServiceCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE_CATEGORY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getServiceType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SERVICE_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getServiceName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExtraDetails())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXTRA_DETAILS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPhoto())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PHOTO] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTelecom())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TELECOM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCoverageArea())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COVERAGE_AREA, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getServiceProvisionCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SERVICE_PROVISION_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEligibility())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ELIGIBILITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEligibilityNote())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ELIGIBILITY_NOTE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProgramName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROGRAM_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CHARACTERISTIC, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReferralMethod())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERRAL_METHOD, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPublicKey())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLIC_KEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAppointmentRequired())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPOINTMENT_REQUIRED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAvailableTime())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AVAILABLE_TIME, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNotAvailable())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOT_AVAILABLE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AVAILABILITY_EXCEPTIONS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROVIDED_BY])) {
            $v = $this->getProvidedBy();
            foreach($validationRules[self::FIELD_PROVIDED_BY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_PROVIDED_BY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROVIDED_BY])) {
                        $errs[self::FIELD_PROVIDED_BY] = [];
                    }
                    $errs[self::FIELD_PROVIDED_BY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_CATEGORY])) {
            $v = $this->getServiceCategory();
            foreach($validationRules[self::FIELD_SERVICE_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_SERVICE_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_CATEGORY])) {
                        $errs[self::FIELD_SERVICE_CATEGORY] = [];
                    }
                    $errs[self::FIELD_SERVICE_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_TYPE])) {
            $v = $this->getServiceType();
            foreach($validationRules[self::FIELD_SERVICE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_SERVICE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_TYPE])) {
                        $errs[self::FIELD_SERVICE_TYPE] = [];
                    }
                    $errs[self::FIELD_SERVICE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_NAME])) {
            $v = $this->getServiceName();
            foreach($validationRules[self::FIELD_SERVICE_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_SERVICE_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_NAME])) {
                        $errs[self::FIELD_SERVICE_NAME] = [];
                    }
                    $errs[self::FIELD_SERVICE_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENT])) {
            $v = $this->getComment();
            foreach($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_COMMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENT])) {
                        $errs[self::FIELD_COMMENT] = [];
                    }
                    $errs[self::FIELD_COMMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTRA_DETAILS])) {
            $v = $this->getExtraDetails();
            foreach($validationRules[self::FIELD_EXTRA_DETAILS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_EXTRA_DETAILS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTRA_DETAILS])) {
                        $errs[self::FIELD_EXTRA_DETAILS] = [];
                    }
                    $errs[self::FIELD_EXTRA_DETAILS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PHOTO])) {
            $v = $this->getPhoto();
            foreach($validationRules[self::FIELD_PHOTO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_PHOTO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PHOTO])) {
                        $errs[self::FIELD_PHOTO] = [];
                    }
                    $errs[self::FIELD_PHOTO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TELECOM])) {
            $v = $this->getTelecom();
            foreach($validationRules[self::FIELD_TELECOM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_TELECOM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TELECOM])) {
                        $errs[self::FIELD_TELECOM] = [];
                    }
                    $errs[self::FIELD_TELECOM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COVERAGE_AREA])) {
            $v = $this->getCoverageArea();
            foreach($validationRules[self::FIELD_COVERAGE_AREA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_COVERAGE_AREA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COVERAGE_AREA])) {
                        $errs[self::FIELD_COVERAGE_AREA] = [];
                    }
                    $errs[self::FIELD_COVERAGE_AREA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_PROVISION_CODE])) {
            $v = $this->getServiceProvisionCode();
            foreach($validationRules[self::FIELD_SERVICE_PROVISION_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_SERVICE_PROVISION_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_PROVISION_CODE])) {
                        $errs[self::FIELD_SERVICE_PROVISION_CODE] = [];
                    }
                    $errs[self::FIELD_SERVICE_PROVISION_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ELIGIBILITY])) {
            $v = $this->getEligibility();
            foreach($validationRules[self::FIELD_ELIGIBILITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_ELIGIBILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ELIGIBILITY])) {
                        $errs[self::FIELD_ELIGIBILITY] = [];
                    }
                    $errs[self::FIELD_ELIGIBILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ELIGIBILITY_NOTE])) {
            $v = $this->getEligibilityNote();
            foreach($validationRules[self::FIELD_ELIGIBILITY_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_ELIGIBILITY_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ELIGIBILITY_NOTE])) {
                        $errs[self::FIELD_ELIGIBILITY_NOTE] = [];
                    }
                    $errs[self::FIELD_ELIGIBILITY_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROGRAM_NAME])) {
            $v = $this->getProgramName();
            foreach($validationRules[self::FIELD_PROGRAM_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_PROGRAM_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROGRAM_NAME])) {
                        $errs[self::FIELD_PROGRAM_NAME] = [];
                    }
                    $errs[self::FIELD_PROGRAM_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARACTERISTIC])) {
            $v = $this->getCharacteristic();
            foreach($validationRules[self::FIELD_CHARACTERISTIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARACTERISTIC])) {
                        $errs[self::FIELD_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_CHARACTERISTIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERRAL_METHOD])) {
            $v = $this->getReferralMethod();
            foreach($validationRules[self::FIELD_REFERRAL_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_REFERRAL_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERRAL_METHOD])) {
                        $errs[self::FIELD_REFERRAL_METHOD] = [];
                    }
                    $errs[self::FIELD_REFERRAL_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLIC_KEY])) {
            $v = $this->getPublicKey();
            foreach($validationRules[self::FIELD_PUBLIC_KEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_PUBLIC_KEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLIC_KEY])) {
                        $errs[self::FIELD_PUBLIC_KEY] = [];
                    }
                    $errs[self::FIELD_PUBLIC_KEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPOINTMENT_REQUIRED])) {
            $v = $this->getAppointmentRequired();
            foreach($validationRules[self::FIELD_APPOINTMENT_REQUIRED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_APPOINTMENT_REQUIRED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPOINTMENT_REQUIRED])) {
                        $errs[self::FIELD_APPOINTMENT_REQUIRED] = [];
                    }
                    $errs[self::FIELD_APPOINTMENT_REQUIRED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVAILABLE_TIME])) {
            $v = $this->getAvailableTime();
            foreach($validationRules[self::FIELD_AVAILABLE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_AVAILABLE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABLE_TIME])) {
                        $errs[self::FIELD_AVAILABLE_TIME] = [];
                    }
                    $errs[self::FIELD_AVAILABLE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOT_AVAILABLE])) {
            $v = $this->getNotAvailable();
            foreach($validationRules[self::FIELD_NOT_AVAILABLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_NOT_AVAILABLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_AVAILABLE])) {
                        $errs[self::FIELD_NOT_AVAILABLE] = [];
                    }
                    $errs[self::FIELD_NOT_AVAILABLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
            $v = $this->getAvailabilityExceptions();
            foreach($validationRules[self::FIELD_AVAILABILITY_EXCEPTIONS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE, self::FIELD_AVAILABILITY_EXCEPTIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
                        $errs[self::FIELD_AVAILABILITY_EXCEPTIONS] = [];
                    }
                    $errs[self::FIELD_AVAILABILITY_EXCEPTIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRHealthcareService $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRHealthcareService)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROVIDED_BY === $childName) {
                $type->setProvidedBy(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SERVICE_CATEGORY === $childName) {
                $type->setServiceCategory(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SERVICE_TYPE === $childName) {
                $type->addServiceType(FHIRHealthcareServiceServiceType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LOCATION === $childName) {
                $type->setLocation(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SERVICE_NAME === $childName) {
                $type->setServiceName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COMMENT === $childName) {
                $type->setComment(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXTRA_DETAILS === $childName) {
                $type->setExtraDetails(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PHOTO === $childName) {
                $type->setPhoto(FHIRAttachment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TELECOM === $childName) {
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COVERAGE_AREA === $childName) {
                $type->addCoverageArea(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SERVICE_PROVISION_CODE === $childName) {
                $type->addServiceProvisionCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ELIGIBILITY === $childName) {
                $type->setEligibility(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ELIGIBILITY_NOTE === $childName) {
                $type->setEligibilityNote(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PROGRAM_NAME === $childName) {
                $type->addProgramName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CHARACTERISTIC === $childName) {
                $type->addCharacteristic(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REFERRAL_METHOD === $childName) {
                $type->addReferralMethod(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PUBLIC_KEY === $childName) {
                $type->setPublicKey(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_APPOINTMENT_REQUIRED === $childName) {
                $type->setAppointmentRequired(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AVAILABLE_TIME === $childName) {
                $type->addAvailableTime(FHIRHealthcareServiceAvailableTime::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOT_AVAILABLE === $childName) {
                $type->addNotAvailable(FHIRHealthcareServiceNotAvailable::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AVAILABILITY_EXCEPTIONS === $childName) {
                $type->setAvailabilityExceptions(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_SERVICE_NAME])) {
            $pt = $type->getServiceName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SERVICE_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setServiceName((string)$attributes[self::FIELD_SERVICE_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMMENT])) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setComment((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXTRA_DETAILS])) {
            $pt = $type->getExtraDetails();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXTRA_DETAILS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setExtraDetails((string)$attributes[self::FIELD_EXTRA_DETAILS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ELIGIBILITY_NOTE])) {
            $pt = $type->getEligibilityNote();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ELIGIBILITY_NOTE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setEligibilityNote((string)$attributes[self::FIELD_ELIGIBILITY_NOTE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PROGRAM_NAME])) {
            $type->addProgramName((string)$attributes[self::FIELD_PROGRAM_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PUBLIC_KEY])) {
            $pt = $type->getPublicKey();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PUBLIC_KEY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPublicKey((string)$attributes[self::FIELD_PUBLIC_KEY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_APPOINTMENT_REQUIRED])) {
            $pt = $type->getAppointmentRequired();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_APPOINTMENT_REQUIRED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAppointmentRequired((string)$attributes[self::FIELD_APPOINTMENT_REQUIRED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
            $pt = $type->getAvailabilityExceptions();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_AVAILABILITY_EXCEPTIONS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAvailabilityExceptions((string)$attributes[self::FIELD_AVAILABILITY_EXCEPTIONS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'HealthcareService', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SERVICE_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getServiceName())) {
            $xw->writeAttribute(self::FIELD_SERVICE_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->writeAttribute(self::FIELD_COMMENT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXTRA_DETAILS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getExtraDetails())) {
            $xw->writeAttribute(self::FIELD_EXTRA_DETAILS, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ELIGIBILITY_NOTE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getEligibilityNote())) {
            $xw->writeAttribute(self::FIELD_ELIGIBILITY_NOTE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PROGRAM_NAME] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getProgramName())) {
            $xw->writeAttribute(self::FIELD_PROGRAM_NAME, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getProgramName()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_PROGRAM_NAME, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PUBLIC_KEY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPublicKey())) {
            $xw->writeAttribute(self::FIELD_PUBLIC_KEY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_APPOINTMENT_REQUIRED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAppointmentRequired())) {
            $xw->writeAttribute(self::FIELD_APPOINTMENT_REQUIRED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_AVAILABILITY_EXCEPTIONS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAvailabilityExceptions())) {
            $xw->writeAttribute(self::FIELD_AVAILABILITY_EXCEPTIONS, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getProvidedBy())) {
            $xw->startElement(self::FIELD_PROVIDED_BY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getServiceCategory())) {
            $xw->startElement(self::FIELD_SERVICE_CATEGORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getServiceType() as $v) {
            $xw->startElement(self::FIELD_SERVICE_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getLocation())) {
            $xw->startElement(self::FIELD_LOCATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SERVICE_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getServiceName())) {
            $xw->startElement(self::FIELD_SERVICE_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->startElement(self::FIELD_COMMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXTRA_DETAILS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getExtraDetails())) {
            $xw->startElement(self::FIELD_EXTRA_DETAILS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPhoto())) {
            $xw->startElement(self::FIELD_PHOTO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTelecom() as $v) {
            $xw->startElement(self::FIELD_TELECOM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCoverageArea() as $v) {
            $xw->startElement(self::FIELD_COVERAGE_AREA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getServiceProvisionCode() as $v) {
            $xw->startElement(self::FIELD_SERVICE_PROVISION_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEligibility())) {
            $xw->startElement(self::FIELD_ELIGIBILITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ELIGIBILITY_NOTE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getEligibilityNote())) {
            $xw->startElement(self::FIELD_ELIGIBILITY_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PROGRAM_NAME] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getProgramName())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_PROGRAM_NAME);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        foreach ($this->getCharacteristic() as $v) {
            $xw->startElement(self::FIELD_CHARACTERISTIC);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReferralMethod() as $v) {
            $xw->startElement(self::FIELD_REFERRAL_METHOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PUBLIC_KEY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPublicKey())) {
            $xw->startElement(self::FIELD_PUBLIC_KEY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_APPOINTMENT_REQUIRED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAppointmentRequired())) {
            $xw->startElement(self::FIELD_APPOINTMENT_REQUIRED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAvailableTime() as $v) {
            $xw->startElement(self::FIELD_AVAILABLE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNotAvailable() as $v) {
            $xw->startElement(self::FIELD_NOT_AVAILABLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_AVAILABILITY_EXCEPTIONS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAvailabilityExceptions())) {
            $xw->startElement(self::FIELD_AVAILABILITY_EXCEPTIONS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getProvidedBy())) {
            $out->{self::FIELD_PROVIDED_BY} = $v;
        }
        if (null !== ($v = $this->getServiceCategory())) {
            $out->{self::FIELD_SERVICE_CATEGORY} = $v;
        }
        if ([] !== ($vs = $this->getServiceType())) {
            $out->{self::FIELD_SERVICE_TYPE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SERVICE_TYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $out->{self::FIELD_LOCATION} = $v;
        }
        if (null !== ($v = $this->getServiceName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SERVICE_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SERVICE_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getComment())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMMENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMMENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExtraDetails())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXTRA_DETAILS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXTRA_DETAILS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPhoto())) {
            $out->{self::FIELD_PHOTO} = $v;
        }
        if ([] !== ($vs = $this->getTelecom())) {
            $out->{self::FIELD_TELECOM} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TELECOM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCoverageArea())) {
            $out->{self::FIELD_COVERAGE_AREA} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_COVERAGE_AREA}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getServiceProvisionCode())) {
            $out->{self::FIELD_SERVICE_PROVISION_CODE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SERVICE_PROVISION_CODE}[] = $v;
            }
        }
        if (null !== ($v = $this->getEligibility())) {
            $out->{self::FIELD_ELIGIBILITY} = $v;
        }
        if (null !== ($v = $this->getEligibilityNote())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ELIGIBILITY_NOTE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ELIGIBILITY_NOTE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getProgramName())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_PROGRAM_NAME} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROGRAM_NAME_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            $out->{self::FIELD_CHARACTERISTIC} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CHARACTERISTIC}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReferralMethod())) {
            $out->{self::FIELD_REFERRAL_METHOD} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REFERRAL_METHOD}[] = $v;
            }
        }
        if (null !== ($v = $this->getPublicKey())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PUBLIC_KEY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PUBLIC_KEY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAppointmentRequired())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_APPOINTMENT_REQUIRED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_APPOINTMENT_REQUIRED_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getAvailableTime())) {
            $out->{self::FIELD_AVAILABLE_TIME} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_AVAILABLE_TIME}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getNotAvailable())) {
            $out->{self::FIELD_NOT_AVAILABLE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOT_AVAILABLE}[] = $v;
            }
        }
        if (null !== ($v = $this->getAvailabilityExceptions())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AVAILABILITY_EXCEPTIONS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AVAILABILITY_EXCEPTIONS_EXT} = $ext;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}