<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
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
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicyBasis;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentProvisionType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentState;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConsentProvisionTypeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConsentStateEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * A record of a healthcare consumer’s choices or choices made on their behalf by
 * a third party, which permits or denies identified recipient(s) or recipient
 * role(s) to perform one or more actions within a given policy context, for
 * specific purposes and periods of time.
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
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_PERIOD = 'period';
    public const FIELD_GRANTOR = 'grantor';
    public const FIELD_GRANTEE = 'grantee';
    public const FIELD_MANAGER = 'manager';
    public const FIELD_CONTROLLER = 'controller';
    public const FIELD_SOURCE_ATTACHMENT = 'sourceAttachment';
    public const FIELD_SOURCE_REFERENCE = 'sourceReference';
    public const FIELD_REGULATORY_BASIS = 'regulatoryBasis';
    public const FIELD_POLICY_BASIS = 'policyBasis';
    public const FIELD_POLICY_TEXT = 'policyText';
    public const FIELD_VERIFICATION = 'verification';
    public const FIELD_DECISION = 'decision';
    public const FIELD_DECISION_EXT = '_decision';
    public const FIELD_PROVISION = 'provision';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DECISION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this Consent resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentState 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $category;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare practitioner or group of persons to whom this consent
     * applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $subject;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date the consent instance was agreed to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    protected FHIRDate $date;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Effective period for this Consent Resource and all provisions unless specified
     * in that provision.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $period;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $grantor;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for complying with the Consent Directive, including any
     * obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $grantee;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $manager;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $controller;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment[] 
     */
    protected array $sourceAttachment;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a consent that links back to such a source, a reference to a
     * document repository (e.g. XDS) that stores the original consent document.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $sourceReference;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent
     * supports.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $regulatoryBasis;
    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * A Reference or URL used to uniquely identify the policy the organization will
     * enforce for this Consent. This Reference or URL should be specific to the
     * version of the policy and should be dereferencable to a computable policy of
     * some form.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicyBasis 
     */
    protected FHIRConsentPolicyBasis $policyBasis;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $policyText;
    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification[] 
     */
    protected array $verification;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Action to take - permit or deny - as default.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentProvisionType 
     */
    protected FHIRConsentProvisionType $decision;
    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision[] 
     */
    protected array $provision;

    /* constructor.php:61 */
    /**
     * FHIRConsent Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConsentStateEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentState $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $date
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $grantor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $grantee
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $manager
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $controller
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment[] $sourceAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $sourceReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $regulatoryBasis
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicyBasis $policyBasis
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $policyText
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification[] $verification
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConsentProvisionTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentProvisionType $decision
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision[] $provision
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
                                null|string|FHIRConsentStateEnum|FHIRConsentState $status = null,
                                null|iterable $category = null,
                                null|FHIRReference $subject = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date = null,
                                null|FHIRPeriod $period = null,
                                null|iterable $grantor = null,
                                null|iterable $grantee = null,
                                null|iterable $manager = null,
                                null|iterable $controller = null,
                                null|iterable $sourceAttachment = null,
                                null|iterable $sourceReference = null,
                                null|iterable $regulatoryBasis = null,
                                null|FHIRConsentPolicyBasis $policyBasis = null,
                                null|iterable $policyText = null,
                                null|iterable $verification = null,
                                null|string|FHIRConsentProvisionTypeEnum|FHIRConsentProvisionType $decision = null,
                                null|iterable $provision = null,
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
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $category) {
            $this->setCategory(...$category);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $period) {
            $this->setPeriod($period);
        }
        if (null !== $grantor) {
            $this->setGrantor(...$grantor);
        }
        if (null !== $grantee) {
            $this->setGrantee(...$grantee);
        }
        if (null !== $manager) {
            $this->setManager(...$manager);
        }
        if (null !== $controller) {
            $this->setController(...$controller);
        }
        if (null !== $sourceAttachment) {
            $this->setSourceAttachment(...$sourceAttachment);
        }
        if (null !== $sourceReference) {
            $this->setSourceReference(...$sourceReference);
        }
        if (null !== $regulatoryBasis) {
            $this->setRegulatoryBasis(...$regulatoryBasis);
        }
        if (null !== $policyBasis) {
            $this->setPolicyBasis($policyBasis);
        }
        if (null !== $policyText) {
            $this->setPolicyText(...$policyText);
        }
        if (null !== $verification) {
            $this->setVerification(...$verification);
        }
        if (null !== $decision) {
            $this->setDecision($decision);
        }
        if (null !== $provision) {
            $this->setProvision(...$provision);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:151 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this copy of the Consent Statement.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this Consent resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentState
     */
    public function getStatus(): null|FHIRConsentState
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the current state of this Consent resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConsentStateEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentState $status
     * @return static
     */
    public function setStatus(null|string|FHIRConsentStateEnum|FHIRConsentState $status): self
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCategory(): array
    {
        return $this->category ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$category
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
     * The patient/healthcare practitioner or group of persons to whom this consent
     * applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient/healthcare practitioner or group of persons to whom this consent
     * applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject): self
    {
        if (null === $subject) {
            unset($this->subject);
            return $this;
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date the consent instance was agreed to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate
     */
    public function getDate(): null|FHIRDate
    {
        return $this->date ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date the consent instance was agreed to.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $date
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $date): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDate)) {
            $date = new FHIRDate(value: $date);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Effective period for this Consent Resource and all provisions unless specified
     * in that provision.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
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
     * Effective period for this Consent Resource and all provisions unless specified
     * in that provision.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getGrantor(): array
    {
        return $this->grantor ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getGrantorIterator(): iterable
    {
        if (!isset($this->grantor)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->grantor);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $grantor
     * @return static
     */
    public function addGrantor(FHIRReference $grantor): self
    {
        if (!isset($this->grantor)) {
            $this->grantor = [];
        }
        $this->grantor[] = $grantor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for granting the rights listed in a Consent Directive.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$grantor
     * @return static
     */
    public function setGrantor(FHIRReference ...$grantor): self
    {
        if ([] === $grantor) {
            unset($this->grantor);
            return $this;
        }
        $this->grantor = $grantor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for complying with the Consent Directive, including any
     * obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getGrantee(): array
    {
        return $this->grantee ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getGranteeIterator(): iterable
    {
        if (!isset($this->grantee)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->grantee);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for complying with the Consent Directive, including any
     * obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $grantee
     * @return static
     */
    public function addGrantee(FHIRReference $grantee): self
    {
        if (!isset($this->grantee)) {
            $this->grantee = [];
        }
        $this->grantee[] = $grantee;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity responsible for complying with the Consent Directive, including any
     * obligations or limitations on authorizations and enforcement of prohibitions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$grantee
     * @return static
     */
    public function setGrantee(FHIRReference ...$grantee): self
    {
        if ([] === $grantee) {
            unset($this->grantee);
            return $this;
        }
        $this->grantee = $grantee;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getManager(): array
    {
        return $this->manager ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getManagerIterator(): iterable
    {
        if (!isset($this->manager)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->manager);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $manager
     * @return static
     */
    public function addManager(FHIRReference $manager): self
    {
        if (!isset($this->manager)) {
            $this->manager = [];
        }
        $this->manager[] = $manager;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that manages the consent through its lifecycle.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$manager
     * @return static
     */
    public function setManager(FHIRReference ...$manager): self
    {
        if ([] === $manager) {
            unset($this->manager);
            return $this;
        }
        $this->manager = $manager;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getController(): array
    {
        return $this->controller ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getControllerIterator(): iterable
    {
        if (!isset($this->controller)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->controller);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $controller
     * @return static
     */
    public function addController(FHIRReference $controller): self
    {
        if (!isset($this->controller)) {
            $this->controller = [];
        }
        $this->controller[] = $controller;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actor that controls/enforces the access according to the consent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$controller
     * @return static
     */
    public function setController(FHIRReference ...$controller): self
    {
        if ([] === $controller) {
            unset($this->controller);
            return $this;
        }
        $this->controller = $controller;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment[]
     */
    public function getSourceAttachment(): array
    {
        return $this->sourceAttachment ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment>
     */
    public function getSourceAttachmentIterator(): iterable
    {
        if (!isset($this->sourceAttachment)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->sourceAttachment);
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $sourceAttachment
     * @return static
     */
    public function addSourceAttachment(FHIRAttachment $sourceAttachment): self
    {
        if (!isset($this->sourceAttachment)) {
            $this->sourceAttachment = [];
        }
        $this->sourceAttachment[] = $sourceAttachment;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source on which this consent statement is based. The source might be a
     * scanned original paper form.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment ...$sourceAttachment
     * @return static
     */
    public function setSourceAttachment(FHIRAttachment ...$sourceAttachment): self
    {
        if ([] === $sourceAttachment) {
            unset($this->sourceAttachment);
            return $this;
        }
        $this->sourceAttachment = $sourceAttachment;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a consent that links back to such a source, a reference to a
     * document repository (e.g. XDS) that stores the original consent document.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getSourceReference(): array
    {
        return $this->sourceReference ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSourceReferenceIterator(): iterable
    {
        if (!isset($this->sourceReference)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->sourceReference);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a consent that links back to such a source, a reference to a
     * document repository (e.g. XDS) that stores the original consent document.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $sourceReference
     * @return static
     */
    public function addSourceReference(FHIRReference $sourceReference): self
    {
        if (!isset($this->sourceReference)) {
            $this->sourceReference = [];
        }
        $this->sourceReference[] = $sourceReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a consent that links back to such a source, a reference to a
     * document repository (e.g. XDS) that stores the original consent document.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$sourceReference
     * @return static
     */
    public function setSourceReference(FHIRReference ...$sourceReference): self
    {
        if ([] === $sourceReference) {
            unset($this->sourceReference);
            return $this;
        }
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent
     * supports.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getRegulatoryBasis(): array
    {
        return $this->regulatoryBasis ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getRegulatoryBasisIterator(): iterable
    {
        if (!isset($this->regulatoryBasis)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->regulatoryBasis);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent
     * supports.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $regulatoryBasis
     * @return static
     */
    public function addRegulatoryBasis(FHIRCodeableConcept $regulatoryBasis): self
    {
        if (!isset($this->regulatoryBasis)) {
            $this->regulatoryBasis = [];
        }
        $this->regulatoryBasis[] = $regulatoryBasis;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of codes that indicate the regulatory basis (if any) that this consent
     * supports.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$regulatoryBasis
     * @return static
     */
    public function setRegulatoryBasis(FHIRCodeableConcept ...$regulatoryBasis): self
    {
        if ([] === $regulatoryBasis) {
            unset($this->regulatoryBasis);
            return $this;
        }
        $this->regulatoryBasis = $regulatoryBasis;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * A Reference or URL used to uniquely identify the policy the organization will
     * enforce for this Consent. This Reference or URL should be specific to the
     * version of the policy and should be dereferencable to a computable policy of
     * some form.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicyBasis
     */
    public function getPolicyBasis(): null|FHIRConsentPolicyBasis
    {
        return $this->policyBasis ?? null;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * A Reference or URL used to uniquely identify the policy the organization will
     * enforce for this Consent. This Reference or URL should be specific to the
     * version of the policy and should be dereferencable to a computable policy of
     * some form.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicyBasis $policyBasis
     * @return static
     */
    public function setPolicyBasis(null|FHIRConsentPolicyBasis $policyBasis): self
    {
        if (null === $policyBasis) {
            unset($this->policyBasis);
            return $this;
        }
        $this->policyBasis = $policyBasis;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getPolicyText(): array
    {
        return $this->policyText ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getPolicyTextIterator(): iterable
    {
        if (!isset($this->policyText)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->policyText);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $policyText
     * @return static
     */
    public function addPolicyText(FHIRReference $policyText): self
    {
        if (!isset($this->policyText)) {
            $this->policyText = [];
        }
        $this->policyText[] = $policyText;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Reference to the human readable policy explaining the basis for the Consent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$policyText
     * @return static
     */
    public function setPolicyText(FHIRReference ...$policyText): self
    {
        if ([] === $policyText) {
            unset($this->policyText);
            return $this;
        }
        $this->policyText = $policyText;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification[]
     */
    public function getVerification(): array
    {
        return $this->verification ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification>
     */
    public function getVerificationIterator(): iterable
    {
        if (!isset($this->verification)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->verification);
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification $verification
     * @return static
     */
    public function addVerification(FHIRConsentVerification $verification): self
    {
        if (!isset($this->verification)) {
            $this->verification = [];
        }
        $this->verification[] = $verification;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * Whether a treatment instruction (e.g. artificial respiration: yes or no) was
     * verified with the patient, his/her family or another authorized person.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification ...$verification
     * @return static
     */
    public function setVerification(FHIRConsentVerification ...$verification): self
    {
        if ([] === $verification) {
            unset($this->verification);
            return $this;
        }
        $this->verification = $verification;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Action to take - permit or deny - as default.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentProvisionType
     */
    public function getDecision(): null|FHIRConsentProvisionType
    {
        return $this->decision ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Action to take - permit or deny - as default.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConsentProvisionTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentProvisionType $decision
     * @return static
     */
    public function setDecision(null|string|FHIRConsentProvisionTypeEnum|FHIRConsentProvisionType $decision): self
    {
        if (null === $decision) {
            unset($this->decision);
            return $this;
        }
        if (!($decision instanceof FHIRConsentProvisionType)) {
            $decision = new FHIRConsentProvisionType(value: $decision);
        }
        $this->decision = $decision;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision[]
     */
    public function getProvision(): array
    {
        return $this->provision ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision>
     */
    public function getProvisionIterator(): iterable
    {
        if (!isset($this->provision)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->provision);
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision $provision
     * @return static
     */
    public function addProvision(FHIRConsentProvision $provision): self
    {
        if (!isset($this->provision)) {
            $this->provision = [];
        }
        $this->provision[] = $provision;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s choices or choices made on their behalf by
     * a third party, which permits or denies identified recipient(s) or recipient
     * role(s) to perform one or more actions within a given policy context, for
     * specific purposes and periods of time.
     *
     * An exception to the base policy of this consent. An exception can be an addition
     * or removal of access permissions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision ...$provision
     * @return static
     */
    public function setProvision(FHIRConsentProvision ...$provision): self
    {
        if ([] === $provision) {
            unset($this->provision);
            return $this;
        }
        $this->provision = $provision;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRConsent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRConsent
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRConsentState::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE === $cen) {
                $type->setDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GRANTOR === $cen) {
                $type->addGrantor(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GRANTEE === $cen) {
                $type->addGrantee(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MANAGER === $cen) {
                $type->addManager(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTROLLER === $cen) {
                $type->addController(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE_ATTACHMENT === $cen) {
                $type->addSourceAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE_REFERENCE === $cen) {
                $type->addSourceReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REGULATORY_BASIS === $cen) {
                $type->addRegulatoryBasis(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POLICY_BASIS === $cen) {
                $type->setPolicyBasis(FHIRConsentPolicyBasis::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POLICY_TEXT === $cen) {
                $type->addPolicyText(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VERIFICATION === $cen) {
                $type->addVerification(FHIRConsentVerification::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DECISION === $cen) {
                $type->setDecision(FHIRConsentProvisionType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROVISION === $cen) {
                $type->addProvision(FHIRConsentProvision::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_DATE])) {
            if (isset($type->date)) {
                $type->date->setValue((string)$attributes[self::FIELD_DATE]);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DECISION])) {
            if (isset($type->decision)) {
                $type->decision->setValue((string)$attributes[self::FIELD_DECISION]);
            } else {
                $type->setDecision((string)$attributes[self::FIELD_DECISION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DECISION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->date) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE]) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->_getValueAsString());
        }
        if (isset($this->decision) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DECISION]) {
            $xw->writeAttribute(self::FIELD_DECISION, $this->decision->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->date)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE]
                || $this->date->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE]);
            $xw->endElement();
        }
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->grantor)) {
            foreach ($this->grantor as $v) {
                $xw->startElement(self::FIELD_GRANTOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->grantee)) {
            foreach ($this->grantee as $v) {
                $xw->startElement(self::FIELD_GRANTEE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->manager)) {
            foreach ($this->manager as $v) {
                $xw->startElement(self::FIELD_MANAGER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->controller)) {
            foreach ($this->controller as $v) {
                $xw->startElement(self::FIELD_CONTROLLER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->sourceAttachment)) {
            foreach ($this->sourceAttachment as $v) {
                $xw->startElement(self::FIELD_SOURCE_ATTACHMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->sourceReference)) {
            foreach ($this->sourceReference as $v) {
                $xw->startElement(self::FIELD_SOURCE_REFERENCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->regulatoryBasis)) {
            foreach ($this->regulatoryBasis as $v) {
                $xw->startElement(self::FIELD_REGULATORY_BASIS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->policyBasis)) {
            $xw->startElement(self::FIELD_POLICY_BASIS);
            $this->policyBasis->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->policyText)) {
            foreach ($this->policyText as $v) {
                $xw->startElement(self::FIELD_POLICY_TEXT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->verification)) {
            foreach ($this->verification as $v) {
                $xw->startElement(self::FIELD_VERIFICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->decision)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DECISION]
                || $this->decision->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DECISION);
            $this->decision->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DECISION]);
            $xw->endElement();
        }
        if (isset($this->provision)) {
            foreach ($this->provision as $v) {
                $xw->startElement(self::FIELD_PROVISION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRConsent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRConsent
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
            $json = json_decode(json: $json,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->identifier) || property_exists($json, self::FIELD_IDENTIFIER)) {
            if (is_object($json->identifier)) {
                $vals = [$json->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $json->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
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
        if (isset($json->subject) || property_exists($json, self::FIELD_SUBJECT)) {
            if (is_array($json->subject)) {
                $type->setSubject(FHIRReference::jsonUnserialize(reset($json->subject), $config));
            } else {
                $type->setSubject(FHIRReference::jsonUnserialize($json->subject, $config));
            }
        }
        if (isset($json->date)
            || isset($json->_date)
            || property_exists($json, self::FIELD_DATE)
            || property_exists($json, self::FIELD_DATE_EXT)) {
            $v = $json->_date ?? new \stdClass();
            $v->value = $json->date ?? null;
            $type->setDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($json->period) || property_exists($json, self::FIELD_PERIOD)) {
            if (is_array($json->period)) {
                $type->setPeriod(FHIRPeriod::jsonUnserialize(reset($json->period), $config));
            } else {
                $type->setPeriod(FHIRPeriod::jsonUnserialize($json->period, $config));
            }
        }
        if (isset($json->grantor) || property_exists($json, self::FIELD_GRANTOR)) {
            if (is_object($json->grantor)) {
                $vals = [$json->grantor];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_GRANTOR, true);
            } else {
                $vals = $json->grantor;
            }
            foreach($vals as $v) {
                $type->addGrantor(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->grantee) || property_exists($json, self::FIELD_GRANTEE)) {
            if (is_object($json->grantee)) {
                $vals = [$json->grantee];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_GRANTEE, true);
            } else {
                $vals = $json->grantee;
            }
            foreach($vals as $v) {
                $type->addGrantee(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->manager) || property_exists($json, self::FIELD_MANAGER)) {
            if (is_object($json->manager)) {
                $vals = [$json->manager];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MANAGER, true);
            } else {
                $vals = $json->manager;
            }
            foreach($vals as $v) {
                $type->addManager(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->controller) || property_exists($json, self::FIELD_CONTROLLER)) {
            if (is_object($json->controller)) {
                $vals = [$json->controller];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTROLLER, true);
            } else {
                $vals = $json->controller;
            }
            foreach($vals as $v) {
                $type->addController(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->sourceAttachment) || property_exists($json, self::FIELD_SOURCE_ATTACHMENT)) {
            if (is_object($json->sourceAttachment)) {
                $vals = [$json->sourceAttachment];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SOURCE_ATTACHMENT, true);
            } else {
                $vals = $json->sourceAttachment;
            }
            foreach($vals as $v) {
                $type->addSourceAttachment(FHIRAttachment::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->sourceReference) || property_exists($json, self::FIELD_SOURCE_REFERENCE)) {
            if (is_object($json->sourceReference)) {
                $vals = [$json->sourceReference];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SOURCE_REFERENCE, true);
            } else {
                $vals = $json->sourceReference;
            }
            foreach($vals as $v) {
                $type->addSourceReference(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->regulatoryBasis) || property_exists($json, self::FIELD_REGULATORY_BASIS)) {
            if (is_object($json->regulatoryBasis)) {
                $vals = [$json->regulatoryBasis];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REGULATORY_BASIS, true);
            } else {
                $vals = $json->regulatoryBasis;
            }
            foreach($vals as $v) {
                $type->addRegulatoryBasis(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->policyBasis) || property_exists($json, self::FIELD_POLICY_BASIS)) {
            if (is_array($json->policyBasis)) {
                $type->setPolicyBasis(FHIRConsentPolicyBasis::jsonUnserialize(reset($json->policyBasis), $config));
            } else {
                $type->setPolicyBasis(FHIRConsentPolicyBasis::jsonUnserialize($json->policyBasis, $config));
            }
        }
        if (isset($json->policyText) || property_exists($json, self::FIELD_POLICY_TEXT)) {
            if (is_object($json->policyText)) {
                $vals = [$json->policyText];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_POLICY_TEXT, true);
            } else {
                $vals = $json->policyText;
            }
            foreach($vals as $v) {
                $type->addPolicyText(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->verification) || property_exists($json, self::FIELD_VERIFICATION)) {
            if (is_object($json->verification)) {
                $vals = [$json->verification];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_VERIFICATION, true);
            } else {
                $vals = $json->verification;
            }
            foreach($vals as $v) {
                $type->addVerification(FHIRConsentVerification::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->decision)
            || isset($json->_decision)
            || property_exists($json, self::FIELD_DECISION)
            || property_exists($json, self::FIELD_DECISION_EXT)) {
            $v = $json->_decision ?? new \stdClass();
            $v->value = $json->decision ?? null;
            $type->setDecision(FHIRConsentProvisionType::jsonUnserialize($v, $config));
        }
        if (isset($json->provision) || property_exists($json, self::FIELD_PROVISION)) {
            if (is_object($json->provision)) {
                $vals = [$json->provision];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROVISION, true);
            } else {
                $vals = $json->provision;
            }
            foreach($vals as $v) {
                $type->addProvision(FHIRConsentProvision::jsonUnserialize($v, $config));
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
        if (isset($this->identifier) && [] !== $this->identifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
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
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            if ($this->date->_nonValueFieldDefined()) {
                $ext = $this->date->jsonSerialize();
                unset($ext->value);
                $out->_date = $ext;
            }
        }
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        if (isset($this->grantor) && [] !== $this->grantor) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_GRANTOR) && 1 === count($this->grantor)) {
                $out->grantor = $this->grantor[0];
            } else {
                $out->grantor = $this->grantor;
            }
        }
        if (isset($this->grantee) && [] !== $this->grantee) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_GRANTEE) && 1 === count($this->grantee)) {
                $out->grantee = $this->grantee[0];
            } else {
                $out->grantee = $this->grantee;
            }
        }
        if (isset($this->manager) && [] !== $this->manager) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MANAGER) && 1 === count($this->manager)) {
                $out->manager = $this->manager[0];
            } else {
                $out->manager = $this->manager;
            }
        }
        if (isset($this->controller) && [] !== $this->controller) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTROLLER) && 1 === count($this->controller)) {
                $out->controller = $this->controller[0];
            } else {
                $out->controller = $this->controller;
            }
        }
        if (isset($this->sourceAttachment) && [] !== $this->sourceAttachment) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SOURCE_ATTACHMENT) && 1 === count($this->sourceAttachment)) {
                $out->sourceAttachment = $this->sourceAttachment[0];
            } else {
                $out->sourceAttachment = $this->sourceAttachment;
            }
        }
        if (isset($this->sourceReference) && [] !== $this->sourceReference) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SOURCE_REFERENCE) && 1 === count($this->sourceReference)) {
                $out->sourceReference = $this->sourceReference[0];
            } else {
                $out->sourceReference = $this->sourceReference;
            }
        }
        if (isset($this->regulatoryBasis) && [] !== $this->regulatoryBasis) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REGULATORY_BASIS) && 1 === count($this->regulatoryBasis)) {
                $out->regulatoryBasis = $this->regulatoryBasis[0];
            } else {
                $out->regulatoryBasis = $this->regulatoryBasis;
            }
        }
        if (isset($this->policyBasis)) {
            $out->policyBasis = $this->policyBasis;
        }
        if (isset($this->policyText) && [] !== $this->policyText) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_POLICY_TEXT) && 1 === count($this->policyText)) {
                $out->policyText = $this->policyText[0];
            } else {
                $out->policyText = $this->policyText;
            }
        }
        if (isset($this->verification) && [] !== $this->verification) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_VERIFICATION) && 1 === count($this->verification)) {
                $out->verification = $this->verification[0];
            } else {
                $out->verification = $this->verification;
            }
        }
        if (isset($this->decision)) {
            if (null !== ($val = $this->decision->getValue())) {
                $out->decision = $val;
            }
            if ($this->decision->_nonValueFieldDefined()) {
                $ext = $this->decision->jsonSerialize();
                unset($ext->value);
                $out->_decision = $ext;
            }
        }
        if (isset($this->provision) && [] !== $this->provision) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROVISION) && 1 === count($this->provision)) {
                $out->provision = $this->provision[0];
            } else {
                $out->provision = $this->provision;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}