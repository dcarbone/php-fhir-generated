<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestOrderedItem;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestRequester;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSupplyRequestStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A record of a request for a medication, substance or device used in the
 * healthcare setting.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSupplyRequest
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRSupplyRequest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST;
    const FIELD_AUTHORED_ON = 'authoredOn';
    const FIELD_AUTHORED_ON_EXT = '_authoredOn';
    const FIELD_CATEGORY = 'category';
    const FIELD_DELIVER_FROM = 'deliverFrom';
    const FIELD_DELIVER_TO = 'deliverTo';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_OCCURRENCE_DATE_TIME = 'occurrenceDateTime';
    const FIELD_OCCURRENCE_DATE_TIME_EXT = '_occurrenceDateTime';
    const FIELD_OCCURRENCE_PERIOD = 'occurrencePeriod';
    const FIELD_OCCURRENCE_TIMING = 'occurrenceTiming';
    const FIELD_ORDERED_ITEM = 'orderedItem';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_REASON_CODEABLE_CONCEPT = 'reasonCodeableConcept';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_REQUESTER = 'requester';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUPPLIER = 'supplier';

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
     * When the request was made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $authoredOn = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category of supply, e.g. central, non-stock, etc. This is used to support work
     * flows associated with the supply process.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $category = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the supply is expected to come from.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $deliverFrom = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the supply is destined to go.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $deliverTo = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this supply request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the request should be fulfilled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $occurrenceDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the request should be fulfilled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $occurrencePeriod = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the request should be fulfilled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    protected $occurrenceTiming = null;

    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     *
     * The item being requested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestOrderedItem
     */
    protected $orderedItem = null;

    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly this SupplyRequest should be addressed with respect to
     * other requests.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestPriority
     */
    protected $priority = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Why the supply item was requested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $reasonCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Why the supply item was requested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $reasonReference = null;

    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestRequester
     */
    protected $requester = null;

    /**
     * Status of the supply request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the supply request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSupplyRequestStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who is intended to fulfill the request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $supplier = [];

    /**
     * Validation map for fields in type SupplyRequest
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSupplyRequest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSupplyRequest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHORED_ON]) || isset($data[self::FIELD_AUTHORED_ON_EXT])) {
            if (isset($data[self::FIELD_AUTHORED_ON])) {
                $value = $data[self::FIELD_AUTHORED_ON];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AUTHORED_ON_EXT]) && is_array($data[self::FIELD_AUTHORED_ON_EXT])) {
                $ext = $data[self::FIELD_AUTHORED_ON_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setAuthoredOn($value);
                } else if (is_array($value)) {
                    $this->setAuthoredOn(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setAuthoredOn(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAuthoredOn(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_DELIVER_FROM])) {
            if ($data[self::FIELD_DELIVER_FROM] instanceof FHIRReference) {
                $this->setDeliverFrom($data[self::FIELD_DELIVER_FROM]);
            } else {
                $this->setDeliverFrom(new FHIRReference($data[self::FIELD_DELIVER_FROM]));
            }
        }
        if (isset($data[self::FIELD_DELIVER_TO])) {
            if ($data[self::FIELD_DELIVER_TO] instanceof FHIRReference) {
                $this->setDeliverTo($data[self::FIELD_DELIVER_TO]);
            } else {
                $this->setDeliverTo(new FHIRReference($data[self::FIELD_DELIVER_TO]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME]) || isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME])) {
                $value = $data[self::FIELD_OCCURRENCE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_OCCURRENCE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOccurrenceDateTime($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOccurrenceDateTime(new FHIRDateTime($ext));
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
        if (isset($data[self::FIELD_ORDERED_ITEM])) {
            if ($data[self::FIELD_ORDERED_ITEM] instanceof FHIRSupplyRequestOrderedItem) {
                $this->setOrderedItem($data[self::FIELD_ORDERED_ITEM]);
            } else {
                $this->setOrderedItem(new FHIRSupplyRequestOrderedItem($data[self::FIELD_ORDERED_ITEM]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY]) || isset($data[self::FIELD_PRIORITY_EXT])) {
            if (isset($data[self::FIELD_PRIORITY])) {
                $value = $data[self::FIELD_PRIORITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT])) {
                $ext = $data[self::FIELD_PRIORITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRRequestPriority) {
                    $this->setPriority($value);
                } else if (is_array($value)) {
                    $this->setPriority(new FHIRRequestPriority(array_merge($ext, $value)));
                } else {
                    $this->setPriority(new FHIRRequestPriority([FHIRRequestPriority::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPriority(new FHIRRequestPriority($ext));
            }
        }
        if (isset($data[self::FIELD_REASON_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_REASON_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setReasonCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]);
            } else {
                $this->setReasonCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->setReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->setReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_REQUESTER])) {
            if ($data[self::FIELD_REQUESTER] instanceof FHIRSupplyRequestRequester) {
                $this->setRequester($data[self::FIELD_REQUESTER]);
            } else {
                $this->setRequester(new FHIRSupplyRequestRequester($data[self::FIELD_REQUESTER]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRSupplyRequestStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRSupplyRequestStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRSupplyRequestStatus([FHIRSupplyRequestStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRSupplyRequestStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUPPLIER])) {
            if (is_array($data[self::FIELD_SUPPLIER])) {
                foreach($data[self::FIELD_SUPPLIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSupplier($v);
                    } else {
                        $this->addSupplier(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPLIER] instanceof FHIRReference) {
                $this->addSupplier($data[self::FIELD_SUPPLIER]);
            } else {
                $this->addSupplier(new FHIRReference($data[self::FIELD_SUPPLIER]));
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
        return "<SupplyRequest{$xmlns}></SupplyRequest>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the request was made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the request was made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $authoredOn
     * @return static
     */
    public function setAuthoredOn($authoredOn = null)
    {
        if (null === $authoredOn) {
            $this->authoredOn = null;
            return $this;
        }
        if ($authoredOn instanceof FHIRDateTime) {
            $this->authoredOn = $authoredOn;
            return $this;
        }
        $this->authoredOn = new FHIRDateTime($authoredOn);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category of supply, e.g. central, non-stock, etc. This is used to support work
     * flows associated with the supply process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category of supply, e.g. central, non-stock, etc. This is used to support work
     * flows associated with the supply process.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the supply is expected to come from.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getDeliverFrom()
    {
        return $this->deliverFrom;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the supply is expected to come from.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $deliverFrom
     * @return static
     */
    public function setDeliverFrom(FHIRReference $deliverFrom = null)
    {
        $this->deliverFrom = $deliverFrom;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the supply is destined to go.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getDeliverTo()
    {
        return $this->deliverTo;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the supply is destined to go.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $deliverTo
     * @return static
     */
    public function setDeliverTo(FHIRReference $deliverTo = null)
    {
        $this->deliverTo = $deliverTo;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this supply request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
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
     * Unique identifier for this supply request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
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
     * When the request should be fulfilled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the request should be fulfilled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the request should be fulfilled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the request should be fulfilled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the request should be fulfilled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When the request should be fulfilled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $occurrenceTiming
     * @return static
     */
    public function setOccurrenceTiming(FHIRTiming $occurrenceTiming = null)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     *
     * The item being requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestOrderedItem
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     *
     * The item being requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestOrderedItem $orderedItem
     * @return static
     */
    public function setOrderedItem(FHIRSupplyRequestOrderedItem $orderedItem = null)
    {
        $this->orderedItem = $orderedItem;
        return $this;
    }

    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly this SupplyRequest should be addressed with respect to
     * other requests.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly this SupplyRequest should be addressed with respect to
     * other requests.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestPriority $priority
     * @return static
     */
    public function setPriority(FHIRRequestPriority $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Why the supply item was requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept()
    {
        return $this->reasonCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Why the supply item was requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return static
     */
    public function setReasonCodeableConcept(FHIRCodeableConcept $reasonCodeableConcept = null)
    {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Why the supply item was requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Why the supply item was requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestRequester
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * A record of a request for a medication, substance or device used in the
     * healthcare setting.
     *
     * The individual who initiated the request and has responsibility for its
     * activation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestRequester $requester
     * @return static
     */
    public function setRequester(FHIRSupplyRequestRequester $requester = null)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Status of the supply request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the supply request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSupplyRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the supply request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the supply request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSupplyRequestStatus $status
     * @return static
     */
    public function setStatus(FHIRSupplyRequestStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who is intended to fulfill the request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who is intended to fulfill the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $supplier
     * @return static
     */
    public function addSupplier(FHIRReference $supplier = null)
    {
        $this->supplier[] = $supplier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who is intended to fulfill the request.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $supplier
     * @return static
     */
    public function setSupplier(array $supplier = [])
    {
        $this->supplier = [];
        if ([] === $supplier) {
            return $this;
        }
        foreach($supplier as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupplier($v);
            } else {
                $this->addSupplier(new FHIRReference($v));
            }
        }
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
        if (null !== ($v = $this->getAuthoredOn())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORED_ON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeliverFrom())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DELIVER_FROM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeliverTo())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DELIVER_TO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrderedItem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDERED_ITEM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReasonReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequester())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUESTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupplier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPLIER, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORED_ON])) {
            $v = $this->getAuthoredOn();
            foreach($validationRules[self::FIELD_AUTHORED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_AUTHORED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORED_ON])) {
                        $errs[self::FIELD_AUTHORED_ON] = [];
                    }
                    $errs[self::FIELD_AUTHORED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DELIVER_FROM])) {
            $v = $this->getDeliverFrom();
            foreach($validationRules[self::FIELD_DELIVER_FROM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_DELIVER_FROM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DELIVER_FROM])) {
                        $errs[self::FIELD_DELIVER_FROM] = [];
                    }
                    $errs[self::FIELD_DELIVER_FROM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DELIVER_TO])) {
            $v = $this->getDeliverTo();
            foreach($validationRules[self::FIELD_DELIVER_TO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_DELIVER_TO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DELIVER_TO])) {
                        $errs[self::FIELD_DELIVER_TO] = [];
                    }
                    $errs[self::FIELD_DELIVER_TO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_DATE_TIME])) {
            $v = $this->getOccurrenceDateTime();
            foreach($validationRules[self::FIELD_OCCURRENCE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_OCCURRENCE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_DATE_TIME])) {
                        $errs[self::FIELD_OCCURRENCE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_PERIOD])) {
            $v = $this->getOccurrencePeriod();
            foreach($validationRules[self::FIELD_OCCURRENCE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_OCCURRENCE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_PERIOD])) {
                        $errs[self::FIELD_OCCURRENCE_PERIOD] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_TIMING])) {
            $v = $this->getOccurrenceTiming();
            foreach($validationRules[self::FIELD_OCCURRENCE_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_OCCURRENCE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_TIMING])) {
                        $errs[self::FIELD_OCCURRENCE_TIMING] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDERED_ITEM])) {
            $v = $this->getOrderedItem();
            foreach($validationRules[self::FIELD_ORDERED_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_ORDERED_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDERED_ITEM])) {
                        $errs[self::FIELD_ORDERED_ITEM] = [];
                    }
                    $errs[self::FIELD_ORDERED_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT])) {
            $v = $this->getReasonCodeableConcept();
            foreach($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_REASON_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_REASON_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_REASON_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTER])) {
            $v = $this->getRequester();
            foreach($validationRules[self::FIELD_REQUESTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_REQUESTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTER])) {
                        $errs[self::FIELD_REQUESTER] = [];
                    }
                    $errs[self::FIELD_REQUESTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPLIER])) {
            $v = $this->getSupplier();
            foreach($validationRules[self::FIELD_SUPPLIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST, self::FIELD_SUPPLIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPLIER])) {
                        $errs[self::FIELD_SUPPLIER] = [];
                    }
                    $errs[self::FIELD_SUPPLIER][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyRequest $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
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
                throw new \DomainException(sprintf('FHIRSupplyRequest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSupplyRequest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSupplyRequest;
        } elseif (!is_object($type) || !($type instanceof FHIRSupplyRequest)) {
            throw new \RuntimeException(sprintf(
                'FHIRSupplyRequest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyRequest or null, %s seen.',
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
        if (isset($children->authoredOn)) {
            $type->setAuthoredOn(FHIRDateTime::xmlUnserialize($children->authoredOn));
        }
        if (isset($attributes->authoredOn)) {
            $pt = $type->getAuthoredOn();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->authoredOn);
            } else {
                $type->setAuthoredOn((string)$attributes->authoredOn);
            }
        }
        if (isset($children->category)) {
            $type->setCategory(FHIRCodeableConcept::xmlUnserialize($children->category));
        }
        if (isset($children->deliverFrom)) {
            $type->setDeliverFrom(FHIRReference::xmlUnserialize($children->deliverFrom));
        }
        if (isset($children->deliverTo)) {
            $type->setDeliverTo(FHIRReference::xmlUnserialize($children->deliverTo));
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->occurrenceDateTime)) {
            $type->setOccurrenceDateTime(FHIRDateTime::xmlUnserialize($children->occurrenceDateTime));
        }
        if (isset($attributes->occurrenceDateTime)) {
            $pt = $type->getOccurrenceDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->occurrenceDateTime);
            } else {
                $type->setOccurrenceDateTime((string)$attributes->occurrenceDateTime);
            }
        }
        if (isset($children->occurrencePeriod)) {
            $type->setOccurrencePeriod(FHIRPeriod::xmlUnserialize($children->occurrencePeriod));
        }
        if (isset($children->occurrenceTiming)) {
            $type->setOccurrenceTiming(FHIRTiming::xmlUnserialize($children->occurrenceTiming));
        }
        if (isset($children->orderedItem)) {
            $type->setOrderedItem(FHIRSupplyRequestOrderedItem::xmlUnserialize($children->orderedItem));
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRRequestPriority::xmlUnserialize($children->priority));
        }
        if (isset($children->reasonCodeableConcept)) {
            $type->setReasonCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->reasonCodeableConcept));
        }
        if (isset($children->reasonReference)) {
            $type->setReasonReference(FHIRReference::xmlUnserialize($children->reasonReference));
        }
        if (isset($children->requester)) {
            $type->setRequester(FHIRSupplyRequestRequester::xmlUnserialize($children->requester));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRSupplyRequestStatus::xmlUnserialize($children->status));
        }
        if (isset($children->supplier)) {
            foreach($children->supplier as $child) {
                $type->addSupplier(FHIRReference::xmlUnserialize($child));
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
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getAuthoredOn())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORED_ON, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDeliverFrom())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DELIVER_FROM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDeliverTo())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DELIVER_TO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRENCE_TIMING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrderedItem())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORDERED_ITEM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReasonReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequester())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUESTER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSupplier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPLIER, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAuthoredOn())) {
            $a[self::FIELD_AUTHORED_ON] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_AUTHORED_ON_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getDeliverFrom())) {
            $a[self::FIELD_DELIVER_FROM] = $v;
        }
        if (null !== ($v = $this->getDeliverTo())) {
            $a[self::FIELD_DELIVER_TO] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $a[self::FIELD_OCCURRENCE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_OCCURRENCE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $a[self::FIELD_OCCURRENCE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $a[self::FIELD_OCCURRENCE_TIMING] = $v;
        }
        if (null !== ($v = $this->getOrderedItem())) {
            $a[self::FIELD_ORDERED_ITEM] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRRequestPriority::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRRequestPriority::FIELD_VALUE]);
                $a[self::FIELD_PRIORITY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $a[self::FIELD_REASON_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getRequester())) {
            $a[self::FIELD_REQUESTER] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRSupplyRequestStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRSupplyRequestStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getSupplier())) {
            $a[self::FIELD_SUPPLIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUPPLIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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