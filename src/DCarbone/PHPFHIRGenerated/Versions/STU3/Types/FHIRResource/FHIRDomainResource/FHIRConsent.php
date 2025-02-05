<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 04:06+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConsentStateList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConsentState;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypeMap;

/**
 * A record of a healthcare consumer’s policy choices, which permits or denies
 * identified recipient(s) or recipient role(s) to perform one or more actions
 * within a given policy context, for specific purposes and periods of time.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRConsent extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONSENT;

    /* class_default.php:50 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_PERIOD = 'period';
    public const FIELD_DATE_TIME = 'dateTime';
    public const FIELD_DATE_TIME_EXT = '_dateTime';
    public const FIELD_CONSENTING_PARTY = 'consentingParty';
    public const FIELD_ACTOR = 'actor';
    public const FIELD_ACTION = 'action';
    public const FIELD_ORGANIZATION = 'organization';
    public const FIELD_SOURCE_ATTACHMENT = 'sourceAttachment';
    public const FIELD_SOURCE_IDENTIFIER = 'sourceIdentifier';
    public const FIELD_SOURCE_REFERENCE = 'sourceReference';
    public const FIELD_POLICY = 'policy';
    public const FIELD_POLICY_RULE = 'policyRule';
    public const FIELD_POLICY_RULE_EXT = '_policyRule';
    public const FIELD_SECURITY_LABEL = 'securityLabel';
    public const FIELD_PURPOSE = 'purpose';
    public const FIELD_DATA_PERIOD = 'dataPeriod';
    public const FIELD_DATA = 'data';
    public const FIELD_EXCEPT = 'except';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PATIENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_POLICY_RULE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $identifier;
    /**
     * Indicates the state of the consent
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this consent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConsentState 
     */
    protected FHIRConsentState $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $category;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare consumer to whom this consent applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Consent is applicable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $period;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Consent was issued / created / indexed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $dateTime;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either the Grantor, which is the entity responsible for granting the rights
     * listed in a Consent Directive or the Grantee, which is the entity responsible
     * for complying with the Consent Directive, including any obligations or
     * limitations on authorizations and enforcement of prohibitions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $consentingParty;
    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this consent. Use group to identify a set of actors
     * by some property they share (e.g. 'admitting officers').
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor[] 
     */
    protected array $actor;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions controlled by this consent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $action;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that manages the consent, and the framework within which it is
     * executed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $organization;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $sourceAttachment;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $sourceIdentifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $sourceReference;
    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy[] 
     */
    protected array $policy;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A referece to the specific computable policy.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $policyRule;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * consent. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $securityLabel;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this consent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $purpose;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this consent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $dataPeriod;
    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this consent, if specific resources are referenced.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData[] 
     */
    protected array $data;
    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept[] 
     */
    protected array $except;

    /* constructor.php:61 */
    /**
     * FHIRConsent Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConsentStateList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConsentState $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $period
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $dateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $consentingParty
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor[] $actor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $action
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $organization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $sourceAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $sourceIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $sourceReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy[] $policy
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $policyRule
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] $securityLabel
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[] $purpose
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $dataPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData[] $data
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept[] $except
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
                                null|FHIRIdentifier $identifier = null,
                                null|string|FHIRConsentStateList|FHIRConsentState $status = null,
                                null|iterable $category = null,
                                null|FHIRReference $patient = null,
                                null|FHIRPeriod $period = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateTime = null,
                                null|iterable $consentingParty = null,
                                null|iterable $actor = null,
                                null|iterable $action = null,
                                null|iterable $organization = null,
                                null|FHIRAttachment $sourceAttachment = null,
                                null|FHIRIdentifier $sourceIdentifier = null,
                                null|FHIRReference $sourceReference = null,
                                null|iterable $policy = null,
                                null|string|FHIRUriPrimitive|FHIRUri $policyRule = null,
                                null|iterable $securityLabel = null,
                                null|iterable $purpose = null,
                                null|FHIRPeriod $dataPeriod = null,
                                null|iterable $data = null,
                                null|iterable $except = null,
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
            $this->setIdentifier($identifier);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $category) {
            $this->setCategory(...$category);
        }
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $period) {
            $this->setPeriod($period);
        }
        if (null !== $dateTime) {
            $this->setDateTime($dateTime);
        }
        if (null !== $consentingParty) {
            $this->setConsentingParty(...$consentingParty);
        }
        if (null !== $actor) {
            $this->setActor(...$actor);
        }
        if (null !== $action) {
            $this->setAction(...$action);
        }
        if (null !== $organization) {
            $this->setOrganization(...$organization);
        }
        if (null !== $sourceAttachment) {
            $this->setSourceAttachment($sourceAttachment);
        }
        if (null !== $sourceIdentifier) {
            $this->setSourceIdentifier($sourceIdentifier);
        }
        if (null !== $sourceReference) {
            $this->setSourceReference($sourceReference);
        }
        if (null !== $policy) {
            $this->setPolicy(...$policy);
        }
        if (null !== $policyRule) {
            $this->setPolicyRule($policyRule);
        }
        if (null !== $securityLabel) {
            $this->setSecurityLabel(...$securityLabel);
        }
        if (null !== $purpose) {
            $this->setPurpose(...$purpose);
        }
        if (null !== $dataPeriod) {
            $this->setDataPeriod($dataPeriod);
        }
        if (null !== $data) {
            $this->setData(...$data);
        }
        if (null !== $except) {
            $this->setExcept(...$except);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:158 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier): self
    {
        if (null === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Indicates the state of the consent
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this consent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConsentState
     */
    public function getStatus(): null|FHIRConsentState
    {
        return $this->status ?? null;
    }

    /**
     * Indicates the state of the consent
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this consent.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConsentStateList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConsentState $status
     * @return static
     */
    public function setStatus(null|string|FHIRConsentStateList|FHIRConsentState $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRConsentState)) {
            $status = new FHIRConsentState(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory(): array
    {
        return $this->category ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCategoryIterator(): iterable
    {
        if (!isset($this->category)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->category);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(FHIRCodeableConcept $category): self
    {
        if (!isset($this->category)) {
            $this->category = [];
        }
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification of the type of consents found in the statement. This element
     * supports indexing and retrieval of consent statements.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept ...$category): self
    {
        if ([] === $category) {
            unset($this->category);
            return $this;
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare consumer to whom this consent applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare consumer to whom this consent applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient): self
    {
        if (null === $patient) {
            unset($this->patient);
            return $this;
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Consent is applicable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Consent is applicable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        $this->period = $period;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Consent was issued / created / indexed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getDateTime(): null|FHIRDateTime
    {
        return $this->dateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Consent was issued / created / indexed.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $dateTime
     * @return static
     */
    public function setDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateTime): self
    {
        if (null === $dateTime) {
            unset($this->dateTime);
            return $this;
        }
        if (!($dateTime instanceof FHIRDateTime)) {
            $dateTime = new FHIRDateTime(value: $dateTime);
        }
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either the Grantor, which is the entity responsible for granting the rights
     * listed in a Consent Directive or the Grantee, which is the entity responsible
     * for complying with the Consent Directive, including any obligations or
     * limitations on authorizations and enforcement of prohibitions.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getConsentingParty(): array
    {
        return $this->consentingParty ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getConsentingPartyIterator(): iterable
    {
        if (!isset($this->consentingParty)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->consentingParty);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either the Grantor, which is the entity responsible for granting the rights
     * listed in a Consent Directive or the Grantee, which is the entity responsible
     * for complying with the Consent Directive, including any obligations or
     * limitations on authorizations and enforcement of prohibitions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $consentingParty
     * @return static
     */
    public function addConsentingParty(FHIRReference $consentingParty): self
    {
        if (!isset($this->consentingParty)) {
            $this->consentingParty = [];
        }
        $this->consentingParty[] = $consentingParty;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Either the Grantor, which is the entity responsible for granting the rights
     * listed in a Consent Directive or the Grantee, which is the entity responsible
     * for complying with the Consent Directive, including any obligations or
     * limitations on authorizations and enforcement of prohibitions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$consentingParty
     * @return static
     */
    public function setConsentingParty(FHIRReference ...$consentingParty): self
    {
        if ([] === $consentingParty) {
            unset($this->consentingParty);
            return $this;
        }
        $this->consentingParty = $consentingParty;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this consent. Use group to identify a set of actors
     * by some property they share (e.g. 'admitting officers').
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor[]
     */
    public function getActor(): array
    {
        return $this->actor ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor>
     */
    public function getActorIterator(): iterable
    {
        if (!isset($this->actor)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->actor);
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this consent. Use group to identify a set of actors
     * by some property they share (e.g. 'admitting officers').
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor $actor
     * @return static
     */
    public function addActor(FHIRConsentActor $actor): self
    {
        if (!isset($this->actor)) {
            $this->actor = [];
        }
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this consent. Use group to identify a set of actors
     * by some property they share (e.g. 'admitting officers').
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor ...$actor
     * @return static
     */
    public function setActor(FHIRConsentActor ...$actor): self
    {
        if ([] === $actor) {
            unset($this->actor);
            return $this;
        }
        $this->actor = $actor;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions controlled by this consent.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction(): array
    {
        return $this->action ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getActionIterator(): iterable
    {
        if (!isset($this->action)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->action);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions controlled by this consent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $action
     * @return static
     */
    public function addAction(FHIRCodeableConcept $action): self
    {
        if (!isset($this->action)) {
            $this->action = [];
        }
        $this->action[] = $action;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Actions controlled by this consent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$action
     * @return static
     */
    public function setAction(FHIRCodeableConcept ...$action): self
    {
        if ([] === $action) {
            unset($this->action);
            return $this;
        }
        $this->action = $action;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that manages the consent, and the framework within which it is
     * executed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getOrganization(): array
    {
        return $this->organization ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getOrganizationIterator(): iterable
    {
        if (!isset($this->organization)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->organization);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that manages the consent, and the framework within which it is
     * executed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $organization
     * @return static
     */
    public function addOrganization(FHIRReference $organization): self
    {
        if (!isset($this->organization)) {
            $this->organization = [];
        }
        $this->organization[] = $organization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that manages the consent, and the framework within which it is
     * executed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$organization
     * @return static
     */
    public function setOrganization(FHIRReference ...$organization): self
    {
        if ([] === $organization) {
            unset($this->organization);
            return $this;
        }
        $this->organization = $organization;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment
     */
    public function getSourceAttachment(): null|FHIRAttachment
    {
        return $this->sourceAttachment ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment $sourceAttachment
     * @return static
     */
    public function setSourceAttachment(null|FHIRAttachment $sourceAttachment): self
    {
        if (null === $sourceAttachment) {
            unset($this->sourceAttachment);
            return $this;
        }
        $this->sourceAttachment = $sourceAttachment;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier
     */
    public function getSourceIdentifier(): null|FHIRIdentifier
    {
        return $this->sourceIdentifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $sourceIdentifier
     * @return static
     */
    public function setSourceIdentifier(null|FHIRIdentifier $sourceIdentifier): self
    {
        if (null === $sourceIdentifier) {
            unset($this->sourceIdentifier);
            return $this;
        }
        $this->sourceIdentifier = $sourceIdentifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getSourceReference(): null|FHIRReference
    {
        return $this->sourceReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form, or a reference to a consent that links back to such
     * a source, a reference to a document repository (e.g. XDS) that stores the
     * original consent document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $sourceReference
     * @return static
     */
    public function setSourceReference(null|FHIRReference $sourceReference): self
    {
        if (null === $sourceReference) {
            unset($this->sourceReference);
            return $this;
        }
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy[]
     */
    public function getPolicy(): array
    {
        return $this->policy ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy>
     */
    public function getPolicyIterator(): iterable
    {
        if (!isset($this->policy)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->policy);
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy $policy
     * @return static
     */
    public function addPolicy(FHIRConsentPolicy $policy): self
    {
        if (!isset($this->policy)) {
            $this->policy = [];
        }
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The references to the policies that are included in this consent scope. Policies
     * may be organizational, but are often defined jurisdictionally, or in law.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy ...$policy
     * @return static
     */
    public function setPolicy(FHIRConsentPolicy ...$policy): self
    {
        if ([] === $policy) {
            unset($this->policy);
            return $this;
        }
        $this->policy = $policy;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A referece to the specific computable policy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getPolicyRule(): null|FHIRUri
    {
        return $this->policyRule ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A referece to the specific computable policy.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $policyRule
     * @return static
     */
    public function setPolicyRule(null|string|FHIRUriPrimitive|FHIRUri $policyRule): self
    {
        if (null === $policyRule) {
            unset($this->policyRule);
            return $this;
        }
        if (!($policyRule instanceof FHIRUri)) {
            $policyRule = new FHIRUri(value: $policyRule);
        }
        $this->policyRule = $policyRule;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * consent. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel(): array
    {
        return $this->securityLabel ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding>
     */
    public function getSecurityLabelIterator(): iterable
    {
        if (!isset($this->securityLabel)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->securityLabel);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * consent. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $securityLabel
     * @return static
     */
    public function addSecurityLabel(FHIRCoding $securityLabel): self
    {
        if (!isset($this->securityLabel)) {
            $this->securityLabel = [];
        }
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * consent. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding ...$securityLabel
     * @return static
     */
    public function setSecurityLabel(FHIRCoding ...$securityLabel): self
    {
        if ([] === $securityLabel) {
            unset($this->securityLabel);
            return $this;
        }
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this consent.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding[]
     */
    public function getPurpose(): array
    {
        return $this->purpose ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding>
     */
    public function getPurposeIterator(): iterable
    {
        if (!isset($this->purpose)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->purpose);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this consent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding $purpose
     * @return static
     */
    public function addPurpose(FHIRCoding $purpose): self
    {
        if (!isset($this->purpose)) {
            $this->purpose = [];
        }
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this consent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding ...$purpose
     * @return static
     */
    public function setPurpose(FHIRCoding ...$purpose): self
    {
        if ([] === $purpose) {
            unset($this->purpose);
            return $this;
        }
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this consent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getDataPeriod(): null|FHIRPeriod
    {
        return $this->dataPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this consent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $dataPeriod
     * @return static
     */
    public function setDataPeriod(null|FHIRPeriod $dataPeriod): self
    {
        if (null === $dataPeriod) {
            unset($this->dataPeriod);
            return $this;
        }
        $this->dataPeriod = $dataPeriod;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this consent, if specific resources are referenced.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData[]
     */
    public function getData(): array
    {
        return $this->data ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData>
     */
    public function getDataIterator(): iterable
    {
        if (!isset($this->data)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->data);
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this consent, if specific resources are referenced.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData $data
     * @return static
     */
    public function addData(FHIRConsentData $data): self
    {
        if (!isset($this->data)) {
            $this->data = [];
        }
        $this->data[] = $data;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this consent, if specific resources are referenced.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData ...$data
     * @return static
     */
    public function setData(FHIRConsentData ...$data): self
    {
        if ([] === $data) {
            unset($this->data);
            return $this;
        }
        $this->data = $data;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept[]
     */
    public function getExcept(): array
    {
        return $this->except ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept>
     */
    public function getExceptIterator(): iterable
    {
        if (!isset($this->except)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->except);
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept $except
     * @return static
     */
    public function addExcept(FHIRConsentExcept $except): self
    {
        if (!isset($this->except)) {
            $this->except = [];
        }
        $this->except[] = $except;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept ...$except
     * @return static
     */
    public function setExcept(FHIRConsentExcept ...$except): self
    {
        if ([] === $except) {
            unset($this->except);
            return $this;
        }
        $this->except = $except;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRConsent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRConsent
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConsent)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRConsentState::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_TIME === $cen) {
                $type->setDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONSENTING_PARTY === $cen) {
                $type->addConsentingParty(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTOR === $cen) {
                $type->addActor(FHIRConsentActor::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTION === $cen) {
                $type->addAction(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORGANIZATION === $cen) {
                $type->addOrganization(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE_ATTACHMENT === $cen) {
                $type->setSourceAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE_IDENTIFIER === $cen) {
                $type->setSourceIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE_REFERENCE === $cen) {
                $type->setSourceReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POLICY === $cen) {
                $type->addPolicy(FHIRConsentPolicy::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POLICY_RULE === $cen) {
                $type->setPolicyRule(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SECURITY_LABEL === $cen) {
                $type->addSecurityLabel(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PURPOSE === $cen) {
                $type->addPurpose(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA_PERIOD === $cen) {
                $type->setDataPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA === $cen) {
                $type->addData(FHIRConsentData::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCEPT === $cen) {
                $type->addExcept(FHIRConsentExcept::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IMPLICIT_RULES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATE_TIME])) {
            if (isset($type->dateTime)) {
                $type->dateTime->setValue((string)$attributes[self::FIELD_DATE_TIME]);
            } else {
                $type->setDateTime((string)$attributes[self::FIELD_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_POLICY_RULE])) {
            if (isset($type->policyRule)) {
                $type->policyRule->setValue((string)$attributes[self::FIELD_POLICY_RULE]);
            } else {
                $type->setPolicyRule((string)$attributes[self::FIELD_POLICY_RULE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_POLICY_RULE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Consent', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->dateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_DATE_TIME, $this->dateTime->_getValueAsString());
        }
        if (isset($this->policyRule) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_POLICY_RULE]) {
            $xw->writeAttribute(self::FIELD_POLICY_RULE, $this->policyRule->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->category)) {
            foreach ($this->category as $v) {
                $xw->startElement(self::FIELD_CATEGORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE_TIME]
                || $this->dateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE_TIME);
            $this->dateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->consentingParty)) {
            foreach ($this->consentingParty as $v) {
                $xw->startElement(self::FIELD_CONSENTING_PARTY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->actor)) {
            foreach ($this->actor as $v) {
                $xw->startElement(self::FIELD_ACTOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->action)) {
            foreach ($this->action as $v) {
                $xw->startElement(self::FIELD_ACTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->organization)) {
            foreach ($this->organization as $v) {
                $xw->startElement(self::FIELD_ORGANIZATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->sourceAttachment)) {
            $xw->startElement(self::FIELD_SOURCE_ATTACHMENT);
            $this->sourceAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sourceIdentifier)) {
            $xw->startElement(self::FIELD_SOURCE_IDENTIFIER);
            $this->sourceIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sourceReference)) {
            $xw->startElement(self::FIELD_SOURCE_REFERENCE);
            $this->sourceReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->policy)) {
            foreach ($this->policy as $v) {
                $xw->startElement(self::FIELD_POLICY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->policyRule)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_POLICY_RULE]
                || $this->policyRule->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_POLICY_RULE);
            $this->policyRule->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_POLICY_RULE]);
            $xw->endElement();
        }
        if (isset($this->securityLabel)) {
            foreach ($this->securityLabel as $v) {
                $xw->startElement(self::FIELD_SECURITY_LABEL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->purpose)) {
            foreach ($this->purpose as $v) {
                $xw->startElement(self::FIELD_PURPOSE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dataPeriod)) {
            $xw->startElement(self::FIELD_DATA_PERIOD);
            $this->dataPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->data)) {
            foreach ($this->data as $v) {
                $xw->startElement(self::FIELD_DATA);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->except)) {
            foreach ($this->except as $v) {
                $xw->startElement(self::FIELD_EXCEPT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRConsent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRConsent
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConsent)) {
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
            $json = json_decode(json: $json, associative: false, depth: $config->getJSONDecodeMaxDepth());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->identifier) || property_exists($json, self::FIELD_IDENTIFIER)) {
            if (is_array($json->identifier)) {
                $type->setIdentifier(FHIRIdentifier::jsonUnserialize(reset($json->identifier), $config));
            } else {
                $type->setIdentifier(FHIRIdentifier::jsonUnserialize($json->identifier, $config));
            }
        }
        if (isset($json->status)
            || isset($json->_status)
            || property_exists($json, self::FIELD_STATUS)
            || property_exists($json, self::FIELD_STATUS_EXT)) {
            $v = $json->_status ?? new \stdClass();
            $v->value = $json->status ?? null;
            $type->setStatus(FHIRConsentState::jsonUnserialize($v, $config));
        }
        if (isset($json->category) || property_exists($json, self::FIELD_CATEGORY)) {
            if (is_object($json->category)) {
                $vals = [$json->category];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CATEGORY, true);
            } else {
                $vals = $json->category;
            }
            foreach($vals as $v) {
                $type->addCategory(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->patient) || property_exists($json, self::FIELD_PATIENT)) {
            if (is_array($json->patient)) {
                $type->setPatient(FHIRReference::jsonUnserialize(reset($json->patient), $config));
            } else {
                $type->setPatient(FHIRReference::jsonUnserialize($json->patient, $config));
            }
        }
        if (isset($json->period) || property_exists($json, self::FIELD_PERIOD)) {
            if (is_array($json->period)) {
                $type->setPeriod(FHIRPeriod::jsonUnserialize(reset($json->period), $config));
            } else {
                $type->setPeriod(FHIRPeriod::jsonUnserialize($json->period, $config));
            }
        }
        if (isset($json->dateTime)
            || isset($json->_dateTime)
            || property_exists($json, self::FIELD_DATE_TIME)
            || property_exists($json, self::FIELD_DATE_TIME_EXT)) {
            $v = $json->_dateTime ?? new \stdClass();
            $v->value = $json->dateTime ?? null;
            $type->setDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->consentingParty) || property_exists($json, self::FIELD_CONSENTING_PARTY)) {
            if (is_object($json->consentingParty)) {
                $vals = [$json->consentingParty];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONSENTING_PARTY, true);
            } else {
                $vals = $json->consentingParty;
            }
            foreach($vals as $v) {
                $type->addConsentingParty(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->actor) || property_exists($json, self::FIELD_ACTOR)) {
            if (is_object($json->actor)) {
                $vals = [$json->actor];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ACTOR, true);
            } else {
                $vals = $json->actor;
            }
            foreach($vals as $v) {
                $type->addActor(FHIRConsentActor::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->action) || property_exists($json, self::FIELD_ACTION)) {
            if (is_object($json->action)) {
                $vals = [$json->action];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ACTION, true);
            } else {
                $vals = $json->action;
            }
            foreach($vals as $v) {
                $type->addAction(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->organization) || property_exists($json, self::FIELD_ORGANIZATION)) {
            if (is_object($json->organization)) {
                $vals = [$json->organization];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ORGANIZATION, true);
            } else {
                $vals = $json->organization;
            }
            foreach($vals as $v) {
                $type->addOrganization(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->sourceAttachment) || property_exists($json, self::FIELD_SOURCE_ATTACHMENT)) {
            if (is_array($json->sourceAttachment)) {
                $type->setSourceAttachment(FHIRAttachment::jsonUnserialize(reset($json->sourceAttachment), $config));
            } else {
                $type->setSourceAttachment(FHIRAttachment::jsonUnserialize($json->sourceAttachment, $config));
            }
        }
        if (isset($json->sourceIdentifier) || property_exists($json, self::FIELD_SOURCE_IDENTIFIER)) {
            if (is_array($json->sourceIdentifier)) {
                $type->setSourceIdentifier(FHIRIdentifier::jsonUnserialize(reset($json->sourceIdentifier), $config));
            } else {
                $type->setSourceIdentifier(FHIRIdentifier::jsonUnserialize($json->sourceIdentifier, $config));
            }
        }
        if (isset($json->sourceReference) || property_exists($json, self::FIELD_SOURCE_REFERENCE)) {
            if (is_array($json->sourceReference)) {
                $type->setSourceReference(FHIRReference::jsonUnserialize(reset($json->sourceReference), $config));
            } else {
                $type->setSourceReference(FHIRReference::jsonUnserialize($json->sourceReference, $config));
            }
        }
        if (isset($json->policy) || property_exists($json, self::FIELD_POLICY)) {
            if (is_object($json->policy)) {
                $vals = [$json->policy];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_POLICY, true);
            } else {
                $vals = $json->policy;
            }
            foreach($vals as $v) {
                $type->addPolicy(FHIRConsentPolicy::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->policyRule)
            || isset($json->_policyRule)
            || property_exists($json, self::FIELD_POLICY_RULE)
            || property_exists($json, self::FIELD_POLICY_RULE_EXT)) {
            $v = $json->_policyRule ?? new \stdClass();
            $v->value = $json->policyRule ?? null;
            $type->setPolicyRule(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->securityLabel) || property_exists($json, self::FIELD_SECURITY_LABEL)) {
            if (is_object($json->securityLabel)) {
                $vals = [$json->securityLabel];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SECURITY_LABEL, true);
            } else {
                $vals = $json->securityLabel;
            }
            foreach($vals as $v) {
                $type->addSecurityLabel(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->purpose) || property_exists($json, self::FIELD_PURPOSE)) {
            if (is_object($json->purpose)) {
                $vals = [$json->purpose];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PURPOSE, true);
            } else {
                $vals = $json->purpose;
            }
            foreach($vals as $v) {
                $type->addPurpose(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->dataPeriod) || property_exists($json, self::FIELD_DATA_PERIOD)) {
            if (is_array($json->dataPeriod)) {
                $type->setDataPeriod(FHIRPeriod::jsonUnserialize(reset($json->dataPeriod), $config));
            } else {
                $type->setDataPeriod(FHIRPeriod::jsonUnserialize($json->dataPeriod, $config));
            }
        }
        if (isset($json->data) || property_exists($json, self::FIELD_DATA)) {
            if (is_object($json->data)) {
                $vals = [$json->data];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DATA, true);
            } else {
                $vals = $json->data;
            }
            foreach($vals as $v) {
                $type->addData(FHIRConsentData::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->except) || property_exists($json, self::FIELD_EXCEPT)) {
            if (is_object($json->except)) {
                $vals = [$json->except];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EXCEPT, true);
            } else {
                $vals = $json->except;
            }
            foreach($vals as $v) {
                $type->addExcept(FHIRConsentExcept::jsonUnserialize($v, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier)) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
                $out->_status = $ext;
            }
        }
        if (isset($this->category) && [] !== $this->category) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CATEGORY) && 1 === count($this->category)) {
                $out->category = $this->category[0];
            } else {
                $out->category = $this->category;
            }
        }
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        if (isset($this->dateTime)) {
            if (null !== ($val = $this->dateTime->getValue())) {
                $out->dateTime = $val;
            }
            if ($this->dateTime->_nonValueFieldDefined()) {
                $ext = $this->dateTime->jsonSerialize();
                unset($ext->value);
                $out->_dateTime = $ext;
            }
        }
        if (isset($this->consentingParty) && [] !== $this->consentingParty) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONSENTING_PARTY) && 1 === count($this->consentingParty)) {
                $out->consentingParty = $this->consentingParty[0];
            } else {
                $out->consentingParty = $this->consentingParty;
            }
        }
        if (isset($this->actor) && [] !== $this->actor) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ACTOR) && 1 === count($this->actor)) {
                $out->actor = $this->actor[0];
            } else {
                $out->actor = $this->actor;
            }
        }
        if (isset($this->action) && [] !== $this->action) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ACTION) && 1 === count($this->action)) {
                $out->action = $this->action[0];
            } else {
                $out->action = $this->action;
            }
        }
        if (isset($this->organization) && [] !== $this->organization) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ORGANIZATION) && 1 === count($this->organization)) {
                $out->organization = $this->organization[0];
            } else {
                $out->organization = $this->organization;
            }
        }
        if (isset($this->sourceAttachment)) {
            $out->sourceAttachment = $this->sourceAttachment;
        }
        if (isset($this->sourceIdentifier)) {
            $out->sourceIdentifier = $this->sourceIdentifier;
        }
        if (isset($this->sourceReference)) {
            $out->sourceReference = $this->sourceReference;
        }
        if (isset($this->policy) && [] !== $this->policy) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_POLICY) && 1 === count($this->policy)) {
                $out->policy = $this->policy[0];
            } else {
                $out->policy = $this->policy;
            }
        }
        if (isset($this->policyRule)) {
            if (null !== ($val = $this->policyRule->getValue())) {
                $out->policyRule = $val;
            }
            if ($this->policyRule->_nonValueFieldDefined()) {
                $ext = $this->policyRule->jsonSerialize();
                unset($ext->value);
                $out->_policyRule = $ext;
            }
        }
        if (isset($this->securityLabel) && [] !== $this->securityLabel) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SECURITY_LABEL) && 1 === count($this->securityLabel)) {
                $out->securityLabel = $this->securityLabel[0];
            } else {
                $out->securityLabel = $this->securityLabel;
            }
        }
        if (isset($this->purpose) && [] !== $this->purpose) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PURPOSE) && 1 === count($this->purpose)) {
                $out->purpose = $this->purpose[0];
            } else {
                $out->purpose = $this->purpose;
            }
        }
        if (isset($this->dataPeriod)) {
            $out->dataPeriod = $this->dataPeriod;
        }
        if (isset($this->data) && [] !== $this->data) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DATA) && 1 === count($this->data)) {
                $out->data = $this->data[0];
            } else {
                $out->data = $this->data;
            }
        }
        if (isset($this->except) && [] !== $this->except) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_EXCEPT) && 1 === count($this->except)) {
                $out->except = $this->except[0];
            } else {
                $out->except = $this->except;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}