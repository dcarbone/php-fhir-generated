<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInformation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUse;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeMap;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRClaim
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRClaim extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM;
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TYPE = 'type';
    const FIELD_SUB_TYPE = 'subType';
    const FIELD_USE = 'use';
    const FIELD_USE_EXT = '_use';
    const FIELD_PATIENT = 'patient';
    const FIELD_BILLABLE_PERIOD = 'billablePeriod';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_ENTERER = 'enterer';
    const FIELD_INSURER = 'insurer';
    const FIELD_PROVIDER = 'provider';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_PRIORITY = 'priority';
    const FIELD_FUNDS_RESERVE = 'fundsReserve';
    const FIELD_RELATED = 'related';
    const FIELD_PRESCRIPTION = 'prescription';
    const FIELD_ORIGINAL_PRESCRIPTION = 'originalPrescription';
    const FIELD_PAYEE = 'payee';
    const FIELD_REFERRAL = 'referral';
    const FIELD_FACILITY = 'facility';
    const FIELD_CARE_TEAM = 'careTeam';
    const FIELD_INFORMATION = 'information';
    const FIELD_DIAGNOSIS = 'diagnosis';
    const FIELD_PROCEDURE = 'procedure';
    const FIELD_INSURANCE = 'insurance';
    const FIELD_ACCIDENT = 'accident';
    const FIELD_EMPLOYMENT_IMPACTED = 'employmentImpacted';
    const FIELD_HOSPITALIZATION = 'hospitalization';
    const FIELD_ITEM = 'item';
    const FIELD_TOTAL = 'total';

    /** @var string */
    private $_xmlns = '';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: claim number, pre-determination or
     * pre-authorization number.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    protected $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim subtype codes which may convey Inpatient vs
     * Outpatient and/or a specialty service. In the US the BillType.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $subType = [];

    /**
     * Complete, proposed, exploratory, other
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory
     * (Pre-determination).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUse
     */
    protected $use = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The billable period for which charges are being submitted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $billablePeriod = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $created = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $enterer = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Insurer who is target of the request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $insurer = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $provider = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $organization = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immediate (STAT), best effort (NORMAL), deferred (DEFER).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $priority = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * In the case of a Pre-Determination/Pre-Authorization the provider may request
     * that funds in the amount of the expected Benefit be reserved ('Patient' or
     * 'Provider') to pay for the Benefits determined on the subsequent claim(s).
     * 'None' explicitly indicates no funds reserving is requested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $fundsReserve = null;

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Other claims which are related to this claim such as prior claim versions or for
     * related services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated[]
     */
    protected $related = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $prescription = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $originalPrescription = null;

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The party to be reimbursed for the services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee
     */
    protected $payee = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral resource which lists the date, practitioner, reason and other
     * supporting information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $referral = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $facility = null;

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The members of the team who provided the overall service as well as their role
     * and whether responsible and qualifications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam[]
     */
    protected $careTeam = [];

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues. Often there are mutiple
     * jurisdiction specific valuesets which are required.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInformation[]
     */
    protected $information = [];

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * List of patient diagnosis for which care is sought.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[]
     */
    protected $diagnosis = [];

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Ordered list of patient procedures performed to support the adjudication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure[]
     */
    protected $procedure = [];

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance[]
     */
    protected $insurance = [];

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * An accident which resulted in the need for healthcare services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident
     */
    protected $accident = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was precluded from working
     * due to the treatable condition(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $employmentImpacted = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was confined to a treatment
     * center.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $hospitalization = null;

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * First tier of goods and services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[]
     */
    protected $item = [];

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total value of the claim.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected $total = null;

    /**
     * Validation map for fields in type Claim
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRClaim Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaim::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = isset($data[self::FIELD_STATUS]) ? $data[self::FIELD_STATUS] : null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $ext = $data[self::FIELD_STATUS_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRFinancialResourceStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRFinancialResourceStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRFinancialResourceStatusCodes([FHIRFinancialResourceStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRFinancialResourceStatusCodes($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_SUB_TYPE])) {
            if (is_array($data[self::FIELD_SUB_TYPE])) {
                foreach($data[self::FIELD_SUB_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSubType($v);
                    } else {
                        $this->addSubType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SUB_TYPE] instanceof FHIRCodeableConcept) {
                $this->addSubType($data[self::FIELD_SUB_TYPE]);
            } else {
                $this->addSubType(new FHIRCodeableConcept($data[self::FIELD_SUB_TYPE]));
            }
        }
        if (isset($data[self::FIELD_USE]) || isset($data[self::FIELD_USE_EXT])) {
            $value = isset($data[self::FIELD_USE]) ? $data[self::FIELD_USE] : null;
            $ext = (isset($data[self::FIELD_USE_EXT]) && is_array($data[self::FIELD_USE_EXT])) ? $ext = $data[self::FIELD_USE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRUse) {
                    $this->setUse($value);
                } else if (is_array($value)) {
                    $this->setUse(new FHIRUse(array_merge($ext, $value)));
                } else {
                    $this->setUse(new FHIRUse([FHIRUse::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUse(new FHIRUse($ext));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_BILLABLE_PERIOD])) {
            if ($data[self::FIELD_BILLABLE_PERIOD] instanceof FHIRPeriod) {
                $this->setBillablePeriod($data[self::FIELD_BILLABLE_PERIOD]);
            } else {
                $this->setBillablePeriod(new FHIRPeriod($data[self::FIELD_BILLABLE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_CREATED]) || isset($data[self::FIELD_CREATED_EXT])) {
            $value = isset($data[self::FIELD_CREATED]) ? $data[self::FIELD_CREATED] : null;
            $ext = (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT])) ? $ext = $data[self::FIELD_CREATED_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setCreated($value);
                } else if (is_array($value)) {
                    $this->setCreated(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCreated(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_ENTERER])) {
            if ($data[self::FIELD_ENTERER] instanceof FHIRReference) {
                $this->setEnterer($data[self::FIELD_ENTERER]);
            } else {
                $this->setEnterer(new FHIRReference($data[self::FIELD_ENTERER]));
            }
        }
        if (isset($data[self::FIELD_INSURER])) {
            if ($data[self::FIELD_INSURER] instanceof FHIRReference) {
                $this->setInsurer($data[self::FIELD_INSURER]);
            } else {
                $this->setInsurer(new FHIRReference($data[self::FIELD_INSURER]));
            }
        }
        if (isset($data[self::FIELD_PROVIDER])) {
            if ($data[self::FIELD_PROVIDER] instanceof FHIRReference) {
                $this->setProvider($data[self::FIELD_PROVIDER]);
            } else {
                $this->setProvider(new FHIRReference($data[self::FIELD_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_ORGANIZATION])) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIRReference) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIRReference($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY])) {
            if ($data[self::FIELD_PRIORITY] instanceof FHIRCodeableConcept) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } else {
                $this->setPriority(new FHIRCodeableConcept($data[self::FIELD_PRIORITY]));
            }
        }
        if (isset($data[self::FIELD_FUNDS_RESERVE])) {
            if ($data[self::FIELD_FUNDS_RESERVE] instanceof FHIRCodeableConcept) {
                $this->setFundsReserve($data[self::FIELD_FUNDS_RESERVE]);
            } else {
                $this->setFundsReserve(new FHIRCodeableConcept($data[self::FIELD_FUNDS_RESERVE]));
            }
        }
        if (isset($data[self::FIELD_RELATED])) {
            if (is_array($data[self::FIELD_RELATED])) {
                foreach($data[self::FIELD_RELATED] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimRelated) {
                        $this->addRelated($v);
                    } else {
                        $this->addRelated(new FHIRClaimRelated($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATED] instanceof FHIRClaimRelated) {
                $this->addRelated($data[self::FIELD_RELATED]);
            } else {
                $this->addRelated(new FHIRClaimRelated($data[self::FIELD_RELATED]));
            }
        }
        if (isset($data[self::FIELD_PRESCRIPTION])) {
            if ($data[self::FIELD_PRESCRIPTION] instanceof FHIRReference) {
                $this->setPrescription($data[self::FIELD_PRESCRIPTION]);
            } else {
                $this->setPrescription(new FHIRReference($data[self::FIELD_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_ORIGINAL_PRESCRIPTION])) {
            if ($data[self::FIELD_ORIGINAL_PRESCRIPTION] instanceof FHIRReference) {
                $this->setOriginalPrescription($data[self::FIELD_ORIGINAL_PRESCRIPTION]);
            } else {
                $this->setOriginalPrescription(new FHIRReference($data[self::FIELD_ORIGINAL_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_PAYEE])) {
            if ($data[self::FIELD_PAYEE] instanceof FHIRClaimPayee) {
                $this->setPayee($data[self::FIELD_PAYEE]);
            } else {
                $this->setPayee(new FHIRClaimPayee($data[self::FIELD_PAYEE]));
            }
        }
        if (isset($data[self::FIELD_REFERRAL])) {
            if ($data[self::FIELD_REFERRAL] instanceof FHIRReference) {
                $this->setReferral($data[self::FIELD_REFERRAL]);
            } else {
                $this->setReferral(new FHIRReference($data[self::FIELD_REFERRAL]));
            }
        }
        if (isset($data[self::FIELD_FACILITY])) {
            if ($data[self::FIELD_FACILITY] instanceof FHIRReference) {
                $this->setFacility($data[self::FIELD_FACILITY]);
            } else {
                $this->setFacility(new FHIRReference($data[self::FIELD_FACILITY]));
            }
        }
        if (isset($data[self::FIELD_CARE_TEAM])) {
            if (is_array($data[self::FIELD_CARE_TEAM])) {
                foreach($data[self::FIELD_CARE_TEAM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimCareTeam) {
                        $this->addCareTeam($v);
                    } else {
                        $this->addCareTeam(new FHIRClaimCareTeam($v));
                    }
                }
            } elseif ($data[self::FIELD_CARE_TEAM] instanceof FHIRClaimCareTeam) {
                $this->addCareTeam($data[self::FIELD_CARE_TEAM]);
            } else {
                $this->addCareTeam(new FHIRClaimCareTeam($data[self::FIELD_CARE_TEAM]));
            }
        }
        if (isset($data[self::FIELD_INFORMATION])) {
            if (is_array($data[self::FIELD_INFORMATION])) {
                foreach($data[self::FIELD_INFORMATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimInformation) {
                        $this->addInformation($v);
                    } else {
                        $this->addInformation(new FHIRClaimInformation($v));
                    }
                }
            } elseif ($data[self::FIELD_INFORMATION] instanceof FHIRClaimInformation) {
                $this->addInformation($data[self::FIELD_INFORMATION]);
            } else {
                $this->addInformation(new FHIRClaimInformation($data[self::FIELD_INFORMATION]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSIS])) {
            if (is_array($data[self::FIELD_DIAGNOSIS])) {
                foreach($data[self::FIELD_DIAGNOSIS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimDiagnosis) {
                        $this->addDiagnosis($v);
                    } else {
                        $this->addDiagnosis(new FHIRClaimDiagnosis($v));
                    }
                }
            } elseif ($data[self::FIELD_DIAGNOSIS] instanceof FHIRClaimDiagnosis) {
                $this->addDiagnosis($data[self::FIELD_DIAGNOSIS]);
            } else {
                $this->addDiagnosis(new FHIRClaimDiagnosis($data[self::FIELD_DIAGNOSIS]));
            }
        }
        if (isset($data[self::FIELD_PROCEDURE])) {
            if (is_array($data[self::FIELD_PROCEDURE])) {
                foreach($data[self::FIELD_PROCEDURE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimProcedure) {
                        $this->addProcedure($v);
                    } else {
                        $this->addProcedure(new FHIRClaimProcedure($v));
                    }
                }
            } elseif ($data[self::FIELD_PROCEDURE] instanceof FHIRClaimProcedure) {
                $this->addProcedure($data[self::FIELD_PROCEDURE]);
            } else {
                $this->addProcedure(new FHIRClaimProcedure($data[self::FIELD_PROCEDURE]));
            }
        }
        if (isset($data[self::FIELD_INSURANCE])) {
            if (is_array($data[self::FIELD_INSURANCE])) {
                foreach($data[self::FIELD_INSURANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimInsurance) {
                        $this->addInsurance($v);
                    } else {
                        $this->addInsurance(new FHIRClaimInsurance($v));
                    }
                }
            } elseif ($data[self::FIELD_INSURANCE] instanceof FHIRClaimInsurance) {
                $this->addInsurance($data[self::FIELD_INSURANCE]);
            } else {
                $this->addInsurance(new FHIRClaimInsurance($data[self::FIELD_INSURANCE]));
            }
        }
        if (isset($data[self::FIELD_ACCIDENT])) {
            if ($data[self::FIELD_ACCIDENT] instanceof FHIRClaimAccident) {
                $this->setAccident($data[self::FIELD_ACCIDENT]);
            } else {
                $this->setAccident(new FHIRClaimAccident($data[self::FIELD_ACCIDENT]));
            }
        }
        if (isset($data[self::FIELD_EMPLOYMENT_IMPACTED])) {
            if ($data[self::FIELD_EMPLOYMENT_IMPACTED] instanceof FHIRPeriod) {
                $this->setEmploymentImpacted($data[self::FIELD_EMPLOYMENT_IMPACTED]);
            } else {
                $this->setEmploymentImpacted(new FHIRPeriod($data[self::FIELD_EMPLOYMENT_IMPACTED]));
            }
        }
        if (isset($data[self::FIELD_HOSPITALIZATION])) {
            if ($data[self::FIELD_HOSPITALIZATION] instanceof FHIRPeriod) {
                $this->setHospitalization($data[self::FIELD_HOSPITALIZATION]);
            } else {
                $this->setHospitalization(new FHIRPeriod($data[self::FIELD_HOSPITALIZATION]));
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRClaimItem($v));
                    }
                }
            } elseif ($data[self::FIELD_ITEM] instanceof FHIRClaimItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRClaimItem($data[self::FIELD_ITEM]));
            }
        }
        if (isset($data[self::FIELD_TOTAL])) {
            if ($data[self::FIELD_TOTAL] instanceof FHIRMoney) {
                $this->setTotal($data[self::FIELD_TOTAL]);
            } else {
                $this->setTotal(new FHIRMoney($data[self::FIELD_TOTAL]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Claim{$xmlns}></Claim>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: claim number, pre-determination or
     * pre-authorization number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: claim number, pre-determination or
     * pre-authorization number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: claim number, pre-determination or
     * pre-authorization number.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return static
     */
    public function setStatus(FHIRFinancialResourceStatusCodes $status = null)
    {
        $this->_trackValueSet($this->status, $status);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->_trackValueSet($this->type, $type);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubType()
    {
        return $this->subType;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $subType
     * @return static
     */
    public function addSubType(FHIRCodeableConcept $subType = null)
    {
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $subType
     * @return static
     */
    public function setSubType(array $subType = [])
    {
        if ([] !== $this->subType) {
            $this->_trackValuesRemoved(count($this->subType));
            $this->subType = [];
        }
        if ([] === $subType) {
            return $this;
        }
        foreach($subType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSubType($v);
            } else {
                $this->addSubType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Complete, proposed, exploratory, other
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory
     * (Pre-determination).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Complete, proposed, exploratory, other
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory
     * (Pre-determination).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUse $use
     * @return static
     */
    public function setUse(FHIRUse $use = null)
    {
        $this->_trackValueSet($this->use, $use);
        $this->use = $use;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->_trackValueSet($this->patient, $patient);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getBillablePeriod()
    {
        return $this->billablePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The billable period for which charges are being submitted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $billablePeriod
     * @return static
     */
    public function setBillablePeriod(FHIRPeriod $billablePeriod = null)
    {
        $this->_trackValueSet($this->billablePeriod, $billablePeriod);
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
     * The date when the enclosed suite of services were performed or completed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $created
     * @return static
     */
    public function setCreated($created = null)
    {
        if (null !== $created && !($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime($created);
        }
        $this->_trackValueSet($this->created, $created);
        $this->created = $created;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $enterer
     * @return static
     */
    public function setEnterer(FHIRReference $enterer = null)
    {
        $this->_trackValueSet($this->enterer, $enterer);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getInsurer()
    {
        return $this->insurer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Insurer who is target of the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $insurer
     * @return static
     */
    public function setInsurer(FHIRReference $insurer = null)
    {
        $this->_trackValueSet($this->insurer, $insurer);
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $provider
     * @return static
     */
    public function setProvider(FHIRReference $provider = null)
    {
        $this->_trackValueSet($this->provider, $provider);
        $this->provider = $provider;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $organization
     * @return static
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        $this->_trackValueSet($this->organization, $organization);
        $this->organization = $organization;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immediate (STAT), best effort (NORMAL), deferred (DEFER).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immediate (STAT), best effort (NORMAL), deferred (DEFER).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $priority
     * @return static
     */
    public function setPriority(FHIRCodeableConcept $priority = null)
    {
        $this->_trackValueSet($this->priority, $priority);
        $this->priority = $priority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * In the case of a Pre-Determination/Pre-Authorization the provider may request
     * that funds in the amount of the expected Benefit be reserved ('Patient' or
     * 'Provider') to pay for the Benefits determined on the subsequent claim(s).
     * 'None' explicitly indicates no funds reserving is requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getFundsReserve()
    {
        return $this->fundsReserve;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * In the case of a Pre-Determination/Pre-Authorization the provider may request
     * that funds in the amount of the expected Benefit be reserved ('Patient' or
     * 'Provider') to pay for the Benefits determined on the subsequent claim(s).
     * 'None' explicitly indicates no funds reserving is requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $fundsReserve
     * @return static
     */
    public function setFundsReserve(FHIRCodeableConcept $fundsReserve = null)
    {
        $this->_trackValueSet($this->fundsReserve, $fundsReserve);
        $this->fundsReserve = $fundsReserve;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Other claims which are related to this claim such as prior claim versions or for
     * related services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Other claims which are related to this claim such as prior claim versions or for
     * related services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated $related
     * @return static
     */
    public function addRelated(FHIRClaimRelated $related = null)
    {
        $this->_trackValueAdded();
        $this->related[] = $related;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Other claims which are related to this claim such as prior claim versions or for
     * related services.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated[] $related
     * @return static
     */
    public function setRelated(array $related = [])
    {
        if ([] !== $this->related) {
            $this->_trackValuesRemoved(count($this->related));
            $this->related = [];
        }
        if ([] === $related) {
            return $this;
        }
        foreach($related as $v) {
            if ($v instanceof FHIRClaimRelated) {
                $this->addRelated($v);
            } else {
                $this->addRelated(new FHIRClaimRelated($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $prescription
     * @return static
     */
    public function setPrescription(FHIRReference $prescription = null)
    {
        $this->_trackValueSet($this->prescription, $prescription);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getOriginalPrescription()
    {
        return $this->originalPrescription;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $originalPrescription
     * @return static
     */
    public function setOriginalPrescription(FHIRReference $originalPrescription = null)
    {
        $this->_trackValueSet($this->originalPrescription, $originalPrescription);
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The party to be reimbursed for the services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The party to be reimbursed for the services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee $payee
     * @return static
     */
    public function setPayee(FHIRClaimPayee $payee = null)
    {
        $this->_trackValueSet($this->payee, $payee);
        $this->payee = $payee;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getReferral()
    {
        return $this->referral;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral resource which lists the date, practitioner, reason and other
     * supporting information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $referral
     * @return static
     */
    public function setReferral(FHIRReference $referral = null)
    {
        $this->_trackValueSet($this->referral, $referral);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $facility
     * @return static
     */
    public function setFacility(FHIRReference $facility = null)
    {
        $this->_trackValueSet($this->facility, $facility);
        $this->facility = $facility;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The members of the team who provided the overall service as well as their role
     * and whether responsible and qualifications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam[]
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The members of the team who provided the overall service as well as their role
     * and whether responsible and qualifications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam $careTeam
     * @return static
     */
    public function addCareTeam(FHIRClaimCareTeam $careTeam = null)
    {
        $this->_trackValueAdded();
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The members of the team who provided the overall service as well as their role
     * and whether responsible and qualifications.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam[] $careTeam
     * @return static
     */
    public function setCareTeam(array $careTeam = [])
    {
        if ([] !== $this->careTeam) {
            $this->_trackValuesRemoved(count($this->careTeam));
            $this->careTeam = [];
        }
        if ([] === $careTeam) {
            return $this;
        }
        foreach($careTeam as $v) {
            if ($v instanceof FHIRClaimCareTeam) {
                $this->addCareTeam($v);
            } else {
                $this->addCareTeam(new FHIRClaimCareTeam($v));
            }
        }
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues. Often there are mutiple
     * jurisdiction specific valuesets which are required.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInformation[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues. Often there are mutiple
     * jurisdiction specific valuesets which are required.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInformation $information
     * @return static
     */
    public function addInformation(FHIRClaimInformation $information = null)
    {
        $this->_trackValueAdded();
        $this->information[] = $information;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Additional information codes regarding exceptions, special considerations, the
     * condition, situation, prior or concurrent issues. Often there are mutiple
     * jurisdiction specific valuesets which are required.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInformation[] $information
     * @return static
     */
    public function setInformation(array $information = [])
    {
        if ([] !== $this->information) {
            $this->_trackValuesRemoved(count($this->information));
            $this->information = [];
        }
        if ([] === $information) {
            return $this;
        }
        foreach($information as $v) {
            if ($v instanceof FHIRClaimInformation) {
                $this->addInformation($v);
            } else {
                $this->addInformation(new FHIRClaimInformation($v));
            }
        }
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * List of patient diagnosis for which care is sought.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * List of patient diagnosis for which care is sought.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis $diagnosis
     * @return static
     */
    public function addDiagnosis(FHIRClaimDiagnosis $diagnosis = null)
    {
        $this->_trackValueAdded();
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * List of patient diagnosis for which care is sought.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[] $diagnosis
     * @return static
     */
    public function setDiagnosis(array $diagnosis = [])
    {
        if ([] !== $this->diagnosis) {
            $this->_trackValuesRemoved(count($this->diagnosis));
            $this->diagnosis = [];
        }
        if ([] === $diagnosis) {
            return $this;
        }
        foreach($diagnosis as $v) {
            if ($v instanceof FHIRClaimDiagnosis) {
                $this->addDiagnosis($v);
            } else {
                $this->addDiagnosis(new FHIRClaimDiagnosis($v));
            }
        }
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Ordered list of patient procedures performed to support the adjudication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure[]
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Ordered list of patient procedures performed to support the adjudication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure $procedure
     * @return static
     */
    public function addProcedure(FHIRClaimProcedure $procedure = null)
    {
        $this->_trackValueAdded();
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Ordered list of patient procedures performed to support the adjudication.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure[] $procedure
     * @return static
     */
    public function setProcedure(array $procedure = [])
    {
        if ([] !== $this->procedure) {
            $this->_trackValuesRemoved(count($this->procedure));
            $this->procedure = [];
        }
        if ([] === $procedure) {
            return $this;
        }
        foreach($procedure as $v) {
            if ($v instanceof FHIRClaimProcedure) {
                $this->addProcedure($v);
            } else {
                $this->addProcedure(new FHIRClaimProcedure($v));
            }
        }
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance $insurance
     * @return static
     */
    public function addInsurance(FHIRClaimInsurance $insurance = null)
    {
        $this->_trackValueAdded();
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance[] $insurance
     * @return static
     */
    public function setInsurance(array $insurance = [])
    {
        if ([] !== $this->insurance) {
            $this->_trackValuesRemoved(count($this->insurance));
            $this->insurance = [];
        }
        if ([] === $insurance) {
            return $this;
        }
        foreach($insurance as $v) {
            if ($v instanceof FHIRClaimInsurance) {
                $this->addInsurance($v);
            } else {
                $this->addInsurance(new FHIRClaimInsurance($v));
            }
        }
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * An accident which resulted in the need for healthcare services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident
     */
    public function getAccident()
    {
        return $this->accident;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * An accident which resulted in the need for healthcare services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident $accident
     * @return static
     */
    public function setAccident(FHIRClaimAccident $accident = null)
    {
        $this->_trackValueSet($this->accident, $accident);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getEmploymentImpacted()
    {
        return $this->employmentImpacted;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was precluded from working
     * due to the treatable condition(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $employmentImpacted
     * @return static
     */
    public function setEmploymentImpacted(FHIRPeriod $employmentImpacted = null)
    {
        $this->_trackValueSet($this->employmentImpacted, $employmentImpacted);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getHospitalization()
    {
        return $this->hospitalization;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was confined to a treatment
     * center.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $hospitalization
     * @return static
     */
    public function setHospitalization(FHIRPeriod $hospitalization = null)
    {
        $this->_trackValueSet($this->hospitalization, $hospitalization);
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * First tier of goods and services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * First tier of goods and services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem $item
     * @return static
     */
    public function addItem(FHIRClaimItem $item = null)
    {
        $this->_trackValueAdded();
        $this->item[] = $item;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * First tier of goods and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[] $item
     * @return static
     */
    public function setItem(array $item = [])
    {
        if ([] !== $this->item) {
            $this->_trackValuesRemoved(count($this->item));
            $this->item = [];
        }
        if ([] === $item) {
            return $this;
        }
        foreach($item as $v) {
            if ($v instanceof FHIRClaimItem) {
                $this->addItem($v);
            } else {
                $this->addItem(new FHIRClaimItem($v));
            }
        }
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total value of the claim.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The total value of the claim.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $total
     * @return static
     */
    public function setTotal(FHIRMoney $total = null)
    {
        $this->_trackValueSet($this->total, $total);
        $this->total = $total;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
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
        if ([] !== ($vs = $this->getSubType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUB_TYPE, $i)] = $fieldErrs;
                }
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
        if (null !== ($v = $this->getBillablePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BILLABLE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCreated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEnterer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENTERER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInsurer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSURER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProvider())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROVIDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFundsReserve())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FUNDS_RESERVE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRelated())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPrescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOriginalPrescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIGINAL_PRESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPayee())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAYEE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferral())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERRAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFacility())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FACILITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCareTeam())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CARE_TEAM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInformation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INFORMATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDiagnosis())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DIAGNOSIS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProcedure())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROCEDURE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSURANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAccident())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACCIDENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEmploymentImpacted())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EMPLOYMENT_IMPACTED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHospitalization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HOSPITALIZATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTotal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TOTAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_STATUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_SUB_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_USE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_PATIENT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_BILLABLE_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_CREATED, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_ENTERER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_INSURER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_PROVIDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROVIDER])) {
                        $errs[self::FIELD_PROVIDER] = [];
                    }
                    $errs[self::FIELD_PROVIDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORGANIZATION])) {
            $v = $this->getOrganization();
            foreach($validationRules[self::FIELD_ORGANIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_ORGANIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORGANIZATION])) {
                        $errs[self::FIELD_ORGANIZATION] = [];
                    }
                    $errs[self::FIELD_ORGANIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_PRIORITY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_FUNDS_RESERVE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_RELATED, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_PRESCRIPTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_ORIGINAL_PRESCRIPTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_PAYEE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_REFERRAL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_FACILITY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_CARE_TEAM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CARE_TEAM])) {
                        $errs[self::FIELD_CARE_TEAM] = [];
                    }
                    $errs[self::FIELD_CARE_TEAM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INFORMATION])) {
            $v = $this->getInformation();
            foreach($validationRules[self::FIELD_INFORMATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INFORMATION])) {
                        $errs[self::FIELD_INFORMATION] = [];
                    }
                    $errs[self::FIELD_INFORMATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAGNOSIS])) {
            $v = $this->getDiagnosis();
            foreach($validationRules[self::FIELD_DIAGNOSIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_DIAGNOSIS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_PROCEDURE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_INSURANCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_ACCIDENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCIDENT])) {
                        $errs[self::FIELD_ACCIDENT] = [];
                    }
                    $errs[self::FIELD_ACCIDENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EMPLOYMENT_IMPACTED])) {
            $v = $this->getEmploymentImpacted();
            foreach($validationRules[self::FIELD_EMPLOYMENT_IMPACTED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_EMPLOYMENT_IMPACTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EMPLOYMENT_IMPACTED])) {
                        $errs[self::FIELD_EMPLOYMENT_IMPACTED] = [];
                    }
                    $errs[self::FIELD_EMPLOYMENT_IMPACTED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HOSPITALIZATION])) {
            $v = $this->getHospitalization();
            foreach($validationRules[self::FIELD_HOSPITALIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_HOSPITALIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HOSPITALIZATION])) {
                        $errs[self::FIELD_HOSPITALIZATION] = [];
                    }
                    $errs[self::FIELD_HOSPITALIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_ITEM, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM, self::FIELD_TOTAL, $rule, $constraint, $v);
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRClaim::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaim::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRClaim(null);
        } elseif (!is_object($type) || !($type instanceof FHIRClaim)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaim::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SUB_TYPE === $n->nodeName) {
                $type->addSubType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_USE === $n->nodeName) {
                $type->setUse(FHIRUse::xmlUnserialize($n));
            } elseif (self::FIELD_PATIENT === $n->nodeName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_BILLABLE_PERIOD === $n->nodeName) {
                $type->setBillablePeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_CREATED === $n->nodeName) {
                $type->setCreated(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_ENTERER === $n->nodeName) {
                $type->setEnterer(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_INSURER === $n->nodeName) {
                $type->setInsurer(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PROVIDER === $n->nodeName) {
                $type->setProvider(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ORGANIZATION === $n->nodeName) {
                $type->setOrganization(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PRIORITY === $n->nodeName) {
                $type->setPriority(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_FUNDS_RESERVE === $n->nodeName) {
                $type->setFundsReserve(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_RELATED === $n->nodeName) {
                $type->addRelated(FHIRClaimRelated::xmlUnserialize($n));
            } elseif (self::FIELD_PRESCRIPTION === $n->nodeName) {
                $type->setPrescription(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ORIGINAL_PRESCRIPTION === $n->nodeName) {
                $type->setOriginalPrescription(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PAYEE === $n->nodeName) {
                $type->setPayee(FHIRClaimPayee::xmlUnserialize($n));
            } elseif (self::FIELD_REFERRAL === $n->nodeName) {
                $type->setReferral(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_FACILITY === $n->nodeName) {
                $type->setFacility(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CARE_TEAM === $n->nodeName) {
                $type->addCareTeam(FHIRClaimCareTeam::xmlUnserialize($n));
            } elseif (self::FIELD_INFORMATION === $n->nodeName) {
                $type->addInformation(FHIRClaimInformation::xmlUnserialize($n));
            } elseif (self::FIELD_DIAGNOSIS === $n->nodeName) {
                $type->addDiagnosis(FHIRClaimDiagnosis::xmlUnserialize($n));
            } elseif (self::FIELD_PROCEDURE === $n->nodeName) {
                $type->addProcedure(FHIRClaimProcedure::xmlUnserialize($n));
            } elseif (self::FIELD_INSURANCE === $n->nodeName) {
                $type->addInsurance(FHIRClaimInsurance::xmlUnserialize($n));
            } elseif (self::FIELD_ACCIDENT === $n->nodeName) {
                $type->setAccident(FHIRClaimAccident::xmlUnserialize($n));
            } elseif (self::FIELD_EMPLOYMENT_IMPACTED === $n->nodeName) {
                $type->setEmploymentImpacted(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_HOSPITALIZATION === $n->nodeName) {
                $type->setHospitalization(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_ITEM === $n->nodeName) {
                $type->addItem(FHIRClaimItem::xmlUnserialize($n));
            } elseif (self::FIELD_TOTAL === $n->nodeName) {
                $type->setTotal(FHIRMoney::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_META === $n->nodeName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n));
            } elseif (self::FIELD_IMPLICIT_RULES === $n->nodeName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CREATED);
        if (null !== $n) {
            $pt = $type->getCreated();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCreated($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_IMPLICIT_RULES);
        if (null !== $n) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setImplicitRules($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LANGUAGE);
        if (null !== $n) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLanguage($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSubType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUB_TYPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getUse())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_USE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPatient())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBillablePeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BILLABLE_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCreated())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CREATED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEnterer())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ENTERER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInsurer())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INSURER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProvider())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PROVIDER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOrganization())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ORGANIZATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPriority())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRIORITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFundsReserve())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FUNDS_RESERVE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getRelated())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RELATED);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPrescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOriginalPrescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ORIGINAL_PRESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPayee())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PAYEE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReferral())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REFERRAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFacility())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FACILITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCareTeam())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CARE_TEAM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getInformation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INFORMATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDiagnosis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DIAGNOSIS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getProcedure())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROCEDURE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INSURANCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getAccident())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ACCIDENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEmploymentImpacted())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EMPLOYMENT_IMPACTED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getHospitalization())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_HOSPITALIZATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ITEM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getTotal())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TOTAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_STATUS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRFinancialResourceStatusCodes::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_STATUS_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getSubType())) {
            $a[self::FIELD_SUB_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUB_TYPE][] = $v;
            }
        }
        if (null !== ($v = $this->getUse())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_USE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRUse::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_USE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getBillablePeriod())) {
            $a[self::FIELD_BILLABLE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_CREATED] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDateTime::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_CREATED_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getEnterer())) {
            $a[self::FIELD_ENTERER] = $v;
        }
        if (null !== ($v = $this->getInsurer())) {
            $a[self::FIELD_INSURER] = $v;
        }
        if (null !== ($v = $this->getProvider())) {
            $a[self::FIELD_PROVIDER] = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a[self::FIELD_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v;
        }
        if (null !== ($v = $this->getFundsReserve())) {
            $a[self::FIELD_FUNDS_RESERVE] = $v;
        }
        if ([] !== ($vs = $this->getRelated())) {
            $a[self::FIELD_RELATED] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RELATED][] = $v;
            }
        }
        if (null !== ($v = $this->getPrescription())) {
            $a[self::FIELD_PRESCRIPTION] = $v;
        }
        if (null !== ($v = $this->getOriginalPrescription())) {
            $a[self::FIELD_ORIGINAL_PRESCRIPTION] = $v;
        }
        if (null !== ($v = $this->getPayee())) {
            $a[self::FIELD_PAYEE] = $v;
        }
        if (null !== ($v = $this->getReferral())) {
            $a[self::FIELD_REFERRAL] = $v;
        }
        if (null !== ($v = $this->getFacility())) {
            $a[self::FIELD_FACILITY] = $v;
        }
        if ([] !== ($vs = $this->getCareTeam())) {
            $a[self::FIELD_CARE_TEAM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CARE_TEAM][] = $v;
            }
        }
        if ([] !== ($vs = $this->getInformation())) {
            $a[self::FIELD_INFORMATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INFORMATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getDiagnosis())) {
            $a[self::FIELD_DIAGNOSIS] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DIAGNOSIS][] = $v;
            }
        }
        if ([] !== ($vs = $this->getProcedure())) {
            $a[self::FIELD_PROCEDURE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROCEDURE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            $a[self::FIELD_INSURANCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INSURANCE][] = $v;
            }
        }
        if (null !== ($v = $this->getAccident())) {
            $a[self::FIELD_ACCIDENT] = $v;
        }
        if (null !== ($v = $this->getEmploymentImpacted())) {
            $a[self::FIELD_EMPLOYMENT_IMPACTED] = $v;
        }
        if (null !== ($v = $this->getHospitalization())) {
            $a[self::FIELD_HOSPITALIZATION] = $v;
        }
        if ([] !== ($vs = $this->getItem())) {
            $a[self::FIELD_ITEM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ITEM][] = $v;
            }
        }
        if (null !== ($v = $this->getTotal())) {
            $a[self::FIELD_TOTAL] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}