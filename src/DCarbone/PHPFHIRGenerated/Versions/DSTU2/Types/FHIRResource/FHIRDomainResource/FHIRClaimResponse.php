<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 24th, 2025 03:11+0000
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
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney;
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
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRClaimResponse extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM_RESPONSE;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_REQUEST = 'request';
    public const FIELD_RULESET = 'ruleset';
    public const FIELD_ORIGINAL_RULESET = 'originalRuleset';
    public const FIELD_CREATED = 'created';
    public const FIELD_CREATED_EXT = '_created';
    public const FIELD_ORGANIZATION = 'organization';
    public const FIELD_REQUEST_PROVIDER = 'requestProvider';
    public const FIELD_REQUEST_ORGANIZATION = 'requestOrganization';
    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_OUTCOME_EXT = '_outcome';
    public const FIELD_DISPOSITION = 'disposition';
    public const FIELD_DISPOSITION_EXT = '_disposition';
    public const FIELD_PAYEE_TYPE = 'payeeType';
    public const FIELD_ITEM = 'item';
    public const FIELD_ADD_ITEM = 'addItem';
    public const FIELD_ERROR = 'error';
    public const FIELD_TOTAL_COST = 'totalCost';
    public const FIELD_UNALLOC_DEDUCTABLE = 'unallocDeductable';
    public const FIELD_TOTAL_BENEFIT = 'totalBenefit';
    public const FIELD_PAYMENT_ADJUSTMENT = 'paymentAdjustment';
    public const FIELD_PAYMENT_ADJUSTMENT_REASON = 'paymentAdjustmentReason';
    public const FIELD_PAYMENT_DATE = 'paymentDate';
    public const FIELD_PAYMENT_DATE_EXT = '_paymentDate';
    public const FIELD_PAYMENT_AMOUNT = 'paymentAmount';
    public const FIELD_PAYMENT_REF = 'paymentRef';
    public const FIELD_RESERVED = 'reserved';
    public const FIELD_FORM = 'form';
    public const FIELD_NOTE = 'note';
    public const FIELD_COVERAGE = 'coverage';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original request resource referrence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $request;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the style of resource contents. This should be mapped to the
     * allowable profiles for this and supporting resources.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $ruleset;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style (standard) and version of the original material which was converted
     * into this resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $originalRuleset;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $created;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Insurer who produced this adjudicated response.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $organization;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $requestProvider;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the services rendered to the patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $requestOrganization;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Transaction status: error, complete.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $outcome;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $disposition;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Party to be reimbursed: Subscriber, provider, other.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $payeeType;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[] 
     */
    protected array $item;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[] 
     */
    protected array $addItem;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[] 
     */
    protected array $error;
    /**
     * The total cost of the services reported.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $totalCost;
    /**
     * The amount of deductible applied which was not allocated to any particular
     * service line.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $unallocDeductable;
    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductible).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $totalBenefit;
    /**
     * Adjustment to the payment of this transaction which is not related to
     * adjudication of this transaction.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $paymentAdjustment;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for the payment adjustment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $paymentAdjustmentReason;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated payment data.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $paymentDate;
    /**
     * Payable less any payment adjustment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $paymentAmount;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Payment identifier.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $paymentRef;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of funds reservation (For provider, for Patient, None).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $reserved;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $form;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote[] 
     */
    protected array $note;
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage[] 
     */
    protected array $coverage;

    /** Default validation map for fields in type ClaimResponse */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRClaimResponse Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $request
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $ruleset
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $originalRuleset
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $created
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $organization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $requestProvider
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $requestOrganization
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $outcome
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $disposition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $payeeType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[] $item
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[] $addItem
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[] $error
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $totalCost
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $unallocDeductable
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $totalBenefit
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $paymentAdjustment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $paymentAdjustmentReason
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate $paymentDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $paymentAmount
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier $paymentRef
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $reserved
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $form
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote[] $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage[] $coverage
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
                                null|FHIRReference $request = null,
                                null|FHIRCoding $ruleset = null,
                                null|FHIRCoding $originalRuleset = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null,
                                null|FHIRReference $organization = null,
                                null|FHIRReference $requestProvider = null,
                                null|FHIRReference $requestOrganization = null,
                                null|string|FHIRCodePrimitive|FHIRCode $outcome = null,
                                null|string|FHIRStringPrimitive|FHIRString $disposition = null,
                                null|FHIRCoding $payeeType = null,
                                null|iterable $item = null,
                                null|iterable $addItem = null,
                                null|iterable $error = null,
                                null|FHIRMoney $totalCost = null,
                                null|FHIRMoney $unallocDeductable = null,
                                null|FHIRMoney $totalBenefit = null,
                                null|FHIRMoney $paymentAdjustment = null,
                                null|FHIRCoding $paymentAdjustmentReason = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $paymentDate = null,
                                null|FHIRMoney $paymentAmount = null,
                                null|FHIRIdentifier $paymentRef = null,
                                null|FHIRCoding $reserved = null,
                                null|FHIRCoding $form = null,
                                null|iterable $note = null,
                                null|iterable $coverage = null,
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
        if (null !== $request) {
            $this->setRequest($request);
        }
        if (null !== $ruleset) {
            $this->setRuleset($ruleset);
        }
        if (null !== $originalRuleset) {
            $this->setOriginalRuleset($originalRuleset);
        }
        if (null !== $created) {
            $this->setCreated($created);
        }
        if (null !== $organization) {
            $this->setOrganization($organization);
        }
        if (null !== $requestProvider) {
            $this->setRequestProvider($requestProvider);
        }
        if (null !== $requestOrganization) {
            $this->setRequestOrganization($requestOrganization);
        }
        if (null !== $outcome) {
            $this->setOutcome($outcome);
        }
        if (null !== $disposition) {
            $this->setDisposition($disposition);
        }
        if (null !== $payeeType) {
            $this->setPayeeType($payeeType);
        }
        if (null !== $item) {
            $this->setItem(...$item);
        }
        if (null !== $addItem) {
            $this->setAddItem(...$addItem);
        }
        if (null !== $error) {
            $this->setError(...$error);
        }
        if (null !== $totalCost) {
            $this->setTotalCost($totalCost);
        }
        if (null !== $unallocDeductable) {
            $this->setUnallocDeductable($unallocDeductable);
        }
        if (null !== $totalBenefit) {
            $this->setTotalBenefit($totalBenefit);
        }
        if (null !== $paymentAdjustment) {
            $this->setPaymentAdjustment($paymentAdjustment);
        }
        if (null !== $paymentAdjustmentReason) {
            $this->setPaymentAdjustmentReason($paymentAdjustmentReason);
        }
        if (null !== $paymentDate) {
            $this->setPaymentDate($paymentDate);
        }
        if (null !== $paymentAmount) {
            $this->setPaymentAmount($paymentAmount);
        }
        if (null !== $paymentRef) {
            $this->setPaymentRef($paymentRef);
        }
        if (null !== $reserved) {
            $this->setReserved($reserved);
        }
        if (null !== $form) {
            $this->setForm($form);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $coverage) {
            $this->setCoverage(...$coverage);
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
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
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier $identifier
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original request resource referrence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getRequest(): null|FHIRReference
    {
        return $this->request ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original request resource referrence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $request
     * @return static
     */
    public function setRequest(null|FHIRReference $request): self
    {
        if (null === $request) {
            unset($this->request);
            return $this;
        }
        $this->request = $request;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the style of resource contents. This should be mapped to the
     * allowable profiles for this and supporting resources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getRuleset(): null|FHIRCoding
    {
        return $this->ruleset ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the style of resource contents. This should be mapped to the
     * allowable profiles for this and supporting resources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $ruleset
     * @return static
     */
    public function setRuleset(null|FHIRCoding $ruleset): self
    {
        if (null === $ruleset) {
            unset($this->ruleset);
            return $this;
        }
        $this->ruleset = $ruleset;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style (standard) and version of the original material which was converted
     * into this resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getOriginalRuleset(): null|FHIRCoding
    {
        return $this->originalRuleset ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The style (standard) and version of the original material which was converted
     * into this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $originalRuleset
     * @return static
     */
    public function setOriginalRuleset(null|FHIRCoding $originalRuleset): self
    {
        if (null === $originalRuleset) {
            unset($this->originalRuleset);
            return $this;
        }
        $this->originalRuleset = $originalRuleset;
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
     * The date when the enclosed suite of services were performed or completed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime
     */
    public function getCreated(): null|FHIRDateTime
    {
        return $this->created ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $created
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCreated(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $created) {
            unset($this->created);
            return $this;
        }
        if (!($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime(value: $created);
        }
        if (null !== $valueXMLLocation) {
            $created->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $created->_getValueXMLLocation()) {
            $created->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->created = $created;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Insurer who produced this adjudicated response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getOrganization(): null|FHIRReference
    {
        return $this->organization ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Insurer who produced this adjudicated response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $organization
     * @return static
     */
    public function setOrganization(null|FHIRReference $organization): self
    {
        if (null === $organization) {
            unset($this->organization);
            return $this;
        }
        $this->organization = $organization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getRequestProvider(): null|FHIRReference
    {
        return $this->requestProvider ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $requestProvider
     * @return static
     */
    public function setRequestProvider(null|FHIRReference $requestProvider): self
    {
        if (null === $requestProvider) {
            unset($this->requestProvider);
            return $this;
        }
        $this->requestProvider = $requestProvider;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the services rendered to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getRequestOrganization(): null|FHIRReference
    {
        return $this->requestOrganization ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the services rendered to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $requestOrganization
     * @return static
     */
    public function setRequestOrganization(null|FHIRReference $requestOrganization): self
    {
        if (null === $requestOrganization) {
            unset($this->requestOrganization);
            return $this;
        }
        $this->requestOrganization = $requestOrganization;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Transaction status: error, complete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode
     */
    public function getOutcome(): null|FHIRCode
    {
        return $this->outcome ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Transaction status: error, complete.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $outcome
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOutcome(null|string|FHIRCodePrimitive|FHIRCode $outcome,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $outcome) {
            unset($this->outcome);
            return $this;
        }
        if (!($outcome instanceof FHIRCode)) {
            $outcome = new FHIRCode(value: $outcome);
        }
        if (null !== $valueXMLLocation) {
            $outcome->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $outcome->_getValueXMLLocation()) {
            $outcome->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getDisposition(): null|FHIRString
    {
        return $this->disposition ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $disposition
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDisposition(null|string|FHIRStringPrimitive|FHIRString $disposition,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $disposition) {
            unset($this->disposition);
            return $this;
        }
        if (!($disposition instanceof FHIRString)) {
            $disposition = new FHIRString(value: $disposition);
        }
        if (null !== $valueXMLLocation) {
            $disposition->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $disposition->_getValueXMLLocation()) {
            $disposition->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Party to be reimbursed: Subscriber, provider, other.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getPayeeType(): null|FHIRCoding
    {
        return $this->payeeType ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Party to be reimbursed: Subscriber, provider, other.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $payeeType
     * @return static
     */
    public function setPayeeType(null|FHIRCoding $payeeType): self
    {
        if (null === $payeeType) {
            unset($this->payeeType);
            return $this;
        }
        $this->payeeType = $payeeType;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    public function getItem(): array
    {
        return $this->item ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem>
     */
    public function getItemIterator(): iterable
    {
        if (!isset($this->item) || [] === $this->item) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->item);
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem $item
     * @return static
     */
    public function addItem(FHIRClaimResponseItem $item): self
    {
        if (!isset($this->item)) {
            $this->item = [];
        }
        $this->item[] = $item;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem ...$item
     * @return static
     */
    public function setItem(FHIRClaimResponseItem ...$item): self
    {
        $this->item = $item;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    public function getAddItem(): array
    {
        return $this->addItem ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem>
     */
    public function getAddItemIterator(): iterable
    {
        if (!isset($this->addItem) || [] === $this->addItem) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->addItem);
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem $addItem
     * @return static
     */
    public function addAddItem(FHIRClaimResponseAddItem $addItem): self
    {
        if (!isset($this->addItem)) {
            $this->addItem = [];
        }
        $this->addItem[] = $addItem;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem ...$addItem
     * @return static
     */
    public function setAddItem(FHIRClaimResponseAddItem ...$addItem): self
    {
        $this->addItem = $addItem;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    public function getError(): array
    {
        return $this->error ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError>
     */
    public function getErrorIterator(): iterable
    {
        if (!isset($this->error) || [] === $this->error) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->error);
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $error
     * @return static
     */
    public function addError(FHIRClaimResponseError $error): self
    {
        if (!isset($this->error)) {
            $this->error = [];
        }
        $this->error[] = $error;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError ...$error
     * @return static
     */
    public function setError(FHIRClaimResponseError ...$error): self
    {
        $this->error = $error;
        return $this;
    }

    /**
     * The total cost of the services reported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalCost(): null|FHIRMoney
    {
        return $this->totalCost ?? null;
    }

    /**
     * The total cost of the services reported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $totalCost
     * @return static
     */
    public function setTotalCost(null|FHIRMoney $totalCost): self
    {
        if (null === $totalCost) {
            unset($this->totalCost);
            return $this;
        }
        $this->totalCost = $totalCost;
        return $this;
    }

    /**
     * The amount of deductible applied which was not allocated to any particular
     * service line.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnallocDeductable(): null|FHIRMoney
    {
        return $this->unallocDeductable ?? null;
    }

    /**
     * The amount of deductible applied which was not allocated to any particular
     * service line.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $unallocDeductable
     * @return static
     */
    public function setUnallocDeductable(null|FHIRMoney $unallocDeductable): self
    {
        if (null === $unallocDeductable) {
            unset($this->unallocDeductable);
            return $this;
        }
        $this->unallocDeductable = $unallocDeductable;
        return $this;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductible).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalBenefit(): null|FHIRMoney
    {
        return $this->totalBenefit ?? null;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductible).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $totalBenefit
     * @return static
     */
    public function setTotalBenefit(null|FHIRMoney $totalBenefit): self
    {
        if (null === $totalBenefit) {
            unset($this->totalBenefit);
            return $this;
        }
        $this->totalBenefit = $totalBenefit;
        return $this;
    }

    /**
     * Adjustment to the payment of this transaction which is not related to
     * adjudication of this transaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPaymentAdjustment(): null|FHIRMoney
    {
        return $this->paymentAdjustment ?? null;
    }

    /**
     * Adjustment to the payment of this transaction which is not related to
     * adjudication of this transaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $paymentAdjustment
     * @return static
     */
    public function setPaymentAdjustment(null|FHIRMoney $paymentAdjustment): self
    {
        if (null === $paymentAdjustment) {
            unset($this->paymentAdjustment);
            return $this;
        }
        $this->paymentAdjustment = $paymentAdjustment;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for the payment adjustment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getPaymentAdjustmentReason(): null|FHIRCoding
    {
        return $this->paymentAdjustmentReason ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason for the payment adjustment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $paymentAdjustmentReason
     * @return static
     */
    public function setPaymentAdjustmentReason(null|FHIRCoding $paymentAdjustmentReason): self
    {
        if (null === $paymentAdjustmentReason) {
            unset($this->paymentAdjustmentReason);
            return $this;
        }
        $this->paymentAdjustmentReason = $paymentAdjustmentReason;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated payment data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate
     */
    public function getPaymentDate(): null|FHIRDate
    {
        return $this->paymentDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Estimated payment data.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate $paymentDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPaymentDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $paymentDate,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $paymentDate) {
            unset($this->paymentDate);
            return $this;
        }
        if (!($paymentDate instanceof FHIRDate)) {
            $paymentDate = new FHIRDate(value: $paymentDate);
        }
        if (null !== $valueXMLLocation) {
            $paymentDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $paymentDate->_getValueXMLLocation()) {
            $paymentDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * Payable less any payment adjustment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPaymentAmount(): null|FHIRMoney
    {
        return $this->paymentAmount ?? null;
    }

    /**
     * Payable less any payment adjustment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRMoney $paymentAmount
     * @return static
     */
    public function setPaymentAmount(null|FHIRMoney $paymentAmount): self
    {
        if (null === $paymentAmount) {
            unset($this->paymentAmount);
            return $this;
        }
        $this->paymentAmount = $paymentAmount;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Payment identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier
     */
    public function getPaymentRef(): null|FHIRIdentifier
    {
        return $this->paymentRef ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Payment identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier $paymentRef
     * @return static
     */
    public function setPaymentRef(null|FHIRIdentifier $paymentRef): self
    {
        if (null === $paymentRef) {
            unset($this->paymentRef);
            return $this;
        }
        $this->paymentRef = $paymentRef;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of funds reservation (For provider, for Patient, None).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getReserved(): null|FHIRCoding
    {
        return $this->reserved ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of funds reservation (For provider, for Patient, None).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $reserved
     * @return static
     */
    public function setReserved(null|FHIRCoding $reserved): self
    {
        if (null === $reserved) {
            unset($this->reserved);
            return $this;
        }
        $this->reserved = $reserved;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getForm(): null|FHIRCoding
    {
        return $this->form ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $form
     * @return static
     */
    public function setForm(null|FHIRCoding $form): self
    {
        if (null === $form) {
            unset($this->form);
            return $this;
        }
        $this->form = $form;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note) || [] === $this->note) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote $note
     * @return static
     */
    public function addNote(FHIRClaimResponseNote $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote ...$note
     * @return static
     */
    public function setNote(FHIRClaimResponseNote ...$note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage[]
     */
    public function getCoverage(): array
    {
        return $this->coverage ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage>
     */
    public function getCoverageIterator(): iterable
    {
        if (!isset($this->coverage) || [] === $this->coverage) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->coverage);
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage $coverage
     * @return static
     */
    public function addCoverage(FHIRClaimResponseCoverage $coverage): self
    {
        if (!isset($this->coverage)) {
            $this->coverage = [];
        }
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage ...$coverage
     * @return static
     */
    public function setCoverage(FHIRClaimResponseCoverage ...$coverage): self
    {
        $this->coverage = $coverage;
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
        if (isset($validationRules[self::FIELD_REQUEST])) {
            $v = $this->getRequest();
            foreach($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST])) {
                        $errs[self::FIELD_REQUEST] = [];
                    }
                    $errs[self::FIELD_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RULESET])) {
            $v = $this->getRuleset();
            foreach($validationRules[self::FIELD_RULESET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RULESET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RULESET])) {
                        $errs[self::FIELD_RULESET] = [];
                    }
                    $errs[self::FIELD_RULESET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIGINAL_RULESET])) {
            $v = $this->getOriginalRuleset();
            foreach($validationRules[self::FIELD_ORIGINAL_RULESET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORIGINAL_RULESET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIGINAL_RULESET])) {
                        $errs[self::FIELD_ORIGINAL_RULESET] = [];
                    }
                    $errs[self::FIELD_ORIGINAL_RULESET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CREATED])) {
            $v = $this->getCreated();
            foreach($validationRules[self::FIELD_CREATED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CREATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CREATED])) {
                        $errs[self::FIELD_CREATED] = [];
                    }
                    $errs[self::FIELD_CREATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORGANIZATION])) {
            $v = $this->getOrganization();
            foreach($validationRules[self::FIELD_ORGANIZATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORGANIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORGANIZATION])) {
                        $errs[self::FIELD_ORGANIZATION] = [];
                    }
                    $errs[self::FIELD_ORGANIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_PROVIDER])) {
            $v = $this->getRequestProvider();
            foreach($validationRules[self::FIELD_REQUEST_PROVIDER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUEST_PROVIDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_PROVIDER])) {
                        $errs[self::FIELD_REQUEST_PROVIDER] = [];
                    }
                    $errs[self::FIELD_REQUEST_PROVIDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_ORGANIZATION])) {
            $v = $this->getRequestOrganization();
            foreach($validationRules[self::FIELD_REQUEST_ORGANIZATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUEST_ORGANIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_ORGANIZATION])) {
                        $errs[self::FIELD_REQUEST_ORGANIZATION] = [];
                    }
                    $errs[self::FIELD_REQUEST_ORGANIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPOSITION])) {
            $v = $this->getDisposition();
            foreach($validationRules[self::FIELD_DISPOSITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISPOSITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPOSITION])) {
                        $errs[self::FIELD_DISPOSITION] = [];
                    }
                    $errs[self::FIELD_DISPOSITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYEE_TYPE])) {
            $v = $this->getPayeeType();
            foreach($validationRules[self::FIELD_PAYEE_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYEE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYEE_TYPE])) {
                        $errs[self::FIELD_PAYEE_TYPE] = [];
                    }
                    $errs[self::FIELD_PAYEE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM])) {
                        $errs[self::FIELD_ITEM] = [];
                    }
                    $errs[self::FIELD_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADD_ITEM])) {
            $v = $this->getAddItem();
            foreach($validationRules[self::FIELD_ADD_ITEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADD_ITEM])) {
                        $errs[self::FIELD_ADD_ITEM] = [];
                    }
                    $errs[self::FIELD_ADD_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ERROR])) {
            $v = $this->getError();
            foreach($validationRules[self::FIELD_ERROR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ERROR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ERROR])) {
                        $errs[self::FIELD_ERROR] = [];
                    }
                    $errs[self::FIELD_ERROR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOTAL_COST])) {
            $v = $this->getTotalCost();
            foreach($validationRules[self::FIELD_TOTAL_COST] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TOTAL_COST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOTAL_COST])) {
                        $errs[self::FIELD_TOTAL_COST] = [];
                    }
                    $errs[self::FIELD_TOTAL_COST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNALLOC_DEDUCTABLE])) {
            $v = $this->getUnallocDeductable();
            foreach($validationRules[self::FIELD_UNALLOC_DEDUCTABLE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UNALLOC_DEDUCTABLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNALLOC_DEDUCTABLE])) {
                        $errs[self::FIELD_UNALLOC_DEDUCTABLE] = [];
                    }
                    $errs[self::FIELD_UNALLOC_DEDUCTABLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TOTAL_BENEFIT])) {
            $v = $this->getTotalBenefit();
            foreach($validationRules[self::FIELD_TOTAL_BENEFIT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TOTAL_BENEFIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOTAL_BENEFIT])) {
                        $errs[self::FIELD_TOTAL_BENEFIT] = [];
                    }
                    $errs[self::FIELD_TOTAL_BENEFIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYMENT_ADJUSTMENT])) {
            $v = $this->getPaymentAdjustment();
            foreach($validationRules[self::FIELD_PAYMENT_ADJUSTMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYMENT_ADJUSTMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT_ADJUSTMENT])) {
                        $errs[self::FIELD_PAYMENT_ADJUSTMENT] = [];
                    }
                    $errs[self::FIELD_PAYMENT_ADJUSTMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYMENT_ADJUSTMENT_REASON])) {
            $v = $this->getPaymentAdjustmentReason();
            foreach($validationRules[self::FIELD_PAYMENT_ADJUSTMENT_REASON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYMENT_ADJUSTMENT_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT_ADJUSTMENT_REASON])) {
                        $errs[self::FIELD_PAYMENT_ADJUSTMENT_REASON] = [];
                    }
                    $errs[self::FIELD_PAYMENT_ADJUSTMENT_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYMENT_DATE])) {
            $v = $this->getPaymentDate();
            foreach($validationRules[self::FIELD_PAYMENT_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYMENT_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT_DATE])) {
                        $errs[self::FIELD_PAYMENT_DATE] = [];
                    }
                    $errs[self::FIELD_PAYMENT_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYMENT_AMOUNT])) {
            $v = $this->getPaymentAmount();
            foreach($validationRules[self::FIELD_PAYMENT_AMOUNT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYMENT_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT_AMOUNT])) {
                        $errs[self::FIELD_PAYMENT_AMOUNT] = [];
                    }
                    $errs[self::FIELD_PAYMENT_AMOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYMENT_REF])) {
            $v = $this->getPaymentRef();
            foreach($validationRules[self::FIELD_PAYMENT_REF] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYMENT_REF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT_REF])) {
                        $errs[self::FIELD_PAYMENT_REF] = [];
                    }
                    $errs[self::FIELD_PAYMENT_REF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESERVED])) {
            $v = $this->getReserved();
            foreach($validationRules[self::FIELD_RESERVED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESERVED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESERVED])) {
                        $errs[self::FIELD_RESERVED] = [];
                    }
                    $errs[self::FIELD_RESERVED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORM])) {
            $v = $this->getForm();
            foreach($validationRules[self::FIELD_FORM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORM])) {
                        $errs[self::FIELD_FORM] = [];
                    }
                    $errs[self::FIELD_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COVERAGE])) {
            $v = $this->getCoverage();
            foreach($validationRules[self::FIELD_COVERAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COVERAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COVERAGE])) {
                        $errs[self::FIELD_COVERAGE] = [];
                    }
                    $errs[self::FIELD_COVERAGE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaimResponse $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponse)) {
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
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface $cn */
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
            } else if (self::FIELD_REQUEST === $childName) {
                $v = new FHIRReference();
                $type->setRequest(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RULESET === $childName) {
                $v = new FHIRCoding();
                $type->setRuleset(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORIGINAL_RULESET === $childName) {
                $v = new FHIRCoding();
                $type->setOriginalRuleset(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CREATED === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCreated(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORGANIZATION === $childName) {
                $v = new FHIRReference();
                $type->setOrganization(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUEST_PROVIDER === $childName) {
                $v = new FHIRReference();
                $type->setRequestProvider(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUEST_ORGANIZATION === $childName) {
                $v = new FHIRReference();
                $type->setRequestOrganization(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OUTCOME === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setOutcome(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISPOSITION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDisposition(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAYEE_TYPE === $childName) {
                $v = new FHIRCoding();
                $type->setPayeeType(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ITEM === $childName) {
                $v = new FHIRClaimResponseItem();
                $type->addItem(FHIRClaimResponseItem::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ADD_ITEM === $childName) {
                $v = new FHIRClaimResponseAddItem();
                $type->addAddItem(FHIRClaimResponseAddItem::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ERROR === $childName) {
                $v = new FHIRClaimResponseError();
                $type->addError(FHIRClaimResponseError::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TOTAL_COST === $childName) {
                $v = new FHIRMoney();
                $type->setTotalCost(FHIRMoney::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_UNALLOC_DEDUCTABLE === $childName) {
                $v = new FHIRMoney();
                $type->setUnallocDeductable(FHIRMoney::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TOTAL_BENEFIT === $childName) {
                $v = new FHIRMoney();
                $type->setTotalBenefit(FHIRMoney::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAYMENT_ADJUSTMENT === $childName) {
                $v = new FHIRMoney();
                $type->setPaymentAdjustment(FHIRMoney::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAYMENT_ADJUSTMENT_REASON === $childName) {
                $v = new FHIRCoding();
                $type->setPaymentAdjustmentReason(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAYMENT_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPaymentDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAYMENT_AMOUNT === $childName) {
                $v = new FHIRMoney();
                $type->setPaymentAmount(FHIRMoney::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAYMENT_REF === $childName) {
                $v = new FHIRIdentifier();
                $type->setPaymentRef(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESERVED === $childName) {
                $v = new FHIRCoding();
                $type->setReserved(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FORM === $childName) {
                $v = new FHIRCoding();
                $type->setForm(FHIRCoding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRClaimResponseNote();
                $type->addNote(FHIRClaimResponseNote::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COVERAGE === $childName) {
                $v = new FHIRClaimResponseCoverage();
                $type->addCoverage(FHIRClaimResponseCoverage::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CREATED])) {
            $pt = $type->getCreated();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CREATED]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCreated(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_CREATED],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_OUTCOME])) {
            $pt = $type->getOutcome();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_OUTCOME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setOutcome(new FHIRCode(
                    value: (string)$attributes[self::FIELD_OUTCOME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DISPOSITION])) {
            $pt = $type->getDisposition();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DISPOSITION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDisposition(new FHIRString(
                    value: (string)$attributes[self::FIELD_DISPOSITION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PAYMENT_DATE])) {
            $pt = $type->getPaymentDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PAYMENT_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPaymentDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_PAYMENT_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('ClaimResponse', $this->_getSourceXMLNS());
        }
        if (isset($this->created) && $this->created->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CREATED, $this->created->getValue()?->_getFormattedValue());
        }
        if (isset($this->outcome) && $this->outcome->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_OUTCOME, $this->outcome->getValue()?->_getFormattedValue());
        }
        if (isset($this->disposition) && $this->disposition->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DISPOSITION, $this->disposition->getValue()?->_getFormattedValue());
        }
        if (isset($this->paymentDate) && $this->paymentDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PAYMENT_DATE, $this->paymentDate->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->request)) {
            $xw->startElement(self::FIELD_REQUEST);
            $this->request->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->ruleset)) {
            $xw->startElement(self::FIELD_RULESET);
            $this->ruleset->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->originalRuleset)) {
            $xw->startElement(self::FIELD_ORIGINAL_RULESET);
            $this->originalRuleset->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->created) && $this->created->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CREATED);
            $this->created->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->organization)) {
            $xw->startElement(self::FIELD_ORGANIZATION);
            $this->organization->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requestProvider)) {
            $xw->startElement(self::FIELD_REQUEST_PROVIDER);
            $this->requestProvider->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requestOrganization)) {
            $xw->startElement(self::FIELD_REQUEST_ORGANIZATION);
            $this->requestOrganization->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->outcome) && $this->outcome->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_OUTCOME);
            $this->outcome->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->disposition) && $this->disposition->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DISPOSITION);
            $this->disposition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->payeeType)) {
            $xw->startElement(self::FIELD_PAYEE_TYPE);
            $this->payeeType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->item)) {
            foreach ($this->item as $v) {
                $xw->startElement(self::FIELD_ITEM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->addItem)) {
            foreach ($this->addItem as $v) {
                $xw->startElement(self::FIELD_ADD_ITEM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->error)) {
            foreach ($this->error as $v) {
                $xw->startElement(self::FIELD_ERROR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->totalCost)) {
            $xw->startElement(self::FIELD_TOTAL_COST);
            $this->totalCost->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->unallocDeductable)) {
            $xw->startElement(self::FIELD_UNALLOC_DEDUCTABLE);
            $this->unallocDeductable->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->totalBenefit)) {
            $xw->startElement(self::FIELD_TOTAL_BENEFIT);
            $this->totalBenefit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->paymentAdjustment)) {
            $xw->startElement(self::FIELD_PAYMENT_ADJUSTMENT);
            $this->paymentAdjustment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->paymentAdjustmentReason)) {
            $xw->startElement(self::FIELD_PAYMENT_ADJUSTMENT_REASON);
            $this->paymentAdjustmentReason->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->paymentDate) && $this->paymentDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PAYMENT_DATE);
            $this->paymentDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->paymentAmount)) {
            $xw->startElement(self::FIELD_PAYMENT_AMOUNT);
            $this->paymentAmount->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->paymentRef)) {
            $xw->startElement(self::FIELD_PAYMENT_REF);
            $this->paymentRef->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reserved)) {
            $xw->startElement(self::FIELD_RESERVED);
            $this->reserved->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->form)) {
            $xw->startElement(self::FIELD_FORM);
            $this->form->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->coverage)) {
            foreach ($this->coverage as $v) {
                $xw->startElement(self::FIELD_COVERAGE);
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
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaimResponse $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponse)) {
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
            $vs = $json[self::FIELD_IDENTIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_REQUEST]) || array_key_exists(self::FIELD_REQUEST, $json)) {
            $type->setRequest(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_REQUEST],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RULESET]) || array_key_exists(self::FIELD_RULESET, $json)) {
            $type->setRuleset(FHIRCoding::jsonUnserialize(
                json: $json[self::FIELD_RULESET],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ORIGINAL_RULESET]) || array_key_exists(self::FIELD_ORIGINAL_RULESET, $json)) {
            $type->setOriginalRuleset(FHIRCoding::jsonUnserialize(
                json: $json[self::FIELD_ORIGINAL_RULESET],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CREATED]) || isset($json[self::FIELD_CREATED_EXT]) || array_key_exists(self::FIELD_CREATED, $json) || array_key_exists(self::FIELD_CREATED_EXT, $json)) {
            $value = $json[self::FIELD_CREATED] ?? null;
            $ext = (array)($json[self::FIELD_CREATED_EXT] ?? []);
            $type->setCreated(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ORGANIZATION]) || array_key_exists(self::FIELD_ORGANIZATION, $json)) {
            $type->setOrganization(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_ORGANIZATION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_REQUEST_PROVIDER]) || array_key_exists(self::FIELD_REQUEST_PROVIDER, $json)) {
            $type->setRequestProvider(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_REQUEST_PROVIDER],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_REQUEST_ORGANIZATION]) || array_key_exists(self::FIELD_REQUEST_ORGANIZATION, $json)) {
            $type->setRequestOrganization(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_REQUEST_ORGANIZATION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_OUTCOME]) || isset($json[self::FIELD_OUTCOME_EXT]) || array_key_exists(self::FIELD_OUTCOME, $json) || array_key_exists(self::FIELD_OUTCOME_EXT, $json)) {
            $value = $json[self::FIELD_OUTCOME] ?? null;
            $ext = (array)($json[self::FIELD_OUTCOME_EXT] ?? []);
            $type->setOutcome(FHIRCode::jsonUnserialize(
                json: [FHIRCode::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DISPOSITION]) || isset($json[self::FIELD_DISPOSITION_EXT]) || array_key_exists(self::FIELD_DISPOSITION, $json) || array_key_exists(self::FIELD_DISPOSITION_EXT, $json)) {
            $value = $json[self::FIELD_DISPOSITION] ?? null;
            $ext = (array)($json[self::FIELD_DISPOSITION_EXT] ?? []);
            $type->setDisposition(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PAYEE_TYPE]) || array_key_exists(self::FIELD_PAYEE_TYPE, $json)) {
            $type->setPayeeType(FHIRCoding::jsonUnserialize(
                json: $json[self::FIELD_PAYEE_TYPE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ITEM]) || array_key_exists(self::FIELD_ITEM, $json)) {
            $vs = $json[self::FIELD_ITEM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addItem(FHIRClaimResponseItem::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ADD_ITEM]) || array_key_exists(self::FIELD_ADD_ITEM, $json)) {
            $vs = $json[self::FIELD_ADD_ITEM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAddItem(FHIRClaimResponseAddItem::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ERROR]) || array_key_exists(self::FIELD_ERROR, $json)) {
            $vs = $json[self::FIELD_ERROR];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addError(FHIRClaimResponseError::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_TOTAL_COST]) || array_key_exists(self::FIELD_TOTAL_COST, $json)) {
            $type->setTotalCost(FHIRMoney::jsonUnserialize(
                json: $json[self::FIELD_TOTAL_COST],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_UNALLOC_DEDUCTABLE]) || array_key_exists(self::FIELD_UNALLOC_DEDUCTABLE, $json)) {
            $type->setUnallocDeductable(FHIRMoney::jsonUnserialize(
                json: $json[self::FIELD_UNALLOC_DEDUCTABLE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TOTAL_BENEFIT]) || array_key_exists(self::FIELD_TOTAL_BENEFIT, $json)) {
            $type->setTotalBenefit(FHIRMoney::jsonUnserialize(
                json: $json[self::FIELD_TOTAL_BENEFIT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PAYMENT_ADJUSTMENT]) || array_key_exists(self::FIELD_PAYMENT_ADJUSTMENT, $json)) {
            $type->setPaymentAdjustment(FHIRMoney::jsonUnserialize(
                json: $json[self::FIELD_PAYMENT_ADJUSTMENT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PAYMENT_ADJUSTMENT_REASON]) || array_key_exists(self::FIELD_PAYMENT_ADJUSTMENT_REASON, $json)) {
            $type->setPaymentAdjustmentReason(FHIRCoding::jsonUnserialize(
                json: $json[self::FIELD_PAYMENT_ADJUSTMENT_REASON],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PAYMENT_DATE]) || isset($json[self::FIELD_PAYMENT_DATE_EXT]) || array_key_exists(self::FIELD_PAYMENT_DATE, $json) || array_key_exists(self::FIELD_PAYMENT_DATE_EXT, $json)) {
            $value = $json[self::FIELD_PAYMENT_DATE] ?? null;
            $ext = (array)($json[self::FIELD_PAYMENT_DATE_EXT] ?? []);
            $type->setPaymentDate(FHIRDate::jsonUnserialize(
                json: [FHIRDate::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PAYMENT_AMOUNT]) || array_key_exists(self::FIELD_PAYMENT_AMOUNT, $json)) {
            $type->setPaymentAmount(FHIRMoney::jsonUnserialize(
                json: $json[self::FIELD_PAYMENT_AMOUNT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PAYMENT_REF]) || array_key_exists(self::FIELD_PAYMENT_REF, $json)) {
            $type->setPaymentRef(FHIRIdentifier::jsonUnserialize(
                json: $json[self::FIELD_PAYMENT_REF],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RESERVED]) || array_key_exists(self::FIELD_RESERVED, $json)) {
            $type->setReserved(FHIRCoding::jsonUnserialize(
                json: $json[self::FIELD_RESERVED],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_FORM]) || array_key_exists(self::FIELD_FORM, $json)) {
            $type->setForm(FHIRCoding::jsonUnserialize(
                json: $json[self::FIELD_FORM],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            $vs = $json[self::FIELD_NOTE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addNote(FHIRClaimResponseNote::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_COVERAGE]) || array_key_exists(self::FIELD_COVERAGE, $json)) {
            $vs = $json[self::FIELD_COVERAGE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCoverage(FHIRClaimResponseCoverage::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
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
        if (isset($this->request)) {
            $out->request = $this->request;
        }
        if (isset($this->ruleset)) {
            $out->ruleset = $this->ruleset;
        }
        if (isset($this->originalRuleset)) {
            $out->originalRuleset = $this->originalRuleset;
        }
        if (isset($this->created)) {
            if (null !== ($val = $this->created->getValue())) {
                $out->created = $val;
            }
            $ext = $this->created->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_created = $ext;
            }
        }
        if (isset($this->organization)) {
            $out->organization = $this->organization;
        }
        if (isset($this->requestProvider)) {
            $out->requestProvider = $this->requestProvider;
        }
        if (isset($this->requestOrganization)) {
            $out->requestOrganization = $this->requestOrganization;
        }
        if (isset($this->outcome)) {
            if (null !== ($val = $this->outcome->getValue())) {
                $out->outcome = $val;
            }
            $ext = $this->outcome->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_outcome = $ext;
            }
        }
        if (isset($this->disposition)) {
            if (null !== ($val = $this->disposition->getValue())) {
                $out->disposition = $val;
            }
            $ext = $this->disposition->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_disposition = $ext;
            }
        }
        if (isset($this->payeeType)) {
            $out->payeeType = $this->payeeType;
        }
        if (isset($this->item) && [] !== $this->item) {
            $out->item = $this->item;
        }
        if (isset($this->addItem) && [] !== $this->addItem) {
            $out->addItem = $this->addItem;
        }
        if (isset($this->error) && [] !== $this->error) {
            $out->error = $this->error;
        }
        if (isset($this->totalCost)) {
            $out->totalCost = $this->totalCost;
        }
        if (isset($this->unallocDeductable)) {
            $out->unallocDeductable = $this->unallocDeductable;
        }
        if (isset($this->totalBenefit)) {
            $out->totalBenefit = $this->totalBenefit;
        }
        if (isset($this->paymentAdjustment)) {
            $out->paymentAdjustment = $this->paymentAdjustment;
        }
        if (isset($this->paymentAdjustmentReason)) {
            $out->paymentAdjustmentReason = $this->paymentAdjustmentReason;
        }
        if (isset($this->paymentDate)) {
            if (null !== ($val = $this->paymentDate->getValue())) {
                $out->paymentDate = $val;
            }
            $ext = $this->paymentDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_paymentDate = $ext;
            }
        }
        if (isset($this->paymentAmount)) {
            $out->paymentAmount = $this->paymentAmount;
        }
        if (isset($this->paymentRef)) {
            $out->paymentRef = $this->paymentRef;
        }
        if (isset($this->reserved)) {
            $out->reserved = $this->reserved;
        }
        if (isset($this->form)) {
            $out->form = $this->form;
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        if (isset($this->coverage) && [] !== $this->coverage) {
            $out->coverage = $this->coverage;
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