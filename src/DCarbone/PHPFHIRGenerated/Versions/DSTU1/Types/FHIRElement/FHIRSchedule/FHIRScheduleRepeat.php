<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
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
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * Specifies an event that may occur multiple times. Schedules are used for to
 * reord when things are expected or requested to occur.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRScheduleRepeat extends FHIRElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT;


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

    /** Default validation map for fields in type Schedule.Repeat */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_DURATION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_UNITS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRScheduleRepeat Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $frequency
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREventTiming $when
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $duration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUnitsOfTime $units
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $count
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $end
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequency = null,
                                null|FHIREventTiming $when = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $duration = null,
                                null|FHIRUnitsOfTime $units = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $count = null,
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $frequency
     * @return static
     */
    public function setFrequency(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $frequency): self
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREventTiming $when
     * @return static
     */
    public function setWhen(null|FHIREventTiming $when): self
    {
        if (null === $when) {
            unset($this->when);
            return $this;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal $duration
     * @return static
     */
    public function setDuration(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $duration): self
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUnitsOfTime $units
     * @return static
     */
    public function setUnits(null|FHIRUnitsOfTime $units): self
    {
        if (null === $units) {
            unset($this->units);
            return $this;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $count
     * @return static
     */
    public function setCount(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $count): self
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

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
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
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnits())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNITS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_FREQUENCY])) {
            $v = $this->getFrequency();
            foreach($validationRules[self::FIELD_FREQUENCY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FREQUENCY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREQUENCY])) {
                        $errs[self::FIELD_FREQUENCY] = [];
                    }
                    $errs[self::FIELD_FREQUENCY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHEN])) {
            $v = $this->getWhen();
            foreach($validationRules[self::FIELD_WHEN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WHEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHEN])) {
                        $errs[self::FIELD_WHEN] = [];
                    }
                    $errs[self::FIELD_WHEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNITS])) {
            $v = $this->getUnits();
            foreach($validationRules[self::FIELD_UNITS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UNITS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNITS])) {
                        $errs[self::FIELD_UNITS] = [];
                    }
                    $errs[self::FIELD_UNITS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNT])) {
            $v = $this->getCount();
            foreach($validationRules[self::FIELD_COUNT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNT])) {
                        $errs[self::FIELD_COUNT] = [];
                    }
                    $errs[self::FIELD_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_END])) {
            $v = $this->getEnd();
            foreach($validationRules[self::FIELD_END] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_END, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_END])) {
                        $errs[self::FIELD_END] = [];
                    }
                    $errs[self::FIELD_END][$rule] = $err;
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

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule\FHIRScheduleRepeat $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $v = new FHIRIdPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FREQUENCY === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFrequency(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WHEN === $childName) {
                $v = new FHIREventTiming(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setWhen(FHIREventTiming::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DURATION === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDuration(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_UNITS === $childName) {
                $v = new FHIRUnitsOfTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setUnits(FHIRUnitsOfTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COUNT === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCount(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_END === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setEnd(FHIRDateTime::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FREQUENCY])) {
            $pt = $type->getFrequency();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FREQUENCY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFrequency(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_FREQUENCY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DURATION])) {
            $pt = $type->getDuration();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DURATION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDuration(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_DURATION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COUNT])) {
            $pt = $type->getCount();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COUNT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCount(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_COUNT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_END])) {
            $pt = $type->getEnd();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_END]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setEnd(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_END],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
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
        if (isset($this->frequency) && $this->frequency->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FREQUENCY, $this->frequency->getValue()?->getFormattedValue());
        }
        if (isset($this->duration) && $this->duration->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DURATION, $this->duration->getValue()?->getFormattedValue());
        }
        if (isset($this->count) && $this->count->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COUNT, $this->count->getValue()?->getFormattedValue());
        }
        if (isset($this->end) && $this->end->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_END, $this->end->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->frequency) && $this->frequency->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FREQUENCY);
            $this->frequency->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->when)) {
            $xw->startElement(self::FIELD_WHEN);
            $this->when->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->duration) && $this->duration->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DURATION);
            $this->duration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->units)) {
            $xw->startElement(self::FIELD_UNITS);
            $this->units->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->count) && $this->count->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COUNT);
            $this->count->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->end) && $this->end->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_END);
            $this->end->xmlSerialize($xw, $config);
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
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule\FHIRScheduleRepeat $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule\FHIRScheduleRepeat
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_FREQUENCY]) || isset($json[self::FIELD_FREQUENCY_EXT]) || array_key_exists(self::FIELD_FREQUENCY, $json) || array_key_exists(self::FIELD_FREQUENCY_EXT, $json)) {
            $value = $json[self::FIELD_FREQUENCY] ?? null;
            $ext = (isset($json[self::FIELD_FREQUENCY_EXT]) && is_array($json[self::FIELD_FREQUENCY_EXT])) ? $json[self::FIELD_FREQUENCY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setFrequency($value);
                } else if (is_array($value)) {
                    $type->setFrequency(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setFrequency(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFrequency(new FHIRInteger($ext));
            } else {
                $type->setFrequency(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_WHEN]) || isset($json[self::FIELD_WHEN_EXT]) || array_key_exists(self::FIELD_WHEN, $json) || array_key_exists(self::FIELD_WHEN_EXT, $json)) {
            $value = $json[self::FIELD_WHEN] ?? null;
            $ext = (isset($json[self::FIELD_WHEN_EXT]) && is_array($json[self::FIELD_WHEN_EXT])) ? $json[self::FIELD_WHEN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIREventTiming) {
                    $type->setWhen($value);
                } else if (is_array($value)) {
                    $type->setWhen(new FHIREventTiming(array_merge($ext, $value)));
                } else {
                    $type->setWhen(new FHIREventTiming([FHIREventTiming::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setWhen(new FHIREventTiming($ext));
            } else {
                $type->setWhen(new FHIREventTiming(null));
            }
        }
        if (isset($json[self::FIELD_DURATION]) || isset($json[self::FIELD_DURATION_EXT]) || array_key_exists(self::FIELD_DURATION, $json) || array_key_exists(self::FIELD_DURATION_EXT, $json)) {
            $value = $json[self::FIELD_DURATION] ?? null;
            $ext = (isset($json[self::FIELD_DURATION_EXT]) && is_array($json[self::FIELD_DURATION_EXT])) ? $json[self::FIELD_DURATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setDuration($value);
                } else if (is_array($value)) {
                    $type->setDuration(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setDuration(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDuration(new FHIRDecimal($ext));
            } else {
                $type->setDuration(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_UNITS]) || isset($json[self::FIELD_UNITS_EXT]) || array_key_exists(self::FIELD_UNITS, $json) || array_key_exists(self::FIELD_UNITS_EXT, $json)) {
            $value = $json[self::FIELD_UNITS] ?? null;
            $ext = (isset($json[self::FIELD_UNITS_EXT]) && is_array($json[self::FIELD_UNITS_EXT])) ? $json[self::FIELD_UNITS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnitsOfTime) {
                    $type->setUnits($value);
                } else if (is_array($value)) {
                    $type->setUnits(new FHIRUnitsOfTime(array_merge($ext, $value)));
                } else {
                    $type->setUnits(new FHIRUnitsOfTime([FHIRUnitsOfTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUnits(new FHIRUnitsOfTime($ext));
            } else {
                $type->setUnits(new FHIRUnitsOfTime(null));
            }
        }
        if (isset($json[self::FIELD_COUNT]) || isset($json[self::FIELD_COUNT_EXT]) || array_key_exists(self::FIELD_COUNT, $json) || array_key_exists(self::FIELD_COUNT_EXT, $json)) {
            $value = $json[self::FIELD_COUNT] ?? null;
            $ext = (isset($json[self::FIELD_COUNT_EXT]) && is_array($json[self::FIELD_COUNT_EXT])) ? $json[self::FIELD_COUNT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setCount($value);
                } else if (is_array($value)) {
                    $type->setCount(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setCount(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCount(new FHIRInteger($ext));
            } else {
                $type->setCount(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_END]) || isset($json[self::FIELD_END_EXT]) || array_key_exists(self::FIELD_END, $json) || array_key_exists(self::FIELD_END_EXT, $json)) {
            $value = $json[self::FIELD_END] ?? null;
            $ext = (isset($json[self::FIELD_END_EXT]) && is_array($json[self::FIELD_END_EXT])) ? $json[self::FIELD_END_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setEnd($value);
                } else if (is_array($value)) {
                    $type->setEnd(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setEnd(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setEnd(new FHIRDateTime($ext));
            } else {
                $type->setEnd(new FHIRDateTime(null));
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
        if (isset($this->frequency)) {
            if (null !== ($val = $this->frequency->getValue())) {
                $out->frequency = $val;
            }
            $ext = $this->frequency->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_frequency = $ext;
            }
        }
        if (isset($this->when)) {
            if (null !== ($val = $this->when->getValue())) {
                $out->when = $val;
            }
            $ext = $this->when->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_when = $ext;
            }
        }
        if (isset($this->duration)) {
            if (null !== ($val = $this->duration->getValue())) {
                $out->duration = $val;
            }
            $ext = $this->duration->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_duration = $ext;
            }
        }
        if (isset($this->units)) {
            if (null !== ($val = $this->units->getValue())) {
                $out->units = $val;
            }
            $ext = $this->units->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_units = $ext;
            }
        }
        if (isset($this->count)) {
            if (null !== ($val = $this->count->getValue())) {
                $out->count = $val;
            }
            $ext = $this->count->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_count = $ext;
            }
        }
        if (isset($this->end)) {
            if (null !== ($val = $this->end->getValue())) {
                $out->end = $val;
            }
            $ext = $this->end->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_end = $ext;
            }
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}