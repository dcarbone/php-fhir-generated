<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClaimType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUse;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRClaim
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRClaim extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACCIDENT = 'accident';
    const FIELD_ACCIDENT_EXT = '_accident';
    const FIELD_ACCIDENT_TYPE = 'accidentType';
    const FIELD_ADDITIONAL_MATERIALS = 'additionalMaterials';
    const FIELD_CONDITION = 'condition';
    const FIELD_COVERAGE = 'coverage';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_DIAGNOSIS = 'diagnosis';
    const FIELD_ENTERER = 'enterer';
    const FIELD_EXCEPTION = 'exception';
    const FIELD_FACILITY = 'facility';
    const FIELD_FUNDS_RESERVE = 'fundsReserve';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_INTERVENTION_EXCEPTION = 'interventionException';
    const FIELD_ITEM = 'item';
    const FIELD_MISSING_TEETH = 'missingTeeth';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_ORIGINAL_PRESCRIPTION = 'originalPrescription';
    const FIELD_ORIGINAL_RULESET = 'originalRuleset';
    const FIELD_PATIENT = 'patient';
    const FIELD_PAYEE = 'payee';
    const FIELD_PRESCRIPTION = 'prescription';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PROVIDER = 'provider';
    const FIELD_REFERRAL = 'referral';
    const FIELD_RULESET = 'ruleset';
    const FIELD_SCHOOL = 'school';
    const FIELD_SCHOOL_EXT = '_school';
    const FIELD_TARGET = 'target';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_USE = 'use';
    const FIELD_USE_EXT = '_use';

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date of an accident which these services are addressing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    private $accident = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Type of accident: work, auto, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $accidentType = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code to indicate that Xrays, images, emails, documents, models or attachments
     * are being sent in support of this submission.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    private $additionalMaterials = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * List of patient conditions for which care is sought.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    private $condition = [];
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage[]
     */
    private $coverage = [];
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    private $created = null;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[]
     */
    private $diagnosis = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $enterer = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Factors which may influence the applicability of coverage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    private $exception = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $facility = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * In the case of a Pre-Determination/Pre-Authorization the provider may request
     * that funds in the amount of the expected Benefit be reserved ('Patient' or
     * 'Provider') to pay for the Benefits determined on the subsequent claim(s).
     * 'None' explicitly indicates no funds reserving is requested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $fundsReserve = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A list of intervention and exception codes which may influence the adjudication
     * of the claim.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    private $interventionException = [];
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * First tier of goods and services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[]
     */
    private $item = [];
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * A list of teeth which would be expected but are not found due to having been
     * previously extracted or for other reasons.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth[]
     */
    private $missingTeeth = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $organization = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Original prescription to support the dispensing of pharmacy services,
     * medications or products.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $originalPrescription = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The version of the specification from which the original instance was created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $originalRuleset = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $patient = null;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The party to be reimbursed for the services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee
     */
    private $payee = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $prescription = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Immediate (stat), best effort (normal), deferred (deferred).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $priority = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $referral = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The version of the specification on which this instance relies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $ruleset = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Name of school for over-aged dependents.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $school = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Insurer Identifier, typical BIN number (6 digit).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $target = null;
    /**
     * The type or discipline-style of the claim.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The category of claim this is.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClaimType
     */
    private $type = null;
    /**
     * Complete, proposed, exploratory, other.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory
     * (Pre-determination).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUse
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
            $ext = (isset($data[self::FIELD_ACCIDENT_EXT]) && is_array($data[self::FIELD_ACCIDENT_EXT]))
                ? $data[self::FIELD_ACCIDENT_EXT]
                : null;
            if ($data[self::FIELD_ACCIDENT] instanceof FHIRDate) {
                $this->setAccident($data[self::FIELD_ACCIDENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACCIDENT])) {
                $this->setAccident(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_ACCIDENT]] + $ext));
            } else {
                $this->setAccident(new FHIRDate($data[self::FIELD_ACCIDENT]));
            }
        }
        if (isset($data[self::FIELD_ACCIDENT_TYPE])) {
            if ($data[self::FIELD_ACCIDENT_TYPE] instanceof FHIRCoding) {
                $this->setAccidentType($data[self::FIELD_ACCIDENT_TYPE]);
            } else {
                $this->setAccidentType(new FHIRCoding($data[self::FIELD_ACCIDENT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ADDITIONAL_MATERIALS])) {
            if (is_array($data[self::FIELD_ADDITIONAL_MATERIALS])) {
                foreach($data[self::FIELD_ADDITIONAL_MATERIALS] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addAdditionalMaterials($v);
                    } else {
                        $this->addAdditionalMaterials(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_ADDITIONAL_MATERIALS] instanceof FHIRCoding) {
                $this->addAdditionalMaterials($data[self::FIELD_ADDITIONAL_MATERIALS]);
            } else {
                $this->addAdditionalMaterials(new FHIRCoding($data[self::FIELD_ADDITIONAL_MATERIALS]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            if (is_array($data[self::FIELD_CONDITION])) {
                foreach($data[self::FIELD_CONDITION] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addCondition($v);
                    } else {
                        $this->addCondition(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_CONDITION] instanceof FHIRCoding) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->addCondition(new FHIRCoding($data[self::FIELD_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_COVERAGE])) {
            if (is_array($data[self::FIELD_COVERAGE])) {
                foreach($data[self::FIELD_COVERAGE] as $v) {
                    if ($v instanceof FHIRClaimCoverage) {
                        $this->addCoverage($v);
                    } else {
                        $this->addCoverage(new FHIRClaimCoverage($v));
                    }
                }
            } else if ($data[self::FIELD_COVERAGE] instanceof FHIRClaimCoverage) {
                $this->addCoverage($data[self::FIELD_COVERAGE]);
            } else {
                $this->addCoverage(new FHIRClaimCoverage($data[self::FIELD_COVERAGE]));
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
        if (isset($data[self::FIELD_ENTERER])) {
            if ($data[self::FIELD_ENTERER] instanceof FHIRReference) {
                $this->setEnterer($data[self::FIELD_ENTERER]);
            } else {
                $this->setEnterer(new FHIRReference($data[self::FIELD_ENTERER]));
            }
        }
        if (isset($data[self::FIELD_EXCEPTION])) {
            if (is_array($data[self::FIELD_EXCEPTION])) {
                foreach($data[self::FIELD_EXCEPTION] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addException($v);
                    } else {
                        $this->addException(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_EXCEPTION] instanceof FHIRCoding) {
                $this->addException($data[self::FIELD_EXCEPTION]);
            } else {
                $this->addException(new FHIRCoding($data[self::FIELD_EXCEPTION]));
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
            if ($data[self::FIELD_FUNDS_RESERVE] instanceof FHIRCoding) {
                $this->setFundsReserve($data[self::FIELD_FUNDS_RESERVE]);
            } else {
                $this->setFundsReserve(new FHIRCoding($data[self::FIELD_FUNDS_RESERVE]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INTERVENTION_EXCEPTION])) {
            if (is_array($data[self::FIELD_INTERVENTION_EXCEPTION])) {
                foreach($data[self::FIELD_INTERVENTION_EXCEPTION] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addInterventionException($v);
                    } else {
                        $this->addInterventionException(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_INTERVENTION_EXCEPTION] instanceof FHIRCoding) {
                $this->addInterventionException($data[self::FIELD_INTERVENTION_EXCEPTION]);
            } else {
                $this->addInterventionException(new FHIRCoding($data[self::FIELD_INTERVENTION_EXCEPTION]));
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
        if (isset($data[self::FIELD_MISSING_TEETH])) {
            if (is_array($data[self::FIELD_MISSING_TEETH])) {
                foreach($data[self::FIELD_MISSING_TEETH] as $v) {
                    if ($v instanceof FHIRClaimMissingTeeth) {
                        $this->addMissingTeeth($v);
                    } else {
                        $this->addMissingTeeth(new FHIRClaimMissingTeeth($v));
                    }
                }
            } else if ($data[self::FIELD_MISSING_TEETH] instanceof FHIRClaimMissingTeeth) {
                $this->addMissingTeeth($data[self::FIELD_MISSING_TEETH]);
            } else {
                $this->addMissingTeeth(new FHIRClaimMissingTeeth($data[self::FIELD_MISSING_TEETH]));
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
        if (isset($data[self::FIELD_ORIGINAL_RULESET])) {
            if ($data[self::FIELD_ORIGINAL_RULESET] instanceof FHIRCoding) {
                $this->setOriginalRuleset($data[self::FIELD_ORIGINAL_RULESET]);
            } else {
                $this->setOriginalRuleset(new FHIRCoding($data[self::FIELD_ORIGINAL_RULESET]));
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
            if ($data[self::FIELD_PRIORITY] instanceof FHIRCoding) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } else {
                $this->setPriority(new FHIRCoding($data[self::FIELD_PRIORITY]));
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
        if (isset($data[self::FIELD_RULESET])) {
            if ($data[self::FIELD_RULESET] instanceof FHIRCoding) {
                $this->setRuleset($data[self::FIELD_RULESET]);
            } else {
                $this->setRuleset(new FHIRCoding($data[self::FIELD_RULESET]));
            }
        }
        if (isset($data[self::FIELD_SCHOOL])) {
            $ext = (isset($data[self::FIELD_SCHOOL_EXT]) && is_array($data[self::FIELD_SCHOOL_EXT]))
                ? $data[self::FIELD_SCHOOL_EXT]
                : null;
            if ($data[self::FIELD_SCHOOL] instanceof FHIRString) {
                $this->setSchool($data[self::FIELD_SCHOOL]);
            } elseif ($ext && is_scalar($data[self::FIELD_SCHOOL])) {
                $this->setSchool(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SCHOOL]] + $ext));
            } else {
                $this->setSchool(new FHIRString($data[self::FIELD_SCHOOL]));
            }
        }
        if (isset($data[self::FIELD_TARGET])) {
            if ($data[self::FIELD_TARGET] instanceof FHIRReference) {
                $this->setTarget($data[self::FIELD_TARGET]);
            } else {
                $this->setTarget(new FHIRReference($data[self::FIELD_TARGET]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRClaimType) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRClaimType([FHIRClaimType::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRClaimType($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_USE])) {
            $ext = (isset($data[self::FIELD_USE_EXT]) && is_array($data[self::FIELD_USE_EXT]))
                ? $data[self::FIELD_USE_EXT]
                : null;
            if ($data[self::FIELD_USE] instanceof FHIRUse) {
                $this->setUse($data[self::FIELD_USE]);
            } elseif ($ext && is_scalar($data[self::FIELD_USE])) {
                $this->setUse(new FHIRUse([FHIRUse::FIELD_VALUE => $data[self::FIELD_USE]] + $ext));
            } else {
                $this->setUse(new FHIRUse($data[self::FIELD_USE]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
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
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date of an accident which these services are addressing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    public function getAccident()
    {
        return $this->accident;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date of an accident which these services are addressing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate $accident
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setAccident($accident = null)
    {
        if (null === $accident) {
            $this->accident = null;
            return $this;
        }
        if ($accident instanceof FHIRDate) {
            $this->accident = $accident;
            return $this;
        }
        $this->accident = new FHIRDate($accident);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Type of accident: work, auto, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getAccidentType()
    {
        return $this->accidentType;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Type of accident: work, auto, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $accidentType
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setAccidentType(FHIRCoding $accidentType = null)
    {
        $this->accidentType = $accidentType;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code to indicate that Xrays, images, emails, documents, models or attachments
     * are being sent in support of this submission.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getAdditionalMaterials()
    {
        return $this->additionalMaterials;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code to indicate that Xrays, images, emails, documents, models or attachments
     * are being sent in support of this submission.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $additionalMaterials
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addAdditionalMaterials(FHIRCoding $additionalMaterials = null)
    {
        $this->additionalMaterials[] = $additionalMaterials;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Code to indicate that Xrays, images, emails, documents, models or attachments
     * are being sent in support of this submission.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $additionalMaterials
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setAdditionalMaterials(array $additionalMaterials = [])
    {
        $this->additionalMaterials = [];
        if ([] === $additionalMaterials) {
            return $this;
        }
        foreach($additionalMaterials as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addAdditionalMaterials($v);
            } else {
                $this->addAdditionalMaterials(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * List of patient conditions for which care is sought.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * List of patient conditions for which care is sought.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $condition
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addCondition(FHIRCoding $condition = null)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * List of patient conditions for which care is sought.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $condition
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setCondition(array $condition = [])
    {
        $this->condition = [];
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addCondition($v);
            } else {
                $this->addCondition(new FHIRCoding($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage $coverage
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addCoverage(FHIRClaimCoverage $coverage = null)
    {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage[] $coverage
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setCoverage(array $coverage = [])
    {
        $this->coverage = [];
        if ([] === $coverage) {
            return $this;
        }
        foreach($coverage as $v) {
            if ($v instanceof FHIRClaimCoverage) {
                $this->addCoverage($v);
            } else {
                $this->addCoverage(new FHIRClaimCoverage($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $created
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis $diagnosis
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[] $diagnosis
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $enterer
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setEnterer(FHIRReference $enterer = null)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Factors which may influence the applicability of coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Factors which may influence the applicability of coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $exception
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addException(FHIRCoding $exception = null)
    {
        $this->exception[] = $exception;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Factors which may influence the applicability of coverage.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $exception
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setException(array $exception = [])
    {
        $this->exception = [];
        if ([] === $exception) {
            return $this;
        }
        foreach($exception as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addException($v);
            } else {
                $this->addException(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $facility
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setFacility(FHIRReference $facility = null)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * In the case of a Pre-Determination/Pre-Authorization the provider may request
     * that funds in the amount of the expected Benefit be reserved ('Patient' or
     * 'Provider') to pay for the Benefits determined on the subsequent claim(s).
     * 'None' explicitly indicates no funds reserving is requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getFundsReserve()
    {
        return $this->fundsReserve;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * In the case of a Pre-Determination/Pre-Authorization the provider may request
     * that funds in the amount of the expected Benefit be reserved ('Patient' or
     * 'Provider') to pay for the Benefits determined on the subsequent claim(s).
     * 'None' explicitly indicates no funds reserving is requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $fundsReserve
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setFundsReserve(FHIRCoding $fundsReserve = null)
    {
        $this->fundsReserve = $fundsReserve;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
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
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A list of intervention and exception codes which may influence the adjudication
     * of the claim.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getInterventionException()
    {
        return $this->interventionException;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A list of intervention and exception codes which may influence the adjudication
     * of the claim.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $interventionException
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addInterventionException(FHIRCoding $interventionException = null)
    {
        $this->interventionException[] = $interventionException;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A list of intervention and exception codes which may influence the adjudication
     * of the claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $interventionException
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setInterventionException(array $interventionException = [])
    {
        $this->interventionException = [];
        if ([] === $interventionException) {
            return $this;
        }
        foreach($interventionException as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addInterventionException($v);
            } else {
                $this->addInterventionException(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * First tier of goods and services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem $item
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[] $item
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * A list of teeth which would be expected but are not found due to having been
     * previously extracted or for other reasons.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth[]
     */
    public function getMissingTeeth()
    {
        return $this->missingTeeth;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * A list of teeth which would be expected but are not found due to having been
     * previously extracted or for other reasons.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth $missingTeeth
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function addMissingTeeth(FHIRClaimMissingTeeth $missingTeeth = null)
    {
        $this->missingTeeth[] = $missingTeeth;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * A list of teeth which would be expected but are not found due to having been
     * previously extracted or for other reasons.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth[] $missingTeeth
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setMissingTeeth(array $missingTeeth = [])
    {
        $this->missingTeeth = [];
        if ([] === $missingTeeth) {
            return $this;
        }
        foreach($missingTeeth as $v) {
            if ($v instanceof FHIRClaimMissingTeeth) {
                $this->addMissingTeeth($v);
            } else {
                $this->addMissingTeeth(new FHIRClaimMissingTeeth($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $organization
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * Original prescription to support the dispensing of pharmacy services,
     * medications or products.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * Original prescription to support the dispensing of pharmacy services,
     * medications or products.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $originalPrescription
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setOriginalPrescription(FHIRReference $originalPrescription = null)
    {
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The version of the specification from which the original instance was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getOriginalRuleset()
    {
        return $this->originalRuleset;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The version of the specification from which the original instance was created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $originalRuleset
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setOriginalRuleset(FHIRCoding $originalRuleset = null)
    {
        $this->originalRuleset = $originalRuleset;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee $payee
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $prescription
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setPrescription(FHIRReference $prescription = null)
    {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Immediate (stat), best effort (normal), deferred (deferred).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Immediate (stat), best effort (normal), deferred (deferred).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $priority
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setPriority(FHIRCoding $priority = null)
    {
        $this->priority = $priority;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $provider
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $referral
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setReferral(FHIRReference $referral = null)
    {
        $this->referral = $referral;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The version of the specification on which this instance relies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getRuleset()
    {
        return $this->ruleset;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The version of the specification on which this instance relies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $ruleset
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setRuleset(FHIRCoding $ruleset = null)
    {
        $this->ruleset = $ruleset;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Name of school for over-aged dependents.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Name of school for over-aged dependents.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $school
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setSchool($school = null)
    {
        if (null === $school) {
            $this->school = null;
            return $this;
        }
        if ($school instanceof FHIRString) {
            $this->school = $school;
            return $this;
        }
        $this->school = new FHIRString($school);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Insurer Identifier, typical BIN number (6 digit).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Insurer Identifier, typical BIN number (6 digit).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $target
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setTarget(FHIRReference $target = null)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * The type or discipline-style of the claim.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The category of claim this is.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClaimType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type or discipline-style of the claim.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The category of claim this is.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClaimType $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setType(FHIRClaimType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Complete, proposed, exploratory, other.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory
     * (Pre-determination).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Complete, proposed, exploratory, other.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory
     * (Pre-determination).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUse $use
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
     */
    public function setUse(FHIRUse $use = null)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim
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
            $type = new FHIRClaim;
        } elseif (!is_object($type) || !($type instanceof FHIRClaim)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaim::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->accident)) {
            $type->setAccident((string)$attributes->accident);
        }
        if (isset($children->accident)) {
            $type->setAccident(FHIRDate::xmlUnserialize($children->accident));
        }
        if (isset($children->accidentType)) {
            $type->setAccidentType(FHIRCoding::xmlUnserialize($children->accidentType));
        }
        if (isset($children->additionalMaterials)) {
            foreach($children->additionalMaterials as $child) {
                $type->addAdditionalMaterials(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->condition)) {
            foreach($children->condition as $child) {
                $type->addCondition(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->coverage)) {
            foreach($children->coverage as $child) {
                $type->addCoverage(FHIRClaimCoverage::xmlUnserialize($child));
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
        if (isset($children->enterer)) {
            $type->setEnterer(FHIRReference::xmlUnserialize($children->enterer));
        }
        if (isset($children->exception)) {
            foreach($children->exception as $child) {
                $type->addException(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->facility)) {
            $type->setFacility(FHIRReference::xmlUnserialize($children->facility));
        }
        if (isset($children->fundsReserve)) {
            $type->setFundsReserve(FHIRCoding::xmlUnserialize($children->fundsReserve));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->interventionException)) {
            foreach($children->interventionException as $child) {
                $type->addInterventionException(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->item)) {
            foreach($children->item as $child) {
                $type->addItem(FHIRClaimItem::xmlUnserialize($child));
            }
        }
        if (isset($children->missingTeeth)) {
            foreach($children->missingTeeth as $child) {
                $type->addMissingTeeth(FHIRClaimMissingTeeth::xmlUnserialize($child));
            }
        }
        if (isset($children->organization)) {
            $type->setOrganization(FHIRReference::xmlUnserialize($children->organization));
        }
        if (isset($children->originalPrescription)) {
            $type->setOriginalPrescription(FHIRReference::xmlUnserialize($children->originalPrescription));
        }
        if (isset($children->originalRuleset)) {
            $type->setOriginalRuleset(FHIRCoding::xmlUnserialize($children->originalRuleset));
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
            $type->setPriority(FHIRCoding::xmlUnserialize($children->priority));
        }
        if (isset($children->provider)) {
            $type->setProvider(FHIRReference::xmlUnserialize($children->provider));
        }
        if (isset($children->referral)) {
            $type->setReferral(FHIRReference::xmlUnserialize($children->referral));
        }
        if (isset($children->ruleset)) {
            $type->setRuleset(FHIRCoding::xmlUnserialize($children->ruleset));
        }
        if (isset($attributes->school)) {
            $type->setSchool((string)$attributes->school);
        }
        if (isset($children->school)) {
            $type->setSchool(FHIRString::xmlUnserialize($children->school));
        }
        if (isset($children->target)) {
            $type->setTarget(FHIRReference::xmlUnserialize($children->target));
        }
        if (isset($children->type)) {
            $type->setType(FHIRClaimType::xmlUnserialize($children->type));
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
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getAccident())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACCIDENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getAccidentType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACCIDENT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getAdditionalMaterials())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADDITIONAL_MATERIALS, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getCoverage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COVERAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCreated())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CREATED, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getDiagnosis())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DIAGNOSIS, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getEnterer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENTERER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getException())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXCEPTION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getFacility())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FACILITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getFundsReserve())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FUNDS_RESERVE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getInterventionException())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INTERVENTION_EXCEPTION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getMissingTeeth())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MISSING_TEETH, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANIZATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOriginalPrescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORIGINAL_PRESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOriginalRuleset())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORIGINAL_RULESET, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPayee())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYEE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPrescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getProvider())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROVIDER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getReferral())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERRAL, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRuleset())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RULESET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSchool())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCHOOL, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getTarget())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USE, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_ACCIDENT] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_ACCIDENT_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getAccidentType())) {
            $a[self::FIELD_ACCIDENT_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getAdditionalMaterials())) {
            $a[self::FIELD_ADDITIONAL_MATERIALS] = $vs;
        }
        if ([] !== ($vs = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = $vs;
        }
        if ([] !== ($vs = $this->getCoverage())) {
            $a[self::FIELD_COVERAGE] = $vs;
        }
        if (null !== ($v = $this->getCreated())) {
            $a[self::FIELD_CREATED] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_CREATED_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getDiagnosis())) {
            $a[self::FIELD_DIAGNOSIS] = $vs;
        }
        if (null !== ($v = $this->getEnterer())) {
            $a[self::FIELD_ENTERER] = $v;
        }
        if ([] !== ($vs = $this->getException())) {
            $a[self::FIELD_EXCEPTION] = $vs;
        }
        if (null !== ($v = $this->getFacility())) {
            $a[self::FIELD_FACILITY] = $v;
        }
        if (null !== ($v = $this->getFundsReserve())) {
            $a[self::FIELD_FUNDS_RESERVE] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_IDENTIFIER_EXT])) {
                        $a[self::FIELD_IDENTIFIER_EXT] = [];
                    }
                    $a[self::FIELD_IDENTIFIER_EXT][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getInterventionException())) {
            $a[self::FIELD_INTERVENTION_EXCEPTION] = $vs;
        }
        if ([] !== ($vs = $this->getItem())) {
            $a[self::FIELD_ITEM] = $vs;
        }
        if ([] !== ($vs = $this->getMissingTeeth())) {
            $a[self::FIELD_MISSING_TEETH] = $vs;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a[self::FIELD_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getOriginalPrescription())) {
            $a[self::FIELD_ORIGINAL_PRESCRIPTION] = $v;
        }
        if (null !== ($v = $this->getOriginalRuleset())) {
            $a[self::FIELD_ORIGINAL_RULESET] = $v;
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
        if (null !== ($v = $this->getProvider())) {
            $a[self::FIELD_PROVIDER] = $v;
        }
        if (null !== ($v = $this->getReferral())) {
            $a[self::FIELD_REFERRAL] = $v;
        }
        if (null !== ($v = $this->getRuleset())) {
            $a[self::FIELD_RULESET] = $v;
        }
        if (null !== ($v = $this->getSchool())) {
            $a[self::FIELD_SCHOOL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SCHOOL_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getTarget())) {
            $a[self::FIELD_TARGET] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_TYPE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getUse())) {
            $a[self::FIELD_USE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_USE_EXT] = $v;
            }
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