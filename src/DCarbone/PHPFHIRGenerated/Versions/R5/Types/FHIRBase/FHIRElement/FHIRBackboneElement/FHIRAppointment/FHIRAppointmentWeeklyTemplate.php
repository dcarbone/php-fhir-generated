<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 */
class FHIRAppointmentWeeklyTemplate extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_APPOINTMENT_DOT_WEEKLY_TEMPLATE;


    public const FIELD_MONDAY = 'monday';
    public const FIELD_MONDAY_EXT = '_monday';
    public const FIELD_TUESDAY = 'tuesday';
    public const FIELD_TUESDAY_EXT = '_tuesday';
    public const FIELD_WEDNESDAY = 'wednesday';
    public const FIELD_WEDNESDAY_EXT = '_wednesday';
    public const FIELD_THURSDAY = 'thursday';
    public const FIELD_THURSDAY_EXT = '_thursday';
    public const FIELD_FRIDAY = 'friday';
    public const FIELD_FRIDAY_EXT = '_friday';
    public const FIELD_SATURDAY = 'saturday';
    public const FIELD_SATURDAY_EXT = '_saturday';
    public const FIELD_SUNDAY = 'sunday';
    public const FIELD_SUNDAY_EXT = '_sunday';
    public const FIELD_WEEK_INTERVAL = 'weekInterval';
    public const FIELD_WEEK_INTERVAL_EXT = '_weekInterval';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Mondays.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $monday;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Tuesdays.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $tuesday;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Wednesdays.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $wednesday;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Thursdays.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $thursday;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Fridays.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $friday;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Saturdays.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $saturday;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Sundays.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $sunday;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $weekInterval;

    /** Default validation map for fields in type Appointment.WeeklyTemplate */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRAppointmentWeeklyTemplate Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $monday
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $tuesday
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $wednesday
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $thursday
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $friday
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $saturday
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $sunday
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $weekInterval
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $monday = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $tuesday = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $wednesday = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $thursday = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $friday = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $saturday = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $sunday = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $weekInterval = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $monday) {
            $this->setMonday($monday);
        }
        if (null !== $tuesday) {
            $this->setTuesday($tuesday);
        }
        if (null !== $wednesday) {
            $this->setWednesday($wednesday);
        }
        if (null !== $thursday) {
            $this->setThursday($thursday);
        }
        if (null !== $friday) {
            $this->setFriday($friday);
        }
        if (null !== $saturday) {
            $this->setSaturday($saturday);
        }
        if (null !== $sunday) {
            $this->setSunday($sunday);
        }
        if (null !== $weekInterval) {
            $this->setWeekInterval($weekInterval);
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Mondays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getMonday(): null|FHIRBoolean
    {
        return $this->monday ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Mondays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $monday
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMonday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $monday,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $monday) {
            unset($this->monday);
            return $this;
        }
        if (!($monday instanceof FHIRBoolean)) {
            $monday = new FHIRBoolean(value: $monday);
        }
        if (null !== $valueXMLLocation) {
            $monday->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $monday->_getValueXMLLocation()) {
            $monday->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->monday = $monday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Tuesdays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getTuesday(): null|FHIRBoolean
    {
        return $this->tuesday ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Tuesdays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $tuesday
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTuesday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $tuesday,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $tuesday) {
            unset($this->tuesday);
            return $this;
        }
        if (!($tuesday instanceof FHIRBoolean)) {
            $tuesday = new FHIRBoolean(value: $tuesday);
        }
        if (null !== $valueXMLLocation) {
            $tuesday->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $tuesday->_getValueXMLLocation()) {
            $tuesday->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->tuesday = $tuesday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Wednesdays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getWednesday(): null|FHIRBoolean
    {
        return $this->wednesday ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Wednesdays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $wednesday
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setWednesday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $wednesday,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $wednesday) {
            unset($this->wednesday);
            return $this;
        }
        if (!($wednesday instanceof FHIRBoolean)) {
            $wednesday = new FHIRBoolean(value: $wednesday);
        }
        if (null !== $valueXMLLocation) {
            $wednesday->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $wednesday->_getValueXMLLocation()) {
            $wednesday->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->wednesday = $wednesday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Thursdays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getThursday(): null|FHIRBoolean
    {
        return $this->thursday ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Thursdays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $thursday
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setThursday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $thursday,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $thursday) {
            unset($this->thursday);
            return $this;
        }
        if (!($thursday instanceof FHIRBoolean)) {
            $thursday = new FHIRBoolean(value: $thursday);
        }
        if (null !== $valueXMLLocation) {
            $thursday->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $thursday->_getValueXMLLocation()) {
            $thursday->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->thursday = $thursday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Fridays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getFriday(): null|FHIRBoolean
    {
        return $this->friday ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Fridays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $friday
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFriday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $friday,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $friday) {
            unset($this->friday);
            return $this;
        }
        if (!($friday instanceof FHIRBoolean)) {
            $friday = new FHIRBoolean(value: $friday);
        }
        if (null !== $valueXMLLocation) {
            $friday->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $friday->_getValueXMLLocation()) {
            $friday->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->friday = $friday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Saturdays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getSaturday(): null|FHIRBoolean
    {
        return $this->saturday ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Saturdays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $saturday
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSaturday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $saturday,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $saturday) {
            unset($this->saturday);
            return $this;
        }
        if (!($saturday instanceof FHIRBoolean)) {
            $saturday = new FHIRBoolean(value: $saturday);
        }
        if (null !== $valueXMLLocation) {
            $saturday->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $saturday->_getValueXMLLocation()) {
            $saturday->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->saturday = $saturday;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Sundays.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getSunday(): null|FHIRBoolean
    {
        return $this->sunday ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that recurring appointments should occur on Sundays.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $sunday
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSunday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $sunday,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $sunday) {
            unset($this->sunday);
            return $this;
        }
        if (!($sunday instanceof FHIRBoolean)) {
            $sunday = new FHIRBoolean(value: $sunday);
        }
        if (null !== $valueXMLLocation) {
            $sunday->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $sunday->_getValueXMLLocation()) {
            $sunday->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getWeekInterval(): null|FHIRPositiveInt
    {
        return $this->weekInterval ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $weekInterval
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setWeekInterval(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $weekInterval,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $weekInterval) {
            unset($this->weekInterval);
            return $this;
        }
        if (!($weekInterval instanceof FHIRPositiveInt)) {
            $weekInterval = new FHIRPositiveInt(value: $weekInterval);
        }
        if (null !== $valueXMLLocation) {
            $weekInterval->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $weekInterval->_getValueXMLLocation()) {
            $weekInterval->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
        if (isset($validationRules[self::FIELD_MONDAY])) {
            $v = $this->getMonday();
            foreach($validationRules[self::FIELD_MONDAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MONDAY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TUESDAY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WEDNESDAY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_THURSDAY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FRIDAY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SATURDAY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUNDAY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WEEK_INTERVAL, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAppointmentWeeklyTemplate)) {
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
            } else if (self::FIELD_MONDAY === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMonday(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TUESDAY === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTuesday(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WEDNESDAY === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setWednesday(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_THURSDAY === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setThursday(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FRIDAY === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setFriday(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SATURDAY === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSaturday(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUNDAY === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSunday(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WEEK_INTERVAL === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setWeekInterval(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_MONDAY])) {
            $pt = $type->getMonday();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_MONDAY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMonday(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_MONDAY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TUESDAY])) {
            $pt = $type->getTuesday();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TUESDAY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTuesday(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_TUESDAY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_WEDNESDAY])) {
            $pt = $type->getWednesday();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_WEDNESDAY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setWednesday(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_WEDNESDAY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_THURSDAY])) {
            $pt = $type->getThursday();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_THURSDAY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setThursday(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_THURSDAY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FRIDAY])) {
            $pt = $type->getFriday();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_FRIDAY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFriday(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_FRIDAY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SATURDAY])) {
            $pt = $type->getSaturday();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SATURDAY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSaturday(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_SATURDAY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SUNDAY])) {
            $pt = $type->getSunday();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SUNDAY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSunday(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_SUNDAY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_WEEK_INTERVAL])) {
            $pt = $type->getWeekInterval();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_WEEK_INTERVAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setWeekInterval(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_WEEK_INTERVAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('AppointmentWeeklyTemplate', $this->_getSourceXMLNS());
        }
        if (isset($this->monday) && $this->monday->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MONDAY, $this->monday->getValue()?->_getFormattedValue());
        }
        if (isset($this->tuesday) && $this->tuesday->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TUESDAY, $this->tuesday->getValue()?->_getFormattedValue());
        }
        if (isset($this->wednesday) && $this->wednesday->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_WEDNESDAY, $this->wednesday->getValue()?->_getFormattedValue());
        }
        if (isset($this->thursday) && $this->thursday->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_THURSDAY, $this->thursday->getValue()?->_getFormattedValue());
        }
        if (isset($this->friday) && $this->friday->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FRIDAY, $this->friday->getValue()?->_getFormattedValue());
        }
        if (isset($this->saturday) && $this->saturday->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SATURDAY, $this->saturday->getValue()?->_getFormattedValue());
        }
        if (isset($this->sunday) && $this->sunday->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SUNDAY, $this->sunday->getValue()?->_getFormattedValue());
        }
        if (isset($this->weekInterval) && $this->weekInterval->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_WEEK_INTERVAL, $this->weekInterval->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->monday) && $this->monday->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MONDAY);
            $this->monday->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->tuesday) && $this->tuesday->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TUESDAY);
            $this->tuesday->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->wednesday) && $this->wednesday->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_WEDNESDAY);
            $this->wednesday->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->thursday) && $this->thursday->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_THURSDAY);
            $this->thursday->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->friday) && $this->friday->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FRIDAY);
            $this->friday->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->saturday) && $this->saturday->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SATURDAY);
            $this->saturday->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sunday) && $this->sunday->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SUNDAY);
            $this->sunday->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->weekInterval) && $this->weekInterval->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_WEEK_INTERVAL);
            $this->weekInterval->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAppointmentWeeklyTemplate)) {
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
        if (isset($json[self::FIELD_MONDAY]) || isset($json[self::FIELD_MONDAY_EXT]) || array_key_exists(self::FIELD_MONDAY, $json) || array_key_exists(self::FIELD_MONDAY_EXT, $json)) {
            $value = $json[self::FIELD_MONDAY] ?? null;
            $ext = (isset($json[self::FIELD_MONDAY_EXT]) && is_array($json[self::FIELD_MONDAY_EXT])) ? $json[self::FIELD_MONDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setMonday($value);
                } else if (is_array($value)) {
                    $type->setMonday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setMonday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMonday(new FHIRBoolean($ext));
            } else {
                $type->setMonday(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_TUESDAY]) || isset($json[self::FIELD_TUESDAY_EXT]) || array_key_exists(self::FIELD_TUESDAY, $json) || array_key_exists(self::FIELD_TUESDAY_EXT, $json)) {
            $value = $json[self::FIELD_TUESDAY] ?? null;
            $ext = (isset($json[self::FIELD_TUESDAY_EXT]) && is_array($json[self::FIELD_TUESDAY_EXT])) ? $json[self::FIELD_TUESDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setTuesday($value);
                } else if (is_array($value)) {
                    $type->setTuesday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setTuesday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTuesday(new FHIRBoolean($ext));
            } else {
                $type->setTuesday(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_WEDNESDAY]) || isset($json[self::FIELD_WEDNESDAY_EXT]) || array_key_exists(self::FIELD_WEDNESDAY, $json) || array_key_exists(self::FIELD_WEDNESDAY_EXT, $json)) {
            $value = $json[self::FIELD_WEDNESDAY] ?? null;
            $ext = (isset($json[self::FIELD_WEDNESDAY_EXT]) && is_array($json[self::FIELD_WEDNESDAY_EXT])) ? $json[self::FIELD_WEDNESDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setWednesday($value);
                } else if (is_array($value)) {
                    $type->setWednesday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setWednesday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setWednesday(new FHIRBoolean($ext));
            } else {
                $type->setWednesday(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_THURSDAY]) || isset($json[self::FIELD_THURSDAY_EXT]) || array_key_exists(self::FIELD_THURSDAY, $json) || array_key_exists(self::FIELD_THURSDAY_EXT, $json)) {
            $value = $json[self::FIELD_THURSDAY] ?? null;
            $ext = (isset($json[self::FIELD_THURSDAY_EXT]) && is_array($json[self::FIELD_THURSDAY_EXT])) ? $json[self::FIELD_THURSDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setThursday($value);
                } else if (is_array($value)) {
                    $type->setThursday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setThursday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setThursday(new FHIRBoolean($ext));
            } else {
                $type->setThursday(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_FRIDAY]) || isset($json[self::FIELD_FRIDAY_EXT]) || array_key_exists(self::FIELD_FRIDAY, $json) || array_key_exists(self::FIELD_FRIDAY_EXT, $json)) {
            $value = $json[self::FIELD_FRIDAY] ?? null;
            $ext = (isset($json[self::FIELD_FRIDAY_EXT]) && is_array($json[self::FIELD_FRIDAY_EXT])) ? $json[self::FIELD_FRIDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setFriday($value);
                } else if (is_array($value)) {
                    $type->setFriday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setFriday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFriday(new FHIRBoolean($ext));
            } else {
                $type->setFriday(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_SATURDAY]) || isset($json[self::FIELD_SATURDAY_EXT]) || array_key_exists(self::FIELD_SATURDAY, $json) || array_key_exists(self::FIELD_SATURDAY_EXT, $json)) {
            $value = $json[self::FIELD_SATURDAY] ?? null;
            $ext = (isset($json[self::FIELD_SATURDAY_EXT]) && is_array($json[self::FIELD_SATURDAY_EXT])) ? $json[self::FIELD_SATURDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setSaturday($value);
                } else if (is_array($value)) {
                    $type->setSaturday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setSaturday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSaturday(new FHIRBoolean($ext));
            } else {
                $type->setSaturday(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_SUNDAY]) || isset($json[self::FIELD_SUNDAY_EXT]) || array_key_exists(self::FIELD_SUNDAY, $json) || array_key_exists(self::FIELD_SUNDAY_EXT, $json)) {
            $value = $json[self::FIELD_SUNDAY] ?? null;
            $ext = (isset($json[self::FIELD_SUNDAY_EXT]) && is_array($json[self::FIELD_SUNDAY_EXT])) ? $json[self::FIELD_SUNDAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setSunday($value);
                } else if (is_array($value)) {
                    $type->setSunday(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setSunday(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSunday(new FHIRBoolean($ext));
            } else {
                $type->setSunday(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_WEEK_INTERVAL]) || isset($json[self::FIELD_WEEK_INTERVAL_EXT]) || array_key_exists(self::FIELD_WEEK_INTERVAL, $json) || array_key_exists(self::FIELD_WEEK_INTERVAL_EXT, $json)) {
            $value = $json[self::FIELD_WEEK_INTERVAL] ?? null;
            $ext = (isset($json[self::FIELD_WEEK_INTERVAL_EXT]) && is_array($json[self::FIELD_WEEK_INTERVAL_EXT])) ? $json[self::FIELD_WEEK_INTERVAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setWeekInterval($value);
                } else if (is_array($value)) {
                    $type->setWeekInterval(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setWeekInterval(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setWeekInterval(new FHIRPositiveInt($ext));
            } else {
                $type->setWeekInterval(new FHIRPositiveInt(null));
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
        if (isset($this->monday)) {
            if (null !== ($val = $this->monday->getValue())) {
                $out->monday = $val;
            }
            $ext = $this->monday->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_monday = $ext;
            }
        }
        if (isset($this->tuesday)) {
            if (null !== ($val = $this->tuesday->getValue())) {
                $out->tuesday = $val;
            }
            $ext = $this->tuesday->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_tuesday = $ext;
            }
        }
        if (isset($this->wednesday)) {
            if (null !== ($val = $this->wednesday->getValue())) {
                $out->wednesday = $val;
            }
            $ext = $this->wednesday->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_wednesday = $ext;
            }
        }
        if (isset($this->thursday)) {
            if (null !== ($val = $this->thursday->getValue())) {
                $out->thursday = $val;
            }
            $ext = $this->thursday->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_thursday = $ext;
            }
        }
        if (isset($this->friday)) {
            if (null !== ($val = $this->friday->getValue())) {
                $out->friday = $val;
            }
            $ext = $this->friday->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_friday = $ext;
            }
        }
        if (isset($this->saturday)) {
            if (null !== ($val = $this->saturday->getValue())) {
                $out->saturday = $val;
            }
            $ext = $this->saturday->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_saturday = $ext;
            }
        }
        if (isset($this->sunday)) {
            if (null !== ($val = $this->sunday->getValue())) {
                $out->sunday = $val;
            }
            $ext = $this->sunday->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sunday = $ext;
            }
        }
        if (isset($this->weekInterval)) {
            if (null !== ($val = $this->weekInterval->getValue())) {
                $out->weekInterval = $val;
            }
            $ext = $this->weekInterval->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_weekInterval = $ext;
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