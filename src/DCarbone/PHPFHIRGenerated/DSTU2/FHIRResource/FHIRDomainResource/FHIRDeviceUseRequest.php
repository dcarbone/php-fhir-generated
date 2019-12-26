<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

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
 * If the element is present, it must have either a \@value, an \@id, or extensions
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
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_PRN_REASON = 'prnReason';
    const FIELD_RECORDED_ON = 'recordedOn';
    const FIELD_RECORDED_ON_EXT = '_recordedOn';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TIMING_DATE_TIME = 'timingDateTime';
    const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';
    const FIELD_TIMING_PERIOD = 'timingPeriod';
    const FIELD_TIMING_TIMING = 'timingTiming';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the device should be used ( i.e.
     * the target site).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $bodySiteCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the device should be used ( i.e.
     * the target site).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $bodySiteReference = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the device to be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $device = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional context in which this request is made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the orderer or by the receiver.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $indication = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Details about this request that were not represented at all or sufficiently in
     * one of the attributes provided in a class. These may include for example a
     * comment, an instruction, or a note associated with the statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[]
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
     * Codes representing the priority of the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Characterizes how quickly the use of device must be initiated. Includes concepts
     * such as stat, urgent, routine.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestPriority
     */
    protected $priority = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The proposed act must be performed if the indicated conditions occur, e.g..,
     * shortness of breath, SpO2 less than x%.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $prnReason = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time at which the request was made/recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $recordedOn = null;

    /**
     * Codes representing the status of the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who will use the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $timingDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected $timingPeriod = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    protected $timingTiming = null;

    /**
     * Validation map for fields in type DeviceUseRequest
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_INDICATION])) {
            if (is_array($data[self::FIELD_INDICATION])) {
                foreach($data[self::FIELD_INDICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_NOTES]) || isset($data[self::FIELD_NOTES_EXT])) {
            if (isset($data[self::FIELD_NOTES])) {
                $value = $data[self::FIELD_NOTES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT])) {
                $ext = $data[self::FIELD_NOTES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addNotes($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addNotes($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addNotes(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addNotes(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addNotes(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addNotes(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addNotes(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_ORDERED_ON]) || isset($data[self::FIELD_ORDERED_ON_EXT])) {
            if (isset($data[self::FIELD_ORDERED_ON])) {
                $value = $data[self::FIELD_ORDERED_ON];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ORDERED_ON_EXT]) && is_array($data[self::FIELD_ORDERED_ON_EXT])) {
                $ext = $data[self::FIELD_ORDERED_ON_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOrderedOn($value);
                } else if (is_array($value)) {
                    $this->setOrderedOn(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOrderedOn(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOrderedOn(new FHIRDateTime($ext));
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
                if ($value instanceof FHIRDeviceUseRequestPriority) {
                    $this->setPriority($value);
                } else if (is_array($value)) {
                    $this->setPriority(new FHIRDeviceUseRequestPriority(array_merge($ext, $value)));
                } else {
                    $this->setPriority(new FHIRDeviceUseRequestPriority([FHIRDeviceUseRequestPriority::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPriority(new FHIRDeviceUseRequestPriority($ext));
            }
        }
        if (isset($data[self::FIELD_PRN_REASON])) {
            if (is_array($data[self::FIELD_PRN_REASON])) {
                foreach($data[self::FIELD_PRN_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_RECORDED_ON]) || isset($data[self::FIELD_RECORDED_ON_EXT])) {
            if (isset($data[self::FIELD_RECORDED_ON])) {
                $value = $data[self::FIELD_RECORDED_ON];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RECORDED_ON_EXT]) && is_array($data[self::FIELD_RECORDED_ON_EXT])) {
                $ext = $data[self::FIELD_RECORDED_ON_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setRecordedOn($value);
                } else if (is_array($value)) {
                    $this->setRecordedOn(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setRecordedOn(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRecordedOn(new FHIRDateTime($ext));
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
                if ($value instanceof FHIRDeviceUseRequestStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRDeviceUseRequestStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRDeviceUseRequestStatus([FHIRDeviceUseRequestStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRDeviceUseRequestStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TIMING_DATE_TIME]) || isset($data[self::FIELD_TIMING_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_TIMING_DATE_TIME])) {
                $value = $data[self::FIELD_TIMING_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TIMING_DATE_TIME_EXT]) && is_array($data[self::FIELD_TIMING_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_TIMING_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setTimingDateTime($value);
                } else if (is_array($value)) {
                    $this->setTimingDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setTimingDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTimingDateTime(new FHIRDateTime($ext));
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
        return "<DeviceUseRequest{$xmlns}></DeviceUseRequest>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the device should be used ( i.e.
     * the target site).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $bodySiteCodeableConcept
     * @return static
     */
    public function setBodySiteCodeableConcept(FHIRCodeableConcept $bodySiteCodeableConcept = null)
    {
        $this->bodySiteCodeableConcept = $bodySiteCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the site on the subject's body where the device should be used ( i.e.
     * the target site).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $bodySiteReference
     * @return static
     */
    public function setBodySiteReference(FHIRReference $bodySiteReference = null)
    {
        $this->bodySiteReference = $bodySiteReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the device to be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $device
     * @return static
     */
    public function setDevice(FHIRReference $device = null)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional context in which this request is made.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the orderer or by the receiver.
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
     * Identifiers assigned to this order by the orderer or by the receiver.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $indication
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or justification for the use of this device.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $indication
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Details about this request that were not represented at all or sufficiently in
     * one of the attributes provided in a class. These may include for example a
     * comment, an instruction, or a note associated with the statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $notes
     * @return static
     */
    public function addNotes($notes = null)
    {
        if (null === $notes) {
            $this->notes = [];
            return $this;
        }
        if ($notes instanceof FHIRString) {
            $this->notes[] = $notes;
            return $this;
        }
        $this->notes[] = new FHIRString($notes);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Details about this request that were not represented at all or sufficiently in
     * one of the attributes provided in a class. These may include for example a
     * comment, an instruction, or a note associated with the statement.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString[] $notes
     * @return static
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
     * Codes representing the priority of the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Characterizes how quickly the use of device must be initiated. Includes concepts
     * such as stat, urgent, routine.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestPriority $priority
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The proposed act must be performed if the indicated conditions occur, e.g..,
     * shortness of breath, SpO2 less than x%.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $prnReason
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The proposed act must be performed if the indicated conditions occur, e.g..,
     * shortness of breath, SpO2 less than x%.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $prnReason
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time at which the request was made/recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $recordedOn
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestStatus $status
     * @return static
     */
    public function setStatus(FHIRDeviceUseRequestStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who will use the device.
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $timingDateTime
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $timingPeriod
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for the use of the device The Schedule data type allows many
     * different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2
     * an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct
     * 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming $timingTiming
     * @return static
     */
    public function setTimingTiming(FHIRTiming $timingTiming = null)
    {
        $this->timingTiming = $timingTiming;
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
        if (null !== ($v = $this->getBodySiteCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BODY_SITE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBodySiteReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BODY_SITE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDevice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIndication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INDICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNotes())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTES, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOrderedOn())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDERED_ON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPrnReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRN_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRecordedOn())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDED_ON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTimingTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING_TIMING] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE_CODEABLE_CONCEPT])) {
            $v = $this->getBodySiteCodeableConcept();
            foreach($validationRules[self::FIELD_BODY_SITE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_BODY_SITE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_BODY_SITE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_BODY_SITE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE_REFERENCE])) {
            $v = $this->getBodySiteReference();
            foreach($validationRules[self::FIELD_BODY_SITE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_BODY_SITE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE_REFERENCE])) {
                        $errs[self::FIELD_BODY_SITE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INDICATION])) {
            $v = $this->getIndication();
            foreach($validationRules[self::FIELD_INDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_INDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INDICATION])) {
                        $errs[self::FIELD_INDICATION] = [];
                    }
                    $errs[self::FIELD_INDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTES])) {
            $v = $this->getNotes();
            foreach($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_NOTES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTES])) {
                        $errs[self::FIELD_NOTES] = [];
                    }
                    $errs[self::FIELD_NOTES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDERED_ON])) {
            $v = $this->getOrderedOn();
            foreach($validationRules[self::FIELD_ORDERED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_ORDERED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDERED_ON])) {
                        $errs[self::FIELD_ORDERED_ON] = [];
                    }
                    $errs[self::FIELD_ORDERED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRN_REASON])) {
            $v = $this->getPrnReason();
            foreach($validationRules[self::FIELD_PRN_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_PRN_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRN_REASON])) {
                        $errs[self::FIELD_PRN_REASON] = [];
                    }
                    $errs[self::FIELD_PRN_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDED_ON])) {
            $v = $this->getRecordedOn();
            foreach($validationRules[self::FIELD_RECORDED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_RECORDED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDED_ON])) {
                        $errs[self::FIELD_RECORDED_ON] = [];
                    }
                    $errs[self::FIELD_RECORDED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_DATE_TIME])) {
            $v = $this->getTimingDateTime();
            foreach($validationRules[self::FIELD_TIMING_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_TIMING_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_DATE_TIME])) {
                        $errs[self::FIELD_TIMING_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_TIMING_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_PERIOD])) {
            $v = $this->getTimingPeriod();
            foreach($validationRules[self::FIELD_TIMING_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_TIMING_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_PERIOD])) {
                        $errs[self::FIELD_TIMING_PERIOD] = [];
                    }
                    $errs[self::FIELD_TIMING_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING_TIMING])) {
            $v = $this->getTimingTiming();
            foreach($validationRules[self::FIELD_TIMING_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST, self::FIELD_TIMING_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING_TIMING])) {
                        $errs[self::FIELD_TIMING_TIMING] = [];
                    }
                    $errs[self::FIELD_TIMING_TIMING][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest
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
                throw new \DomainException(sprintf('FHIRDeviceUseRequest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceUseRequest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDeviceUseRequest;
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceUseRequest)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceUseRequest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest or null, %s seen.',
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
        if (isset($children->notes)) {
            foreach($children->notes as $child) {
                $type->addNotes(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->orderedOn)) {
            $type->setOrderedOn(FHIRDateTime::xmlUnserialize($children->orderedOn));
        }
        if (isset($attributes->orderedOn)) {
            $pt = $type->getOrderedOn();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->orderedOn);
            } else {
                $type->setOrderedOn((string)$attributes->orderedOn);
            }
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRDeviceUseRequestPriority::xmlUnserialize($children->priority));
        }
        if (isset($children->prnReason)) {
            foreach($children->prnReason as $child) {
                $type->addPrnReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->recordedOn)) {
            $type->setRecordedOn(FHIRDateTime::xmlUnserialize($children->recordedOn));
        }
        if (isset($attributes->recordedOn)) {
            $pt = $type->getRecordedOn();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->recordedOn);
            } else {
                $type->setRecordedOn((string)$attributes->recordedOn);
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRDeviceUseRequestStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->timingDateTime)) {
            $type->setTimingDateTime(FHIRDateTime::xmlUnserialize($children->timingDateTime));
        }
        if (isset($attributes->timingDateTime)) {
            $pt = $type->getTimingDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->timingDateTime);
            } else {
                $type->setTimingDateTime((string)$attributes->timingDateTime);
            }
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
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getBodySiteCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BODY_SITE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getBodySiteReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BODY_SITE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDevice())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getIndication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INDICATION, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPrnReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRN_REASON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRecordedOn())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDED_ON, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING_TIMING, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getIndication())) {
            $a[self::FIELD_INDICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INDICATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getNotes())) {
            $a[self::FIELD_NOTES] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NOTES][] = $v->getValue();
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
                $a[self::FIELD_NOTES_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getOrderedOn())) {
            $a[self::FIELD_ORDERED_ON] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_ORDERED_ON_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDeviceUseRequestPriority::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDeviceUseRequestPriority::FIELD_VALUE]);
                $a[self::FIELD_PRIORITY_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getPrnReason())) {
            $a[self::FIELD_PRN_REASON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PRN_REASON][] = $v;
            }
        }
        if (null !== ($v = $this->getRecordedOn())) {
            $a[self::FIELD_RECORDED_ON] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_RECORDED_ON_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDeviceUseRequestStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDeviceUseRequestStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $a[self::FIELD_TIMING_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_TIMING_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $a[self::FIELD_TIMING_PERIOD] = $v;
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $a[self::FIELD_TIMING_TIMING] = $v;
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