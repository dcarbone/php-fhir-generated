<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 29th, 2019 23:11+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceParticipant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInvoiceStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Invoice containing collected ChargeItems from an Account with calculated
 * individual and total price for Billing purpose.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRInvoice
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRInvoice extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INVOICE;
    const FIELD_ACCOUNT = 'account';
    const FIELD_CANCELLED_REASON = 'cancelledReason';
    const FIELD_CANCELLED_REASON_EXT = '_cancelledReason';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_ISSUER = 'issuer';
    const FIELD_LINE_ITEM = 'lineItem';
    const FIELD_NOTE = 'note';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_PAYMENT_TERMS = 'paymentTerms';
    const FIELD_PAYMENT_TERMS_EXT = '_paymentTerms';
    const FIELD_RECIPIENT = 'recipient';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TOTAL_GROSS = 'totalGross';
    const FIELD_TOTAL_NET = 'totalNet';
    const FIELD_TOTAL_PRICE_COMPONENT = 'totalPriceComponent';
    const FIELD_TYPE = 'type';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Account which is supposed to be balanced with this Invoice.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $account = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * In case of Invoice cancellation a reason must be given (entered in error,
     * superseded by corrected invoice etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $cancelledReason = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/time(s) of when this Invoice was posted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier of this Invoice, often used for reference in correspondence about
     * this invoice or for tracking of payments.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organizationissuing the Invoice.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $issuer = null;

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * Each line item represents one charge for goods and services rendered. Details
     * such as date, code and amount are found in the referenced ChargeItem resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem[]
     */
    protected $lineItem = [];

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the invoice by the issuer, subject, or other participants.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceParticipant[]
     */
    protected $participant = [];

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Payment details such as banking details, period of payment, deductibles, methods
     * of payment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $paymentTerms = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or Organization responsible for balancing of this invoice.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $recipient = null;

    /**
     * Codes identifying the lifecycle stage of an Invoice.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the Invoice.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInvoiceStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or set of individuals receiving the goods and services billed in
     * this invoice.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Invoice total, tax included.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    protected $totalGross = null;

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Invoice total , taxes excluded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    protected $totalNet = null;

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The total amount for the Invoice may be calculated as the sum of the line items
     * with surcharges/deductions that apply in certain conditions. The priceComponent
     * element can be used to offer transparency to the recipient of the Invoice of how
     * the total price was calculated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent[]
     */
    protected $totalPriceComponent = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Invoice depending on domain, realm an usage (e.g. internal/external,
     * dental, preliminary).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * Validation map for fields in type Invoice
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRInvoice Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRInvoice::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACCOUNT])) {
            if ($data[self::FIELD_ACCOUNT] instanceof FHIRReference) {
                $this->setAccount($data[self::FIELD_ACCOUNT]);
            } else {
                $this->setAccount(new FHIRReference($data[self::FIELD_ACCOUNT]));
            }
        }
        if (isset($data[self::FIELD_CANCELLED_REASON])) {
            $ext = (isset($data[self::FIELD_CANCELLED_REASON_EXT]) && is_array($data[self::FIELD_CANCELLED_REASON_EXT]))
                ? $data[self::FIELD_CANCELLED_REASON_EXT]
                : null;
            if ($data[self::FIELD_CANCELLED_REASON] instanceof FHIRString) {
                $this->setCancelledReason($data[self::FIELD_CANCELLED_REASON]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_CANCELLED_REASON])) {
                    $this->setCancelledReason(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CANCELLED_REASON]] + $ext));
                } else if (is_array($data[self::FIELD_CANCELLED_REASON])) {
                    $this->setCancelledReason(new FHIRString(array_merge($ext, $data[self::FIELD_CANCELLED_REASON])));
                }
            } else {
                $this->setCancelledReason(new FHIRString($data[self::FIELD_CANCELLED_REASON]));
            }
        }
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DATE])) {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_DATE])) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $data[self::FIELD_DATE])));
                }
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
            }
        }
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
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_ISSUER])) {
            if ($data[self::FIELD_ISSUER] instanceof FHIRReference) {
                $this->setIssuer($data[self::FIELD_ISSUER]);
            } else {
                $this->setIssuer(new FHIRReference($data[self::FIELD_ISSUER]));
            }
        }
        if (isset($data[self::FIELD_LINE_ITEM])) {
            if (is_array($data[self::FIELD_LINE_ITEM])) {
                foreach($data[self::FIELD_LINE_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRInvoiceLineItem) {
                        $this->addLineItem($v);
                    } else {
                        $this->addLineItem(new FHIRInvoiceLineItem($v));
                    }
                }
            } else if ($data[self::FIELD_LINE_ITEM] instanceof FHIRInvoiceLineItem) {
                $this->addLineItem($data[self::FIELD_LINE_ITEM]);
            } else {
                $this->addLineItem(new FHIRInvoiceLineItem($data[self::FIELD_LINE_ITEM]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT])) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRInvoiceParticipant) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIRInvoiceParticipant($v));
                    }
                }
            } else if ($data[self::FIELD_PARTICIPANT] instanceof FHIRInvoiceParticipant) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIRInvoiceParticipant($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (isset($data[self::FIELD_PAYMENT_TERMS])) {
            $ext = (isset($data[self::FIELD_PAYMENT_TERMS_EXT]) && is_array($data[self::FIELD_PAYMENT_TERMS_EXT]))
                ? $data[self::FIELD_PAYMENT_TERMS_EXT]
                : null;
            if ($data[self::FIELD_PAYMENT_TERMS] instanceof FHIRMarkdown) {
                $this->setPaymentTerms($data[self::FIELD_PAYMENT_TERMS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PAYMENT_TERMS])) {
                    $this->setPaymentTerms(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_PAYMENT_TERMS]] + $ext));
                } else if (is_array($data[self::FIELD_PAYMENT_TERMS])) {
                    $this->setPaymentTerms(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_PAYMENT_TERMS])));
                }
            } else {
                $this->setPaymentTerms(new FHIRMarkdown($data[self::FIELD_PAYMENT_TERMS]));
            }
        }
        if (isset($data[self::FIELD_RECIPIENT])) {
            if ($data[self::FIELD_RECIPIENT] instanceof FHIRReference) {
                $this->setRecipient($data[self::FIELD_RECIPIENT]);
            } else {
                $this->setRecipient(new FHIRReference($data[self::FIELD_RECIPIENT]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRInvoiceStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRInvoiceStatus([FHIRInvoiceStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
                } else if (is_array($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRInvoiceStatus(array_merge($ext, $data[self::FIELD_STATUS])));
                }
            } else {
                $this->setStatus(new FHIRInvoiceStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TOTAL_GROSS])) {
            if ($data[self::FIELD_TOTAL_GROSS] instanceof FHIRMoney) {
                $this->setTotalGross($data[self::FIELD_TOTAL_GROSS]);
            } else {
                $this->setTotalGross(new FHIRMoney($data[self::FIELD_TOTAL_GROSS]));
            }
        }
        if (isset($data[self::FIELD_TOTAL_NET])) {
            if ($data[self::FIELD_TOTAL_NET] instanceof FHIRMoney) {
                $this->setTotalNet($data[self::FIELD_TOTAL_NET]);
            } else {
                $this->setTotalNet(new FHIRMoney($data[self::FIELD_TOTAL_NET]));
            }
        }
        if (isset($data[self::FIELD_TOTAL_PRICE_COMPONENT])) {
            if (is_array($data[self::FIELD_TOTAL_PRICE_COMPONENT])) {
                foreach($data[self::FIELD_TOTAL_PRICE_COMPONENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRInvoicePriceComponent) {
                        $this->addTotalPriceComponent($v);
                    } else {
                        $this->addTotalPriceComponent(new FHIRInvoicePriceComponent($v));
                    }
                }
            } else if ($data[self::FIELD_TOTAL_PRICE_COMPONENT] instanceof FHIRInvoicePriceComponent) {
                $this->addTotalPriceComponent($data[self::FIELD_TOTAL_PRICE_COMPONENT]);
            } else {
                $this->addTotalPriceComponent(new FHIRInvoicePriceComponent($data[self::FIELD_TOTAL_PRICE_COMPONENT]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Invoice{$xmlns}></Invoice>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Account which is supposed to be balanced with this Invoice.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Account which is supposed to be balanced with this Invoice.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $account
     * @return static
     */
    public function setAccount(FHIRReference $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * In case of Invoice cancellation a reason must be given (entered in error,
     * superseded by corrected invoice etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getCancelledReason()
    {
        return $this->cancelledReason;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * In case of Invoice cancellation a reason must be given (entered in error,
     * superseded by corrected invoice etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $cancelledReason
     * @return static
     */
    public function setCancelledReason($cancelledReason = null)
    {
        if (null === $cancelledReason) {
            $this->cancelledReason = null;
            return $this;
        }
        if ($cancelledReason instanceof FHIRString) {
            $this->cancelledReason = $cancelledReason;
            return $this;
        }
        $this->cancelledReason = new FHIRString($cancelledReason);
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
     * Date/time(s) of when this Invoice was posted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date/time(s) of when this Invoice was posted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier of this Invoice, often used for reference in correspondence about
     * this invoice or for tracking of payments.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier of this Invoice, often used for reference in correspondence about
     * this invoice or for tracking of payments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier of this Invoice, often used for reference in correspondence about
     * this invoice or for tracking of payments.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organizationissuing the Invoice.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organizationissuing the Invoice.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $issuer
     * @return static
     */
    public function setIssuer(FHIRReference $issuer = null)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * Each line item represents one charge for goods and services rendered. Details
     * such as date, code and amount are found in the referenced ChargeItem resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem[]
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * Each line item represents one charge for goods and services rendered. Details
     * such as date, code and amount are found in the referenced ChargeItem resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem $lineItem
     * @return static
     */
    public function addLineItem(FHIRInvoiceLineItem $lineItem = null)
    {
        $this->lineItem[] = $lineItem;
        return $this;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * Each line item represents one charge for goods and services rendered. Details
     * such as date, code and amount are found in the referenced ChargeItem resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem[] $lineItem
     * @return static
     */
    public function setLineItem(array $lineItem = [])
    {
        $this->lineItem = [];
        if ([] === $lineItem) {
            return $this;
        }
        foreach($lineItem as $v) {
            if ($v instanceof FHIRInvoiceLineItem) {
                $this->addLineItem($v);
            } else {
                $this->addLineItem(new FHIRInvoiceLineItem($v));
            }
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the invoice by the issuer, subject, or other participants.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the invoice by the issuer, subject, or other participants.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the invoice by the issuer, subject, or other participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceParticipant $participant
     * @return static
     */
    public function addParticipant(FHIRInvoiceParticipant $participant = null)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceParticipant[] $participant
     * @return static
     */
    public function setParticipant(array $participant = [])
    {
        $this->participant = [];
        if ([] === $participant) {
            return $this;
        }
        foreach($participant as $v) {
            if ($v instanceof FHIRInvoiceParticipant) {
                $this->addParticipant($v);
            } else {
                $this->addParticipant(new FHIRInvoiceParticipant($v));
            }
        }
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Payment details such as banking details, period of payment, deductibles, methods
     * of payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Payment details such as banking details, period of payment, deductibles, methods
     * of payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $paymentTerms
     * @return static
     */
    public function setPaymentTerms($paymentTerms = null)
    {
        if (null === $paymentTerms) {
            $this->paymentTerms = null;
            return $this;
        }
        if ($paymentTerms instanceof FHIRMarkdown) {
            $this->paymentTerms = $paymentTerms;
            return $this;
        }
        $this->paymentTerms = new FHIRMarkdown($paymentTerms);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or Organization responsible for balancing of this invoice.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or Organization responsible for balancing of this invoice.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $recipient
     * @return static
     */
    public function setRecipient(FHIRReference $recipient = null)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Codes identifying the lifecycle stage of an Invoice.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the Invoice.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInvoiceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Codes identifying the lifecycle stage of an Invoice.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the Invoice.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInvoiceStatus $status
     * @return static
     */
    public function setStatus(FHIRInvoiceStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or set of individuals receiving the goods and services billed in
     * this invoice.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual or set of individuals receiving the goods and services billed in
     * this invoice.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Invoice total, tax included.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    public function getTotalGross()
    {
        return $this->totalGross;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Invoice total, tax included.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $totalGross
     * @return static
     */
    public function setTotalGross(FHIRMoney $totalGross = null)
    {
        $this->totalGross = $totalGross;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Invoice total , taxes excluded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    public function getTotalNet()
    {
        return $this->totalNet;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Invoice total , taxes excluded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $totalNet
     * @return static
     */
    public function setTotalNet(FHIRMoney $totalNet = null)
    {
        $this->totalNet = $totalNet;
        return $this;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The total amount for the Invoice may be calculated as the sum of the line items
     * with surcharges/deductions that apply in certain conditions. The priceComponent
     * element can be used to offer transparency to the recipient of the Invoice of how
     * the total price was calculated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent[]
     */
    public function getTotalPriceComponent()
    {
        return $this->totalPriceComponent;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The total amount for the Invoice may be calculated as the sum of the line items
     * with surcharges/deductions that apply in certain conditions. The priceComponent
     * element can be used to offer transparency to the recipient of the Invoice of how
     * the total price was calculated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent $totalPriceComponent
     * @return static
     */
    public function addTotalPriceComponent(FHIRInvoicePriceComponent $totalPriceComponent = null)
    {
        $this->totalPriceComponent[] = $totalPriceComponent;
        return $this;
    }

    /**
     * Invoice containing collected ChargeItems from an Account with calculated
     * individual and total price for Billing purpose.
     *
     * The total amount for the Invoice may be calculated as the sum of the line items
     * with surcharges/deductions that apply in certain conditions. The priceComponent
     * element can be used to offer transparency to the recipient of the Invoice of how
     * the total price was calculated.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent[] $totalPriceComponent
     * @return static
     */
    public function setTotalPriceComponent(array $totalPriceComponent = [])
    {
        $this->totalPriceComponent = [];
        if ([] === $totalPriceComponent) {
            return $this;
        }
        foreach($totalPriceComponent as $v) {
            if ($v instanceof FHIRInvoicePriceComponent) {
                $this->addTotalPriceComponent($v);
            } else {
                $this->addTotalPriceComponent(new FHIRInvoicePriceComponent($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Invoice depending on domain, realm an usage (e.g. internal/external,
     * dental, preliminary).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * Type of Invoice depending on domain, realm an usage (e.g. internal/external,
     * dental, preliminary).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInvoice $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInvoice
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
                throw new \DomainException(sprintf('FHIRInvoice::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRInvoice::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRInvoice;
        } elseif (!is_object($type) || !($type instanceof FHIRInvoice)) {
            throw new \RuntimeException(sprintf(
                'FHIRInvoice::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRInvoice or null, %s seen.',
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
        if (isset($children->account)) {
            $type->setAccount(FHIRReference::xmlUnserialize($children->account));
        }
        if (isset($attributes->cancelledReason)) {
            $type->setCancelledReason((string)$attributes->cancelledReason);
        }
        if (isset($children->cancelledReason)) {
            $type->setCancelledReason(FHIRString::xmlUnserialize($children->cancelledReason));
        }
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->issuer)) {
            $type->setIssuer(FHIRReference::xmlUnserialize($children->issuer));
        }
        if (isset($children->lineItem)) {
            foreach($children->lineItem as $child) {
                $type->addLineItem(FHIRInvoiceLineItem::xmlUnserialize($child));
            }
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->participant)) {
            foreach($children->participant as $child) {
                $type->addParticipant(FHIRInvoiceParticipant::xmlUnserialize($child));
            }
        }
        if (isset($attributes->paymentTerms)) {
            $type->setPaymentTerms((string)$attributes->paymentTerms);
        }
        if (isset($children->paymentTerms)) {
            $type->setPaymentTerms(FHIRMarkdown::xmlUnserialize($children->paymentTerms));
        }
        if (isset($children->recipient)) {
            $type->setRecipient(FHIRReference::xmlUnserialize($children->recipient));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRInvoiceStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->totalGross)) {
            $type->setTotalGross(FHIRMoney::xmlUnserialize($children->totalGross));
        }
        if (isset($children->totalNet)) {
            $type->setTotalNet(FHIRMoney::xmlUnserialize($children->totalNet));
        }
        if (isset($children->totalPriceComponent)) {
            foreach($children->totalPriceComponent as $child) {
                $type->addTotalPriceComponent(FHIRInvoicePriceComponent::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
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

        if (null !== ($v = $this->getAccount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACCOUNT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCancelledReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CANCELLED_REASON, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIssuer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ISSUER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getLineItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINE_ITEM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPaymentTerms())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYMENT_TERMS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRecipient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECIPIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTotalGross())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TOTAL_GROSS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTotalNet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TOTAL_NET, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getTotalPriceComponent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TOTAL_PRICE_COMPONENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAccount())) {
            $a[self::FIELD_ACCOUNT] = $v;
        }
        if (null !== ($v = $this->getCancelledReason())) {
            $a[self::FIELD_CANCELLED_REASON] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_CANCELLED_REASON_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getIssuer())) {
            $a[self::FIELD_ISSUER] = $v;
        }
        if ([] !== ($vs = $this->getLineItem())) {
            $a[self::FIELD_LINE_ITEM] = $vs;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $a[self::FIELD_PARTICIPANT] = $vs;
        }
        if (null !== ($v = $this->getPaymentTerms())) {
            $a[self::FIELD_PAYMENT_TERMS] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_PAYMENT_TERMS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getRecipient())) {
            $a[self::FIELD_RECIPIENT] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getTotalGross())) {
            $a[self::FIELD_TOTAL_GROSS] = $v;
        }
        if (null !== ($v = $this->getTotalNet())) {
            $a[self::FIELD_TOTAL_NET] = $v;
        }
        if ([] !== ($vs = $this->getTotalPriceComponent())) {
            $a[self::FIELD_TOTAL_PRICE_COMPONENT] = $vs;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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