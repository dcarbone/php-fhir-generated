<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestPriority;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A request for a procedure to be performed. May be a proposal or an order.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRProcedureRequest
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRProcedureRequest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROCEDURE_REQUEST;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_AS_NEEDED_BOOLEAN = 'asNeededBoolean';
    const FIELD_AS_NEEDED_BOOLEAN_EXT = '_asNeededBoolean';
    const FIELD_AS_NEEDED_CODEABLE_CONCEPT = 'asNeededCodeableConcept';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_CODE = 'code';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_NOTES = 'notes';
    const FIELD_ORDERED_ON = 'orderedOn';
    const FIELD_ORDERED_ON_EXT = '_orderedOn';
    const FIELD_ORDERER = 'orderer';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_REASON_CODEABLE_CONCEPT = 'reasonCodeableConcept';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_SCHEDULED_DATE_TIME = 'scheduledDateTime';
    const FIELD_SCHEDULED_DATE_TIME_EXT = '_scheduledDateTime';
    const FIELD_SCHEDULED_PERIOD = 'scheduledPeriod';
    const FIELD_SCHEDULED_TIMING = 'scheduledTiming';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the procedure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $asNeededBoolean = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the procedure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $asNeededCodeableConcept = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $bodySite = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific procedure that is ordered. Use text if the exact nature of the
     * procedure cannot be coded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter within which the procedure proposal or request was created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order or by the receiver.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes associated with this proposal or order - e.g. provider
     * instructions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation[]
     */
    protected $notes = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the request was made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $orderedOn = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare professional responsible for proposing or ordering the procedure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $orderer = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For example, the surgeon, anaethetist, endoscopist, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $performer = null;

    /**
     * The priority of the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical priority associated with this order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestPriority
     */
    protected $priority = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure is being proposed or ordered. This procedure
     * request may be motivated by a Condition for instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $reasonCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the procedure is being proposed or ordered. This procedure
     * request may be motivated by a Condition for instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $reasonReference = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for the proposed or ordered procedure. The Schedule data
     * type allows many different expressions. E.g. "Every 8 hours"; "Three times a
     * day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct
     * 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $scheduledDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the proposed or ordered procedure. The Schedule data
     * type allows many different expressions. E.g. "Every 8 hours"; "Three times a
     * day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct
     * 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected $scheduledPeriod = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the proposed or ordered procedure. The Schedule data
     * type allows many different expressions. E.g. "Every 8 hours"; "Three times a
     * day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct
     * 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    protected $scheduledTiming = null;

    /**
     * The status of the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person, animal or group that should receive the procedure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * FHIRProcedureRequest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcedureRequest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AS_NEEDED_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT]) && is_array($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT]))
                ? $data[self::FIELD_AS_NEEDED_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_AS_NEEDED_BOOLEAN] instanceof FHIRBoolean) {
                $this->setAsNeededBoolean($data[self::FIELD_AS_NEEDED_BOOLEAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_AS_NEEDED_BOOLEAN])) {
                $this->setAsNeededBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_AS_NEEDED_BOOLEAN]] + $ext));
            } else {
                $this->setAsNeededBoolean(new FHIRBoolean($data[self::FIELD_AS_NEEDED_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setAsNeededCodeableConcept($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]);
            } else {
                $this->setAsNeededCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_BODY_SITE])) {
            if (is_array($data[self::FIELD_BODY_SITE])) {
                foreach($data[self::FIELD_BODY_SITE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addBodySite($v);
                    } else {
                        $this->addBodySite(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
                $this->addBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->addBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
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
        if (isset($data[self::FIELD_NOTES])) {
            if (is_array($data[self::FIELD_NOTES])) {
                foreach($data[self::FIELD_NOTES] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNotes($v);
                    } else {
                        $this->addNotes(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTES] instanceof FHIRAnnotation) {
                $this->addNotes($data[self::FIELD_NOTES]);
            } else {
                $this->addNotes(new FHIRAnnotation($data[self::FIELD_NOTES]));
            }
        }
        if (isset($data[self::FIELD_ORDERED_ON])) {
            $ext = (isset($data[self::FIELD_ORDERED_ON_EXT]) && is_array($data[self::FIELD_ORDERED_ON_EXT]))
                ? $data[self::FIELD_ORDERED_ON_EXT]
                : null;
            if ($data[self::FIELD_ORDERED_ON] instanceof FHIRDateTime) {
                $this->setOrderedOn($data[self::FIELD_ORDERED_ON]);
            } elseif ($ext && is_scalar($data[self::FIELD_ORDERED_ON])) {
                $this->setOrderedOn(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_ORDERED_ON]] + $ext));
            } else {
                $this->setOrderedOn(new FHIRDateTime($data[self::FIELD_ORDERED_ON]));
            }
        }
        if (isset($data[self::FIELD_ORDERER])) {
            if ($data[self::FIELD_ORDERER] instanceof FHIRReference) {
                $this->setOrderer($data[self::FIELD_ORDERER]);
            } else {
                $this->setOrderer(new FHIRReference($data[self::FIELD_ORDERER]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY])) {
            $ext = (isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT]))
                ? $data[self::FIELD_PRIORITY_EXT]
                : null;
            if ($data[self::FIELD_PRIORITY] instanceof FHIRProcedureRequestPriority) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRIORITY])) {
                $this->setPriority(new FHIRProcedureRequestPriority([FHIRProcedureRequestPriority::FIELD_VALUE => $data[self::FIELD_PRIORITY]] + $ext));
            } else {
                $this->setPriority(new FHIRProcedureRequestPriority($data[self::FIELD_PRIORITY]));
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
        if (isset($data[self::FIELD_SCHEDULED_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_SCHEDULED_DATE_TIME_EXT]) && is_array($data[self::FIELD_SCHEDULED_DATE_TIME_EXT]))
                ? $data[self::FIELD_SCHEDULED_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_SCHEDULED_DATE_TIME] instanceof FHIRDateTime) {
                $this->setScheduledDateTime($data[self::FIELD_SCHEDULED_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_SCHEDULED_DATE_TIME])) {
                $this->setScheduledDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_SCHEDULED_DATE_TIME]] + $ext));
            } else {
                $this->setScheduledDateTime(new FHIRDateTime($data[self::FIELD_SCHEDULED_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_SCHEDULED_PERIOD])) {
            if ($data[self::FIELD_SCHEDULED_PERIOD] instanceof FHIRPeriod) {
                $this->setScheduledPeriod($data[self::FIELD_SCHEDULED_PERIOD]);
            } else {
                $this->setScheduledPeriod(new FHIRPeriod($data[self::FIELD_SCHEDULED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_SCHEDULED_TIMING])) {
            if ($data[self::FIELD_SCHEDULED_TIMING] instanceof FHIRTiming) {
                $this->setScheduledTiming($data[self::FIELD_SCHEDULED_TIMING]);
            } else {
                $this->setScheduledTiming(new FHIRTiming($data[self::FIELD_SCHEDULED_TIMING]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRProcedureRequestStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRProcedureRequestStatus([FHIRProcedureRequestStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRProcedureRequestStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
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
     * @return static
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
        return "<ProcedureRequest{$xmlns}></ProcedureRequest>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $asNeededBoolean
     * @return static
     */
    public function setAsNeededBoolean($asNeededBoolean = null)
    {
        if (null === $asNeededBoolean) {
            $this->asNeededBoolean = null;
            return $this;
        }
        if ($asNeededBoolean instanceof FHIRBoolean) {
            $this->asNeededBoolean = $asNeededBoolean;
            return $this;
        }
        $this->asNeededBoolean = new FHIRBoolean($asNeededBoolean);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing
     * the procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return static
     */
    public function setAsNeededCodeableConcept(FHIRCodeableConcept $asNeededCodeableConcept = null)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $bodySite
     * @return static
     */
    public function addBodySite(FHIRCodeableConcept $bodySite = null)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the sites on the subject's body where the procedure should be
     * performed (I.e. the target sites).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $bodySite
     * @return static
     */
    public function setBodySite(array $bodySite = [])
    {
        $this->bodySite = [];
        if ([] === $bodySite) {
            return $this;
        }
        foreach($bodySite as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addBodySite($v);
            } else {
                $this->addBodySite(new FHIRCodeableConcept($v));
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
     * The specific procedure that is ordered. Use text if the exact nature of the
     * procedure cannot be coded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specific procedure that is ordered. Use text if the exact nature of the
     * procedure cannot be coded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter within which the procedure proposal or request was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter within which the procedure proposal or request was created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order or by the receiver.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order or by the receiver.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order or by the receiver.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
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
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes associated with this proposal or order - e.g. provider
     * instructions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes associated with this proposal or order - e.g. provider
     * instructions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation $notes
     * @return static
     */
    public function addNotes(FHIRAnnotation $notes = null)
    {
        $this->notes[] = $notes;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any other notes associated with this proposal or order - e.g. provider
     * instructions.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation[] $notes
     * @return static
     */
    public function setNotes(array $notes = [])
    {
        $this->notes = [];
        if ([] === $notes) {
            return $this;
        }
        foreach($notes as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNotes($v);
            } else {
                $this->addNotes(new FHIRAnnotation($v));
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the request was made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getOrderedOn()
    {
        return $this->orderedOn;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the request was made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $orderedOn
     * @return static
     */
    public function setOrderedOn($orderedOn = null)
    {
        if (null === $orderedOn) {
            $this->orderedOn = null;
            return $this;
        }
        if ($orderedOn instanceof FHIRDateTime) {
            $this->orderedOn = $orderedOn;
            return $this;
        }
        $this->orderedOn = new FHIRDateTime($orderedOn);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare professional responsible for proposing or ordering the procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getOrderer()
    {
        return $this->orderer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare professional responsible for proposing or ordering the procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $orderer
     * @return static
     */
    public function setOrderer(FHIRReference $orderer = null)
    {
        $this->orderer = $orderer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For example, the surgeon, anaethetist, endoscopist, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * For example, the surgeon, anaethetist, endoscopist, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function setPerformer(FHIRReference $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * The priority of the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical priority associated with this order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * The priority of the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical priority associated with this order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestPriority $priority
     * @return static
     */
    public function setPriority(FHIRProcedureRequestPriority $priority = null)
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
     * The reason why the procedure is being proposed or ordered. This procedure
     * request may be motivated by a Condition for instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * The reason why the procedure is being proposed or ordered. This procedure
     * request may be motivated by a Condition for instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
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
     * The reason why the procedure is being proposed or ordered. This procedure
     * request may be motivated by a Condition for instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * The reason why the procedure is being proposed or ordered. This procedure
     * request may be motivated by a Condition for instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        $this->reasonReference = $reasonReference;
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
     * The timing schedule for the proposed or ordered procedure. The Schedule data
     * type allows many different expressions. E.g. "Every 8 hours"; "Three times a
     * day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct
     * 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getScheduledDateTime()
    {
        return $this->scheduledDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for the proposed or ordered procedure. The Schedule data
     * type allows many different expressions. E.g. "Every 8 hours"; "Three times a
     * day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct
     * 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $scheduledDateTime
     * @return static
     */
    public function setScheduledDateTime($scheduledDateTime = null)
    {
        if (null === $scheduledDateTime) {
            $this->scheduledDateTime = null;
            return $this;
        }
        if ($scheduledDateTime instanceof FHIRDateTime) {
            $this->scheduledDateTime = $scheduledDateTime;
            return $this;
        }
        $this->scheduledDateTime = new FHIRDateTime($scheduledDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the proposed or ordered procedure. The Schedule data
     * type allows many different expressions. E.g. "Every 8 hours"; "Three times a
     * day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct
     * 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getScheduledPeriod()
    {
        return $this->scheduledPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the proposed or ordered procedure. The Schedule data
     * type allows many different expressions. E.g. "Every 8 hours"; "Three times a
     * day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct
     * 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $scheduledPeriod
     * @return static
     */
    public function setScheduledPeriod(FHIRPeriod $scheduledPeriod = null)
    {
        $this->scheduledPeriod = $scheduledPeriod;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the proposed or ordered procedure. The Schedule data
     * type allows many different expressions. E.g. "Every 8 hours"; "Three times a
     * day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct
     * 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    public function getScheduledTiming()
    {
        return $this->scheduledTiming;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the proposed or ordered procedure. The Schedule data
     * type allows many different expressions. E.g. "Every 8 hours"; "Three times a
     * day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct
     * 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming $scheduledTiming
     * @return static
     */
    public function setScheduledTiming(FHIRTiming $scheduledTiming = null)
    {
        $this->scheduledTiming = $scheduledTiming;
        return $this;
    }

    /**
     * The status of the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestStatus $status
     * @return static
     */
    public function setStatus(FHIRProcedureRequestStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person, animal or group that should receive the procedure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * The person, animal or group that should receive the procedure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedureRequest $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedureRequest
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
                throw new \DomainException(sprintf('FHIRProcedureRequest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProcedureRequest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRProcedureRequest;
        } elseif (!is_object($type) || !($type instanceof FHIRProcedureRequest)) {
            throw new \RuntimeException(sprintf(
                'FHIRProcedureRequest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedureRequest or null, %s seen.',
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
        if (isset($attributes->asNeededBoolean)) {
            $type->setAsNeededBoolean((string)$attributes->asNeededBoolean);
        }
        if (isset($children->asNeededBoolean)) {
            $type->setAsNeededBoolean(FHIRBoolean::xmlUnserialize($children->asNeededBoolean));
        }
        if (isset($children->asNeededCodeableConcept)) {
            $type->setAsNeededCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->asNeededCodeableConcept));
        }
        if (isset($children->bodySite)) {
            foreach($children->bodySite as $child) {
                $type->addBodySite(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->notes)) {
            foreach($children->notes as $child) {
                $type->addNotes(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($attributes->orderedOn)) {
            $type->setOrderedOn((string)$attributes->orderedOn);
        }
        if (isset($children->orderedOn)) {
            $type->setOrderedOn(FHIRDateTime::xmlUnserialize($children->orderedOn));
        }
        if (isset($children->orderer)) {
            $type->setOrderer(FHIRReference::xmlUnserialize($children->orderer));
        }
        if (isset($children->performer)) {
            $type->setPerformer(FHIRReference::xmlUnserialize($children->performer));
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRProcedureRequestPriority::xmlUnserialize($children->priority));
        }
        if (isset($children->reasonCodeableConcept)) {
            $type->setReasonCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->reasonCodeableConcept));
        }
        if (isset($children->reasonReference)) {
            $type->setReasonReference(FHIRReference::xmlUnserialize($children->reasonReference));
        }
        if (isset($attributes->scheduledDateTime)) {
            $type->setScheduledDateTime((string)$attributes->scheduledDateTime);
        }
        if (isset($children->scheduledDateTime)) {
            $type->setScheduledDateTime(FHIRDateTime::xmlUnserialize($children->scheduledDateTime));
        }
        if (isset($children->scheduledPeriod)) {
            $type->setScheduledPeriod(FHIRPeriod::xmlUnserialize($children->scheduledPeriod));
        }
        if (isset($children->scheduledTiming)) {
            $type->setScheduledTiming(FHIRTiming::xmlUnserialize($children->scheduledTiming));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRProcedureRequestStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
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
        if (null !== ($v = $this->getAsNeededBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AS_NEEDED_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AS_NEEDED_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getBodySite())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BODY_SITE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getNotes())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTES, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOrderedOn())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORDERED_ON, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOrderer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORDERER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPerformer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getScheduledDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCHEDULED_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getScheduledPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCHEDULED_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getScheduledTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCHEDULED_TIMING, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAsNeededBoolean())) {
            $a[self::FIELD_AS_NEEDED_BOOLEAN] = $v->getValue();
            $a[self::FIELD_AS_NEEDED_BOOLEAN_EXT] = $v;
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            $a[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = $v;
        }
        if ([] !== ($vs = $this->getBodySite())) {
            $a[self::FIELD_BODY_SITE] = $vs;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getNotes())) {
            $a[self::FIELD_NOTES] = $vs;
        }
        if (null !== ($v = $this->getOrderedOn())) {
            $a[self::FIELD_ORDERED_ON] = $v->getValue();
            $a[self::FIELD_ORDERED_ON_EXT] = $v;
        }
        if (null !== ($v = $this->getOrderer())) {
            $a[self::FIELD_ORDERER] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v;
        }
        if (null !== ($v = $this->getReasonCodeableConcept())) {
            $a[self::FIELD_REASON_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getScheduledDateTime())) {
            $a[self::FIELD_SCHEDULED_DATE_TIME] = $v->getValue();
            $a[self::FIELD_SCHEDULED_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getScheduledPeriod())) {
            $a[self::FIELD_SCHEDULED_PERIOD] = $v;
        }
        if (null !== ($v = $this->getScheduledTiming())) {
            $a[self::FIELD_SCHEDULED_TIMING] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
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