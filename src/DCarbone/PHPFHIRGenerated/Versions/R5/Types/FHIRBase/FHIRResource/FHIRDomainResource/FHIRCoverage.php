<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
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
class FHIRCoverage extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_COVERAGE;


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

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier of the coverage as issued by the insurer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes 
     */
    protected FHIRFinancialResourceStatusCodes $status;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The nature of the coverage be it insurance, or cash payment such as self-pay.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRKind 
     */
    protected FHIRKind $kind;
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * Link to the paying party and optionally what specifically they will be
     * responsible to pay.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy[] 
     */
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
    protected FHIRReference $subscriber;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
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
    protected FHIRReference $insurer;
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass[] 
     */
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
    protected FHIRString $network;
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary[] 
     */
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
    protected FHIRBoolean $subrogation;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
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
    protected FHIRReference $insurancePlan;

    /** Default validation map for fields in type Coverage */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_KIND => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_BENEFICIARY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRCoverage Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRKind $kind
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy[] $paymentBy
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $policyHolder
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subscriber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $subscriberId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $beneficiary
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $dependent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $relationship
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $period
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $insurer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass[] $class
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $order
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $network
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary[] $costToBeneficiary
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $subrogation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $contract
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
                                null|FHIRFinancialResourceStatusCodes $status = null,
                                null|FHIRKind $kind = null,
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
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $order = null,
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier of the coverage as issued by the insurer.
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
        if (!isset($this->identifier) || [] === $this->identifier) {
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return static
     */
    public function setStatus(null|FHIRFinancialResourceStatusCodes $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRKind $kind
     * @return static
     */
    public function setKind(null|FHIRKind $kind): self
    {
        if (null === $kind) {
            unset($this->kind);
            return $this;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoveragePaymentBy[]
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
        if (!isset($this->paymentBy) || [] === $this->paymentBy) {
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
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
        if (!isset($this->subscriberId) || [] === $this->subscriberId) {
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass[]
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
        if (!isset($this->class) || [] === $this->class) {
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $order
     * @return static
     */
    public function setOrder(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $order): self
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary[]
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
        if (!isset($this->costToBeneficiary) || [] === $this->costToBeneficiary) {
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
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
        if (!isset($this->contract) || [] === $this->contract) {
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

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getKind())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KIND] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBeneficiary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BENEFICIARY] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KIND])) {
            $v = $this->getKind();
            foreach($validationRules[self::FIELD_KIND] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_KIND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KIND])) {
                        $errs[self::FIELD_KIND] = [];
                    }
                    $errs[self::FIELD_KIND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYMENT_BY])) {
            $v = $this->getPaymentBy();
            foreach($validationRules[self::FIELD_PAYMENT_BY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYMENT_BY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT_BY])) {
                        $errs[self::FIELD_PAYMENT_BY] = [];
                    }
                    $errs[self::FIELD_PAYMENT_BY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLICY_HOLDER])) {
            $v = $this->getPolicyHolder();
            foreach($validationRules[self::FIELD_POLICY_HOLDER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_POLICY_HOLDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLICY_HOLDER])) {
                        $errs[self::FIELD_POLICY_HOLDER] = [];
                    }
                    $errs[self::FIELD_POLICY_HOLDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSCRIBER])) {
            $v = $this->getSubscriber();
            foreach($validationRules[self::FIELD_SUBSCRIBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBSCRIBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSCRIBER])) {
                        $errs[self::FIELD_SUBSCRIBER] = [];
                    }
                    $errs[self::FIELD_SUBSCRIBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSCRIBER_ID])) {
            $v = $this->getSubscriberId();
            foreach($validationRules[self::FIELD_SUBSCRIBER_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBSCRIBER_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSCRIBER_ID])) {
                        $errs[self::FIELD_SUBSCRIBER_ID] = [];
                    }
                    $errs[self::FIELD_SUBSCRIBER_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BENEFICIARY])) {
            $v = $this->getBeneficiary();
            foreach($validationRules[self::FIELD_BENEFICIARY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BENEFICIARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BENEFICIARY])) {
                        $errs[self::FIELD_BENEFICIARY] = [];
                    }
                    $errs[self::FIELD_BENEFICIARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEPENDENT])) {
            $v = $this->getDependent();
            foreach($validationRules[self::FIELD_DEPENDENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEPENDENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEPENDENT])) {
                        $errs[self::FIELD_DEPENDENT] = [];
                    }
                    $errs[self::FIELD_DEPENDENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURER])) {
            $v = $this->getInsurer();
            foreach($validationRules[self::FIELD_INSURER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURER])) {
                        $errs[self::FIELD_INSURER] = [];
                    }
                    $errs[self::FIELD_INSURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS])) {
            $v = $this->getClass();
            foreach($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS])) {
                        $errs[self::FIELD_CLASS] = [];
                    }
                    $errs[self::FIELD_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDER])) {
            $v = $this->getOrder();
            foreach($validationRules[self::FIELD_ORDER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDER])) {
                        $errs[self::FIELD_ORDER] = [];
                    }
                    $errs[self::FIELD_ORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NETWORK])) {
            $v = $this->getNetwork();
            foreach($validationRules[self::FIELD_NETWORK] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NETWORK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NETWORK])) {
                        $errs[self::FIELD_NETWORK] = [];
                    }
                    $errs[self::FIELD_NETWORK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COST_TO_BENEFICIARY])) {
            $v = $this->getCostToBeneficiary();
            foreach($validationRules[self::FIELD_COST_TO_BENEFICIARY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COST_TO_BENEFICIARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COST_TO_BENEFICIARY])) {
                        $errs[self::FIELD_COST_TO_BENEFICIARY] = [];
                    }
                    $errs[self::FIELD_COST_TO_BENEFICIARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBROGATION])) {
            $v = $this->getSubrogation();
            foreach($validationRules[self::FIELD_SUBROGATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBROGATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBROGATION])) {
                        $errs[self::FIELD_SUBROGATION] = [];
                    }
                    $errs[self::FIELD_SUBROGATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRACT])) {
            $v = $this->getContract();
            foreach($validationRules[self::FIELD_CONTRACT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTRACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRACT])) {
                        $errs[self::FIELD_CONTRACT] = [];
                    }
                    $errs[self::FIELD_CONTRACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURANCE_PLAN])) {
            $v = $this->getInsurancePlan();
            foreach($validationRules[self::FIELD_INSURANCE_PLAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSURANCE_PLAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURANCE_PLAN])) {
                        $errs[self::FIELD_INSURANCE_PLAN] = [];
                    }
                    $errs[self::FIELD_INSURANCE_PLAN][$rule] = $err;
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

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRFinancialResourceStatusCodes(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_KIND === $childName) {
                $v = new FHIRKind(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setKind(FHIRKind::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAYMENT_BY === $childName) {
                $v = new FHIRCoveragePaymentBy();
                $type->addPaymentBy(FHIRCoveragePaymentBy::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_POLICY_HOLDER === $childName) {
                $v = new FHIRReference();
                $type->setPolicyHolder(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBSCRIBER === $childName) {
                $v = new FHIRReference();
                $type->setSubscriber(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBSCRIBER_ID === $childName) {
                $v = new FHIRIdentifier();
                $type->addSubscriberId(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BENEFICIARY === $childName) {
                $v = new FHIRReference();
                $type->setBeneficiary(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEPENDENT === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDependent(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATIONSHIP === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INSURER === $childName) {
                $v = new FHIRReference();
                $type->setInsurer(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CLASS === $childName) {
                $v = new FHIRCoverageClass();
                $type->addClass(FHIRCoverageClass::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORDER === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setOrder(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NETWORK === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setNetwork(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COST_TO_BENEFICIARY === $childName) {
                $v = new FHIRCoverageCostToBeneficiary();
                $type->addCostToBeneficiary(FHIRCoverageCostToBeneficiary::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBROGATION === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSubrogation(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTRACT === $childName) {
                $v = new FHIRReference();
                $type->addContract(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INSURANCE_PLAN === $childName) {
                $v = new FHIRReference();
                $type->setInsurancePlan(FHIRReference::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEPENDENT])) {
            $pt = $type->getDependent();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEPENDENT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDependent(new FHIRString(
                    value: (string)$attributes[self::FIELD_DEPENDENT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ORDER])) {
            $pt = $type->getOrder();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ORDER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setOrder(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_ORDER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NETWORK])) {
            $pt = $type->getNetwork();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NETWORK]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNetwork(new FHIRString(
                    value: (string)$attributes[self::FIELD_NETWORK],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SUBROGATION])) {
            $pt = $type->getSubrogation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUBROGATION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubrogation(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_SUBROGATION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
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
        if (isset($this->dependent) && $this->dependent->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEPENDENT, $this->dependent->getValue()?->getFormattedValue());
        }
        if (isset($this->order) && $this->order->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ORDER, $this->order->getValue()?->getFormattedValue());
        }
        if (isset($this->network) && $this->network->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NETWORK, $this->network->getValue()?->getFormattedValue());
        }
        if (isset($this->subrogation) && $this->subrogation->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SUBROGATION, $this->subrogation->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->kind)) {
            $xw->startElement(self::FIELD_KIND);
            $this->kind->xmlSerialize($xw, $config);
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
        if (isset($this->dependent) && $this->dependent->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEPENDENT);
            $this->dependent->xmlSerialize($xw, $config);
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
        if (isset($this->order) && $this->order->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ORDER);
            $this->order->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->network) && $this->network->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NETWORK);
            $this->network->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->costToBeneficiary)) {
            foreach ($this->costToBeneficiary as $v) {
                $xw->startElement(self::FIELD_COST_TO_BENEFICIARY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->subrogation) && $this->subrogation->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SUBROGATION);
            $this->subrogation->xmlSerialize($xw, $config);
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
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRCoverage
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
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
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRFinancialResourceStatusCodes) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRFinancialResourceStatusCodes(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRFinancialResourceStatusCodes([FHIRFinancialResourceStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRFinancialResourceStatusCodes($ext));
            } else {
                $type->setStatus(new FHIRFinancialResourceStatusCodes(null));
            }
        }
        if (isset($json[self::FIELD_KIND]) || isset($json[self::FIELD_KIND_EXT]) || array_key_exists(self::FIELD_KIND, $json) || array_key_exists(self::FIELD_KIND_EXT, $json)) {
            $value = $json[self::FIELD_KIND] ?? null;
            $ext = (isset($json[self::FIELD_KIND_EXT]) && is_array($json[self::FIELD_KIND_EXT])) ? $json[self::FIELD_KIND_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRKind) {
                    $type->setKind($value);
                } else if (is_array($value)) {
                    $type->setKind(new FHIRKind(array_merge($ext, $value)));
                } else {
                    $type->setKind(new FHIRKind([FHIRKind::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setKind(new FHIRKind($ext));
            } else {
                $type->setKind(new FHIRKind(null));
            }
        }
        if (isset($json[self::FIELD_PAYMENT_BY]) || array_key_exists(self::FIELD_PAYMENT_BY, $json)) {
            if (is_array($json[self::FIELD_PAYMENT_BY])) {
                foreach($json[self::FIELD_PAYMENT_BY] as $v) {
                    if ($v instanceof FHIRCoveragePaymentBy) {
                        $type->addPaymentBy($v);
                    } else {
                        $type->addPaymentBy(new FHIRCoveragePaymentBy($v));
                    }
                }
            } elseif ($json[self::FIELD_PAYMENT_BY] instanceof FHIRCoveragePaymentBy) {
                $type->addPaymentBy($json[self::FIELD_PAYMENT_BY]);
            } else {
                $type->addPaymentBy(new FHIRCoveragePaymentBy($json[self::FIELD_PAYMENT_BY]));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if ($json[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $type->setType($json[self::FIELD_TYPE]);
            } else {
                $type->setType(new FHIRCodeableConcept($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_POLICY_HOLDER]) || array_key_exists(self::FIELD_POLICY_HOLDER, $json)) {
            if ($json[self::FIELD_POLICY_HOLDER] instanceof FHIRReference) {
                $type->setPolicyHolder($json[self::FIELD_POLICY_HOLDER]);
            } else {
                $type->setPolicyHolder(new FHIRReference($json[self::FIELD_POLICY_HOLDER]));
            }
        }
        if (isset($json[self::FIELD_SUBSCRIBER]) || array_key_exists(self::FIELD_SUBSCRIBER, $json)) {
            if ($json[self::FIELD_SUBSCRIBER] instanceof FHIRReference) {
                $type->setSubscriber($json[self::FIELD_SUBSCRIBER]);
            } else {
                $type->setSubscriber(new FHIRReference($json[self::FIELD_SUBSCRIBER]));
            }
        }
        if (isset($json[self::FIELD_SUBSCRIBER_ID]) || array_key_exists(self::FIELD_SUBSCRIBER_ID, $json)) {
            if (is_array($json[self::FIELD_SUBSCRIBER_ID])) {
                foreach($json[self::FIELD_SUBSCRIBER_ID] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addSubscriberId($v);
                    } else {
                        $type->addSubscriberId(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_SUBSCRIBER_ID] instanceof FHIRIdentifier) {
                $type->addSubscriberId($json[self::FIELD_SUBSCRIBER_ID]);
            } else {
                $type->addSubscriberId(new FHIRIdentifier($json[self::FIELD_SUBSCRIBER_ID]));
            }
        }
        if (isset($json[self::FIELD_BENEFICIARY]) || array_key_exists(self::FIELD_BENEFICIARY, $json)) {
            if ($json[self::FIELD_BENEFICIARY] instanceof FHIRReference) {
                $type->setBeneficiary($json[self::FIELD_BENEFICIARY]);
            } else {
                $type->setBeneficiary(new FHIRReference($json[self::FIELD_BENEFICIARY]));
            }
        }
        if (isset($json[self::FIELD_DEPENDENT]) || isset($json[self::FIELD_DEPENDENT_EXT]) || array_key_exists(self::FIELD_DEPENDENT, $json) || array_key_exists(self::FIELD_DEPENDENT_EXT, $json)) {
            $value = $json[self::FIELD_DEPENDENT] ?? null;
            $ext = (isset($json[self::FIELD_DEPENDENT_EXT]) && is_array($json[self::FIELD_DEPENDENT_EXT])) ? $json[self::FIELD_DEPENDENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDependent($value);
                } else if (is_array($value)) {
                    $type->setDependent(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDependent(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDependent(new FHIRString($ext));
            } else {
                $type->setDependent(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_RELATIONSHIP]) || array_key_exists(self::FIELD_RELATIONSHIP, $json)) {
            if ($json[self::FIELD_RELATIONSHIP] instanceof FHIRCodeableConcept) {
                $type->setRelationship($json[self::FIELD_RELATIONSHIP]);
            } else {
                $type->setRelationship(new FHIRCodeableConcept($json[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($json[self::FIELD_PERIOD]) || array_key_exists(self::FIELD_PERIOD, $json)) {
            if ($json[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $type->setPeriod($json[self::FIELD_PERIOD]);
            } else {
                $type->setPeriod(new FHIRPeriod($json[self::FIELD_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_INSURER]) || array_key_exists(self::FIELD_INSURER, $json)) {
            if ($json[self::FIELD_INSURER] instanceof FHIRReference) {
                $type->setInsurer($json[self::FIELD_INSURER]);
            } else {
                $type->setInsurer(new FHIRReference($json[self::FIELD_INSURER]));
            }
        }
        if (isset($json[self::FIELD_CLASS]) || array_key_exists(self::FIELD_CLASS, $json)) {
            if (is_array($json[self::FIELD_CLASS])) {
                foreach($json[self::FIELD_CLASS] as $v) {
                    if ($v instanceof FHIRCoverageClass) {
                        $type->addClass($v);
                    } else {
                        $type->addClass(new FHIRCoverageClass($v));
                    }
                }
            } elseif ($json[self::FIELD_CLASS] instanceof FHIRCoverageClass) {
                $type->addClass($json[self::FIELD_CLASS]);
            } else {
                $type->addClass(new FHIRCoverageClass($json[self::FIELD_CLASS]));
            }
        }
        if (isset($json[self::FIELD_ORDER]) || isset($json[self::FIELD_ORDER_EXT]) || array_key_exists(self::FIELD_ORDER, $json) || array_key_exists(self::FIELD_ORDER_EXT, $json)) {
            $value = $json[self::FIELD_ORDER] ?? null;
            $ext = (isset($json[self::FIELD_ORDER_EXT]) && is_array($json[self::FIELD_ORDER_EXT])) ? $json[self::FIELD_ORDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setOrder($value);
                } else if (is_array($value)) {
                    $type->setOrder(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setOrder(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setOrder(new FHIRPositiveInt($ext));
            } else {
                $type->setOrder(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_NETWORK]) || isset($json[self::FIELD_NETWORK_EXT]) || array_key_exists(self::FIELD_NETWORK, $json) || array_key_exists(self::FIELD_NETWORK_EXT, $json)) {
            $value = $json[self::FIELD_NETWORK] ?? null;
            $ext = (isset($json[self::FIELD_NETWORK_EXT]) && is_array($json[self::FIELD_NETWORK_EXT])) ? $json[self::FIELD_NETWORK_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setNetwork($value);
                } else if (is_array($value)) {
                    $type->setNetwork(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setNetwork(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNetwork(new FHIRString($ext));
            } else {
                $type->setNetwork(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_COST_TO_BENEFICIARY]) || array_key_exists(self::FIELD_COST_TO_BENEFICIARY, $json)) {
            if (is_array($json[self::FIELD_COST_TO_BENEFICIARY])) {
                foreach($json[self::FIELD_COST_TO_BENEFICIARY] as $v) {
                    if ($v instanceof FHIRCoverageCostToBeneficiary) {
                        $type->addCostToBeneficiary($v);
                    } else {
                        $type->addCostToBeneficiary(new FHIRCoverageCostToBeneficiary($v));
                    }
                }
            } elseif ($json[self::FIELD_COST_TO_BENEFICIARY] instanceof FHIRCoverageCostToBeneficiary) {
                $type->addCostToBeneficiary($json[self::FIELD_COST_TO_BENEFICIARY]);
            } else {
                $type->addCostToBeneficiary(new FHIRCoverageCostToBeneficiary($json[self::FIELD_COST_TO_BENEFICIARY]));
            }
        }
        if (isset($json[self::FIELD_SUBROGATION]) || isset($json[self::FIELD_SUBROGATION_EXT]) || array_key_exists(self::FIELD_SUBROGATION, $json) || array_key_exists(self::FIELD_SUBROGATION_EXT, $json)) {
            $value = $json[self::FIELD_SUBROGATION] ?? null;
            $ext = (isset($json[self::FIELD_SUBROGATION_EXT]) && is_array($json[self::FIELD_SUBROGATION_EXT])) ? $json[self::FIELD_SUBROGATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setSubrogation($value);
                } else if (is_array($value)) {
                    $type->setSubrogation(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setSubrogation(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSubrogation(new FHIRBoolean($ext));
            } else {
                $type->setSubrogation(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_CONTRACT]) || array_key_exists(self::FIELD_CONTRACT, $json)) {
            if (is_array($json[self::FIELD_CONTRACT])) {
                foreach($json[self::FIELD_CONTRACT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addContract($v);
                    } else {
                        $type->addContract(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_CONTRACT] instanceof FHIRReference) {
                $type->addContract($json[self::FIELD_CONTRACT]);
            } else {
                $type->addContract(new FHIRReference($json[self::FIELD_CONTRACT]));
            }
        }
        if (isset($json[self::FIELD_INSURANCE_PLAN]) || array_key_exists(self::FIELD_INSURANCE_PLAN, $json)) {
            if ($json[self::FIELD_INSURANCE_PLAN] instanceof FHIRReference) {
                $type->setInsurancePlan($json[self::FIELD_INSURANCE_PLAN]);
            } else {
                $type->setInsurancePlan(new FHIRReference($json[self::FIELD_INSURANCE_PLAN]));
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
            $out->identifier = $this->identifier;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            $ext = $this->status->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_status = $ext;
            }
        }
        if (isset($this->kind)) {
            if (null !== ($val = $this->kind->getValue())) {
                $out->kind = $val;
            }
            $ext = $this->kind->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_kind = $ext;
            }
        }
        if (isset($this->paymentBy) && [] !== $this->paymentBy) {
            $out->paymentBy = $this->paymentBy;
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
            $out->subscriberId = $this->subscriberId;
        }
        if (isset($this->beneficiary)) {
            $out->beneficiary = $this->beneficiary;
        }
        if (isset($this->dependent)) {
            if (null !== ($val = $this->dependent->getValue())) {
                $out->dependent = $val;
            }
            $ext = $this->dependent->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $out->class = $this->class;
        }
        if (isset($this->order)) {
            if (null !== ($val = $this->order->getValue())) {
                $out->order = $val;
            }
            $ext = $this->order->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_order = $ext;
            }
        }
        if (isset($this->network)) {
            if (null !== ($val = $this->network->getValue())) {
                $out->network = $val;
            }
            $ext = $this->network->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_network = $ext;
            }
        }
        if (isset($this->costToBeneficiary) && [] !== $this->costToBeneficiary) {
            $out->costToBeneficiary = $this->costToBeneficiary;
        }
        if (isset($this->subrogation)) {
            if (null !== ($val = $this->subrogation->getValue())) {
                $out->subrogation = $val;
            }
            $ext = $this->subrogation->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_subrogation = $ext;
            }
        }
        if (isset($this->contract) && [] !== $this->contract) {
            $out->contract = $this->contract;
        }
        if (isset($this->insurancePlan)) {
            $out->insurancePlan = $this->insurancePlan;
        }
        $out->resourceType = $this->_getResourceType();
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