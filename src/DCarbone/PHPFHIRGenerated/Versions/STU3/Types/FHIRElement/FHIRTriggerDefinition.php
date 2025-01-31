<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTriggerTypeList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * A description of a triggering event.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRTriggerDefinition extends FHIRElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TRIGGER_DEFINITION;

    /* class_default.php:48 */
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_EVENT_NAME = 'eventName';
    public const FIELD_EVENT_NAME_EXT = '_eventName';
    public const FIELD_EVENT_TIMING_TIMING = 'eventTimingTiming';
    public const FIELD_EVENT_TIMING_REFERENCE = 'eventTimingReference';
    public const FIELD_EVENT_TIMING_DATE = 'eventTimingDate';
    public const FIELD_EVENT_TIMING_DATE_EXT = '_eventTimingDate';
    public const FIELD_EVENT_TIMING_DATE_TIME = 'eventTimingDateTime';
    public const FIELD_EVENT_TIMING_DATE_TIME_EXT = '_eventTimingDateTime';
    public const FIELD_EVENT_DATA = 'eventData';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EVENT_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EVENT_TIMING_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EVENT_TIMING_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * The type of trigger
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of triggering event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerType 
     */
    protected FHIRTriggerType $type;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the event (if this is a named-event trigger).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $eventName;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming 
     */
    protected FHIRTiming $eventTimingTiming;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $eventTimingReference;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $eventTimingDate;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $eventTimingDateTime;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The triggering data of the event (if this is a data trigger).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement 
     */
    protected FHIRDataRequirement $eventData;

    /* constructor.php:63 */
    /**
     * FHIRTriggerDefinition Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTriggerTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerType $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $eventName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming $eventTimingTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $eventTimingReference
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $eventTimingDate
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $eventTimingDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement $eventData
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|string|FHIRTriggerTypeList|FHIRTriggerType $type = null,
                                null|string|FHIRStringPrimitive|FHIRString $eventName = null,
                                null|FHIRTiming $eventTimingTiming = null,
                                null|FHIRReference $eventTimingReference = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $eventTimingDate = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $eventTimingDateTime = null,
                                null|FHIRDataRequirement $eventData = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $eventName) {
            $this->setEventName($eventName);
        }
        if (null !== $eventTimingTiming) {
            $this->setEventTimingTiming($eventTimingTiming);
        }
        if (null !== $eventTimingReference) {
            $this->setEventTimingReference($eventTimingReference);
        }
        if (null !== $eventTimingDate) {
            $this->setEventTimingDate($eventTimingDate);
        }
        if (null !== $eventTimingDateTime) {
            $this->setEventTimingDateTime($eventTimingDateTime);
        }
        if (null !== $eventData) {
            $this->setEventData($eventData);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * The type of trigger
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of triggering event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerType
     */
    public function getType(): null|FHIRTriggerType
    {
        return $this->type ?? null;
    }

    /**
     * The type of trigger
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of triggering event.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTriggerTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerType $type
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setType(null|string|FHIRTriggerTypeList|FHIRTriggerType $type,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRTriggerType)) {
            $type = new FHIRTriggerType(value: $type);
        }
        $this->type = $type;
        if ($this->_valueXMLLocations[self::FIELD_TYPE] !== $valueXMLLocation) {
            $this->_setTypeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the type element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTypeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TYPE];
    }

    /**
     * Set the location the "value" field of the type element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTypeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TYPE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the event (if this is a named-event trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getEventName(): null|FHIRString
    {
        return $this->eventName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the event (if this is a named-event trigger).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $eventName
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEventName(null|string|FHIRStringPrimitive|FHIRString $eventName,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $eventName) {
            unset($this->eventName);
            return $this;
        }
        if (!($eventName instanceof FHIRString)) {
            $eventName = new FHIRString(value: $eventName);
        }
        $this->eventName = $eventName;
        if ($this->_valueXMLLocations[self::FIELD_EVENT_NAME] !== $valueXMLLocation) {
            $this->_setEventNameValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the eventName element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEventNameValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EVENT_NAME];
    }

    /**
     * Set the location the "value" field of the eventName element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEventNameValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EVENT_NAME] = $valueXMLLocation;
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
     * The timing of the event (if this is a period trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming
     */
    public function getEventTimingTiming(): null|FHIRTiming
    {
        return $this->eventTimingTiming ?? null;
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
     * The timing of the event (if this is a period trigger).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming $eventTimingTiming
     * @return static
     */
    public function setEventTimingTiming(null|FHIRTiming $eventTimingTiming): self
    {
        if (null === $eventTimingTiming) {
            unset($this->eventTimingTiming);
            return $this;
        }
        $this->eventTimingTiming = $eventTimingTiming;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getEventTimingReference(): null|FHIRReference
    {
        return $this->eventTimingReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $eventTimingReference
     * @return static
     */
    public function setEventTimingReference(null|FHIRReference $eventTimingReference): self
    {
        if (null === $eventTimingReference) {
            unset($this->eventTimingReference);
            return $this;
        }
        $this->eventTimingReference = $eventTimingReference;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate
     */
    public function getEventTimingDate(): null|FHIRDate
    {
        return $this->eventTimingDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate $eventTimingDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEventTimingDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $eventTimingDate,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $eventTimingDate) {
            unset($this->eventTimingDate);
            return $this;
        }
        if (!($eventTimingDate instanceof FHIRDate)) {
            $eventTimingDate = new FHIRDate(value: $eventTimingDate);
        }
        $this->eventTimingDate = $eventTimingDate;
        if ($this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE] !== $valueXMLLocation) {
            $this->_setEventTimingDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the eventTimingDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEventTimingDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE];
    }

    /**
     * Set the location the "value" field of the eventTimingDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEventTimingDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE] = $valueXMLLocation;
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
     * The timing of the event (if this is a period trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getEventTimingDateTime(): null|FHIRDateTime
    {
        return $this->eventTimingDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The timing of the event (if this is a period trigger).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $eventTimingDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEventTimingDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $eventTimingDateTime,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $eventTimingDateTime) {
            unset($this->eventTimingDateTime);
            return $this;
        }
        if (!($eventTimingDateTime instanceof FHIRDateTime)) {
            $eventTimingDateTime = new FHIRDateTime(value: $eventTimingDateTime);
        }
        $this->eventTimingDateTime = $eventTimingDateTime;
        if ($this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE_TIME] !== $valueXMLLocation) {
            $this->_setEventTimingDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the eventTimingDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEventTimingDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the eventTimingDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEventTimingDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The triggering data of the event (if this is a data trigger).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement
     */
    public function getEventData(): null|FHIRDataRequirement
    {
        return $this->eventData ?? null;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The triggering data of the event (if this is a data trigger).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement $eventData
     * @return static
     */
    public function setEventData(null|FHIRDataRequirement $eventData): self
    {
        if (null === $eventData) {
            unset($this->eventData);
            return $this;
        }
        $this->eventData = $eventData;
        return $this;
    }

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVENT_NAME])) {
            $v = $this->getEventName();
            foreach($validationRules[self::FIELD_EVENT_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EVENT_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT_NAME])) {
                        $errs[self::FIELD_EVENT_NAME] = [];
                    }
                    $errs[self::FIELD_EVENT_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVENT_TIMING_TIMING])) {
            $v = $this->getEventTimingTiming();
            foreach($validationRules[self::FIELD_EVENT_TIMING_TIMING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EVENT_TIMING_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT_TIMING_TIMING])) {
                        $errs[self::FIELD_EVENT_TIMING_TIMING] = [];
                    }
                    $errs[self::FIELD_EVENT_TIMING_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVENT_TIMING_REFERENCE])) {
            $v = $this->getEventTimingReference();
            foreach($validationRules[self::FIELD_EVENT_TIMING_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EVENT_TIMING_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT_TIMING_REFERENCE])) {
                        $errs[self::FIELD_EVENT_TIMING_REFERENCE] = [];
                    }
                    $errs[self::FIELD_EVENT_TIMING_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVENT_TIMING_DATE])) {
            $v = $this->getEventTimingDate();
            foreach($validationRules[self::FIELD_EVENT_TIMING_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EVENT_TIMING_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT_TIMING_DATE])) {
                        $errs[self::FIELD_EVENT_TIMING_DATE] = [];
                    }
                    $errs[self::FIELD_EVENT_TIMING_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVENT_TIMING_DATE_TIME])) {
            $v = $this->getEventTimingDateTime();
            foreach($validationRules[self::FIELD_EVENT_TIMING_DATE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EVENT_TIMING_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT_TIMING_DATE_TIME])) {
                        $errs[self::FIELD_EVENT_TIMING_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_EVENT_TIMING_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVENT_DATA])) {
            $v = $this->getEventData();
            foreach($validationRules[self::FIELD_EVENT_DATA] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EVENT_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT_DATA])) {
                        $errs[self::FIELD_EVENT_DATA] = [];
                    }
                    $errs[self::FIELD_EVENT_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTriggerDefinition)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRTriggerType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVENT_NAME === $cen) {
                $type->setEventName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVENT_TIMING_TIMING === $cen) {
                $type->setEventTimingTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVENT_TIMING_REFERENCE === $cen) {
                $type->setEventTimingReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVENT_TIMING_DATE === $cen) {
                $type->setEventTimingDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVENT_TIMING_DATE_TIME === $cen) {
                $type->setEventTimingDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVENT_DATA === $cen) {
                $type->setEventData(FHIRDataRequirement::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
                $type->_setTypeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EVENT_NAME])) {
            if (isset($type->eventName)) {
                $type->eventName->setValue((string)$attributes[self::FIELD_EVENT_NAME]);
                $type->_setEventNameValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEventName((string)$attributes[self::FIELD_EVENT_NAME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EVENT_TIMING_DATE])) {
            if (isset($type->eventTimingDate)) {
                $type->eventTimingDate->setValue((string)$attributes[self::FIELD_EVENT_TIMING_DATE]);
                $type->_setEventTimingDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEventTimingDate((string)$attributes[self::FIELD_EVENT_TIMING_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EVENT_TIMING_DATE_TIME])) {
            if (isset($type->eventTimingDateTime)) {
                $type->eventTimingDateTime->setValue((string)$attributes[self::FIELD_EVENT_TIMING_DATE_TIME]);
                $type->_setEventTimingDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEventTimingDateTime((string)$attributes[self::FIELD_EVENT_TIMING_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getFormattedValue());
        }
        if (isset($this->eventName) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EVENT_NAME]) {
            $xw->writeAttribute(self::FIELD_EVENT_NAME, $this->eventName->_getFormattedValue());
        }
        if (isset($this->eventTimingDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE]) {
            $xw->writeAttribute(self::FIELD_EVENT_TIMING_DATE, $this->eventTimingDate->_getFormattedValue());
        }
        if (isset($this->eventTimingDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_EVENT_TIMING_DATE_TIME, $this->eventTimingDateTime->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->eventName)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EVENT_NAME]
                || $this->eventName->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EVENT_NAME);
            $this->eventName->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EVENT_NAME]);
            $xw->endElement();
        }
        if (isset($this->eventTimingTiming)) {
            $xw->startElement(self::FIELD_EVENT_TIMING_TIMING);
            $this->eventTimingTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->eventTimingReference)) {
            $xw->startElement(self::FIELD_EVENT_TIMING_REFERENCE);
            $this->eventTimingReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->eventTimingDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE]
                || $this->eventTimingDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EVENT_TIMING_DATE);
            $this->eventTimingDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE]);
            $xw->endElement();
        }
        if (isset($this->eventTimingDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE_TIME]
                || $this->eventTimingDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EVENT_TIMING_DATE_TIME);
            $this->eventTimingDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->eventData)) {
            $xw->startElement(self::FIELD_EVENT_DATA);
            $this->eventData->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTriggerDefinition)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_TYPE])
            || isset($json[self::FIELD_TYPE_EXT])
            || array_key_exists(self::FIELD_TYPE, $json)
            || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $type->setType(FHIRTriggerType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRTriggerType::FIELD_VALUE => $value]) + ($json[self::FIELD_TYPE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EVENT_NAME])
            || isset($json[self::FIELD_EVENT_NAME_EXT])
            || array_key_exists(self::FIELD_EVENT_NAME, $json)
            || array_key_exists(self::FIELD_EVENT_NAME_EXT, $json)) {
            $value = $json[self::FIELD_EVENT_NAME] ?? null;
            $type->setEventName(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_EVENT_NAME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EVENT_TIMING_TIMING]) || array_key_exists(self::FIELD_EVENT_TIMING_TIMING, $json)) {
            $type->setEventTimingTiming(FHIRTiming::jsonUnserialize($json[self::FIELD_EVENT_TIMING_TIMING], $config));
        }
        if (isset($json[self::FIELD_EVENT_TIMING_REFERENCE]) || array_key_exists(self::FIELD_EVENT_TIMING_REFERENCE, $json)) {
            $type->setEventTimingReference(FHIRReference::jsonUnserialize($json[self::FIELD_EVENT_TIMING_REFERENCE], $config));
        }
        if (isset($json[self::FIELD_EVENT_TIMING_DATE])
            || isset($json[self::FIELD_EVENT_TIMING_DATE_EXT])
            || array_key_exists(self::FIELD_EVENT_TIMING_DATE, $json)
            || array_key_exists(self::FIELD_EVENT_TIMING_DATE_EXT, $json)) {
            $value = $json[self::FIELD_EVENT_TIMING_DATE] ?? null;
            $type->setEventTimingDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_EVENT_TIMING_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EVENT_TIMING_DATE_TIME])
            || isset($json[self::FIELD_EVENT_TIMING_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_EVENT_TIMING_DATE_TIME, $json)
            || array_key_exists(self::FIELD_EVENT_TIMING_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_EVENT_TIMING_DATE_TIME] ?? null;
            $type->setEventTimingDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_EVENT_TIMING_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EVENT_DATA]) || array_key_exists(self::FIELD_EVENT_DATA, $json)) {
            $type->setEventData(FHIRDataRequirement::jsonUnserialize($json[self::FIELD_EVENT_DATA], $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            $ext = $this->type->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_type = $ext;
            }
        }
        if (isset($this->eventName)) {
            if (null !== ($val = $this->eventName->getValue())) {
                $out->eventName = $val;
            }
            $ext = $this->eventName->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_eventName = $ext;
            }
        }
        if (isset($this->eventTimingTiming)) {
            $out->eventTimingTiming = $this->eventTimingTiming;
        }
        if (isset($this->eventTimingReference)) {
            $out->eventTimingReference = $this->eventTimingReference;
        }
        if (isset($this->eventTimingDate)) {
            if (null !== ($val = $this->eventTimingDate->getValue())) {
                $out->eventTimingDate = $val;
            }
            $ext = $this->eventTimingDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_eventTimingDate = $ext;
            }
        }
        if (isset($this->eventTimingDateTime)) {
            if (null !== ($val = $this->eventTimingDateTime->getValue())) {
                $out->eventTimingDateTime = $val;
            }
            $ext = $this->eventTimingDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_eventTimingDateTime = $ext;
            }
        }
        if (isset($this->eventData)) {
            $out->eventData = $this->eventData;
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}