<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 7th, 2019 22:31+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUse;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRClaim
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRClaim extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACCIDENT = 'accident';
    const FIELD_BILLABLE_PERIOD = 'billablePeriod';
    const FIELD_CARE_TEAM = 'careTeam';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_DIAGNOSIS = 'diagnosis';
    const FIELD_EMPLOYMENT_IMPACTED = 'employmentImpacted';
    const FIELD_ENTERER = 'enterer';
    const FIELD_FACILITY = 'facility';
    const FIELD_FUNDS_RESERVE = 'fundsReserve';
    const FIELD_HOSPITALIZATION = 'hospitalization';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INFORMATION = 'information';
    const FIELD_INSURANCE = 'insurance';
    const FIELD_INSURER = 'insurer';
    const FIELD_ITEM = 'item';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_ORIGINAL_PRESCRIPTION = 'originalPrescription';
    const FIELD_PATIENT = 'patient';
    const FIELD_PAYEE = 'payee';
    const FIELD_PRESCRIPTION = 'prescription';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PROCEDURE = 'procedure';
    const FIELD_PROVIDER = 'provider';
    const FIELD_REFERRAL = 'referral';
    const FIELD_RELATED = 'related';
    const FIELD_STATUS = 'status';
    const FIELD_SUB_TYPE = 'subType';
    const FIELD_TOTAL = 'total';
    const FIELD_TYPE = 'type';
    const FIELD_USE = 'use';

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * An accident which resulted in the need for healthcare services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident
     */
    private $accident = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The billable period for which charges are being submitted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    private $billablePeriod = null;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The members of the team who provided the overall service as well as their role
     * and whether responsible and qualifications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam[]
     */
    private $careTeam = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    private $created = null;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * List of patient diagnosis for which care is sought.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[]
     */
    private $diagnosis = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was precluded from working
     * due to the treatable condition(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    private $employmentImpacted = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $enterer = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $facility = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * In the case of a Pre-Determination/Pre-Authorization the provider may request
     * that funds in the amount of the expected Benefit be reserved ('Patient' or
     * 'Provider') to pay for the Benefits determined on the subsequent claim(s).
     * 'None' explicitly indicates no funds reserving is requested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $fundsReserve = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was confined to a treatment
     * center.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    private $hospitalization = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: claim number, pre-determination or
     * pre-authorization number.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
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
    private $information = [];
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance[]
     */
    private $insurance = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Insurer who is target of the request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $insurer = null;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * First tier of goods and services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[]
     */
    private $item = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $organization = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
    private $originalPrescription = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $patient = null;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The party to be reimbursed for the services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee
     */
    private $payee = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $prescription = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Immediate (STAT), best effort (NORMAL), deferred (DEFER).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $priority = null;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Ordered list of patient procedures performed to support the adjudication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure[]
     */
    private $procedure = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $provider = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The referral resource which lists the date, practitioner, reason and other
     * supporting information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $referral = null;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Other claims which are related to this claim such as prior claim versions or for
     * related services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated[]
     */
    private $related = [];
    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    private $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim subtype codes which may convey Inpatient vs
     * Outpatient and/or a specialty service. In the US the BillType.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $subType = [];
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The total value of the claim.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $total = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;
    /**
     * Complete, proposed, exploratory, other
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory
     * (Pre-determination).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUse
     */
    private $use = null;

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
        if (isset($data[self::FIELD_ACCIDENT])) {
            if ($data[self::FIELD_ACCIDENT] instanceof FHIRClaimAccident) {
                $this->setAccident($data[self::FIELD_ACCIDENT]);
            } else {
                $this->setAccident(new FHIRClaimAccident($data[self::FIELD_ACCIDENT]));
            }
        }
        if (isset($data[self::FIELD_BILLABLE_PERIOD])) {
            if ($data[self::FIELD_BILLABLE_PERIOD] instanceof FHIRPeriod) {
                $this->setBillablePeriod($data[self::FIELD_BILLABLE_PERIOD]);
            } else {
                $this->setBillablePeriod(new FHIRPeriod($data[self::FIELD_BILLABLE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_CARE_TEAM])) {
            if (is_array($data[self::FIELD_CARE_TEAM])) {
                foreach($data[self::FIELD_CARE_TEAM] as $v) {
                    if ($v instanceof FHIRClaimCareTeam) {
                        $this->addCareTeam($v);
                    } else {
                        $this->addCareTeam(new FHIRClaimCareTeam($v));
                    }
                }
            } else if ($data[self::FIELD_CARE_TEAM] instanceof FHIRClaimCareTeam) {
                $this->addCareTeam($data[self::FIELD_CARE_TEAM]);
            } else {
                $this->addCareTeam(new FHIRClaimCareTeam($data[self::FIELD_CARE_TEAM]));
            }
        }
        if (isset($data[self::FIELD_CREATED])) {
            $ext = (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT]))
                ? $data[self::FIELD_CREATED_EXT]
                : null;
            if ($data[self::FIELD_CREATED] instanceof FHIRDateTime) {
                $this->setCreated($data[self::FIELD_CREATED]);
            } elseif ($ext && is_scalar($data[self::FIELD_CREATED])) {
                $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_CREATED]] + $ext));
            } else {
                $this->setCreated(new FHIRDateTime($data[self::FIELD_CREATED]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSIS])) {
            if (is_array($data[self::FIELD_DIAGNOSIS])) {
                foreach($data[self::FIELD_DIAGNOSIS] as $v) {
                    if ($v instanceof FHIRClaimDiagnosis) {
                        $this->addDiagnosis($v);
                    } else {
                        $this->addDiagnosis(new FHIRClaimDiagnosis($v));
                    }
                }
            } else if ($data[self::FIELD_DIAGNOSIS] instanceof FHIRClaimDiagnosis) {
                $this->addDiagnosis($data[self::FIELD_DIAGNOSIS]);
            } else {
                $this->addDiagnosis(new FHIRClaimDiagnosis($data[self::FIELD_DIAGNOSIS]));
            }
        }
        if (isset($data[self::FIELD_EMPLOYMENT_IMPACTED])) {
            if ($data[self::FIELD_EMPLOYMENT_IMPACTED] instanceof FHIRPeriod) {
                $this->setEmploymentImpacted($data[self::FIELD_EMPLOYMENT_IMPACTED]);
            } else {
                $this->setEmploymentImpacted(new FHIRPeriod($data[self::FIELD_EMPLOYMENT_IMPACTED]));
            }
        }
        if (isset($data[self::FIELD_ENTERER])) {
            if ($data[self::FIELD_ENTERER] instanceof FHIRReference) {
                $this->setEnterer($data[self::FIELD_ENTERER]);
            } else {
                $this->setEnterer(new FHIRReference($data[self::FIELD_ENTERER]));
            }
        }
        if (isset($data[self::FIELD_FACILITY])) {
            if ($data[self::FIELD_FACILITY] instanceof FHIRReference) {
                $this->setFacility($data[self::FIELD_FACILITY]);
            } else {
                $this->setFacility(new FHIRReference($data[self::FIELD_FACILITY]));
            }
        }
        if (isset($data[self::FIELD_FUNDS_RESERVE])) {
            if ($data[self::FIELD_FUNDS_RESERVE] instanceof FHIRCodeableConcept) {
                $this->setFundsReserve($data[self::FIELD_FUNDS_RESERVE]);
            } else {
                $this->setFundsReserve(new FHIRCodeableConcept($data[self::FIELD_FUNDS_RESERVE]));
            }
        }
        if (isset($data[self::FIELD_HOSPITALIZATION])) {
            if ($data[self::FIELD_HOSPITALIZATION] instanceof FHIRPeriod) {
                $this->setHospitalization($data[self::FIELD_HOSPITALIZATION]);
            } else {
                $this->setHospitalization(new FHIRPeriod($data[self::FIELD_HOSPITALIZATION]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INFORMATION])) {
            if (is_array($data[self::FIELD_INFORMATION])) {
                foreach($data[self::FIELD_INFORMATION] as $v) {
                    if ($v instanceof FHIRClaimInformation) {
                        $this->addInformation($v);
                    } else {
                        $this->addInformation(new FHIRClaimInformation($v));
                    }
                }
            } else if ($data[self::FIELD_INFORMATION] instanceof FHIRClaimInformation) {
                $this->addInformation($data[self::FIELD_INFORMATION]);
            } else {
                $this->addInformation(new FHIRClaimInformation($data[self::FIELD_INFORMATION]));
            }
        }
        if (isset($data[self::FIELD_INSURANCE])) {
            if (is_array($data[self::FIELD_INSURANCE])) {
                foreach($data[self::FIELD_INSURANCE] as $v) {
                    if ($v instanceof FHIRClaimInsurance) {
                        $this->addInsurance($v);
                    } else {
                        $this->addInsurance(new FHIRClaimInsurance($v));
                    }
                }
            } else if ($data[self::FIELD_INSURANCE] instanceof FHIRClaimInsurance) {
                $this->addInsurance($data[self::FIELD_INSURANCE]);
            } else {
                $this->addInsurance(new FHIRClaimInsurance($data[self::FIELD_INSURANCE]));
            }
        }
        if (isset($data[self::FIELD_INSURER])) {
            if ($data[self::FIELD_INSURER] instanceof FHIRReference) {
                $this->setInsurer($data[self::FIELD_INSURER]);
            } else {
                $this->setInsurer(new FHIRReference($data[self::FIELD_INSURER]));
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if ($v instanceof FHIRClaimItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRClaimItem($v));
                    }
                }
            } else if ($data[self::FIELD_ITEM] instanceof FHIRClaimItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRClaimItem($data[self::FIELD_ITEM]));
            }
        }
        if (isset($data[self::FIELD_ORGANIZATION])) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIRReference) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIRReference($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_ORIGINAL_PRESCRIPTION])) {
            if ($data[self::FIELD_ORIGINAL_PRESCRIPTION] instanceof FHIRReference) {
                $this->setOriginalPrescription($data[self::FIELD_ORIGINAL_PRESCRIPTION]);
            } else {
                $this->setOriginalPrescription(new FHIRReference($data[self::FIELD_ORIGINAL_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PAYEE])) {
            if ($data[self::FIELD_PAYEE] instanceof FHIRClaimPayee) {
                $this->setPayee($data[self::FIELD_PAYEE]);
            } else {
                $this->setPayee(new FHIRClaimPayee($data[self::FIELD_PAYEE]));
            }
        }
        if (isset($data[self::FIELD_PRESCRIPTION])) {
            if ($data[self::FIELD_PRESCRIPTION] instanceof FHIRReference) {
                $this->setPrescription($data[self::FIELD_PRESCRIPTION]);
            } else {
                $this->setPrescription(new FHIRReference($data[self::FIELD_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY])) {
            if ($data[self::FIELD_PRIORITY] instanceof FHIRCodeableConcept) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } else {
                $this->setPriority(new FHIRCodeableConcept($data[self::FIELD_PRIORITY]));
            }
        }
        if (isset($data[self::FIELD_PROCEDURE])) {
            if (is_array($data[self::FIELD_PROCEDURE])) {
                foreach($data[self::FIELD_PROCEDURE] as $v) {
                    if ($v instanceof FHIRClaimProcedure) {
                        $this->addProcedure($v);
                    } else {
                        $this->addProcedure(new FHIRClaimProcedure($v));
                    }
                }
            } else if ($data[self::FIELD_PROCEDURE] instanceof FHIRClaimProcedure) {
                $this->addProcedure($data[self::FIELD_PROCEDURE]);
            } else {
                $this->addProcedure(new FHIRClaimProcedure($data[self::FIELD_PROCEDURE]));
            }
        }
        if (isset($data[self::FIELD_PROVIDER])) {
            if ($data[self::FIELD_PROVIDER] instanceof FHIRReference) {
                $this->setProvider($data[self::FIELD_PROVIDER]);
            } else {
                $this->setProvider(new FHIRReference($data[self::FIELD_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_REFERRAL])) {
            if ($data[self::FIELD_REFERRAL] instanceof FHIRReference) {
                $this->setReferral($data[self::FIELD_REFERRAL]);
            } else {
                $this->setReferral(new FHIRReference($data[self::FIELD_REFERRAL]));
            }
        }
        if (isset($data[self::FIELD_RELATED])) {
            if (is_array($data[self::FIELD_RELATED])) {
                foreach($data[self::FIELD_RELATED] as $v) {
                    if ($v instanceof FHIRClaimRelated) {
                        $this->addRelated($v);
                    } else {
                        $this->addRelated(new FHIRClaimRelated($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED] instanceof FHIRClaimRelated) {
                $this->addRelated($data[self::FIELD_RELATED]);
            } else {
                $this->addRelated(new FHIRClaimRelated($data[self::FIELD_RELATED]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRFinancialResourceStatusCodes) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRFinancialResourceStatusCodes($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUB_TYPE])) {
            if (is_array($data[self::FIELD_SUB_TYPE])) {
                foreach($data[self::FIELD_SUB_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSubType($v);
                    } else {
                        $this->addSubType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SUB_TYPE] instanceof FHIRCodeableConcept) {
                $this->addSubType($data[self::FIELD_SUB_TYPE]);
            } else {
                $this->addSubType(new FHIRCodeableConcept($data[self::FIELD_SUB_TYPE]));
            }
        }
        if (isset($data[self::FIELD_TOTAL])) {
            if ($data[self::FIELD_TOTAL] instanceof FHIRMoney) {
                $this->setTotal($data[self::FIELD_TOTAL]);
            } else {
                $this->setTotal(new FHIRMoney($data[self::FIELD_TOTAL]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_USE])) {
            if ($data[self::FIELD_USE] instanceof FHIRUse) {
                $this->setUse($data[self::FIELD_USE]);
            } else {
                $this->setUse(new FHIRUse($data[self::FIELD_USE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @return string
     */
    public function getFHIRXMLElementDefinition()
    {
        $xmlns = $this->getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Claim{$xmlns}></Claim>";
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setAccident(FHIRClaimAccident $accident = null)
    {
        $this->accident = $accident;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The billable period for which charges are being submitted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $billablePeriod
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setBillablePeriod(FHIRPeriod $billablePeriod = null)
    {
        $this->billablePeriod = $billablePeriod;
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addCareTeam(FHIRClaimCareTeam $careTeam = null)
    {
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setCareTeam(array $careTeam = [])
    {
        $this->careTeam = [];
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $created
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setCreated($created = null)
    {
        if (null === $created) {
            $this->created = null;
            return $this;
        }
        if ($created instanceof FHIRDateTime) {
            $this->created = $created;
            return $this;
        }
        $this->created = new FHIRDateTime($created);
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addDiagnosis(FHIRClaimDiagnosis $diagnosis = null)
    {
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setDiagnosis(array $diagnosis = [])
    {
        $this->diagnosis = [];
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was precluded from working
     * due to the treatable condition(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $employmentImpacted
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setEmploymentImpacted(FHIRPeriod $employmentImpacted = null)
    {
        $this->employmentImpacted = $employmentImpacted;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $enterer
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setEnterer(FHIRReference $enterer = null)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $facility
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setFacility(FHIRReference $facility = null)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * In the case of a Pre-Determination/Pre-Authorization the provider may request
     * that funds in the amount of the expected Benefit be reserved ('Patient' or
     * 'Provider') to pay for the Benefits determined on the subsequent claim(s).
     * 'None' explicitly indicates no funds reserving is requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $fundsReserve
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setFundsReserve(FHIRCodeableConcept $fundsReserve = null)
    {
        $this->fundsReserve = $fundsReserve;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The start and optional end dates of when the patient was confined to a treatment
     * center.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $hospitalization
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setHospitalization(FHIRPeriod $hospitalization = null)
    {
        $this->hospitalization = $hospitalization;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: claim number, pre-determination or
     * pre-authorization number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: claim number, pre-determination or
     * pre-authorization number.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addInformation(FHIRClaimInformation $information = null)
    {
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setInformation(array $information = [])
    {
        $this->information = [];
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addInsurance(FHIRClaimInsurance $insurance = null)
    {
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setInsurance(array $insurance = [])
    {
        $this->insurance = [];
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Insurer who is target of the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $insurer
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setInsurer(FHIRReference $insurer = null)
    {
        $this->insurer = $insurer;
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addItem(FHIRClaimItem $item = null)
    {
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setItem(array $item = [])
    {
        $this->item = [];
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $organization
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setOriginalPrescription(FHIRReference $originalPrescription = null)
    {
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setPayee(FHIRClaimPayee $payee = null)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $prescription
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setPrescription(FHIRReference $prescription = null)
    {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Immediate (STAT), best effort (NORMAL), deferred (DEFER).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $priority
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setPriority(FHIRCodeableConcept $priority = null)
    {
        $this->priority = $priority;
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addProcedure(FHIRClaimProcedure $procedure = null)
    {
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setProcedure(array $procedure = [])
    {
        $this->procedure = [];
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $provider
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setProvider(FHIRReference $provider = null)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The referral resource which lists the date, practitioner, reason and other
     * supporting information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $referral
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setReferral(FHIRReference $referral = null)
    {
        $this->referral = $referral;
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addRelated(FHIRClaimRelated $related = null)
    {
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setRelated(array $related = [])
    {
        $this->related = [];
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
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setStatus(FHIRFinancialResourceStatusCodes $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim subtype codes which may convey Inpatient vs
     * Outpatient and/or a specialty service. In the US the BillType.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $subType
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addSubType(FHIRCodeableConcept $subType = null)
    {
        $this->subType[] = $subType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim subtype codes which may convey Inpatient vs
     * Outpatient and/or a specialty service. In the US the BillType.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $subType
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setSubType(array $subType = [])
    {
        $this->subType = [];
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
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The total value of the claim.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $total
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setTotal(FHIRMoney $total = null)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The category of claim, eg, oral, pharmacy, vision, insitutional, professional.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Complete, proposed, exploratory, other
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory
     * (Pre-determination).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUse $use
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setUse(FHIRUse $use = null)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRClaim::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaim::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRClaim);
        } elseif (!is_object($type) || !($type instanceof FHIRClaim)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaim::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->accident)) {
            $type->setAccident(FHIRClaimAccident::xmlUnserialize($children->accident));
        }
        if (isset($children->billablePeriod)) {
            $type->setBillablePeriod(FHIRPeriod::xmlUnserialize($children->billablePeriod));
        }
        if (isset($children->careTeam)) {
            foreach($children->careTeam as $child) {
                $type->addCareTeam(FHIRClaimCareTeam::xmlUnserialize($child));
            }
        }
        if (isset($attributes->created)) {
            $type->setCreated((string)$attributes->created);
        }
        if (isset($children->created)) {
            $type->setCreated(FHIRDateTime::xmlUnserialize($children->created));
        }
        if (isset($children->diagnosis)) {
            foreach($children->diagnosis as $child) {
                $type->addDiagnosis(FHIRClaimDiagnosis::xmlUnserialize($child));
            }
        }
        if (isset($children->employmentImpacted)) {
            $type->setEmploymentImpacted(FHIRPeriod::xmlUnserialize($children->employmentImpacted));
        }
        if (isset($children->enterer)) {
            $type->setEnterer(FHIRReference::xmlUnserialize($children->enterer));
        }
        if (isset($children->facility)) {
            $type->setFacility(FHIRReference::xmlUnserialize($children->facility));
        }
        if (isset($children->fundsReserve)) {
            $type->setFundsReserve(FHIRCodeableConcept::xmlUnserialize($children->fundsReserve));
        }
        if (isset($children->hospitalization)) {
            $type->setHospitalization(FHIRPeriod::xmlUnserialize($children->hospitalization));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->information)) {
            foreach($children->information as $child) {
                $type->addInformation(FHIRClaimInformation::xmlUnserialize($child));
            }
        }
        if (isset($children->insurance)) {
            foreach($children->insurance as $child) {
                $type->addInsurance(FHIRClaimInsurance::xmlUnserialize($child));
            }
        }
        if (isset($children->insurer)) {
            $type->setInsurer(FHIRReference::xmlUnserialize($children->insurer));
        }
        if (isset($children->item)) {
            foreach($children->item as $child) {
                $type->addItem(FHIRClaimItem::xmlUnserialize($child));
            }
        }
        if (isset($children->organization)) {
            $type->setOrganization(FHIRReference::xmlUnserialize($children->organization));
        }
        if (isset($children->originalPrescription)) {
            $type->setOriginalPrescription(FHIRReference::xmlUnserialize($children->originalPrescription));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->payee)) {
            $type->setPayee(FHIRClaimPayee::xmlUnserialize($children->payee));
        }
        if (isset($children->prescription)) {
            $type->setPrescription(FHIRReference::xmlUnserialize($children->prescription));
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRCodeableConcept::xmlUnserialize($children->priority));
        }
        if (isset($children->procedure)) {
            foreach($children->procedure as $child) {
                $type->addProcedure(FHIRClaimProcedure::xmlUnserialize($child));
            }
        }
        if (isset($children->provider)) {
            $type->setProvider(FHIRReference::xmlUnserialize($children->provider));
        }
        if (isset($children->referral)) {
            $type->setReferral(FHIRReference::xmlUnserialize($children->referral));
        }
        if (isset($children->related)) {
            foreach($children->related as $child) {
                $type->addRelated(FHIRClaimRelated::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($children->status));
        }
        if (isset($children->subType)) {
            foreach($children->subType as $child) {
                $type->addSubType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->total)) {
            $type->setTotal(FHIRMoney::xmlUnserialize($children->total));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->use)) {
            $type->setUse(FHIRUse::xmlUnserialize($children->use));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAccident())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACCIDENT, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getBillablePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BILLABLE_PERIOD, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getCareTeam())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CARE_TEAM, null, $v->getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCreated())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CREATED, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getDiagnosis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DIAGNOSIS, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getEmploymentImpacted())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EMPLOYMENT_IMPACTED, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEnterer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENTERER, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getFacility())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FACILITY, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getFundsReserve())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FUNDS_RESERVE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getHospitalization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HOSPITALIZATION, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getInformation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INFORMATION, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSURANCE, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getInsurer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INSURER, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANIZATION, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOriginalPrescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORIGINAL_PRESCRIPTION, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPayee())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYEE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPrescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRESCRIPTION, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getProcedure())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROCEDURE, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getProvider())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROVIDER, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getReferral())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERRAL, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getRelated())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSubType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_TYPE, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getTotal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TOTAL, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USE, null, $v->getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAccident())) {
            $a[self::FIELD_ACCIDENT] = $v;
        }
        if (null !== ($v = $this->getBillablePeriod())) {
            $a[self::FIELD_BILLABLE_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getCareTeam())) {
            $a[self::FIELD_CARE_TEAM] = $vs;
        }
        if (null !== ($v = $this->getCreated())) {
            $a[self::FIELD_CREATED] = (string)$v;
            $a[self::FIELD_CREATED_EXT] = $v;
        }
        if ([] !== ($vs = $this->getDiagnosis())) {
            $a[self::FIELD_DIAGNOSIS] = $vs;
        }
        if (null !== ($v = $this->getEmploymentImpacted())) {
            $a[self::FIELD_EMPLOYMENT_IMPACTED] = $v;
        }
        if (null !== ($v = $this->getEnterer())) {
            $a[self::FIELD_ENTERER] = $v;
        }
        if (null !== ($v = $this->getFacility())) {
            $a[self::FIELD_FACILITY] = $v;
        }
        if (null !== ($v = $this->getFundsReserve())) {
            $a[self::FIELD_FUNDS_RESERVE] = $v;
        }
        if (null !== ($v = $this->getHospitalization())) {
            $a[self::FIELD_HOSPITALIZATION] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getInformation())) {
            $a[self::FIELD_INFORMATION] = $vs;
        }
        if ([] !== ($vs = $this->getInsurance())) {
            $a[self::FIELD_INSURANCE] = $vs;
        }
        if (null !== ($v = $this->getInsurer())) {
            $a[self::FIELD_INSURER] = $v;
        }
        if ([] !== ($vs = $this->getItem())) {
            $a[self::FIELD_ITEM] = $vs;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a[self::FIELD_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getOriginalPrescription())) {
            $a[self::FIELD_ORIGINAL_PRESCRIPTION] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPayee())) {
            $a[self::FIELD_PAYEE] = $v;
        }
        if (null !== ($v = $this->getPrescription())) {
            $a[self::FIELD_PRESCRIPTION] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v;
        }
        if ([] !== ($vs = $this->getProcedure())) {
            $a[self::FIELD_PROCEDURE] = $vs;
        }
        if (null !== ($v = $this->getProvider())) {
            $a[self::FIELD_PROVIDER] = $v;
        }
        if (null !== ($v = $this->getReferral())) {
            $a[self::FIELD_REFERRAL] = $v;
        }
        if ([] !== ($vs = $this->getRelated())) {
            $a[self::FIELD_RELATED] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getSubType())) {
            $a[self::FIELD_SUB_TYPE] = $vs;
        }
        if (null !== ($v = $this->getTotal())) {
            $a[self::FIELD_TOTAL] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUse())) {
            $a[self::FIELD_USE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}