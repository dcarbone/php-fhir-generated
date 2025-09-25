<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 25th, 2025 15:14+0000
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
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRKind;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRKindEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * Financial instrument which may be used to reimburse or pay for health care
 * products and services. Includes both insurance and self-payment.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRCoverage extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_COVERAGE;

    /* class_default.php:56 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_KIND = 'kind';
    public const FIELD_KIND_EXT = '_kind';
    public const FIELD_PAYMENT_BY = 'paymentBy';
    public const FIELD_TYPE = 'type';
    public const FIELD_POLICY_HOLDER = 'policyHolder';
    public const FIELD_SUBSCRIBER = 'subscriber';
    public const FIELD_SUBSCRIBER_ID = 'subscriberId';
    public const FIELD_BENEFICIARY = 'beneficiary';
    public const FIELD_DEPENDENT = 'dependent';
    public const FIELD_DEPENDENT_EXT = '_dependent';
    public const FIELD_RELATIONSHIP = 'relationship';
    public const FIELD_PERIOD = 'period';
    public const FIELD_INSURER = 'insurer';
    public const FIELD_CLASS = 'class';
    public const FIELD_ORDER = 'order';
    public const FIELD_ORDER_EXT = '_order';
    public const FIELD_NETWORK = 'network';
    public const FIELD_NETWORK_EXT = '_network';
    public const FIELD_COST_TO_BENEFICIARY = 'costToBeneficiary';
    public const FIELD_SUBROGATION = 'subrogation';
    public const FIELD_SUBROGATION_EXT = '_subrogation';
    public const FIELD_CONTRACT = 'contract';
    public const FIELD_INSURANCE_PLAN = 'insurancePlan';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_KIND => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_BENEFICIARY => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_KIND => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEPENDENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ORDER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NETWORK => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUBROGATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier of the coverage as issued by the insurer.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $identifier;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes 
     */
    #[FHIRFinancialResourceStatusCodes]
    protected FHIRFinancialResourceStatusCodes $status;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The nature of the coverage be it insurance, or cash payment such as self-pay.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRKind 
     */
    #[FHIRKind]
    protected FHIRKind $kind;
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * Link to the paying party and optionally what specifically they will be
     * responsible to pay.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy> 
     */
    #[FHIRCoveragePaymentBy]
    protected array $paymentBy;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $type;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance policy.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $policyHolder;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $subscriber;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
    protected array $subscriberId;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who benefits from the insurance coverage; the patient when products
     * and/or services are provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $beneficiary;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A designator for a dependent under the coverage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $dependent;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $relationship;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    #[FHIRPeriod]
    protected FHIRPeriod $period;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter, payor, insurance company.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $insurer;
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass> 
     */
    #[FHIRCoverageClass]
    protected array $class;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently in force. Note, there may be gaps in the numbering and this does
     * not imply primary, secondary etc. as the specific positioning of coverages
     * depends upon the episode of care. For example; a patient might have (0) auto
     * insurance (1) their own health insurance and (2) spouse's health insurance. When
     * claiming for treatments which were not the result of an auto accident then only
     * coverages (1) and (2) above would be applicatble and would apply in the order
     * specified in parenthesis.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    #[FHIRPositiveInt]
    protected FHIRPositiveInt $order;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $network;
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary> 
     */
    #[FHIRCoverageCostToBeneficiary]
    protected array $costToBeneficiary;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When 'subrogation=true' this insurance instance has been included not for
     * adjudication but to provide insurers with the details to recover costs.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $subrogation;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $contract;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurance plan details, benefits and costs, which constitute this insurance
     * coverage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $insurancePlan;

    /* constructor.php:61 */
    /**
     * FHIRCoverage Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRKindEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRKind $kind
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy> $paymentBy
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $policyHolder
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subscriber
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier> $subscriberId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $beneficiary
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $dependent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $relationship
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $insurer
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass> $class
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $order
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $network
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary> $costToBeneficiary
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $subrogation
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $contract
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $insurancePlan
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
                                null|string|FHIRFinancialResourceStatusCodesEnum|FHIRFinancialResourceStatusCodes $status = null,
                                null|string|FHIRKindEnum|FHIRKind $kind = null,
                                null|iterable $paymentBy = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRReference $policyHolder = null,
                                null|FHIRReference $subscriber = null,
                                null|iterable $subscriberId = null,
                                null|FHIRReference $beneficiary = null,
                                null|string|FHIRStringPrimitive|FHIRString $dependent = null,
                                null|FHIRCodeableConcept $relationship = null,
                                null|FHIRPeriod $period = null,
                                null|FHIRReference $insurer = null,
                                null|iterable $class = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $order = null,
                                null|string|FHIRStringPrimitive|FHIRString $network = null,
                                null|iterable $costToBeneficiary = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $subrogation = null,
                                null|iterable $contract = null,
                                null|FHIRReference $insurancePlan = null,
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
        if (null !== $kind) {
            $this->setKind($kind);
        }
        if (null !== $paymentBy) {
            $this->setPaymentBy(...$paymentBy);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $policyHolder) {
            $this->setPolicyHolder($policyHolder);
        }
        if (null !== $subscriber) {
            $this->setSubscriber($subscriber);
        }
        if (null !== $subscriberId) {
            $this->setSubscriberId(...$subscriberId);
        }
        if (null !== $beneficiary) {
            $this->setBeneficiary($beneficiary);
        }
        if (null !== $dependent) {
            $this->setDependent($dependent);
        }
        if (null !== $relationship) {
            $this->setRelationship($relationship);
        }
        if (null !== $period) {
            $this->setPeriod($period);
        }
        if (null !== $insurer) {
            $this->setInsurer($insurer);
        }
        if (null !== $class) {
            $this->setClass(...$class);
        }
        if (null !== $order) {
            $this->setOrder($order);
        }
        if (null !== $network) {
            $this->setNetwork($network);
        }
        if (null !== $costToBeneficiary) {
            $this->setCostToBeneficiary(...$costToBeneficiary);
        }
        if (null !== $subrogation) {
            $this->setSubrogation($subrogation);
        }
        if (null !== $contract) {
            $this->setContract(...$contract);
        }
        if (null !== $insurancePlan) {
            $this->setInsurancePlan($insurancePlan);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier of the coverage as issued by the insurer.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
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
     * The identifier of the coverage as issued by the insurer.
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
     * The identifier of the coverage as issued by the insurer.
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
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus(): null|FHIRFinancialResourceStatusCodes
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return static
     */
    public function setStatus(null|string|FHIRFinancialResourceStatusCodesEnum|FHIRFinancialResourceStatusCodes $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRFinancialResourceStatusCodes)) {
            $status = new FHIRFinancialResourceStatusCodes(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The nature of the coverage be it insurance, or cash payment such as self-pay.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRKind
     */
    public function getKind(): null|FHIRKind
    {
        return $this->kind ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The nature of the coverage be it insurance, or cash payment such as self-pay.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRKindEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRKind $kind
     * @return static
     */
    public function setKind(null|string|FHIRKindEnum|FHIRKind $kind): self
    {
        if (null === $kind) {
            unset($this->kind);
            return $this;
        }
        if (!($kind instanceof FHIRKind)) {
            $kind = new FHIRKind(value: $kind);
        }
        $this->kind = $kind;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * Link to the paying party and optionally what specifically they will be
     * responsible to pay.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy>
     */
    public function getPaymentBy(): array
    {
        return $this->paymentBy ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy>
     */
    public function getPaymentByIterator(): iterable
    {
        if (!isset($this->paymentBy)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->paymentBy);
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * Link to the paying party and optionally what specifically they will be
     * responsible to pay.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy $paymentBy
     * @return static
     */
    public function addPaymentBy(FHIRCoveragePaymentBy $paymentBy): self
    {
        if (!isset($this->paymentBy)) {
            $this->paymentBy = [];
        }
        $this->paymentBy[] = $paymentBy;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * Link to the paying party and optionally what specifically they will be
     * responsible to pay.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy ...$paymentBy
     * @return static
     */
    public function setPaymentBy(FHIRCoveragePaymentBy ...$paymentBy): self
    {
        if ([] === $paymentBy) {
            unset($this->paymentBy);
            return $this;
        }
        $this->paymentBy = $paymentBy;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance policy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getPolicyHolder(): null|FHIRReference
    {
        return $this->policyHolder ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance policy.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $policyHolder
     * @return static
     */
    public function setPolicyHolder(null|FHIRReference $policyHolder): self
    {
        if (null === $policyHolder) {
            unset($this->policyHolder);
            return $this;
        }
        $this->policyHolder = $policyHolder;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubscriber(): null|FHIRReference
    {
        return $this->subscriber ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subscriber
     * @return static
     */
    public function setSubscriber(null|FHIRReference $subscriber): self
    {
        if (null === $subscriber) {
            unset($this->subscriber);
            return $this;
        }
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getSubscriberId(): array
    {
        return $this->subscriberId ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getSubscriberIdIterator(): iterable
    {
        if (!isset($this->subscriberId)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->subscriberId);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $subscriberId
     * @return static
     */
    public function addSubscriberId(FHIRIdentifier $subscriberId): self
    {
        if (!isset($this->subscriberId)) {
            $this->subscriberId = [];
        }
        $this->subscriberId[] = $subscriberId;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$subscriberId
     * @return static
     */
    public function setSubscriberId(FHIRIdentifier ...$subscriberId): self
    {
        if ([] === $subscriberId) {
            unset($this->subscriberId);
            return $this;
        }
        $this->subscriberId = $subscriberId;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who benefits from the insurance coverage; the patient when products
     * and/or services are provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getBeneficiary(): null|FHIRReference
    {
        return $this->beneficiary ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who benefits from the insurance coverage; the patient when products
     * and/or services are provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $beneficiary
     * @return static
     */
    public function setBeneficiary(null|FHIRReference $beneficiary): self
    {
        if (null === $beneficiary) {
            unset($this->beneficiary);
            return $this;
        }
        $this->beneficiary = $beneficiary;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A designator for a dependent under the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDependent(): null|FHIRString
    {
        return $this->dependent ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A designator for a dependent under the coverage.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $dependent
     * @return static
     */
    public function setDependent(null|string|FHIRStringPrimitive|FHIRString $dependent): self
    {
        if (null === $dependent) {
            unset($this->dependent);
            return $this;
        }
        if (!($dependent instanceof FHIRString)) {
            $dependent = new FHIRString(value: $dependent);
        }
        $this->dependent = $dependent;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRelationship(): null|FHIRCodeableConcept
    {
        return $this->relationship ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $relationship
     * @return static
     */
    public function setRelationship(null|FHIRCodeableConcept $relationship): self
    {
        if (null === $relationship) {
            unset($this->relationship);
            return $this;
        }
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
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
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
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
     * The program or plan underwriter, payor, insurance company.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getInsurer(): null|FHIRReference
    {
        return $this->insurer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter, payor, insurance company.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $insurer
     * @return static
     */
    public function setInsurer(null|FHIRReference $insurer): self
    {
        if (null === $insurer) {
            unset($this->insurer);
            return $this;
        }
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass>
     */
    public function getClass(): array
    {
        return $this->class ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass>
     */
    public function getClassIterator(): iterable
    {
        if (!isset($this->class)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->class);
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass $class
     * @return static
     */
    public function addClass(FHIRCoverageClass $class): self
    {
        if (!isset($this->class)) {
            $this->class = [];
        }
        $this->class[] = $class;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass ...$class
     * @return static
     */
    public function setClass(FHIRCoverageClass ...$class): self
    {
        if ([] === $class) {
            unset($this->class);
            return $this;
        }
        $this->class = $class;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently in force. Note, there may be gaps in the numbering and this does
     * not imply primary, secondary etc. as the specific positioning of coverages
     * depends upon the episode of care. For example; a patient might have (0) auto
     * insurance (1) their own health insurance and (2) spouse's health insurance. When
     * claiming for treatments which were not the result of an auto accident then only
     * coverages (1) and (2) above would be applicatble and would apply in the order
     * specified in parenthesis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getOrder(): null|FHIRPositiveInt
    {
        return $this->order ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently in force. Note, there may be gaps in the numbering and this does
     * not imply primary, secondary etc. as the specific positioning of coverages
     * depends upon the episode of care. For example; a patient might have (0) auto
     * insurance (1) their own health insurance and (2) spouse's health insurance. When
     * claiming for treatments which were not the result of an auto accident then only
     * coverages (1) and (2) above would be applicatble and would apply in the order
     * specified in parenthesis.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $order
     * @return static
     */
    public function setOrder(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $order): self
    {
        if (null === $order) {
            unset($this->order);
            return $this;
        }
        if (!($order instanceof FHIRPositiveInt)) {
            $order = new FHIRPositiveInt(value: $order);
        }
        $this->order = $order;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getNetwork(): null|FHIRString
    {
        return $this->network ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $network
     * @return static
     */
    public function setNetwork(null|string|FHIRStringPrimitive|FHIRString $network): self
    {
        if (null === $network) {
            unset($this->network);
            return $this;
        }
        if (!($network instanceof FHIRString)) {
            $network = new FHIRString(value: $network);
        }
        $this->network = $network;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary>
     */
    public function getCostToBeneficiary(): array
    {
        return $this->costToBeneficiary ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary>
     */
    public function getCostToBeneficiaryIterator(): iterable
    {
        if (!isset($this->costToBeneficiary)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->costToBeneficiary);
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary $costToBeneficiary
     * @return static
     */
    public function addCostToBeneficiary(FHIRCoverageCostToBeneficiary $costToBeneficiary): self
    {
        if (!isset($this->costToBeneficiary)) {
            $this->costToBeneficiary = [];
        }
        $this->costToBeneficiary[] = $costToBeneficiary;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary ...$costToBeneficiary
     * @return static
     */
    public function setCostToBeneficiary(FHIRCoverageCostToBeneficiary ...$costToBeneficiary): self
    {
        if ([] === $costToBeneficiary) {
            unset($this->costToBeneficiary);
            return $this;
        }
        $this->costToBeneficiary = $costToBeneficiary;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When 'subrogation=true' this insurance instance has been included not for
     * adjudication but to provide insurers with the details to recover costs.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getSubrogation(): null|FHIRBoolean
    {
        return $this->subrogation ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When 'subrogation=true' this insurance instance has been included not for
     * adjudication but to provide insurers with the details to recover costs.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $subrogation
     * @return static
     */
    public function setSubrogation(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $subrogation): self
    {
        if (null === $subrogation) {
            unset($this->subrogation);
            return $this;
        }
        if (!($subrogation instanceof FHIRBoolean)) {
            $subrogation = new FHIRBoolean(value: $subrogation);
        }
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getContract(): array
    {
        return $this->contract ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getContractIterator(): iterable
    {
        if (!isset($this->contract)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contract);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $contract
     * @return static
     */
    public function addContract(FHIRReference $contract): self
    {
        if (!isset($this->contract)) {
            $this->contract = [];
        }
        $this->contract[] = $contract;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$contract
     * @return static
     */
    public function setContract(FHIRReference ...$contract): self
    {
        if ([] === $contract) {
            unset($this->contract);
            return $this;
        }
        $this->contract = $contract;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurance plan details, benefits and costs, which constitute this insurance
     * coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getInsurancePlan(): null|FHIRReference
    {
        return $this->insurancePlan ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurance plan details, benefits and costs, which constitute this insurance
     * coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $insurancePlan
     * @return static
     */
    public function setInsurancePlan(null|FHIRReference $insurancePlan): self
    {
        if (null === $insurancePlan) {
            unset($this->insurancePlan);
            return $this;
        }
        $this->insurancePlan = $insurancePlan;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCoverage)) {
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
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($ce, $config));
            } else if (self::FIELD_KIND === $cen) {
                $type->setKind(FHIRKind::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAYMENT_BY === $cen) {
                $type->addPaymentBy(FHIRCoveragePaymentBy::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POLICY_HOLDER === $cen) {
                $type->setPolicyHolder(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBSCRIBER === $cen) {
                $type->setSubscriber(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBSCRIBER_ID === $cen) {
                $type->addSubscriberId(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BENEFICIARY === $cen) {
                $type->setBeneficiary(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEPENDENT === $cen) {
                $type->setDependent(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATIONSHIP === $cen) {
                $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INSURER === $cen) {
                $type->setInsurer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLASS === $cen) {
                $type->addClass(FHIRCoverageClass::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORDER === $cen) {
                $type->setOrder(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NETWORK === $cen) {
                $type->setNetwork(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COST_TO_BENEFICIARY === $cen) {
                $type->addCostToBeneficiary(FHIRCoverageCostToBeneficiary::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBROGATION === $cen) {
                $type->setSubrogation(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTRACT === $cen) {
                $type->addContract(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INSURANCE_PLAN === $cen) {
                $type->setInsurancePlan(FHIRReference::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_KIND])) {
            if (isset($type->kind)) {
                $type->kind->setValue((string)$attributes[self::FIELD_KIND]);
            } else {
                $type->setKind((string)$attributes[self::FIELD_KIND]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_KIND, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEPENDENT])) {
            if (isset($type->dependent)) {
                $type->dependent->setValue((string)$attributes[self::FIELD_DEPENDENT]);
            } else {
                $type->setDependent((string)$attributes[self::FIELD_DEPENDENT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DEPENDENT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ORDER])) {
            if (isset($type->order)) {
                $type->order->setValue((string)$attributes[self::FIELD_ORDER]);
            } else {
                $type->setOrder((string)$attributes[self::FIELD_ORDER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ORDER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NETWORK])) {
            if (isset($type->network)) {
                $type->network->setValue((string)$attributes[self::FIELD_NETWORK]);
            } else {
                $type->setNetwork((string)$attributes[self::FIELD_NETWORK]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NETWORK, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUBROGATION])) {
            if (isset($type->subrogation)) {
                $type->subrogation->setValue((string)$attributes[self::FIELD_SUBROGATION]);
            } else {
                $type->setSubrogation((string)$attributes[self::FIELD_SUBROGATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUBROGATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Coverage', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->kind) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_KIND]) {
            $xw->writeAttribute(self::FIELD_KIND, $this->kind->_getValueAsString());
        }
        if (isset($this->dependent) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEPENDENT]) {
            $xw->writeAttribute(self::FIELD_DEPENDENT, $this->dependent->_getValueAsString());
        }
        if (isset($this->order) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ORDER]) {
            $xw->writeAttribute(self::FIELD_ORDER, $this->order->_getValueAsString());
        }
        if (isset($this->network) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NETWORK]) {
            $xw->writeAttribute(self::FIELD_NETWORK, $this->network->_getValueAsString());
        }
        if (isset($this->subrogation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUBROGATION]) {
            $xw->writeAttribute(self::FIELD_SUBROGATION, $this->subrogation->_getValueAsString());
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
        if (isset($this->kind)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_KIND]
                || $this->kind->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_KIND);
            $this->kind->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_KIND]);
            $xw->endElement();
        }
        if (isset($this->paymentBy)) {
            foreach ($this->paymentBy as $v) {
                $xw->startElement(self::FIELD_PAYMENT_BY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->policyHolder)) {
            $xw->startElement(self::FIELD_POLICY_HOLDER);
            $this->policyHolder->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subscriber)) {
            $xw->startElement(self::FIELD_SUBSCRIBER);
            $this->subscriber->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subscriberId)) {
            foreach ($this->subscriberId as $v) {
                $xw->startElement(self::FIELD_SUBSCRIBER_ID);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->beneficiary)) {
            $xw->startElement(self::FIELD_BENEFICIARY);
            $this->beneficiary->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dependent)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEPENDENT]
                || $this->dependent->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEPENDENT);
            $this->dependent->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEPENDENT]);
            $xw->endElement();
        }
        if (isset($this->relationship)) {
            $xw->startElement(self::FIELD_RELATIONSHIP);
            $this->relationship->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->insurer)) {
            $xw->startElement(self::FIELD_INSURER);
            $this->insurer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->class)) {
            foreach ($this->class as $v) {
                $xw->startElement(self::FIELD_CLASS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->order)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ORDER]
                || $this->order->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ORDER);
            $this->order->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ORDER]);
            $xw->endElement();
        }
        if (isset($this->network)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NETWORK]
                || $this->network->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NETWORK);
            $this->network->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NETWORK]);
            $xw->endElement();
        }
        if (isset($this->costToBeneficiary)) {
            foreach ($this->costToBeneficiary as $v) {
                $xw->startElement(self::FIELD_COST_TO_BENEFICIARY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->subrogation)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUBROGATION]
                || $this->subrogation->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUBROGATION);
            $this->subrogation->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUBROGATION]);
            $xw->endElement();
        }
        if (isset($this->contract)) {
            foreach ($this->contract as $v) {
                $xw->startElement(self::FIELD_CONTRACT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->insurancePlan)) {
            $xw->startElement(self::FIELD_INSURANCE_PLAN);
            $this->insurancePlan->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param string|\stdClass $decoded
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            if (isset($decoded->resourceType) && $decoded->resourceType !== static::FHIR_TYPE_NAME) {
                throw new \DomainException(sprintf(
                    '%s::jsonUnserialize - Cannot unmarshal data for resource type "%s" into this type.',
                    ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                    $decoded->resourceType,
                ));
            }
            $type = new static();
        } else if (!($type instanceof FHIRCoverage)) {
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
        if (is_string($decoded)) {
            $decoded = json_decode(json: $decoded,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->identifier) || property_exists($decoded, self::FIELD_IDENTIFIER)) {
            if (is_object($decoded->identifier)) {
                $vals = [$decoded->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $decoded->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->status)
            || isset($decoded->_status)
            || property_exists($decoded, self::FIELD_STATUS)
            || property_exists($decoded, self::FIELD_STATUS_EXT)) {
            $v = $decoded->_status ?? new \stdClass();
            $v->value = $decoded->status ?? null;
            $type->setStatus(FHIRFinancialResourceStatusCodes::jsonUnserialize($v, $config));
        }
        if (isset($decoded->kind)
            || isset($decoded->_kind)
            || property_exists($decoded, self::FIELD_KIND)
            || property_exists($decoded, self::FIELD_KIND_EXT)) {
            $v = $decoded->_kind ?? new \stdClass();
            $v->value = $decoded->kind ?? null;
            $type->setKind(FHIRKind::jsonUnserialize($v, $config));
        }
        if (isset($decoded->paymentBy) || property_exists($decoded, self::FIELD_PAYMENT_BY)) {
            if (is_object($decoded->paymentBy)) {
                $vals = [$decoded->paymentBy];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PAYMENT_BY, true);
            } else {
                $vals = $decoded->paymentBy;
            }
            foreach($vals as $v) {
                $type->addPaymentBy(FHIRCoveragePaymentBy::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->type) || property_exists($decoded, self::FIELD_TYPE)) {
            if (is_array($decoded->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($decoded->type, $config));
            }
        }
        if (isset($decoded->policyHolder) || property_exists($decoded, self::FIELD_POLICY_HOLDER)) {
            if (is_array($decoded->policyHolder)) {
                $type->setPolicyHolder(FHIRReference::jsonUnserialize(reset($decoded->policyHolder), $config));
            } else {
                $type->setPolicyHolder(FHIRReference::jsonUnserialize($decoded->policyHolder, $config));
            }
        }
        if (isset($decoded->subscriber) || property_exists($decoded, self::FIELD_SUBSCRIBER)) {
            if (is_array($decoded->subscriber)) {
                $type->setSubscriber(FHIRReference::jsonUnserialize(reset($decoded->subscriber), $config));
            } else {
                $type->setSubscriber(FHIRReference::jsonUnserialize($decoded->subscriber, $config));
            }
        }
        if (isset($decoded->subscriberId) || property_exists($decoded, self::FIELD_SUBSCRIBER_ID)) {
            if (is_object($decoded->subscriberId)) {
                $vals = [$decoded->subscriberId];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SUBSCRIBER_ID, true);
            } else {
                $vals = $decoded->subscriberId;
            }
            foreach($vals as $v) {
                $type->addSubscriberId(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->beneficiary) || property_exists($decoded, self::FIELD_BENEFICIARY)) {
            if (is_array($decoded->beneficiary)) {
                $type->setBeneficiary(FHIRReference::jsonUnserialize(reset($decoded->beneficiary), $config));
            } else {
                $type->setBeneficiary(FHIRReference::jsonUnserialize($decoded->beneficiary, $config));
            }
        }
        if (isset($decoded->dependent)
            || isset($decoded->_dependent)
            || property_exists($decoded, self::FIELD_DEPENDENT)
            || property_exists($decoded, self::FIELD_DEPENDENT_EXT)) {
            $v = $decoded->_dependent ?? new \stdClass();
            $v->value = $decoded->dependent ?? null;
            $type->setDependent(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->relationship) || property_exists($decoded, self::FIELD_RELATIONSHIP)) {
            if (is_array($decoded->relationship)) {
                $type->setRelationship(FHIRCodeableConcept::jsonUnserialize(reset($decoded->relationship), $config));
            } else {
                $type->setRelationship(FHIRCodeableConcept::jsonUnserialize($decoded->relationship, $config));
            }
        }
        if (isset($decoded->period) || property_exists($decoded, self::FIELD_PERIOD)) {
            if (is_array($decoded->period)) {
                $type->setPeriod(FHIRPeriod::jsonUnserialize(reset($decoded->period), $config));
            } else {
                $type->setPeriod(FHIRPeriod::jsonUnserialize($decoded->period, $config));
            }
        }
        if (isset($decoded->insurer) || property_exists($decoded, self::FIELD_INSURER)) {
            if (is_array($decoded->insurer)) {
                $type->setInsurer(FHIRReference::jsonUnserialize(reset($decoded->insurer), $config));
            } else {
                $type->setInsurer(FHIRReference::jsonUnserialize($decoded->insurer, $config));
            }
        }
        if (isset($decoded->class) || property_exists($decoded, self::FIELD_CLASS)) {
            if (is_object($decoded->class)) {
                $vals = [$decoded->class];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CLASS, true);
            } else {
                $vals = $decoded->class;
            }
            foreach($vals as $v) {
                $type->addClass(FHIRCoverageClass::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->order)
            || isset($decoded->_order)
            || property_exists($decoded, self::FIELD_ORDER)
            || property_exists($decoded, self::FIELD_ORDER_EXT)) {
            $v = $decoded->_order ?? new \stdClass();
            $v->value = $decoded->order ?? null;
            $type->setOrder(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->network)
            || isset($decoded->_network)
            || property_exists($decoded, self::FIELD_NETWORK)
            || property_exists($decoded, self::FIELD_NETWORK_EXT)) {
            $v = $decoded->_network ?? new \stdClass();
            $v->value = $decoded->network ?? null;
            $type->setNetwork(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->costToBeneficiary) || property_exists($decoded, self::FIELD_COST_TO_BENEFICIARY)) {
            if (is_object($decoded->costToBeneficiary)) {
                $vals = [$decoded->costToBeneficiary];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_COST_TO_BENEFICIARY, true);
            } else {
                $vals = $decoded->costToBeneficiary;
            }
            foreach($vals as $v) {
                $type->addCostToBeneficiary(FHIRCoverageCostToBeneficiary::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->subrogation)
            || isset($decoded->_subrogation)
            || property_exists($decoded, self::FIELD_SUBROGATION)
            || property_exists($decoded, self::FIELD_SUBROGATION_EXT)) {
            $v = $decoded->_subrogation ?? new \stdClass();
            $v->value = $decoded->subrogation ?? null;
            $type->setSubrogation(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->contract) || property_exists($decoded, self::FIELD_CONTRACT)) {
            if (is_object($decoded->contract)) {
                $vals = [$decoded->contract];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTRACT, true);
            } else {
                $vals = $decoded->contract;
            }
            foreach($vals as $v) {
                $type->addContract(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->insurancePlan) || property_exists($decoded, self::FIELD_INSURANCE_PLAN)) {
            if (is_array($decoded->insurancePlan)) {
                $type->setInsurancePlan(FHIRReference::jsonUnserialize(reset($decoded->insurancePlan), $config));
            } else {
                $type->setInsurancePlan(FHIRReference::jsonUnserialize($decoded->insurancePlan, $config));
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
        if (isset($this->kind)) {
            if (null !== ($val = $this->kind->getValue())) {
                $out->kind = $val;
            }
            if ($this->kind->_nonValueFieldDefined()) {
                $ext = $this->kind->jsonSerialize();
                unset($ext->value);
                $out->_kind = $ext;
            }
        }
        if (isset($this->paymentBy) && [] !== $this->paymentBy) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PAYMENT_BY) && 1 === count($this->paymentBy)) {
                $out->paymentBy = $this->paymentBy[0];
            } else {
                $out->paymentBy = $this->paymentBy;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->policyHolder)) {
            $out->policyHolder = $this->policyHolder;
        }
        if (isset($this->subscriber)) {
            $out->subscriber = $this->subscriber;
        }
        if (isset($this->subscriberId) && [] !== $this->subscriberId) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SUBSCRIBER_ID) && 1 === count($this->subscriberId)) {
                $out->subscriberId = $this->subscriberId[0];
            } else {
                $out->subscriberId = $this->subscriberId;
            }
        }
        if (isset($this->beneficiary)) {
            $out->beneficiary = $this->beneficiary;
        }
        if (isset($this->dependent)) {
            if (null !== ($val = $this->dependent->getValue())) {
                $out->dependent = $val;
            }
            if ($this->dependent->_nonValueFieldDefined()) {
                $ext = $this->dependent->jsonSerialize();
                unset($ext->value);
                $out->_dependent = $ext;
            }
        }
        if (isset($this->relationship)) {
            $out->relationship = $this->relationship;
        }
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        if (isset($this->insurer)) {
            $out->insurer = $this->insurer;
        }
        if (isset($this->class) && [] !== $this->class) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CLASS) && 1 === count($this->class)) {
                $out->class = $this->class[0];
            } else {
                $out->class = $this->class;
            }
        }
        if (isset($this->order)) {
            if (null !== ($val = $this->order->getValue())) {
                $out->order = $val;
            }
            if ($this->order->_nonValueFieldDefined()) {
                $ext = $this->order->jsonSerialize();
                unset($ext->value);
                $out->_order = $ext;
            }
        }
        if (isset($this->network)) {
            if (null !== ($val = $this->network->getValue())) {
                $out->network = $val;
            }
            if ($this->network->_nonValueFieldDefined()) {
                $ext = $this->network->jsonSerialize();
                unset($ext->value);
                $out->_network = $ext;
            }
        }
        if (isset($this->costToBeneficiary) && [] !== $this->costToBeneficiary) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_COST_TO_BENEFICIARY) && 1 === count($this->costToBeneficiary)) {
                $out->costToBeneficiary = $this->costToBeneficiary[0];
            } else {
                $out->costToBeneficiary = $this->costToBeneficiary;
            }
        }
        if (isset($this->subrogation)) {
            if (null !== ($val = $this->subrogation->getValue())) {
                $out->subrogation = $val;
            }
            if ($this->subrogation->_nonValueFieldDefined()) {
                $ext = $this->subrogation->jsonSerialize();
                unset($ext->value);
                $out->_subrogation = $ext;
            }
        }
        if (isset($this->contract) && [] !== $this->contract) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTRACT) && 1 === count($this->contract)) {
                $out->contract = $this->contract[0];
            } else {
                $out->contract = $this->contract;
            }
        }
        if (isset($this->insurancePlan)) {
            $out->insurancePlan = $this->insurancePlan;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}