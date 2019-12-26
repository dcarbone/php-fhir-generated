<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
 * policy or agreement.
 *
 * Class FHIRContractValuedItem
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractValuedItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM;
    const FIELD_EFFECTIVE_TIME = 'effectiveTime';
    const FIELD_EFFECTIVE_TIME_EXT = '_effectiveTime';
    const FIELD_ENTITY_CODEABLE_CONCEPT = 'entityCodeableConcept';
    const FIELD_ENTITY_REFERENCE = 'entityReference';
    const FIELD_FACTOR = 'factor';
    const FIELD_FACTOR_EXT = '_factor';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LINK_ID = 'linkId';
    const FIELD_LINK_ID_EXT = '_linkId';
    const FIELD_NET = 'net';
    const FIELD_PAYMENT = 'payment';
    const FIELD_PAYMENT_EXT = '_payment';
    const FIELD_PAYMENT_DATE = 'paymentDate';
    const FIELD_PAYMENT_DATE_EXT = '_paymentDate';
    const FIELD_POINTS = 'points';
    const FIELD_POINTS_EXT = '_points';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_RECIPIENT = 'recipient';
    const FIELD_RESPONSIBLE = 'responsible';
    const FIELD_SECURITY_LABEL_NUMBER = 'securityLabelNumber';
    const FIELD_SECURITY_LABEL_NUMBER_EXT = '_securityLabelNumber';
    const FIELD_UNIT_PRICE = 'unitPrice';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the time during which this Contract ValuedItem information is
     * effective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $effectiveTime = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of Contract Valued Item that may be priced. (choose any one of
     * entity*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $entityCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of Contract Valued Item that may be priced. (choose any one of
     * entity*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $entityReference = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of the Contract Valued Item delivered. The concept of a Factor allows for a
     * discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $factor = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a Contract Valued Item instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the clause or question text related to the context of this valuedItem in
     * the referenced form or QuestionnaireResponse.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $linkId = [];

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Expresses the product of the Contract Valued Item unitQuantity and the
     * unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per
     * Point) * factor Number * points = net Amount. Quantity, factor and points are
     * assumed to be 1 if not supplied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    protected $net = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Terms of valuation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $payment = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When payment is due.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $paymentDate = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An amount that expresses the weighting (based on difficulty, cost and/or
     * resource intensiveness) associated with the Contract Valued Item delivered. The
     * concept of Points allows for assignment of point values for a Contract Valued
     * Item, such that a monetary amount can be assigned to each point.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $points = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the units by which the Contract Valued Item is measured or counted,
     * and quantifies the countable or measurable Contract Valued Item instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $quantity = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who will receive payment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $recipient = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who will make payment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $responsible = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A set of security labels that define which terms are controlled by this
     * condition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[]
     */
    protected $securityLabelNumber = [];

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Contract Valued Item unit valuation measure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    protected $unitPrice = null;

    /**
     * Validation map for fields in type Contract.ValuedItem
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRContractValuedItem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractValuedItem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_EFFECTIVE_TIME]) || isset($data[self::FIELD_EFFECTIVE_TIME_EXT])) {
            if (isset($data[self::FIELD_EFFECTIVE_TIME])) {
                $value = $data[self::FIELD_EFFECTIVE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EFFECTIVE_TIME_EXT]) && is_array($data[self::FIELD_EFFECTIVE_TIME_EXT])) {
                $ext = $data[self::FIELD_EFFECTIVE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setEffectiveTime($value);
                } else if (is_array($value)) {
                    $this->setEffectiveTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setEffectiveTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEffectiveTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_ENTITY_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_ENTITY_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setEntityCodeableConcept($data[self::FIELD_ENTITY_CODEABLE_CONCEPT]);
            } else {
                $this->setEntityCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_ENTITY_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_ENTITY_REFERENCE])) {
            if ($data[self::FIELD_ENTITY_REFERENCE] instanceof FHIRReference) {
                $this->setEntityReference($data[self::FIELD_ENTITY_REFERENCE]);
            } else {
                $this->setEntityReference(new FHIRReference($data[self::FIELD_ENTITY_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_FACTOR]) || isset($data[self::FIELD_FACTOR_EXT])) {
            if (isset($data[self::FIELD_FACTOR])) {
                $value = $data[self::FIELD_FACTOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FACTOR_EXT]) && is_array($data[self::FIELD_FACTOR_EXT])) {
                $ext = $data[self::FIELD_FACTOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setFactor($value);
                } else if (is_array($value)) {
                    $this->setFactor(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFactor(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LINK_ID]) || isset($data[self::FIELD_LINK_ID_EXT])) {
            if (isset($data[self::FIELD_LINK_ID])) {
                $value = $data[self::FIELD_LINK_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT])) {
                $ext = $data[self::FIELD_LINK_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addLinkId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addLinkId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addLinkId(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addLinkId(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addLinkId(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_NET])) {
            if ($data[self::FIELD_NET] instanceof FHIRMoney) {
                $this->setNet($data[self::FIELD_NET]);
            } else {
                $this->setNet(new FHIRMoney($data[self::FIELD_NET]));
            }
        }
        if (isset($data[self::FIELD_PAYMENT]) || isset($data[self::FIELD_PAYMENT_EXT])) {
            if (isset($data[self::FIELD_PAYMENT])) {
                $value = $data[self::FIELD_PAYMENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PAYMENT_EXT]) && is_array($data[self::FIELD_PAYMENT_EXT])) {
                $ext = $data[self::FIELD_PAYMENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPayment($value);
                } else if (is_array($value)) {
                    $this->setPayment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPayment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPayment(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PAYMENT_DATE]) || isset($data[self::FIELD_PAYMENT_DATE_EXT])) {
            if (isset($data[self::FIELD_PAYMENT_DATE])) {
                $value = $data[self::FIELD_PAYMENT_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PAYMENT_DATE_EXT]) && is_array($data[self::FIELD_PAYMENT_DATE_EXT])) {
                $ext = $data[self::FIELD_PAYMENT_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setPaymentDate($value);
                } else if (is_array($value)) {
                    $this->setPaymentDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setPaymentDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPaymentDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_POINTS]) || isset($data[self::FIELD_POINTS_EXT])) {
            if (isset($data[self::FIELD_POINTS])) {
                $value = $data[self::FIELD_POINTS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_POINTS_EXT]) && is_array($data[self::FIELD_POINTS_EXT])) {
                $ext = $data[self::FIELD_POINTS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPoints($value);
                } else if (is_array($value)) {
                    $this->setPoints(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPoints(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPoints(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_RECIPIENT])) {
            if ($data[self::FIELD_RECIPIENT] instanceof FHIRReference) {
                $this->setRecipient($data[self::FIELD_RECIPIENT]);
            } else {
                $this->setRecipient(new FHIRReference($data[self::FIELD_RECIPIENT]));
            }
        }
        if (isset($data[self::FIELD_RESPONSIBLE])) {
            if ($data[self::FIELD_RESPONSIBLE] instanceof FHIRReference) {
                $this->setResponsible($data[self::FIELD_RESPONSIBLE]);
            } else {
                $this->setResponsible(new FHIRReference($data[self::FIELD_RESPONSIBLE]));
            }
        }
        if (isset($data[self::FIELD_SECURITY_LABEL_NUMBER]) || isset($data[self::FIELD_SECURITY_LABEL_NUMBER_EXT])) {
            if (isset($data[self::FIELD_SECURITY_LABEL_NUMBER])) {
                $value = $data[self::FIELD_SECURITY_LABEL_NUMBER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SECURITY_LABEL_NUMBER_EXT]) && is_array($data[self::FIELD_SECURITY_LABEL_NUMBER_EXT])) {
                $ext = $data[self::FIELD_SECURITY_LABEL_NUMBER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->addSecurityLabelNumber($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUnsignedInt) {
                            $this->addSecurityLabelNumber($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSecurityLabelNumber(new FHIRUnsignedInt(array_merge($v, $iext)));
                            } else {
                                $this->addSecurityLabelNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSecurityLabelNumber(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->addSecurityLabelNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSecurityLabelNumber(new FHIRUnsignedInt($iext));
                }
            }
        }
        if (isset($data[self::FIELD_UNIT_PRICE])) {
            if ($data[self::FIELD_UNIT_PRICE] instanceof FHIRMoney) {
                $this->setUnitPrice($data[self::FIELD_UNIT_PRICE]);
            } else {
                $this->setUnitPrice(new FHIRMoney($data[self::FIELD_UNIT_PRICE]));
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
        return "<ContractValuedItem{$xmlns}></ContractValuedItem>";
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the time during which this Contract ValuedItem information is
     * effective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getEffectiveTime()
    {
        return $this->effectiveTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the time during which this Contract ValuedItem information is
     * effective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $effectiveTime
     * @return static
     */
    public function setEffectiveTime($effectiveTime = null)
    {
        if (null === $effectiveTime) {
            $this->effectiveTime = null;
            return $this;
        }
        if ($effectiveTime instanceof FHIRDateTime) {
            $this->effectiveTime = $effectiveTime;
            return $this;
        }
        $this->effectiveTime = new FHIRDateTime($effectiveTime);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of Contract Valued Item that may be priced. (choose any one of
     * entity*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getEntityCodeableConcept()
    {
        return $this->entityCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of Contract Valued Item that may be priced. (choose any one of
     * entity*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $entityCodeableConcept
     * @return static
     */
    public function setEntityCodeableConcept(FHIRCodeableConcept $entityCodeableConcept = null)
    {
        $this->entityCodeableConcept = $entityCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of Contract Valued Item that may be priced. (choose any one of
     * entity*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getEntityReference()
    {
        return $this->entityReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific type of Contract Valued Item that may be priced. (choose any one of
     * entity*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $entityReference
     * @return static
     */
    public function setEntityReference(FHIRReference $entityReference = null)
    {
        $this->entityReference = $entityReference;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of the Contract Valued Item delivered. The concept of a Factor allows for a
     * discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of the Contract Valued Item delivered. The concept of a Factor allows for a
     * discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $factor
     * @return static
     */
    public function setFactor($factor = null)
    {
        if (null === $factor) {
            $this->factor = null;
            return $this;
        }
        if ($factor instanceof FHIRDecimal) {
            $this->factor = $factor;
            return $this;
        }
        $this->factor = new FHIRDecimal($factor);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a Contract Valued Item instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
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
     * Identifies a Contract Valued Item instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the clause or question text related to the context of this valuedItem in
     * the referenced form or QuestionnaireResponse.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the clause or question text related to the context of this valuedItem in
     * the referenced form or QuestionnaireResponse.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $linkId
     * @return static
     */
    public function addLinkId($linkId = null)
    {
        if (null === $linkId) {
            $this->linkId = [];
            return $this;
        }
        if ($linkId instanceof FHIRString) {
            $this->linkId[] = $linkId;
            return $this;
        }
        $this->linkId[] = new FHIRString($linkId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the clause or question text related to the context of this valuedItem in
     * the referenced form or QuestionnaireResponse.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $linkId
     * @return static
     */
    public function setLinkId(array $linkId = [])
    {
        $this->linkId = [];
        if ([] === $linkId) {
            return $this;
        }
        foreach($linkId as $v) {
            if ($v instanceof FHIRString) {
                $this->addLinkId($v);
            } else {
                $this->addLinkId(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Expresses the product of the Contract Valued Item unitQuantity and the
     * unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per
     * Point) * factor Number * points = net Amount. Quantity, factor and points are
     * assumed to be 1 if not supplied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Expresses the product of the Contract Valued Item unitQuantity and the
     * unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per
     * Point) * factor Number * points = net Amount. Quantity, factor and points are
     * assumed to be 1 if not supplied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $net
     * @return static
     */
    public function setNet(FHIRMoney $net = null)
    {
        $this->net = $net;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Terms of valuation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Terms of valuation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $payment
     * @return static
     */
    public function setPayment($payment = null)
    {
        if (null === $payment) {
            $this->payment = null;
            return $this;
        }
        if ($payment instanceof FHIRString) {
            $this->payment = $payment;
            return $this;
        }
        $this->payment = new FHIRString($payment);
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
     * When payment is due.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When payment is due.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $paymentDate
     * @return static
     */
    public function setPaymentDate($paymentDate = null)
    {
        if (null === $paymentDate) {
            $this->paymentDate = null;
            return $this;
        }
        if ($paymentDate instanceof FHIRDateTime) {
            $this->paymentDate = $paymentDate;
            return $this;
        }
        $this->paymentDate = new FHIRDateTime($paymentDate);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An amount that expresses the weighting (based on difficulty, cost and/or
     * resource intensiveness) associated with the Contract Valued Item delivered. The
     * concept of Points allows for assignment of point values for a Contract Valued
     * Item, such that a monetary amount can be assigned to each point.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An amount that expresses the weighting (based on difficulty, cost and/or
     * resource intensiveness) associated with the Contract Valued Item delivered. The
     * concept of Points allows for assignment of point values for a Contract Valued
     * Item, such that a monetary amount can be assigned to each point.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $points
     * @return static
     */
    public function setPoints($points = null)
    {
        if (null === $points) {
            $this->points = null;
            return $this;
        }
        if ($points instanceof FHIRDecimal) {
            $this->points = $points;
            return $this;
        }
        $this->points = new FHIRDecimal($points);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the units by which the Contract Valued Item is measured or counted,
     * and quantifies the countable or measurable Contract Valued Item instances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the units by which the Contract Valued Item is measured or counted,
     * and quantifies the countable or measurable Contract Valued Item instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who will receive payment.
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
     * Who will receive payment.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who will make payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who will make payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $responsible
     * @return static
     */
    public function setResponsible(FHIRReference $responsible = null)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A set of security labels that define which terms are controlled by this
     * condition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[]
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A set of security labels that define which terms are controlled by this
     * condition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $securityLabelNumber
     * @return static
     */
    public function addSecurityLabelNumber($securityLabelNumber = null)
    {
        if (null === $securityLabelNumber) {
            $this->securityLabelNumber = [];
            return $this;
        }
        if ($securityLabelNumber instanceof FHIRUnsignedInt) {
            $this->securityLabelNumber[] = $securityLabelNumber;
            return $this;
        }
        $this->securityLabelNumber[] = new FHIRUnsignedInt($securityLabelNumber);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A set of security labels that define which terms are controlled by this
     * condition.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[] $securityLabelNumber
     * @return static
     */
    public function setSecurityLabelNumber(array $securityLabelNumber = [])
    {
        $this->securityLabelNumber = [];
        if ([] === $securityLabelNumber) {
            return $this;
        }
        foreach($securityLabelNumber as $v) {
            if ($v instanceof FHIRUnsignedInt) {
                $this->addSecurityLabelNumber($v);
            } else {
                $this->addSecurityLabelNumber(new FHIRUnsignedInt($v));
            }
        }
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Contract Valued Item unit valuation measure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Contract Valued Item unit valuation measure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $unitPrice
     * @return static
     */
    public function setUnitPrice(FHIRMoney $unitPrice = null)
    {
        $this->unitPrice = $unitPrice;
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
        if (null !== ($v = $this->getEffectiveTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEntityCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENTITY_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEntityReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENTITY_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFactor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FACTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLinkId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINK_ID, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPayment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAYMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPaymentDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAYMENT_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPoints())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POINTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecipient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECIPIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResponsible())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESPONSIBLE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSecurityLabelNumber())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SECURITY_LABEL_NUMBER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getUnitPrice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT_PRICE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_TIME])) {
            $v = $this->getEffectiveTime();
            foreach($validationRules[self::FIELD_EFFECTIVE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_EFFECTIVE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_TIME])) {
                        $errs[self::FIELD_EFFECTIVE_TIME] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTITY_CODEABLE_CONCEPT])) {
            $v = $this->getEntityCodeableConcept();
            foreach($validationRules[self::FIELD_ENTITY_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_ENTITY_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTITY_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_ENTITY_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_ENTITY_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTITY_REFERENCE])) {
            $v = $this->getEntityReference();
            foreach($validationRules[self::FIELD_ENTITY_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_ENTITY_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTITY_REFERENCE])) {
                        $errs[self::FIELD_ENTITY_REFERENCE] = [];
                    }
                    $errs[self::FIELD_ENTITY_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FACTOR])) {
            $v = $this->getFactor();
            foreach($validationRules[self::FIELD_FACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_FACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FACTOR])) {
                        $errs[self::FIELD_FACTOR] = [];
                    }
                    $errs[self::FIELD_FACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK_ID])) {
            $v = $this->getLinkId();
            foreach($validationRules[self::FIELD_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK_ID])) {
                        $errs[self::FIELD_LINK_ID] = [];
                    }
                    $errs[self::FIELD_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NET])) {
            $v = $this->getNet();
            foreach($validationRules[self::FIELD_NET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_NET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NET])) {
                        $errs[self::FIELD_NET] = [];
                    }
                    $errs[self::FIELD_NET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYMENT])) {
            $v = $this->getPayment();
            foreach($validationRules[self::FIELD_PAYMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_PAYMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT])) {
                        $errs[self::FIELD_PAYMENT] = [];
                    }
                    $errs[self::FIELD_PAYMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYMENT_DATE])) {
            $v = $this->getPaymentDate();
            foreach($validationRules[self::FIELD_PAYMENT_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_PAYMENT_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYMENT_DATE])) {
                        $errs[self::FIELD_PAYMENT_DATE] = [];
                    }
                    $errs[self::FIELD_PAYMENT_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POINTS])) {
            $v = $this->getPoints();
            foreach($validationRules[self::FIELD_POINTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_POINTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POINTS])) {
                        $errs[self::FIELD_POINTS] = [];
                    }
                    $errs[self::FIELD_POINTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECIPIENT])) {
            $v = $this->getRecipient();
            foreach($validationRules[self::FIELD_RECIPIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_RECIPIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECIPIENT])) {
                        $errs[self::FIELD_RECIPIENT] = [];
                    }
                    $errs[self::FIELD_RECIPIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSIBLE])) {
            $v = $this->getResponsible();
            foreach($validationRules[self::FIELD_RESPONSIBLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_RESPONSIBLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSIBLE])) {
                        $errs[self::FIELD_RESPONSIBLE] = [];
                    }
                    $errs[self::FIELD_RESPONSIBLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY_LABEL_NUMBER])) {
            $v = $this->getSecurityLabelNumber();
            foreach($validationRules[self::FIELD_SECURITY_LABEL_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_SECURITY_LABEL_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY_LABEL_NUMBER])) {
                        $errs[self::FIELD_SECURITY_LABEL_NUMBER] = [];
                    }
                    $errs[self::FIELD_SECURITY_LABEL_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT_PRICE])) {
            $v = $this->getUnitPrice();
            foreach($validationRules[self::FIELD_UNIT_PRICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM, self::FIELD_UNIT_PRICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT_PRICE])) {
                        $errs[self::FIELD_UNIT_PRICE] = [];
                    }
                    $errs[self::FIELD_UNIT_PRICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem
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
                throw new \DomainException(sprintf('FHIRContractValuedItem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRContractValuedItem::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRContractValuedItem;
        } elseif (!is_object($type) || !($type instanceof FHIRContractValuedItem)) {
            throw new \RuntimeException(sprintf(
                'FHIRContractValuedItem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->effectiveTime)) {
            $type->setEffectiveTime(FHIRDateTime::xmlUnserialize($children->effectiveTime));
        }
        if (isset($attributes->effectiveTime)) {
            $pt = $type->getEffectiveTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->effectiveTime);
            } else {
                $type->setEffectiveTime((string)$attributes->effectiveTime);
            }
        }
        if (isset($children->entityCodeableConcept)) {
            $type->setEntityCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->entityCodeableConcept));
        }
        if (isset($children->entityReference)) {
            $type->setEntityReference(FHIRReference::xmlUnserialize($children->entityReference));
        }
        if (isset($children->factor)) {
            $type->setFactor(FHIRDecimal::xmlUnserialize($children->factor));
        }
        if (isset($attributes->factor)) {
            $pt = $type->getFactor();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->factor);
            } else {
                $type->setFactor((string)$attributes->factor);
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->linkId)) {
            foreach($children->linkId as $child) {
                $type->addLinkId(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->net)) {
            $type->setNet(FHIRMoney::xmlUnserialize($children->net));
        }
        if (isset($children->payment)) {
            $type->setPayment(FHIRString::xmlUnserialize($children->payment));
        }
        if (isset($attributes->payment)) {
            $pt = $type->getPayment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->payment);
            } else {
                $type->setPayment((string)$attributes->payment);
            }
        }
        if (isset($children->paymentDate)) {
            $type->setPaymentDate(FHIRDateTime::xmlUnserialize($children->paymentDate));
        }
        if (isset($attributes->paymentDate)) {
            $pt = $type->getPaymentDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->paymentDate);
            } else {
                $type->setPaymentDate((string)$attributes->paymentDate);
            }
        }
        if (isset($children->points)) {
            $type->setPoints(FHIRDecimal::xmlUnserialize($children->points));
        }
        if (isset($attributes->points)) {
            $pt = $type->getPoints();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->points);
            } else {
                $type->setPoints((string)$attributes->points);
            }
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($children->recipient)) {
            $type->setRecipient(FHIRReference::xmlUnserialize($children->recipient));
        }
        if (isset($children->responsible)) {
            $type->setResponsible(FHIRReference::xmlUnserialize($children->responsible));
        }
        if (isset($children->securityLabelNumber)) {
            foreach($children->securityLabelNumber as $child) {
                $type->addSecurityLabelNumber(FHIRUnsignedInt::xmlUnserialize($child));
            }
        }
        if (isset($children->unitPrice)) {
            $type->setUnitPrice(FHIRMoney::xmlUnserialize($children->unitPrice));
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
        if (null !== ($v = $this->getEffectiveTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEntityCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENTITY_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEntityReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENTITY_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFactor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FACTOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getLinkId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINK_ID, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getNet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPayment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPaymentDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAYMENT_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPoints())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_POINTS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRecipient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECIPIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResponsible())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSIBLE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSecurityLabelNumber())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SECURITY_LABEL_NUMBER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNIT_PRICE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getEffectiveTime())) {
            $a[self::FIELD_EFFECTIVE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_EFFECTIVE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEntityCodeableConcept())) {
            $a[self::FIELD_ENTITY_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getEntityReference())) {
            $a[self::FIELD_ENTITY_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getFactor())) {
            $a[self::FIELD_FACTOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_FACTOR_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getLinkId())) {
            $a[self::FIELD_LINK_ID] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LINK_ID][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_LINK_ID_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getNet())) {
            $a[self::FIELD_NET] = $v;
        }
        if (null !== ($v = $this->getPayment())) {
            $a[self::FIELD_PAYMENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PAYMENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPaymentDate())) {
            $a[self::FIELD_PAYMENT_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_PAYMENT_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPoints())) {
            $a[self::FIELD_POINTS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_POINTS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getRecipient())) {
            $a[self::FIELD_RECIPIENT] = $v;
        }
        if (null !== ($v = $this->getResponsible())) {
            $a[self::FIELD_RESPONSIBLE] = $v;
        }
        if ([] !== ($vs = $this->getSecurityLabelNumber())) {
            $a[self::FIELD_SECURITY_LABEL_NUMBER] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SECURITY_LABEL_NUMBER][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRUnsignedInt::FIELD_VALUE]) || array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_SECURITY_LABEL_NUMBER_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $a[self::FIELD_UNIT_PRICE] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}