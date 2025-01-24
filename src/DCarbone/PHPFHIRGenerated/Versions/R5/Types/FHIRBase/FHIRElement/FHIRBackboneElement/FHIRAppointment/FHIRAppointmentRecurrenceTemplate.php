<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 24th, 2025 03:11+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
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
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 */
class FHIRAppointmentRecurrenceTemplate extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE;


    public const FIELD_TIMEZONE = 'timezone';
    public const FIELD_RECURRENCE_TYPE = 'recurrenceType';
    public const FIELD_LAST_OCCURRENCE_DATE = 'lastOccurrenceDate';
    public const FIELD_LAST_OCCURRENCE_DATE_EXT = '_lastOccurrenceDate';
    public const FIELD_OCCURRENCE_COUNT = 'occurrenceCount';
    public const FIELD_OCCURRENCE_COUNT_EXT = '_occurrenceCount';
    public const FIELD_OCCURRENCE_DATE = 'occurrenceDate';
    public const FIELD_OCCURRENCE_DATE_EXT = '_occurrenceDate';
    public const FIELD_WEEKLY_TEMPLATE = 'weeklyTemplate';
    public const FIELD_MONTHLY_TEMPLATE = 'monthlyTemplate';
    public const FIELD_YEARLY_TEMPLATE = 'yearlyTemplate';
    public const FIELD_EXCLUDING_DATE = 'excludingDate';
    public const FIELD_EXCLUDING_DATE_EXT = '_excludingDate';
    public const FIELD_EXCLUDING_RECURRENCE_ID = 'excludingRecurrenceId';
    public const FIELD_EXCLUDING_RECURRENCE_ID_EXT = '_excludingRecurrenceId';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timezone of the recurring appointment occurrences.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $timezone;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How often the appointment series should recur.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $recurrenceType;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Recurring appointments will not occur after this date.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    protected FHIRDate $lastOccurrenceDate;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * How many appointments are planned in the recurrence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $occurrenceCount;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The list of specific dates that will have appointments generated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate[] 
     */
    protected array $occurrenceDate;
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about weekly recurring appointments.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate 
     */
    protected FHIRAppointmentWeeklyTemplate $weeklyTemplate;
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about monthly recurring appointments.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate 
     */
    protected FHIRAppointmentMonthlyTemplate $monthlyTemplate;
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about yearly recurring appointments.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentYearlyTemplate 
     */
    protected FHIRAppointmentYearlyTemplate $yearlyTemplate;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate[] 
     */
    protected array $excludingDate;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt[] 
     */
    protected array $excludingRecurrenceId;

    /** Default validation map for fields in type Appointment.RecurrenceTemplate */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_RECURRENCE_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRAppointmentRecurrenceTemplate Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $timezone
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $recurrenceType
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $lastOccurrenceDate
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $occurrenceCount
     * @param null|string[]|\DateTimeInterface[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate[] $occurrenceDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate $weeklyTemplate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $monthlyTemplate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentYearlyTemplate $yearlyTemplate
     * @param null|string[]|\DateTimeInterface[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate[] $excludingDate
     * @param null|string[]|int[]|float[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt[] $excludingRecurrenceId
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $timezone = null,
                                null|FHIRCodeableConcept $recurrenceType = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastOccurrenceDate = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $occurrenceCount = null,
                                null|iterable $occurrenceDate = null,
                                null|FHIRAppointmentWeeklyTemplate $weeklyTemplate = null,
                                null|FHIRAppointmentMonthlyTemplate $monthlyTemplate = null,
                                null|FHIRAppointmentYearlyTemplate $yearlyTemplate = null,
                                null|iterable $excludingDate = null,
                                null|iterable $excludingRecurrenceId = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $timezone) {
            $this->setTimezone($timezone);
        }
        if (null !== $recurrenceType) {
            $this->setRecurrenceType($recurrenceType);
        }
        if (null !== $lastOccurrenceDate) {
            $this->setLastOccurrenceDate($lastOccurrenceDate);
        }
        if (null !== $occurrenceCount) {
            $this->setOccurrenceCount($occurrenceCount);
        }
        if (null !== $occurrenceDate) {
            $this->setOccurrenceDate(...$occurrenceDate);
        }
        if (null !== $weeklyTemplate) {
            $this->setWeeklyTemplate($weeklyTemplate);
        }
        if (null !== $monthlyTemplate) {
            $this->setMonthlyTemplate($monthlyTemplate);
        }
        if (null !== $yearlyTemplate) {
            $this->setYearlyTemplate($yearlyTemplate);
        }
        if (null !== $excludingDate) {
            $this->setExcludingDate(...$excludingDate);
        }
        if (null !== $excludingRecurrenceId) {
            $this->setExcludingRecurrenceId(...$excludingRecurrenceId);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timezone of the recurring appointment occurrences.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getTimezone(): null|FHIRCodeableConcept
    {
        return $this->timezone ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timezone of the recurring appointment occurrences.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $timezone
     * @return static
     */
    public function setTimezone(null|FHIRCodeableConcept $timezone): self
    {
        if (null === $timezone) {
            unset($this->timezone);
            return $this;
        }
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How often the appointment series should recur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRecurrenceType(): null|FHIRCodeableConcept
    {
        return $this->recurrenceType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How often the appointment series should recur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $recurrenceType
     * @return static
     */
    public function setRecurrenceType(null|FHIRCodeableConcept $recurrenceType): self
    {
        if (null === $recurrenceType) {
            unset($this->recurrenceType);
            return $this;
        }
        $this->recurrenceType = $recurrenceType;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Recurring appointments will not occur after this date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate
     */
    public function getLastOccurrenceDate(): null|FHIRDate
    {
        return $this->lastOccurrenceDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Recurring appointments will not occur after this date.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $lastOccurrenceDate
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastOccurrenceDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastOccurrenceDate,
                                          null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $lastOccurrenceDate) {
            unset($this->lastOccurrenceDate);
            return $this;
        }
        if (!($lastOccurrenceDate instanceof FHIRDate)) {
            $lastOccurrenceDate = new FHIRDate(value: $lastOccurrenceDate);
        }
        if (null !== $valueXMLLocation) {
            $lastOccurrenceDate->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $lastOccurrenceDate->_getValueXMLLocation()) {
            $lastOccurrenceDate->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->lastOccurrenceDate = $lastOccurrenceDate;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * How many appointments are planned in the recurrence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getOccurrenceCount(): null|FHIRPositiveInt
    {
        return $this->occurrenceCount ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * How many appointments are planned in the recurrence.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $occurrenceCount
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOccurrenceCount(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $occurrenceCount,
                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $occurrenceCount) {
            unset($this->occurrenceCount);
            return $this;
        }
        if (!($occurrenceCount instanceof FHIRPositiveInt)) {
            $occurrenceCount = new FHIRPositiveInt(value: $occurrenceCount);
        }
        if (null !== $valueXMLLocation) {
            $occurrenceCount->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $occurrenceCount->_getValueXMLLocation()) {
            $occurrenceCount->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->occurrenceCount = $occurrenceCount;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The list of specific dates that will have appointments generated.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate[]
     */
    public function getOccurrenceDate(): array
    {
        return $this->occurrenceDate ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate>
     */
    public function getOccurrenceDateIterator(): iterable
    {
        if (!isset($this->occurrenceDate) || [] === $this->occurrenceDate) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->occurrenceDate);
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The list of specific dates that will have appointments generated.
     *
     * @param string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $occurrenceDate
     * @return static
     */
    public function addOccurrenceDate(string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $occurrenceDate): self
    {
        if (!($occurrenceDate instanceof FHIRDate)) {
            $occurrenceDate = new FHIRDate(value: $occurrenceDate);
        }
        if (!isset($this->occurrenceDate)) {
            $this->occurrenceDate = [];
        }
        $this->occurrenceDate[] = $occurrenceDate;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The list of specific dates that will have appointments generated.
     *
     * @param string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate ...$occurrenceDate
     * @return static
     */
    public function setOccurrenceDate(string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate ...$occurrenceDate): self
    {
        $this->occurrenceDate = [];
        foreach($occurrenceDate as $v) {
            if ($v instanceof FHIRDate) {
                $this->occurrenceDate[] = $v;
            } else {
                $this->occurrenceDate[] = new FHIRDate(value: $v);
            }
        }
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about weekly recurring appointments.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate
     */
    public function getWeeklyTemplate(): null|FHIRAppointmentWeeklyTemplate
    {
        return $this->weeklyTemplate ?? null;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about weekly recurring appointments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate $weeklyTemplate
     * @return static
     */
    public function setWeeklyTemplate(null|FHIRAppointmentWeeklyTemplate $weeklyTemplate): self
    {
        if (null === $weeklyTemplate) {
            unset($this->weeklyTemplate);
            return $this;
        }
        $this->weeklyTemplate = $weeklyTemplate;
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about monthly recurring appointments.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
     */
    public function getMonthlyTemplate(): null|FHIRAppointmentMonthlyTemplate
    {
        return $this->monthlyTemplate ?? null;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about monthly recurring appointments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $monthlyTemplate
     * @return static
     */
    public function setMonthlyTemplate(null|FHIRAppointmentMonthlyTemplate $monthlyTemplate): self
    {
        if (null === $monthlyTemplate) {
            unset($this->monthlyTemplate);
            return $this;
        }
        $this->monthlyTemplate = $monthlyTemplate;
        return $this;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about yearly recurring appointments.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentYearlyTemplate
     */
    public function getYearlyTemplate(): null|FHIRAppointmentYearlyTemplate
    {
        return $this->yearlyTemplate ?? null;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about yearly recurring appointments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentYearlyTemplate $yearlyTemplate
     * @return static
     */
    public function setYearlyTemplate(null|FHIRAppointmentYearlyTemplate $yearlyTemplate): self
    {
        if (null === $yearlyTemplate) {
            unset($this->yearlyTemplate);
            return $this;
        }
        $this->yearlyTemplate = $yearlyTemplate;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate[]
     */
    public function getExcludingDate(): array
    {
        return $this->excludingDate ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate>
     */
    public function getExcludingDateIterator(): iterable
    {
        if (!isset($this->excludingDate) || [] === $this->excludingDate) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->excludingDate);
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $excludingDate
     * @return static
     */
    public function addExcludingDate(string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $excludingDate): self
    {
        if (!($excludingDate instanceof FHIRDate)) {
            $excludingDate = new FHIRDate(value: $excludingDate);
        }
        if (!isset($this->excludingDate)) {
            $this->excludingDate = [];
        }
        $this->excludingDate[] = $excludingDate;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate ...$excludingDate
     * @return static
     */
    public function setExcludingDate(string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate ...$excludingDate): self
    {
        $this->excludingDate = [];
        foreach($excludingDate as $v) {
            if ($v instanceof FHIRDate) {
                $this->excludingDate[] = $v;
            } else {
                $this->excludingDate[] = new FHIRDate(value: $v);
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    public function getExcludingRecurrenceId(): array
    {
        return $this->excludingRecurrenceId ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
     */
    public function getExcludingRecurrenceIdIterator(): iterable
    {
        if (!isset($this->excludingRecurrenceId) || [] === $this->excludingRecurrenceId) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->excludingRecurrenceId);
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $excludingRecurrenceId
     * @return static
     */
    public function addExcludingRecurrenceId(string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $excludingRecurrenceId): self
    {
        if (!($excludingRecurrenceId instanceof FHIRPositiveInt)) {
            $excludingRecurrenceId = new FHIRPositiveInt(value: $excludingRecurrenceId);
        }
        if (!isset($this->excludingRecurrenceId)) {
            $this->excludingRecurrenceId = [];
        }
        $this->excludingRecurrenceId[] = $excludingRecurrenceId;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt ...$excludingRecurrenceId
     * @return static
     */
    public function setExcludingRecurrenceId(string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt ...$excludingRecurrenceId): self
    {
        $this->excludingRecurrenceId = [];
        foreach($excludingRecurrenceId as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->excludingRecurrenceId[] = $v;
            } else {
                $this->excludingRecurrenceId[] = new FHIRPositiveInt(value: $v);
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
        if (null !== ($v = $this->getRecurrenceType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECURRENCE_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TIMEZONE])) {
            $v = $this->getTimezone();
            foreach($validationRules[self::FIELD_TIMEZONE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIMEZONE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMEZONE])) {
                        $errs[self::FIELD_TIMEZONE] = [];
                    }
                    $errs[self::FIELD_TIMEZONE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECURRENCE_TYPE])) {
            $v = $this->getRecurrenceType();
            foreach($validationRules[self::FIELD_RECURRENCE_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RECURRENCE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECURRENCE_TYPE])) {
                        $errs[self::FIELD_RECURRENCE_TYPE] = [];
                    }
                    $errs[self::FIELD_RECURRENCE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_OCCURRENCE_DATE])) {
            $v = $this->getLastOccurrenceDate();
            foreach($validationRules[self::FIELD_LAST_OCCURRENCE_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LAST_OCCURRENCE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_OCCURRENCE_DATE])) {
                        $errs[self::FIELD_LAST_OCCURRENCE_DATE] = [];
                    }
                    $errs[self::FIELD_LAST_OCCURRENCE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_COUNT])) {
            $v = $this->getOccurrenceCount();
            foreach($validationRules[self::FIELD_OCCURRENCE_COUNT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OCCURRENCE_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_COUNT])) {
                        $errs[self::FIELD_OCCURRENCE_COUNT] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRENCE_DATE])) {
            $v = $this->getOccurrenceDate();
            foreach($validationRules[self::FIELD_OCCURRENCE_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OCCURRENCE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRENCE_DATE])) {
                        $errs[self::FIELD_OCCURRENCE_DATE] = [];
                    }
                    $errs[self::FIELD_OCCURRENCE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WEEKLY_TEMPLATE])) {
            $v = $this->getWeeklyTemplate();
            foreach($validationRules[self::FIELD_WEEKLY_TEMPLATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WEEKLY_TEMPLATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WEEKLY_TEMPLATE])) {
                        $errs[self::FIELD_WEEKLY_TEMPLATE] = [];
                    }
                    $errs[self::FIELD_WEEKLY_TEMPLATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONTHLY_TEMPLATE])) {
            $v = $this->getMonthlyTemplate();
            foreach($validationRules[self::FIELD_MONTHLY_TEMPLATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MONTHLY_TEMPLATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONTHLY_TEMPLATE])) {
                        $errs[self::FIELD_MONTHLY_TEMPLATE] = [];
                    }
                    $errs[self::FIELD_MONTHLY_TEMPLATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_YEARLY_TEMPLATE])) {
            $v = $this->getYearlyTemplate();
            foreach($validationRules[self::FIELD_YEARLY_TEMPLATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_YEARLY_TEMPLATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_YEARLY_TEMPLATE])) {
                        $errs[self::FIELD_YEARLY_TEMPLATE] = [];
                    }
                    $errs[self::FIELD_YEARLY_TEMPLATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDING_DATE])) {
            $v = $this->getExcludingDate();
            foreach($validationRules[self::FIELD_EXCLUDING_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXCLUDING_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDING_DATE])) {
                        $errs[self::FIELD_EXCLUDING_DATE] = [];
                    }
                    $errs[self::FIELD_EXCLUDING_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDING_RECURRENCE_ID])) {
            $v = $this->getExcludingRecurrenceId();
            foreach($validationRules[self::FIELD_EXCLUDING_RECURRENCE_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXCLUDING_RECURRENCE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDING_RECURRENCE_ID])) {
                        $errs[self::FIELD_EXCLUDING_RECURRENCE_ID] = [];
                    }
                    $errs[self::FIELD_EXCLUDING_RECURRENCE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAppointmentRecurrenceTemplate)) {
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
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TIMEZONE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setTimezone(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RECURRENCE_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setRecurrenceType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LAST_OCCURRENCE_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLastOccurrenceDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OCCURRENCE_COUNT === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setOccurrenceCount(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OCCURRENCE_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addOccurrenceDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WEEKLY_TEMPLATE === $childName) {
                $v = new FHIRAppointmentWeeklyTemplate();
                $type->setWeeklyTemplate(FHIRAppointmentWeeklyTemplate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MONTHLY_TEMPLATE === $childName) {
                $v = new FHIRAppointmentMonthlyTemplate();
                $type->setMonthlyTemplate(FHIRAppointmentMonthlyTemplate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_YEARLY_TEMPLATE === $childName) {
                $v = new FHIRAppointmentYearlyTemplate();
                $type->setYearlyTemplate(FHIRAppointmentYearlyTemplate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXCLUDING_DATE === $childName) {
                $v = new FHIRDate(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addExcludingDate(FHIRDate::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXCLUDING_RECURRENCE_ID === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addExcludingRecurrenceId(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LAST_OCCURRENCE_DATE])) {
            $pt = $type->getLastOccurrenceDate();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LAST_OCCURRENCE_DATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastOccurrenceDate(new FHIRDate(
                    value: (string)$attributes[self::FIELD_LAST_OCCURRENCE_DATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_OCCURRENCE_COUNT])) {
            $pt = $type->getOccurrenceCount();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_OCCURRENCE_COUNT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setOccurrenceCount(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_OCCURRENCE_COUNT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_OCCURRENCE_DATE])) {
            $v = new FHIRDate(value: (string)$attributes[self::FIELD_OCCURRENCE_DATE],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addOccurrenceDate($v);
        }
        if (isset($attributes[self::FIELD_EXCLUDING_DATE])) {
            $v = new FHIRDate(value: (string)$attributes[self::FIELD_EXCLUDING_DATE],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addExcludingDate($v);
        }
        if (isset($attributes[self::FIELD_EXCLUDING_RECURRENCE_ID])) {
            $v = new FHIRPositiveInt(value: (string)$attributes[self::FIELD_EXCLUDING_RECURRENCE_ID],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addExcludingRecurrenceId($v);
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
            $xw->openRootNode('AppointmentRecurrenceTemplate', $this->_getSourceXMLNS());
        }
        if (isset($this->lastOccurrenceDate) && $this->lastOccurrenceDate->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LAST_OCCURRENCE_DATE, $this->lastOccurrenceDate->getValue()?->_getFormattedValue());
        }
        if (isset($this->occurrenceCount) && $this->occurrenceCount->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_COUNT, $this->occurrenceCount->getValue()?->_getFormattedValue());
        }
        if (isset($this->occurrenceDate)) {
           foreach($this->occurrenceDate as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_OCCURRENCE_DATE, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->excludingDate)) {
           foreach($this->excludingDate as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_EXCLUDING_DATE, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->excludingRecurrenceId)) {
           foreach($this->excludingRecurrenceId as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_EXCLUDING_RECURRENCE_ID, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->timezone)) {
            $xw->startElement(self::FIELD_TIMEZONE);
            $this->timezone->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->recurrenceType)) {
            $xw->startElement(self::FIELD_RECURRENCE_TYPE);
            $this->recurrenceType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->lastOccurrenceDate) && $this->lastOccurrenceDate->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LAST_OCCURRENCE_DATE);
            $this->lastOccurrenceDate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->occurrenceCount) && $this->occurrenceCount->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_OCCURRENCE_COUNT);
            $this->occurrenceCount->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->occurrenceDate)) {
            foreach($this->occurrenceDate as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_OCCURRENCE_DATE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->weeklyTemplate)) {
            $xw->startElement(self::FIELD_WEEKLY_TEMPLATE);
            $this->weeklyTemplate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->monthlyTemplate)) {
            $xw->startElement(self::FIELD_MONTHLY_TEMPLATE);
            $this->monthlyTemplate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->yearlyTemplate)) {
            $xw->startElement(self::FIELD_YEARLY_TEMPLATE);
            $this->yearlyTemplate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->excludingDate)) {
            foreach($this->excludingDate as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_EXCLUDING_DATE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->excludingRecurrenceId)) {
            foreach($this->excludingRecurrenceId as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_EXCLUDING_RECURRENCE_ID);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAppointmentRecurrenceTemplate)) {
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
        if (isset($json[self::FIELD_TIMEZONE]) || array_key_exists(self::FIELD_TIMEZONE, $json)) {
            $type->setTimezone(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_TIMEZONE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RECURRENCE_TYPE]) || array_key_exists(self::FIELD_RECURRENCE_TYPE, $json)) {
            $type->setRecurrenceType(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_RECURRENCE_TYPE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_LAST_OCCURRENCE_DATE]) || isset($json[self::FIELD_LAST_OCCURRENCE_DATE_EXT]) || array_key_exists(self::FIELD_LAST_OCCURRENCE_DATE, $json) || array_key_exists(self::FIELD_LAST_OCCURRENCE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_LAST_OCCURRENCE_DATE] ?? null;
            $ext = (array)($json[self::FIELD_LAST_OCCURRENCE_DATE_EXT] ?? []);
            $type->setLastOccurrenceDate(FHIRDate::jsonUnserialize(
                json: [FHIRDate::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_OCCURRENCE_COUNT]) || isset($json[self::FIELD_OCCURRENCE_COUNT_EXT]) || array_key_exists(self::FIELD_OCCURRENCE_COUNT, $json) || array_key_exists(self::FIELD_OCCURRENCE_COUNT_EXT, $json)) {
            $value = $json[self::FIELD_OCCURRENCE_COUNT] ?? null;
            $ext = (array)($json[self::FIELD_OCCURRENCE_COUNT_EXT] ?? []);
            $type->setOccurrenceCount(FHIRPositiveInt::jsonUnserialize(
                json: [FHIRPositiveInt::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_OCCURRENCE_DATE]) || isset($json[self::FIELD_OCCURRENCE_DATE_EXT]) || array_key_exists(self::FIELD_OCCURRENCE_DATE, $json) || array_key_exists(self::FIELD_OCCURRENCE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_OCCURRENCE_DATE] ?? null;
            $ext = (array)($json[self::FIELD_OCCURRENCE_DATE_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addOccurrenceDate(FHIRDate::jsonUnserialize(
                    json: [FHIRDate::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_WEEKLY_TEMPLATE]) || array_key_exists(self::FIELD_WEEKLY_TEMPLATE, $json)) {
            $type->setWeeklyTemplate(FHIRAppointmentWeeklyTemplate::jsonUnserialize(
                json: $json[self::FIELD_WEEKLY_TEMPLATE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_MONTHLY_TEMPLATE]) || array_key_exists(self::FIELD_MONTHLY_TEMPLATE, $json)) {
            $type->setMonthlyTemplate(FHIRAppointmentMonthlyTemplate::jsonUnserialize(
                json: $json[self::FIELD_MONTHLY_TEMPLATE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_YEARLY_TEMPLATE]) || array_key_exists(self::FIELD_YEARLY_TEMPLATE, $json)) {
            $type->setYearlyTemplate(FHIRAppointmentYearlyTemplate::jsonUnserialize(
                json: $json[self::FIELD_YEARLY_TEMPLATE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EXCLUDING_DATE]) || isset($json[self::FIELD_EXCLUDING_DATE_EXT]) || array_key_exists(self::FIELD_EXCLUDING_DATE, $json) || array_key_exists(self::FIELD_EXCLUDING_DATE_EXT, $json)) {
            $value = $json[self::FIELD_EXCLUDING_DATE] ?? null;
            $ext = (array)($json[self::FIELD_EXCLUDING_DATE_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addExcludingDate(FHIRDate::jsonUnserialize(
                    json: [FHIRDate::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_EXCLUDING_RECURRENCE_ID]) || isset($json[self::FIELD_EXCLUDING_RECURRENCE_ID_EXT]) || array_key_exists(self::FIELD_EXCLUDING_RECURRENCE_ID, $json) || array_key_exists(self::FIELD_EXCLUDING_RECURRENCE_ID_EXT, $json)) {
            $value = $json[self::FIELD_EXCLUDING_RECURRENCE_ID] ?? null;
            $ext = (array)($json[self::FIELD_EXCLUDING_RECURRENCE_ID_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addExcludingRecurrenceId(FHIRPositiveInt::jsonUnserialize(
                    json: [FHIRPositiveInt::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
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
        if (isset($this->timezone)) {
            $out->timezone = $this->timezone;
        }
        if (isset($this->recurrenceType)) {
            $out->recurrenceType = $this->recurrenceType;
        }
        if (isset($this->lastOccurrenceDate)) {
            if (null !== ($val = $this->lastOccurrenceDate->getValue())) {
                $out->lastOccurrenceDate = $val;
            }
            $ext = $this->lastOccurrenceDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_lastOccurrenceDate = $ext;
            }
        }
        if (isset($this->occurrenceCount)) {
            if (null !== ($val = $this->occurrenceCount->getValue())) {
                $out->occurrenceCount = $val;
            }
            $ext = $this->occurrenceCount->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_occurrenceCount = $ext;
            }
        }
        if (isset($this->occurrenceDate) && [] !== $this->occurrenceDate) {
            $vals = [];
            $exts = [];
            foreach ($this->occurrenceDate as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->occurrenceDate = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_occurrenceDate = $exts;
            }
        }
        if (isset($this->weeklyTemplate)) {
            $out->weeklyTemplate = $this->weeklyTemplate;
        }
        if (isset($this->monthlyTemplate)) {
            $out->monthlyTemplate = $this->monthlyTemplate;
        }
        if (isset($this->yearlyTemplate)) {
            $out->yearlyTemplate = $this->yearlyTemplate;
        }
        if (isset($this->excludingDate) && [] !== $this->excludingDate) {
            $vals = [];
            $exts = [];
            foreach ($this->excludingDate as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->excludingDate = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_excludingDate = $exts;
            }
        }
        if (isset($this->excludingRecurrenceId) && [] !== $this->excludingRecurrenceId) {
            $vals = [];
            $exts = [];
            foreach ($this->excludingRecurrenceId as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->excludingRecurrenceId = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_excludingRecurrenceId = $exts;
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