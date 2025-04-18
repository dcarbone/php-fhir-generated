<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRAppointmentRecurrenceTemplate extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE;

    /* class_default.php:56 */
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

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_RECURRENCE_TYPE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_LAST_OCCURRENCE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OCCURRENCE_COUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
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
    #[FHIRCodeableConcept]
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
    #[FHIRCodeableConcept]
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
    #[FHIRDate]
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
    #[FHIRPositiveInt]
    protected FHIRPositiveInt $occurrenceCount;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The list of specific dates that will have appointments generated.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate> 
     */
    #[FHIRDate]
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
    #[FHIRAppointmentWeeklyTemplate]
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
    #[FHIRAppointmentMonthlyTemplate]
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
    #[FHIRAppointmentYearlyTemplate]
    protected FHIRAppointmentYearlyTemplate $yearlyTemplate;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate> 
     */
    #[FHIRDate]
    protected array $excludingDate;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> 
     */
    #[FHIRPositiveInt]
    protected array $excludingRecurrenceId;

    /* constructor.php:61 */
    /**
     * FHIRAppointmentRecurrenceTemplate Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $timezone
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $recurrenceType
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $lastOccurrenceDate
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $occurrenceCount
     * @param null|iterable<string>|iterable<\DateTimeInterface>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate> $occurrenceDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate $weeklyTemplate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $monthlyTemplate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentYearlyTemplate $yearlyTemplate
     * @param null|iterable<string>|iterable<\DateTimeInterface>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate> $excludingDate
     * @param null|iterable<string>|iterable<float>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt> $excludingRecurrenceId
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $timezone = null,
                                null|FHIRCodeableConcept $recurrenceType = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastOccurrenceDate = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $occurrenceCount = null,
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

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
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
     * @return static
     */
    public function setLastOccurrenceDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastOccurrenceDate): self
    {
        if (null === $lastOccurrenceDate) {
            unset($this->lastOccurrenceDate);
            return $this;
        }
        if (!($lastOccurrenceDate instanceof FHIRDate)) {
            $lastOccurrenceDate = new FHIRDate(value: $lastOccurrenceDate);
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $occurrenceCount
     * @return static
     */
    public function setOccurrenceCount(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $occurrenceCount): self
    {
        if (null === $occurrenceCount) {
            unset($this->occurrenceCount);
            return $this;
        }
        if (!($occurrenceCount instanceof FHIRPositiveInt)) {
            $occurrenceCount = new FHIRPositiveInt(value: $occurrenceCount);
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate>
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
        if (!isset($this->occurrenceDate)) {
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
        if ([] === $occurrenceDate) {
            unset($this->occurrenceDate);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate>
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
        if (!isset($this->excludingDate)) {
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
        if ([] === $excludingDate) {
            unset($this->excludingDate);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt>
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
        if (!isset($this->excludingRecurrenceId)) {
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
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $excludingRecurrenceId
     * @return static
     */
    public function addExcludingRecurrenceId(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $excludingRecurrenceId): self
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
     * @param string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt ...$excludingRecurrenceId
     * @return static
     */
    public function setExcludingRecurrenceId(string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt ...$excludingRecurrenceId): self
    {
        if ([] === $excludingRecurrenceId) {
            unset($this->excludingRecurrenceId);
            return $this;
        }
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

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMEZONE === $cen) {
                $type->setTimezone(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECURRENCE_TYPE === $cen) {
                $type->setRecurrenceType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LAST_OCCURRENCE_DATE === $cen) {
                $type->setLastOccurrenceDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRENCE_COUNT === $cen) {
                $type->setOccurrenceCount(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRENCE_DATE === $cen) {
                $type->addOccurrenceDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WEEKLY_TEMPLATE === $cen) {
                $type->setWeeklyTemplate(FHIRAppointmentWeeklyTemplate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MONTHLY_TEMPLATE === $cen) {
                $type->setMonthlyTemplate(FHIRAppointmentMonthlyTemplate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_YEARLY_TEMPLATE === $cen) {
                $type->setYearlyTemplate(FHIRAppointmentYearlyTemplate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDING_DATE === $cen) {
                $type->addExcludingDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDING_RECURRENCE_ID === $cen) {
                $type->addExcludingRecurrenceId(FHIRPositiveInt::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LAST_OCCURRENCE_DATE])) {
            if (isset($type->lastOccurrenceDate)) {
                $type->lastOccurrenceDate->setValue((string)$attributes[self::FIELD_LAST_OCCURRENCE_DATE]);
            } else {
                $type->setLastOccurrenceDate((string)$attributes[self::FIELD_LAST_OCCURRENCE_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LAST_OCCURRENCE_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_OCCURRENCE_COUNT])) {
            if (isset($type->occurrenceCount)) {
                $type->occurrenceCount->setValue((string)$attributes[self::FIELD_OCCURRENCE_COUNT]);
            } else {
                $type->setOccurrenceCount((string)$attributes[self::FIELD_OCCURRENCE_COUNT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_OCCURRENCE_COUNT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->lastOccurrenceDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE_DATE]) {
            $xw->writeAttribute(self::FIELD_LAST_OCCURRENCE_DATE, $this->lastOccurrenceDate->_getValueAsString());
        }
        if (isset($this->occurrenceCount) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OCCURRENCE_COUNT]) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_COUNT, $this->occurrenceCount->_getValueAsString());
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
        if (isset($this->lastOccurrenceDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE_DATE]
                || $this->lastOccurrenceDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LAST_OCCURRENCE_DATE);
            $this->lastOccurrenceDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE_DATE]);
            $xw->endElement();
        }
        if (isset($this->occurrenceCount)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OCCURRENCE_COUNT]
                || $this->occurrenceCount->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OCCURRENCE_COUNT);
            $this->occurrenceCount->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OCCURRENCE_COUNT]);
            $xw->endElement();
        }
        if (isset($this->occurrenceDate) && [] !== $this->occurrenceDate) {
            foreach($this->occurrenceDate as $v) {
                $xw->startElement(self::FIELD_OCCURRENCE_DATE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
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
        if (isset($this->excludingDate) && [] !== $this->excludingDate) {
            foreach($this->excludingDate as $v) {
                $xw->startElement(self::FIELD_EXCLUDING_DATE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->excludingRecurrenceId) && [] !== $this->excludingRecurrenceId) {
            foreach($this->excludingRecurrenceId as $v) {
                $xw->startElement(self::FIELD_EXCLUDING_RECURRENCE_ID);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->timezone) || property_exists($decoded, self::FIELD_TIMEZONE)) {
            if (is_array($decoded->timezone)) {
                $type->setTimezone(FHIRCodeableConcept::jsonUnserialize(reset($decoded->timezone), $config));
            } else {
                $type->setTimezone(FHIRCodeableConcept::jsonUnserialize($decoded->timezone, $config));
            }
        }
        if (isset($decoded->recurrenceType) || property_exists($decoded, self::FIELD_RECURRENCE_TYPE)) {
            if (is_array($decoded->recurrenceType)) {
                $type->setRecurrenceType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->recurrenceType), $config));
            } else {
                $type->setRecurrenceType(FHIRCodeableConcept::jsonUnserialize($decoded->recurrenceType, $config));
            }
        }
        if (isset($decoded->lastOccurrenceDate)
            || isset($decoded->_lastOccurrenceDate)
            || property_exists($decoded, self::FIELD_LAST_OCCURRENCE_DATE)
            || property_exists($decoded, self::FIELD_LAST_OCCURRENCE_DATE_EXT)) {
            $v = $decoded->_lastOccurrenceDate ?? new \stdClass();
            $v->value = $decoded->lastOccurrenceDate ?? null;
            $type->setLastOccurrenceDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->occurrenceCount)
            || isset($decoded->_occurrenceCount)
            || property_exists($decoded, self::FIELD_OCCURRENCE_COUNT)
            || property_exists($decoded, self::FIELD_OCCURRENCE_COUNT_EXT)) {
            $v = $decoded->_occurrenceCount ?? new \stdClass();
            $v->value = $decoded->occurrenceCount ?? null;
            $type->setOccurrenceCount(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($decoded->occurrenceDate)
            || isset($decoded->_occurrenceDate)
            || property_exists($decoded, self::FIELD_OCCURRENCE_DATE)
            || property_exists($decoded, self::FIELD_OCCURRENCE_DATE_EXT)) {
            $vals = (array)($decoded->occurrenceDate ?? []);
            $exts = (array)($decoded->FIELD_OCCURRENCE_DATE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addOccurrenceDate(FHIRDate::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->weeklyTemplate) || property_exists($decoded, self::FIELD_WEEKLY_TEMPLATE)) {
            if (is_array($decoded->weeklyTemplate)) {
                $type->setWeeklyTemplate(FHIRAppointmentWeeklyTemplate::jsonUnserialize(reset($decoded->weeklyTemplate), $config));
            } else {
                $type->setWeeklyTemplate(FHIRAppointmentWeeklyTemplate::jsonUnserialize($decoded->weeklyTemplate, $config));
            }
        }
        if (isset($decoded->monthlyTemplate) || property_exists($decoded, self::FIELD_MONTHLY_TEMPLATE)) {
            if (is_array($decoded->monthlyTemplate)) {
                $type->setMonthlyTemplate(FHIRAppointmentMonthlyTemplate::jsonUnserialize(reset($decoded->monthlyTemplate), $config));
            } else {
                $type->setMonthlyTemplate(FHIRAppointmentMonthlyTemplate::jsonUnserialize($decoded->monthlyTemplate, $config));
            }
        }
        if (isset($decoded->yearlyTemplate) || property_exists($decoded, self::FIELD_YEARLY_TEMPLATE)) {
            if (is_array($decoded->yearlyTemplate)) {
                $type->setYearlyTemplate(FHIRAppointmentYearlyTemplate::jsonUnserialize(reset($decoded->yearlyTemplate), $config));
            } else {
                $type->setYearlyTemplate(FHIRAppointmentYearlyTemplate::jsonUnserialize($decoded->yearlyTemplate, $config));
            }
        }
        if (isset($decoded->excludingDate)
            || isset($decoded->_excludingDate)
            || property_exists($decoded, self::FIELD_EXCLUDING_DATE)
            || property_exists($decoded, self::FIELD_EXCLUDING_DATE_EXT)) {
            $vals = (array)($decoded->excludingDate ?? []);
            $exts = (array)($decoded->FIELD_EXCLUDING_DATE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addExcludingDate(FHIRDate::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->excludingRecurrenceId)
            || isset($decoded->_excludingRecurrenceId)
            || property_exists($decoded, self::FIELD_EXCLUDING_RECURRENCE_ID)
            || property_exists($decoded, self::FIELD_EXCLUDING_RECURRENCE_ID_EXT)) {
            $vals = (array)($decoded->excludingRecurrenceId ?? []);
            $exts = (array)($decoded->FIELD_EXCLUDING_RECURRENCE_ID_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addExcludingRecurrenceId(FHIRPositiveInt::jsonUnserialize($v, $config));
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
            if ($this->lastOccurrenceDate->_nonValueFieldDefined()) {
                $ext = $this->lastOccurrenceDate->jsonSerialize();
                unset($ext->value);
                $out->_lastOccurrenceDate = $ext;
            }
        }
        if (isset($this->occurrenceCount)) {
            if (null !== ($val = $this->occurrenceCount->getValue())) {
                $out->occurrenceCount = $val;
            }
            if ($this->occurrenceCount->_nonValueFieldDefined()) {
                $ext = $this->occurrenceCount->jsonSerialize();
                unset($ext->value);
                $out->_occurrenceCount = $ext;
            }
        }
        if (isset($this->occurrenceDate) && [] !== $this->occurrenceDate) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->occurrenceDate as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->occurrenceDate = $vals;
            }
            if ($hasExts) {
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
            $hasVals = false;
            $hasExts = false;
            foreach ($this->excludingDate as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->excludingDate = $vals;
            }
            if ($hasExts) {
                $out->_excludingDate = $exts;
            }
        }
        if (isset($this->excludingRecurrenceId) && [] !== $this->excludingRecurrenceId) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->excludingRecurrenceId as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->excludingRecurrenceId = $vals;
            }
            if ($hasExts) {
                $out->_excludingRecurrenceId = $exts;
            }
        }
        return $out;
    }
}