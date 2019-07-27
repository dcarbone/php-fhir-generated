<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:22+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseTotal;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUse;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRClaimResponse
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRClaimResponse extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE;

    const FIELD_ADD_ITEM = 'addItem';
    const FIELD_ADJUDICATION = 'adjudication';
    const FIELD_COMMUNICATION_REQUEST = 'communicationRequest';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_DISPOSITION = 'disposition';
    const FIELD_DISPOSITION_EXT = '_disposition';
    const FIELD_ERROR = 'error';
    const FIELD_FORM = 'form';
    const FIELD_FORM_CODE = 'formCode';
    const FIELD_FUNDS_RESERVE = 'fundsReserve';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INSURANCE = 'insurance';
    const FIELD_INSURER = 'insurer';
    const FIELD_ITEM = 'item';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_PATIENT = 'patient';
    const FIELD_PAYEE_TYPE = 'payeeType';
    const FIELD_PAYMENT = 'payment';
    const FIELD_PRE_AUTH_PERIOD = 'preAuthPeriod';
    const FIELD_PRE_AUTH_REF = 'preAuthRef';
    const FIELD_PRE_AUTH_REF_EXT = '_preAuthRef';
    const FIELD_PROCESS_NOTE = 'processNote';
    const FIELD_REQUEST = 'request';
    const FIELD_REQUESTOR = 'requestor';
    const FIELD_STATUS = 'status';
    const FIELD_SUB_TYPE = 'subType';
    const FIELD_TOTAL = 'total';
    const FIELD_TYPE = 'type';
    const FIELD_USE = 'use';

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    private $addItem = [];

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results which are presented at the header level rather than at
     * the line-item or add-item levels.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    private $adjudication = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $communicationRequest = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date this resource was created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $created = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A human readable description of the status of the adjudication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $disposition = null;

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Errors encountered during the processing of the adjudication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    private $error = [];

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    private $form = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code for the form to be used for printing the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $formCode = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code, used only on a response to a preauthorization, to indicate whether the
     * benefits payable have been reserved and for whom.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $fundsReserve = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this claim response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance[]
     */
    private $insurance = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party responsible for authorization, adjudication and reimbursement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $insurer = null;

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details
     * which can also be a simple items or groups of sub-details.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    private $item = [];

    /**
     * The result of the claim processing.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The outcome of the claim, predetermination, or preauthorization processing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes
     */
    private $outcome = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party to whom the professional services and/or products have been supplied
     * or are being considered and for whom actual for facast reimbursement is sought.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patient = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Type of Party to be reimbursed: subscriber, provider, other.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $payeeType = null;

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Payment details for the adjudication of the claim.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment
     */
    private $payment = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time frame during which this authorization is effective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $preAuthPeriod = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Reference from the Insurer which is used in later communications which refers to
     * this adjudication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $preAuthRef = null;

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote[]
     */
    private $processNote = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Original request resource reference.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $request = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the claim, predetermination or
     * preauthorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $requestor = null;

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    private $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim type codes which may convey additional
     * information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $subType = null;

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Categorized monetary totals for the adjudication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseTotal[]
     */
    private $total = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim type codes which may convey additional
     * information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * The purpose of the Claim: predetermination, preauthorization, claim.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code to indicate whether the nature of the request is: to request adjudication
     * of products and services previously rendered; or requesting authorization and
     * adjudication for provision in the future; or requesting the non-binding
     * adjudication of the listed products and services which could be provided in the
     * future.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUse
     */
    private $use = null;

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
        if (isset($data[self::FIELD_ADJUDICATION])) {
            if (is_array($data[self::FIELD_ADJUDICATION])) {
                foreach($data[self::FIELD_ADJUDICATION] as $v) {
                    if ($v instanceof FHIRClaimResponseAdjudication) {
                        $this->addAdjudication($v);
                    } else {
                        $this->addAdjudication(new FHIRClaimResponseAdjudication($v));
                    }
                }
            } else if ($data[self::FIELD_ADJUDICATION] instanceof FHIRClaimResponseAdjudication) {
                $this->addAdjudication($data[self::FIELD_ADJUDICATION]);
            } else {
                $this->addAdjudication(new FHIRClaimResponseAdjudication($data[self::FIELD_ADJUDICATION]));
            }
        }
        if (isset($data[self::FIELD_COMMUNICATION_REQUEST])) {
            if (is_array($data[self::FIELD_COMMUNICATION_REQUEST])) {
                foreach($data[self::FIELD_COMMUNICATION_REQUEST] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addCommunicationRequest($v);
                    } else {
                        $this->addCommunicationRequest(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_COMMUNICATION_REQUEST] instanceof FHIRReference) {
                $this->addCommunicationRequest($data[self::FIELD_COMMUNICATION_REQUEST]);
            } else {
                $this->addCommunicationRequest(new FHIRReference($data[self::FIELD_COMMUNICATION_REQUEST]));
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
            if ($data[self::FIELD_FORM] instanceof FHIRAttachment) {
                $this->setForm($data[self::FIELD_FORM]);
            } else {
                $this->setForm(new FHIRAttachment($data[self::FIELD_FORM]));
            }
        }
        if (isset($data[self::FIELD_FORM_CODE])) {
            if ($data[self::FIELD_FORM_CODE] instanceof FHIRCodeableConcept) {
                $this->setFormCode($data[self::FIELD_FORM_CODE]);
            } else {
                $this->setFormCode(new FHIRCodeableConcept($data[self::FIELD_FORM_CODE]));
            }
        }
        if (isset($data[self::FIELD_FUNDS_RESERVE])) {
            if ($data[self::FIELD_FUNDS_RESERVE] instanceof FHIRCodeableConcept) {
                $this->setFundsReserve($data[self::FIELD_FUNDS_RESERVE]);
            } else {
                $this->setFundsReserve(new FHIRCodeableConcept($data[self::FIELD_FUNDS_RESERVE]));
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
        if (isset($data[self::FIELD_INSURANCE])) {
            if (is_array($data[self::FIELD_INSURANCE])) {
                foreach($data[self::FIELD_INSURANCE] as $v) {
                    if ($v instanceof FHIRClaimResponseInsurance) {
                        $this->addInsurance($v);
                    } else {
                        $this->addInsurance(new FHIRClaimResponseInsurance($v));
                    }
                }
            } else if ($data[self::FIELD_INSURANCE] instanceof FHIRClaimResponseInsurance) {
                $this->addInsurance($data[self::FIELD_INSURANCE]);
            } else {
                $this->addInsurance(new FHIRClaimResponseInsurance($data[self::FIELD_INSURANCE]));
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
        if (isset($data[self::FIELD_OUTCOME])) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRClaimProcessingCodes) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRClaimProcessingCodes($data[self::FIELD_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PAYEE_TYPE])) {
            if ($data[self::FIELD_PAYEE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setPayeeType($data[self::FIELD_PAYEE_TYPE]);
            } else {
                $this->setPayeeType(new FHIRCodeableConcept($data[self::FIELD_PAYEE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PAYMENT])) {
            if ($data[self::FIELD_PAYMENT] instanceof FHIRClaimResponsePayment) {
                $this->setPayment($data[self::FIELD_PAYMENT]);
            } else {
                $this->setPayment(new FHIRClaimResponsePayment($data[self::FIELD_PAYMENT]));
            }
        }
        if (isset($data[self::FIELD_PRE_AUTH_PERIOD])) {
            if ($data[self::FIELD_PRE_AUTH_PERIOD] instanceof FHIRPeriod) {
                $this->setPreAuthPeriod($data[self::FIELD_PRE_AUTH_PERIOD]);
            } else {
                $this->setPreAuthPeriod(new FHIRPeriod($data[self::FIELD_PRE_AUTH_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PRE_AUTH_REF])) {
            $ext = (isset($data[self::FIELD_PRE_AUTH_REF_EXT]) && is_array($data[self::FIELD_PRE_AUTH_REF_EXT]))
                ? $data[self::FIELD_PRE_AUTH_REF_EXT]
                : null;
            if ($data[self::FIELD_PRE_AUTH_REF] instanceof FHIRString) {
                $this->setPreAuthRef($data[self::FIELD_PRE_AUTH_REF]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRE_AUTH_REF])) {
                $this->setPreAuthRef(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PRE_AUTH_REF]] + $ext));
            } else {
                $this->setPreAuthRef(new FHIRString($data[self::FIELD_PRE_AUTH_REF]));
            }
        }
        if (isset($data[self::FIELD_PROCESS_NOTE])) {
            if (is_array($data[self::FIELD_PROCESS_NOTE])) {
                foreach($data[self::FIELD_PROCESS_NOTE] as $v) {
                    if ($v instanceof FHIRClaimResponseProcessNote) {
                        $this->addProcessNote($v);
                    } else {
                        $this->addProcessNote(new FHIRClaimResponseProcessNote($v));
                    }
                }
            } else if ($data[self::FIELD_PROCESS_NOTE] instanceof FHIRClaimResponseProcessNote) {
                $this->addProcessNote($data[self::FIELD_PROCESS_NOTE]);
            } else {
                $this->addProcessNote(new FHIRClaimResponseProcessNote($data[self::FIELD_PROCESS_NOTE]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_REQUESTOR])) {
            if ($data[self::FIELD_REQUESTOR] instanceof FHIRReference) {
                $this->setRequestor($data[self::FIELD_REQUESTOR]);
            } else {
                $this->setRequestor(new FHIRReference($data[self::FIELD_REQUESTOR]));
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
            if ($data[self::FIELD_SUB_TYPE] instanceof FHIRCodeableConcept) {
                $this->setSubType($data[self::FIELD_SUB_TYPE]);
            } else {
                $this->setSubType(new FHIRCodeableConcept($data[self::FIELD_SUB_TYPE]));
            }
        }
        if (isset($data[self::FIELD_TOTAL])) {
            if (is_array($data[self::FIELD_TOTAL])) {
                foreach($data[self::FIELD_TOTAL] as $v) {
                    if ($v instanceof FHIRClaimResponseTotal) {
                        $this->addTotal($v);
                    } else {
                        $this->addTotal(new FHIRClaimResponseTotal($v));
                    }
                }
            } else if ($data[self::FIELD_TOTAL] instanceof FHIRClaimResponseTotal) {
                $this->addTotal($data[self::FIELD_TOTAL]);
            } else {
                $this->addTotal(new FHIRClaimResponseTotal($data[self::FIELD_TOTAL]));
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
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    public function getAddItem()
    {
        return $this->addItem;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem $addItem
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem[] $addItem
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * The adjudication results which are presented at the header level rather than at
     * the line-item or add-item levels.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results which are presented at the header level rather than at
     * the line-item or add-item levels.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication $adjudication
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function addAdjudication(FHIRClaimResponseAdjudication $adjudication = null)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results which are presented at the header level rather than at
     * the line-item or add-item levels.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[] $adjudication
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setAdjudication(array $adjudication = [])
    {
        $this->adjudication = [];
        if ([] === $adjudication) {
            return $this;
        }
        foreach($adjudication as $v) {
            if ($v instanceof FHIRClaimResponseAdjudication) {
                $this->addAdjudication($v);
            } else {
                $this->addAdjudication(new FHIRClaimResponseAdjudication($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getCommunicationRequest()
    {
        return $this->communicationRequest;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $communicationRequest
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function addCommunicationRequest(FHIRReference $communicationRequest = null)
    {
        $this->communicationRequest[] = $communicationRequest;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $communicationRequest
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setCommunicationRequest(array $communicationRequest = [])
    {
        $this->communicationRequest = [];
        if ([] === $communicationRequest) {
            return $this;
        }
        foreach($communicationRequest as $v) {
            if ($v instanceof FHIRReference) {
                $this->addCommunicationRequest($v);
            } else {
                $this->addCommunicationRequest(new FHIRReference($v));
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
     * The date this resource was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
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
     * The date this resource was created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A human readable description of the status of the adjudication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A human readable description of the status of the adjudication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $disposition
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * Errors encountered during the processing of the adjudication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Errors encountered during the processing of the adjudication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $error
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * Errors encountered during the processing of the adjudication.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError[] $error
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAttachment $form
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setForm(FHIRAttachment $form = null)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code for the form to be used for printing the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFormCode()
    {
        return $this->formCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code for the form to be used for printing the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $formCode
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setFormCode(FHIRCodeableConcept $formCode = null)
    {
        $this->formCode = $formCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code, used only on a response to a preauthorization, to indicate whether the
     * benefits payable have been reserved and for whom.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * A code, used only on a response to a preauthorization, to indicate whether the
     * benefits payable have been reserved and for whom.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $fundsReserve
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setFundsReserve(FHIRCodeableConcept $fundsReserve = null)
    {
        $this->fundsReserve = $fundsReserve;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this claim response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this claim response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this claim response.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance $insurance
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function addInsurance(FHIRClaimResponseInsurance $insurance = null)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Financial instruments for reimbursement for the health care products and
     * services specified on the claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance[] $insurance
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setInsurance(array $insurance = [])
    {
        $this->insurance = [];
        if ([] === $insurance) {
            return $this;
        }
        foreach($insurance as $v) {
            if ($v instanceof FHIRClaimResponseInsurance) {
                $this->addInsurance($v);
            } else {
                $this->addInsurance(new FHIRClaimResponseInsurance($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party responsible for authorization, adjudication and reimbursement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
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
     * The party responsible for authorization, adjudication and reimbursement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $insurer
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setInsurer(FHIRReference $insurer = null)
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details
     * which can also be a simple items or groups of sub-details.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details
     * which can also be a simple items or groups of sub-details.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem $item
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * A claim line. Either a simple (a product or service) or a 'group' of details
     * which can also be a simple items or groups of sub-details.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem[] $item
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * The result of the claim processing.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The outcome of the claim, predetermination, or preauthorization processing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * The result of the claim processing.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The outcome of the claim, predetermination, or preauthorization processing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRClaimProcessingCodes $outcome
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setOutcome(FHIRClaimProcessingCodes $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party to whom the professional services and/or products have been supplied
     * or are being considered and for whom actual for facast reimbursement is sought.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
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
     * The party to whom the professional services and/or products have been supplied
     * or are being considered and for whom actual for facast reimbursement is sought.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Type of Party to be reimbursed: subscriber, provider, other.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPayeeType()
    {
        return $this->payeeType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Type of Party to be reimbursed: subscriber, provider, other.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $payeeType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setPayeeType(FHIRCodeableConcept $payeeType = null)
    {
        $this->payeeType = $payeeType;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Payment details for the adjudication of the claim.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Payment details for the adjudication of the claim.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment $payment
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setPayment(FHIRClaimResponsePayment $payment = null)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time frame during which this authorization is effective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPreAuthPeriod()
    {
        return $this->preAuthPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time frame during which this authorization is effective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $preAuthPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setPreAuthPeriod(FHIRPeriod $preAuthPeriod = null)
    {
        $this->preAuthPeriod = $preAuthPeriod;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Reference from the Insurer which is used in later communications which refers to
     * this adjudication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Reference from the Insurer which is used in later communications which refers to
     * this adjudication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $preAuthRef
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setPreAuthRef($preAuthRef = null)
    {
        if (null === $preAuthRef) {
            $this->preAuthRef = null;
            return $this;
        }
        if ($preAuthRef instanceof FHIRString) {
            $this->preAuthRef = $preAuthRef;
            return $this;
        }
        $this->preAuthRef = new FHIRString($preAuthRef);
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote[]
     */
    public function getProcessNote()
    {
        return $this->processNote;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote $processNote
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function addProcessNote(FHIRClaimResponseProcessNote $processNote = null)
    {
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote[] $processNote
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setProcessNote(array $processNote = [])
    {
        $this->processNote = [];
        if ([] === $processNote) {
            return $this;
        }
        foreach($processNote as $v) {
            if ($v instanceof FHIRClaimResponseProcessNote) {
                $this->addProcessNote($v);
            } else {
                $this->addProcessNote(new FHIRClaimResponseProcessNote($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Original request resource reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
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
     * Original request resource reference.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $request
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * The provider which is responsible for the claim, predetermination or
     * preauthorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the claim, predetermination or
     * preauthorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $requestor
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setRequestor(FHIRReference $requestor = null)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
     * A finer grained suite of claim type codes which may convey additional
     * information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * A finer grained suite of claim type codes which may convey additional
     * information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subType
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setSubType(FHIRCodeableConcept $subType = null)
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Categorized monetary totals for the adjudication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseTotal[]
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Categorized monetary totals for the adjudication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseTotal $total
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function addTotal(FHIRClaimResponseTotal $total = null)
    {
        $this->total[] = $total;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * Categorized monetary totals for the adjudication.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseTotal[] $total
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setTotal(array $total = [])
    {
        $this->total = [];
        if ([] === $total) {
            return $this;
        }
        foreach($total as $v) {
            if ($v instanceof FHIRClaimResponseTotal) {
                $this->addTotal($v);
            } else {
                $this->addTotal(new FHIRClaimResponseTotal($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A finer grained suite of claim type codes which may convey additional
     * information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * A finer grained suite of claim type codes which may convey additional
     * information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * The purpose of the Claim: predetermination, preauthorization, claim.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code to indicate whether the nature of the request is: to request adjudication
     * of products and services previously rendered; or requesting authorization and
     * adjudication for provision in the future; or requesting the non-binding
     * adjudication of the listed products and services which could be provided in the
     * future.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * The purpose of the Claim: predetermination, preauthorization, claim.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A code to indicate whether the nature of the request is: to request adjudication
     * of products and services previously rendered; or requesting authorization and
     * adjudication for provision in the future; or requesting the non-binding
     * adjudication of the listed products and services which could be provided in the
     * future.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUse $use
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
     */
    public function setUse(FHIRUse $use = null)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse
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
            $type = FHIRDomainResource::xmlUnserialize(\$sxe, new FHIRClaimResponse);
        } elseif (!is_object($type) || !($type instanceof FHIRClaimResponse)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimResponse::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClaimResponse or null, %s seen.',
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
        if (isset($children->adjudication)) {
            foreach($children->adjudication as $child) {
                $type->addAdjudication(FHIRClaimResponseAdjudication::xmlUnserialize($child));
            }
        }
        if (isset($children->communicationRequest)) {
            foreach($children->communicationRequest as $child) {
                $type->addCommunicationRequest(FHIRReference::xmlUnserialize($child));
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
            $type->setForm(FHIRAttachment::xmlUnserialize($children->form));
        }
        if (isset($children->formCode)) {
            $type->setFormCode(FHIRCodeableConcept::xmlUnserialize($children->formCode));
        }
        if (isset($children->fundsReserve)) {
            $type->setFundsReserve(FHIRCodeableConcept::xmlUnserialize($children->fundsReserve));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->insurance)) {
            foreach($children->insurance as $child) {
                $type->addInsurance(FHIRClaimResponseInsurance::xmlUnserialize($child));
            }
        }
        if (isset($children->insurer)) {
            $type->setInsurer(FHIRReference::xmlUnserialize($children->insurer));
        }
        if (isset($children->item)) {
            foreach($children->item as $child) {
                $type->addItem(FHIRClaimResponseItem::xmlUnserialize($child));
            }
        }
        if (isset($children->outcome)) {
            $type->setOutcome(FHIRClaimProcessingCodes::xmlUnserialize($children->outcome));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->payeeType)) {
            $type->setPayeeType(FHIRCodeableConcept::xmlUnserialize($children->payeeType));
        }
        if (isset($children->payment)) {
            $type->setPayment(FHIRClaimResponsePayment::xmlUnserialize($children->payment));
        }
        if (isset($children->preAuthPeriod)) {
            $type->setPreAuthPeriod(FHIRPeriod::xmlUnserialize($children->preAuthPeriod));
        }
        if (isset($attributes->preAuthRef)) {
            $type->setPreAuthRef((string)$attributes->preAuthRef);
        }
        if (isset($children->preAuthRef)) {
            $type->setPreAuthRef(FHIRString::xmlUnserialize($children->preAuthRef));
        }
        if (isset($children->processNote)) {
            foreach($children->processNote as $child) {
                $type->addProcessNote(FHIRClaimResponseProcessNote::xmlUnserialize($child));
            }
        }
        if (isset($children->request)) {
            $type->setRequest(FHIRReference::xmlUnserialize($children->request));
        }
        if (isset($children->requestor)) {
            $type->setRequestor(FHIRReference::xmlUnserialize($children->requestor));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($children->status));
        }
        if (isset($children->subType)) {
            $type->setSubType(FHIRCodeableConcept::xmlUnserialize($children->subType));
        }
        if (isset($children->total)) {
            foreach($children->total as $child) {
                $type->addTotal(FHIRClaimResponseTotal::xmlUnserialize($child));
            }
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
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ClaimResponse xmlns="http://hl7.org/fhir"></ClaimResponse>');
        }
        if ([] !== ($vs = $this->getAddItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADD_ITEM));
            }
        }
        if ([] !== ($vs = $this->getAdjudication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADJUDICATION));
            }
        }
        if ([] !== ($vs = $this->getCommunicationRequest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMMUNICATION_REQUEST));
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
        if (null !== ($v = $this->getFormCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FORM_CODE));
        }
        if (null !== ($v = $this->getFundsReserve())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FUNDS_RESERVE));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSURANCE));
            }
        }
        if (null !== ($v = $this->getInsurer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INSURER));
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM));
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME));
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT));
        }
        if (null !== ($v = $this->getPayeeType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYEE_TYPE));
        }
        if (null !== ($v = $this->getPayment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYMENT));
        }
        if (null !== ($v = $this->getPreAuthPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRE_AUTH_PERIOD));
        }
        if (null !== ($v = $this->getPreAuthRef())) {
            $sxe->addAttribute(self::FIELD_PRE_AUTH_REF, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRE_AUTH_REF));
            }
        }
        if ([] !== ($vs = $this->getProcessNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROCESS_NOTE));
            }
        }
        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST));
        }
        if (null !== ($v = $this->getRequestor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUESTOR));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        if (null !== ($v = $this->getSubType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_TYPE));
        }
        if ([] !== ($vs = $this->getTotal())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TOTAL));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USE));
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
        if ([] !== ($vs = $this->getAdjudication())) {
            $a[self::FIELD_ADJUDICATION] = $vs;
        }
        if ([] !== ($vs = $this->getCommunicationRequest())) {
            $a[self::FIELD_COMMUNICATION_REQUEST] = $vs;
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
        if (null !== ($v = $this->getFormCode())) {
            $a[self::FIELD_FORM_CODE] = $v;
        }
        if (null !== ($v = $this->getFundsReserve())) {
            $a[self::FIELD_FUNDS_RESERVE] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
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
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPayeeType())) {
            $a[self::FIELD_PAYEE_TYPE] = $v;
        }
        if (null !== ($v = $this->getPayment())) {
            $a[self::FIELD_PAYMENT] = $v;
        }
        if (null !== ($v = $this->getPreAuthPeriod())) {
            $a[self::FIELD_PRE_AUTH_PERIOD] = $v;
        }
        if (null !== ($v = $this->getPreAuthRef())) {
            $a[self::FIELD_PRE_AUTH_REF] = (string)$v;
            $a[self::FIELD_PRE_AUTH_REF_EXT] = $v;
        }
        if ([] !== ($vs = $this->getProcessNote())) {
            $a[self::FIELD_PROCESS_NOTE] = $vs;
        }
        if (null !== ($v = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $v;
        }
        if (null !== ($v = $this->getRequestor())) {
            $a[self::FIELD_REQUESTOR] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getSubType())) {
            $a[self::FIELD_SUB_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getTotal())) {
            $a[self::FIELD_TOTAL] = $vs;
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