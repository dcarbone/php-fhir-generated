<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 12:57+0000
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRClaimResponse
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRClaimResponse extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE;

    const FIELD_ADD_ITEM = 'addItem';
    const FIELD_COVERAGE = 'coverage';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_DISPOSITION = 'disposition';
    const FIELD_DISPOSITION_EXT = '_disposition';
    const FIELD_ERROR = 'error';
    const FIELD_FORM = 'form';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_ITEM = 'item';
    const FIELD_NOTE = 'note';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_ORIGINAL_RULESET = 'originalRuleset';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_OUTCOME_EXT = '_outcome';
    const FIELD_PAYEE_TYPE = 'payeeType';
    const FIELD_PAYMENT_ADJUSTMENT = 'paymentAdjustment';
    const FIELD_PAYMENT_ADJUSTMENT_REASON = 'paymentAdjustmentReason';
    const FIELD_PAYMENT_AMOUNT = 'paymentAmount';
    const FIELD_PAYMENT_DATE = 'paymentDate';
    const FIELD_PAYMENT_DATE_EXT = '_paymentDate';
    const FIELD_PAYMENT_REF = 'paymentRef';
    const FIELD_REQUEST = 'request';
    const FIELD_REQUEST_ORGANIZATION = 'requestOrganization';
    const FIELD_REQUEST_PROVIDER = 'requestProvider';
    const FIELD_RESERVED = 'reserved';
    const FIELD_RULESET = 'ruleset';
    const FIELD_TOTAL_BENEFIT = 'totalBenefit';
    const FIELD_TOTAL_COST = 'totalCost';
    const FIELD_UNALLOC_DEDUCTABLE = 'unallocDeductable';

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    private $addItem = [];

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage[]
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $disposition = null;

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    private $error = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $form = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    private $item = [];

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote[]
     */
    private $note = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Insurer who produced this adjudicated response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $organization = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The style (standard) and version of the original material which was converted
     * into this resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $originalRuleset = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Transaction status: error, complete.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    private $outcome = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Party to be reimbursed: Subscriber, provider, other.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $payeeType = null;

    /**
     * Adjustment to the payment of this transaction which is not related to
     * adjudication of this transaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $paymentAdjustment = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason for the payment adjustment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $paymentAdjustmentReason = null;

    /**
     * Payable less any payment adjustment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $paymentAmount = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimated payment data.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    private $paymentDate = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Payment identifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    private $paymentRef = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Original request resource referrence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $request = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the services rendered to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $requestOrganization = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $requestProvider = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Status of funds reservation (For provider, for Patient, None).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $reserved = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The version of the style of resource contents. This should be mapped to the
     * allowable profiles for this and supporting resources.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $ruleset = null;

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductible).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $totalBenefit = null;

    /**
     * The total cost of the services reported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $totalCost = null;

    /**
     * The amount of deductible applied which was not allocated to any particular
     * service line.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $unallocDeductable = null;

    /**
     * FHIRClaimResponse Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponse::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADD_ITEM])) {
            if (is_array($data[self::FIELD_ADD_ITEM])) {
                foreach($data[self::FIELD_ADD_ITEM] as $v) {
                    if ($v instanceof FHIRClaimResponseAddItem) {
                        $this->addAddItem($v);
                    } else {
                        $this->addAddItem(new FHIRClaimResponseAddItem($v));
                    }
                }
            } else if ($data[self::FIELD_ADD_ITEM] instanceof FHIRClaimResponseAddItem) {
                $this->addAddItem($data[self::FIELD_ADD_ITEM]);
            } else {
                $this->addAddItem(new FHIRClaimResponseAddItem($data[self::FIELD_ADD_ITEM]));
            }
        }
        if (isset($data[self::FIELD_COVERAGE])) {
            if (is_array($data[self::FIELD_COVERAGE])) {
                foreach($data[self::FIELD_COVERAGE] as $v) {
                    if ($v instanceof FHIRClaimResponseCoverage) {
                        $this->addCoverage($v);
                    } else {
                        $this->addCoverage(new FHIRClaimResponseCoverage($v));
                    }
                }
            } else if ($data[self::FIELD_COVERAGE] instanceof FHIRClaimResponseCoverage) {
                $this->addCoverage($data[self::FIELD_COVERAGE]);
            } else {
                $this->addCoverage(new FHIRClaimResponseCoverage($data[self::FIELD_COVERAGE]));
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
        if (isset($data[self::FIELD_DISPOSITION])) {
            $ext = (isset($data[self::FIELD_DISPOSITION_EXT]) && is_array($data[self::FIELD_DISPOSITION_EXT]))
                ? $data[self::FIELD_DISPOSITION_EXT]
                : null;
            if ($data[self::FIELD_DISPOSITION] instanceof FHIRString) {
                $this->setDisposition($data[self::FIELD_DISPOSITION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DISPOSITION])) {
                $this->setDisposition(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DISPOSITION]] + $ext));
            } else {
                $this->setDisposition(new FHIRString($data[self::FIELD_DISPOSITION]));
            }
        }
        if (isset($data[self::FIELD_ERROR])) {
            if (is_array($data[self::FIELD_ERROR])) {
                foreach($data[self::FIELD_ERROR] as $v) {
                    if ($v instanceof FHIRClaimResponseError) {
                        $this->addError($v);
                    } else {
                        $this->addError(new FHIRClaimResponseError($v));
                    }
                }
            } else if ($data[self::FIELD_ERROR] instanceof FHIRClaimResponseError) {
                $this->addError($data[self::FIELD_ERROR]);
            } else {
                $this->addError(new FHIRClaimResponseError($data[self::FIELD_ERROR]));
            }
        }
        if (isset($data[self::FIELD_FORM])) {
            if ($data[self::FIELD_FORM] instanceof FHIRCoding) {
                $this->setForm($data[self::FIELD_FORM]);
            } else {
                $this->setForm(new FHIRCoding($data[self::FIELD_FORM]));
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
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if ($v instanceof FHIRClaimResponseItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRClaimResponseItem($v));
                    }
                }
            } else if ($data[self::FIELD_ITEM] instanceof FHIRClaimResponseItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRClaimResponseItem($data[self::FIELD_ITEM]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRClaimResponseNote) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRClaimResponseNote($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRClaimResponseNote) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRClaimResponseNote($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_ORGANIZATION])) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIRReference) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIRReference($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_ORIGINAL_RULESET])) {
            if ($data[self::FIELD_ORIGINAL_RULESET] instanceof FHIRCoding) {
                $this->setOriginalRuleset($data[self::FIELD_ORIGINAL_RULESET]);
            } else {
                $this->setOriginalRuleset(new FHIRCoding($data[self::FIELD_ORIGINAL_RULESET]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME])) {
            $ext = (isset($data[self::FIELD_OUTCOME_EXT]) && is_array($data[self::FIELD_OUTCOME_EXT]))
                ? $data[self::FIELD_OUTCOME_EXT]
                : null;
            if ($data[self::FIELD_OUTCOME] instanceof FHIRCode) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } elseif ($ext && is_scalar($data[self::FIELD_OUTCOME])) {
                $this->setOutcome(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_OUTCOME]] + $ext));
            } else {
                $this->setOutcome(new FHIRCode($data[self::FIELD_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_PAYEE_TYPE])) {
            if ($data[self::FIELD_PAYEE_TYPE] instanceof FHIRCoding) {
                $this->setPayeeType($data[self::FIELD_PAYEE_TYPE]);
            } else {
                $this->setPayeeType(new FHIRCoding($data[self::FIELD_PAYEE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PAYMENT_ADJUSTMENT])) {
            if ($data[self::FIELD_PAYMENT_ADJUSTMENT] instanceof FHIRMoney) {
                $this->setPaymentAdjustment($data[self::FIELD_PAYMENT_ADJUSTMENT]);
            } else {
                $this->setPaymentAdjustment(new FHIRMoney($data[self::FIELD_PAYMENT_ADJUSTMENT]));
            }
        }
        if (isset($data[self::FIELD_PAYMENT_ADJUSTMENT_REASON])) {
            if ($data[self::FIELD_PAYMENT_ADJUSTMENT_REASON] instanceof FHIRCoding) {
                $this->setPaymentAdjustmentReason($data[self::FIELD_PAYMENT_ADJUSTMENT_REASON]);
            } else {
                $this->setPaymentAdjustmentReason(new FHIRCoding($data[self::FIELD_PAYMENT_ADJUSTMENT_REASON]));
            }
        }
        if (isset($data[self::FIELD_PAYMENT_AMOUNT])) {
            if ($data[self::FIELD_PAYMENT_AMOUNT] instanceof FHIRMoney) {
                $this->setPaymentAmount($data[self::FIELD_PAYMENT_AMOUNT]);
            } else {
                $this->setPaymentAmount(new FHIRMoney($data[self::FIELD_PAYMENT_AMOUNT]));
            }
        }
        if (isset($data[self::FIELD_PAYMENT_DATE])) {
            $ext = (isset($data[self::FIELD_PAYMENT_DATE_EXT]) && is_array($data[self::FIELD_PAYMENT_DATE_EXT]))
                ? $data[self::FIELD_PAYMENT_DATE_EXT]
                : null;
            if ($data[self::FIELD_PAYMENT_DATE] instanceof FHIRDate) {
                $this->setPaymentDate($data[self::FIELD_PAYMENT_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PAYMENT_DATE])) {
                $this->setPaymentDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_PAYMENT_DATE]] + $ext));
            } else {
                $this->setPaymentDate(new FHIRDate($data[self::FIELD_PAYMENT_DATE]));
            }
        }
        if (isset($data[self::FIELD_PAYMENT_REF])) {
            if ($data[self::FIELD_PAYMENT_REF] instanceof FHIRIdentifier) {
                $this->setPaymentRef($data[self::FIELD_PAYMENT_REF]);
            } else {
                $this->setPaymentRef(new FHIRIdentifier($data[self::FIELD_PAYMENT_REF]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_ORGANIZATION])) {
            if ($data[self::FIELD_REQUEST_ORGANIZATION] instanceof FHIRReference) {
                $this->setRequestOrganization($data[self::FIELD_REQUEST_ORGANIZATION]);
            } else {
                $this->setRequestOrganization(new FHIRReference($data[self::FIELD_REQUEST_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_PROVIDER])) {
            if ($data[self::FIELD_REQUEST_PROVIDER] instanceof FHIRReference) {
                $this->setRequestProvider($data[self::FIELD_REQUEST_PROVIDER]);
            } else {
                $this->setRequestProvider(new FHIRReference($data[self::FIELD_REQUEST_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_RESERVED])) {
            if ($data[self::FIELD_RESERVED] instanceof FHIRCoding) {
                $this->setReserved($data[self::FIELD_RESERVED]);
            } else {
                $this->setReserved(new FHIRCoding($data[self::FIELD_RESERVED]));
            }
        }
        if (isset($data[self::FIELD_RULESET])) {
            if ($data[self::FIELD_RULESET] instanceof FHIRCoding) {
                $this->setRuleset($data[self::FIELD_RULESET]);
            } else {
                $this->setRuleset(new FHIRCoding($data[self::FIELD_RULESET]));
            }
        }
        if (isset($data[self::FIELD_TOTAL_BENEFIT])) {
            if ($data[self::FIELD_TOTAL_BENEFIT] instanceof FHIRMoney) {
                $this->setTotalBenefit($data[self::FIELD_TOTAL_BENEFIT]);
            } else {
                $this->setTotalBenefit(new FHIRMoney($data[self::FIELD_TOTAL_BENEFIT]));
            }
        }
        if (isset($data[self::FIELD_TOTAL_COST])) {
            if ($data[self::FIELD_TOTAL_COST] instanceof FHIRMoney) {
                $this->setTotalCost($data[self::FIELD_TOTAL_COST]);
            } else {
                $this->setTotalCost(new FHIRMoney($data[self::FIELD_TOTAL_COST]));
            }
        }
        if (isset($data[self::FIELD_UNALLOC_DEDUCTABLE])) {
            if ($data[self::FIELD_UNALLOC_DEDUCTABLE] instanceof FHIRMoney) {
                $this->setUnallocDeductable($data[self::FIELD_UNALLOC_DEDUCTABLE]);
            } else {
                $this->setUnallocDeductable(new FHIRMoney($data[self::FIELD_UNALLOC_DEDUCTABLE]));
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
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    public function getAddItem()
    {
        return $this->addItem;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem $addItem
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function addAddItem(FHIRClaimResponseAddItem $addItem = null)
    {
        $this->addItem[] = $addItem;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for payor added services.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[] $addItem
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setAddItem(array $addItem = [])
    {
        $this->addItem = [];
        if ([] === $addItem) {
            return $this;
        }
        foreach($addItem as $v) {
            if ($v instanceof FHIRClaimResponseAddItem) {
                $this->addAddItem($v);
            } else {
                $this->addAddItem(new FHIRClaimResponseAddItem($v));
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage $coverage
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function addCoverage(FHIRClaimResponseCoverage $coverage = null)
    {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage[] $coverage
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setCoverage(array $coverage = [])
    {
        $this->coverage = [];
        if ([] === $coverage) {
            return $this;
        }
        foreach($coverage as $v) {
            if ($v instanceof FHIRClaimResponseCoverage) {
                $this->addCoverage($v);
            } else {
                $this->addCoverage(new FHIRClaimResponseCoverage($v));
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $disposition
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setDisposition($disposition = null)
    {
        if (null === $disposition) {
            $this->disposition = null;
            return $this;
        }
        if ($disposition instanceof FHIRString) {
            $this->disposition = $disposition;
            return $this;
        }
        $this->disposition = new FHIRString($disposition);
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $error
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function addError(FHIRClaimResponseError $error = null)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[] $error
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setError(array $error = [])
    {
        $this->error = [];
        if ([] === $error) {
            return $this;
        }
        foreach($error as $v) {
            if ($v instanceof FHIRClaimResponseError) {
                $this->addError($v);
            } else {
                $this->addError(new FHIRClaimResponseError($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $form
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setForm(FHIRCoding $form = null)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
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
     * The Response business identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * The Response business identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem $item
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function addItem(FHIRClaimResponseItem $item = null)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first tier service adjudications for submitted services.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[] $item
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setItem(array $item = [])
    {
        $this->item = [];
        if ([] === $item) {
            return $this;
        }
        foreach($item as $v) {
            if ($v instanceof FHIRClaimResponseItem) {
                $this->addItem($v);
            } else {
                $this->addItem(new FHIRClaimResponseItem($v));
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote $note
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function addNote(FHIRClaimResponseNote $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Note text.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote[] $note
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRClaimResponseNote) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRClaimResponseNote($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Insurer who produced this adjudicated response.
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
     * The Insurer who produced this adjudicated response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $organization
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The style (standard) and version of the original material which was converted
     * into this resource.
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
     * The style (standard) and version of the original material which was converted
     * into this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $originalRuleset
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setOriginalRuleset(FHIRCoding $originalRuleset = null)
    {
        $this->originalRuleset = $originalRuleset;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Transaction status: error, complete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Transaction status: error, complete.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $outcome
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setOutcome($outcome = null)
    {
        if (null === $outcome) {
            $this->outcome = null;
            return $this;
        }
        if ($outcome instanceof FHIRCode) {
            $this->outcome = $outcome;
            return $this;
        }
        $this->outcome = new FHIRCode($outcome);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Party to be reimbursed: Subscriber, provider, other.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getPayeeType()
    {
        return $this->payeeType;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Party to be reimbursed: Subscriber, provider, other.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $payeeType
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setPayeeType(FHIRCoding $payeeType = null)
    {
        $this->payeeType = $payeeType;
        return $this;
    }

    /**
     * Adjustment to the payment of this transaction which is not related to
     * adjudication of this transaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPaymentAdjustment()
    {
        return $this->paymentAdjustment;
    }

    /**
     * Adjustment to the payment of this transaction which is not related to
     * adjudication of this transaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $paymentAdjustment
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setPaymentAdjustment(FHIRMoney $paymentAdjustment = null)
    {
        $this->paymentAdjustment = $paymentAdjustment;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason for the payment adjustment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getPaymentAdjustmentReason()
    {
        return $this->paymentAdjustmentReason;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason for the payment adjustment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $paymentAdjustmentReason
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setPaymentAdjustmentReason(FHIRCoding $paymentAdjustmentReason = null)
    {
        $this->paymentAdjustmentReason = $paymentAdjustmentReason;
        return $this;
    }

    /**
     * Payable less any payment adjustment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * Payable less any payment adjustment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $paymentAmount
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setPaymentAmount(FHIRMoney $paymentAmount = null)
    {
        $this->paymentAmount = $paymentAmount;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimated payment data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Estimated payment data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate $paymentDate
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setPaymentDate($paymentDate = null)
    {
        if (null === $paymentDate) {
            $this->paymentDate = null;
            return $this;
        }
        if ($paymentDate instanceof FHIRDate) {
            $this->paymentDate = $paymentDate;
            return $this;
        }
        $this->paymentDate = new FHIRDate($paymentDate);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Payment identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getPaymentRef()
    {
        return $this->paymentRef;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Payment identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $paymentRef
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setPaymentRef(FHIRIdentifier $paymentRef = null)
    {
        $this->paymentRef = $paymentRef;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Original request resource referrence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Original request resource referrence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $request
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setRequest(FHIRReference $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the services rendered to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getRequestOrganization()
    {
        return $this->requestOrganization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the services rendered to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $requestOrganization
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setRequestOrganization(FHIRReference $requestOrganization = null)
    {
        $this->requestOrganization = $requestOrganization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getRequestProvider()
    {
        return $this->requestProvider;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $requestProvider
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setRequestProvider(FHIRReference $requestProvider = null)
    {
        $this->requestProvider = $requestProvider;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Status of funds reservation (For provider, for Patient, None).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getReserved()
    {
        return $this->reserved;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Status of funds reservation (For provider, for Patient, None).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $reserved
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setReserved(FHIRCoding $reserved = null)
    {
        $this->reserved = $reserved;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The version of the style of resource contents. This should be mapped to the
     * allowable profiles for this and supporting resources.
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
     * The version of the style of resource contents. This should be mapped to the
     * allowable profiles for this and supporting resources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $ruleset
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setRuleset(FHIRCoding $ruleset = null)
    {
        $this->ruleset = $ruleset;
        return $this;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductible).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalBenefit()
    {
        return $this->totalBenefit;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all
     * detail lines and additions less the Unallocated Deductible).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $totalBenefit
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setTotalBenefit(FHIRMoney $totalBenefit = null)
    {
        $this->totalBenefit = $totalBenefit;
        return $this;
    }

    /**
     * The total cost of the services reported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * The total cost of the services reported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $totalCost
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setTotalCost(FHIRMoney $totalCost = null)
    {
        $this->totalCost = $totalCost;
        return $this;
    }

    /**
     * The amount of deductible applied which was not allocated to any particular
     * service line.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnallocDeductable()
    {
        return $this->unallocDeductable;
    }

    /**
     * The amount of deductible applied which was not allocated to any particular
     * service line.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $unallocDeductable
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setUnallocDeductable(FHIRMoney $unallocDeductable = null)
    {
        $this->unallocDeductable = $unallocDeductable;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRClaimResponse::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimResponse::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRClaimResponse);
        } elseif (!is_object($type) || !($type instanceof FHIRClaimResponse)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimResponse::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->addItem)) {
            foreach($children->addItem as $child) {
                $type->addAddItem(FHIRClaimResponseAddItem::xmlUnserialize($child));
            }
        }
        if (isset($children->coverage)) {
            foreach($children->coverage as $child) {
                $type->addCoverage(FHIRClaimResponseCoverage::xmlUnserialize($child));
            }
        }
        if (isset($attributes->created)) {
            $type->setCreated((string)$attributes->created);
        }
        if (isset($children->created)) {
            $type->setCreated(FHIRDateTime::xmlUnserialize($children->created));
        }
        if (isset($attributes->disposition)) {
            $type->setDisposition((string)$attributes->disposition);
        }
        if (isset($children->disposition)) {
            $type->setDisposition(FHIRString::xmlUnserialize($children->disposition));
        }
        if (isset($children->error)) {
            foreach($children->error as $child) {
                $type->addError(FHIRClaimResponseError::xmlUnserialize($child));
            }
        }
        if (isset($children->form)) {
            $type->setForm(FHIRCoding::xmlUnserialize($children->form));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->item)) {
            foreach($children->item as $child) {
                $type->addItem(FHIRClaimResponseItem::xmlUnserialize($child));
            }
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRClaimResponseNote::xmlUnserialize($child));
            }
        }
        if (isset($children->organization)) {
            $type->setOrganization(FHIRReference::xmlUnserialize($children->organization));
        }
        if (isset($children->originalRuleset)) {
            $type->setOriginalRuleset(FHIRCoding::xmlUnserialize($children->originalRuleset));
        }
        if (isset($attributes->outcome)) {
            $type->setOutcome((string)$attributes->outcome);
        }
        if (isset($children->outcome)) {
            $type->setOutcome(FHIRCode::xmlUnserialize($children->outcome));
        }
        if (isset($children->payeeType)) {
            $type->setPayeeType(FHIRCoding::xmlUnserialize($children->payeeType));
        }
        if (isset($children->paymentAdjustment)) {
            $type->setPaymentAdjustment(FHIRMoney::xmlUnserialize($children->paymentAdjustment));
        }
        if (isset($children->paymentAdjustmentReason)) {
            $type->setPaymentAdjustmentReason(FHIRCoding::xmlUnserialize($children->paymentAdjustmentReason));
        }
        if (isset($children->paymentAmount)) {
            $type->setPaymentAmount(FHIRMoney::xmlUnserialize($children->paymentAmount));
        }
        if (isset($attributes->paymentDate)) {
            $type->setPaymentDate((string)$attributes->paymentDate);
        }
        if (isset($children->paymentDate)) {
            $type->setPaymentDate(FHIRDate::xmlUnserialize($children->paymentDate));
        }
        if (isset($children->paymentRef)) {
            $type->setPaymentRef(FHIRIdentifier::xmlUnserialize($children->paymentRef));
        }
        if (isset($children->request)) {
            $type->setRequest(FHIRReference::xmlUnserialize($children->request));
        }
        if (isset($children->requestOrganization)) {
            $type->setRequestOrganization(FHIRReference::xmlUnserialize($children->requestOrganization));
        }
        if (isset($children->requestProvider)) {
            $type->setRequestProvider(FHIRReference::xmlUnserialize($children->requestProvider));
        }
        if (isset($children->reserved)) {
            $type->setReserved(FHIRCoding::xmlUnserialize($children->reserved));
        }
        if (isset($children->ruleset)) {
            $type->setRuleset(FHIRCoding::xmlUnserialize($children->ruleset));
        }
        if (isset($children->totalBenefit)) {
            $type->setTotalBenefit(FHIRMoney::xmlUnserialize($children->totalBenefit));
        }
        if (isset($children->totalCost)) {
            $type->setTotalCost(FHIRMoney::xmlUnserialize($children->totalCost));
        }
        if (isset($children->unallocDeductable)) {
            $type->setUnallocDeductable(FHIRMoney::xmlUnserialize($children->unallocDeductable));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ClaimResponse xmlns="http://hl7.org/fhir"></ClaimResponse>');
        }
    parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getAddItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADD_ITEM));
            }
        }

        if ([] !== ($vs = $this->getCoverage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COVERAGE));
            }
        }
        if (null !== ($v = $this->getCreated())) {
            $sxe->addAttribute(self::FIELD_CREATED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CREATED));
            }
        }
        if (null !== ($v = $this->getDisposition())) {
            $sxe->addAttribute(self::FIELD_DISPOSITION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DISPOSITION));
            }
        }

        if ([] !== ($vs = $this->getError())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ERROR));
            }
        }

        if (null !== ($v = $this->getForm())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FORM));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }

        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM));
            }
        }

        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE));
            }
        }

        if (null !== ($v = $this->getOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANIZATION));
        }

        if (null !== ($v = $this->getOriginalRuleset())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORIGINAL_RULESET));
        }
        if (null !== ($v = $this->getOutcome())) {
            $sxe->addAttribute(self::FIELD_OUTCOME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME));
            }
        }

        if (null !== ($v = $this->getPayeeType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYEE_TYPE));
        }

        if (null !== ($v = $this->getPaymentAdjustment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYMENT_ADJUSTMENT));
        }

        if (null !== ($v = $this->getPaymentAdjustmentReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYMENT_ADJUSTMENT_REASON));
        }

        if (null !== ($v = $this->getPaymentAmount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYMENT_AMOUNT));
        }
        if (null !== ($v = $this->getPaymentDate())) {
            $sxe->addAttribute(self::FIELD_PAYMENT_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PAYMENT_DATE));
            }
        }

        if (null !== ($v = $this->getPaymentRef())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYMENT_REF));
        }

        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST));
        }

        if (null !== ($v = $this->getRequestOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_ORGANIZATION));
        }

        if (null !== ($v = $this->getRequestProvider())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_PROVIDER));
        }

        if (null !== ($v = $this->getReserved())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESERVED));
        }

        if (null !== ($v = $this->getRuleset())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RULESET));
        }

        if (null !== ($v = $this->getTotalBenefit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TOTAL_BENEFIT));
        }

        if (null !== ($v = $this->getTotalCost())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TOTAL_COST));
        }

        if (null !== ($v = $this->getUnallocDeductable())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNALLOC_DEDUCTABLE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAddItem())) {
            $a[self::FIELD_ADD_ITEM] = $vs;
        }
        if ([] !== ($vs = $this->getCoverage())) {
            $a[self::FIELD_COVERAGE] = $vs;
        }
        if (null !== ($v = $this->getCreated())) {
            $a[self::FIELD_CREATED] = (string)$v;
            $a[self::FIELD_CREATED_EXT] = $v;
        }
        if (null !== ($v = $this->getDisposition())) {
            $a[self::FIELD_DISPOSITION] = (string)$v;
            $a[self::FIELD_DISPOSITION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getError())) {
            $a[self::FIELD_ERROR] = $vs;
        }
        if (null !== ($v = $this->getForm())) {
            $a[self::FIELD_FORM] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getItem())) {
            $a[self::FIELD_ITEM] = $vs;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a[self::FIELD_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getOriginalRuleset())) {
            $a[self::FIELD_ORIGINAL_RULESET] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = (string)$v;
            $a[self::FIELD_OUTCOME_EXT] = $v;
        }
        if (null !== ($v = $this->getPayeeType())) {
            $a[self::FIELD_PAYEE_TYPE] = $v;
        }
        if (null !== ($v = $this->getPaymentAdjustment())) {
            $a[self::FIELD_PAYMENT_ADJUSTMENT] = $v;
        }
        if (null !== ($v = $this->getPaymentAdjustmentReason())) {
            $a[self::FIELD_PAYMENT_ADJUSTMENT_REASON] = $v;
        }
        if (null !== ($v = $this->getPaymentAmount())) {
            $a[self::FIELD_PAYMENT_AMOUNT] = $v;
        }
        if (null !== ($v = $this->getPaymentDate())) {
            $a[self::FIELD_PAYMENT_DATE] = (string)$v;
            $a[self::FIELD_PAYMENT_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getPaymentRef())) {
            $a[self::FIELD_PAYMENT_REF] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $v;
        }
        if (null !== ($v = $this->getRequestOrganization())) {
            $a[self::FIELD_REQUEST_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getRequestProvider())) {
            $a[self::FIELD_REQUEST_PROVIDER] = $v;
        }
        if (null !== ($v = $this->getReserved())) {
            $a[self::FIELD_RESERVED] = $v;
        }
        if (null !== ($v = $this->getRuleset())) {
            $a[self::FIELD_RULESET] = $v;
        }
        if (null !== ($v = $this->getTotalBenefit())) {
            $a[self::FIELD_TOTAL_BENEFIT] = $v;
        }
        if (null !== ($v = $this->getTotalCost())) {
            $a[self::FIELD_TOTAL_COST] = $v;
        }
        if (null !== ($v = $this->getUnallocDeductable())) {
            $a[self::FIELD_UNALLOC_DEDUCTABLE] = $v;
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