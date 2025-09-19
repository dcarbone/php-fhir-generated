<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 19th, 2025 16:36+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTriggerTypeList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * A description of a triggering event.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRTriggerDefinition extends FHIRElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TRIGGER_DEFINITION;

    /* class_default.php:56 */
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

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EVENT_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EVENT_TIMING_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EVENT_TIMING_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * The type of trigger
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of triggering event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerType 
     */
    #[FHIRTriggerType]
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
    #[FHIRString]
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
    #[FHIRTiming]
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
    #[FHIRReference]
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
    #[FHIRDate]
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
    #[FHIRDateTime]
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
    #[FHIRDataRequirement]
    protected FHIRDataRequirement $eventData;

    /* constructor.php:61 */
    /**
     * FHIRTriggerDefinition Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension> $extension
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

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
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
     * @return static
     */
    public function setType(null|string|FHIRTriggerTypeList|FHIRTriggerType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRTriggerType)) {
            $type = new FHIRTriggerType(value: $type);
        }
        $this->type = $type;
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
     * @return static
     */
    public function setEventName(null|string|FHIRStringPrimitive|FHIRString $eventName): self
    {
        if (null === $eventName) {
            unset($this->eventName);
            return $this;
        }
        if (!($eventName instanceof FHIRString)) {
            $eventName = new FHIRString(value: $eventName);
        }
        $this->eventName = $eventName;
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
     * @return static
     */
    public function setEventTimingDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $eventTimingDate): self
    {
        if (null === $eventTimingDate) {
            unset($this->eventTimingDate);
            return $this;
        }
        if (!($eventTimingDate instanceof FHIRDate)) {
            $eventTimingDate = new FHIRDate(value: $eventTimingDate);
        }
        $this->eventTimingDate = $eventTimingDate;
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
     * @return static
     */
    public function setEventTimingDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $eventTimingDateTime): self
    {
        if (null === $eventTimingDateTime) {
            unset($this->eventTimingDateTime);
            return $this;
        }
        if (!($eventTimingDateTime instanceof FHIRDateTime)) {
            $eventTimingDateTime = new FHIRDateTime(value: $eventTimingDateTime);
        }
        $this->eventTimingDateTime = $eventTimingDateTime;
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

    /* class_default.php:201 */
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
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
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
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EVENT_NAME])) {
            if (isset($type->eventName)) {
                $type->eventName->setValue((string)$attributes[self::FIELD_EVENT_NAME]);
            } else {
                $type->setEventName((string)$attributes[self::FIELD_EVENT_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EVENT_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EVENT_TIMING_DATE])) {
            if (isset($type->eventTimingDate)) {
                $type->eventTimingDate->setValue((string)$attributes[self::FIELD_EVENT_TIMING_DATE]);
            } else {
                $type->setEventTimingDate((string)$attributes[self::FIELD_EVENT_TIMING_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EVENT_TIMING_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EVENT_TIMING_DATE_TIME])) {
            if (isset($type->eventTimingDateTime)) {
                $type->eventTimingDateTime->setValue((string)$attributes[self::FIELD_EVENT_TIMING_DATE_TIME]);
            } else {
                $type->setEventTimingDateTime((string)$attributes[self::FIELD_EVENT_TIMING_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EVENT_TIMING_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getValueAsString());
        }
        if (isset($this->eventName) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EVENT_NAME]) {
            $xw->writeAttribute(self::FIELD_EVENT_NAME, $this->eventName->_getValueAsString());
        }
        if (isset($this->eventTimingDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE]) {
            $xw->writeAttribute(self::FIELD_EVENT_TIMING_DATE, $this->eventTimingDate->_getValueAsString());
        }
        if (isset($this->eventTimingDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EVENT_TIMING_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_EVENT_TIMING_DATE_TIME, $this->eventTimingDateTime->_getValueAsString());
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
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->type)
            || isset($decoded->_type)
            || property_exists($decoded, self::FIELD_TYPE)
            || property_exists($decoded, self::FIELD_TYPE_EXT)) {
            $v = $decoded->_type ?? new \stdClass();
            $v->value = $decoded->type ?? null;
            $type->setType(FHIRTriggerType::jsonUnserialize($v, $config));
        }
        if (isset($decoded->eventName)
            || isset($decoded->_eventName)
            || property_exists($decoded, self::FIELD_EVENT_NAME)
            || property_exists($decoded, self::FIELD_EVENT_NAME_EXT)) {
            $v = $decoded->_eventName ?? new \stdClass();
            $v->value = $decoded->eventName ?? null;
            $type->setEventName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->eventTimingTiming) || property_exists($decoded, self::FIELD_EVENT_TIMING_TIMING)) {
            if (is_array($decoded->eventTimingTiming)) {
                $type->setEventTimingTiming(FHIRTiming::jsonUnserialize(reset($decoded->eventTimingTiming), $config));
            } else {
                $type->setEventTimingTiming(FHIRTiming::jsonUnserialize($decoded->eventTimingTiming, $config));
            }
        }
        if (isset($decoded->eventTimingReference) || property_exists($decoded, self::FIELD_EVENT_TIMING_REFERENCE)) {
            if (is_array($decoded->eventTimingReference)) {
                $type->setEventTimingReference(FHIRReference::jsonUnserialize(reset($decoded->eventTimingReference), $config));
            } else {
                $type->setEventTimingReference(FHIRReference::jsonUnserialize($decoded->eventTimingReference, $config));
            }
        }
        if (isset($decoded->eventTimingDate)
            || isset($decoded->_eventTimingDate)
            || property_exists($decoded, self::FIELD_EVENT_TIMING_DATE)
            || property_exists($decoded, self::FIELD_EVENT_TIMING_DATE_EXT)) {
            $v = $decoded->_eventTimingDate ?? new \stdClass();
            $v->value = $decoded->eventTimingDate ?? null;
            $type->setEventTimingDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->eventTimingDateTime)
            || isset($decoded->_eventTimingDateTime)
            || property_exists($decoded, self::FIELD_EVENT_TIMING_DATE_TIME)
            || property_exists($decoded, self::FIELD_EVENT_TIMING_DATE_TIME_EXT)) {
            $v = $decoded->_eventTimingDateTime ?? new \stdClass();
            $v->value = $decoded->eventTimingDateTime ?? null;
            $type->setEventTimingDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->eventData) || property_exists($decoded, self::FIELD_EVENT_DATA)) {
            if (is_array($decoded->eventData)) {
                $type->setEventData(FHIRDataRequirement::jsonUnserialize(reset($decoded->eventData), $config));
            } else {
                $type->setEventData(FHIRDataRequirement::jsonUnserialize($decoded->eventData, $config));
            }
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
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->eventName)) {
            if (null !== ($val = $this->eventName->getValue())) {
                $out->eventName = $val;
            }
            if ($this->eventName->_nonValueFieldDefined()) {
                $ext = $this->eventName->jsonSerialize();
                unset($ext->value);
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
            if ($this->eventTimingDate->_nonValueFieldDefined()) {
                $ext = $this->eventTimingDate->jsonSerialize();
                unset($ext->value);
                $out->_eventTimingDate = $ext;
            }
        }
        if (isset($this->eventTimingDateTime)) {
            if (null !== ($val = $this->eventTimingDateTime->getValue())) {
                $out->eventTimingDateTime = $val;
            }
            if ($this->eventTimingDateTime->_nonValueFieldDefined()) {
                $ext = $this->eventTimingDateTime->jsonSerialize();
                unset($ext->value);
                $out->_eventTimingDateTime = $ext;
            }
        }
        if (isset($this->eventData)) {
            $out->eventData = $this->eventData;
        }
        return $out;
    }
}