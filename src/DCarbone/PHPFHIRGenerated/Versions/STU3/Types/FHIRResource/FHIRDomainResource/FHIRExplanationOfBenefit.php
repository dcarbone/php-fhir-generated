<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 00:09+0000
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
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRExplanationOfBenefitStatusList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExplanationOfBenefitStatus;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypeMap;

/**
 * This resource provides: the claim details; adjudication details from the
 * processing of a Claim; and optionally account balance information, for informing
 * the subscriber of the benefits provided.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRExplanationOfBenefit extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT;

    /* class_default.php:50 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_TYPE = 'type';
    public const FIELD_SUB_TYPE = 'subType';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_BILLABLE_PERIOD = 'billablePeriod';
    public const FIELD_CREATED = 'created';
    public const FIELD_CREATED_EXT = '_created';
    public const FIELD_ENTERER = 'enterer';
    public const FIELD_INSURER = 'insurer';
    public const FIELD_PROVIDER = 'provider';
    public const FIELD_ORGANIZATION = 'organization';
    public const FIELD_REFERRAL = 'referral';
    public const FIELD_FACILITY = 'facility';
    public const FIELD_CLAIM = 'claim';
    public const FIELD_CLAIM_RESPONSE = 'claimResponse';
    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_DISPOSITION = 'disposition';
    public const FIELD_DISPOSITION_EXT = '_disposition';
    public const FIELD_RELATED = 'related';
    public const FIELD_PRESCRIPTION = 'prescription';
    public const FIELD_ORIGINAL_PRESCRIPTION = 'originalPrescription';
    public const FIELD_PAYEE = 'payee';
    public const FIELD_INFORMATION = 'information';
    public const FIELD_CARE_TEAM = 'careTeam';
    public const FIELD_DIAGNOSIS = 'diagnosis';
    public const FIELD_PROCEDURE = 'procedure';
    public const FIELD_PRECEDENCE = 'precedence';
    public const FIELD_PRECEDENCE_EXT = '_precedence';
    public const FIELD_INSURANCE = 'insurance';
    public const FIELD_ACCIDENT = 'accident';
    public const FIELD_EMPLOYMENT_IMPACTED = 'employmentImpacted';
    public const FIELD_HOSPITALIZATION = 'hospitalization';
    public const FIELD_ITEM = 'item';
    public const FIELD_ADD_ITEM = 'addItem';
    public const FIELD_TOTAL_COST = 'totalCost';
    public const FIELD_UNALLOC_DEDUCTABLE = 'unallocDeductable';
    public const FIELD_TOTAL_BENEFIT = 'totalBenefit';
    public const FIELD_PAYMENT = 'payment';
    public const FIELD_FORM = 'form';
    public const FIELD_PROCESS_NOTE = 'processNote';
    public const FIELD_BENEFIT_BALANCE = 'benefitBalance';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CREATED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DISPOSITION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PRECEDENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The EOB Business Identifier.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExplanationOfBenefitStatus 
     */
    protected FHIRExplanationOfBenefitStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim subtype codes which may convey Inpatient vs
     * Outpatient and/or a specialty service. In the US the BillType.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $subType;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The billable period for which charges are being submitted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
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
     * The date when the EOB was created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $created;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who created the explanation of benefit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $enterer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The insurer which is responsible for the explanation of benefit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $insurer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $provider;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $organization;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral resource which lists the date, practitioner, reason and other
     * supporting information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $referral;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $facility;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $claim;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $claimResponse;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Processing outcome errror, partial or complete processing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $outcome;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $disposition;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Other claims which are related to this claim such as prior claim versions or for
     * related services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[] 
     */
    protected array $related;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $prescription;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original prescription which has been superceded by this prescription to support
     * the dispensing of pharmacy services, medications or products. For example, a
     * physician may prescribe a medication which the pharmacy determines is
     * contraindicated, or for which the patient has an intolerance, and therefor
     * issues a new precription for an alternate medication which has the same
     * theraputic intent. The prescription from the pharmacy becomes the 'prescription'
     * and that from the physician becomes the 'original prescription'.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $originalPrescription;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The party to be reimbursed for the services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee 
     */
    protected FHIRExplanationOfBenefitPayee $payee;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues. Often there are mutiple
     * jurisdiction specific valuesets which are required.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation[] 
     */
    protected array $information;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The members of the team who provided the overall service as well as their role
     * and whether responsible and qualifications.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[] 
     */
    protected array $careTeam;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[] 
     */
    protected array $diagnosis;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Ordered list of patient procedures performed to support the adjudication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[] 
     */
    protected array $procedure;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Precedence (primary, secondary, etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $precedence;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Financial instrument by which payment information for health care.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance 
     */
    protected FHIRExplanationOfBenefitInsurance $insurance;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * An accident which resulted in the need for healthcare services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident 
     */
    protected FHIRExplanationOfBenefitAccident $accident;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was precluded from working
     * due to the treatable condition(s).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $employmentImpacted;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was confined to a treatment
     * center.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $hospitalization;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * First tier of goods and services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[] 
     */
    protected array $item;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The first tier service adjudications for payor added services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[] 
     */
    protected array $addItem;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total cost of the services reported.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $totalCost;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of deductable applied which was not allocated to any particular
     * service line.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $unallocDeductable;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductable).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney 
     */
    protected FHIRMoney $totalBenefit;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Payment details for the claim if the claim has been paid.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment 
     */
    protected FHIRExplanationOfBenefitPayment $payment;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $form;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Note text.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[] 
     */
    protected array $processNote;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Balance by Benefit Category.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[] 
     */
    protected array $benefitBalance;

    /* constructor.php:61 */
    /**
     * FHIRExplanationOfBenefit Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRExplanationOfBenefitStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExplanationOfBenefitStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $subType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $billablePeriod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $created
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $enterer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $insurer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $provider
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $organization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $referral
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $facility
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $claim
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $claimResponse
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $outcome
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $disposition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[] $related
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $prescription
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $originalPrescription
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee $payee
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation[] $information
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[] $careTeam
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[] $diagnosis
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[] $procedure
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $precedence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance $insurance
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident $accident
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $employmentImpacted
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $hospitalization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[] $item
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[] $addItem
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $totalCost
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $unallocDeductable
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $totalBenefit
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment $payment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $form
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[] $processNote
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[] $benefitBalance
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
                                null|string|FHIRExplanationOfBenefitStatusList|FHIRExplanationOfBenefitStatus $status = null,
                                null|FHIRCodeableConcept $type = null,
                                null|iterable $subType = null,
                                null|FHIRReference $patient = null,
                                null|FHIRPeriod $billablePeriod = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null,
                                null|FHIRReference $enterer = null,
                                null|FHIRReference $insurer = null,
                                null|FHIRReference $provider = null,
                                null|FHIRReference $organization = null,
                                null|FHIRReference $referral = null,
                                null|FHIRReference $facility = null,
                                null|FHIRReference $claim = null,
                                null|FHIRReference $claimResponse = null,
                                null|FHIRCodeableConcept $outcome = null,
                                null|string|FHIRStringPrimitive|FHIRString $disposition = null,
                                null|iterable $related = null,
                                null|FHIRReference $prescription = null,
                                null|FHIRReference $originalPrescription = null,
                                null|FHIRExplanationOfBenefitPayee $payee = null,
                                null|iterable $information = null,
                                null|iterable $careTeam = null,
                                null|iterable $diagnosis = null,
                                null|iterable $procedure = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $precedence = null,
                                null|FHIRExplanationOfBenefitInsurance $insurance = null,
                                null|FHIRExplanationOfBenefitAccident $accident = null,
                                null|FHIRPeriod $employmentImpacted = null,
                                null|FHIRPeriod $hospitalization = null,
                                null|iterable $item = null,
                                null|iterable $addItem = null,
                                null|FHIRMoney $totalCost = null,
                                null|FHIRMoney $unallocDeductable = null,
                                null|FHIRMoney $totalBenefit = null,
                                null|FHIRExplanationOfBenefitPayment $payment = null,
                                null|FHIRCodeableConcept $form = null,
                                null|iterable $processNote = null,
                                null|iterable $benefitBalance = null,
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
            $this->setSubType(...$subType);
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
        if (null !== $organization) {
            $this->setOrganization($organization);
        }
        if (null !== $referral) {
            $this->setReferral($referral);
        }
        if (null !== $facility) {
            $this->setFacility($facility);
        }
        if (null !== $claim) {
            $this->setClaim($claim);
        }
        if (null !== $claimResponse) {
            $this->setClaimResponse($claimResponse);
        }
        if (null !== $outcome) {
            $this->setOutcome($outcome);
        }
        if (null !== $disposition) {
            $this->setDisposition($disposition);
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
        if (null !== $information) {
            $this->setInformation(...$information);
        }
        if (null !== $careTeam) {
            $this->setCareTeam(...$careTeam);
        }
        if (null !== $diagnosis) {
            $this->setDiagnosis(...$diagnosis);
        }
        if (null !== $procedure) {
            $this->setProcedure(...$procedure);
        }
        if (null !== $precedence) {
            $this->setPrecedence($precedence);
        }
        if (null !== $insurance) {
            $this->setInsurance($insurance);
        }
        if (null !== $accident) {
            $this->setAccident($accident);
        }
        if (null !== $employmentImpacted) {
            $this->setEmploymentImpacted($employmentImpacted);
        }
        if (null !== $hospitalization) {
            $this->setHospitalization($hospitalization);
        }
        if (null !== $item) {
            $this->setItem(...$item);
        }
        if (null !== $addItem) {
            $this->setAddItem(...$addItem);
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
        if (null !== $payment) {
            $this->setPayment($payment);
        }
        if (null !== $form) {
            $this->setForm($form);
        }
        if (null !== $processNote) {
            $this->setProcessNote(...$processNote);
        }
        if (null !== $benefitBalance) {
            $this->setBenefitBalance(...$benefitBalance);
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
     * The EOB Business Identifier.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier>
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
     * The EOB Business Identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
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
     * The EOB Business Identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier ...$identifier
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExplanationOfBenefitStatus
     */
    public function getStatus(): null|FHIRExplanationOfBenefitStatus
    {
        return $this->status ?? null;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRExplanationOfBenefitStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExplanationOfBenefitStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRExplanationOfBenefitStatusList|FHIRExplanationOfBenefitStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRExplanationOfBenefitStatus)) {
            $status = new FHIRExplanationOfBenefitStatus(value: $status);
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
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
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
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $type
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
     * A finer grained suite of claim subtype codes which may convey Inpatient vs
     * Outpatient and/or a specialty service. In the US the BillType.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubType(): array
    {
        return $this->subType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getSubTypeIterator(): iterable
    {
        if (!isset($this->subType)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->subType);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim subtype codes which may convey Inpatient vs
     * Outpatient and/or a specialty service. In the US the BillType.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $subType
     * @return static
     */
    public function addSubType(FHIRCodeableConcept $subType): self
    {
        if (!isset($this->subType)) {
            $this->subType = [];
        }
        $this->subType[] = $subType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim subtype codes which may convey Inpatient vs
     * Outpatient and/or a specialty service. In the US the BillType.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$subType
     * @return static
     */
    public function setSubType(FHIRCodeableConcept ...$subType): self
    {
        if ([] === $subType) {
            unset($this->subType);
            return $this;
        }
        $this->subType = $subType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Resource.
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
     * Patient Resource.
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
     * The billable period for which charges are being submitted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
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
     * The billable period for which charges are being submitted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $billablePeriod
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
     * The date when the EOB was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
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
     * The date when the EOB was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $created
     * @return static
     */
    public function setCreated(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created): self
    {
        if (null === $created) {
            unset($this->created);
            return $this;
        }
        if (!($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime(value: $created);
        }
        $this->created = $created;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who created the explanation of benefit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * The person who created the explanation of benefit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $enterer
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
     * The insurer which is responsible for the explanation of benefit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * The insurer which is responsible for the explanation of benefit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $insurer
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
     * The provider which is responsible for the claim.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * The provider which is responsible for the claim.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $provider
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the claim.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * The provider which is responsible for the claim.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $organization
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
     * The referral resource which lists the date, practitioner, reason and other
     * supporting information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * The referral resource which lists the date, practitioner, reason and other
     * supporting information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $referral
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $facility
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getClaim(): null|FHIRReference
    {
        return $this->claim ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $claim
     * @return static
     */
    public function setClaim(null|FHIRReference $claim): self
    {
        if (null === $claim) {
            unset($this->claim);
            return $this;
        }
        $this->claim = $claim;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getClaimResponse(): null|FHIRReference
    {
        return $this->claimResponse ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $claimResponse
     * @return static
     */
    public function setClaimResponse(null|FHIRReference $claimResponse): self
    {
        if (null === $claimResponse) {
            unset($this->claimResponse);
            return $this;
        }
        $this->claimResponse = $claimResponse;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Processing outcome errror, partial or complete processing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome(): null|FHIRCodeableConcept
    {
        return $this->outcome ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Processing outcome errror, partial or complete processing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $outcome
     * @return static
     */
    public function setOutcome(null|FHIRCodeableConcept $outcome): self
    {
        if (null === $outcome) {
            unset($this->outcome);
            return $this;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $disposition
     * @return static
     */
    public function setDisposition(null|string|FHIRStringPrimitive|FHIRString $disposition): self
    {
        if (null === $disposition) {
            unset($this->disposition);
            return $this;
        }
        if (!($disposition instanceof FHIRString)) {
            $disposition = new FHIRString(value: $disposition);
        }
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Other claims which are related to this claim such as prior claim versions or for
     * related services.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[]
     */
    public function getRelated(): array
    {
        return $this->related ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated>
     */
    public function getRelatedIterator(): iterable
    {
        if (!isset($this->related)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->related);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Other claims which are related to this claim such as prior claim versions or for
     * related services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated $related
     * @return static
     */
    public function addRelated(FHIRExplanationOfBenefitRelated $related): self
    {
        if (!isset($this->related)) {
            $this->related = [];
        }
        $this->related[] = $related;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Other claims which are related to this claim such as prior claim versions or for
     * related services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated ...$related
     * @return static
     */
    public function setRelated(FHIRExplanationOfBenefitRelated ...$related): self
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
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $prescription
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
     * Original prescription which has been superceded by this prescription to support
     * the dispensing of pharmacy services, medications or products. For example, a
     * physician may prescribe a medication which the pharmacy determines is
     * contraindicated, or for which the patient has an intolerance, and therefor
     * issues a new precription for an alternate medication which has the same
     * theraputic intent. The prescription from the pharmacy becomes the 'prescription'
     * and that from the physician becomes the 'original prescription'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
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
     * Original prescription which has been superceded by this prescription to support
     * the dispensing of pharmacy services, medications or products. For example, a
     * physician may prescribe a medication which the pharmacy determines is
     * contraindicated, or for which the patient has an intolerance, and therefor
     * issues a new precription for an alternate medication which has the same
     * theraputic intent. The prescription from the pharmacy becomes the 'prescription'
     * and that from the physician becomes the 'original prescription'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $originalPrescription
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
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The party to be reimbursed for the services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee
     */
    public function getPayee(): null|FHIRExplanationOfBenefitPayee
    {
        return $this->payee ?? null;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The party to be reimbursed for the services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee $payee
     * @return static
     */
    public function setPayee(null|FHIRExplanationOfBenefitPayee $payee): self
    {
        if (null === $payee) {
            unset($this->payee);
            return $this;
        }
        $this->payee = $payee;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues. Often there are mutiple
     * jurisdiction specific valuesets which are required.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation[]
     */
    public function getInformation(): array
    {
        return $this->information ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation>
     */
    public function getInformationIterator(): iterable
    {
        if (!isset($this->information)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->information);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues. Often there are mutiple
     * jurisdiction specific valuesets which are required.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation $information
     * @return static
     */
    public function addInformation(FHIRExplanationOfBenefitInformation $information): self
    {
        if (!isset($this->information)) {
            $this->information = [];
        }
        $this->information[] = $information;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues. Often there are mutiple
     * jurisdiction specific valuesets which are required.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation ...$information
     * @return static
     */
    public function setInformation(FHIRExplanationOfBenefitInformation ...$information): self
    {
        if ([] === $information) {
            unset($this->information);
            return $this;
        }
        $this->information = $information;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The members of the team who provided the overall service as well as their role
     * and whether responsible and qualifications.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[]
     */
    public function getCareTeam(): array
    {
        return $this->careTeam ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam>
     */
    public function getCareTeamIterator(): iterable
    {
        if (!isset($this->careTeam)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->careTeam);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The members of the team who provided the overall service as well as their role
     * and whether responsible and qualifications.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam $careTeam
     * @return static
     */
    public function addCareTeam(FHIRExplanationOfBenefitCareTeam $careTeam): self
    {
        if (!isset($this->careTeam)) {
            $this->careTeam = [];
        }
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The members of the team who provided the overall service as well as their role
     * and whether responsible and qualifications.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam ...$careTeam
     * @return static
     */
    public function setCareTeam(FHIRExplanationOfBenefitCareTeam ...$careTeam): self
    {
        if ([] === $careTeam) {
            unset($this->careTeam);
            return $this;
        }
        $this->careTeam = $careTeam;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[]
     */
    public function getDiagnosis(): array
    {
        return $this->diagnosis ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis>
     */
    public function getDiagnosisIterator(): iterable
    {
        if (!isset($this->diagnosis)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->diagnosis);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis $diagnosis
     * @return static
     */
    public function addDiagnosis(FHIRExplanationOfBenefitDiagnosis $diagnosis): self
    {
        if (!isset($this->diagnosis)) {
            $this->diagnosis = [];
        }
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis ...$diagnosis
     * @return static
     */
    public function setDiagnosis(FHIRExplanationOfBenefitDiagnosis ...$diagnosis): self
    {
        if ([] === $diagnosis) {
            unset($this->diagnosis);
            return $this;
        }
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Ordered list of patient procedures performed to support the adjudication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[]
     */
    public function getProcedure(): array
    {
        return $this->procedure ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure>
     */
    public function getProcedureIterator(): iterable
    {
        if (!isset($this->procedure)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->procedure);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Ordered list of patient procedures performed to support the adjudication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure $procedure
     * @return static
     */
    public function addProcedure(FHIRExplanationOfBenefitProcedure $procedure): self
    {
        if (!isset($this->procedure)) {
            $this->procedure = [];
        }
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Ordered list of patient procedures performed to support the adjudication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure ...$procedure
     * @return static
     */
    public function setProcedure(FHIRExplanationOfBenefitProcedure ...$procedure): self
    {
        if ([] === $procedure) {
            unset($this->procedure);
            return $this;
        }
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Precedence (primary, secondary, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt
     */
    public function getPrecedence(): null|FHIRPositiveInt
    {
        return $this->precedence ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Precedence (primary, secondary, etc.).
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $precedence
     * @return static
     */
    public function setPrecedence(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $precedence): self
    {
        if (null === $precedence) {
            unset($this->precedence);
            return $this;
        }
        if (!($precedence instanceof FHIRPositiveInt)) {
            $precedence = new FHIRPositiveInt(value: $precedence);
        }
        $this->precedence = $precedence;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Financial instrument by which payment information for health care.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance
     */
    public function getInsurance(): null|FHIRExplanationOfBenefitInsurance
    {
        return $this->insurance ?? null;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance $insurance
     * @return static
     */
    public function setInsurance(null|FHIRExplanationOfBenefitInsurance $insurance): self
    {
        if (null === $insurance) {
            unset($this->insurance);
            return $this;
        }
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * An accident which resulted in the need for healthcare services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident
     */
    public function getAccident(): null|FHIRExplanationOfBenefitAccident
    {
        return $this->accident ?? null;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * An accident which resulted in the need for healthcare services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident $accident
     * @return static
     */
    public function setAccident(null|FHIRExplanationOfBenefitAccident $accident): self
    {
        if (null === $accident) {
            unset($this->accident);
            return $this;
        }
        $this->accident = $accident;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was precluded from working
     * due to the treatable condition(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getEmploymentImpacted(): null|FHIRPeriod
    {
        return $this->employmentImpacted ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was precluded from working
     * due to the treatable condition(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $employmentImpacted
     * @return static
     */
    public function setEmploymentImpacted(null|FHIRPeriod $employmentImpacted): self
    {
        if (null === $employmentImpacted) {
            unset($this->employmentImpacted);
            return $this;
        }
        $this->employmentImpacted = $employmentImpacted;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was confined to a treatment
     * center.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod
     */
    public function getHospitalization(): null|FHIRPeriod
    {
        return $this->hospitalization ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was confined to a treatment
     * center.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod $hospitalization
     * @return static
     */
    public function setHospitalization(null|FHIRPeriod $hospitalization): self
    {
        if (null === $hospitalization) {
            unset($this->hospitalization);
            return $this;
        }
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * First tier of goods and services.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[]
     */
    public function getItem(): array
    {
        return $this->item ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem>
     */
    public function getItemIterator(): iterable
    {
        if (!isset($this->item)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->item);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * First tier of goods and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem $item
     * @return static
     */
    public function addItem(FHIRExplanationOfBenefitItem $item): self
    {
        if (!isset($this->item)) {
            $this->item = [];
        }
        $this->item[] = $item;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * First tier of goods and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem ...$item
     * @return static
     */
    public function setItem(FHIRExplanationOfBenefitItem ...$item): self
    {
        if ([] === $item) {
            unset($this->item);
            return $this;
        }
        $this->item = $item;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The first tier service adjudications for payor added services.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[]
     */
    public function getAddItem(): array
    {
        return $this->addItem ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem>
     */
    public function getAddItemIterator(): iterable
    {
        if (!isset($this->addItem)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->addItem);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The first tier service adjudications for payor added services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem $addItem
     * @return static
     */
    public function addAddItem(FHIRExplanationOfBenefitAddItem $addItem): self
    {
        if (!isset($this->addItem)) {
            $this->addItem = [];
        }
        $this->addItem[] = $addItem;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The first tier service adjudications for payor added services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem ...$addItem
     * @return static
     */
    public function setAddItem(FHIRExplanationOfBenefitAddItem ...$addItem): self
    {
        if ([] === $addItem) {
            unset($this->addItem);
            return $this;
        }
        $this->addItem = $addItem;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total cost of the services reported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalCost(): null|FHIRMoney
    {
        return $this->totalCost ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total cost of the services reported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $totalCost
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
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of deductable applied which was not allocated to any particular
     * service line.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnallocDeductable(): null|FHIRMoney
    {
        return $this->unallocDeductable ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of deductable applied which was not allocated to any particular
     * service line.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $unallocDeductable
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
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductable).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalBenefit(): null|FHIRMoney
    {
        return $this->totalBenefit ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductable).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney $totalBenefit
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
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Payment details for the claim if the claim has been paid.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment
     */
    public function getPayment(): null|FHIRExplanationOfBenefitPayment
    {
        return $this->payment ?? null;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Payment details for the claim if the claim has been paid.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment $payment
     * @return static
     */
    public function setPayment(null|FHIRExplanationOfBenefitPayment $payment): self
    {
        if (null === $payment) {
            unset($this->payment);
            return $this;
        }
        $this->payment = $payment;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getForm(): null|FHIRCodeableConcept
    {
        return $this->form ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $form
     * @return static
     */
    public function setForm(null|FHIRCodeableConcept $form): self
    {
        if (null === $form) {
            unset($this->form);
            return $this;
        }
        $this->form = $form;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Note text.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[]
     */
    public function getProcessNote(): array
    {
        return $this->processNote ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote>
     */
    public function getProcessNoteIterator(): iterable
    {
        if (!isset($this->processNote)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->processNote);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Note text.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote $processNote
     * @return static
     */
    public function addProcessNote(FHIRExplanationOfBenefitProcessNote $processNote): self
    {
        if (!isset($this->processNote)) {
            $this->processNote = [];
        }
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Note text.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote ...$processNote
     * @return static
     */
    public function setProcessNote(FHIRExplanationOfBenefitProcessNote ...$processNote): self
    {
        if ([] === $processNote) {
            unset($this->processNote);
            return $this;
        }
        $this->processNote = $processNote;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Balance by Benefit Category.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[]
     */
    public function getBenefitBalance(): array
    {
        return $this->benefitBalance ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance>
     */
    public function getBenefitBalanceIterator(): iterable
    {
        if (!isset($this->benefitBalance)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->benefitBalance);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Balance by Benefit Category.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance $benefitBalance
     * @return static
     */
    public function addBenefitBalance(FHIRExplanationOfBenefitBenefitBalance $benefitBalance): self
    {
        if (!isset($this->benefitBalance)) {
            $this->benefitBalance = [];
        }
        $this->benefitBalance[] = $benefitBalance;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Balance by Benefit Category.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance ...$benefitBalance
     * @return static
     */
    public function setBenefitBalance(FHIRExplanationOfBenefitBenefitBalance ...$benefitBalance): self
    {
        if ([] === $benefitBalance) {
            unset($this->benefitBalance);
            return $this;
        }
        $this->benefitBalance = $benefitBalance;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExplanationOfBenefit)) {
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
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRExplanationOfBenefitStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUB_TYPE === $cen) {
                $type->addSubType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
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
            } else if (self::FIELD_ORGANIZATION === $cen) {
                $type->setOrganization(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERRAL === $cen) {
                $type->setReferral(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FACILITY === $cen) {
                $type->setFacility(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLAIM === $cen) {
                $type->setClaim(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLAIM_RESPONSE === $cen) {
                $type->setClaimResponse(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTCOME === $cen) {
                $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISPOSITION === $cen) {
                $type->setDisposition(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATED === $cen) {
                $type->addRelated(FHIRExplanationOfBenefitRelated::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESCRIPTION === $cen) {
                $type->setPrescription(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORIGINAL_PRESCRIPTION === $cen) {
                $type->setOriginalPrescription(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAYEE === $cen) {
                $type->setPayee(FHIRExplanationOfBenefitPayee::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INFORMATION === $cen) {
                $type->addInformation(FHIRExplanationOfBenefitInformation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CARE_TEAM === $cen) {
                $type->addCareTeam(FHIRExplanationOfBenefitCareTeam::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DIAGNOSIS === $cen) {
                $type->addDiagnosis(FHIRExplanationOfBenefitDiagnosis::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROCEDURE === $cen) {
                $type->addProcedure(FHIRExplanationOfBenefitProcedure::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRECEDENCE === $cen) {
                $type->setPrecedence(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INSURANCE === $cen) {
                $type->setInsurance(FHIRExplanationOfBenefitInsurance::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACCIDENT === $cen) {
                $type->setAccident(FHIRExplanationOfBenefitAccident::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EMPLOYMENT_IMPACTED === $cen) {
                $type->setEmploymentImpacted(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HOSPITALIZATION === $cen) {
                $type->setHospitalization(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ITEM === $cen) {
                $type->addItem(FHIRExplanationOfBenefitItem::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADD_ITEM === $cen) {
                $type->addAddItem(FHIRExplanationOfBenefitAddItem::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TOTAL_COST === $cen) {
                $type->setTotalCost(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UNALLOC_DEDUCTABLE === $cen) {
                $type->setUnallocDeductable(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TOTAL_BENEFIT === $cen) {
                $type->setTotalBenefit(FHIRMoney::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAYMENT === $cen) {
                $type->setPayment(FHIRExplanationOfBenefitPayment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FORM === $cen) {
                $type->setForm(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROCESS_NOTE === $cen) {
                $type->addProcessNote(FHIRExplanationOfBenefitProcessNote::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BENEFIT_BALANCE === $cen) {
                $type->addBenefitBalance(FHIRExplanationOfBenefitBenefitBalance::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_CREATED])) {
            if (isset($type->created)) {
                $type->created->setValue((string)$attributes[self::FIELD_CREATED]);
            } else {
                $type->setCreated((string)$attributes[self::FIELD_CREATED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CREATED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DISPOSITION])) {
            if (isset($type->disposition)) {
                $type->disposition->setValue((string)$attributes[self::FIELD_DISPOSITION]);
            } else {
                $type->setDisposition((string)$attributes[self::FIELD_DISPOSITION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DISPOSITION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PRECEDENCE])) {
            if (isset($type->precedence)) {
                $type->precedence->setValue((string)$attributes[self::FIELD_PRECEDENCE]);
            } else {
                $type->setPrecedence((string)$attributes[self::FIELD_PRECEDENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PRECEDENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('ExplanationOfBenefit', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->created) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CREATED]) {
            $xw->writeAttribute(self::FIELD_CREATED, $this->created->_getValueAsString());
        }
        if (isset($this->disposition) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DISPOSITION]) {
            $xw->writeAttribute(self::FIELD_DISPOSITION, $this->disposition->_getValueAsString());
        }
        if (isset($this->precedence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PRECEDENCE]) {
            $xw->writeAttribute(self::FIELD_PRECEDENCE, $this->precedence->_getValueAsString());
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
            foreach ($this->subType as $v) {
                $xw->startElement(self::FIELD_SUB_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
        if (isset($this->organization)) {
            $xw->startElement(self::FIELD_ORGANIZATION);
            $this->organization->xmlSerialize($xw, $config);
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
        if (isset($this->claim)) {
            $xw->startElement(self::FIELD_CLAIM);
            $this->claim->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->claimResponse)) {
            $xw->startElement(self::FIELD_CLAIM_RESPONSE);
            $this->claimResponse->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->outcome)) {
            $xw->startElement(self::FIELD_OUTCOME);
            $this->outcome->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->disposition)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DISPOSITION]
                || $this->disposition->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DISPOSITION);
            $this->disposition->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DISPOSITION]);
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
        if (isset($this->information)) {
            foreach ($this->information as $v) {
                $xw->startElement(self::FIELD_INFORMATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->careTeam)) {
            foreach ($this->careTeam as $v) {
                $xw->startElement(self::FIELD_CARE_TEAM);
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
        if (isset($this->precedence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PRECEDENCE]
                || $this->precedence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PRECEDENCE);
            $this->precedence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PRECEDENCE]);
            $xw->endElement();
        }
        if (isset($this->insurance)) {
            $xw->startElement(self::FIELD_INSURANCE);
            $this->insurance->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->accident)) {
            $xw->startElement(self::FIELD_ACCIDENT);
            $this->accident->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->employmentImpacted)) {
            $xw->startElement(self::FIELD_EMPLOYMENT_IMPACTED);
            $this->employmentImpacted->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->hospitalization)) {
            $xw->startElement(self::FIELD_HOSPITALIZATION);
            $this->hospitalization->xmlSerialize($xw, $config);
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
        if (isset($this->payment)) {
            $xw->startElement(self::FIELD_PAYMENT);
            $this->payment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->form)) {
            $xw->startElement(self::FIELD_FORM);
            $this->form->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->processNote)) {
            foreach ($this->processNote as $v) {
                $xw->startElement(self::FIELD_PROCESS_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->benefitBalance)) {
            foreach ($this->benefitBalance as $v) {
                $xw->startElement(self::FIELD_BENEFIT_BALANCE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRExplanationOfBenefit)) {
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
            $type->setStatus(FHIRExplanationOfBenefitStatus::jsonUnserialize($v, $config));
        }
        if (isset($json->type) || property_exists($json, self::FIELD_TYPE)) {
            if (is_array($json->type)) {
                $type->setType(FHIRCodeableConcept::jsonUnserialize(reset($json->type), $config));
            } else {
                $type->setType(FHIRCodeableConcept::jsonUnserialize($json->type, $config));
            }
        }
        if (isset($json->subType) || property_exists($json, self::FIELD_SUB_TYPE)) {
            if (is_object($json->subType)) {
                $vals = [$json->subType];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SUB_TYPE, true);
            } else {
                $vals = $json->subType;
            }
            foreach($vals as $v) {
                $type->addSubType(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->patient) || property_exists($json, self::FIELD_PATIENT)) {
            if (is_array($json->patient)) {
                $type->setPatient(FHIRReference::jsonUnserialize(reset($json->patient), $config));
            } else {
                $type->setPatient(FHIRReference::jsonUnserialize($json->patient, $config));
            }
        }
        if (isset($json->billablePeriod) || property_exists($json, self::FIELD_BILLABLE_PERIOD)) {
            if (is_array($json->billablePeriod)) {
                $type->setBillablePeriod(FHIRPeriod::jsonUnserialize(reset($json->billablePeriod), $config));
            } else {
                $type->setBillablePeriod(FHIRPeriod::jsonUnserialize($json->billablePeriod, $config));
            }
        }
        if (isset($json->created)
            || isset($json->_created)
            || property_exists($json, self::FIELD_CREATED)
            || property_exists($json, self::FIELD_CREATED_EXT)) {
            $v = $json->_created ?? new \stdClass();
            $v->value = $json->created ?? null;
            $type->setCreated(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->enterer) || property_exists($json, self::FIELD_ENTERER)) {
            if (is_array($json->enterer)) {
                $type->setEnterer(FHIRReference::jsonUnserialize(reset($json->enterer), $config));
            } else {
                $type->setEnterer(FHIRReference::jsonUnserialize($json->enterer, $config));
            }
        }
        if (isset($json->insurer) || property_exists($json, self::FIELD_INSURER)) {
            if (is_array($json->insurer)) {
                $type->setInsurer(FHIRReference::jsonUnserialize(reset($json->insurer), $config));
            } else {
                $type->setInsurer(FHIRReference::jsonUnserialize($json->insurer, $config));
            }
        }
        if (isset($json->provider) || property_exists($json, self::FIELD_PROVIDER)) {
            if (is_array($json->provider)) {
                $type->setProvider(FHIRReference::jsonUnserialize(reset($json->provider), $config));
            } else {
                $type->setProvider(FHIRReference::jsonUnserialize($json->provider, $config));
            }
        }
        if (isset($json->organization) || property_exists($json, self::FIELD_ORGANIZATION)) {
            if (is_array($json->organization)) {
                $type->setOrganization(FHIRReference::jsonUnserialize(reset($json->organization), $config));
            } else {
                $type->setOrganization(FHIRReference::jsonUnserialize($json->organization, $config));
            }
        }
        if (isset($json->referral) || property_exists($json, self::FIELD_REFERRAL)) {
            if (is_array($json->referral)) {
                $type->setReferral(FHIRReference::jsonUnserialize(reset($json->referral), $config));
            } else {
                $type->setReferral(FHIRReference::jsonUnserialize($json->referral, $config));
            }
        }
        if (isset($json->facility) || property_exists($json, self::FIELD_FACILITY)) {
            if (is_array($json->facility)) {
                $type->setFacility(FHIRReference::jsonUnserialize(reset($json->facility), $config));
            } else {
                $type->setFacility(FHIRReference::jsonUnserialize($json->facility, $config));
            }
        }
        if (isset($json->claim) || property_exists($json, self::FIELD_CLAIM)) {
            if (is_array($json->claim)) {
                $type->setClaim(FHIRReference::jsonUnserialize(reset($json->claim), $config));
            } else {
                $type->setClaim(FHIRReference::jsonUnserialize($json->claim, $config));
            }
        }
        if (isset($json->claimResponse) || property_exists($json, self::FIELD_CLAIM_RESPONSE)) {
            if (is_array($json->claimResponse)) {
                $type->setClaimResponse(FHIRReference::jsonUnserialize(reset($json->claimResponse), $config));
            } else {
                $type->setClaimResponse(FHIRReference::jsonUnserialize($json->claimResponse, $config));
            }
        }
        if (isset($json->outcome) || property_exists($json, self::FIELD_OUTCOME)) {
            if (is_array($json->outcome)) {
                $type->setOutcome(FHIRCodeableConcept::jsonUnserialize(reset($json->outcome), $config));
            } else {
                $type->setOutcome(FHIRCodeableConcept::jsonUnserialize($json->outcome, $config));
            }
        }
        if (isset($json->disposition)
            || isset($json->_disposition)
            || property_exists($json, self::FIELD_DISPOSITION)
            || property_exists($json, self::FIELD_DISPOSITION_EXT)) {
            $v = $json->_disposition ?? new \stdClass();
            $v->value = $json->disposition ?? null;
            $type->setDisposition(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->related) || property_exists($json, self::FIELD_RELATED)) {
            if (is_object($json->related)) {
                $vals = [$json->related];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_RELATED, true);
            } else {
                $vals = $json->related;
            }
            foreach($vals as $v) {
                $type->addRelated(FHIRExplanationOfBenefitRelated::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->prescription) || property_exists($json, self::FIELD_PRESCRIPTION)) {
            if (is_array($json->prescription)) {
                $type->setPrescription(FHIRReference::jsonUnserialize(reset($json->prescription), $config));
            } else {
                $type->setPrescription(FHIRReference::jsonUnserialize($json->prescription, $config));
            }
        }
        if (isset($json->originalPrescription) || property_exists($json, self::FIELD_ORIGINAL_PRESCRIPTION)) {
            if (is_array($json->originalPrescription)) {
                $type->setOriginalPrescription(FHIRReference::jsonUnserialize(reset($json->originalPrescription), $config));
            } else {
                $type->setOriginalPrescription(FHIRReference::jsonUnserialize($json->originalPrescription, $config));
            }
        }
        if (isset($json->payee) || property_exists($json, self::FIELD_PAYEE)) {
            if (is_array($json->payee)) {
                $type->setPayee(FHIRExplanationOfBenefitPayee::jsonUnserialize(reset($json->payee), $config));
            } else {
                $type->setPayee(FHIRExplanationOfBenefitPayee::jsonUnserialize($json->payee, $config));
            }
        }
        if (isset($json->information) || property_exists($json, self::FIELD_INFORMATION)) {
            if (is_object($json->information)) {
                $vals = [$json->information];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INFORMATION, true);
            } else {
                $vals = $json->information;
            }
            foreach($vals as $v) {
                $type->addInformation(FHIRExplanationOfBenefitInformation::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->careTeam) || property_exists($json, self::FIELD_CARE_TEAM)) {
            if (is_object($json->careTeam)) {
                $vals = [$json->careTeam];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CARE_TEAM, true);
            } else {
                $vals = $json->careTeam;
            }
            foreach($vals as $v) {
                $type->addCareTeam(FHIRExplanationOfBenefitCareTeam::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->diagnosis) || property_exists($json, self::FIELD_DIAGNOSIS)) {
            if (is_object($json->diagnosis)) {
                $vals = [$json->diagnosis];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DIAGNOSIS, true);
            } else {
                $vals = $json->diagnosis;
            }
            foreach($vals as $v) {
                $type->addDiagnosis(FHIRExplanationOfBenefitDiagnosis::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->procedure) || property_exists($json, self::FIELD_PROCEDURE)) {
            if (is_object($json->procedure)) {
                $vals = [$json->procedure];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROCEDURE, true);
            } else {
                $vals = $json->procedure;
            }
            foreach($vals as $v) {
                $type->addProcedure(FHIRExplanationOfBenefitProcedure::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->precedence)
            || isset($json->_precedence)
            || property_exists($json, self::FIELD_PRECEDENCE)
            || property_exists($json, self::FIELD_PRECEDENCE_EXT)) {
            $v = $json->_precedence ?? new \stdClass();
            $v->value = $json->precedence ?? null;
            $type->setPrecedence(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($json->insurance) || property_exists($json, self::FIELD_INSURANCE)) {
            if (is_array($json->insurance)) {
                $type->setInsurance(FHIRExplanationOfBenefitInsurance::jsonUnserialize(reset($json->insurance), $config));
            } else {
                $type->setInsurance(FHIRExplanationOfBenefitInsurance::jsonUnserialize($json->insurance, $config));
            }
        }
        if (isset($json->accident) || property_exists($json, self::FIELD_ACCIDENT)) {
            if (is_array($json->accident)) {
                $type->setAccident(FHIRExplanationOfBenefitAccident::jsonUnserialize(reset($json->accident), $config));
            } else {
                $type->setAccident(FHIRExplanationOfBenefitAccident::jsonUnserialize($json->accident, $config));
            }
        }
        if (isset($json->employmentImpacted) || property_exists($json, self::FIELD_EMPLOYMENT_IMPACTED)) {
            if (is_array($json->employmentImpacted)) {
                $type->setEmploymentImpacted(FHIRPeriod::jsonUnserialize(reset($json->employmentImpacted), $config));
            } else {
                $type->setEmploymentImpacted(FHIRPeriod::jsonUnserialize($json->employmentImpacted, $config));
            }
        }
        if (isset($json->hospitalization) || property_exists($json, self::FIELD_HOSPITALIZATION)) {
            if (is_array($json->hospitalization)) {
                $type->setHospitalization(FHIRPeriod::jsonUnserialize(reset($json->hospitalization), $config));
            } else {
                $type->setHospitalization(FHIRPeriod::jsonUnserialize($json->hospitalization, $config));
            }
        }
        if (isset($json->item) || property_exists($json, self::FIELD_ITEM)) {
            if (is_object($json->item)) {
                $vals = [$json->item];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ITEM, true);
            } else {
                $vals = $json->item;
            }
            foreach($vals as $v) {
                $type->addItem(FHIRExplanationOfBenefitItem::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->addItem) || property_exists($json, self::FIELD_ADD_ITEM)) {
            if (is_object($json->addItem)) {
                $vals = [$json->addItem];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ADD_ITEM, true);
            } else {
                $vals = $json->addItem;
            }
            foreach($vals as $v) {
                $type->addAddItem(FHIRExplanationOfBenefitAddItem::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->totalCost) || property_exists($json, self::FIELD_TOTAL_COST)) {
            if (is_array($json->totalCost)) {
                $type->setTotalCost(FHIRMoney::jsonUnserialize(reset($json->totalCost), $config));
            } else {
                $type->setTotalCost(FHIRMoney::jsonUnserialize($json->totalCost, $config));
            }
        }
        if (isset($json->unallocDeductable) || property_exists($json, self::FIELD_UNALLOC_DEDUCTABLE)) {
            if (is_array($json->unallocDeductable)) {
                $type->setUnallocDeductable(FHIRMoney::jsonUnserialize(reset($json->unallocDeductable), $config));
            } else {
                $type->setUnallocDeductable(FHIRMoney::jsonUnserialize($json->unallocDeductable, $config));
            }
        }
        if (isset($json->totalBenefit) || property_exists($json, self::FIELD_TOTAL_BENEFIT)) {
            if (is_array($json->totalBenefit)) {
                $type->setTotalBenefit(FHIRMoney::jsonUnserialize(reset($json->totalBenefit), $config));
            } else {
                $type->setTotalBenefit(FHIRMoney::jsonUnserialize($json->totalBenefit, $config));
            }
        }
        if (isset($json->payment) || property_exists($json, self::FIELD_PAYMENT)) {
            if (is_array($json->payment)) {
                $type->setPayment(FHIRExplanationOfBenefitPayment::jsonUnserialize(reset($json->payment), $config));
            } else {
                $type->setPayment(FHIRExplanationOfBenefitPayment::jsonUnserialize($json->payment, $config));
            }
        }
        if (isset($json->form) || property_exists($json, self::FIELD_FORM)) {
            if (is_array($json->form)) {
                $type->setForm(FHIRCodeableConcept::jsonUnserialize(reset($json->form), $config));
            } else {
                $type->setForm(FHIRCodeableConcept::jsonUnserialize($json->form, $config));
            }
        }
        if (isset($json->processNote) || property_exists($json, self::FIELD_PROCESS_NOTE)) {
            if (is_object($json->processNote)) {
                $vals = [$json->processNote];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROCESS_NOTE, true);
            } else {
                $vals = $json->processNote;
            }
            foreach($vals as $v) {
                $type->addProcessNote(FHIRExplanationOfBenefitProcessNote::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->benefitBalance) || property_exists($json, self::FIELD_BENEFIT_BALANCE)) {
            if (is_object($json->benefitBalance)) {
                $vals = [$json->benefitBalance];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_BENEFIT_BALANCE, true);
            } else {
                $vals = $json->benefitBalance;
            }
            foreach($vals as $v) {
                $type->addBenefitBalance(FHIRExplanationOfBenefitBenefitBalance::jsonUnserialize($v, $config));
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
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->subType) && [] !== $this->subType) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SUB_TYPE) && 1 === count($this->subType)) {
                $out->subType = $this->subType[0];
            } else {
                $out->subType = $this->subType;
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
        if (isset($this->organization)) {
            $out->organization = $this->organization;
        }
        if (isset($this->referral)) {
            $out->referral = $this->referral;
        }
        if (isset($this->facility)) {
            $out->facility = $this->facility;
        }
        if (isset($this->claim)) {
            $out->claim = $this->claim;
        }
        if (isset($this->claimResponse)) {
            $out->claimResponse = $this->claimResponse;
        }
        if (isset($this->outcome)) {
            $out->outcome = $this->outcome;
        }
        if (isset($this->disposition)) {
            if (null !== ($val = $this->disposition->getValue())) {
                $out->disposition = $val;
            }
            if ($this->disposition->_nonValueFieldDefined()) {
                $ext = $this->disposition->jsonSerialize();
                unset($ext->value);
                $out->_disposition = $ext;
            }
        }
        if (isset($this->related) && [] !== $this->related) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_RELATED) && 1 === count($this->related)) {
                $out->related = $this->related[0];
            } else {
                $out->related = $this->related;
            }
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
        if (isset($this->information) && [] !== $this->information) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INFORMATION) && 1 === count($this->information)) {
                $out->information = $this->information[0];
            } else {
                $out->information = $this->information;
            }
        }
        if (isset($this->careTeam) && [] !== $this->careTeam) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CARE_TEAM) && 1 === count($this->careTeam)) {
                $out->careTeam = $this->careTeam[0];
            } else {
                $out->careTeam = $this->careTeam;
            }
        }
        if (isset($this->diagnosis) && [] !== $this->diagnosis) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DIAGNOSIS) && 1 === count($this->diagnosis)) {
                $out->diagnosis = $this->diagnosis[0];
            } else {
                $out->diagnosis = $this->diagnosis;
            }
        }
        if (isset($this->procedure) && [] !== $this->procedure) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROCEDURE) && 1 === count($this->procedure)) {
                $out->procedure = $this->procedure[0];
            } else {
                $out->procedure = $this->procedure;
            }
        }
        if (isset($this->precedence)) {
            if (null !== ($val = $this->precedence->getValue())) {
                $out->precedence = $val;
            }
            if ($this->precedence->_nonValueFieldDefined()) {
                $ext = $this->precedence->jsonSerialize();
                unset($ext->value);
                $out->_precedence = $ext;
            }
        }
        if (isset($this->insurance)) {
            $out->insurance = $this->insurance;
        }
        if (isset($this->accident)) {
            $out->accident = $this->accident;
        }
        if (isset($this->employmentImpacted)) {
            $out->employmentImpacted = $this->employmentImpacted;
        }
        if (isset($this->hospitalization)) {
            $out->hospitalization = $this->hospitalization;
        }
        if (isset($this->item) && [] !== $this->item) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ITEM) && 1 === count($this->item)) {
                $out->item = $this->item[0];
            } else {
                $out->item = $this->item;
            }
        }
        if (isset($this->addItem) && [] !== $this->addItem) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ADD_ITEM) && 1 === count($this->addItem)) {
                $out->addItem = $this->addItem[0];
            } else {
                $out->addItem = $this->addItem;
            }
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
        if (isset($this->payment)) {
            $out->payment = $this->payment;
        }
        if (isset($this->form)) {
            $out->form = $this->form;
        }
        if (isset($this->processNote) && [] !== $this->processNote) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROCESS_NOTE) && 1 === count($this->processNote)) {
                $out->processNote = $this->processNote[0];
            } else {
                $out->processNote = $this->processNote;
            }
        }
        if (isset($this->benefitBalance) && [] !== $this->benefitBalance) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_BENEFIT_BALANCE) && 1 === count($this->benefitBalance)) {
                $out->benefitBalance = $this->benefitBalance[0];
            } else {
                $out->benefitBalance = $this->benefitBalance;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}