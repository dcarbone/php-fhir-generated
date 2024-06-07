<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R5\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 *
 * Class FHIRAppointmentRecurrenceTemplate
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment
 */
class FHIRAppointmentRecurrenceTemplate extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE;

    const FIELD_TIMEZONE = 'timezone';
    const FIELD_RECURRENCE_TYPE = 'recurrenceType';
    const FIELD_LAST_OCCURRENCE_DATE = 'lastOccurrenceDate';
    const FIELD_LAST_OCCURRENCE_DATE_EXT = '_lastOccurrenceDate';
    const FIELD_OCCURRENCE_COUNT = 'occurrenceCount';
    const FIELD_OCCURRENCE_COUNT_EXT = '_occurrenceCount';
    const FIELD_OCCURRENCE_DATE = 'occurrenceDate';
    const FIELD_OCCURRENCE_DATE_EXT = '_occurrenceDate';
    const FIELD_WEEKLY_TEMPLATE = 'weeklyTemplate';
    const FIELD_MONTHLY_TEMPLATE = 'monthlyTemplate';
    const FIELD_YEARLY_TEMPLATE = 'yearlyTemplate';
    const FIELD_EXCLUDING_DATE = 'excludingDate';
    const FIELD_EXCLUDING_DATE_EXT = '_excludingDate';
    const FIELD_EXCLUDING_RECURRENCE_ID = 'excludingRecurrenceId';
    const FIELD_EXCLUDING_RECURRENCE_ID_EXT = '_excludingRecurrenceId';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timezone of the recurring appointment occurrences.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $timezone = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How often the appointment series should recur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $recurrenceType = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Recurring appointments will not occur after this date.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $lastOccurrenceDate = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * How many appointments are planned in the recurrence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $occurrenceCount = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The list of specific dates that will have appointments generated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate[]
     */
    protected null|array $occurrenceDate = [];
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about weekly recurring appointments.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate
     */
    protected null|FHIRAppointmentWeeklyTemplate $weeklyTemplate = null;
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about monthly recurring appointments.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
     */
    protected null|FHIRAppointmentMonthlyTemplate $monthlyTemplate = null;
    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about yearly recurring appointments.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentYearlyTemplate
     */
    protected null|FHIRAppointmentYearlyTemplate $yearlyTemplate = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate[]
     */
    protected null|array $excludingDate = [];
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    protected null|array $excludingRecurrenceId = [];

    /**
     * Validation map for fields in type Appointment.RecurrenceTemplate
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRAppointmentRecurrenceTemplate Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TIMEZONE, $data)) {
            if ($data[self::FIELD_TIMEZONE] instanceof FHIRCodeableConcept) {
                $this->setTimezone($data[self::FIELD_TIMEZONE]);
            } else {
                $this->setTimezone(new FHIRCodeableConcept($data[self::FIELD_TIMEZONE]));
            }
        }
        if (array_key_exists(self::FIELD_RECURRENCE_TYPE, $data)) {
            if ($data[self::FIELD_RECURRENCE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setRecurrenceType($data[self::FIELD_RECURRENCE_TYPE]);
            } else {
                $this->setRecurrenceType(new FHIRCodeableConcept($data[self::FIELD_RECURRENCE_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_LAST_OCCURRENCE_DATE, $data) || array_key_exists(self::FIELD_LAST_OCCURRENCE_DATE_EXT, $data)) {
            $value = $data[self::FIELD_LAST_OCCURRENCE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_LAST_OCCURRENCE_DATE_EXT]) && is_array($data[self::FIELD_LAST_OCCURRENCE_DATE_EXT])) ? $data[self::FIELD_LAST_OCCURRENCE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setLastOccurrenceDate($value);
                } else if (is_array($value)) {
                    $this->setLastOccurrenceDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setLastOccurrenceDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastOccurrenceDate(new FHIRDate($ext));
            } else {
                $this->setLastOccurrenceDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_OCCURRENCE_COUNT, $data) || array_key_exists(self::FIELD_OCCURRENCE_COUNT_EXT, $data)) {
            $value = $data[self::FIELD_OCCURRENCE_COUNT] ?? null;
            $ext = (isset($data[self::FIELD_OCCURRENCE_COUNT_EXT]) && is_array($data[self::FIELD_OCCURRENCE_COUNT_EXT])) ? $data[self::FIELD_OCCURRENCE_COUNT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setOccurrenceCount($value);
                } else if (is_array($value)) {
                    $this->setOccurrenceCount(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setOccurrenceCount(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOccurrenceCount(new FHIRPositiveInt($ext));
            } else {
                $this->setOccurrenceCount(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_OCCURRENCE_DATE, $data) || array_key_exists(self::FIELD_OCCURRENCE_DATE_EXT, $data)) {
            $value = $data[self::FIELD_OCCURRENCE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_OCCURRENCE_DATE_EXT]) && is_array($data[self::FIELD_OCCURRENCE_DATE_EXT])) ? $data[self::FIELD_OCCURRENCE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->addOccurrenceDate($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDate) {
                            $this->addOccurrenceDate($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addOccurrenceDate(new FHIRDate(array_merge($v, $iext)));
                            } else {
                                $this->addOccurrenceDate(new FHIRDate([FHIRDate::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addOccurrenceDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->addOccurrenceDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addOccurrenceDate(new FHIRDate($iext));
                }
            } else {
                $this->addOccurrenceDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_WEEKLY_TEMPLATE, $data)) {
            if ($data[self::FIELD_WEEKLY_TEMPLATE] instanceof FHIRAppointmentWeeklyTemplate) {
                $this->setWeeklyTemplate($data[self::FIELD_WEEKLY_TEMPLATE]);
            } else {
                $this->setWeeklyTemplate(new FHIRAppointmentWeeklyTemplate($data[self::FIELD_WEEKLY_TEMPLATE]));
            }
        }
        if (array_key_exists(self::FIELD_MONTHLY_TEMPLATE, $data)) {
            if ($data[self::FIELD_MONTHLY_TEMPLATE] instanceof FHIRAppointmentMonthlyTemplate) {
                $this->setMonthlyTemplate($data[self::FIELD_MONTHLY_TEMPLATE]);
            } else {
                $this->setMonthlyTemplate(new FHIRAppointmentMonthlyTemplate($data[self::FIELD_MONTHLY_TEMPLATE]));
            }
        }
        if (array_key_exists(self::FIELD_YEARLY_TEMPLATE, $data)) {
            if ($data[self::FIELD_YEARLY_TEMPLATE] instanceof FHIRAppointmentYearlyTemplate) {
                $this->setYearlyTemplate($data[self::FIELD_YEARLY_TEMPLATE]);
            } else {
                $this->setYearlyTemplate(new FHIRAppointmentYearlyTemplate($data[self::FIELD_YEARLY_TEMPLATE]));
            }
        }
        if (array_key_exists(self::FIELD_EXCLUDING_DATE, $data) || array_key_exists(self::FIELD_EXCLUDING_DATE_EXT, $data)) {
            $value = $data[self::FIELD_EXCLUDING_DATE] ?? null;
            $ext = (isset($data[self::FIELD_EXCLUDING_DATE_EXT]) && is_array($data[self::FIELD_EXCLUDING_DATE_EXT])) ? $data[self::FIELD_EXCLUDING_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->addExcludingDate($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDate) {
                            $this->addExcludingDate($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addExcludingDate(new FHIRDate(array_merge($v, $iext)));
                            } else {
                                $this->addExcludingDate(new FHIRDate([FHIRDate::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addExcludingDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->addExcludingDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addExcludingDate(new FHIRDate($iext));
                }
            } else {
                $this->addExcludingDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_EXCLUDING_RECURRENCE_ID, $data) || array_key_exists(self::FIELD_EXCLUDING_RECURRENCE_ID_EXT, $data)) {
            $value = $data[self::FIELD_EXCLUDING_RECURRENCE_ID] ?? null;
            $ext = (isset($data[self::FIELD_EXCLUDING_RECURRENCE_ID_EXT]) && is_array($data[self::FIELD_EXCLUDING_RECURRENCE_ID_EXT])) ? $data[self::FIELD_EXCLUDING_RECURRENCE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->addExcludingRecurrenceId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPositiveInt) {
                            $this->addExcludingRecurrenceId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addExcludingRecurrenceId(new FHIRPositiveInt(array_merge($v, $iext)));
                            } else {
                                $this->addExcludingRecurrenceId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addExcludingRecurrenceId(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->addExcludingRecurrenceId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addExcludingRecurrenceId(new FHIRPositiveInt($iext));
                }
            } else {
                $this->addExcludingRecurrenceId(new FHIRPositiveInt(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getTimezone(): null|FHIRCodeableConcept
    {
        return $this->timezone;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timezone of the recurring appointment occurrences.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $timezone
     * @return static
     */
    public function setTimezone(null|FHIRCodeableConcept $timezone = null): self
    {
        if (null === $timezone) {
            $timezone = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->timezone, $timezone);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRecurrenceType(): null|FHIRCodeableConcept
    {
        return $this->recurrenceType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How often the appointment series should recur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $recurrenceType
     * @return static
     */
    public function setRecurrenceType(null|FHIRCodeableConcept $recurrenceType = null): self
    {
        if (null === $recurrenceType) {
            $recurrenceType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->recurrenceType, $recurrenceType);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate
     */
    public function getLastOccurrenceDate(): null|FHIRDate
    {
        return $this->lastOccurrenceDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Recurring appointments will not occur after this date.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate $lastOccurrenceDate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLastOccurrenceDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lastOccurrenceDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $lastOccurrenceDate && !($lastOccurrenceDate instanceof FHIRDate)) {
            $lastOccurrenceDate = new FHIRDate($lastOccurrenceDate);
        }
        $this->_trackValueSet($this->lastOccurrenceDate, $lastOccurrenceDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LAST_OCCURRENCE_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_LAST_OCCURRENCE_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LAST_OCCURRENCE_DATE][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getOccurrenceCount(): null|FHIRPositiveInt
    {
        return $this->occurrenceCount;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * How many appointments are planned in the recurrence.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt $occurrenceCount
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOccurrenceCount(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $occurrenceCount = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $occurrenceCount && !($occurrenceCount instanceof FHIRPositiveInt)) {
            $occurrenceCount = new FHIRPositiveInt($occurrenceCount);
        }
        $this->_trackValueSet($this->occurrenceCount, $occurrenceCount);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_COUNT])) {
            $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_COUNT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_COUNT][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate[]
     */
    public function getOccurrenceDate(): null|array
    {
        return $this->occurrenceDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The list of specific dates that will have appointments generated.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate $occurrenceDate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addOccurrenceDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $occurrenceDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $occurrenceDate && !($occurrenceDate instanceof FHIRDate)) {
            $occurrenceDate = new FHIRDate($occurrenceDate);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_DATE][] = $xmlLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate[] $occurrenceDate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOccurrenceDate(array $occurrenceDate = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_DATE]);
        if ([] !== $this->occurrenceDate) {
            $this->_trackValuesRemoved(count($this->occurrenceDate));
            $this->occurrenceDate = [];
        }
        if ([] === $occurrenceDate) {
            return $this;
        }
        foreach($occurrenceDate as $v) {
            if ($v instanceof FHIRDate) {
                $this->addOccurrenceDate($v, $xmlLocation);
            } else {
                $this->addOccurrenceDate(new FHIRDate($v), $xmlLocation);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate
     */
    public function getWeeklyTemplate(): null|FHIRAppointmentWeeklyTemplate
    {
        return $this->weeklyTemplate;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about weekly recurring appointments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate $weeklyTemplate
     * @return static
     */
    public function setWeeklyTemplate(null|FHIRAppointmentWeeklyTemplate $weeklyTemplate = null): self
    {
        if (null === $weeklyTemplate) {
            $weeklyTemplate = new FHIRAppointmentWeeklyTemplate();
        }
        $this->_trackValueSet($this->weeklyTemplate, $weeklyTemplate);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
     */
    public function getMonthlyTemplate(): null|FHIRAppointmentMonthlyTemplate
    {
        return $this->monthlyTemplate;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about monthly recurring appointments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $monthlyTemplate
     * @return static
     */
    public function setMonthlyTemplate(null|FHIRAppointmentMonthlyTemplate $monthlyTemplate = null): self
    {
        if (null === $monthlyTemplate) {
            $monthlyTemplate = new FHIRAppointmentMonthlyTemplate();
        }
        $this->_trackValueSet($this->monthlyTemplate, $monthlyTemplate);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentYearlyTemplate
     */
    public function getYearlyTemplate(): null|FHIRAppointmentYearlyTemplate
    {
        return $this->yearlyTemplate;
    }

    /**
     * A booking of a healthcare event among patient(s), practitioner(s), related
     * person(s) and/or device(s) for a specific date/time. This may result in one or
     * more Encounter(s).
     *
     * Information about yearly recurring appointments.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentYearlyTemplate $yearlyTemplate
     * @return static
     */
    public function setYearlyTemplate(null|FHIRAppointmentYearlyTemplate $yearlyTemplate = null): self
    {
        if (null === $yearlyTemplate) {
            $yearlyTemplate = new FHIRAppointmentYearlyTemplate();
        }
        $this->_trackValueSet($this->yearlyTemplate, $yearlyTemplate);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate[]
     */
    public function getExcludingDate(): null|array
    {
        return $this->excludingDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate $excludingDate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addExcludingDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $excludingDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $excludingDate && !($excludingDate instanceof FHIRDate)) {
            $excludingDate = new FHIRDate($excludingDate);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_EXCLUDING_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_EXCLUDING_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_EXCLUDING_DATE][] = $xmlLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDate[] $excludingDate
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExcludingDate(array $excludingDate = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_EXCLUDING_DATE]);
        if ([] !== $this->excludingDate) {
            $this->_trackValuesRemoved(count($this->excludingDate));
            $this->excludingDate = [];
        }
        if ([] === $excludingDate) {
            return $this;
        }
        foreach($excludingDate as $v) {
            if ($v instanceof FHIRDate) {
                $this->addExcludingDate($v, $xmlLocation);
            } else {
                $this->addExcludingDate(new FHIRDate($v), $xmlLocation);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt[]
     */
    public function getExcludingRecurrenceId(): null|array
    {
        return $this->excludingRecurrenceId;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt $excludingRecurrenceId
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addExcludingRecurrenceId(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $excludingRecurrenceId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $excludingRecurrenceId && !($excludingRecurrenceId instanceof FHIRPositiveInt)) {
            $excludingRecurrenceId = new FHIRPositiveInt($excludingRecurrenceId);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_EXCLUDING_RECURRENCE_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_EXCLUDING_RECURRENCE_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_EXCLUDING_RECURRENCE_ID][] = $xmlLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt[] $excludingRecurrenceId
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExcludingRecurrenceId(array $excludingRecurrenceId = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_EXCLUDING_RECURRENCE_ID]);
        if ([] !== $this->excludingRecurrenceId) {
            $this->_trackValuesRemoved(count($this->excludingRecurrenceId));
            $this->excludingRecurrenceId = [];
        }
        if ([] === $excludingRecurrenceId) {
            return $this;
        }
        foreach($excludingRecurrenceId as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addExcludingRecurrenceId($v, $xmlLocation);
            } else {
                $this->addExcludingRecurrenceId(new FHIRPositiveInt($v), $xmlLocation);
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getTimezone())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMEZONE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecurrenceType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECURRENCE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastOccurrenceDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_OCCURRENCE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurrenceCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRENCE_COUNT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOccurrenceDate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OCCURRENCE_DATE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getWeeklyTemplate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WEEKLY_TEMPLATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMonthlyTemplate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MONTHLY_TEMPLATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getYearlyTemplate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_YEARLY_TEMPLATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getExcludingDate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXCLUDING_DATE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getExcludingRecurrenceId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXCLUDING_RECURRENCE_ID, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMEZONE])) {
            $v = $this->getTimezone();
            foreach($validationRules[self::FIELD_TIMEZONE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_TIMEZONE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_RECURRENCE_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_LAST_OCCURRENCE_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_OCCURRENCE_COUNT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_OCCURRENCE_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_WEEKLY_TEMPLATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_MONTHLY_TEMPLATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_YEARLY_TEMPLATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_EXCLUDING_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_RECURRENCE_TEMPLATE, self::FIELD_EXCLUDING_RECURRENCE_ID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentRecurrenceTemplate
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRAppointmentRecurrenceTemplate)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_TIMEZONE === $childName) {
                $type->setTimezone(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RECURRENCE_TYPE === $childName) {
                $type->setRecurrenceType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LAST_OCCURRENCE_DATE === $childName) {
                $type->setLastOccurrenceDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_OCCURRENCE_COUNT === $childName) {
                $type->setOccurrenceCount(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_OCCURRENCE_DATE === $childName) {
                $type->addOccurrenceDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_WEEKLY_TEMPLATE === $childName) {
                $type->setWeeklyTemplate(FHIRAppointmentWeeklyTemplate::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MONTHLY_TEMPLATE === $childName) {
                $type->setMonthlyTemplate(FHIRAppointmentMonthlyTemplate::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_YEARLY_TEMPLATE === $childName) {
                $type->setYearlyTemplate(FHIRAppointmentYearlyTemplate::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXCLUDING_DATE === $childName) {
                $type->addExcludingDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXCLUDING_RECURRENCE_ID === $childName) {
                $type->addExcludingRecurrenceId(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_LAST_OCCURRENCE_DATE])) {
            $pt = $type->getLastOccurrenceDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LAST_OCCURRENCE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastOccurrenceDate((string)$attributes[self::FIELD_LAST_OCCURRENCE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OCCURRENCE_COUNT])) {
            $pt = $type->getOccurrenceCount();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_OCCURRENCE_COUNT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOccurrenceCount((string)$attributes[self::FIELD_OCCURRENCE_COUNT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OCCURRENCE_DATE])) {
            $type->addOccurrenceDate((string)$attributes[self::FIELD_OCCURRENCE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXCLUDING_DATE])) {
            $type->addExcludingDate((string)$attributes[self::FIELD_EXCLUDING_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXCLUDING_RECURRENCE_ID])) {
            $type->addExcludingRecurrenceId((string)$attributes[self::FIELD_EXCLUDING_RECURRENCE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'AppointmentRecurrenceTemplate', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LAST_OCCURRENCE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLastOccurrenceDate())) {
            $xw->writeAttribute(self::FIELD_LAST_OCCURRENCE_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_COUNT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOccurrenceCount())) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_COUNT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_DATE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getOccurrenceDate())) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_DATE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getOccurrenceDate()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_OCCURRENCE_DATE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXCLUDING_DATE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getExcludingDate())) {
            $xw->writeAttribute(self::FIELD_EXCLUDING_DATE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getExcludingDate()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_EXCLUDING_DATE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXCLUDING_RECURRENCE_ID] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getExcludingRecurrenceId())) {
            $xw->writeAttribute(self::FIELD_EXCLUDING_RECURRENCE_ID, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getExcludingRecurrenceId()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_EXCLUDING_RECURRENCE_ID, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getTimezone())) {
            $xw->startElement(self::FIELD_TIMEZONE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRecurrenceType())) {
            $xw->startElement(self::FIELD_RECURRENCE_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LAST_OCCURRENCE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLastOccurrenceDate())) {
            $xw->startElement(self::FIELD_LAST_OCCURRENCE_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_COUNT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOccurrenceCount())) {
            $xw->startElement(self::FIELD_OCCURRENCE_COUNT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_OCCURRENCE_DATE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getOccurrenceDate())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_OCCURRENCE_DATE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (null !== ($v = $this->getWeeklyTemplate())) {
            $xw->startElement(self::FIELD_WEEKLY_TEMPLATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMonthlyTemplate())) {
            $xw->startElement(self::FIELD_MONTHLY_TEMPLATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getYearlyTemplate())) {
            $xw->startElement(self::FIELD_YEARLY_TEMPLATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXCLUDING_DATE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getExcludingDate())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_EXCLUDING_DATE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXCLUDING_RECURRENCE_ID] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getExcludingRecurrenceId())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_EXCLUDING_RECURRENCE_ID);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getTimezone())) {
            $out->{self::FIELD_TIMEZONE} = $v;
        }
        if (null !== ($v = $this->getRecurrenceType())) {
            $out->{self::FIELD_RECURRENCE_TYPE} = $v;
        }
        if (null !== ($v = $this->getLastOccurrenceDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_OCCURRENCE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_OCCURRENCE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOccurrenceCount())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OCCURRENCE_COUNT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OCCURRENCE_COUNT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getOccurrenceDate())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDate::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_OCCURRENCE_DATE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OCCURRENCE_DATE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getWeeklyTemplate())) {
            $out->{self::FIELD_WEEKLY_TEMPLATE} = $v;
        }
        if (null !== ($v = $this->getMonthlyTemplate())) {
            $out->{self::FIELD_MONTHLY_TEMPLATE} = $v;
        }
        if (null !== ($v = $this->getYearlyTemplate())) {
            $out->{self::FIELD_YEARLY_TEMPLATE} = $v;
        }
        if ([] !== ($vs = $this->getExcludingDate())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDate::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_EXCLUDING_DATE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXCLUDING_DATE_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getExcludingRecurrenceId())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRPositiveInt::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_EXCLUDING_RECURRENCE_ID} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXCLUDING_RECURRENCE_ID_EXT} = $exts;
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