<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitEvent;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRClaimProcessingCodes;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRExplanationOfBenefitStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUse;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
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
 * This resource provides: the claim details; adjudication details from the
 * processing of a Claim; and optionally account balance information, for informing
 * the subscriber of the benefits provided.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRExplanationOfBenefit extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_TRACE_NUMBER = 'traceNumber';
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
    public const FIELD_FUNDS_RESERVE_REQUESTED = 'fundsReserveRequested';
    public const FIELD_FUNDS_RESERVE = 'fundsReserve';
    public const FIELD_RELATED = 'related';
    public const FIELD_PRESCRIPTION = 'prescription';
    public const FIELD_ORIGINAL_PRESCRIPTION = 'originalPrescription';
    public const FIELD_EVENT = 'event';
    public const FIELD_PAYEE = 'payee';
    public const FIELD_REFERRAL = 'referral';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_FACILITY = 'facility';
    public const FIELD_CLAIM = 'claim';
    public const FIELD_CLAIM_RESPONSE = 'claimResponse';
    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_OUTCOME_EXT = '_outcome';
    public const FIELD_DECISION = 'decision';
    public const FIELD_DISPOSITION = 'disposition';
    public const FIELD_DISPOSITION_EXT = '_disposition';
    public const FIELD_PRE_AUTH_REF = 'preAuthRef';
    public const FIELD_PRE_AUTH_REF_EXT = '_preAuthRef';
    public const FIELD_PRE_AUTH_REF_PERIOD = 'preAuthRefPeriod';
    public const FIELD_DIAGNOSIS_RELATED_GROUP = 'diagnosisRelatedGroup';
    public const FIELD_CARE_TEAM = 'careTeam';
    public const FIELD_SUPPORTING_INFO = 'supportingInfo';
    public const FIELD_DIAGNOSIS = 'diagnosis';
    public const FIELD_PROCEDURE = 'procedure';
    public const FIELD_PRECEDENCE = 'precedence';
    public const FIELD_PRECEDENCE_EXT = '_precedence';
    public const FIELD_INSURANCE = 'insurance';
    public const FIELD_ACCIDENT = 'accident';
    public const FIELD_PATIENT_PAID = 'patientPaid';
    public const FIELD_ITEM = 'item';
    public const FIELD_ADD_ITEM = 'addItem';
    public const FIELD_ADJUDICATION = 'adjudication';
    public const FIELD_TOTAL = 'total';
    public const FIELD_PAYMENT = 'payment';
    public const FIELD_FORM_CODE = 'formCode';
    public const FIELD_FORM = 'form';
    public const FIELD_PROCESS_NOTE = 'processNote';
    public const FIELD_BENEFIT_PERIOD = 'benefitPeriod';
    public const FIELD_BENEFIT_BALANCE = 'benefitBalance';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this explanation of benefit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $traceNumber;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRExplanationOfBenefitStatus 
     */
    protected FHIRExplanationOfBenefitStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $subType;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate whether the nature of the request is: Claim - A request to an
     * Insurer to adjudicate the supplied charges for health care goods and services
     * under the identified policy and to pay the determined Benefit amount, if any;
     * Preauthorization - A request to an Insurer to adjudicate the supplied proposed
     * future charges for health care goods and services under the identified policy
     * and to approve the services and provide the expected benefit amounts and
     * potentially to reserve funds to pay the benefits when Claims for the indicated
     * services are later submitted; or, Pre-determination - A request to an Insurer to
     * adjudicate the supplied 'what if' charges for health care goods and services
     * under the identified policy and report back what the Benefit payable would be
     * had the services actually been provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUse 
     */
    protected FHIRUse $use;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party to whom the professional services and/or products have been supplied
     * or are being considered and for whom actual for forecast reimbursement is
     * sought.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period for which charges are being submitted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $billablePeriod;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this resource was created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $created;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $enterer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party responsible for authorization, adjudication and reimbursement.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $provider;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider-required urgency of processing the request. Typical values include:
     * stat, normal deferred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $fundsReserveRequested;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, used only on a response to a preauthorization, to indicate whether the
     * benefits payable have been reserved and for whom.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $fundsReserve;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Other claims which are related to this claim such as prior submissions or claims
     * for related services or for the same event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[] 
     */
    protected array $related;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription is the document/authorization given to the claim author for them to
     * provide products and services for which consideration (reimbursement) is sought.
     * Could be a RX for medications, an 'order' for oxygen or wheelchair or
     * physiotherapy treatments.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $originalPrescription;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Information code for an event with a corresponding date or period.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitEvent[] 
     */
    protected array $event;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The party to be reimbursed for cost of the products and services according to
     * the terms of the policy.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee 
     */
    protected FHIRExplanationOfBenefitPayee $payee;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral information received by the claim author, it is not to be used when
     * the author generates a referral for a patient. A copy of that referral may be
     * provided as supporting information. Some insurers require proof of referral to
     * pay for services or to pay specialist rates for services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $referral;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Healthcare encounters related to this claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $encounter;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $facility;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance of the adjudication request: claim
     * predetermination or preauthorization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $claim;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance of the adjudication response: claim,
     * predetermination or preauthorization response.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $claimResponse;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The outcome of the claim, predetermination, or preauthorization processing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRClaimProcessingCodes 
     */
    protected FHIRClaimProcessingCodes $outcome;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result of the claim, predetermination, or preauthorization adjudication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $decision;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable description of the status of the adjudication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $disposition;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference from the Insurer which is used in later communications which refers to
     * this adjudication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[] 
     */
    protected array $preAuthRef;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timeframe during which the supplied preauthorization reference may be quoted
     * on claims to obtain the adjudication as provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod[] 
     */
    protected array $preAuthRefPeriod;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A package billing code or bundle code used to group products and services to a
     * particular health condition (such as heart attack) which is based on a
     * predetermined grouping code system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $diagnosisRelatedGroup;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The members of the team who provided the products and services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[] 
     */
    protected array $careTeam;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo[] 
     */
    protected array $supportingInfo;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[] 
     */
    protected array $diagnosis;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Procedures performed on the patient relevant to the billing items with the
     * claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[] 
     */
    protected array $procedure;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * This indicates the relative order of a series of EOBs related to different
     * coverages for the same suite of services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $precedence;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance[] 
     */
    protected array $insurance;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Details of a accident which resulted in injuries which required the products and
     * services listed in the claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident 
     */
    protected FHIRExplanationOfBenefitAccident $accident;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount paid by the patient, in total at the claim claim level or
     * specifically for the item and detail level, to the provider for goods and
     * services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney 
     */
    protected FHIRMoney $patientPaid;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details
     * which can also be a simple items or groups of sub-details.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[] 
     */
    protected array $item;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[] 
     */
    protected array $addItem;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudication results which are presented at the header level rather than at
     * the line-item or add-item levels.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[] 
     */
    protected array $adjudication;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Categorized monetary totals for the adjudication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal[] 
     */
    protected array $total;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Payment details for the adjudication of the claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment 
     */
    protected FHIRExplanationOfBenefitPayment $payment;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code for the form to be used for printing the content.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $formCode;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment 
     */
    protected FHIRAttachment $form;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[] 
     */
    protected array $processNote;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The term of the benefits documented in this response.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $benefitPeriod;
    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Balance by Benefit Category.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[] 
     */
    protected array $benefitBalance;

    /** Default validation map for fields in type ExplanationOfBenefit */
    private const _DEFAULT_VALIDATION_RULES = [
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
        self::FIELD_OUTCOME => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRExplanationOfBenefit Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $traceNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRExplanationOfBenefitStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $subType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUse $use
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $billablePeriod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $created
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $enterer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $insurer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $provider
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $priority
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $fundsReserveRequested
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $fundsReserve
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[] $related
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $prescription
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $originalPrescription
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitEvent[] $event
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee $payee
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $referral
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $encounter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $facility
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $claim
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $claimResponse
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRClaimProcessingCodes $outcome
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $decision
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $disposition
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[] $preAuthRef
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod[] $preAuthRefPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $diagnosisRelatedGroup
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[] $careTeam
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo[] $supportingInfo
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[] $diagnosis
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[] $procedure
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $precedence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance[] $insurance
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident $accident
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $patientPaid
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[] $item
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[] $addItem
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[] $adjudication
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal[] $total
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment $payment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $formCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $form
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[] $processNote
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $benefitPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[] $benefitBalance
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
                                null|iterable $traceNumber = null,
                                null|FHIRExplanationOfBenefitStatus $status = null,
                                null|FHIRCodeableConcept $type = null,
                                null|FHIRCodeableConcept $subType = null,
                                null|FHIRUse $use = null,
                                null|FHIRReference $patient = null,
                                null|FHIRPeriod $billablePeriod = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null,
                                null|FHIRReference $enterer = null,
                                null|FHIRReference $insurer = null,
                                null|FHIRReference $provider = null,
                                null|FHIRCodeableConcept $priority = null,
                                null|FHIRCodeableConcept $fundsReserveRequested = null,
                                null|FHIRCodeableConcept $fundsReserve = null,
                                null|iterable $related = null,
                                null|FHIRReference $prescription = null,
                                null|FHIRReference $originalPrescription = null,
                                null|iterable $event = null,
                                null|FHIRExplanationOfBenefitPayee $payee = null,
                                null|FHIRReference $referral = null,
                                null|iterable $encounter = null,
                                null|FHIRReference $facility = null,
                                null|FHIRReference $claim = null,
                                null|FHIRReference $claimResponse = null,
                                null|FHIRClaimProcessingCodes $outcome = null,
                                null|FHIRCodeableConcept $decision = null,
                                null|string|FHIRStringPrimitive|FHIRString $disposition = null,
                                null|iterable $preAuthRef = null,
                                null|iterable $preAuthRefPeriod = null,
                                null|FHIRCodeableConcept $diagnosisRelatedGroup = null,
                                null|iterable $careTeam = null,
                                null|iterable $supportingInfo = null,
                                null|iterable $diagnosis = null,
                                null|iterable $procedure = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $precedence = null,
                                null|iterable $insurance = null,
                                null|FHIRExplanationOfBenefitAccident $accident = null,
                                null|FHIRMoney $patientPaid = null,
                                null|iterable $item = null,
                                null|iterable $addItem = null,
                                null|iterable $adjudication = null,
                                null|iterable $total = null,
                                null|FHIRExplanationOfBenefitPayment $payment = null,
                                null|FHIRCodeableConcept $formCode = null,
                                null|FHIRAttachment $form = null,
                                null|iterable $processNote = null,
                                null|FHIRPeriod $benefitPeriod = null,
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
        if (null !== $traceNumber) {
            $this->setTraceNumber(...$traceNumber);
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
        if (null !== $fundsReserveRequested) {
            $this->setFundsReserveRequested($fundsReserveRequested);
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
        if (null !== $event) {
            $this->setEvent(...$event);
        }
        if (null !== $payee) {
            $this->setPayee($payee);
        }
        if (null !== $referral) {
            $this->setReferral($referral);
        }
        if (null !== $encounter) {
            $this->setEncounter(...$encounter);
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
        if (null !== $decision) {
            $this->setDecision($decision);
        }
        if (null !== $disposition) {
            $this->setDisposition($disposition);
        }
        if (null !== $preAuthRef) {
            $this->setPreAuthRef(...$preAuthRef);
        }
        if (null !== $preAuthRefPeriod) {
            $this->setPreAuthRefPeriod(...$preAuthRefPeriod);
        }
        if (null !== $diagnosisRelatedGroup) {
            $this->setDiagnosisRelatedGroup($diagnosisRelatedGroup);
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
        if (null !== $precedence) {
            $this->setPrecedence($precedence);
        }
        if (null !== $insurance) {
            $this->setInsurance(...$insurance);
        }
        if (null !== $accident) {
            $this->setAccident($accident);
        }
        if (null !== $patientPaid) {
            $this->setPatientPaid($patientPaid);
        }
        if (null !== $item) {
            $this->setItem(...$item);
        }
        if (null !== $addItem) {
            $this->setAddItem(...$addItem);
        }
        if (null !== $adjudication) {
            $this->setAdjudication(...$adjudication);
        }
        if (null !== $total) {
            $this->setTotal(...$total);
        }
        if (null !== $payment) {
            $this->setPayment($payment);
        }
        if (null !== $formCode) {
            $this->setFormCode($formCode);
        }
        if (null !== $form) {
            $this->setForm($form);
        }
        if (null !== $processNote) {
            $this->setProcessNote(...$processNote);
        }
        if (null !== $benefitPeriod) {
            $this->setBenefitPeriod($benefitPeriod);
        }
        if (null !== $benefitBalance) {
            $this->setBenefitBalance(...$benefitBalance);
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
     * A unique identifier assigned to this explanation of benefit.
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
     * A unique identifier assigned to this explanation of benefit.
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
     * A unique identifier assigned to this explanation of benefit.
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getTraceNumber(): array
    {
        return $this->traceNumber ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier>
     */
    public function getTraceNumberIterator(): iterable
    {
        if (!isset($this->traceNumber) || [] === $this->traceNumber) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->traceNumber);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $traceNumber
     * @return static
     */
    public function addTraceNumber(FHIRIdentifier $traceNumber): self
    {
        if (!isset($this->traceNumber)) {
            $this->traceNumber = [];
        }
        $this->traceNumber[] = $traceNumber;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or
     * between trading partners.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier ...$traceNumber
     * @return static
     */
    public function setTraceNumber(FHIRIdentifier ...$traceNumber): self
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRExplanationOfBenefitStatus
     */
    public function getStatus(): null|FHIRExplanationOfBenefitStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRExplanationOfBenefitStatus $status
     * @return static
     */
    public function setStatus(null|FHIRExplanationOfBenefitStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
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
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
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
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim type codes which may convey additional
     * information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $subType
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate whether the nature of the request is: Claim - A request to an
     * Insurer to adjudicate the supplied charges for health care goods and services
     * under the identified policy and to pay the determined Benefit amount, if any;
     * Preauthorization - A request to an Insurer to adjudicate the supplied proposed
     * future charges for health care goods and services under the identified policy
     * and to approve the services and provide the expected benefit amounts and
     * potentially to reserve funds to pay the benefits when Claims for the indicated
     * services are later submitted; or, Pre-determination - A request to an Insurer to
     * adjudicate the supplied 'what if' charges for health care goods and services
     * under the identified policy and report back what the Benefit payable would be
     * had the services actually been provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUse
     */
    public function getUse(): null|FHIRUse
    {
        return $this->use ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code to indicate whether the nature of the request is: Claim - A request to an
     * Insurer to adjudicate the supplied charges for health care goods and services
     * under the identified policy and to pay the determined Benefit amount, if any;
     * Preauthorization - A request to an Insurer to adjudicate the supplied proposed
     * future charges for health care goods and services under the identified policy
     * and to approve the services and provide the expected benefit amounts and
     * potentially to reserve funds to pay the benefits when Claims for the indicated
     * services are later submitted; or, Pre-determination - A request to an Insurer to
     * adjudicate the supplied 'what if' charges for health care goods and services
     * under the identified policy and report back what the Benefit payable would be
     * had the services actually been provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUse $use
     * @return static
     */
    public function setUse(null|FHIRUse $use): self
    {
        if (null === $use) {
            unset($this->use);
            return $this;
        }
        $this->use = $use;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party to whom the professional services and/or products have been supplied
     * or are being considered and for whom actual for forecast reimbursement is
     * sought.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * or are being considered and for whom actual for forecast reimbursement is
     * sought.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $patient
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $billablePeriod
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
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this resource was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getCreated(): null|FHIRDateTime
    {
        return $this->created ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date this resource was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $created
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
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $enterer
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
     * The party responsible for authorization, adjudication and reimbursement.
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
     * The party responsible for authorization, adjudication and reimbursement.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the claim, predetermination or
     * preauthorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $provider
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
     * stat, normal deferred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * stat, normal deferred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $priority
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getFundsReserveRequested(): null|FHIRCodeableConcept
    {
        return $this->fundsReserveRequested ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $fundsReserveRequested
     * @return static
     */
    public function setFundsReserveRequested(null|FHIRCodeableConcept $fundsReserveRequested): self
    {
        if (null === $fundsReserveRequested) {
            unset($this->fundsReserveRequested);
            return $this;
        }
        $this->fundsReserveRequested = $fundsReserveRequested;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code, used only on a response to a preauthorization, to indicate whether the
     * benefits payable have been reserved and for whom.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * A code, used only on a response to a preauthorization, to indicate whether the
     * benefits payable have been reserved and for whom.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $fundsReserve
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
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Other claims which are related to this claim such as prior submissions or claims
     * for related services or for the same event.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated[]
     */
    public function getRelated(): array
    {
        return $this->related ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated>
     */
    public function getRelatedIterator(): iterable
    {
        if (!isset($this->related) || [] === $this->related) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->related);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Other claims which are related to this claim such as prior submissions or claims
     * for related services or for the same event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated $related
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
     * Other claims which are related to this claim such as prior submissions or claims
     * for related services or for the same event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated ...$related
     * @return static
     */
    public function setRelated(FHIRExplanationOfBenefitRelated ...$related): self
    {
        $this->related = $related;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription is the document/authorization given to the claim author for them to
     * provide products and services for which consideration (reimbursement) is sought.
     * Could be a RX for medications, an 'order' for oxygen or wheelchair or
     * physiotherapy treatments.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * Prescription is the document/authorization given to the claim author for them to
     * provide products and services for which consideration (reimbursement) is sought.
     * Could be a RX for medications, an 'order' for oxygen or wheelchair or
     * physiotherapy treatments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $prescription
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $originalPrescription
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
     * Information code for an event with a corresponding date or period.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitEvent[]
     */
    public function getEvent(): array
    {
        return $this->event ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitEvent>
     */
    public function getEventIterator(): iterable
    {
        if (!isset($this->event) || [] === $this->event) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->event);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Information code for an event with a corresponding date or period.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitEvent $event
     * @return static
     */
    public function addEvent(FHIRExplanationOfBenefitEvent $event): self
    {
        if (!isset($this->event)) {
            $this->event = [];
        }
        $this->event[] = $event;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Information code for an event with a corresponding date or period.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitEvent ...$event
     * @return static
     */
    public function setEvent(FHIRExplanationOfBenefitEvent ...$event): self
    {
        $this->event = $event;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The party to be reimbursed for cost of the products and services according to
     * the terms of the policy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee
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
     * The party to be reimbursed for cost of the products and services according to
     * the terms of the policy.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee $payee
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral information received by the claim author, it is not to be used when
     * the author generates a referral for a patient. A copy of that referral may be
     * provided as supporting information. Some insurers require proof of referral to
     * pay for services or to pay specialist rates for services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * The referral information received by the claim author, it is not to be used when
     * the author generates a referral for a patient. A copy of that referral may be
     * provided as supporting information. Some insurers require proof of referral to
     * pay for services or to pay specialist rates for services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $referral
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
     * Healthcare encounters related to this claim.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getEncounter(): array
    {
        return $this->encounter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getEncounterIterator(): iterable
    {
        if (!isset($this->encounter) || [] === $this->encounter) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->encounter);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Healthcare encounters related to this claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @return static
     */
    public function addEncounter(FHIRReference $encounter): self
    {
        if (!isset($this->encounter)) {
            $this->encounter = [];
        }
        $this->encounter[] = $encounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Healthcare encounters related to this claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$encounter
     * @return static
     */
    public function setEncounter(FHIRReference ...$encounter): self
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $facility
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
     * The business identifier for the instance of the adjudication request: claim
     * predetermination or preauthorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * The business identifier for the instance of the adjudication request: claim
     * predetermination or preauthorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $claim
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
     * The business identifier for the instance of the adjudication response: claim,
     * predetermination or preauthorization response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
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
     * The business identifier for the instance of the adjudication response: claim,
     * predetermination or preauthorization response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $claimResponse
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The outcome of the claim, predetermination, or preauthorization processing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRClaimProcessingCodes
     */
    public function getOutcome(): null|FHIRClaimProcessingCodes
    {
        return $this->outcome ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The outcome of the claim, predetermination, or preauthorization processing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRClaimProcessingCodes $outcome
     * @return static
     */
    public function setOutcome(null|FHIRClaimProcessingCodes $outcome): self
    {
        if (null === $outcome) {
            unset($this->outcome);
            return $this;
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result of the claim, predetermination, or preauthorization adjudication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDecision(): null|FHIRCodeableConcept
    {
        return $this->decision ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result of the claim, predetermination, or preauthorization adjudication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $decision
     * @return static
     */
    public function setDecision(null|FHIRCodeableConcept $decision): self
    {
        if (null === $decision) {
            unset($this->decision);
            return $this;
        }
        $this->decision = $decision;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable description of the status of the adjudication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDisposition(): null|FHIRString
    {
        return $this->disposition ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable description of the status of the adjudication.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $disposition
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference from the Insurer which is used in later communications which refers to
     * this adjudication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString[]
     */
    public function getPreAuthRef(): array
    {
        return $this->preAuthRef ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString>
     */
    public function getPreAuthRefIterator(): iterable
    {
        if (!isset($this->preAuthRef) || [] === $this->preAuthRef) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->preAuthRef);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference from the Insurer which is used in later communications which refers to
     * this adjudication.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $preAuthRef
     * @return static
     */
    public function addPreAuthRef(string|FHIRStringPrimitive|FHIRString $preAuthRef): self
    {
        if (!($preAuthRef instanceof FHIRString)) {
            $preAuthRef = new FHIRString(value: $preAuthRef);
        }
        if (!isset($this->preAuthRef)) {
            $this->preAuthRef = [];
        }
        $this->preAuthRef[] = $preAuthRef;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference from the Insurer which is used in later communications which refers to
     * this adjudication.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString ...$preAuthRef
     * @return static
     */
    public function setPreAuthRef(string|FHIRStringPrimitive|FHIRString ...$preAuthRef): self
    {
        $this->preAuthRef = [];
        foreach($preAuthRef as $v) {
            if ($v instanceof FHIRString) {
                $this->preAuthRef[] = $v;
            } else {
                $this->preAuthRef[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timeframe during which the supplied preauthorization reference may be quoted
     * on claims to obtain the adjudication as provided.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod[]
     */
    public function getPreAuthRefPeriod(): array
    {
        return $this->preAuthRefPeriod ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod>
     */
    public function getPreAuthRefPeriodIterator(): iterable
    {
        if (!isset($this->preAuthRefPeriod) || [] === $this->preAuthRefPeriod) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->preAuthRefPeriod);
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timeframe during which the supplied preauthorization reference may be quoted
     * on claims to obtain the adjudication as provided.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $preAuthRefPeriod
     * @return static
     */
    public function addPreAuthRefPeriod(FHIRPeriod $preAuthRefPeriod): self
    {
        if (!isset($this->preAuthRefPeriod)) {
            $this->preAuthRefPeriod = [];
        }
        $this->preAuthRefPeriod[] = $preAuthRefPeriod;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timeframe during which the supplied preauthorization reference may be quoted
     * on claims to obtain the adjudication as provided.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod ...$preAuthRefPeriod
     * @return static
     */
    public function setPreAuthRefPeriod(FHIRPeriod ...$preAuthRefPeriod): self
    {
        $this->preAuthRefPeriod = $preAuthRefPeriod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A package billing code or bundle code used to group products and services to a
     * particular health condition (such as heart attack) which is based on a
     * predetermined grouping code system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDiagnosisRelatedGroup(): null|FHIRCodeableConcept
    {
        return $this->diagnosisRelatedGroup ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A package billing code or bundle code used to group products and services to a
     * particular health condition (such as heart attack) which is based on a
     * predetermined grouping code system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $diagnosisRelatedGroup
     * @return static
     */
    public function setDiagnosisRelatedGroup(null|FHIRCodeableConcept $diagnosisRelatedGroup): self
    {
        if (null === $diagnosisRelatedGroup) {
            unset($this->diagnosisRelatedGroup);
            return $this;
        }
        $this->diagnosisRelatedGroup = $diagnosisRelatedGroup;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The members of the team who provided the products and services.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam[]
     */
    public function getCareTeam(): array
    {
        return $this->careTeam ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam>
     */
    public function getCareTeamIterator(): iterable
    {
        if (!isset($this->careTeam) || [] === $this->careTeam) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->careTeam);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The members of the team who provided the products and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam $careTeam
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
     * The members of the team who provided the products and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam ...$careTeam
     * @return static
     */
    public function setCareTeam(FHIRExplanationOfBenefitCareTeam ...$careTeam): self
    {
        $this->careTeam = $careTeam;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo[]
     */
    public function getSupportingInfo(): array
    {
        return $this->supportingInfo ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo>
     */
    public function getSupportingInfoIterator(): iterable
    {
        if (!isset($this->supportingInfo) || [] === $this->supportingInfo) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supportingInfo);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo $supportingInfo
     * @return static
     */
    public function addSupportingInfo(FHIRExplanationOfBenefitSupportingInfo $supportingInfo): self
    {
        if (!isset($this->supportingInfo)) {
            $this->supportingInfo = [];
        }
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo ...$supportingInfo
     * @return static
     */
    public function setSupportingInfo(FHIRExplanationOfBenefitSupportingInfo ...$supportingInfo): self
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis[]
     */
    public function getDiagnosis(): array
    {
        return $this->diagnosis ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis>
     */
    public function getDiagnosisIterator(): iterable
    {
        if (!isset($this->diagnosis) || [] === $this->diagnosis) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->diagnosis);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis $diagnosis
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
     * Information about diagnoses relevant to the claim items.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis ...$diagnosis
     * @return static
     */
    public function setDiagnosis(FHIRExplanationOfBenefitDiagnosis ...$diagnosis): self
    {
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Procedures performed on the patient relevant to the billing items with the
     * claim.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure[]
     */
    public function getProcedure(): array
    {
        return $this->procedure ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure>
     */
    public function getProcedureIterator(): iterable
    {
        if (!isset($this->procedure) || [] === $this->procedure) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->procedure);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Procedures performed on the patient relevant to the billing items with the
     * claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure $procedure
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
     * Procedures performed on the patient relevant to the billing items with the
     * claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure ...$procedure
     * @return static
     */
    public function setProcedure(FHIRExplanationOfBenefitProcedure ...$procedure): self
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * This indicates the relative order of a series of EOBs related to different
     * coverages for the same suite of services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
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
     * This indicates the relative order of a series of EOBs related to different
     * coverages for the same suite of services.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $precedence
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPrecedence(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $precedence,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $precedence) {
            unset($this->precedence);
            return $this;
        }
        if (!($precedence instanceof FHIRPositiveInt)) {
            $precedence = new FHIRPositiveInt(value: $precedence);
        }
        if (null !== $valueXMLLocation) {
            $precedence->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $precedence->_getValueXMLLocation()) {
            $precedence->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->precedence = $precedence;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance[]
     */
    public function getInsurance(): array
    {
        return $this->insurance ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance>
     */
    public function getInsuranceIterator(): iterable
    {
        if (!isset($this->insurance) || [] === $this->insurance) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->insurance);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance $insurance
     * @return static
     */
    public function addInsurance(FHIRExplanationOfBenefitInsurance $insurance): self
    {
        if (!isset($this->insurance)) {
            $this->insurance = [];
        }
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance ...$insurance
     * @return static
     */
    public function setInsurance(FHIRExplanationOfBenefitInsurance ...$insurance): self
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Details of a accident which resulted in injuries which required the products and
     * services listed in the claim.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident
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
     * Details of a accident which resulted in injuries which required the products and
     * services listed in the claim.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident $accident
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
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount paid by the patient, in total at the claim claim level or
     * specifically for the item and detail level, to the provider for goods and
     * services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney
     */
    public function getPatientPaid(): null|FHIRMoney
    {
        return $this->patientPaid ?? null;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount paid by the patient, in total at the claim claim level or
     * specifically for the item and detail level, to the provider for goods and
     * services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMoney $patientPaid
     * @return static
     */
    public function setPatientPaid(null|FHIRMoney $patientPaid): self
    {
        if (null === $patientPaid) {
            unset($this->patientPaid);
            return $this;
        }
        $this->patientPaid = $patientPaid;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details
     * which can also be a simple items or groups of sub-details.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem[]
     */
    public function getItem(): array
    {
        return $this->item ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem>
     */
    public function getItemIterator(): iterable
    {
        if (!isset($this->item) || [] === $this->item) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->item);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details
     * which can also be a simple items or groups of sub-details.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem $item
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
     * A claim line. Either a simple (a product or service) or a 'group' of details
     * which can also be a simple items or groups of sub-details.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem ...$item
     * @return static
     */
    public function setItem(FHIRExplanationOfBenefitItem ...$item): self
    {
        $this->item = $item;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem[]
     */
    public function getAddItem(): array
    {
        return $this->addItem ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem>
     */
    public function getAddItemIterator(): iterable
    {
        if (!isset($this->addItem) || [] === $this->addItem) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->addItem);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem $addItem
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
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem ...$addItem
     * @return static
     */
    public function setAddItem(FHIRExplanationOfBenefitAddItem ...$addItem): self
    {
        $this->addItem = $addItem;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudication results which are presented at the header level rather than at
     * the line-item or add-item levels.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication[]
     */
    public function getAdjudication(): array
    {
        return $this->adjudication ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication>
     */
    public function getAdjudicationIterator(): iterable
    {
        if (!isset($this->adjudication) || [] === $this->adjudication) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->adjudication);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudication results which are presented at the header level rather than at
     * the line-item or add-item levels.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication $adjudication
     * @return static
     */
    public function addAdjudication(FHIRExplanationOfBenefitAdjudication $adjudication): self
    {
        if (!isset($this->adjudication)) {
            $this->adjudication = [];
        }
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * The adjudication results which are presented at the header level rather than at
     * the line-item or add-item levels.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication ...$adjudication
     * @return static
     */
    public function setAdjudication(FHIRExplanationOfBenefitAdjudication ...$adjudication): self
    {
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Categorized monetary totals for the adjudication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal[]
     */
    public function getTotal(): array
    {
        return $this->total ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal>
     */
    public function getTotalIterator(): iterable
    {
        if (!isset($this->total) || [] === $this->total) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->total);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Categorized monetary totals for the adjudication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal $total
     * @return static
     */
    public function addTotal(FHIRExplanationOfBenefitTotal $total): self
    {
        if (!isset($this->total)) {
            $this->total = [];
        }
        $this->total[] = $total;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Categorized monetary totals for the adjudication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal ...$total
     * @return static
     */
    public function setTotal(FHIRExplanationOfBenefitTotal ...$total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Payment details for the adjudication of the claim.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment
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
     * Payment details for the adjudication of the claim.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment $payment
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
     * A code for the form to be used for printing the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getFormCode(): null|FHIRCodeableConcept
    {
        return $this->formCode ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code for the form to be used for printing the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $formCode
     * @return static
     */
    public function setFormCode(null|FHIRCodeableConcept $formCode): self
    {
        if (null === $formCode) {
            unset($this->formCode);
            return $this;
        }
        $this->formCode = $formCode;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment
     */
    public function getForm(): null|FHIRAttachment
    {
        return $this->form ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRAttachment $form
     * @return static
     */
    public function setForm(null|FHIRAttachment $form): self
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
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote[]
     */
    public function getProcessNote(): array
    {
        return $this->processNote ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote>
     */
    public function getProcessNoteIterator(): iterable
    {
        if (!isset($this->processNote) || [] === $this->processNote) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->processNote);
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote $processNote
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
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote ...$processNote
     * @return static
     */
    public function setProcessNote(FHIRExplanationOfBenefitProcessNote ...$processNote): self
    {
        $this->processNote = $processNote;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The term of the benefits documented in this response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getBenefitPeriod(): null|FHIRPeriod
    {
        return $this->benefitPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The term of the benefits documented in this response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $benefitPeriod
     * @return static
     */
    public function setBenefitPeriod(null|FHIRPeriod $benefitPeriod): self
    {
        if (null === $benefitPeriod) {
            unset($this->benefitPeriod);
            return $this;
        }
        $this->benefitPeriod = $benefitPeriod;
        return $this;
    }

    /**
     * This resource provides: the claim details; adjudication details from the
     * processing of a Claim; and optionally account balance information, for informing
     * the subscriber of the benefits provided.
     *
     * Balance by Benefit Category.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance[]
     */
    public function getBenefitBalance(): array
    {
        return $this->benefitBalance ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance>
     */
    public function getBenefitBalanceIterator(): iterable
    {
        if (!isset($this->benefitBalance) || [] === $this->benefitBalance) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance $benefitBalance
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance ...$benefitBalance
     * @return static
     */
    public function setBenefitBalance(FHIRExplanationOfBenefitBenefitBalance ...$benefitBalance): self
    {
        $this->benefitBalance = $benefitBalance;
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
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_TRACE_NUMBER])) {
            $v = $this->getTraceNumber();
            foreach($validationRules[self::FIELD_TRACE_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TRACE_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRACE_NUMBER])) {
                        $errs[self::FIELD_TRACE_NUMBER] = [];
                    }
                    $errs[self::FIELD_TRACE_NUMBER][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_FUNDS_RESERVE_REQUESTED])) {
            $v = $this->getFundsReserveRequested();
            foreach($validationRules[self::FIELD_FUNDS_RESERVE_REQUESTED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FUNDS_RESERVE_REQUESTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FUNDS_RESERVE_REQUESTED])) {
                        $errs[self::FIELD_FUNDS_RESERVE_REQUESTED] = [];
                    }
                    $errs[self::FIELD_FUNDS_RESERVE_REQUESTED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_EVENT])) {
            $v = $this->getEvent();
            foreach($validationRules[self::FIELD_EVENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EVENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT])) {
                        $errs[self::FIELD_EVENT] = [];
                    }
                    $errs[self::FIELD_EVENT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_CLAIM])) {
            $v = $this->getClaim();
            foreach($validationRules[self::FIELD_CLAIM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLAIM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLAIM])) {
                        $errs[self::FIELD_CLAIM] = [];
                    }
                    $errs[self::FIELD_CLAIM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLAIM_RESPONSE])) {
            $v = $this->getClaimResponse();
            foreach($validationRules[self::FIELD_CLAIM_RESPONSE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLAIM_RESPONSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLAIM_RESPONSE])) {
                        $errs[self::FIELD_CLAIM_RESPONSE] = [];
                    }
                    $errs[self::FIELD_CLAIM_RESPONSE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_DECISION])) {
            $v = $this->getDecision();
            foreach($validationRules[self::FIELD_DECISION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DECISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECISION])) {
                        $errs[self::FIELD_DECISION] = [];
                    }
                    $errs[self::FIELD_DECISION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PRE_AUTH_REF])) {
            $v = $this->getPreAuthRef();
            foreach($validationRules[self::FIELD_PRE_AUTH_REF] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRE_AUTH_REF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRE_AUTH_REF])) {
                        $errs[self::FIELD_PRE_AUTH_REF] = [];
                    }
                    $errs[self::FIELD_PRE_AUTH_REF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRE_AUTH_REF_PERIOD])) {
            $v = $this->getPreAuthRefPeriod();
            foreach($validationRules[self::FIELD_PRE_AUTH_REF_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRE_AUTH_REF_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRE_AUTH_REF_PERIOD])) {
                        $errs[self::FIELD_PRE_AUTH_REF_PERIOD] = [];
                    }
                    $errs[self::FIELD_PRE_AUTH_REF_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAGNOSIS_RELATED_GROUP])) {
            $v = $this->getDiagnosisRelatedGroup();
            foreach($validationRules[self::FIELD_DIAGNOSIS_RELATED_GROUP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DIAGNOSIS_RELATED_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAGNOSIS_RELATED_GROUP])) {
                        $errs[self::FIELD_DIAGNOSIS_RELATED_GROUP] = [];
                    }
                    $errs[self::FIELD_DIAGNOSIS_RELATED_GROUP][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PRECEDENCE])) {
            $v = $this->getPrecedence();
            foreach($validationRules[self::FIELD_PRECEDENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRECEDENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRECEDENCE])) {
                        $errs[self::FIELD_PRECEDENCE] = [];
                    }
                    $errs[self::FIELD_PRECEDENCE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PATIENT_PAID])) {
            $v = $this->getPatientPaid();
            foreach($validationRules[self::FIELD_PATIENT_PAID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATIENT_PAID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT_PAID])) {
                        $errs[self::FIELD_PATIENT_PAID] = [];
                    }
                    $errs[self::FIELD_PATIENT_PAID][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_ADJUDICATION])) {
            $v = $this->getAdjudication();
            foreach($validationRules[self::FIELD_ADJUDICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADJUDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADJUDICATION])) {
                        $errs[self::FIELD_ADJUDICATION] = [];
                    }
                    $errs[self::FIELD_ADJUDICATION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PAYMENT])) {
            $v = $this->getPayment();
            foreach($validationRules[self::FIELD_PAYMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PAYMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT])) {
                        $errs[self::FIELD_PAYMENT] = [];
                    }
                    $errs[self::FIELD_PAYMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORM_CODE])) {
            $v = $this->getFormCode();
            foreach($validationRules[self::FIELD_FORM_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FORM_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORM_CODE])) {
                        $errs[self::FIELD_FORM_CODE] = [];
                    }
                    $errs[self::FIELD_FORM_CODE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PROCESS_NOTE])) {
            $v = $this->getProcessNote();
            foreach($validationRules[self::FIELD_PROCESS_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PROCESS_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROCESS_NOTE])) {
                        $errs[self::FIELD_PROCESS_NOTE] = [];
                    }
                    $errs[self::FIELD_PROCESS_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BENEFIT_PERIOD])) {
            $v = $this->getBenefitPeriod();
            foreach($validationRules[self::FIELD_BENEFIT_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BENEFIT_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BENEFIT_PERIOD])) {
                        $errs[self::FIELD_BENEFIT_PERIOD] = [];
                    }
                    $errs[self::FIELD_BENEFIT_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BENEFIT_BALANCE])) {
            $v = $this->getBenefitBalance();
            foreach($validationRules[self::FIELD_BENEFIT_BALANCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BENEFIT_BALANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BENEFIT_BALANCE])) {
                        $errs[self::FIELD_BENEFIT_BALANCE] = [];
                    }
                    $errs[self::FIELD_BENEFIT_BALANCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
            } else if (self::FIELD_TRACE_NUMBER === $childName) {
                $v = new FHIRIdentifier();
                $type->addTraceNumber(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRExplanationOfBenefitStatus(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRExplanationOfBenefitStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUB_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setSubType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_USE === $childName) {
                $v = new FHIRUse(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUse(FHIRUse::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATIENT === $childName) {
                $v = new FHIRReference();
                $type->setPatient(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BILLABLE_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setBillablePeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CREATED === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCreated(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENTERER === $childName) {
                $v = new FHIRReference();
                $type->setEnterer(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INSURER === $childName) {
                $v = new FHIRReference();
                $type->setInsurer(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROVIDER === $childName) {
                $v = new FHIRReference();
                $type->setProvider(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRIORITY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setPriority(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FUNDS_RESERVE_REQUESTED === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setFundsReserveRequested(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FUNDS_RESERVE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setFundsReserve(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATED === $childName) {
                $v = new FHIRExplanationOfBenefitRelated();
                $type->addRelated(FHIRExplanationOfBenefitRelated::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRESCRIPTION === $childName) {
                $v = new FHIRReference();
                $type->setPrescription(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORIGINAL_PRESCRIPTION === $childName) {
                $v = new FHIRReference();
                $type->setOriginalPrescription(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EVENT === $childName) {
                $v = new FHIRExplanationOfBenefitEvent();
                $type->addEvent(FHIRExplanationOfBenefitEvent::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAYEE === $childName) {
                $v = new FHIRExplanationOfBenefitPayee();
                $type->setPayee(FHIRExplanationOfBenefitPayee::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REFERRAL === $childName) {
                $v = new FHIRReference();
                $type->setReferral(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENCOUNTER === $childName) {
                $v = new FHIRReference();
                $type->addEncounter(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FACILITY === $childName) {
                $v = new FHIRReference();
                $type->setFacility(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CLAIM === $childName) {
                $v = new FHIRReference();
                $type->setClaim(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CLAIM_RESPONSE === $childName) {
                $v = new FHIRReference();
                $type->setClaimResponse(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OUTCOME === $childName) {
                $v = new FHIRClaimProcessingCodes(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setOutcome(FHIRClaimProcessingCodes::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DECISION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDecision(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISPOSITION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDisposition(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRE_AUTH_REF === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addPreAuthRef(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRE_AUTH_REF_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->addPreAuthRefPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DIAGNOSIS_RELATED_GROUP === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDiagnosisRelatedGroup(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CARE_TEAM === $childName) {
                $v = new FHIRExplanationOfBenefitCareTeam();
                $type->addCareTeam(FHIRExplanationOfBenefitCareTeam::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUPPORTING_INFO === $childName) {
                $v = new FHIRExplanationOfBenefitSupportingInfo();
                $type->addSupportingInfo(FHIRExplanationOfBenefitSupportingInfo::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DIAGNOSIS === $childName) {
                $v = new FHIRExplanationOfBenefitDiagnosis();
                $type->addDiagnosis(FHIRExplanationOfBenefitDiagnosis::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROCEDURE === $childName) {
                $v = new FHIRExplanationOfBenefitProcedure();
                $type->addProcedure(FHIRExplanationOfBenefitProcedure::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRECEDENCE === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPrecedence(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INSURANCE === $childName) {
                $v = new FHIRExplanationOfBenefitInsurance();
                $type->addInsurance(FHIRExplanationOfBenefitInsurance::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ACCIDENT === $childName) {
                $v = new FHIRExplanationOfBenefitAccident();
                $type->setAccident(FHIRExplanationOfBenefitAccident::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATIENT_PAID === $childName) {
                $v = new FHIRMoney();
                $type->setPatientPaid(FHIRMoney::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ITEM === $childName) {
                $v = new FHIRExplanationOfBenefitItem();
                $type->addItem(FHIRExplanationOfBenefitItem::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ADD_ITEM === $childName) {
                $v = new FHIRExplanationOfBenefitAddItem();
                $type->addAddItem(FHIRExplanationOfBenefitAddItem::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ADJUDICATION === $childName) {
                $v = new FHIRExplanationOfBenefitAdjudication();
                $type->addAdjudication(FHIRExplanationOfBenefitAdjudication::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TOTAL === $childName) {
                $v = new FHIRExplanationOfBenefitTotal();
                $type->addTotal(FHIRExplanationOfBenefitTotal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PAYMENT === $childName) {
                $v = new FHIRExplanationOfBenefitPayment();
                $type->setPayment(FHIRExplanationOfBenefitPayment::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FORM_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setFormCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FORM === $childName) {
                $v = new FHIRAttachment();
                $type->setForm(FHIRAttachment::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PROCESS_NOTE === $childName) {
                $v = new FHIRExplanationOfBenefitProcessNote();
                $type->addProcessNote(FHIRExplanationOfBenefitProcessNote::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BENEFIT_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setBenefitPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BENEFIT_BALANCE === $childName) {
                $v = new FHIRExplanationOfBenefitBenefitBalance();
                $type->addBenefitBalance(FHIRExplanationOfBenefitBenefitBalance::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_PRE_AUTH_REF])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_PRE_AUTH_REF],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addPreAuthRef($v);
        }
        if (isset($attributes[self::FIELD_PRECEDENCE])) {
            $pt = $type->getPrecedence();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PRECEDENCE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPrecedence(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_PRECEDENCE],
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
            $xw->openRootNode('ExplanationOfBenefit', $this->_getSourceXMLNS());
        }
        if (isset($this->created) && $this->created->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CREATED, $this->created->getValue()?->_getFormattedValue());
        }
        if (isset($this->disposition) && $this->disposition->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DISPOSITION, $this->disposition->getValue()?->_getFormattedValue());
        }
        if (isset($this->preAuthRef)) {
           foreach($this->preAuthRef as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_PRE_AUTH_REF, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->precedence) && $this->precedence->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PRECEDENCE, $this->precedence->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->traceNumber)) {
            foreach ($this->traceNumber as $v) {
                $xw->startElement(self::FIELD_TRACE_NUMBER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
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
        if (isset($this->use)) {
            $xw->startElement(self::FIELD_USE);
            $this->use->xmlSerialize($xw, $config);
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
        if (isset($this->created) && $this->created->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CREATED);
            $this->created->xmlSerialize($xw, $config);
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
        if (isset($this->fundsReserveRequested)) {
            $xw->startElement(self::FIELD_FUNDS_RESERVE_REQUESTED);
            $this->fundsReserveRequested->xmlSerialize($xw, $config);
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
        if (isset($this->event)) {
            foreach ($this->event as $v) {
                $xw->startElement(self::FIELD_EVENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
        if (isset($this->encounter)) {
            foreach ($this->encounter as $v) {
                $xw->startElement(self::FIELD_ENCOUNTER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
        if (isset($this->decision)) {
            $xw->startElement(self::FIELD_DECISION);
            $this->decision->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->disposition) && $this->disposition->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DISPOSITION);
            $this->disposition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->preAuthRef)) {
            foreach($this->preAuthRef as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_PRE_AUTH_REF);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->preAuthRefPeriod)) {
            foreach ($this->preAuthRefPeriod as $v) {
                $xw->startElement(self::FIELD_PRE_AUTH_REF_PERIOD);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->diagnosisRelatedGroup)) {
            $xw->startElement(self::FIELD_DIAGNOSIS_RELATED_GROUP);
            $this->diagnosisRelatedGroup->xmlSerialize($xw, $config);
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
        if (isset($this->precedence) && $this->precedence->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PRECEDENCE);
            $this->precedence->xmlSerialize($xw, $config);
            $xw->endElement();
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
        if (isset($this->patientPaid)) {
            $xw->startElement(self::FIELD_PATIENT_PAID);
            $this->patientPaid->xmlSerialize($xw, $config);
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
        if (isset($this->adjudication)) {
            foreach ($this->adjudication as $v) {
                $xw->startElement(self::FIELD_ADJUDICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->total)) {
            foreach ($this->total as $v) {
                $xw->startElement(self::FIELD_TOTAL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->payment)) {
            $xw->startElement(self::FIELD_PAYMENT);
            $this->payment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->formCode)) {
            $xw->startElement(self::FIELD_FORM_CODE);
            $this->formCode->xmlSerialize($xw, $config);
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
        if (isset($this->benefitPeriod)) {
            $xw->startElement(self::FIELD_BENEFIT_PERIOD);
            $this->benefitPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (isset($json[self::FIELD_TRACE_NUMBER]) || array_key_exists(self::FIELD_TRACE_NUMBER, $json)) {
            if (is_array($json[self::FIELD_TRACE_NUMBER])) {
                foreach($json[self::FIELD_TRACE_NUMBER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addTraceNumber($v);
                    } else {
                        $type->addTraceNumber(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_TRACE_NUMBER] instanceof FHIRIdentifier) {
                $type->addTraceNumber($json[self::FIELD_TRACE_NUMBER]);
            } else {
                $type->addTraceNumber(new FHIRIdentifier($json[self::FIELD_TRACE_NUMBER]));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRExplanationOfBenefitStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRExplanationOfBenefitStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRExplanationOfBenefitStatus([FHIRExplanationOfBenefitStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRExplanationOfBenefitStatus($ext));
            } else {
                $type->setStatus(new FHIRExplanationOfBenefitStatus(null));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if ($json[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $type->setType($json[self::FIELD_TYPE]);
            } else {
                $type->setType(new FHIRCodeableConcept($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_SUB_TYPE]) || array_key_exists(self::FIELD_SUB_TYPE, $json)) {
            if ($json[self::FIELD_SUB_TYPE] instanceof FHIRCodeableConcept) {
                $type->setSubType($json[self::FIELD_SUB_TYPE]);
            } else {
                $type->setSubType(new FHIRCodeableConcept($json[self::FIELD_SUB_TYPE]));
            }
        }
        if (isset($json[self::FIELD_USE]) || isset($json[self::FIELD_USE_EXT]) || array_key_exists(self::FIELD_USE, $json) || array_key_exists(self::FIELD_USE_EXT, $json)) {
            $value = $json[self::FIELD_USE] ?? null;
            $ext = (isset($json[self::FIELD_USE_EXT]) && is_array($json[self::FIELD_USE_EXT])) ? $json[self::FIELD_USE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUse) {
                    $type->setUse($value);
                } else if (is_array($value)) {
                    $type->setUse(new FHIRUse(array_merge($ext, $value)));
                } else {
                    $type->setUse(new FHIRUse([FHIRUse::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUse(new FHIRUse($ext));
            } else {
                $type->setUse(new FHIRUse(null));
            }
        }
        if (isset($json[self::FIELD_PATIENT]) || array_key_exists(self::FIELD_PATIENT, $json)) {
            if ($json[self::FIELD_PATIENT] instanceof FHIRReference) {
                $type->setPatient($json[self::FIELD_PATIENT]);
            } else {
                $type->setPatient(new FHIRReference($json[self::FIELD_PATIENT]));
            }
        }
        if (isset($json[self::FIELD_BILLABLE_PERIOD]) || array_key_exists(self::FIELD_BILLABLE_PERIOD, $json)) {
            if ($json[self::FIELD_BILLABLE_PERIOD] instanceof FHIRPeriod) {
                $type->setBillablePeriod($json[self::FIELD_BILLABLE_PERIOD]);
            } else {
                $type->setBillablePeriod(new FHIRPeriod($json[self::FIELD_BILLABLE_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_CREATED]) || isset($json[self::FIELD_CREATED_EXT]) || array_key_exists(self::FIELD_CREATED, $json) || array_key_exists(self::FIELD_CREATED_EXT, $json)) {
            $value = $json[self::FIELD_CREATED] ?? null;
            $ext = (isset($json[self::FIELD_CREATED_EXT]) && is_array($json[self::FIELD_CREATED_EXT])) ? $json[self::FIELD_CREATED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setCreated($value);
                } else if (is_array($value)) {
                    $type->setCreated(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCreated(new FHIRDateTime($ext));
            } else {
                $type->setCreated(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_ENTERER]) || array_key_exists(self::FIELD_ENTERER, $json)) {
            if ($json[self::FIELD_ENTERER] instanceof FHIRReference) {
                $type->setEnterer($json[self::FIELD_ENTERER]);
            } else {
                $type->setEnterer(new FHIRReference($json[self::FIELD_ENTERER]));
            }
        }
        if (isset($json[self::FIELD_INSURER]) || array_key_exists(self::FIELD_INSURER, $json)) {
            if ($json[self::FIELD_INSURER] instanceof FHIRReference) {
                $type->setInsurer($json[self::FIELD_INSURER]);
            } else {
                $type->setInsurer(new FHIRReference($json[self::FIELD_INSURER]));
            }
        }
        if (isset($json[self::FIELD_PROVIDER]) || array_key_exists(self::FIELD_PROVIDER, $json)) {
            if ($json[self::FIELD_PROVIDER] instanceof FHIRReference) {
                $type->setProvider($json[self::FIELD_PROVIDER]);
            } else {
                $type->setProvider(new FHIRReference($json[self::FIELD_PROVIDER]));
            }
        }
        if (isset($json[self::FIELD_PRIORITY]) || array_key_exists(self::FIELD_PRIORITY, $json)) {
            if ($json[self::FIELD_PRIORITY] instanceof FHIRCodeableConcept) {
                $type->setPriority($json[self::FIELD_PRIORITY]);
            } else {
                $type->setPriority(new FHIRCodeableConcept($json[self::FIELD_PRIORITY]));
            }
        }
        if (isset($json[self::FIELD_FUNDS_RESERVE_REQUESTED]) || array_key_exists(self::FIELD_FUNDS_RESERVE_REQUESTED, $json)) {
            if ($json[self::FIELD_FUNDS_RESERVE_REQUESTED] instanceof FHIRCodeableConcept) {
                $type->setFundsReserveRequested($json[self::FIELD_FUNDS_RESERVE_REQUESTED]);
            } else {
                $type->setFundsReserveRequested(new FHIRCodeableConcept($json[self::FIELD_FUNDS_RESERVE_REQUESTED]));
            }
        }
        if (isset($json[self::FIELD_FUNDS_RESERVE]) || array_key_exists(self::FIELD_FUNDS_RESERVE, $json)) {
            if ($json[self::FIELD_FUNDS_RESERVE] instanceof FHIRCodeableConcept) {
                $type->setFundsReserve($json[self::FIELD_FUNDS_RESERVE]);
            } else {
                $type->setFundsReserve(new FHIRCodeableConcept($json[self::FIELD_FUNDS_RESERVE]));
            }
        }
        if (isset($json[self::FIELD_RELATED]) || array_key_exists(self::FIELD_RELATED, $json)) {
            if (is_array($json[self::FIELD_RELATED])) {
                foreach($json[self::FIELD_RELATED] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitRelated) {
                        $type->addRelated($v);
                    } else {
                        $type->addRelated(new FHIRExplanationOfBenefitRelated($v));
                    }
                }
            } elseif ($json[self::FIELD_RELATED] instanceof FHIRExplanationOfBenefitRelated) {
                $type->addRelated($json[self::FIELD_RELATED]);
            } else {
                $type->addRelated(new FHIRExplanationOfBenefitRelated($json[self::FIELD_RELATED]));
            }
        }
        if (isset($json[self::FIELD_PRESCRIPTION]) || array_key_exists(self::FIELD_PRESCRIPTION, $json)) {
            if ($json[self::FIELD_PRESCRIPTION] instanceof FHIRReference) {
                $type->setPrescription($json[self::FIELD_PRESCRIPTION]);
            } else {
                $type->setPrescription(new FHIRReference($json[self::FIELD_PRESCRIPTION]));
            }
        }
        if (isset($json[self::FIELD_ORIGINAL_PRESCRIPTION]) || array_key_exists(self::FIELD_ORIGINAL_PRESCRIPTION, $json)) {
            if ($json[self::FIELD_ORIGINAL_PRESCRIPTION] instanceof FHIRReference) {
                $type->setOriginalPrescription($json[self::FIELD_ORIGINAL_PRESCRIPTION]);
            } else {
                $type->setOriginalPrescription(new FHIRReference($json[self::FIELD_ORIGINAL_PRESCRIPTION]));
            }
        }
        if (isset($json[self::FIELD_EVENT]) || array_key_exists(self::FIELD_EVENT, $json)) {
            if (is_array($json[self::FIELD_EVENT])) {
                foreach($json[self::FIELD_EVENT] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitEvent) {
                        $type->addEvent($v);
                    } else {
                        $type->addEvent(new FHIRExplanationOfBenefitEvent($v));
                    }
                }
            } elseif ($json[self::FIELD_EVENT] instanceof FHIRExplanationOfBenefitEvent) {
                $type->addEvent($json[self::FIELD_EVENT]);
            } else {
                $type->addEvent(new FHIRExplanationOfBenefitEvent($json[self::FIELD_EVENT]));
            }
        }
        if (isset($json[self::FIELD_PAYEE]) || array_key_exists(self::FIELD_PAYEE, $json)) {
            if ($json[self::FIELD_PAYEE] instanceof FHIRExplanationOfBenefitPayee) {
                $type->setPayee($json[self::FIELD_PAYEE]);
            } else {
                $type->setPayee(new FHIRExplanationOfBenefitPayee($json[self::FIELD_PAYEE]));
            }
        }
        if (isset($json[self::FIELD_REFERRAL]) || array_key_exists(self::FIELD_REFERRAL, $json)) {
            if ($json[self::FIELD_REFERRAL] instanceof FHIRReference) {
                $type->setReferral($json[self::FIELD_REFERRAL]);
            } else {
                $type->setReferral(new FHIRReference($json[self::FIELD_REFERRAL]));
            }
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            if (is_array($json[self::FIELD_ENCOUNTER])) {
                foreach($json[self::FIELD_ENCOUNTER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addEncounter($v);
                    } else {
                        $type->addEncounter(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $type->addEncounter($json[self::FIELD_ENCOUNTER]);
            } else {
                $type->addEncounter(new FHIRReference($json[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($json[self::FIELD_FACILITY]) || array_key_exists(self::FIELD_FACILITY, $json)) {
            if ($json[self::FIELD_FACILITY] instanceof FHIRReference) {
                $type->setFacility($json[self::FIELD_FACILITY]);
            } else {
                $type->setFacility(new FHIRReference($json[self::FIELD_FACILITY]));
            }
        }
        if (isset($json[self::FIELD_CLAIM]) || array_key_exists(self::FIELD_CLAIM, $json)) {
            if ($json[self::FIELD_CLAIM] instanceof FHIRReference) {
                $type->setClaim($json[self::FIELD_CLAIM]);
            } else {
                $type->setClaim(new FHIRReference($json[self::FIELD_CLAIM]));
            }
        }
        if (isset($json[self::FIELD_CLAIM_RESPONSE]) || array_key_exists(self::FIELD_CLAIM_RESPONSE, $json)) {
            if ($json[self::FIELD_CLAIM_RESPONSE] instanceof FHIRReference) {
                $type->setClaimResponse($json[self::FIELD_CLAIM_RESPONSE]);
            } else {
                $type->setClaimResponse(new FHIRReference($json[self::FIELD_CLAIM_RESPONSE]));
            }
        }
        if (isset($json[self::FIELD_OUTCOME]) || isset($json[self::FIELD_OUTCOME_EXT]) || array_key_exists(self::FIELD_OUTCOME, $json) || array_key_exists(self::FIELD_OUTCOME_EXT, $json)) {
            $value = $json[self::FIELD_OUTCOME] ?? null;
            $ext = (isset($json[self::FIELD_OUTCOME_EXT]) && is_array($json[self::FIELD_OUTCOME_EXT])) ? $json[self::FIELD_OUTCOME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRClaimProcessingCodes) {
                    $type->setOutcome($value);
                } else if (is_array($value)) {
                    $type->setOutcome(new FHIRClaimProcessingCodes(array_merge($ext, $value)));
                } else {
                    $type->setOutcome(new FHIRClaimProcessingCodes([FHIRClaimProcessingCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setOutcome(new FHIRClaimProcessingCodes($ext));
            } else {
                $type->setOutcome(new FHIRClaimProcessingCodes(null));
            }
        }
        if (isset($json[self::FIELD_DECISION]) || array_key_exists(self::FIELD_DECISION, $json)) {
            if ($json[self::FIELD_DECISION] instanceof FHIRCodeableConcept) {
                $type->setDecision($json[self::FIELD_DECISION]);
            } else {
                $type->setDecision(new FHIRCodeableConcept($json[self::FIELD_DECISION]));
            }
        }
        if (isset($json[self::FIELD_DISPOSITION]) || isset($json[self::FIELD_DISPOSITION_EXT]) || array_key_exists(self::FIELD_DISPOSITION, $json) || array_key_exists(self::FIELD_DISPOSITION_EXT, $json)) {
            $value = $json[self::FIELD_DISPOSITION] ?? null;
            $ext = (isset($json[self::FIELD_DISPOSITION_EXT]) && is_array($json[self::FIELD_DISPOSITION_EXT])) ? $json[self::FIELD_DISPOSITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDisposition($value);
                } else if (is_array($value)) {
                    $type->setDisposition(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDisposition(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDisposition(new FHIRString($ext));
            } else {
                $type->setDisposition(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PRE_AUTH_REF]) || isset($json[self::FIELD_PRE_AUTH_REF_EXT]) || array_key_exists(self::FIELD_PRE_AUTH_REF, $json) || array_key_exists(self::FIELD_PRE_AUTH_REF_EXT, $json)) {
            $value = $json[self::FIELD_PRE_AUTH_REF] ?? null;
            $ext = (isset($json[self::FIELD_PRE_AUTH_REF_EXT]) && is_array($json[self::FIELD_PRE_AUTH_REF_EXT])) ? $json[self::FIELD_PRE_AUTH_REF_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addPreAuthRef($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addPreAuthRef($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addPreAuthRef(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addPreAuthRef(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addPreAuthRef(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addPreAuthRef(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addPreAuthRef(new FHIRString($iext));
                }
            } else {
                $type->addPreAuthRef(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PRE_AUTH_REF_PERIOD]) || array_key_exists(self::FIELD_PRE_AUTH_REF_PERIOD, $json)) {
            if (is_array($json[self::FIELD_PRE_AUTH_REF_PERIOD])) {
                foreach($json[self::FIELD_PRE_AUTH_REF_PERIOD] as $v) {
                    if ($v instanceof FHIRPeriod) {
                        $type->addPreAuthRefPeriod($v);
                    } else {
                        $type->addPreAuthRefPeriod(new FHIRPeriod($v));
                    }
                }
            } elseif ($json[self::FIELD_PRE_AUTH_REF_PERIOD] instanceof FHIRPeriod) {
                $type->addPreAuthRefPeriod($json[self::FIELD_PRE_AUTH_REF_PERIOD]);
            } else {
                $type->addPreAuthRefPeriod(new FHIRPeriod($json[self::FIELD_PRE_AUTH_REF_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_DIAGNOSIS_RELATED_GROUP]) || array_key_exists(self::FIELD_DIAGNOSIS_RELATED_GROUP, $json)) {
            if ($json[self::FIELD_DIAGNOSIS_RELATED_GROUP] instanceof FHIRCodeableConcept) {
                $type->setDiagnosisRelatedGroup($json[self::FIELD_DIAGNOSIS_RELATED_GROUP]);
            } else {
                $type->setDiagnosisRelatedGroup(new FHIRCodeableConcept($json[self::FIELD_DIAGNOSIS_RELATED_GROUP]));
            }
        }
        if (isset($json[self::FIELD_CARE_TEAM]) || array_key_exists(self::FIELD_CARE_TEAM, $json)) {
            if (is_array($json[self::FIELD_CARE_TEAM])) {
                foreach($json[self::FIELD_CARE_TEAM] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitCareTeam) {
                        $type->addCareTeam($v);
                    } else {
                        $type->addCareTeam(new FHIRExplanationOfBenefitCareTeam($v));
                    }
                }
            } elseif ($json[self::FIELD_CARE_TEAM] instanceof FHIRExplanationOfBenefitCareTeam) {
                $type->addCareTeam($json[self::FIELD_CARE_TEAM]);
            } else {
                $type->addCareTeam(new FHIRExplanationOfBenefitCareTeam($json[self::FIELD_CARE_TEAM]));
            }
        }
        if (isset($json[self::FIELD_SUPPORTING_INFO]) || array_key_exists(self::FIELD_SUPPORTING_INFO, $json)) {
            if (is_array($json[self::FIELD_SUPPORTING_INFO])) {
                foreach($json[self::FIELD_SUPPORTING_INFO] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitSupportingInfo) {
                        $type->addSupportingInfo($v);
                    } else {
                        $type->addSupportingInfo(new FHIRExplanationOfBenefitSupportingInfo($v));
                    }
                }
            } elseif ($json[self::FIELD_SUPPORTING_INFO] instanceof FHIRExplanationOfBenefitSupportingInfo) {
                $type->addSupportingInfo($json[self::FIELD_SUPPORTING_INFO]);
            } else {
                $type->addSupportingInfo(new FHIRExplanationOfBenefitSupportingInfo($json[self::FIELD_SUPPORTING_INFO]));
            }
        }
        if (isset($json[self::FIELD_DIAGNOSIS]) || array_key_exists(self::FIELD_DIAGNOSIS, $json)) {
            if (is_array($json[self::FIELD_DIAGNOSIS])) {
                foreach($json[self::FIELD_DIAGNOSIS] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitDiagnosis) {
                        $type->addDiagnosis($v);
                    } else {
                        $type->addDiagnosis(new FHIRExplanationOfBenefitDiagnosis($v));
                    }
                }
            } elseif ($json[self::FIELD_DIAGNOSIS] instanceof FHIRExplanationOfBenefitDiagnosis) {
                $type->addDiagnosis($json[self::FIELD_DIAGNOSIS]);
            } else {
                $type->addDiagnosis(new FHIRExplanationOfBenefitDiagnosis($json[self::FIELD_DIAGNOSIS]));
            }
        }
        if (isset($json[self::FIELD_PROCEDURE]) || array_key_exists(self::FIELD_PROCEDURE, $json)) {
            if (is_array($json[self::FIELD_PROCEDURE])) {
                foreach($json[self::FIELD_PROCEDURE] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitProcedure) {
                        $type->addProcedure($v);
                    } else {
                        $type->addProcedure(new FHIRExplanationOfBenefitProcedure($v));
                    }
                }
            } elseif ($json[self::FIELD_PROCEDURE] instanceof FHIRExplanationOfBenefitProcedure) {
                $type->addProcedure($json[self::FIELD_PROCEDURE]);
            } else {
                $type->addProcedure(new FHIRExplanationOfBenefitProcedure($json[self::FIELD_PROCEDURE]));
            }
        }
        if (isset($json[self::FIELD_PRECEDENCE]) || isset($json[self::FIELD_PRECEDENCE_EXT]) || array_key_exists(self::FIELD_PRECEDENCE, $json) || array_key_exists(self::FIELD_PRECEDENCE_EXT, $json)) {
            $value = $json[self::FIELD_PRECEDENCE] ?? null;
            $ext = (isset($json[self::FIELD_PRECEDENCE_EXT]) && is_array($json[self::FIELD_PRECEDENCE_EXT])) ? $json[self::FIELD_PRECEDENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setPrecedence($value);
                } else if (is_array($value)) {
                    $type->setPrecedence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setPrecedence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPrecedence(new FHIRPositiveInt($ext));
            } else {
                $type->setPrecedence(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_INSURANCE]) || array_key_exists(self::FIELD_INSURANCE, $json)) {
            if (is_array($json[self::FIELD_INSURANCE])) {
                foreach($json[self::FIELD_INSURANCE] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitInsurance) {
                        $type->addInsurance($v);
                    } else {
                        $type->addInsurance(new FHIRExplanationOfBenefitInsurance($v));
                    }
                }
            } elseif ($json[self::FIELD_INSURANCE] instanceof FHIRExplanationOfBenefitInsurance) {
                $type->addInsurance($json[self::FIELD_INSURANCE]);
            } else {
                $type->addInsurance(new FHIRExplanationOfBenefitInsurance($json[self::FIELD_INSURANCE]));
            }
        }
        if (isset($json[self::FIELD_ACCIDENT]) || array_key_exists(self::FIELD_ACCIDENT, $json)) {
            if ($json[self::FIELD_ACCIDENT] instanceof FHIRExplanationOfBenefitAccident) {
                $type->setAccident($json[self::FIELD_ACCIDENT]);
            } else {
                $type->setAccident(new FHIRExplanationOfBenefitAccident($json[self::FIELD_ACCIDENT]));
            }
        }
        if (isset($json[self::FIELD_PATIENT_PAID]) || array_key_exists(self::FIELD_PATIENT_PAID, $json)) {
            if ($json[self::FIELD_PATIENT_PAID] instanceof FHIRMoney) {
                $type->setPatientPaid($json[self::FIELD_PATIENT_PAID]);
            } else {
                $type->setPatientPaid(new FHIRMoney($json[self::FIELD_PATIENT_PAID]));
            }
        }
        if (isset($json[self::FIELD_ITEM]) || array_key_exists(self::FIELD_ITEM, $json)) {
            if (is_array($json[self::FIELD_ITEM])) {
                foreach($json[self::FIELD_ITEM] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitItem) {
                        $type->addItem($v);
                    } else {
                        $type->addItem(new FHIRExplanationOfBenefitItem($v));
                    }
                }
            } elseif ($json[self::FIELD_ITEM] instanceof FHIRExplanationOfBenefitItem) {
                $type->addItem($json[self::FIELD_ITEM]);
            } else {
                $type->addItem(new FHIRExplanationOfBenefitItem($json[self::FIELD_ITEM]));
            }
        }
        if (isset($json[self::FIELD_ADD_ITEM]) || array_key_exists(self::FIELD_ADD_ITEM, $json)) {
            if (is_array($json[self::FIELD_ADD_ITEM])) {
                foreach($json[self::FIELD_ADD_ITEM] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitAddItem) {
                        $type->addAddItem($v);
                    } else {
                        $type->addAddItem(new FHIRExplanationOfBenefitAddItem($v));
                    }
                }
            } elseif ($json[self::FIELD_ADD_ITEM] instanceof FHIRExplanationOfBenefitAddItem) {
                $type->addAddItem($json[self::FIELD_ADD_ITEM]);
            } else {
                $type->addAddItem(new FHIRExplanationOfBenefitAddItem($json[self::FIELD_ADD_ITEM]));
            }
        }
        if (isset($json[self::FIELD_ADJUDICATION]) || array_key_exists(self::FIELD_ADJUDICATION, $json)) {
            if (is_array($json[self::FIELD_ADJUDICATION])) {
                foreach($json[self::FIELD_ADJUDICATION] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitAdjudication) {
                        $type->addAdjudication($v);
                    } else {
                        $type->addAdjudication(new FHIRExplanationOfBenefitAdjudication($v));
                    }
                }
            } elseif ($json[self::FIELD_ADJUDICATION] instanceof FHIRExplanationOfBenefitAdjudication) {
                $type->addAdjudication($json[self::FIELD_ADJUDICATION]);
            } else {
                $type->addAdjudication(new FHIRExplanationOfBenefitAdjudication($json[self::FIELD_ADJUDICATION]));
            }
        }
        if (isset($json[self::FIELD_TOTAL]) || array_key_exists(self::FIELD_TOTAL, $json)) {
            if (is_array($json[self::FIELD_TOTAL])) {
                foreach($json[self::FIELD_TOTAL] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitTotal) {
                        $type->addTotal($v);
                    } else {
                        $type->addTotal(new FHIRExplanationOfBenefitTotal($v));
                    }
                }
            } elseif ($json[self::FIELD_TOTAL] instanceof FHIRExplanationOfBenefitTotal) {
                $type->addTotal($json[self::FIELD_TOTAL]);
            } else {
                $type->addTotal(new FHIRExplanationOfBenefitTotal($json[self::FIELD_TOTAL]));
            }
        }
        if (isset($json[self::FIELD_PAYMENT]) || array_key_exists(self::FIELD_PAYMENT, $json)) {
            if ($json[self::FIELD_PAYMENT] instanceof FHIRExplanationOfBenefitPayment) {
                $type->setPayment($json[self::FIELD_PAYMENT]);
            } else {
                $type->setPayment(new FHIRExplanationOfBenefitPayment($json[self::FIELD_PAYMENT]));
            }
        }
        if (isset($json[self::FIELD_FORM_CODE]) || array_key_exists(self::FIELD_FORM_CODE, $json)) {
            if ($json[self::FIELD_FORM_CODE] instanceof FHIRCodeableConcept) {
                $type->setFormCode($json[self::FIELD_FORM_CODE]);
            } else {
                $type->setFormCode(new FHIRCodeableConcept($json[self::FIELD_FORM_CODE]));
            }
        }
        if (isset($json[self::FIELD_FORM]) || array_key_exists(self::FIELD_FORM, $json)) {
            if ($json[self::FIELD_FORM] instanceof FHIRAttachment) {
                $type->setForm($json[self::FIELD_FORM]);
            } else {
                $type->setForm(new FHIRAttachment($json[self::FIELD_FORM]));
            }
        }
        if (isset($json[self::FIELD_PROCESS_NOTE]) || array_key_exists(self::FIELD_PROCESS_NOTE, $json)) {
            if (is_array($json[self::FIELD_PROCESS_NOTE])) {
                foreach($json[self::FIELD_PROCESS_NOTE] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitProcessNote) {
                        $type->addProcessNote($v);
                    } else {
                        $type->addProcessNote(new FHIRExplanationOfBenefitProcessNote($v));
                    }
                }
            } elseif ($json[self::FIELD_PROCESS_NOTE] instanceof FHIRExplanationOfBenefitProcessNote) {
                $type->addProcessNote($json[self::FIELD_PROCESS_NOTE]);
            } else {
                $type->addProcessNote(new FHIRExplanationOfBenefitProcessNote($json[self::FIELD_PROCESS_NOTE]));
            }
        }
        if (isset($json[self::FIELD_BENEFIT_PERIOD]) || array_key_exists(self::FIELD_BENEFIT_PERIOD, $json)) {
            if ($json[self::FIELD_BENEFIT_PERIOD] instanceof FHIRPeriod) {
                $type->setBenefitPeriod($json[self::FIELD_BENEFIT_PERIOD]);
            } else {
                $type->setBenefitPeriod(new FHIRPeriod($json[self::FIELD_BENEFIT_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_BENEFIT_BALANCE]) || array_key_exists(self::FIELD_BENEFIT_BALANCE, $json)) {
            if (is_array($json[self::FIELD_BENEFIT_BALANCE])) {
                foreach($json[self::FIELD_BENEFIT_BALANCE] as $v) {
                    if ($v instanceof FHIRExplanationOfBenefitBenefitBalance) {
                        $type->addBenefitBalance($v);
                    } else {
                        $type->addBenefitBalance(new FHIRExplanationOfBenefitBenefitBalance($v));
                    }
                }
            } elseif ($json[self::FIELD_BENEFIT_BALANCE] instanceof FHIRExplanationOfBenefitBenefitBalance) {
                $type->addBenefitBalance($json[self::FIELD_BENEFIT_BALANCE]);
            } else {
                $type->addBenefitBalance(new FHIRExplanationOfBenefitBenefitBalance($json[self::FIELD_BENEFIT_BALANCE]));
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
        if (isset($this->traceNumber) && [] !== $this->traceNumber) {
            $out->traceNumber = $this->traceNumber;
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
            $ext = $this->use->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->created->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
        if (isset($this->fundsReserveRequested)) {
            $out->fundsReserveRequested = $this->fundsReserveRequested;
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
        if (isset($this->event) && [] !== $this->event) {
            $out->event = $this->event;
        }
        if (isset($this->payee)) {
            $out->payee = $this->payee;
        }
        if (isset($this->referral)) {
            $out->referral = $this->referral;
        }
        if (isset($this->encounter) && [] !== $this->encounter) {
            $out->encounter = $this->encounter;
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
            if (null !== ($val = $this->outcome->getValue())) {
                $out->outcome = $val;
            }
            $ext = $this->outcome->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_outcome = $ext;
            }
        }
        if (isset($this->decision)) {
            $out->decision = $this->decision;
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
        if (isset($this->preAuthRef) && [] !== $this->preAuthRef) {
            $vals = [];
            $exts = [];
            foreach ($this->preAuthRef as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->preAuthRef = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_preAuthRef = $exts;
            }
        }
        if (isset($this->preAuthRefPeriod) && [] !== $this->preAuthRefPeriod) {
            $out->preAuthRefPeriod = $this->preAuthRefPeriod;
        }
        if (isset($this->diagnosisRelatedGroup)) {
            $out->diagnosisRelatedGroup = $this->diagnosisRelatedGroup;
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
        if (isset($this->precedence)) {
            if (null !== ($val = $this->precedence->getValue())) {
                $out->precedence = $val;
            }
            $ext = $this->precedence->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_precedence = $ext;
            }
        }
        if (isset($this->insurance) && [] !== $this->insurance) {
            $out->insurance = $this->insurance;
        }
        if (isset($this->accident)) {
            $out->accident = $this->accident;
        }
        if (isset($this->patientPaid)) {
            $out->patientPaid = $this->patientPaid;
        }
        if (isset($this->item) && [] !== $this->item) {
            $out->item = $this->item;
        }
        if (isset($this->addItem) && [] !== $this->addItem) {
            $out->addItem = $this->addItem;
        }
        if (isset($this->adjudication) && [] !== $this->adjudication) {
            $out->adjudication = $this->adjudication;
        }
        if (isset($this->total) && [] !== $this->total) {
            $out->total = $this->total;
        }
        if (isset($this->payment)) {
            $out->payment = $this->payment;
        }
        if (isset($this->formCode)) {
            $out->formCode = $this->formCode;
        }
        if (isset($this->form)) {
            $out->form = $this->form;
        }
        if (isset($this->processNote) && [] !== $this->processNote) {
            $out->processNote = $this->processNote;
        }
        if (isset($this->benefitPeriod)) {
            $out->benefitPeriod = $this->benefitPeriod;
        }
        if (isset($this->benefitBalance) && [] !== $this->benefitBalance) {
            $out->benefitBalance = $this->benefitBalance;
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