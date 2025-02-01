<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRUseList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSupportingInfo;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUse;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * A provider issued list of professional services and products which have been
 * provided, or are to be provided, to a patient which is sent to an insurer for
 * reimbursement.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRClaim extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_TYPE = 'type';
    public const FIELD_SUB_TYPE = 'subType';
    public const FIELD_USE = 'use';
    public const FIELD_USE_EXT = '_use';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_BILLABLE_PERIOD = 'billablePeriod';
    public const FIELD_CREATED = 'created';
    public const FIELD_CREATED_EXT = '_created';
    public const FIELD_ENTERER = 'enterer';
    public const FIELD_INSURER = 'insurer';
    public const FIELD_PROVIDER = 'provider';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_FUNDS_RESERVE = 'fundsReserve';
    public const FIELD_RELATED = 'related';
    public const FIELD_PRESCRIPTION = 'prescription';
    public const FIELD_ORIGINAL_PRESCRIPTION = 'originalPrescription';
    public const FIELD_PAYEE = 'payee';
    public const FIELD_REFERRAL = 'referral';
    public const FIELD_FACILITY = 'facility';
    public const FIELD_CARE_TEAM = 'careTeam';
    public const FIELD_SUPPORTING_INFO = 'supportingInfo';
    public const FIELD_DIAGNOSIS = 'diagnosis';
    public const FIELD_PROCEDURE = 'procedure';
    public const FIELD_INSURANCE = 'insurance';
    public const FIELD_ACCIDENT = 'accident';
    public const FIELD_ITEM = 'item';
    public const FIELD_TOTAL = 'total';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_USE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PATIENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CREATED => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PROVIDER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PRIORITY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_INSURANCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_USE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CREATED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFinancialResourceStatusCodes 
     */
    protected FHIRFinancialResourceStatusCodes $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim type codes which may convey additional
     * information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $subType;
    /**
     * The purpose of the Claim: predetermination, preauthorization, claim.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate whether the nature of the request is: to request adjudication
     * of products and services previously rendered; or requesting authorization and
     * adjudication for provision in the future; or requesting the non-binding
     * adjudication of the listed products and services which could be provided in the
     * future.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUse 
     */
    protected FHIRUse $use;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party to whom the professional services and/or products have been supplied
     * or are being considered and for whom actual or forecast reimbursement is sought.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period for which charges are being submitted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $billablePeriod;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this resource was created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $created;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $enterer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Insurer who is target of the request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $insurer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the claim, predetermination or
     * preauthorization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $provider;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider-required urgency of processing the request. Typical values include:
     * stat, routine deferred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $priority;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code to indicate whether and for whom funds are to be reserved for future
     * claims.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $fundsReserve;
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Other claims which are related to this claim such as prior submissions or claims
     * for related services or for the same event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated[] 
     */
    protected array $related;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of pharmacy, device or vision products.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $prescription;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original prescription which has been superseded by this prescription to support
     * the dispensing of pharmacy services, medications or products.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $originalPrescription;
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * The party to be reimbursed for cost of the products and services according to
     * the terms of the policy.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee 
     */
    protected FHIRClaimPayee $payee;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a referral resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $referral;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $facility;
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * The members of the team who provided the products and services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam[] 
     */
    protected array $careTeam;
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSupportingInfo[] 
     */
    protected array $supportingInfo;
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[] 
     */
    protected array $diagnosis;
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Procedures performed on the patient relevant to the billing items with the
     * claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure[] 
     */
    protected array $procedure;
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance[] 
     */
    protected array $insurance;
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Details of an accident which resulted in injuries which required the products
     * and services listed in the claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident 
     */
    protected FHIRClaimAccident $accident;
    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim line. Either a simple product or service or a 'group' of details which
     * can each be a simple items or groups of sub-details.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[] 
     */
    protected array $item;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total value of the all the items in the claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney 
     */
    protected FHIRMoney $total;

    /* constructor.php:63 */
    /**
     * FHIRClaim Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $subType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRUseList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUse $use
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $billablePeriod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $created
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $enterer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $insurer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $provider
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $priority
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $fundsReserve
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated[] $related
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $prescription
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $originalPrescription
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee $payee
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $referral
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $facility
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam[] $careTeam
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSupportingInfo[] $supportingInfo
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[] $diagnosis
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure[] $procedure
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance[] $insurance
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident $accident
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[] $item
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $total
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
                                null|string|FHIRFinancialResourceStatusCodesList|FHIRFinancialResourceStatusCodes $status = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRCodeableConcept $subType = null,
                                null|string|FHIRUseList|FHIRUse $use = null,
                                null|FHIRReference $patient = null,
                                null|FHIRPeriod $billablePeriod = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null,
                                null|FHIRReference $enterer = null,
                                null|FHIRReference $insurer = null,
                                null|FHIRReference $provider = null,
                                null|FHIRCodeableConcept $priority = null,
                                null|FHIRCodeableConcept $fundsReserve = null,
                                null|iterable $related = null,
                                null|FHIRReference $prescription = null,
                                null|FHIRReference $originalPrescription = null,
                                null|FHIRClaimPayee $payee = null,
                                null|FHIRReference $referral = null,
                                null|FHIRReference $facility = null,
                                null|iterable $careTeam = null,
                                null|iterable $supportingInfo = null,
                                null|iterable $diagnosis = null,
                                null|iterable $procedure = null,
                                null|iterable $insurance = null,
                                null|FHIRClaimAccident $accident = null,
                                null|iterable $item = null,
                                null|FHIRMoney $total = null,
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
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $subType) {
            $this->setSubType($subType);
        }
        if (null !== $use) {
            $this->setUse($use);
        }
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $billablePeriod) {
            $this->setBillablePeriod($billablePeriod);
        }
        if (null !== $created) {
            $this->setCreated($created);
        }
        if (null !== $enterer) {
            $this->setEnterer($enterer);
        }
        if (null !== $insurer) {
            $this->setInsurer($insurer);
        }
        if (null !== $provider) {
            $this->setProvider($provider);
        }
        if (null !== $priority) {
            $this->setPriority($priority);
        }
        if (null !== $fundsReserve) {
            $this->setFundsReserve($fundsReserve);
        }
        if (null !== $related) {
            $this->setRelated(...$related);
        }
        if (null !== $prescription) {
            $this->setPrescription($prescription);
        }
        if (null !== $originalPrescription) {
            $this->setOriginalPrescription($originalPrescription);
        }
        if (null !== $payee) {
            $this->setPayee($payee);
        }
        if (null !== $referral) {
            $this->setReferral($referral);
        }
        if (null !== $facility) {
            $this->setFacility($facility);
        }
        if (null !== $careTeam) {
            $this->setCareTeam(...$careTeam);
        }
        if (null !== $supportingInfo) {
            $this->setSupportingInfo(...$supportingInfo);
        }
        if (null !== $diagnosis) {
            $this->setDiagnosis(...$diagnosis);
        }
        if (null !== $procedure) {
            $this->setProcedure(...$procedure);
        }
        if (null !== $insurance) {
            $this->setInsurance(...$insurance);
        }
        if (null !== $accident) {
            $this->setAccident($accident);
        }
        if (null !== $item) {
            $this->setItem(...$item);
        }
        if (null !== $total) {
            $this->setTotal($total);
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this claim.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier>
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
     * A unique identifier assigned to this claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
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
     * A unique identifier assigned to this claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier ...$identifier
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
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus(): null|FHIRFinancialResourceStatusCodes
    {
        return $this->status ?? null;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRFinancialResourceStatusCodesList|FHIRFinancialResourceStatusCodes $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRFinancialResourceStatusCodes)) {
            $status = new FHIRFinancialResourceStatusCodes(value: $status);
        }
        $this->status = $status;
        if ($this->_valueXMLLocations[self::FIELD_STATUS] !== $valueXMLLocation) {
            $this->_setStatusValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the status element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStatusValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STATUS];
    }

    /**
     * Set the location the "value" field of the status element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStatusValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STATUS] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
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
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $type
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim type codes which may convey additional
     * information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType(): null|FHIRCodeableConcept
    {
        return $this->subType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim type codes which may convey additional
     * information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $subType
     * @return static
     */
    public function setSubType(null|FHIRCodeableConcept $subType): self
    {
        if (null === $subType) {
            unset($this->subType);
            return $this;
        }
        $this->subType = $subType;
        return $this;
    }

    /**
     * The purpose of the Claim: predetermination, preauthorization, claim.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate whether the nature of the request is: to request adjudication
     * of products and services previously rendered; or requesting authorization and
     * adjudication for provision in the future; or requesting the non-binding
     * adjudication of the listed products and services which could be provided in the
     * future.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUse
     */
    public function getUse(): null|FHIRUse
    {
        return $this->use ?? null;
    }

    /**
     * The purpose of the Claim: predetermination, preauthorization, claim.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate whether the nature of the request is: to request adjudication
     * of products and services previously rendered; or requesting authorization and
     * adjudication for provision in the future; or requesting the non-binding
     * adjudication of the listed products and services which could be provided in the
     * future.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRUseList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUse $use
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUse(null|string|FHIRUseList|FHIRUse $use,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $use) {
            unset($this->use);
            return $this;
        }
        if (!($use instanceof FHIRUse)) {
            $use = new FHIRUse(value: $use);
        }
        $this->use = $use;
        if ($this->_valueXMLLocations[self::FIELD_USE] !== $valueXMLLocation) {
            $this->_setUseValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the use element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getUseValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_USE];
    }

    /**
     * Set the location the "value" field of the use element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setUseValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_USE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party to whom the professional services and/or products have been supplied
     * or are being considered and for whom actual or forecast reimbursement is sought.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
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
     * The party to whom the professional services and/or products have been supplied
     * or are being considered and for whom actual or forecast reimbursement is sought.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $patient
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
     * The period for which charges are being submitted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod
     */
    public function getBillablePeriod(): null|FHIRPeriod
    {
        return $this->billablePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period for which charges are being submitted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $billablePeriod
     * @return static
     */
    public function setBillablePeriod(null|FHIRPeriod $billablePeriod): self
    {
        if (null === $billablePeriod) {
            unset($this->billablePeriod);
            return $this;
        }
        $this->billablePeriod = $billablePeriod;
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
     * The date this resource was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
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
     * The date this resource was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $created
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCreated(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $created) {
            unset($this->created);
            return $this;
        }
        if (!($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime(value: $created);
        }
        $this->created = $created;
        if ($this->_valueXMLLocations[self::FIELD_CREATED] !== $valueXMLLocation) {
            $this->_setCreatedValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the created element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCreatedValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CREATED];
    }

    /**
     * Set the location the "value" field of the created element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCreatedValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CREATED] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getEnterer(): null|FHIRReference
    {
        return $this->enterer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $enterer
     * @return static
     */
    public function setEnterer(null|FHIRReference $enterer): self
    {
        if (null === $enterer) {
            unset($this->enterer);
            return $this;
        }
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Insurer who is target of the request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
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
     * The Insurer who is target of the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $insurer
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the claim, predetermination or
     * preauthorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getProvider(): null|FHIRReference
    {
        return $this->provider ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the claim, predetermination or
     * preauthorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $provider
     * @return static
     */
    public function setProvider(null|FHIRReference $provider): self
    {
        if (null === $provider) {
            unset($this->provider);
            return $this;
        }
        $this->provider = $provider;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider-required urgency of processing the request. Typical values include:
     * stat, routine deferred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority(): null|FHIRCodeableConcept
    {
        return $this->priority ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider-required urgency of processing the request. Typical values include:
     * stat, routine deferred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $priority
     * @return static
     */
    public function setPriority(null|FHIRCodeableConcept $priority): self
    {
        if (null === $priority) {
            unset($this->priority);
            return $this;
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code to indicate whether and for whom funds are to be reserved for future
     * claims.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getFundsReserve(): null|FHIRCodeableConcept
    {
        return $this->fundsReserve ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code to indicate whether and for whom funds are to be reserved for future
     * claims.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $fundsReserve
     * @return static
     */
    public function setFundsReserve(null|FHIRCodeableConcept $fundsReserve): self
    {
        if (null === $fundsReserve) {
            unset($this->fundsReserve);
            return $this;
        }
        $this->fundsReserve = $fundsReserve;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Other claims which are related to this claim such as prior submissions or claims
     * for related services or for the same event.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated[]
     */
    public function getRelated(): array
    {
        return $this->related ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated>
     */
    public function getRelatedIterator(): iterable
    {
        if (!isset($this->related)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->related);
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Other claims which are related to this claim such as prior submissions or claims
     * for related services or for the same event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated $related
     * @return static
     */
    public function addRelated(FHIRClaimRelated $related): self
    {
        if (!isset($this->related)) {
            $this->related = [];
        }
        $this->related[] = $related;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Other claims which are related to this claim such as prior submissions or claims
     * for related services or for the same event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated ...$related
     * @return static
     */
    public function setRelated(FHIRClaimRelated ...$related): self
    {
        if ([] === $related) {
            unset($this->related);
            return $this;
        }
        $this->related = $related;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of pharmacy, device or vision products.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getPrescription(): null|FHIRReference
    {
        return $this->prescription ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of pharmacy, device or vision products.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $prescription
     * @return static
     */
    public function setPrescription(null|FHIRReference $prescription): self
    {
        if (null === $prescription) {
            unset($this->prescription);
            return $this;
        }
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original prescription which has been superseded by this prescription to support
     * the dispensing of pharmacy services, medications or products.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getOriginalPrescription(): null|FHIRReference
    {
        return $this->originalPrescription ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original prescription which has been superseded by this prescription to support
     * the dispensing of pharmacy services, medications or products.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $originalPrescription
     * @return static
     */
    public function setOriginalPrescription(null|FHIRReference $originalPrescription): self
    {
        if (null === $originalPrescription) {
            unset($this->originalPrescription);
            return $this;
        }
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * The party to be reimbursed for cost of the products and services according to
     * the terms of the policy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee
     */
    public function getPayee(): null|FHIRClaimPayee
    {
        return $this->payee ?? null;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * The party to be reimbursed for cost of the products and services according to
     * the terms of the policy.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee $payee
     * @return static
     */
    public function setPayee(null|FHIRClaimPayee $payee): self
    {
        if (null === $payee) {
            unset($this->payee);
            return $this;
        }
        $this->payee = $payee;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a referral resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getReferral(): null|FHIRReference
    {
        return $this->referral ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a referral resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $referral
     * @return static
     */
    public function setReferral(null|FHIRReference $referral): self
    {
        if (null === $referral) {
            unset($this->referral);
            return $this;
        }
        $this->referral = $referral;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getFacility(): null|FHIRReference
    {
        return $this->facility ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $facility
     * @return static
     */
    public function setFacility(null|FHIRReference $facility): self
    {
        if (null === $facility) {
            unset($this->facility);
            return $this;
        }
        $this->facility = $facility;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * The members of the team who provided the products and services.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam[]
     */
    public function getCareTeam(): array
    {
        return $this->careTeam ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam>
     */
    public function getCareTeamIterator(): iterable
    {
        if (!isset($this->careTeam)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->careTeam);
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * The members of the team who provided the products and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam $careTeam
     * @return static
     */
    public function addCareTeam(FHIRClaimCareTeam $careTeam): self
    {
        if (!isset($this->careTeam)) {
            $this->careTeam = [];
        }
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * The members of the team who provided the products and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam ...$careTeam
     * @return static
     */
    public function setCareTeam(FHIRClaimCareTeam ...$careTeam): self
    {
        if ([] === $careTeam) {
            unset($this->careTeam);
            return $this;
        }
        $this->careTeam = $careTeam;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSupportingInfo[]
     */
    public function getSupportingInfo(): array
    {
        return $this->supportingInfo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSupportingInfo>
     */
    public function getSupportingInfoIterator(): iterable
    {
        if (!isset($this->supportingInfo)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supportingInfo);
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSupportingInfo $supportingInfo
     * @return static
     */
    public function addSupportingInfo(FHIRClaimSupportingInfo $supportingInfo): self
    {
        if (!isset($this->supportingInfo)) {
            $this->supportingInfo = [];
        }
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSupportingInfo ...$supportingInfo
     * @return static
     */
    public function setSupportingInfo(FHIRClaimSupportingInfo ...$supportingInfo): self
    {
        if ([] === $supportingInfo) {
            unset($this->supportingInfo);
            return $this;
        }
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[]
     */
    public function getDiagnosis(): array
    {
        return $this->diagnosis ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis>
     */
    public function getDiagnosisIterator(): iterable
    {
        if (!isset($this->diagnosis)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->diagnosis);
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis $diagnosis
     * @return static
     */
    public function addDiagnosis(FHIRClaimDiagnosis $diagnosis): self
    {
        if (!isset($this->diagnosis)) {
            $this->diagnosis = [];
        }
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis ...$diagnosis
     * @return static
     */
    public function setDiagnosis(FHIRClaimDiagnosis ...$diagnosis): self
    {
        if ([] === $diagnosis) {
            unset($this->diagnosis);
            return $this;
        }
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Procedures performed on the patient relevant to the billing items with the
     * claim.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure[]
     */
    public function getProcedure(): array
    {
        return $this->procedure ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure>
     */
    public function getProcedureIterator(): iterable
    {
        if (!isset($this->procedure)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->procedure);
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Procedures performed on the patient relevant to the billing items with the
     * claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure $procedure
     * @return static
     */
    public function addProcedure(FHIRClaimProcedure $procedure): self
    {
        if (!isset($this->procedure)) {
            $this->procedure = [];
        }
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Procedures performed on the patient relevant to the billing items with the
     * claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure ...$procedure
     * @return static
     */
    public function setProcedure(FHIRClaimProcedure ...$procedure): self
    {
        if ([] === $procedure) {
            unset($this->procedure);
            return $this;
        }
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance[]
     */
    public function getInsurance(): array
    {
        return $this->insurance ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance>
     */
    public function getInsuranceIterator(): iterable
    {
        if (!isset($this->insurance)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->insurance);
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance $insurance
     * @return static
     */
    public function addInsurance(FHIRClaimInsurance $insurance): self
    {
        if (!isset($this->insurance)) {
            $this->insurance = [];
        }
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance ...$insurance
     * @return static
     */
    public function setInsurance(FHIRClaimInsurance ...$insurance): self
    {
        if ([] === $insurance) {
            unset($this->insurance);
            return $this;
        }
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Details of an accident which resulted in injuries which required the products
     * and services listed in the claim.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident
     */
    public function getAccident(): null|FHIRClaimAccident
    {
        return $this->accident ?? null;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * Details of an accident which resulted in injuries which required the products
     * and services listed in the claim.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident $accident
     * @return static
     */
    public function setAccident(null|FHIRClaimAccident $accident): self
    {
        if (null === $accident) {
            unset($this->accident);
            return $this;
        }
        $this->accident = $accident;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim line. Either a simple product or service or a 'group' of details which
     * can each be a simple items or groups of sub-details.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[]
     */
    public function getItem(): array
    {
        return $this->item ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem>
     */
    public function getItemIterator(): iterable
    {
        if (!isset($this->item)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->item);
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim line. Either a simple product or service or a 'group' of details which
     * can each be a simple items or groups of sub-details.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem $item
     * @return static
     */
    public function addItem(FHIRClaimItem $item): self
    {
        if (!isset($this->item)) {
            $this->item = [];
        }
        $this->item[] = $item;
        return $this;
    }

    /**
     * A provider issued list of professional services and products which have been
     * provided, or are to be provided, to a patient which is sent to an insurer for
     * reimbursement.
     *
     * A claim line. Either a simple product or service or a 'group' of details which
     * can each be a simple items or groups of sub-details.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem ...$item
     * @return static
     */
    public function setItem(FHIRClaimItem ...$item): self
    {
        if ([] === $item) {
            unset($this->item);
            return $this;
        }
        $this->item = $item;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total value of the all the items in the claim.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney
     */
    public function getTotal(): null|FHIRMoney
    {
        return $this->total ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total value of the all the items in the claim.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMoney $total
     * @return static
     */
    public function setTotal(null|FHIRMoney $total): self
    {
        if (null === $total) {
            unset($this->total);
            return $this;
        }
        $this->total = $total;
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCreated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProvider())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROVIDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSURANCE, $i)] = $fieldErrs;
                }
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
        if (isset($validationRules[self::FIELD_SUB_TYPE])) {
            $v = $this->getSubType();
            foreach($validationRules[self::FIELD_SUB_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUB_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_TYPE])) {
                        $errs[self::FIELD_SUB_TYPE] = [];
                    }
                    $errs[self::FIELD_SUB_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE])) {
            $v = $this->getUse();
            foreach($validationRules[self::FIELD_USE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE])) {
                        $errs[self::FIELD_USE] = [];
                    }
                    $errs[self::FIELD_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BILLABLE_PERIOD])) {
            $v = $this->getBillablePeriod();
            foreach($validationRules[self::FIELD_BILLABLE_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BILLABLE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BILLABLE_PERIOD])) {
                        $errs[self::FIELD_BILLABLE_PERIOD] = [];
                    }
                    $errs[self::FIELD_BILLABLE_PERIOD][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ENTERER])) {
            $v = $this->getEnterer();
            foreach($validationRules[self::FIELD_ENTERER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENTERER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTERER])) {
                        $errs[self::FIELD_ENTERER] = [];
                    }
                    $errs[self::FIELD_ENTERER][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PROVIDER])) {
            $v = $this->getProvider();
            foreach($validationRules[self::FIELD_PROVIDER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROVIDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROVIDER])) {
                        $errs[self::FIELD_PROVIDER] = [];
                    }
                    $errs[self::FIELD_PROVIDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FUNDS_RESERVE])) {
            $v = $this->getFundsReserve();
            foreach($validationRules[self::FIELD_FUNDS_RESERVE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FUNDS_RESERVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FUNDS_RESERVE])) {
                        $errs[self::FIELD_FUNDS_RESERVE] = [];
                    }
                    $errs[self::FIELD_FUNDS_RESERVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED])) {
            $v = $this->getRelated();
            foreach($validationRules[self::FIELD_RELATED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED])) {
                        $errs[self::FIELD_RELATED] = [];
                    }
                    $errs[self::FIELD_RELATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESCRIPTION])) {
            $v = $this->getPrescription();
            foreach($validationRules[self::FIELD_PRESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESCRIPTION])) {
                        $errs[self::FIELD_PRESCRIPTION] = [];
                    }
                    $errs[self::FIELD_PRESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIGINAL_PRESCRIPTION])) {
            $v = $this->getOriginalPrescription();
            foreach($validationRules[self::FIELD_ORIGINAL_PRESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORIGINAL_PRESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIGINAL_PRESCRIPTION])) {
                        $errs[self::FIELD_ORIGINAL_PRESCRIPTION] = [];
                    }
                    $errs[self::FIELD_ORIGINAL_PRESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYEE])) {
            $v = $this->getPayee();
            foreach($validationRules[self::FIELD_PAYEE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYEE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYEE])) {
                        $errs[self::FIELD_PAYEE] = [];
                    }
                    $errs[self::FIELD_PAYEE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERRAL])) {
            $v = $this->getReferral();
            foreach($validationRules[self::FIELD_REFERRAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERRAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERRAL])) {
                        $errs[self::FIELD_REFERRAL] = [];
                    }
                    $errs[self::FIELD_REFERRAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FACILITY])) {
            $v = $this->getFacility();
            foreach($validationRules[self::FIELD_FACILITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FACILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FACILITY])) {
                        $errs[self::FIELD_FACILITY] = [];
                    }
                    $errs[self::FIELD_FACILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CARE_TEAM])) {
            $v = $this->getCareTeam();
            foreach($validationRules[self::FIELD_CARE_TEAM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CARE_TEAM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CARE_TEAM])) {
                        $errs[self::FIELD_CARE_TEAM] = [];
                    }
                    $errs[self::FIELD_CARE_TEAM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_INFO])) {
            $v = $this->getSupportingInfo();
            foreach($validationRules[self::FIELD_SUPPORTING_INFO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUPPORTING_INFO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_INFO])) {
                        $errs[self::FIELD_SUPPORTING_INFO] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_INFO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAGNOSIS])) {
            $v = $this->getDiagnosis();
            foreach($validationRules[self::FIELD_DIAGNOSIS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DIAGNOSIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAGNOSIS])) {
                        $errs[self::FIELD_DIAGNOSIS] = [];
                    }
                    $errs[self::FIELD_DIAGNOSIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROCEDURE])) {
            $v = $this->getProcedure();
            foreach($validationRules[self::FIELD_PROCEDURE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROCEDURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCEDURE])) {
                        $errs[self::FIELD_PROCEDURE] = [];
                    }
                    $errs[self::FIELD_PROCEDURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURANCE])) {
            $v = $this->getInsurance();
            foreach($validationRules[self::FIELD_INSURANCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSURANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURANCE])) {
                        $errs[self::FIELD_INSURANCE] = [];
                    }
                    $errs[self::FIELD_INSURANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACCIDENT])) {
            $v = $this->getAccident();
            foreach($validationRules[self::FIELD_ACCIDENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACCIDENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCIDENT])) {
                        $errs[self::FIELD_ACCIDENT] = [];
                    }
                    $errs[self::FIELD_ACCIDENT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TOTAL])) {
            $v = $this->getTotal();
            foreach($validationRules[self::FIELD_TOTAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TOTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOTAL])) {
                        $errs[self::FIELD_TOTAL] = [];
                    }
                    $errs[self::FIELD_TOTAL][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRClaim $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRClaim
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaim)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
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
                $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUB_TYPE === $cen) {
                $type->setSubType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USE === $cen) {
                $type->setUse(FHIRUse::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BILLABLE_PERIOD === $cen) {
                $type->setBillablePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CREATED === $cen) {
                $type->setCreated(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENTERER === $cen) {
                $type->setEnterer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INSURER === $cen) {
                $type->setInsurer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROVIDER === $cen) {
                $type->setProvider(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRIORITY === $cen) {
                $type->setPriority(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FUNDS_RESERVE === $cen) {
                $type->setFundsReserve(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATED === $cen) {
                $type->addRelated(FHIRClaimRelated::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESCRIPTION === $cen) {
                $type->setPrescription(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORIGINAL_PRESCRIPTION === $cen) {
                $type->setOriginalPrescription(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAYEE === $cen) {
                $type->setPayee(FHIRClaimPayee::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERRAL === $cen) {
                $type->setReferral(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FACILITY === $cen) {
                $type->setFacility(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CARE_TEAM === $cen) {
                $type->addCareTeam(FHIRClaimCareTeam::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUPPORTING_INFO === $cen) {
                $type->addSupportingInfo(FHIRClaimSupportingInfo::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DIAGNOSIS === $cen) {
                $type->addDiagnosis(FHIRClaimDiagnosis::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROCEDURE === $cen) {
                $type->addProcedure(FHIRClaimProcedure::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INSURANCE === $cen) {
                $type->addInsurance(FHIRClaimInsurance::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACCIDENT === $cen) {
                $type->setAccident(FHIRClaimAccident::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ITEM === $cen) {
                $type->addItem(FHIRClaimItem::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TOTAL === $cen) {
                $type->setTotal(FHIRMoney::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
                $type->_setStatusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_USE])) {
            if (isset($type->use)) {
                $type->use->setValue((string)$attributes[self::FIELD_USE]);
                $type->_setUseValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setUse((string)$attributes[self::FIELD_USE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CREATED])) {
            if (isset($type->created)) {
                $type->created->setValue((string)$attributes[self::FIELD_CREATED]);
                $type->_setCreatedValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCreated((string)$attributes[self::FIELD_CREATED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Claim', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->use) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_USE]) {
            $xw->writeAttribute(self::FIELD_USE, $this->use->_getFormattedValue());
        }
        if (isset($this->created) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CREATED]) {
            $xw->writeAttribute(self::FIELD_CREATED, $this->created->_getFormattedValue());
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
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subType)) {
            $xw->startElement(self::FIELD_SUB_TYPE);
            $this->subType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->use)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_USE]
                || $this->use->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_USE);
            $this->use->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_USE]);
            $xw->endElement();
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->billablePeriod)) {
            $xw->startElement(self::FIELD_BILLABLE_PERIOD);
            $this->billablePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->created)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CREATED]
                || $this->created->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CREATED);
            $this->created->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CREATED]);
            $xw->endElement();
        }
        if (isset($this->enterer)) {
            $xw->startElement(self::FIELD_ENTERER);
            $this->enterer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->insurer)) {
            $xw->startElement(self::FIELD_INSURER);
            $this->insurer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->provider)) {
            $xw->startElement(self::FIELD_PROVIDER);
            $this->provider->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->priority)) {
            $xw->startElement(self::FIELD_PRIORITY);
            $this->priority->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fundsReserve)) {
            $xw->startElement(self::FIELD_FUNDS_RESERVE);
            $this->fundsReserve->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->related)) {
            foreach ($this->related as $v) {
                $xw->startElement(self::FIELD_RELATED);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->prescription)) {
            $xw->startElement(self::FIELD_PRESCRIPTION);
            $this->prescription->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->originalPrescription)) {
            $xw->startElement(self::FIELD_ORIGINAL_PRESCRIPTION);
            $this->originalPrescription->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->payee)) {
            $xw->startElement(self::FIELD_PAYEE);
            $this->payee->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->referral)) {
            $xw->startElement(self::FIELD_REFERRAL);
            $this->referral->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->facility)) {
            $xw->startElement(self::FIELD_FACILITY);
            $this->facility->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->careTeam)) {
            foreach ($this->careTeam as $v) {
                $xw->startElement(self::FIELD_CARE_TEAM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->supportingInfo)) {
            foreach ($this->supportingInfo as $v) {
                $xw->startElement(self::FIELD_SUPPORTING_INFO);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->diagnosis)) {
            foreach ($this->diagnosis as $v) {
                $xw->startElement(self::FIELD_DIAGNOSIS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->procedure)) {
            foreach ($this->procedure as $v) {
                $xw->startElement(self::FIELD_PROCEDURE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->insurance)) {
            foreach ($this->insurance as $v) {
                $xw->startElement(self::FIELD_INSURANCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->accident)) {
            $xw->startElement(self::FIELD_ACCIDENT);
            $this->accident->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->item)) {
            foreach ($this->item as $v) {
                $xw->startElement(self::FIELD_ITEM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->total)) {
            $xw->startElement(self::FIELD_TOTAL);
            $this->total->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRClaim $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRClaim
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaim)) {
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
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRFinancialResourceStatusCodes::jsonUnserialize(
                (is_array($value) ? $value : [FHIRFinancialResourceStatusCodes::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $type->setType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_TYPE], $config));
        }
        if (isset($json[self::FIELD_SUB_TYPE]) || array_key_exists(self::FIELD_SUB_TYPE, $json)) {
            $type->setSubType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_SUB_TYPE], $config));
        }
        if (isset($json[self::FIELD_USE])
            || isset($json[self::FIELD_USE_EXT])
            || array_key_exists(self::FIELD_USE, $json)
            || array_key_exists(self::FIELD_USE_EXT, $json)) {
            $value = $json[self::FIELD_USE] ?? null;
            $type->setUse(FHIRUse::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUse::FIELD_VALUE => $value]) + ($json[self::FIELD_USE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PATIENT]) || array_key_exists(self::FIELD_PATIENT, $json)) {
            $type->setPatient(FHIRReference::jsonUnserialize($json[self::FIELD_PATIENT], $config));
        }
        if (isset($json[self::FIELD_BILLABLE_PERIOD]) || array_key_exists(self::FIELD_BILLABLE_PERIOD, $json)) {
            $type->setBillablePeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_BILLABLE_PERIOD], $config));
        }
        if (isset($json[self::FIELD_CREATED])
            || isset($json[self::FIELD_CREATED_EXT])
            || array_key_exists(self::FIELD_CREATED, $json)
            || array_key_exists(self::FIELD_CREATED_EXT, $json)) {
            $value = $json[self::FIELD_CREATED] ?? null;
            $type->setCreated(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_CREATED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ENTERER]) || array_key_exists(self::FIELD_ENTERER, $json)) {
            $type->setEnterer(FHIRReference::jsonUnserialize($json[self::FIELD_ENTERER], $config));
        }
        if (isset($json[self::FIELD_INSURER]) || array_key_exists(self::FIELD_INSURER, $json)) {
            $type->setInsurer(FHIRReference::jsonUnserialize($json[self::FIELD_INSURER], $config));
        }
        if (isset($json[self::FIELD_PROVIDER]) || array_key_exists(self::FIELD_PROVIDER, $json)) {
            $type->setProvider(FHIRReference::jsonUnserialize($json[self::FIELD_PROVIDER], $config));
        }
        if (isset($json[self::FIELD_PRIORITY]) || array_key_exists(self::FIELD_PRIORITY, $json)) {
            $type->setPriority(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_PRIORITY], $config));
        }
        if (isset($json[self::FIELD_FUNDS_RESERVE]) || array_key_exists(self::FIELD_FUNDS_RESERVE, $json)) {
            $type->setFundsReserve(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_FUNDS_RESERVE], $config));
        }
        if (isset($json[self::FIELD_RELATED]) || array_key_exists(self::FIELD_RELATED, $json)) {
            $vs = $json[self::FIELD_RELATED];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addRelated(FHIRClaimRelated::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PRESCRIPTION]) || array_key_exists(self::FIELD_PRESCRIPTION, $json)) {
            $type->setPrescription(FHIRReference::jsonUnserialize($json[self::FIELD_PRESCRIPTION], $config));
        }
        if (isset($json[self::FIELD_ORIGINAL_PRESCRIPTION]) || array_key_exists(self::FIELD_ORIGINAL_PRESCRIPTION, $json)) {
            $type->setOriginalPrescription(FHIRReference::jsonUnserialize($json[self::FIELD_ORIGINAL_PRESCRIPTION], $config));
        }
        if (isset($json[self::FIELD_PAYEE]) || array_key_exists(self::FIELD_PAYEE, $json)) {
            $type->setPayee(FHIRClaimPayee::jsonUnserialize($json[self::FIELD_PAYEE], $config));
        }
        if (isset($json[self::FIELD_REFERRAL]) || array_key_exists(self::FIELD_REFERRAL, $json)) {
            $type->setReferral(FHIRReference::jsonUnserialize($json[self::FIELD_REFERRAL], $config));
        }
        if (isset($json[self::FIELD_FACILITY]) || array_key_exists(self::FIELD_FACILITY, $json)) {
            $type->setFacility(FHIRReference::jsonUnserialize($json[self::FIELD_FACILITY], $config));
        }
        if (isset($json[self::FIELD_CARE_TEAM]) || array_key_exists(self::FIELD_CARE_TEAM, $json)) {
            $vs = $json[self::FIELD_CARE_TEAM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCareTeam(FHIRClaimCareTeam::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SUPPORTING_INFO]) || array_key_exists(self::FIELD_SUPPORTING_INFO, $json)) {
            $vs = $json[self::FIELD_SUPPORTING_INFO];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSupportingInfo(FHIRClaimSupportingInfo::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_DIAGNOSIS]) || array_key_exists(self::FIELD_DIAGNOSIS, $json)) {
            $vs = $json[self::FIELD_DIAGNOSIS];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDiagnosis(FHIRClaimDiagnosis::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PROCEDURE]) || array_key_exists(self::FIELD_PROCEDURE, $json)) {
            $vs = $json[self::FIELD_PROCEDURE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProcedure(FHIRClaimProcedure::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_INSURANCE]) || array_key_exists(self::FIELD_INSURANCE, $json)) {
            $vs = $json[self::FIELD_INSURANCE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addInsurance(FHIRClaimInsurance::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ACCIDENT]) || array_key_exists(self::FIELD_ACCIDENT, $json)) {
            $type->setAccident(FHIRClaimAccident::jsonUnserialize($json[self::FIELD_ACCIDENT], $config));
        }
        if (isset($json[self::FIELD_ITEM]) || array_key_exists(self::FIELD_ITEM, $json)) {
            $vs = $json[self::FIELD_ITEM];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addItem(FHIRClaimItem::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_TOTAL]) || array_key_exists(self::FIELD_TOTAL, $json)) {
            $type->setTotal(FHIRMoney::jsonUnserialize($json[self::FIELD_TOTAL], $config));
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
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
                $out->_status = $ext;
            }
        }
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->subType)) {
            $out->subType = $this->subType;
        }
        if (isset($this->use)) {
            if (null !== ($val = $this->use->getValue())) {
                $out->use = $val;
            }
            if ($this->use->_nonValueFieldDefined()) {
                $ext = $this->use->jsonSerialize();
                unset($ext->value);
                $out->_use = $ext;
            }
        }
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->billablePeriod)) {
            $out->billablePeriod = $this->billablePeriod;
        }
        if (isset($this->created)) {
            if (null !== ($val = $this->created->getValue())) {
                $out->created = $val;
            }
            if ($this->created->_nonValueFieldDefined()) {
                $ext = $this->created->jsonSerialize();
                unset($ext->value);
                $out->_created = $ext;
            }
        }
        if (isset($this->enterer)) {
            $out->enterer = $this->enterer;
        }
        if (isset($this->insurer)) {
            $out->insurer = $this->insurer;
        }
        if (isset($this->provider)) {
            $out->provider = $this->provider;
        }
        if (isset($this->priority)) {
            $out->priority = $this->priority;
        }
        if (isset($this->fundsReserve)) {
            $out->fundsReserve = $this->fundsReserve;
        }
        if (isset($this->related) && [] !== $this->related) {
            $out->related = $this->related;
        }
        if (isset($this->prescription)) {
            $out->prescription = $this->prescription;
        }
        if (isset($this->originalPrescription)) {
            $out->originalPrescription = $this->originalPrescription;
        }
        if (isset($this->payee)) {
            $out->payee = $this->payee;
        }
        if (isset($this->referral)) {
            $out->referral = $this->referral;
        }
        if (isset($this->facility)) {
            $out->facility = $this->facility;
        }
        if (isset($this->careTeam) && [] !== $this->careTeam) {
            $out->careTeam = $this->careTeam;
        }
        if (isset($this->supportingInfo) && [] !== $this->supportingInfo) {
            $out->supportingInfo = $this->supportingInfo;
        }
        if (isset($this->diagnosis) && [] !== $this->diagnosis) {
            $out->diagnosis = $this->diagnosis;
        }
        if (isset($this->procedure) && [] !== $this->procedure) {
            $out->procedure = $this->procedure;
        }
        if (isset($this->insurance) && [] !== $this->insurance) {
            $out->insurance = $this->insurance;
        }
        if (isset($this->accident)) {
            $out->accident = $this->accident;
        }
        if (isset($this->item) && [] !== $this->item) {
            $out->item = $this->item;
        }
        if (isset($this->total)) {
            $out->total = $this->total;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}