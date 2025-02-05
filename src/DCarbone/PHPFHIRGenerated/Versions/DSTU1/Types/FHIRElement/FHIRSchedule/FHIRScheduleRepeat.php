<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREventTiming;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUnitsOfTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIREventTimingList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * Specifies an event that may occur multiple times. Schedules are used for to
 * reord when things are expected or requested to occur.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRScheduleRepeat extends FHIRElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT;

    /* class_default.php:50 */
    public const FIELD_FREQUENCY = 'frequency';
    public const FIELD_FREQUENCY_EXT = '_frequency';
    public const FIELD_WHEN = 'when';
    public const FIELD_WHEN_EXT = '_when';
    public const FIELD_DURATION = 'duration';
    public const FIELD_DURATION_EXT = '_duration';
    public const FIELD_UNITS = 'units';
    public const FIELD_UNITS_EXT = '_units';
    public const FIELD_COUNT = 'count';
    public const FIELD_COUNT_EXT = '_count';
    public const FIELD_END = 'end';
    public const FIELD_END_EXT = '_end';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_DURATION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_UNITS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_FREQUENCY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WHEN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DURATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_UNITS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_END => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how often the event should occur.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $frequency;
    /**
     * Real world event that the schedule relates to
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the occurrence of daily life that determines timing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREventTiming 
     */
    protected FHIREventTiming $when;
    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long each repetition should last.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $duration;
    /**
     * A unit of time (units from UCUM)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUnitsOfTime 
     */
    protected FHIRUnitsOfTime $units;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $count;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When to stop repeating the schedule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $end;

    /* constructor.php:61 */
    /**
     * FHIRScheduleRepeat Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $frequency
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIREventTimingList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREventTiming $when
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $duration
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUnitsOfTime $units
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $count
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $end
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $frequency = null,
                                null|string|FHIREventTimingList|FHIREventTiming $when = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $duration = null,
                                null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $units = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $count = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $end = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $frequency) {
            $this->setFrequency($frequency);
        }
        if (null !== $when) {
            $this->setWhen($when);
        }
        if (null !== $duration) {
            $this->setDuration($duration);
        }
        if (null !== $units) {
            $this->setUnits($units);
        }
        if (null !== $count) {
            $this->setCount($count);
        }
        if (null !== $end) {
            $this->setEnd($end);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how often the event should occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getFrequency(): null|FHIRInteger
    {
        return $this->frequency ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how often the event should occur.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $frequency
     * @return static
     */
    public function setFrequency(null|string|float|FHIRIntegerPrimitive|FHIRInteger $frequency): self
    {
        if (null === $frequency) {
            unset($this->frequency);
            return $this;
        }
        if (!($frequency instanceof FHIRInteger)) {
            $frequency = new FHIRInteger(value: $frequency);
        }
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Real world event that the schedule relates to
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the occurrence of daily life that determines timing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREventTiming
     */
    public function getWhen(): null|FHIREventTiming
    {
        return $this->when ?? null;
    }

    /**
     * Real world event that the schedule relates to
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the occurrence of daily life that determines timing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIREventTimingList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREventTiming $when
     * @return static
     */
    public function setWhen(null|string|FHIREventTimingList|FHIREventTiming $when): self
    {
        if (null === $when) {
            unset($this->when);
            return $this;
        }
        if (!($when instanceof FHIREventTiming)) {
            $when = new FHIREventTiming(value: $when);
        }
        $this->when = $when;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long each repetition should last.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal
     */
    public function getDuration(): null|FHIRDecimal
    {
        return $this->duration ?? null;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How long each repetition should last.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $duration
     * @return static
     */
    public function setDuration(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $duration): self
    {
        if (null === $duration) {
            unset($this->duration);
            return $this;
        }
        if (!($duration instanceof FHIRDecimal)) {
            $duration = new FHIRDecimal(value: $duration);
        }
        $this->duration = $duration;
        return $this;
    }

    /**
     * A unit of time (units from UCUM)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUnitsOfTime
     */
    public function getUnits(): null|FHIRUnitsOfTime
    {
        return $this->units ?? null;
    }

    /**
     * A unit of time (units from UCUM)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The units of time for the duration.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUnitsOfTime $units
     * @return static
     */
    public function setUnits(null|string|FHIRUnitsOfTimeList|FHIRUnitsOfTime $units): self
    {
        if (null === $units) {
            unset($this->units);
            return $this;
        }
        if (!($units instanceof FHIRUnitsOfTime)) {
            $units = new FHIRUnitsOfTime(value: $units);
        }
        $this->units = $units;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getCount(): null|FHIRInteger
    {
        return $this->count ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A total count of the desired number of repetitions.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $count
     * @return static
     */
    public function setCount(null|string|float|FHIRIntegerPrimitive|FHIRInteger $count): self
    {
        if (null === $count) {
            unset($this->count);
            return $this;
        }
        if (!($count instanceof FHIRInteger)) {
            $count = new FHIRInteger(value: $count);
        }
        $this->count = $count;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When to stop repeating the schedule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getEnd(): null|FHIRDateTime
    {
        return $this->end ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When to stop repeating the schedule.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $end
     * @return static
     */
    public function setEnd(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $end): self
    {
        if (null === $end) {
            unset($this->end);
            return $this;
        }
        if (!($end instanceof FHIRDateTime)) {
            $end = new FHIRDateTime(value: $end);
        }
        $this->end = $end;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule\FHIRScheduleRepeat $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRScheduleRepeat)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_FREQUENCY === $cen) {
                $type->setFrequency(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WHEN === $cen) {
                $type->setWhen(FHIREventTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DURATION === $cen) {
                $type->setDuration(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UNITS === $cen) {
                $type->setUnits(FHIRUnitsOfTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COUNT === $cen) {
                $type->setCount(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_END === $cen) {
                $type->setEnd(FHIRDateTime::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FREQUENCY])) {
            if (isset($type->frequency)) {
                $type->frequency->setValue((string)$attributes[self::FIELD_FREQUENCY]);
            } else {
                $type->setFrequency((string)$attributes[self::FIELD_FREQUENCY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FREQUENCY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_WHEN])) {
            if (isset($type->when)) {
                $type->when->setValue((string)$attributes[self::FIELD_WHEN]);
            } else {
                $type->setWhen((string)$attributes[self::FIELD_WHEN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_WHEN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DURATION])) {
            if (isset($type->duration)) {
                $type->duration->setValue((string)$attributes[self::FIELD_DURATION]);
            } else {
                $type->setDuration((string)$attributes[self::FIELD_DURATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DURATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_UNITS])) {
            if (isset($type->units)) {
                $type->units->setValue((string)$attributes[self::FIELD_UNITS]);
            } else {
                $type->setUnits((string)$attributes[self::FIELD_UNITS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_UNITS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COUNT])) {
            if (isset($type->count)) {
                $type->count->setValue((string)$attributes[self::FIELD_COUNT]);
            } else {
                $type->setCount((string)$attributes[self::FIELD_COUNT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COUNT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_END])) {
            if (isset($type->end)) {
                $type->end->setValue((string)$attributes[self::FIELD_END]);
            } else {
                $type->setEnd((string)$attributes[self::FIELD_END]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_END, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ScheduleRepeat', $this->_getSourceXMLNS());
        }
        if (isset($this->frequency) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FREQUENCY]) {
            $xw->writeAttribute(self::FIELD_FREQUENCY, $this->frequency->_getValueAsString());
        }
        if (isset($this->when) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WHEN]) {
            $xw->writeAttribute(self::FIELD_WHEN, $this->when->_getValueAsString());
        }
        if (isset($this->duration) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION]) {
            $xw->writeAttribute(self::FIELD_DURATION, $this->duration->_getValueAsString());
        }
        if (isset($this->units) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_UNITS]) {
            $xw->writeAttribute(self::FIELD_UNITS, $this->units->_getValueAsString());
        }
        if (isset($this->count) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COUNT]) {
            $xw->writeAttribute(self::FIELD_COUNT, $this->count->_getValueAsString());
        }
        if (isset($this->end) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_END]) {
            $xw->writeAttribute(self::FIELD_END, $this->end->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->frequency)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FREQUENCY]
                || $this->frequency->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FREQUENCY);
            $this->frequency->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FREQUENCY]);
            $xw->endElement();
        }
        if (isset($this->when)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_WHEN]
                || $this->when->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_WHEN);
            $this->when->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_WHEN]);
            $xw->endElement();
        }
        if (isset($this->duration)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DURATION]
                || $this->duration->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DURATION);
            $this->duration->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DURATION]);
            $xw->endElement();
        }
        if (isset($this->units)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_UNITS]
                || $this->units->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_UNITS);
            $this->units->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_UNITS]);
            $xw->endElement();
        }
        if (isset($this->count)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COUNT]
                || $this->count->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COUNT);
            $this->count->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COUNT]);
            $xw->endElement();
        }
        if (isset($this->end)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_END]
                || $this->end->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_END);
            $this->end->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_END]);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule\FHIRScheduleRepeat $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRScheduleRepeat)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: false, depth: $config->getJSONDecodeMaxDepth());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->frequency)
            || isset($json->_frequency)
            || property_exists($json, self::FIELD_FREQUENCY)
            || property_exists($json, self::FIELD_FREQUENCY_EXT)) {
            $v = $json->_frequency ?? new \stdClass();
            $v->value = $json->frequency ?? null;
            $type->setFrequency(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->when)
            || isset($json->_when)
            || property_exists($json, self::FIELD_WHEN)
            || property_exists($json, self::FIELD_WHEN_EXT)) {
            $v = $json->_when ?? new \stdClass();
            $v->value = $json->when ?? null;
            $type->setWhen(FHIREventTiming::jsonUnserialize($v, $config));
        }
        if (isset($json->duration)
            || isset($json->_duration)
            || property_exists($json, self::FIELD_DURATION)
            || property_exists($json, self::FIELD_DURATION_EXT)) {
            $v = $json->_duration ?? new \stdClass();
            $v->value = $json->duration ?? null;
            $type->setDuration(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($json->units)
            || isset($json->_units)
            || property_exists($json, self::FIELD_UNITS)
            || property_exists($json, self::FIELD_UNITS_EXT)) {
            $v = $json->_units ?? new \stdClass();
            $v->value = $json->units ?? null;
            $type->setUnits(FHIRUnitsOfTime::jsonUnserialize($v, $config));
        }
        if (isset($json->count)
            || isset($json->_count)
            || property_exists($json, self::FIELD_COUNT)
            || property_exists($json, self::FIELD_COUNT_EXT)) {
            $v = $json->_count ?? new \stdClass();
            $v->value = $json->count ?? null;
            $type->setCount(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->end)
            || isset($json->_end)
            || property_exists($json, self::FIELD_END)
            || property_exists($json, self::FIELD_END_EXT)) {
            $v = $json->_end ?? new \stdClass();
            $v->value = $json->end ?? null;
            $type->setEnd(FHIRDateTime::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->frequency)) {
            if (null !== ($val = $this->frequency->getValue())) {
                $out->frequency = $val;
            }
            if ($this->frequency->_nonValueFieldDefined()) {
                $ext = $this->frequency->jsonSerialize();
                unset($ext->value);
                $out->_frequency = $ext;
            }
        }
        if (isset($this->when)) {
            if (null !== ($val = $this->when->getValue())) {
                $out->when = $val;
            }
            if ($this->when->_nonValueFieldDefined()) {
                $ext = $this->when->jsonSerialize();
                unset($ext->value);
                $out->_when = $ext;
            }
        }
        if (isset($this->duration)) {
            if (null !== ($val = $this->duration->getValue())) {
                $out->duration = $val;
            }
            if ($this->duration->_nonValueFieldDefined()) {
                $ext = $this->duration->jsonSerialize();
                unset($ext->value);
                $out->_duration = $ext;
            }
        }
        if (isset($this->units)) {
            if (null !== ($val = $this->units->getValue())) {
                $out->units = $val;
            }
            if ($this->units->_nonValueFieldDefined()) {
                $ext = $this->units->jsonSerialize();
                unset($ext->value);
                $out->_units = $ext;
            }
        }
        if (isset($this->count)) {
            if (null !== ($val = $this->count->getValue())) {
                $out->count = $val;
            }
            if ($this->count->_nonValueFieldDefined()) {
                $ext = $this->count->jsonSerialize();
                unset($ext->value);
                $out->_count = $ext;
            }
        }
        if (isset($this->end)) {
            if (null !== ($val = $this->end->getValue())) {
                $out->end = $val;
            }
            if ($this->end->_nonValueFieldDefined()) {
                $ext = $this->end->jsonSerialize();
                unset($ext->value);
                $out->_end = $ext;
            }
        }
        return $out;
    }
}