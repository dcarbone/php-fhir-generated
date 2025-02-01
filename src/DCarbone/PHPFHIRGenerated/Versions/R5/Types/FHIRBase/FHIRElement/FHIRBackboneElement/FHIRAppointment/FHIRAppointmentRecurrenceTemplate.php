<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
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

    /* class_default.php:47 */
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

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_RECURRENCE_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_LAST_OCCURRENCE_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OCCURRENCE_COUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
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

    /* constructor.php:63 */
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

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastOccurrenceDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastOccurrenceDate,
                                          ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $lastOccurrenceDate) {
            unset($this->lastOccurrenceDate);
            return $this;
        }
        if (!($lastOccurrenceDate instanceof FHIRDate)) {
            $lastOccurrenceDate = new FHIRDate(value: $lastOccurrenceDate);
        }
        $this->lastOccurrenceDate = $lastOccurrenceDate;
        if ($this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE_DATE] !== $valueXMLLocation) {
            $this->_setLastOccurrenceDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the lastOccurrenceDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLastOccurrenceDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE_DATE];
    }

    /**
     * Set the location the "value" field of the lastOccurrenceDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLastOccurrenceDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE_DATE] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOccurrenceCount(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $occurrenceCount,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $occurrenceCount) {
            unset($this->occurrenceCount);
            return $this;
        }
        if (!($occurrenceCount instanceof FHIRPositiveInt)) {
            $occurrenceCount = new FHIRPositiveInt(value: $occurrenceCount);
        }
        $this->occurrenceCount = $occurrenceCount;
        if ($this->_valueXMLLocations[self::FIELD_OCCURRENCE_COUNT] !== $valueXMLLocation) {
            $this->_setOccurrenceCountValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the occurrenceCount element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOccurrenceCountValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_OCCURRENCE_COUNT];
    }

    /**
     * Set the location the "value" field of the occurrenceCount element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOccurrenceCountValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_OCCURRENCE_COUNT] = $valueXMLLocation;
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

    /* class_default.php:188 */
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

    /* class_default.php:212 */
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
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
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LAST_OCCURRENCE_DATE])) {
            if (isset($type->lastOccurrenceDate)) {
                $type->lastOccurrenceDate->setValue((string)$attributes[self::FIELD_LAST_OCCURRENCE_DATE]);
                $type->_setLastOccurrenceDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLastOccurrenceDate((string)$attributes[self::FIELD_LAST_OCCURRENCE_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OCCURRENCE_COUNT])) {
            if (isset($type->occurrenceCount)) {
                $type->occurrenceCount->setValue((string)$attributes[self::FIELD_OCCURRENCE_COUNT]);
                $type->_setOccurrenceCountValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOccurrenceCount((string)$attributes[self::FIELD_OCCURRENCE_COUNT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->lastOccurrenceDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_OCCURRENCE_DATE]) {
            $xw->writeAttribute(self::FIELD_LAST_OCCURRENCE_DATE, $this->lastOccurrenceDate->_getFormattedValue());
        }
        if (isset($this->occurrenceCount) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OCCURRENCE_COUNT]) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_COUNT, $this->occurrenceCount->_getFormattedValue());
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
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_TIMEZONE]) || array_key_exists(self::FIELD_TIMEZONE, $json)) {
            $type->setTimezone(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_TIMEZONE], $config));
        }
        if (isset($json[self::FIELD_RECURRENCE_TYPE]) || array_key_exists(self::FIELD_RECURRENCE_TYPE, $json)) {
            $type->setRecurrenceType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_RECURRENCE_TYPE], $config));
        }
        if (isset($json[self::FIELD_LAST_OCCURRENCE_DATE])
            || isset($json[self::FIELD_LAST_OCCURRENCE_DATE_EXT])
            || array_key_exists(self::FIELD_LAST_OCCURRENCE_DATE, $json)
            || array_key_exists(self::FIELD_LAST_OCCURRENCE_DATE_EXT, $json)) {
            $value = $json[self::FIELD_LAST_OCCURRENCE_DATE] ?? null;
            $type->setLastOccurrenceDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_LAST_OCCURRENCE_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OCCURRENCE_COUNT])
            || isset($json[self::FIELD_OCCURRENCE_COUNT_EXT])
            || array_key_exists(self::FIELD_OCCURRENCE_COUNT, $json)
            || array_key_exists(self::FIELD_OCCURRENCE_COUNT_EXT, $json)) {
            $value = $json[self::FIELD_OCCURRENCE_COUNT] ?? null;
            $type->setOccurrenceCount(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_OCCURRENCE_COUNT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OCCURRENCE_DATE])
            || isset($json[self::FIELD_OCCURRENCE_DATE_EXT])
            || array_key_exists(self::FIELD_OCCURRENCE_DATE, $json)
            || array_key_exists(self::FIELD_OCCURRENCE_DATE_EXT, $json)) {
            $value = (array)($json[self::FIELD_OCCURRENCE_DATE] ?? []);
            $ext = (array)($json[self::FIELD_OCCURRENCE_DATE_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addOccurrenceDate(FHIRDate::jsonUnserialize(
                    [FHIRDate::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_WEEKLY_TEMPLATE]) || array_key_exists(self::FIELD_WEEKLY_TEMPLATE, $json)) {
            $type->setWeeklyTemplate(FHIRAppointmentWeeklyTemplate::jsonUnserialize($json[self::FIELD_WEEKLY_TEMPLATE], $config));
        }
        if (isset($json[self::FIELD_MONTHLY_TEMPLATE]) || array_key_exists(self::FIELD_MONTHLY_TEMPLATE, $json)) {
            $type->setMonthlyTemplate(FHIRAppointmentMonthlyTemplate::jsonUnserialize($json[self::FIELD_MONTHLY_TEMPLATE], $config));
        }
        if (isset($json[self::FIELD_YEARLY_TEMPLATE]) || array_key_exists(self::FIELD_YEARLY_TEMPLATE, $json)) {
            $type->setYearlyTemplate(FHIRAppointmentYearlyTemplate::jsonUnserialize($json[self::FIELD_YEARLY_TEMPLATE], $config));
        }
        if (isset($json[self::FIELD_EXCLUDING_DATE])
            || isset($json[self::FIELD_EXCLUDING_DATE_EXT])
            || array_key_exists(self::FIELD_EXCLUDING_DATE, $json)
            || array_key_exists(self::FIELD_EXCLUDING_DATE_EXT, $json)) {
            $value = (array)($json[self::FIELD_EXCLUDING_DATE] ?? []);
            $ext = (array)($json[self::FIELD_EXCLUDING_DATE_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addExcludingDate(FHIRDate::jsonUnserialize(
                    [FHIRDate::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_EXCLUDING_RECURRENCE_ID])
            || isset($json[self::FIELD_EXCLUDING_RECURRENCE_ID_EXT])
            || array_key_exists(self::FIELD_EXCLUDING_RECURRENCE_ID, $json)
            || array_key_exists(self::FIELD_EXCLUDING_RECURRENCE_ID_EXT, $json)) {
            $value = (array)($json[self::FIELD_EXCLUDING_RECURRENCE_ID] ?? []);
            $ext = (array)($json[self::FIELD_EXCLUDING_RECURRENCE_ID_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addExcludingRecurrenceId(FHIRPositiveInt::jsonUnserialize(
                    [FHIRPositiveInt::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
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