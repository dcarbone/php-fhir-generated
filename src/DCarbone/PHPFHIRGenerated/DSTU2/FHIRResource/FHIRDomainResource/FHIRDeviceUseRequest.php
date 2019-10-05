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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestPriority;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Represents a request for a patient to employ a medical device. The device may be
 * an implantable device, or an external assistive device, such as a walker.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDeviceUseRequest
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRDeviceUseRequest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST;

    const FIELD_BODY_SITE_CODEABLE_CONCEPT = 'bodySiteCodeableConcept';
    const FIELD_BODY_SITE_REFERENCE = 'bodySiteReference';
    const FIELD_DEVICE = 'device';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INDICATION = 'indication';
    const FIELD_NOTES = 'notes';
    const FIELD_NOTES_EXT = '_notes';
    const FIELD_ORDERED_ON = 'orderedOn';
    const FIELD_ORDERED_ON_EXT = '_orderedOn';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRN_REASON = 'prnReason';
    const FIELD_RECORDED_ON = 'recordedOn';
    const FIELD_RECORDED_ON_EXT = '_recordedOn';
    const FIELD_STATUS = 'status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
    const FIELD_TIMING_PERIOD = 'timingPeriod';
    const FIELD_TIMING_TIMING = 'timingTiming';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the device should be used ( i.e.
     * the target site).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $bodySiteCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the device should be used ( i.e.
     * the target site).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $bodySiteReference = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The details of the device to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $device = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional context in which this request is made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $encounter = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the orderer or by the receiver.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    private $indication = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Details about this request that were not represented at all or sufficiently in
     * one of the attributes provided in a class. These may include for example a
     * comment, an instruction, or a note associated with the statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    private $notes = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time when the request was made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    private $orderedOn = null;

    /**
     * Codes representing the priority of the request.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Characterizes how quickly the use of device must be initiated. Includes concepts
     * such as stat, urgent, routine.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestPriority
     */
    private $priority = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The proposed act must be performed if the indicated conditions occur, e.g..,
     * shortness of breath, SpO2 less than x%.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    private $prnReason = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time at which the request was made/recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    private $recordedOn = null;

    /**
     * Codes representing the status of the request.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestStatus
     */
    private $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient who will use the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $subject = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    private $timingDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    private $timingPeriod = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    private $timingTiming = null;

    /**
     * FHIRDeviceUseRequest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceUseRequest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BODY_SITE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_BODY_SITE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setBodySiteCodeableConcept($data[self::FIELD_BODY_SITE_CODEABLE_CONCEPT]);
            } else {
                $this->setBodySiteCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_BODY_SITE_REFERENCE])) {
            if ($data[self::FIELD_BODY_SITE_REFERENCE] instanceof FHIRReference) {
                $this->setBodySiteReference($data[self::FIELD_BODY_SITE_REFERENCE]);
            } else {
                $this->setBodySiteReference(new FHIRReference($data[self::FIELD_BODY_SITE_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_DEVICE])) {
            if ($data[self::FIELD_DEVICE] instanceof FHIRReference) {
                $this->setDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->setDevice(new FHIRReference($data[self::FIELD_DEVICE]));
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
        if (isset($data[self::FIELD_INDICATION])) {
            if (is_array($data[self::FIELD_INDICATION])) {
                foreach($data[self::FIELD_INDICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addIndication($v);
                    } else {
                        $this->addIndication(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_INDICATION] instanceof FHIRCodeableConcept) {
                $this->addIndication($data[self::FIELD_INDICATION]);
            } else {
                $this->addIndication(new FHIRCodeableConcept($data[self::FIELD_INDICATION]));
            }
        }
        if (isset($data[self::FIELD_NOTES])) {
            $ext = (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT]))
                ? $data[self::FIELD_NOTES_EXT]
                : null;
            if (is_array($data[self::FIELD_NOTES])) {
                foreach($data[self::FIELD_NOTES] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addNotes($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addNotes(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addNotes(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTES] instanceof FHIRString) {
                $this->addNotes($data[self::FIELD_NOTES]);
            } elseif ($ext && is_scalar($data[self::FIELD_NOTES])) {
                $this->addNotes(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NOTES]] + $ext));
            } else {
                $this->addNotes(new FHIRString($data[self::FIELD_NOTES]));
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
        if (isset($data[self::FIELD_PRIORITY])) {
            if ($data[self::FIELD_PRIORITY] instanceof FHIRDeviceUseRequestPriority) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } else {
                $this->setPriority(new FHIRDeviceUseRequestPriority($data[self::FIELD_PRIORITY]));
            }
        }
        if (isset($data[self::FIELD_PRN_REASON])) {
            if (is_array($data[self::FIELD_PRN_REASON])) {
                foreach($data[self::FIELD_PRN_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPrnReason($v);
                    } else {
                        $this->addPrnReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PRN_REASON] instanceof FHIRCodeableConcept) {
                $this->addPrnReason($data[self::FIELD_PRN_REASON]);
            } else {
                $this->addPrnReason(new FHIRCodeableConcept($data[self::FIELD_PRN_REASON]));
            }
        }
        if (isset($data[self::FIELD_RECORDED_ON])) {
            $ext = (isset($data[self::FIELD_RECORDED_ON_EXT]) && is_array($data[self::FIELD_RECORDED_ON_EXT]))
                ? $data[self::FIELD_RECORDED_ON_EXT]
                : null;
            if ($data[self::FIELD_RECORDED_ON] instanceof FHIRDateTime) {
                $this->setRecordedOn($data[self::FIELD_RECORDED_ON]);
            } elseif ($ext && is_scalar($data[self::FIELD_RECORDED_ON])) {
                $this->setRecordedOn(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_RECORDED_ON]] + $ext));
            } else {
                $this->setRecordedOn(new FHIRDateTime($data[self::FIELD_RECORDED_ON]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRDeviceUseRequestStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRDeviceUseRequestStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TIMING_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_TIMING_DATE_TIME_EXT]) && is_array($data[self::FIELD_TIMING_DATE_TIME_EXT]))
                ? $data[self::FIELD_TIMING_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_TIMING_DATE_TIME] instanceof FHIRDateTime) {
                $this->setTimingDateTime($data[self::FIELD_TIMING_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_TIMING_DATE_TIME])) {
                $this->setTimingDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_TIMING_DATE_TIME]] + $ext));
            } else {
                $this->setTimingDateTime(new FHIRDateTime($data[self::FIELD_TIMING_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_TIMING_PERIOD])) {
            if ($data[self::FIELD_TIMING_PERIOD] instanceof FHIRPeriod) {
                $this->setTimingPeriod($data[self::FIELD_TIMING_PERIOD]);
            } else {
                $this->setTimingPeriod(new FHIRPeriod($data[self::FIELD_TIMING_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_TIMING_TIMING])) {
            if ($data[self::FIELD_TIMING_TIMING] instanceof FHIRTiming) {
                $this->setTimingTiming($data[self::FIELD_TIMING_TIMING]);
            } else {
                $this->setTimingTiming(new FHIRTiming($data[self::FIELD_TIMING_TIMING]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the device should be used ( i.e.
     * the target site).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySiteCodeableConcept()
    {
        return $this->bodySiteCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the device should be used ( i.e.
     * the target site).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $bodySiteCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setBodySiteCodeableConcept(FHIRCodeableConcept $bodySiteCodeableConcept = null)
    {
        $this->bodySiteCodeableConcept = $bodySiteCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the device should be used ( i.e.
     * the target site).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getBodySiteReference()
    {
        return $this->bodySiteReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the device should be used ( i.e.
     * the target site).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $bodySiteReference
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setBodySiteReference(FHIRReference $bodySiteReference = null)
    {
        $this->bodySiteReference = $bodySiteReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The details of the device to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The details of the device to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $device
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setDevice(FHIRReference $device = null)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional context in which this request is made.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional context in which this request is made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $encounter
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the orderer or by the receiver.
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
     * Identifiers assigned to this order by the orderer or by the receiver.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
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
     * Identifiers assigned to this order by the orderer or by the receiver.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $indication
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function addIndication(FHIRCodeableConcept $indication = null)
    {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $indication
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setIndication(array $indication = [])
    {
        $this->indication = [];
        if ([] === $indication) {
            return $this;
        }
        foreach($indication as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addIndication($v);
            } else {
                $this->addIndication(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Details about this request that were not represented at all or sufficiently in
     * one of the attributes provided in a class. These may include for example a
     * comment, an instruction, or a note associated with the statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Details about this request that were not represented at all or sufficiently in
     * one of the attributes provided in a class. These may include for example a
     * comment, an instruction, or a note associated with the statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $notes
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function addNotes($notes = null)
    {
        if (null === $notes) {
            $this->notes = null;
            return $this;
        }
        if ($notes instanceof FHIRString) {
            $this->notes = $notes;
            return $this;
        }
        $this->notes = new FHIRString($notes);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Details about this request that were not represented at all or sufficiently in
     * one of the attributes provided in a class. These may include for example a
     * comment, an instruction, or a note associated with the statement.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[] $notes
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setNotes(array $notes = [])
    {
        $this->notes = [];
        if ([] === $notes) {
            return $this;
        }
        foreach($notes as $v) {
            if ($v instanceof FHIRString) {
                $this->addNotes($v);
            } else {
                $this->addNotes(new FHIRString($v));
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time when the request was made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $orderedOn
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
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
     * Codes representing the priority of the request.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Characterizes how quickly the use of device must be initiated. Includes concepts
     * such as stat, urgent, routine.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Codes representing the priority of the request.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Characterizes how quickly the use of device must be initiated. Includes concepts
     * such as stat, urgent, routine.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestPriority $priority
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setPriority(FHIRDeviceUseRequestPriority $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The proposed act must be performed if the indicated conditions occur, e.g..,
     * shortness of breath, SpO2 less than x%.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPrnReason()
    {
        return $this->prnReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The proposed act must be performed if the indicated conditions occur, e.g..,
     * shortness of breath, SpO2 less than x%.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $prnReason
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function addPrnReason(FHIRCodeableConcept $prnReason = null)
    {
        $this->prnReason[] = $prnReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The proposed act must be performed if the indicated conditions occur, e.g..,
     * shortness of breath, SpO2 less than x%.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $prnReason
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setPrnReason(array $prnReason = [])
    {
        $this->prnReason = [];
        if ([] === $prnReason) {
            return $this;
        }
        foreach($prnReason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addPrnReason($v);
            } else {
                $this->addPrnReason(new FHIRCodeableConcept($v));
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
     * The time at which the request was made/recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getRecordedOn()
    {
        return $this->recordedOn;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time at which the request was made/recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $recordedOn
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setRecordedOn($recordedOn = null)
    {
        if (null === $recordedOn) {
            $this->recordedOn = null;
            return $this;
        }
        if ($recordedOn instanceof FHIRDateTime) {
            $this->recordedOn = $recordedOn;
            return $this;
        }
        $this->recordedOn = new FHIRDateTime($recordedOn);
        return $this;
    }

    /**
     * Codes representing the status of the request.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Codes representing the status of the request.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestStatus $status
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setStatus(FHIRDeviceUseRequestStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient who will use the device.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient who will use the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $subject
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
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
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $timingDateTime
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setTimingDateTime($timingDateTime = null)
    {
        if (null === $timingDateTime) {
            $this->timingDateTime = null;
            return $this;
        }
        if ($timingDateTime instanceof FHIRDateTime) {
            $this->timingDateTime = $timingDateTime;
            return $this;
        }
        $this->timingDateTime = new FHIRDateTime($timingDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $timingPeriod
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setTimingPeriod(FHIRPeriod $timingPeriod = null)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming $timingTiming
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
     */
    public function setTimingTiming(FHIRTiming $timingTiming = null)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
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
                throw new \DomainException(sprintf('FHIRDeviceUseRequest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceUseRequest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRDeviceUseRequest);
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceUseRequest)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceUseRequest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->bodySiteCodeableConcept)) {
            $type->setBodySiteCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->bodySiteCodeableConcept));
        }
        if (isset($children->bodySiteReference)) {
            $type->setBodySiteReference(FHIRReference::xmlUnserialize($children->bodySiteReference));
        }
        if (isset($children->device)) {
            $type->setDevice(FHIRReference::xmlUnserialize($children->device));
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->indication)) {
            foreach($children->indication as $child) {
                $type->addIndication(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->notes)) {
            $type->addNotes((string)$attributes->notes);
        }
        if (isset($children->notes)) {
            foreach($children->notes as $child) {
                $type->addNotes(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->orderedOn)) {
            $type->setOrderedOn((string)$attributes->orderedOn);
        }
        if (isset($children->orderedOn)) {
            $type->setOrderedOn(FHIRDateTime::xmlUnserialize($children->orderedOn));
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRDeviceUseRequestPriority::xmlUnserialize($children->priority));
        }
        if (isset($children->prnReason)) {
            foreach($children->prnReason as $child) {
                $type->addPrnReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->recordedOn)) {
            $type->setRecordedOn((string)$attributes->recordedOn);
        }
        if (isset($children->recordedOn)) {
            $type->setRecordedOn(FHIRDateTime::xmlUnserialize($children->recordedOn));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRDeviceUseRequestStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($attributes->timingDateTime)) {
            $type->setTimingDateTime((string)$attributes->timingDateTime);
        }
        if (isset($children->timingDateTime)) {
            $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($children->timingDateTime));
        }
        if (isset($children->timingPeriod)) {
            $type->setTimingPeriod(FHIRPeriod::xmlUnserialize($children->timingPeriod));
        }
        if (isset($children->timingTiming)) {
            $type->setTimingTiming(FHIRTiming::xmlUnserialize($children->timingTiming));
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
            $sxe = new \SimpleXMLElement('<DeviceUseRequest xmlns="http://hl7.org/fhir"></DeviceUseRequest>');
        }
    parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getBodySiteCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BODY_SITE_CODEABLE_CONCEPT));
        }

        if (null !== ($v = $this->getBodySiteReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BODY_SITE_REFERENCE));
        }

        if (null !== ($v = $this->getDevice())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE));
        }

        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }

        if ([] !== ($vs = $this->getIndication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INDICATION));
            }
        }
        if ([] !== ($vs = $this->getNotes())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_NOTES, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_NOTES));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_NOTES));
                }
            }
        }
        if (null !== ($v = $this->getOrderedOn())) {
            $sxe->addAttribute(self::FIELD_ORDERED_ON, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ORDERED_ON));
            }
        }

        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY));
        }

        if ([] !== ($vs = $this->getPrnReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRN_REASON));
            }
        }
        if (null !== ($v = $this->getRecordedOn())) {
            $sxe->addAttribute(self::FIELD_RECORDED_ON, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDED_ON));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }

        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT));
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $sxe->addAttribute(self::FIELD_TIMING_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_DATE_TIME));
            }
        }

        if (null !== ($v = $this->getTimingPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_PERIOD));
        }

        if (null !== ($v = $this->getTimingTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_TIMING));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBodySiteCodeableConcept())) {
            $a[self::FIELD_BODY_SITE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getBodySiteReference())) {
            $a[self::FIELD_BODY_SITE_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getDevice())) {
            $a[self::FIELD_DEVICE] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getIndication())) {
            $a[self::FIELD_INDICATION] = $vs;
        }
        if ([] !== ($vs = $this->getNotes())) {
            $a[self::FIELD_NOTES] = [];
            $a[self::FIELD_NOTES_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_NOTES][] = (string)$v;
                $a[self::FIELD_NOTES_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getOrderedOn())) {
            $a[self::FIELD_ORDERED_ON] = (string)$v;
            $a[self::FIELD_ORDERED_ON_EXT] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v;
        }
        if ([] !== ($vs = $this->getPrnReason())) {
            $a[self::FIELD_PRN_REASON] = $vs;
        }
        if (null !== ($v = $this->getRecordedOn())) {
            $a[self::FIELD_RECORDED_ON] = (string)$v;
            $a[self::FIELD_RECORDED_ON_EXT] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $a[self::FIELD_TIMING_DATE_TIME] = (string)$v;
            $a[self::FIELD_TIMING_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $a[self::FIELD_TIMING_PERIOD] = $v;
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $a[self::FIELD_TIMING_TIMING] = $v;
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