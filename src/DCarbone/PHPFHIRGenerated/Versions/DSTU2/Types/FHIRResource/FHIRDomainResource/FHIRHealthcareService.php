<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 23:45+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionTypeMap;

/**
 * The details of a healthcare service available at a location.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRHealthcareService extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_HEALTHCARE_SERVICE;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_PROVIDED_BY = 'providedBy';
    public const FIELD_SERVICE_CATEGORY = 'serviceCategory';
    public const FIELD_SERVICE_TYPE = 'serviceType';
    public const FIELD_LOCATION = 'location';
    public const FIELD_SERVICE_NAME = 'serviceName';
    public const FIELD_SERVICE_NAME_EXT = '_serviceName';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_COMMENT_EXT = '_comment';
    public const FIELD_EXTRA_DETAILS = 'extraDetails';
    public const FIELD_EXTRA_DETAILS_EXT = '_extraDetails';
    public const FIELD_PHOTO = 'photo';
    public const FIELD_TELECOM = 'telecom';
    public const FIELD_COVERAGE_AREA = 'coverageArea';
    public const FIELD_SERVICE_PROVISION_CODE = 'serviceProvisionCode';
    public const FIELD_ELIGIBILITY = 'eligibility';
    public const FIELD_ELIGIBILITY_NOTE = 'eligibilityNote';
    public const FIELD_ELIGIBILITY_NOTE_EXT = '_eligibilityNote';
    public const FIELD_PROGRAM_NAME = 'programName';
    public const FIELD_PROGRAM_NAME_EXT = '_programName';
    public const FIELD_CHARACTERISTIC = 'characteristic';
    public const FIELD_REFERRAL_METHOD = 'referralMethod';
    public const FIELD_PUBLIC_KEY = 'publicKey';
    public const FIELD_PUBLIC_KEY_EXT = '_publicKey';
    public const FIELD_APPOINTMENT_REQUIRED = 'appointmentRequired';
    public const FIELD_APPOINTMENT_REQUIRED_EXT = '_appointmentRequired';
    public const FIELD_AVAILABLE_TIME = 'availableTime';
    public const FIELD_NOT_AVAILABLE = 'notAvailable';
    public const FIELD_AVAILABILITY_EXCEPTIONS = 'availabilityExceptions';
    public const FIELD_AVAILABILITY_EXCEPTIONS_EXT = '_availabilityExceptions';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_LOCATION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_SERVICE_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COMMENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXTRA_DETAILS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ELIGIBILITY_NOTE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PUBLIC_KEY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_APPOINTMENT_REQUIRED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AVAILABILITY_EXCEPTIONS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that provides this healthcare service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $providedBy;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the broad category of service being performed or delivered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $serviceCategory;
    /**
     * The details of a healthcare service available at a location.
     *
     * A specific type of service that may be delivered or performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType[] 
     */
    protected array $serviceType;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where this healthcare service may be provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $location;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Further description of the service as it would be presented to a consumer while
     * searching.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $serviceName;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any additional description of the service and/or any specific issues not covered
     * by the other attributes, which can be displayed as further detail under the
     * serviceName.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $comment;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra details about the service that can't be placed in the other fields.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $extraDetails;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If there is a photo/symbol associated with this HealthcareService, it may be
     * included here to facilitate quick identification of the service in a list.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $photo;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of contacts related to this specific healthcare service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPoint[] 
     */
    protected array $telecom;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location(s) that this service is available to (not where the service is
     * provided).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] 
     */
    protected array $coverageArea;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The code(s) that detail the conditions under which the healthcare service is
     * available/offered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $serviceProvisionCode;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Does this service have specific eligibility requirements that need to be met in
     * order to use the service?
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $eligibility;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the eligibility conditions for the service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $eligibilityNote;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Program Names that can be used to categorize the service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString[] 
     */
    protected array $programName;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Collection of characteristics (attributes).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $characteristic;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ways that the service accepts referrals, if this is not provided then it is
     * implied that no referral is required.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $referralMethod;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The public part of the 'keys' allocated to an Organization by an accredited body
     * to support secure exchange of data over the internet. To be provided by the
     * Organization, where available.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $publicKey;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether or not a prospective consumer will require an appointment for
     * a particular service at a site to be provided by the Organization. Indicates if
     * an appointment is required for access to this service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $appointmentRequired;
    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[] 
     */
    protected array $availableTime;
    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[] 
     */
    protected array $notAvailable;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of site availability exceptions, e.g. public holiday availability.
     * Succinctly describing all possible exceptions to normal site availability as
     * details in the available Times and not available Times.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $availabilityExceptions;

    /* constructor.php:63 */
    /**
     * FHIRHealthcareService Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $providedBy
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType[] $serviceType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $location
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $serviceName
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $comment
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $extraDetails
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAttachment $photo
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPoint[] $telecom
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] $coverageArea
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $serviceProvisionCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $eligibility
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $eligibilityNote
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString[] $programName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $characteristic
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $referralMethod
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $publicKey
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean $appointmentRequired
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[] $availableTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[] $notAvailable
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $availabilityExceptions
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRReference $providedBy = null,
                                null|FHIRCodeableConcept $serviceCategory = null,
                                null|iterable $serviceType = null,
                                null|FHIRReference $location = null,
                                null|string|FHIRStringPrimitive|FHIRString $serviceName = null,
                                null|string|FHIRStringPrimitive|FHIRString $comment = null,
                                null|string|FHIRStringPrimitive|FHIRString $extraDetails = null,
                                null|FHIRAttachment $photo = null,
                                null|iterable $telecom = null,
                                null|iterable $coverageArea = null,
                                null|iterable $serviceProvisionCode = null,
                                null|FHIRCodeableConcept $eligibility = null,
                                null|string|FHIRStringPrimitive|FHIRString $eligibilityNote = null,
                                null|iterable $programName = null,
                                null|iterable $characteristic = null,
                                null|iterable $referralMethod = null,
                                null|string|FHIRStringPrimitive|FHIRString $publicKey = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $appointmentRequired = null,
                                null|iterable $availableTime = null,
                                null|iterable $notAvailable = null,
                                null|string|FHIRStringPrimitive|FHIRString $availabilityExceptions = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $providedBy) {
            $this->setProvidedBy($providedBy);
        }
        if (null !== $serviceCategory) {
            $this->setServiceCategory($serviceCategory);
        }
        if (null !== $serviceType) {
            $this->setServiceType(...$serviceType);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $serviceName) {
            $this->setServiceName($serviceName);
        }
        if (null !== $comment) {
            $this->setComment($comment);
        }
        if (null !== $extraDetails) {
            $this->setExtraDetails($extraDetails);
        }
        if (null !== $photo) {
            $this->setPhoto($photo);
        }
        if (null !== $telecom) {
            $this->setTelecom(...$telecom);
        }
        if (null !== $coverageArea) {
            $this->setCoverageArea(...$coverageArea);
        }
        if (null !== $serviceProvisionCode) {
            $this->setServiceProvisionCode(...$serviceProvisionCode);
        }
        if (null !== $eligibility) {
            $this->setEligibility($eligibility);
        }
        if (null !== $eligibilityNote) {
            $this->setEligibilityNote($eligibilityNote);
        }
        if (null !== $programName) {
            $this->setProgramName(...$programName);
        }
        if (null !== $characteristic) {
            $this->setCharacteristic(...$characteristic);
        }
        if (null !== $referralMethod) {
            $this->setReferralMethod(...$referralMethod);
        }
        if (null !== $publicKey) {
            $this->setPublicKey($publicKey);
        }
        if (null !== $appointmentRequired) {
            $this->setAppointmentRequired($appointmentRequired);
        }
        if (null !== $availableTime) {
            $this->setAvailableTime(...$availableTime);
        }
        if (null !== $notAvailable) {
            $this->setNotAvailable(...$notAvailable);
        }
        if (null !== $availabilityExceptions) {
            $this->setAvailabilityExceptions($availabilityExceptions);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:148 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifiers for this item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRString|FHIRIdentifier $identifier): self
    {
        if (!($identifier instanceof FHIRIdentifier)) {
            $identifier = new FHIRIdentifier(value: $identifier);
        }
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRString|FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that provides this healthcare service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getProvidedBy(): null|FHIRReference
    {
        return $this->providedBy ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that provides this healthcare service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $providedBy
     * @return static
     */
    public function setProvidedBy(null|FHIRReference $providedBy): self
    {
        if (null === $providedBy) {
            unset($this->providedBy);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory(): null|FHIRCodeableConcept
    {
        return $this->serviceCategory ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the broad category of service being performed or delivered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return static
     */
    public function setServiceCategory(null|FHIRCodeableConcept $serviceCategory): self
    {
        if (null === $serviceCategory) {
            unset($this->serviceCategory);
            return $this;
        }
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A specific type of service that may be delivered or performed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType[]
     */
    public function getServiceType(): array
    {
        return $this->serviceType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType>
     */
    public function getServiceTypeIterator(): iterable
    {
        if (!isset($this->serviceType)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->serviceType);
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A specific type of service that may be delivered or performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType $serviceType
     * @return static
     */
    public function addServiceType(FHIRHealthcareServiceServiceType $serviceType): self
    {
        if (!isset($this->serviceType)) {
            $this->serviceType = [];
        }
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A specific type of service that may be delivered or performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType ...$serviceType
     * @return static
     */
    public function setServiceType(FHIRHealthcareServiceServiceType ...$serviceType): self
    {
        if ([] === $serviceType) {
            unset($this->serviceType);
            return $this;
        }
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where this healthcare service may be provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location where this healthcare service may be provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getServiceName(): null|FHIRString
    {
        return $this->serviceName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Further description of the service as it would be presented to a consumer while
     * searching.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $serviceName
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setServiceName(null|string|FHIRStringPrimitive|FHIRString $serviceName,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $serviceName) {
            unset($this->serviceName);
            return $this;
        }
        if (!($serviceName instanceof FHIRString)) {
            $serviceName = new FHIRString(value: $serviceName);
        }
        $this->serviceName = $serviceName;
        if ($this->_valueXMLLocations[self::FIELD_SERVICE_NAME] !== $valueXMLLocation) {
            $this->_setServiceNameValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the serviceName element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getServiceNameValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SERVICE_NAME];
    }

    /**
     * Set the location the "value" field of the serviceName element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setServiceNameValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SERVICE_NAME] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getComment(): null|FHIRString
    {
        return $this->comment ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $comment
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setComment(null|string|FHIRStringPrimitive|FHIRString $comment,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $comment) {
            unset($this->comment);
            return $this;
        }
        if (!($comment instanceof FHIRString)) {
            $comment = new FHIRString(value: $comment);
        }
        $this->comment = $comment;
        if ($this->_valueXMLLocations[self::FIELD_COMMENT] !== $valueXMLLocation) {
            $this->_setCommentValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the comment element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCommentValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COMMENT];
    }

    /**
     * Set the location the "value" field of the comment element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCommentValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COMMENT] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra details about the service that can't be placed in the other fields.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getExtraDetails(): null|FHIRString
    {
        return $this->extraDetails ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra details about the service that can't be placed in the other fields.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $extraDetails
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExtraDetails(null|string|FHIRStringPrimitive|FHIRString $extraDetails,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $extraDetails) {
            unset($this->extraDetails);
            return $this;
        }
        if (!($extraDetails instanceof FHIRString)) {
            $extraDetails = new FHIRString(value: $extraDetails);
        }
        $this->extraDetails = $extraDetails;
        if ($this->_valueXMLLocations[self::FIELD_EXTRA_DETAILS] !== $valueXMLLocation) {
            $this->_setExtraDetailsValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the extraDetails element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExtraDetailsValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXTRA_DETAILS];
    }

    /**
     * Set the location the "value" field of the extraDetails element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExtraDetailsValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXTRA_DETAILS] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAttachment
     */
    public function getPhoto(): null|FHIRAttachment
    {
        return $this->photo ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If there is a photo/symbol associated with this HealthcareService, it may be
     * included here to facilitate quick identification of the service in a list.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAttachment $photo
     * @return static
     */
    public function setPhoto(null|FHIRAttachment $photo): self
    {
        if (null === $photo) {
            unset($this->photo);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom(): array
    {
        return $this->telecom ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPoint>
     */
    public function getTelecomIterator(): iterable
    {
        if (!isset($this->telecom)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->telecom);
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of contacts related to this specific healthcare service.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPoint $telecom
     * @return static
     */
    public function addTelecom(FHIRString|FHIRContactPoint $telecom): self
    {
        if (!($telecom instanceof FHIRContactPoint)) {
            $telecom = new FHIRContactPoint(value: $telecom);
        }
        if (!isset($this->telecom)) {
            $this->telecom = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRContactPoint ...$telecom
     * @return static
     */
    public function setTelecom(FHIRString|FHIRContactPoint ...$telecom): self
    {
        if ([] === $telecom) {
            unset($this->telecom);
            return $this;
        }
        $this->telecom = $telecom;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[]
     */
    public function getCoverageArea(): array
    {
        return $this->coverageArea ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference>
     */
    public function getCoverageAreaIterator(): iterable
    {
        if (!isset($this->coverageArea)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->coverageArea);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location(s) that this service is available to (not where the service is
     * provided).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $coverageArea
     * @return static
     */
    public function addCoverageArea(FHIRReference $coverageArea): self
    {
        if (!isset($this->coverageArea)) {
            $this->coverageArea = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference ...$coverageArea
     * @return static
     */
    public function setCoverageArea(FHIRReference ...$coverageArea): self
    {
        if ([] === $coverageArea) {
            unset($this->coverageArea);
            return $this;
        }
        $this->coverageArea = $coverageArea;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceProvisionCode(): array
    {
        return $this->serviceProvisionCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getServiceProvisionCodeIterator(): iterable
    {
        if (!isset($this->serviceProvisionCode)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->serviceProvisionCode);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $serviceProvisionCode
     * @return static
     */
    public function addServiceProvisionCode(FHIRCodeableConcept $serviceProvisionCode): self
    {
        if (!isset($this->serviceProvisionCode)) {
            $this->serviceProvisionCode = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$serviceProvisionCode
     * @return static
     */
    public function setServiceProvisionCode(FHIRCodeableConcept ...$serviceProvisionCode): self
    {
        if ([] === $serviceProvisionCode) {
            unset($this->serviceProvisionCode);
            return $this;
        }
        $this->serviceProvisionCode = $serviceProvisionCode;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getEligibility(): null|FHIRCodeableConcept
    {
        return $this->eligibility ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $eligibility
     * @return static
     */
    public function setEligibility(null|FHIRCodeableConcept $eligibility): self
    {
        if (null === $eligibility) {
            unset($this->eligibility);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getEligibilityNote(): null|FHIRString
    {
        return $this->eligibilityNote ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the eligibility conditions for the service.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $eligibilityNote
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEligibilityNote(null|string|FHIRStringPrimitive|FHIRString $eligibilityNote,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $eligibilityNote) {
            unset($this->eligibilityNote);
            return $this;
        }
        if (!($eligibilityNote instanceof FHIRString)) {
            $eligibilityNote = new FHIRString(value: $eligibilityNote);
        }
        $this->eligibilityNote = $eligibilityNote;
        if ($this->_valueXMLLocations[self::FIELD_ELIGIBILITY_NOTE] !== $valueXMLLocation) {
            $this->_setEligibilityNoteValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the eligibilityNote element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEligibilityNoteValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ELIGIBILITY_NOTE];
    }

    /**
     * Set the location the "value" field of the eligibilityNote element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEligibilityNoteValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ELIGIBILITY_NOTE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Program Names that can be used to categorize the service.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString[]
     */
    public function getProgramName(): array
    {
        return $this->programName ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString>
     */
    public function getProgramNameIterator(): iterable
    {
        if (!isset($this->programName)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->programName);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Program Names that can be used to categorize the service.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $programName
     * @return static
     */
    public function addProgramName(string|FHIRStringPrimitive|FHIRString $programName): self
    {
        if (!($programName instanceof FHIRString)) {
            $programName = new FHIRString(value: $programName);
        }
        if (!isset($this->programName)) {
            $this->programName = [];
        }
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString ...$programName
     * @return static
     */
    public function setProgramName(string|FHIRStringPrimitive|FHIRString ...$programName): self
    {
        if ([] === $programName) {
            unset($this->programName);
            return $this;
        }
        $this->programName = [];
        foreach($programName as $v) {
            if ($v instanceof FHIRString) {
                $this->programName[] = $v;
            } else {
                $this->programName[] = new FHIRString(value: $v);
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCharacteristic(): array
    {
        return $this->characteristic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCharacteristicIterator(): iterable
    {
        if (!isset($this->characteristic)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->characteristic);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Collection of characteristics (attributes).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $characteristic
     * @return static
     */
    public function addCharacteristic(FHIRCodeableConcept $characteristic): self
    {
        if (!isset($this->characteristic)) {
            $this->characteristic = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$characteristic
     * @return static
     */
    public function setCharacteristic(FHIRCodeableConcept ...$characteristic): self
    {
        if ([] === $characteristic) {
            unset($this->characteristic);
            return $this;
        }
        $this->characteristic = $characteristic;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReferralMethod(): array
    {
        return $this->referralMethod ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getReferralMethodIterator(): iterable
    {
        if (!isset($this->referralMethod)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->referralMethod);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $referralMethod
     * @return static
     */
    public function addReferralMethod(FHIRCodeableConcept $referralMethod): self
    {
        if (!isset($this->referralMethod)) {
            $this->referralMethod = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$referralMethod
     * @return static
     */
    public function setReferralMethod(FHIRCodeableConcept ...$referralMethod): self
    {
        if ([] === $referralMethod) {
            unset($this->referralMethod);
            return $this;
        }
        $this->referralMethod = $referralMethod;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getPublicKey(): null|FHIRString
    {
        return $this->publicKey ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $publicKey
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPublicKey(null|string|FHIRStringPrimitive|FHIRString $publicKey,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $publicKey) {
            unset($this->publicKey);
            return $this;
        }
        if (!($publicKey instanceof FHIRString)) {
            $publicKey = new FHIRString(value: $publicKey);
        }
        $this->publicKey = $publicKey;
        if ($this->_valueXMLLocations[self::FIELD_PUBLIC_KEY] !== $valueXMLLocation) {
            $this->_setPublicKeyValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the publicKey element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPublicKeyValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PUBLIC_KEY];
    }

    /**
     * Set the location the "value" field of the publicKey element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPublicKeyValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PUBLIC_KEY] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean
     */
    public function getAppointmentRequired(): null|FHIRBoolean
    {
        return $this->appointmentRequired ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether or not a prospective consumer will require an appointment for
     * a particular service at a site to be provided by the Organization. Indicates if
     * an appointment is required for access to this service.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean $appointmentRequired
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAppointmentRequired(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $appointmentRequired,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $appointmentRequired) {
            unset($this->appointmentRequired);
            return $this;
        }
        if (!($appointmentRequired instanceof FHIRBoolean)) {
            $appointmentRequired = new FHIRBoolean(value: $appointmentRequired);
        }
        $this->appointmentRequired = $appointmentRequired;
        if ($this->_valueXMLLocations[self::FIELD_APPOINTMENT_REQUIRED] !== $valueXMLLocation) {
            $this->_setAppointmentRequiredValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the appointmentRequired element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAppointmentRequiredValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_APPOINTMENT_REQUIRED];
    }

    /**
     * Set the location the "value" field of the appointmentRequired element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAppointmentRequiredValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_APPOINTMENT_REQUIRED] = $valueXMLLocation;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[]
     */
    public function getAvailableTime(): array
    {
        return $this->availableTime ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime>
     */
    public function getAvailableTimeIterator(): iterable
    {
        if (!isset($this->availableTime)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->availableTime);
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime $availableTime
     * @return static
     */
    public function addAvailableTime(FHIRHealthcareServiceAvailableTime $availableTime): self
    {
        if (!isset($this->availableTime)) {
            $this->availableTime = [];
        }
        $this->availableTime[] = $availableTime;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * A collection of times that the Service Site is available.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime ...$availableTime
     * @return static
     */
    public function setAvailableTime(FHIRHealthcareServiceAvailableTime ...$availableTime): self
    {
        if ([] === $availableTime) {
            unset($this->availableTime);
            return $this;
        }
        $this->availableTime = $availableTime;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[]
     */
    public function getNotAvailable(): array
    {
        return $this->notAvailable ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable>
     */
    public function getNotAvailableIterator(): iterable
    {
        if (!isset($this->notAvailable)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->notAvailable);
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable $notAvailable
     * @return static
     */
    public function addNotAvailable(FHIRHealthcareServiceNotAvailable $notAvailable): self
    {
        if (!isset($this->notAvailable)) {
            $this->notAvailable = [];
        }
        $this->notAvailable[] = $notAvailable;
        return $this;
    }

    /**
     * The details of a healthcare service available at a location.
     *
     * The HealthcareService is not available during this period of time due to the
     * provided reason.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable ...$notAvailable
     * @return static
     */
    public function setNotAvailable(FHIRHealthcareServiceNotAvailable ...$notAvailable): self
    {
        if ([] === $notAvailable) {
            unset($this->notAvailable);
            return $this;
        }
        $this->notAvailable = $notAvailable;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions(): null|FHIRString
    {
        return $this->availabilityExceptions ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $availabilityExceptions
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAvailabilityExceptions(null|string|FHIRStringPrimitive|FHIRString $availabilityExceptions,
                                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $availabilityExceptions) {
            unset($this->availabilityExceptions);
            return $this;
        }
        if (!($availabilityExceptions instanceof FHIRString)) {
            $availabilityExceptions = new FHIRString(value: $availabilityExceptions);
        }
        $this->availabilityExceptions = $availabilityExceptions;
        if ($this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS] !== $valueXMLLocation) {
            $this->_setAvailabilityExceptionsValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the availabilityExceptions element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAvailabilityExceptionsValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS];
    }

    /**
     * Set the location the "value" field of the availabilityExceptions element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAvailabilityExceptionsValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROVIDED_BY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERVICE_CATEGORY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERVICE_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOCATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERVICE_NAME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMMENT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTRA_DETAILS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PHOTO, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TELECOM, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COVERAGE_AREA, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERVICE_PROVISION_CODE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ELIGIBILITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ELIGIBILITY_NOTE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROGRAM_NAME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CHARACTERISTIC, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERRAL_METHOD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PUBLIC_KEY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_APPOINTMENT_REQUIRED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AVAILABLE_TIME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOT_AVAILABLE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AVAILABILITY_EXCEPTIONS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
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

    /* class_default.php:212 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRHealthcareService $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRHealthcareService)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROVIDED_BY === $cen) {
                $type->setProvidedBy(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERVICE_CATEGORY === $cen) {
                $type->setServiceCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERVICE_TYPE === $cen) {
                $type->addServiceType(FHIRHealthcareServiceServiceType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->setLocation(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERVICE_NAME === $cen) {
                $type->setServiceName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMMENT === $cen) {
                $type->setComment(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXTRA_DETAILS === $cen) {
                $type->setExtraDetails(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PHOTO === $cen) {
                $type->setPhoto(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TELECOM === $cen) {
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COVERAGE_AREA === $cen) {
                $type->addCoverageArea(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERVICE_PROVISION_CODE === $cen) {
                $type->addServiceProvisionCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ELIGIBILITY === $cen) {
                $type->setEligibility(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ELIGIBILITY_NOTE === $cen) {
                $type->setEligibilityNote(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROGRAM_NAME === $cen) {
                $type->addProgramName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CHARACTERISTIC === $cen) {
                $type->addCharacteristic(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERRAL_METHOD === $cen) {
                $type->addReferralMethod(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PUBLIC_KEY === $cen) {
                $type->setPublicKey(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_APPOINTMENT_REQUIRED === $cen) {
                $type->setAppointmentRequired(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AVAILABLE_TIME === $cen) {
                $type->addAvailableTime(FHIRHealthcareServiceAvailableTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOT_AVAILABLE === $cen) {
                $type->addNotAvailable(FHIRHealthcareServiceNotAvailable::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AVAILABILITY_EXCEPTIONS === $cen) {
                $type->setAvailabilityExceptions(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SERVICE_NAME])) {
            if (isset($type->serviceName)) {
                $type->serviceName->setValue((string)$attributes[self::FIELD_SERVICE_NAME]);
                $type->_setServiceNameValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setServiceName((string)$attributes[self::FIELD_SERVICE_NAME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMMENT])) {
            if (isset($type->comment)) {
                $type->comment->setValue((string)$attributes[self::FIELD_COMMENT]);
                $type->_setCommentValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setComment((string)$attributes[self::FIELD_COMMENT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXTRA_DETAILS])) {
            if (isset($type->extraDetails)) {
                $type->extraDetails->setValue((string)$attributes[self::FIELD_EXTRA_DETAILS]);
                $type->_setExtraDetailsValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExtraDetails((string)$attributes[self::FIELD_EXTRA_DETAILS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ELIGIBILITY_NOTE])) {
            if (isset($type->eligibilityNote)) {
                $type->eligibilityNote->setValue((string)$attributes[self::FIELD_ELIGIBILITY_NOTE]);
                $type->_setEligibilityNoteValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEligibilityNote((string)$attributes[self::FIELD_ELIGIBILITY_NOTE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PUBLIC_KEY])) {
            if (isset($type->publicKey)) {
                $type->publicKey->setValue((string)$attributes[self::FIELD_PUBLIC_KEY]);
                $type->_setPublicKeyValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPublicKey((string)$attributes[self::FIELD_PUBLIC_KEY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_APPOINTMENT_REQUIRED])) {
            if (isset($type->appointmentRequired)) {
                $type->appointmentRequired->setValue((string)$attributes[self::FIELD_APPOINTMENT_REQUIRED]);
                $type->_setAppointmentRequiredValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAppointmentRequired((string)$attributes[self::FIELD_APPOINTMENT_REQUIRED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AVAILABILITY_EXCEPTIONS])) {
            if (isset($type->availabilityExceptions)) {
                $type->availabilityExceptions->setValue((string)$attributes[self::FIELD_AVAILABILITY_EXCEPTIONS]);
                $type->_setAvailabilityExceptionsValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAvailabilityExceptions((string)$attributes[self::FIELD_AVAILABILITY_EXCEPTIONS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('HealthcareService', $this->_getSourceXMLNS());
        }
        if (isset($this->serviceName) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SERVICE_NAME]) {
            $xw->writeAttribute(self::FIELD_SERVICE_NAME, $this->serviceName->_getFormattedValue());
        }
        if (isset($this->comment) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMMENT]) {
            $xw->writeAttribute(self::FIELD_COMMENT, $this->comment->_getFormattedValue());
        }
        if (isset($this->extraDetails) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXTRA_DETAILS]) {
            $xw->writeAttribute(self::FIELD_EXTRA_DETAILS, $this->extraDetails->_getFormattedValue());
        }
        if (isset($this->eligibilityNote) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ELIGIBILITY_NOTE]) {
            $xw->writeAttribute(self::FIELD_ELIGIBILITY_NOTE, $this->eligibilityNote->_getFormattedValue());
        }
        if (isset($this->publicKey) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PUBLIC_KEY]) {
            $xw->writeAttribute(self::FIELD_PUBLIC_KEY, $this->publicKey->_getFormattedValue());
        }
        if (isset($this->appointmentRequired) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_APPOINTMENT_REQUIRED]) {
            $xw->writeAttribute(self::FIELD_APPOINTMENT_REQUIRED, $this->appointmentRequired->_getFormattedValue());
        }
        if (isset($this->availabilityExceptions) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS]) {
            $xw->writeAttribute(self::FIELD_AVAILABILITY_EXCEPTIONS, $this->availabilityExceptions->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->providedBy)) {
            $xw->startElement(self::FIELD_PROVIDED_BY);
            $this->providedBy->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->serviceCategory)) {
            $xw->startElement(self::FIELD_SERVICE_CATEGORY);
            $this->serviceCategory->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->serviceType)) {
            foreach ($this->serviceType as $v) {
                $xw->startElement(self::FIELD_SERVICE_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->serviceName)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SERVICE_NAME]
                || $this->serviceName->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SERVICE_NAME);
            $this->serviceName->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SERVICE_NAME]);
            $xw->endElement();
        }
        if (isset($this->comment)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COMMENT]
                || $this->comment->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COMMENT);
            $this->comment->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COMMENT]);
            $xw->endElement();
        }
        if (isset($this->extraDetails)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXTRA_DETAILS]
                || $this->extraDetails->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXTRA_DETAILS);
            $this->extraDetails->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXTRA_DETAILS]);
            $xw->endElement();
        }
        if (isset($this->photo)) {
            $xw->startElement(self::FIELD_PHOTO);
            $this->photo->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->telecom)) {
            foreach ($this->telecom as $v) {
                $xw->startElement(self::FIELD_TELECOM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->coverageArea)) {
            foreach ($this->coverageArea as $v) {
                $xw->startElement(self::FIELD_COVERAGE_AREA);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->serviceProvisionCode)) {
            foreach ($this->serviceProvisionCode as $v) {
                $xw->startElement(self::FIELD_SERVICE_PROVISION_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->eligibility)) {
            $xw->startElement(self::FIELD_ELIGIBILITY);
            $this->eligibility->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->eligibilityNote)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ELIGIBILITY_NOTE]
                || $this->eligibilityNote->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ELIGIBILITY_NOTE);
            $this->eligibilityNote->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ELIGIBILITY_NOTE]);
            $xw->endElement();
        }
        if (isset($this->programName) && [] !== $this->programName) {
            foreach($this->programName as $v) {
                $xw->startElement(self::FIELD_PROGRAM_NAME);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->characteristic)) {
            foreach ($this->characteristic as $v) {
                $xw->startElement(self::FIELD_CHARACTERISTIC);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->referralMethod)) {
            foreach ($this->referralMethod as $v) {
                $xw->startElement(self::FIELD_REFERRAL_METHOD);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->publicKey)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PUBLIC_KEY]
                || $this->publicKey->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PUBLIC_KEY);
            $this->publicKey->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PUBLIC_KEY]);
            $xw->endElement();
        }
        if (isset($this->appointmentRequired)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_APPOINTMENT_REQUIRED]
                || $this->appointmentRequired->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_APPOINTMENT_REQUIRED);
            $this->appointmentRequired->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_APPOINTMENT_REQUIRED]);
            $xw->endElement();
        }
        if (isset($this->availableTime)) {
            foreach ($this->availableTime as $v) {
                $xw->startElement(self::FIELD_AVAILABLE_TIME);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->notAvailable)) {
            foreach ($this->notAvailable as $v) {
                $xw->startElement(self::FIELD_NOT_AVAILABLE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->availabilityExceptions)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS]
                || $this->availabilityExceptions->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AVAILABILITY_EXCEPTIONS);
            $this->availabilityExceptions->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AVAILABILITY_EXCEPTIONS]);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRHealthcareService $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRHealthcareService
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRHealthcareService)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            $vs = $json[self::FIELD_IDENTIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PROVIDED_BY]) || array_key_exists(self::FIELD_PROVIDED_BY, $json)) {
            $type->setProvidedBy(FHIRReference::jsonUnserialize($json[self::FIELD_PROVIDED_BY], $config));
        }
        if (isset($json[self::FIELD_SERVICE_CATEGORY]) || array_key_exists(self::FIELD_SERVICE_CATEGORY, $json)) {
            $type->setServiceCategory(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_SERVICE_CATEGORY], $config));
        }
        if (isset($json[self::FIELD_SERVICE_TYPE]) || array_key_exists(self::FIELD_SERVICE_TYPE, $json)) {
            $vs = $json[self::FIELD_SERVICE_TYPE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addServiceType(FHIRHealthcareServiceServiceType::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_LOCATION]) || array_key_exists(self::FIELD_LOCATION, $json)) {
            $type->setLocation(FHIRReference::jsonUnserialize($json[self::FIELD_LOCATION], $config));
        }
        if (isset($json[self::FIELD_SERVICE_NAME])
            || isset($json[self::FIELD_SERVICE_NAME_EXT])
            || array_key_exists(self::FIELD_SERVICE_NAME, $json)
            || array_key_exists(self::FIELD_SERVICE_NAME_EXT, $json)) {
            $value = $json[self::FIELD_SERVICE_NAME] ?? null;
            $type->setServiceName(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_SERVICE_NAME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COMMENT])
            || isset($json[self::FIELD_COMMENT_EXT])
            || array_key_exists(self::FIELD_COMMENT, $json)
            || array_key_exists(self::FIELD_COMMENT_EXT, $json)) {
            $value = $json[self::FIELD_COMMENT] ?? null;
            $type->setComment(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_COMMENT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXTRA_DETAILS])
            || isset($json[self::FIELD_EXTRA_DETAILS_EXT])
            || array_key_exists(self::FIELD_EXTRA_DETAILS, $json)
            || array_key_exists(self::FIELD_EXTRA_DETAILS_EXT, $json)) {
            $value = $json[self::FIELD_EXTRA_DETAILS] ?? null;
            $type->setExtraDetails(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_EXTRA_DETAILS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PHOTO]) || array_key_exists(self::FIELD_PHOTO, $json)) {
            $type->setPhoto(FHIRAttachment::jsonUnserialize($json[self::FIELD_PHOTO], $config));
        }
        if (isset($json[self::FIELD_TELECOM]) || array_key_exists(self::FIELD_TELECOM, $json)) {
            $vs = $json[self::FIELD_TELECOM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addTelecom(FHIRContactPoint::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_COVERAGE_AREA]) || array_key_exists(self::FIELD_COVERAGE_AREA, $json)) {
            $vs = $json[self::FIELD_COVERAGE_AREA];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCoverageArea(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SERVICE_PROVISION_CODE]) || array_key_exists(self::FIELD_SERVICE_PROVISION_CODE, $json)) {
            $vs = $json[self::FIELD_SERVICE_PROVISION_CODE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addServiceProvisionCode(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ELIGIBILITY]) || array_key_exists(self::FIELD_ELIGIBILITY, $json)) {
            $type->setEligibility(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_ELIGIBILITY], $config));
        }
        if (isset($json[self::FIELD_ELIGIBILITY_NOTE])
            || isset($json[self::FIELD_ELIGIBILITY_NOTE_EXT])
            || array_key_exists(self::FIELD_ELIGIBILITY_NOTE, $json)
            || array_key_exists(self::FIELD_ELIGIBILITY_NOTE_EXT, $json)) {
            $value = $json[self::FIELD_ELIGIBILITY_NOTE] ?? null;
            $type->setEligibilityNote(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ELIGIBILITY_NOTE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PROGRAM_NAME])
            || isset($json[self::FIELD_PROGRAM_NAME_EXT])
            || array_key_exists(self::FIELD_PROGRAM_NAME, $json)
            || array_key_exists(self::FIELD_PROGRAM_NAME_EXT, $json)) {
            $value = (array)($json[self::FIELD_PROGRAM_NAME] ?? []);
            $ext = (array)($json[self::FIELD_PROGRAM_NAME_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addProgramName(FHIRString::jsonUnserialize(
                    [FHIRString::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_CHARACTERISTIC]) || array_key_exists(self::FIELD_CHARACTERISTIC, $json)) {
            $vs = $json[self::FIELD_CHARACTERISTIC];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCharacteristic(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_REFERRAL_METHOD]) || array_key_exists(self::FIELD_REFERRAL_METHOD, $json)) {
            $vs = $json[self::FIELD_REFERRAL_METHOD];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addReferralMethod(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PUBLIC_KEY])
            || isset($json[self::FIELD_PUBLIC_KEY_EXT])
            || array_key_exists(self::FIELD_PUBLIC_KEY, $json)
            || array_key_exists(self::FIELD_PUBLIC_KEY_EXT, $json)) {
            $value = $json[self::FIELD_PUBLIC_KEY] ?? null;
            $type->setPublicKey(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PUBLIC_KEY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_APPOINTMENT_REQUIRED])
            || isset($json[self::FIELD_APPOINTMENT_REQUIRED_EXT])
            || array_key_exists(self::FIELD_APPOINTMENT_REQUIRED, $json)
            || array_key_exists(self::FIELD_APPOINTMENT_REQUIRED_EXT, $json)) {
            $value = $json[self::FIELD_APPOINTMENT_REQUIRED] ?? null;
            $type->setAppointmentRequired(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_APPOINTMENT_REQUIRED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_AVAILABLE_TIME]) || array_key_exists(self::FIELD_AVAILABLE_TIME, $json)) {
            $vs = $json[self::FIELD_AVAILABLE_TIME];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAvailableTime(FHIRHealthcareServiceAvailableTime::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_NOT_AVAILABLE]) || array_key_exists(self::FIELD_NOT_AVAILABLE, $json)) {
            $vs = $json[self::FIELD_NOT_AVAILABLE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addNotAvailable(FHIRHealthcareServiceNotAvailable::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_AVAILABILITY_EXCEPTIONS])
            || isset($json[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT])
            || array_key_exists(self::FIELD_AVAILABILITY_EXCEPTIONS, $json)
            || array_key_exists(self::FIELD_AVAILABILITY_EXCEPTIONS_EXT, $json)) {
            $value = $json[self::FIELD_AVAILABILITY_EXCEPTIONS] ?? null;
            $type->setAvailabilityExceptions(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_AVAILABILITY_EXCEPTIONS_EXT] ?? []),
                $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->providedBy)) {
            $out->providedBy = $this->providedBy;
        }
        if (isset($this->serviceCategory)) {
            $out->serviceCategory = $this->serviceCategory;
        }
        if (isset($this->serviceType) && [] !== $this->serviceType) {
            $out->serviceType = $this->serviceType;
        }
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->serviceName)) {
            if (null !== ($val = $this->serviceName->getValue())) {
                $out->serviceName = $val;
            }
            if ($this->serviceName->_nonValueFieldDefined()) {
                $ext = $this->serviceName->jsonSerialize();
                unset($ext->value);
                $out->_serviceName = $ext;
            }
        }
        if (isset($this->comment)) {
            if (null !== ($val = $this->comment->getValue())) {
                $out->comment = $val;
            }
            if ($this->comment->_nonValueFieldDefined()) {
                $ext = $this->comment->jsonSerialize();
                unset($ext->value);
                $out->_comment = $ext;
            }
        }
        if (isset($this->extraDetails)) {
            if (null !== ($val = $this->extraDetails->getValue())) {
                $out->extraDetails = $val;
            }
            if ($this->extraDetails->_nonValueFieldDefined()) {
                $ext = $this->extraDetails->jsonSerialize();
                unset($ext->value);
                $out->_extraDetails = $ext;
            }
        }
        if (isset($this->photo)) {
            $out->photo = $this->photo;
        }
        if (isset($this->telecom) && [] !== $this->telecom) {
            $out->telecom = $this->telecom;
        }
        if (isset($this->coverageArea) && [] !== $this->coverageArea) {
            $out->coverageArea = $this->coverageArea;
        }
        if (isset($this->serviceProvisionCode) && [] !== $this->serviceProvisionCode) {
            $out->serviceProvisionCode = $this->serviceProvisionCode;
        }
        if (isset($this->eligibility)) {
            $out->eligibility = $this->eligibility;
        }
        if (isset($this->eligibilityNote)) {
            if (null !== ($val = $this->eligibilityNote->getValue())) {
                $out->eligibilityNote = $val;
            }
            if ($this->eligibilityNote->_nonValueFieldDefined()) {
                $ext = $this->eligibilityNote->jsonSerialize();
                unset($ext->value);
                $out->_eligibilityNote = $ext;
            }
        }
        if (isset($this->programName) && [] !== $this->programName) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->programName as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->programName = $vals;
            }
            if ($hasExts) {
                $out->_programName = $exts;
            }
        }
        if (isset($this->characteristic) && [] !== $this->characteristic) {
            $out->characteristic = $this->characteristic;
        }
        if (isset($this->referralMethod) && [] !== $this->referralMethod) {
            $out->referralMethod = $this->referralMethod;
        }
        if (isset($this->publicKey)) {
            if (null !== ($val = $this->publicKey->getValue())) {
                $out->publicKey = $val;
            }
            if ($this->publicKey->_nonValueFieldDefined()) {
                $ext = $this->publicKey->jsonSerialize();
                unset($ext->value);
                $out->_publicKey = $ext;
            }
        }
        if (isset($this->appointmentRequired)) {
            if (null !== ($val = $this->appointmentRequired->getValue())) {
                $out->appointmentRequired = $val;
            }
            if ($this->appointmentRequired->_nonValueFieldDefined()) {
                $ext = $this->appointmentRequired->jsonSerialize();
                unset($ext->value);
                $out->_appointmentRequired = $ext;
            }
        }
        if (isset($this->availableTime) && [] !== $this->availableTime) {
            $out->availableTime = $this->availableTime;
        }
        if (isset($this->notAvailable) && [] !== $this->notAvailable) {
            $out->notAvailable = $this->notAvailable;
        }
        if (isset($this->availabilityExceptions)) {
            if (null !== ($val = $this->availabilityExceptions->getValue())) {
                $out->availabilityExceptions = $val;
            }
            if ($this->availabilityExceptions->_nonValueFieldDefined()) {
                $ext = $this->availabilityExceptions->jsonSerialize();
                unset($ext->value);
                $out->_availabilityExceptions = $ext;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
    /* class_default.php:236 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}