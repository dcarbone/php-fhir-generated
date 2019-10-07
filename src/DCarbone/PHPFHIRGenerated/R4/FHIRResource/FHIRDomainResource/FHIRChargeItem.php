<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemPerformer;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRChargeItemStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The resource ChargeItem describes the provision of healthcare provider products
 * for a certain patient, therefore referring not only to the product, but
 * containing in addition details of the provision, like date, time, amounts and
 * participating organizations and persons. Main Usage of the ChargeItem is to
 * enable the billing process and internal cost allocation.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRChargeItem
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRChargeItem extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACCOUNT = 'account';
    const FIELD_BODYSITE = 'bodysite';
    const FIELD_CODE = 'code';
    const FIELD_CONTEXT = 'context';
    const FIELD_COST_CENTER = 'costCenter';
    const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    const FIELD_DEFINITION_URI = 'definitionUri';
    const FIELD_DEFINITION_URI_EXT = '_definitionUri';
    const FIELD_ENTERED_DATE = 'enteredDate';
    const FIELD_ENTERED_DATE_EXT = '_enteredDate';
    const FIELD_ENTERER = 'enterer';
    const FIELD_FACTOR_OVERRIDE = 'factorOverride';
    const FIELD_FACTOR_OVERRIDE_EXT = '_factorOverride';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_NOTE = 'note';
    const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    const FIELD_OCCURRENCE_PERIOD = 'occurrencePeriod';
    const FIELD_OCCURRENCE_TIMING = 'occurrenceTiming';
    const FIELD_OVERRIDE_REASON = 'overrideReason';
    const FIELD_OVERRIDE_REASON_EXT = '_overrideReason';
    const FIELD_PART_OF = 'partOf';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PERFORMING_ORGANIZATION = 'performingOrganization';
    const FIELD_PRICE_OVERRIDE = 'priceOverride';
    const FIELD_PRODUCT_CODEABLE_CONCEPT = 'productCodeableConcept';
    const FIELD_PRODUCT_REFERENCE = 'productReference';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_REASON = 'reason';
    const FIELD_REQUESTING_ORGANIZATION = 'requestingOrganization';
    const FIELD_SERVICE = 'service';
    const FIELD_STATUS = 'status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SUPPORTING_INFORMATION = 'supportingInformation';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Account into which this ChargeItems belongs.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $account = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The anatomical location where the related service has been applied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $bodysite = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that identifies the charge, like a billing code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter or episode of care that establishes the context for this event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $context = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The financial cost center permits the tracking of charge attribution.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $costCenter = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * References the source of pricing information, rules of application for the code
     * this ChargeItem uses.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    private $definitionCanonical = [];
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * References the (external) source of pricing information, rules of application
     * for the code this ChargeItem uses.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    private $definitionUri = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date the charge item was entered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $enteredDate = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The device, practitioner, etc. who entered the charge item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $enterer = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Factor overriding the factor determined by the rules associated with the code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    private $factorOverride = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this event performer or other systems.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Comments made about the event by the performer, subject or other participants.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date/time(s) or duration when the charged service was applied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $occurrenceDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date/time(s) or duration when the charged service was applied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $occurrencePeriod = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date/time(s) or duration when the charged service was applied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    private $occurrenceTiming = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the list price or the rule-based factor associated with the code is
     * overridden, this attribute can capture a text to indicate the reason for this
     * action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $overrideReason = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $partOf = [];
    /**
     * The resource ChargeItem describes the provision of healthcare provider products
     * for a certain patient, therefore referring not only to the product, but
     * containing in addition details of the provision, like date, time, amounts and
     * participating organizations and persons. Main Usage of the ChargeItem is to
     * enable the billing process and internal cost allocation.
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemPerformer[]
     */
    private $performer = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization requesting the service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $performingOrganization = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Total price of the charge overriding the list price associated with the code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    private $priceOverride = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the device, food, drug or other product being charged either by type
     * code or reference to an instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $productCodeableConcept = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the device, food, drug or other product being charged either by type
     * code or reference to an instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $productReference = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Quantity of which the charge item has been serviced.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    private $quantity = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $reason = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization performing the service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $requestingOrganization = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicated the rendered service that caused this charge.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $service = [];
    /**
     * Codes identifying the lifecycle stage of a ChargeItem.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the ChargeItem.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRChargeItemStatus
     */
    private $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual or set of individuals the action is being or was performed on.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $subject = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Further information supporting this charge.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $supportingInformation = [];

    /**
     * FHIRChargeItem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACCOUNT])) {
            if (is_array($data[self::FIELD_ACCOUNT])) {
                foreach($data[self::FIELD_ACCOUNT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addAccount($v);
                    } else {
                        $this->addAccount(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ACCOUNT] instanceof FHIRReference) {
                $this->addAccount($data[self::FIELD_ACCOUNT]);
            } else {
                $this->addAccount(new FHIRReference($data[self::FIELD_ACCOUNT]));
            }
        }
        if (isset($data[self::FIELD_BODYSITE])) {
            if (is_array($data[self::FIELD_BODYSITE])) {
                foreach($data[self::FIELD_BODYSITE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addBodysite($v);
                    } else {
                        $this->addBodysite(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_BODYSITE] instanceof FHIRCodeableConcept) {
                $this->addBodysite($data[self::FIELD_BODYSITE]);
            } else {
                $this->addBodysite(new FHIRCodeableConcept($data[self::FIELD_BODYSITE]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_COST_CENTER])) {
            if ($data[self::FIELD_COST_CENTER] instanceof FHIRReference) {
                $this->setCostCenter($data[self::FIELD_COST_CENTER]);
            } else {
                $this->setCostCenter(new FHIRReference($data[self::FIELD_COST_CENTER]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_CANONICAL])) {
            $ext = (isset($data[self::FIELD_DEFINITION_CANONICAL_EXT]) && is_array($data[self::FIELD_DEFINITION_CANONICAL_EXT]))
                ? $data[self::FIELD_DEFINITION_CANONICAL_EXT]
                : null;
            if (is_array($data[self::FIELD_DEFINITION_CANONICAL])) {
                foreach($data[self::FIELD_DEFINITION_CANONICAL] as $i => $v) {
                    if ($v instanceof FHIRCanonical) {
                        $this->addDefinitionCanonical($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addDefinitionCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addDefinitionCanonical(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_DEFINITION_CANONICAL] instanceof FHIRCanonical) {
                $this->addDefinitionCanonical($data[self::FIELD_DEFINITION_CANONICAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFINITION_CANONICAL])) {
                $this->addDefinitionCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_DEFINITION_CANONICAL]] + $ext));
            } else {
                $this->addDefinitionCanonical(new FHIRCanonical($data[self::FIELD_DEFINITION_CANONICAL]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_URI])) {
            $ext = (isset($data[self::FIELD_DEFINITION_URI_EXT]) && is_array($data[self::FIELD_DEFINITION_URI_EXT]))
                ? $data[self::FIELD_DEFINITION_URI_EXT]
                : null;
            if (is_array($data[self::FIELD_DEFINITION_URI])) {
                foreach($data[self::FIELD_DEFINITION_URI] as $i => $v) {
                    if ($v instanceof FHIRUri) {
                        $this->addDefinitionUri($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addDefinitionUri(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addDefinitionUri(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_DEFINITION_URI] instanceof FHIRUri) {
                $this->addDefinitionUri($data[self::FIELD_DEFINITION_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFINITION_URI])) {
                $this->addDefinitionUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_DEFINITION_URI]] + $ext));
            } else {
                $this->addDefinitionUri(new FHIRUri($data[self::FIELD_DEFINITION_URI]));
            }
        }
        if (isset($data[self::FIELD_ENTERED_DATE])) {
            $ext = (isset($data[self::FIELD_ENTERED_DATE_EXT]) && is_array($data[self::FIELD_ENTERED_DATE_EXT]))
                ? $data[self::FIELD_ENTERED_DATE_EXT]
                : null;
            if ($data[self::FIELD_ENTERED_DATE] instanceof FHIRDateTime) {
                $this->setEnteredDate($data[self::FIELD_ENTERED_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_ENTERED_DATE])) {
                $this->setEnteredDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_ENTERED_DATE]] + $ext));
            } else {
                $this->setEnteredDate(new FHIRDateTime($data[self::FIELD_ENTERED_DATE]));
            }
        }
        if (isset($data[self::FIELD_ENTERER])) {
            if ($data[self::FIELD_ENTERER] instanceof FHIRReference) {
                $this->setEnterer($data[self::FIELD_ENTERER]);
            } else {
                $this->setEnterer(new FHIRReference($data[self::FIELD_ENTERER]));
            }
        }
        if (isset($data[self::FIELD_FACTOR_OVERRIDE])) {
            $ext = (isset($data[self::FIELD_FACTOR_OVERRIDE_EXT]) && is_array($data[self::FIELD_FACTOR_OVERRIDE_EXT]))
                ? $data[self::FIELD_FACTOR_OVERRIDE_EXT]
                : null;
            if ($data[self::FIELD_FACTOR_OVERRIDE] instanceof FHIRDecimal) {
                $this->setFactorOverride($data[self::FIELD_FACTOR_OVERRIDE]);
            } elseif ($ext && is_scalar($data[self::FIELD_FACTOR_OVERRIDE])) {
                $this->setFactorOverride(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_FACTOR_OVERRIDE]] + $ext));
            } else {
                $this->setFactorOverride(new FHIRDecimal($data[self::FIELD_FACTOR_OVERRIDE]));
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
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
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
        if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]))
                ? $data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_OCCURRENCE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setOccurrenceDateTime($data[self::FIELD_OCCURRENCE_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_OCCURRENCE_DATE_TIME])) {
                $this->setOccurrenceDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_OCCURRENCE_DATE_TIME]] + $ext));
            } else {
                $this->setOccurrenceDateTime(new FHIRDateTime($data[self::FIELD_OCCURRENCE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_PERIOD])) {
            if ($data[self::FIELD_OCCURRENCE_PERIOD] instanceof FHIRPeriod) {
                $this->setOccurrencePeriod($data[self::FIELD_OCCURRENCE_PERIOD]);
            } else {
                $this->setOccurrencePeriod(new FHIRPeriod($data[self::FIELD_OCCURRENCE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_TIMING])) {
            if ($data[self::FIELD_OCCURRENCE_TIMING] instanceof FHIRTiming) {
                $this->setOccurrenceTiming($data[self::FIELD_OCCURRENCE_TIMING]);
            } else {
                $this->setOccurrenceTiming(new FHIRTiming($data[self::FIELD_OCCURRENCE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_OVERRIDE_REASON])) {
            $ext = (isset($data[self::FIELD_OVERRIDE_REASON_EXT]) && is_array($data[self::FIELD_OVERRIDE_REASON_EXT]))
                ? $data[self::FIELD_OVERRIDE_REASON_EXT]
                : null;
            if ($data[self::FIELD_OVERRIDE_REASON] instanceof FHIRString) {
                $this->setOverrideReason($data[self::FIELD_OVERRIDE_REASON]);
            } elseif ($ext && is_scalar($data[self::FIELD_OVERRIDE_REASON])) {
                $this->setOverrideReason(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_OVERRIDE_REASON]] + $ext));
            } else {
                $this->setOverrideReason(new FHIRString($data[self::FIELD_OVERRIDE_REASON]));
            }
        }
        if (isset($data[self::FIELD_PART_OF])) {
            if (is_array($data[self::FIELD_PART_OF])) {
                foreach($data[self::FIELD_PART_OF] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPartOf($v);
                    } else {
                        $this->addPartOf(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->addPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->addPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if (is_array($data[self::FIELD_PERFORMER])) {
                foreach($data[self::FIELD_PERFORMER] as $v) {
                    if ($v instanceof FHIRChargeItemPerformer) {
                        $this->addPerformer($v);
                    } else {
                        $this->addPerformer(new FHIRChargeItemPerformer($v));
                    }
                }
            } else if ($data[self::FIELD_PERFORMER] instanceof FHIRChargeItemPerformer) {
                $this->addPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->addPerformer(new FHIRChargeItemPerformer($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_PERFORMING_ORGANIZATION])) {
            if ($data[self::FIELD_PERFORMING_ORGANIZATION] instanceof FHIRReference) {
                $this->setPerformingOrganization($data[self::FIELD_PERFORMING_ORGANIZATION]);
            } else {
                $this->setPerformingOrganization(new FHIRReference($data[self::FIELD_PERFORMING_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_PRICE_OVERRIDE])) {
            if ($data[self::FIELD_PRICE_OVERRIDE] instanceof FHIRMoney) {
                $this->setPriceOverride($data[self::FIELD_PRICE_OVERRIDE]);
            } else {
                $this->setPriceOverride(new FHIRMoney($data[self::FIELD_PRICE_OVERRIDE]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setProductCodeableConcept($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT]);
            } else {
                $this->setProductCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_REFERENCE])) {
            if ($data[self::FIELD_PRODUCT_REFERENCE] instanceof FHIRReference) {
                $this->setProductReference($data[self::FIELD_PRODUCT_REFERENCE]);
            } else {
                $this->setProductReference(new FHIRReference($data[self::FIELD_PRODUCT_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if (is_array($data[self::FIELD_REASON])) {
                foreach($data[self::FIELD_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReason($v);
                    } else {
                        $this->addReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->addReason($data[self::FIELD_REASON]);
            } else {
                $this->addReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
            }
        }
        if (isset($data[self::FIELD_REQUESTING_ORGANIZATION])) {
            if ($data[self::FIELD_REQUESTING_ORGANIZATION] instanceof FHIRReference) {
                $this->setRequestingOrganization($data[self::FIELD_REQUESTING_ORGANIZATION]);
            } else {
                $this->setRequestingOrganization(new FHIRReference($data[self::FIELD_REQUESTING_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_SERVICE])) {
            if (is_array($data[self::FIELD_SERVICE])) {
                foreach($data[self::FIELD_SERVICE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addService($v);
                    } else {
                        $this->addService(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SERVICE] instanceof FHIRReference) {
                $this->addService($data[self::FIELD_SERVICE]);
            } else {
                $this->addService(new FHIRReference($data[self::FIELD_SERVICE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRChargeItemStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRChargeItemStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_INFORMATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_INFORMATION])) {
                foreach($data[self::FIELD_SUPPORTING_INFORMATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingInformation($v);
                    } else {
                        $this->addSupportingInformation(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_INFORMATION] instanceof FHIRReference) {
                $this->addSupportingInformation($data[self::FIELD_SUPPORTING_INFORMATION]);
            } else {
                $this->addSupportingInformation(new FHIRReference($data[self::FIELD_SUPPORTING_INFORMATION]));
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
        return "<ChargeItem{$xmlns}></ChargeItem>";
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Account into which this ChargeItems belongs.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Account into which this ChargeItems belongs.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $account
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function addAccount(FHIRReference $account = null)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Account into which this ChargeItems belongs.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $account
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setAccount(array $account = [])
    {
        $this->account = [];
        if ([] === $account) {
            return $this;
        }
        foreach($account as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAccount($v);
            } else {
                $this->addAccount(new FHIRReference($v));
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
     * The anatomical location where the related service has been applied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodysite()
    {
        return $this->bodysite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The anatomical location where the related service has been applied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $bodysite
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function addBodysite(FHIRCodeableConcept $bodysite = null)
    {
        $this->bodysite[] = $bodysite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The anatomical location where the related service has been applied.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $bodysite
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setBodysite(array $bodysite = [])
    {
        $this->bodysite = [];
        if ([] === $bodysite) {
            return $this;
        }
        foreach($bodysite as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addBodysite($v);
            } else {
                $this->addBodysite(new FHIRCodeableConcept($v));
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
     * A code that identifies the charge, like a billing code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A code that identifies the charge, like a billing code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter or episode of care that establishes the context for this event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The encounter or episode of care that establishes the context for this event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $context
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setContext(FHIRReference $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The financial cost center permits the tracking of charge attribution.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The financial cost center permits the tracking of charge attribution.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $costCenter
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setCostCenter(FHIRReference $costCenter = null)
    {
        $this->costCenter = $costCenter;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * References the source of pricing information, rules of application for the code
     * this ChargeItem uses.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * References the source of pricing information, rules of application for the code
     * this ChargeItem uses.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $definitionCanonical
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function addDefinitionCanonical($definitionCanonical = null)
    {
        if (null === $definitionCanonical) {
            $this->definitionCanonical = [];
            return $this;
        }
        if ($definitionCanonical instanceof FHIRCanonical) {
            $this->definitionCanonical[] = $definitionCanonical;
            return $this;
        }
        $this->definitionCanonical[] = new FHIRCanonical($definitionCanonical);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * References the source of pricing information, rules of application for the code
     * this ChargeItem uses.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $definitionCanonical
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setDefinitionCanonical(array $definitionCanonical = [])
    {
        $this->definitionCanonical = [];
        if ([] === $definitionCanonical) {
            return $this;
        }
        foreach($definitionCanonical as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addDefinitionCanonical($v);
            } else {
                $this->addDefinitionCanonical(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * References the (external) source of pricing information, rules of application
     * for the code this ChargeItem uses.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    public function getDefinitionUri()
    {
        return $this->definitionUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * References the (external) source of pricing information, rules of application
     * for the code this ChargeItem uses.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $definitionUri
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function addDefinitionUri($definitionUri = null)
    {
        if (null === $definitionUri) {
            $this->definitionUri = [];
            return $this;
        }
        if ($definitionUri instanceof FHIRUri) {
            $this->definitionUri[] = $definitionUri;
            return $this;
        }
        $this->definitionUri[] = new FHIRUri($definitionUri);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * References the (external) source of pricing information, rules of application
     * for the code this ChargeItem uses.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[] $definitionUri
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setDefinitionUri(array $definitionUri = [])
    {
        $this->definitionUri = [];
        if ([] === $definitionUri) {
            return $this;
        }
        foreach($definitionUri as $v) {
            if ($v instanceof FHIRUri) {
                $this->addDefinitionUri($v);
            } else {
                $this->addDefinitionUri(new FHIRUri($v));
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
     * Date the charge item was entered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getEnteredDate()
    {
        return $this->enteredDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date the charge item was entered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $enteredDate
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setEnteredDate($enteredDate = null)
    {
        if (null === $enteredDate) {
            $this->enteredDate = null;
            return $this;
        }
        if ($enteredDate instanceof FHIRDateTime) {
            $this->enteredDate = $enteredDate;
            return $this;
        }
        $this->enteredDate = new FHIRDateTime($enteredDate);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The device, practitioner, etc. who entered the charge item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * The device, practitioner, etc. who entered the charge item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $enterer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setEnterer(FHIRReference $enterer = null)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Factor overriding the factor determined by the rules associated with the code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getFactorOverride()
    {
        return $this->factorOverride;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Factor overriding the factor determined by the rules associated with the code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $factorOverride
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setFactorOverride($factorOverride = null)
    {
        if (null === $factorOverride) {
            $this->factorOverride = null;
            return $this;
        }
        if ($factorOverride instanceof FHIRDecimal) {
            $this->factorOverride = $factorOverride;
            return $this;
        }
        $this->factorOverride = new FHIRDecimal($factorOverride);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this event performer or other systems.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this event performer or other systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
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
     * Identifiers assigned to this event performer or other systems.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
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
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Comments made about the event by the performer, subject or other participants.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Comments made about the event by the performer, subject or other participants.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Comments made about the event by the performer, subject or other participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date/time(s) or duration when the charged service was applied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date/time(s) or duration when the charged service was applied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setOccurrenceDateTime($occurrenceDateTime = null)
    {
        if (null === $occurrenceDateTime) {
            $this->occurrenceDateTime = null;
            return $this;
        }
        if ($occurrenceDateTime instanceof FHIRDateTime) {
            $this->occurrenceDateTime = $occurrenceDateTime;
            return $this;
        }
        $this->occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date/time(s) or duration when the charged service was applied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date/time(s) or duration when the charged service was applied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setOccurrencePeriod(FHIRPeriod $occurrencePeriod = null)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date/time(s) or duration when the charged service was applied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Date/time(s) or duration when the charged service was applied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $occurrenceTiming
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setOccurrenceTiming(FHIRTiming $occurrenceTiming = null)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the list price or the rule-based factor associated with the code is
     * overridden, this attribute can capture a text to indicate the reason for this
     * action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getOverrideReason()
    {
        return $this->overrideReason;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If the list price or the rule-based factor associated with the code is
     * overridden, this attribute can capture a text to indicate the reason for this
     * action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $overrideReason
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setOverrideReason($overrideReason = null)
    {
        if (null === $overrideReason) {
            $this->overrideReason = null;
            return $this;
        }
        if ($overrideReason instanceof FHIRString) {
            $this->overrideReason = $overrideReason;
            return $this;
        }
        $this->overrideReason = new FHIRString($overrideReason);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $partOf
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function addPartOf(FHIRReference $partOf = null)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $partOf
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setPartOf(array $partOf = [])
    {
        $this->partOf = [];
        if ([] === $partOf) {
            return $this;
        }
        foreach($partOf as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPartOf($v);
            } else {
                $this->addPartOf(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * The resource ChargeItem describes the provision of healthcare provider products
     * for a certain patient, therefore referring not only to the product, but
     * containing in addition details of the provision, like date, time, amounts and
     * participating organizations and persons. Main Usage of the ChargeItem is to
     * enable the billing process and internal cost allocation.
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemPerformer[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * The resource ChargeItem describes the provision of healthcare provider products
     * for a certain patient, therefore referring not only to the product, but
     * containing in addition details of the provision, like date, time, amounts and
     * participating organizations and persons. Main Usage of the ChargeItem is to
     * enable the billing process and internal cost allocation.
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemPerformer $performer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function addPerformer(FHIRChargeItemPerformer $performer = null)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * The resource ChargeItem describes the provision of healthcare provider products
     * for a certain patient, therefore referring not only to the product, but
     * containing in addition details of the provision, like date, time, amounts and
     * participating organizations and persons. Main Usage of the ChargeItem is to
     * enable the billing process and internal cost allocation.
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemPerformer[] $performer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setPerformer(array $performer = [])
    {
        $this->performer = [];
        if ([] === $performer) {
            return $this;
        }
        foreach($performer as $v) {
            if ($v instanceof FHIRChargeItemPerformer) {
                $this->addPerformer($v);
            } else {
                $this->addPerformer(new FHIRChargeItemPerformer($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization requesting the service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPerformingOrganization()
    {
        return $this->performingOrganization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization requesting the service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $performingOrganization
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setPerformingOrganization(FHIRReference $performingOrganization = null)
    {
        $this->performingOrganization = $performingOrganization;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Total price of the charge overriding the list price associated with the code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney
     */
    public function getPriceOverride()
    {
        return $this->priceOverride;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Total price of the charge overriding the list price associated with the code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMoney $priceOverride
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setPriceOverride(FHIRMoney $priceOverride = null)
    {
        $this->priceOverride = $priceOverride;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the device, food, drug or other product being charged either by type
     * code or reference to an instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the device, food, drug or other product being charged either by type
     * code or reference to an instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $productCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setProductCodeableConcept(FHIRCodeableConcept $productCodeableConcept = null)
    {
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the device, food, drug or other product being charged either by type
     * code or reference to an instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the device, food, drug or other product being charged either by type
     * code or reference to an instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $productReference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setProductReference(FHIRReference $productReference = null)
    {
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Quantity of which the charge item has been serviced.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Quantity of which the charge item has been serviced.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $quantity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $reason
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function addReason(FHIRCodeableConcept $reason = null)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $reason
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setReason(array $reason = [])
    {
        $this->reason = [];
        if ([] === $reason) {
            return $this;
        }
        foreach($reason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReason($v);
            } else {
                $this->addReason(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization performing the service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getRequestingOrganization()
    {
        return $this->requestingOrganization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization performing the service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $requestingOrganization
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setRequestingOrganization(FHIRReference $requestingOrganization = null)
    {
        $this->requestingOrganization = $requestingOrganization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicated the rendered service that caused this charge.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicated the rendered service that caused this charge.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $service
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function addService(FHIRReference $service = null)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicated the rendered service that caused this charge.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $service
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setService(array $service = [])
    {
        $this->service = [];
        if ([] === $service) {
            return $this;
        }
        foreach($service as $v) {
            if ($v instanceof FHIRReference) {
                $this->addService($v);
            } else {
                $this->addService(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Codes identifying the lifecycle stage of a ChargeItem.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the ChargeItem.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRChargeItemStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Codes identifying the lifecycle stage of a ChargeItem.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the ChargeItem.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRChargeItemStatus $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setStatus(FHIRChargeItemStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual or set of individuals the action is being or was performed on.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual or set of individuals the action is being or was performed on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Further information supporting this charge.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Further information supporting this charge.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $supportingInformation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function addSupportingInformation(FHIRReference $supportingInformation = null)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Further information supporting this charge.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $supportingInformation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
     */
    public function setSupportingInformation(array $supportingInformation = [])
    {
        $this->supportingInformation = [];
        if ([] === $supportingInformation) {
            return $this;
        }
        foreach($supportingInformation as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingInformation($v);
            } else {
                $this->addSupportingInformation(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem
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
                throw new \DomainException(sprintf('FHIRChargeItem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRChargeItem::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRChargeItem);
        } elseif (!is_object($type) || !($type instanceof FHIRChargeItem)) {
            throw new \RuntimeException(sprintf(
                'FHIRChargeItem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem or null, %s seen.',
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
        if (isset($children->account)) {
            foreach($children->account as $child) {
                $type->addAccount(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->bodysite)) {
            foreach($children->bodysite as $child) {
                $type->addBodysite(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->context)) {
            $type->setContext(FHIRReference::xmlUnserialize($children->context));
        }
        if (isset($children->costCenter)) {
            $type->setCostCenter(FHIRReference::xmlUnserialize($children->costCenter));
        }
        if (isset($attributes->definitionCanonical)) {
            $type->addDefinitionCanonical((string)$attributes->definitionCanonical);
        }
        if (isset($children->definitionCanonical)) {
            foreach($children->definitionCanonical as $child) {
                $type->addDefinitionCanonical(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($attributes->definitionUri)) {
            $type->addDefinitionUri((string)$attributes->definitionUri);
        }
        if (isset($children->definitionUri)) {
            foreach($children->definitionUri as $child) {
                $type->addDefinitionUri(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($attributes->enteredDate)) {
            $type->setEnteredDate((string)$attributes->enteredDate);
        }
        if (isset($children->enteredDate)) {
            $type->setEnteredDate(FHIRDateTime::xmlUnserialize($children->enteredDate));
        }
        if (isset($children->enterer)) {
            $type->setEnterer(FHIRReference::xmlUnserialize($children->enterer));
        }
        if (isset($attributes->factorOverride)) {
            $type->setFactorOverride((string)$attributes->factorOverride);
        }
        if (isset($children->factorOverride)) {
            $type->setFactorOverride(FHIRDecimal::xmlUnserialize($children->factorOverride));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($attributes->occurrenceDateTime)) {
            $type->setOccurrenceDateTime((string)$attributes->occurrenceDateTime);
        }
        if (isset($children->occurrenceDateTime)) {
            $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($children->occurrenceDateTime));
        }
        if (isset($children->occurrencePeriod)) {
            $type->setOccurrencePeriod(FHIRPeriod::xmlUnserialize($children->occurrencePeriod));
        }
        if (isset($children->occurrenceTiming)) {
            $type->setOccurrenceTiming(FHIRTiming::xmlUnserialize($children->occurrenceTiming));
        }
        if (isset($attributes->overrideReason)) {
            $type->setOverrideReason((string)$attributes->overrideReason);
        }
        if (isset($children->overrideReason)) {
            $type->setOverrideReason(FHIRString::xmlUnserialize($children->overrideReason));
        }
        if (isset($children->partOf)) {
            foreach($children->partOf as $child) {
                $type->addPartOf(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->performer)) {
            foreach($children->performer as $child) {
                $type->addPerformer(FHIRChargeItemPerformer::xmlUnserialize($child));
            }
        }
        if (isset($children->performingOrganization)) {
            $type->setPerformingOrganization(FHIRReference::xmlUnserialize($children->performingOrganization));
        }
        if (isset($children->priceOverride)) {
            $type->setPriceOverride(FHIRMoney::xmlUnserialize($children->priceOverride));
        }
        if (isset($children->productCodeableConcept)) {
            $type->setProductCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->productCodeableConcept));
        }
        if (isset($children->productReference)) {
            $type->setProductReference(FHIRReference::xmlUnserialize($children->productReference));
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($children->reason)) {
            foreach($children->reason as $child) {
                $type->addReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->requestingOrganization)) {
            $type->setRequestingOrganization(FHIRReference::xmlUnserialize($children->requestingOrganization));
        }
        if (isset($children->service)) {
            foreach($children->service as $child) {
                $type->addService(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRChargeItemStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->supportingInformation)) {
            foreach($children->supportingInformation as $child) {
                $type->addSupportingInformation(FHIRReference::xmlUnserialize($child));
            }
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

        if ([] !== ($vs = $this->getAccount())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACCOUNT, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getBodysite())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BODYSITE, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCostCenter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COST_CENTER, null, $v->getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDefinitionCanonical())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_CANONICAL, null, $v->getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getDefinitionUri())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_URI, null, $v->getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getEnteredDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENTERED_DATE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEnterer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENTERER, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFactorOverride())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FACTOR_OVERRIDE, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_DATE_TIME, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOccurrencePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_PERIOD, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOccurrenceTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_TIMING, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOverrideReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OVERRIDE_REASON, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PART_OF, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getPerformer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getPerformingOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMING_ORGANIZATION, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPriceOverride())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRICE_OVERRIDE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getProductCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_CODEABLE_CONCEPT, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getProductReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_REFERENCE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getRequestingOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUESTING_ORGANIZATION, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getService())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSupportingInformation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_INFORMATION, null, $v->getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAccount())) {
            $a[self::FIELD_ACCOUNT] = $vs;
        }
        if ([] !== ($vs = $this->getBodysite())) {
            $a[self::FIELD_BODYSITE] = $vs;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getCostCenter())) {
            $a[self::FIELD_COST_CENTER] = $v;
        }
        if ([] !== ($vs = $this->getDefinitionCanonical())) {
            $a[self::FIELD_DEFINITION_CANONICAL] = [];
            $a[self::FIELD_DEFINITION_CANONICAL_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_DEFINITION_CANONICAL][] = (string)$v;
                $a[self::FIELD_DEFINITION_CANONICAL_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getDefinitionUri())) {
            $a[self::FIELD_DEFINITION_URI] = [];
            $a[self::FIELD_DEFINITION_URI_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_DEFINITION_URI][] = (string)$v;
                $a[self::FIELD_DEFINITION_URI_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getEnteredDate())) {
            $a[self::FIELD_ENTERED_DATE] = (string)$v;
            $a[self::FIELD_ENTERED_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getEnterer())) {
            $a[self::FIELD_ENTERER] = $v;
        }
        if (null !== ($v = $this->getFactorOverride())) {
            $a[self::FIELD_FACTOR_OVERRIDE] = (string)$v;
            $a[self::FIELD_FACTOR_OVERRIDE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $a[self::FIELD_OCCURRENCE_DATE_TIME] = (string)$v;
            $a[self::FIELD_OCCURRENCE_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $a[self::FIELD_OCCURRENCE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $a[self::FIELD_OCCURRENCE_TIMING] = $v;
        }
        if (null !== ($v = $this->getOverrideReason())) {
            $a[self::FIELD_OVERRIDE_REASON] = (string)$v;
            $a[self::FIELD_OVERRIDE_REASON_EXT] = $v;
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $a[self::FIELD_PART_OF] = $vs;
        }
        if ([] !== ($vs = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $vs;
        }
        if (null !== ($v = $this->getPerformingOrganization())) {
            $a[self::FIELD_PERFORMING_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getPriceOverride())) {
            $a[self::FIELD_PRICE_OVERRIDE] = $v;
        }
        if (null !== ($v = $this->getProductCodeableConcept())) {
            $a[self::FIELD_PRODUCT_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getProductReference())) {
            $a[self::FIELD_PRODUCT_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
        }
        if ([] !== ($vs = $this->getReason())) {
            $a[self::FIELD_REASON] = $vs;
        }
        if (null !== ($v = $this->getRequestingOrganization())) {
            $a[self::FIELD_REQUESTING_ORGANIZATION] = $v;
        }
        if ([] !== ($vs = $this->getService())) {
            $a[self::FIELD_SERVICE] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            $a[self::FIELD_SUPPORTING_INFORMATION] = $vs;
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