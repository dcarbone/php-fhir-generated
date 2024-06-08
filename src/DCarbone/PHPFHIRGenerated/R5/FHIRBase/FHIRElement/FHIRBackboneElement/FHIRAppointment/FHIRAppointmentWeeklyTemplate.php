<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 8th, 2024 03:16+0000
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
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive;
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
 * Class FHIRAppointmentWeeklyTemplate
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment
 */
class FHIRAppointmentWeeklyTemplate extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_WEEKLY_TEMPLATE;

    const FIELD_MONDAY = 'monday';
    const FIELD_MONDAY_EXT = '_monday';
    const FIELD_TUESDAY = 'tuesday';
    const FIELD_TUESDAY_EXT = '_tuesday';
    const FIELD_WEDNESDAY = 'wednesday';
    const FIELD_WEDNESDAY_EXT = '_wednesday';
    const FIELD_THURSDAY = 'thursday';
    const FIELD_THURSDAY_EXT = '_thursday';
    const FIELD_FRIDAY = 'friday';
    const FIELD_FRIDAY_EXT = '_friday';
    const FIELD_SATURDAY = 'saturday';
    const FIELD_SATURDAY_EXT = '_saturday';
    const FIELD_SUNDAY = 'sunday';
    const FIELD_SUNDAY_EXT = '_sunday';
    const FIELD_WEEK_INTERVAL = 'weekInterval';
    const FIELD_WEEK_INTERVAL_EXT = '_weekInterval';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Mondays.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $monday = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Tuesdays.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $tuesday = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Wednesdays.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $wednesday = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Thursdays.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $thursday = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Fridays.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $friday = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Saturdays.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $saturday = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Sundays.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $sunday = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The interval defines if the recurrence is every nth week. The default is every
     * week, so it is expected that this value will be 2 or more. e.g. For recurring
     * every second week this interval would be 2, or every third week the interval
     * would be 3.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $weekInterval = null;

    /**
     * Validation map for fields in type Appointment.WeeklyTemplate
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRAppointmentWeeklyTemplate Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_MONDAY, $data) || array_key_exists(self::FIELD_MONDAY_EXT, $data)) {
            $value = $data[self::FIELD_MONDAY] ?? null;
            $ext = (isset($data[self::FIELD_MONDAY_EXT]) && is_array($data[self::FIELD_MONDAY_EXT])) ? $data[self::FIELD_MONDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setMonday($value);
                } else if (is_array($value)) {
                    $this->setMonday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setMonday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMonday(new FHIRBoolean($ext));
            } else {
                $this->setMonday(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_TUESDAY, $data) || array_key_exists(self::FIELD_TUESDAY_EXT, $data)) {
            $value = $data[self::FIELD_TUESDAY] ?? null;
            $ext = (isset($data[self::FIELD_TUESDAY_EXT]) && is_array($data[self::FIELD_TUESDAY_EXT])) ? $data[self::FIELD_TUESDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setTuesday($value);
                } else if (is_array($value)) {
                    $this->setTuesday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setTuesday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTuesday(new FHIRBoolean($ext));
            } else {
                $this->setTuesday(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_WEDNESDAY, $data) || array_key_exists(self::FIELD_WEDNESDAY_EXT, $data)) {
            $value = $data[self::FIELD_WEDNESDAY] ?? null;
            $ext = (isset($data[self::FIELD_WEDNESDAY_EXT]) && is_array($data[self::FIELD_WEDNESDAY_EXT])) ? $data[self::FIELD_WEDNESDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setWednesday($value);
                } else if (is_array($value)) {
                    $this->setWednesday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setWednesday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWednesday(new FHIRBoolean($ext));
            } else {
                $this->setWednesday(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_THURSDAY, $data) || array_key_exists(self::FIELD_THURSDAY_EXT, $data)) {
            $value = $data[self::FIELD_THURSDAY] ?? null;
            $ext = (isset($data[self::FIELD_THURSDAY_EXT]) && is_array($data[self::FIELD_THURSDAY_EXT])) ? $data[self::FIELD_THURSDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setThursday($value);
                } else if (is_array($value)) {
                    $this->setThursday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setThursday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setThursday(new FHIRBoolean($ext));
            } else {
                $this->setThursday(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_FRIDAY, $data) || array_key_exists(self::FIELD_FRIDAY_EXT, $data)) {
            $value = $data[self::FIELD_FRIDAY] ?? null;
            $ext = (isset($data[self::FIELD_FRIDAY_EXT]) && is_array($data[self::FIELD_FRIDAY_EXT])) ? $data[self::FIELD_FRIDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setFriday($value);
                } else if (is_array($value)) {
                    $this->setFriday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setFriday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFriday(new FHIRBoolean($ext));
            } else {
                $this->setFriday(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_SATURDAY, $data) || array_key_exists(self::FIELD_SATURDAY_EXT, $data)) {
            $value = $data[self::FIELD_SATURDAY] ?? null;
            $ext = (isset($data[self::FIELD_SATURDAY_EXT]) && is_array($data[self::FIELD_SATURDAY_EXT])) ? $data[self::FIELD_SATURDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setSaturday($value);
                } else if (is_array($value)) {
                    $this->setSaturday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setSaturday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSaturday(new FHIRBoolean($ext));
            } else {
                $this->setSaturday(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_SUNDAY, $data) || array_key_exists(self::FIELD_SUNDAY_EXT, $data)) {
            $value = $data[self::FIELD_SUNDAY] ?? null;
            $ext = (isset($data[self::FIELD_SUNDAY_EXT]) && is_array($data[self::FIELD_SUNDAY_EXT])) ? $data[self::FIELD_SUNDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setSunday($value);
                } else if (is_array($value)) {
                    $this->setSunday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setSunday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSunday(new FHIRBoolean($ext));
            } else {
                $this->setSunday(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_WEEK_INTERVAL, $data) || array_key_exists(self::FIELD_WEEK_INTERVAL_EXT, $data)) {
            $value = $data[self::FIELD_WEEK_INTERVAL] ?? null;
            $ext = (isset($data[self::FIELD_WEEK_INTERVAL_EXT]) && is_array($data[self::FIELD_WEEK_INTERVAL_EXT])) ? $data[self::FIELD_WEEK_INTERVAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setWeekInterval($value);
                } else if (is_array($value)) {
                    $this->setWeekInterval(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setWeekInterval(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWeekInterval(new FHIRPositiveInt($ext));
            } else {
                $this->setWeekInterval(new FHIRPositiveInt(null));
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Mondays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getMonday(): null|FHIRBoolean
    {
        return $this->monday;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Mondays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $monday
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMonday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $monday = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $monday && !($monday instanceof FHIRBoolean)) {
            $monday = new FHIRBoolean($monday);
        }
        $this->_trackValueSet($this->monday, $monday);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MONDAY])) {
            $this->_primitiveXmlLocations[self::FIELD_MONDAY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MONDAY][0] = $xmlLocation;
        $this->monday = $monday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Tuesdays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getTuesday(): null|FHIRBoolean
    {
        return $this->tuesday;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Tuesdays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $tuesday
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTuesday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $tuesday = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $tuesday && !($tuesday instanceof FHIRBoolean)) {
            $tuesday = new FHIRBoolean($tuesday);
        }
        $this->_trackValueSet($this->tuesday, $tuesday);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TUESDAY])) {
            $this->_primitiveXmlLocations[self::FIELD_TUESDAY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TUESDAY][0] = $xmlLocation;
        $this->tuesday = $tuesday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Wednesdays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getWednesday(): null|FHIRBoolean
    {
        return $this->wednesday;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Wednesdays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $wednesday
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setWednesday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $wednesday = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $wednesday && !($wednesday instanceof FHIRBoolean)) {
            $wednesday = new FHIRBoolean($wednesday);
        }
        $this->_trackValueSet($this->wednesday, $wednesday);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_WEDNESDAY])) {
            $this->_primitiveXmlLocations[self::FIELD_WEDNESDAY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_WEDNESDAY][0] = $xmlLocation;
        $this->wednesday = $wednesday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Thursdays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getThursday(): null|FHIRBoolean
    {
        return $this->thursday;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Thursdays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $thursday
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setThursday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $thursday = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $thursday && !($thursday instanceof FHIRBoolean)) {
            $thursday = new FHIRBoolean($thursday);
        }
        $this->_trackValueSet($this->thursday, $thursday);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_THURSDAY])) {
            $this->_primitiveXmlLocations[self::FIELD_THURSDAY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_THURSDAY][0] = $xmlLocation;
        $this->thursday = $thursday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Fridays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getFriday(): null|FHIRBoolean
    {
        return $this->friday;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Fridays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $friday
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFriday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $friday = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $friday && !($friday instanceof FHIRBoolean)) {
            $friday = new FHIRBoolean($friday);
        }
        $this->_trackValueSet($this->friday, $friday);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FRIDAY])) {
            $this->_primitiveXmlLocations[self::FIELD_FRIDAY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FRIDAY][0] = $xmlLocation;
        $this->friday = $friday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Saturdays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getSaturday(): null|FHIRBoolean
    {
        return $this->saturday;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Saturdays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $saturday
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSaturday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $saturday = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $saturday && !($saturday instanceof FHIRBoolean)) {
            $saturday = new FHIRBoolean($saturday);
        }
        $this->_trackValueSet($this->saturday, $saturday);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SATURDAY])) {
            $this->_primitiveXmlLocations[self::FIELD_SATURDAY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SATURDAY][0] = $xmlLocation;
        $this->saturday = $saturday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Sundays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getSunday(): null|FHIRBoolean
    {
        return $this->sunday;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Sundays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $sunday
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSunday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $sunday = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $sunday && !($sunday instanceof FHIRBoolean)) {
            $sunday = new FHIRBoolean($sunday);
        }
        $this->_trackValueSet($this->sunday, $sunday);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SUNDAY])) {
            $this->_primitiveXmlLocations[self::FIELD_SUNDAY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SUNDAY][0] = $xmlLocation;
        $this->sunday = $sunday;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The interval defines if the recurrence is every nth week. The default is every
     * week, so it is expected that this value will be 2 or more. e.g. For recurring
     * every second week this interval would be 2, or every third week the interval
     * would be 3.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getWeekInterval(): null|FHIRPositiveInt
    {
        return $this->weekInterval;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The interval defines if the recurrence is every nth week. The default is every
     * week, so it is expected that this value will be 2 or more. e.g. For recurring
     * every second week this interval would be 2, or every third week the interval
     * would be 3.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt $weekInterval
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setWeekInterval(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $weekInterval = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $weekInterval && !($weekInterval instanceof FHIRPositiveInt)) {
            $weekInterval = new FHIRPositiveInt($weekInterval);
        }
        $this->_trackValueSet($this->weekInterval, $weekInterval);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_WEEK_INTERVAL])) {
            $this->_primitiveXmlLocations[self::FIELD_WEEK_INTERVAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_WEEK_INTERVAL][0] = $xmlLocation;
        $this->weekInterval = $weekInterval;
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
        if (null !== ($v = $this->getMonday())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MONDAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTuesday())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TUESDAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWednesday())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WEDNESDAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getThursday())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_THURSDAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFriday())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FRIDAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSaturday())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SATURDAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSunday())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUNDAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWeekInterval())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WEEK_INTERVAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_MONDAY])) {
            $v = $this->getMonday();
            foreach($validationRules[self::FIELD_MONDAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_WEEKLY_TEMPLATE, self::FIELD_MONDAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONDAY])) {
                        $errs[self::FIELD_MONDAY] = [];
                    }
                    $errs[self::FIELD_MONDAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TUESDAY])) {
            $v = $this->getTuesday();
            foreach($validationRules[self::FIELD_TUESDAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_WEEKLY_TEMPLATE, self::FIELD_TUESDAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TUESDAY])) {
                        $errs[self::FIELD_TUESDAY] = [];
                    }
                    $errs[self::FIELD_TUESDAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WEDNESDAY])) {
            $v = $this->getWednesday();
            foreach($validationRules[self::FIELD_WEDNESDAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_WEEKLY_TEMPLATE, self::FIELD_WEDNESDAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WEDNESDAY])) {
                        $errs[self::FIELD_WEDNESDAY] = [];
                    }
                    $errs[self::FIELD_WEDNESDAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_THURSDAY])) {
            $v = $this->getThursday();
            foreach($validationRules[self::FIELD_THURSDAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_WEEKLY_TEMPLATE, self::FIELD_THURSDAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_THURSDAY])) {
                        $errs[self::FIELD_THURSDAY] = [];
                    }
                    $errs[self::FIELD_THURSDAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FRIDAY])) {
            $v = $this->getFriday();
            foreach($validationRules[self::FIELD_FRIDAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_WEEKLY_TEMPLATE, self::FIELD_FRIDAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FRIDAY])) {
                        $errs[self::FIELD_FRIDAY] = [];
                    }
                    $errs[self::FIELD_FRIDAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SATURDAY])) {
            $v = $this->getSaturday();
            foreach($validationRules[self::FIELD_SATURDAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_WEEKLY_TEMPLATE, self::FIELD_SATURDAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SATURDAY])) {
                        $errs[self::FIELD_SATURDAY] = [];
                    }
                    $errs[self::FIELD_SATURDAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUNDAY])) {
            $v = $this->getSunday();
            foreach($validationRules[self::FIELD_SUNDAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_WEEKLY_TEMPLATE, self::FIELD_SUNDAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUNDAY])) {
                        $errs[self::FIELD_SUNDAY] = [];
                    }
                    $errs[self::FIELD_SUNDAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WEEK_INTERVAL])) {
            $v = $this->getWeekInterval();
            foreach($validationRules[self::FIELD_WEEK_INTERVAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_WEEKLY_TEMPLATE, self::FIELD_WEEK_INTERVAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WEEK_INTERVAL])) {
                        $errs[self::FIELD_WEEK_INTERVAL] = [];
                    }
                    $errs[self::FIELD_WEEK_INTERVAL][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate
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
        } else if (!($type instanceof FHIRAppointmentWeeklyTemplate)) {
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
            if (self::FIELD_MONDAY === $childName) {
                $type->setMonday(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TUESDAY === $childName) {
                $type->setTuesday(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_WEDNESDAY === $childName) {
                $type->setWednesday(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_THURSDAY === $childName) {
                $type->setThursday(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FRIDAY === $childName) {
                $type->setFriday(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SATURDAY === $childName) {
                $type->setSaturday(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SUNDAY === $childName) {
                $type->setSunday(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_WEEK_INTERVAL === $childName) {
                $type->setWeekInterval(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_MONDAY])) {
            $pt = $type->getMonday();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MONDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMonday((string)$attributes[self::FIELD_MONDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TUESDAY])) {
            $pt = $type->getTuesday();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TUESDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTuesday((string)$attributes[self::FIELD_TUESDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_WEDNESDAY])) {
            $pt = $type->getWednesday();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_WEDNESDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setWednesday((string)$attributes[self::FIELD_WEDNESDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_THURSDAY])) {
            $pt = $type->getThursday();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_THURSDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setThursday((string)$attributes[self::FIELD_THURSDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FRIDAY])) {
            $pt = $type->getFriday();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FRIDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFriday((string)$attributes[self::FIELD_FRIDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SATURDAY])) {
            $pt = $type->getSaturday();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SATURDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSaturday((string)$attributes[self::FIELD_SATURDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SUNDAY])) {
            $pt = $type->getSunday();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUNDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSunday((string)$attributes[self::FIELD_SUNDAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_WEEK_INTERVAL])) {
            $pt = $type->getWeekInterval();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_WEEK_INTERVAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setWeekInterval((string)$attributes[self::FIELD_WEEK_INTERVAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
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
            $xw->openRootNode($config, 'AppointmentWeeklyTemplate', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MONDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMonday())) {
            $xw->writeAttribute(self::FIELD_MONDAY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TUESDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTuesday())) {
            $xw->writeAttribute(self::FIELD_TUESDAY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_WEDNESDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getWednesday())) {
            $xw->writeAttribute(self::FIELD_WEDNESDAY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_THURSDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getThursday())) {
            $xw->writeAttribute(self::FIELD_THURSDAY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FRIDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFriday())) {
            $xw->writeAttribute(self::FIELD_FRIDAY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SATURDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSaturday())) {
            $xw->writeAttribute(self::FIELD_SATURDAY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SUNDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSunday())) {
            $xw->writeAttribute(self::FIELD_SUNDAY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_WEEK_INTERVAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getWeekInterval())) {
            $xw->writeAttribute(self::FIELD_WEEK_INTERVAL, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_MONDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMonday())) {
            $xw->startElement(self::FIELD_MONDAY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TUESDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTuesday())) {
            $xw->startElement(self::FIELD_TUESDAY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_WEDNESDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getWednesday())) {
            $xw->startElement(self::FIELD_WEDNESDAY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_THURSDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getThursday())) {
            $xw->startElement(self::FIELD_THURSDAY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FRIDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFriday())) {
            $xw->startElement(self::FIELD_FRIDAY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SATURDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSaturday())) {
            $xw->startElement(self::FIELD_SATURDAY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SUNDAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSunday())) {
            $xw->startElement(self::FIELD_SUNDAY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_WEEK_INTERVAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getWeekInterval())) {
            $xw->startElement(self::FIELD_WEEK_INTERVAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
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
        if (null !== ($v = $this->getMonday())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MONDAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MONDAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTuesday())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TUESDAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TUESDAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWednesday())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WEDNESDAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WEDNESDAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getThursday())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_THURSDAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_THURSDAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFriday())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FRIDAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FRIDAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSaturday())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SATURDAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SATURDAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSunday())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUNDAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUNDAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWeekInterval())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WEEK_INTERVAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WEEK_INTERVAL_EXT} = $ext;
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