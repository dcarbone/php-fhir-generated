<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 20:30+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 */
class FHIRAppointmentWeeklyTemplate extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_APPOINTMENT_DOT_WEEKLY_TEMPLATE;

    /* class_default.php:50 */
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

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_MONDAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TUESDAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WEDNESDAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_THURSDAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FRIDAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SATURDAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUNDAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WEEK_INTERVAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
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

    /* constructor.php:61 */
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $weekInterval
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
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $weekInterval = null,
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
     * @return static
     */
    public function setMonday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $monday): self
    {
        if (null === $monday) {
            unset($this->monday);
            return $this;
        }
        if (!($monday instanceof FHIRBoolean)) {
            $monday = new FHIRBoolean(value: $monday);
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
     * @return static
     */
    public function setTuesday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $tuesday): self
    {
        if (null === $tuesday) {
            unset($this->tuesday);
            return $this;
        }
        if (!($tuesday instanceof FHIRBoolean)) {
            $tuesday = new FHIRBoolean(value: $tuesday);
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
     * @return static
     */
    public function setWednesday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $wednesday): self
    {
        if (null === $wednesday) {
            unset($this->wednesday);
            return $this;
        }
        if (!($wednesday instanceof FHIRBoolean)) {
            $wednesday = new FHIRBoolean(value: $wednesday);
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
     * @return static
     */
    public function setThursday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $thursday): self
    {
        if (null === $thursday) {
            unset($this->thursday);
            return $this;
        }
        if (!($thursday instanceof FHIRBoolean)) {
            $thursday = new FHIRBoolean(value: $thursday);
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
     * @return static
     */
    public function setFriday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $friday): self
    {
        if (null === $friday) {
            unset($this->friday);
            return $this;
        }
        if (!($friday instanceof FHIRBoolean)) {
            $friday = new FHIRBoolean(value: $friday);
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
     * @return static
     */
    public function setSaturday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $saturday): self
    {
        if (null === $saturday) {
            unset($this->saturday);
            return $this;
        }
        if (!($saturday instanceof FHIRBoolean)) {
            $saturday = new FHIRBoolean(value: $saturday);
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
     * @return static
     */
    public function setSunday(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $sunday): self
    {
        if (null === $sunday) {
            unset($this->sunday);
            return $this;
        }
        if (!($sunday instanceof FHIRBoolean)) {
            $sunday = new FHIRBoolean(value: $sunday);
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $weekInterval
     * @return static
     */
    public function setWeekInterval(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $weekInterval): self
    {
        if (null === $weekInterval) {
            unset($this->weekInterval);
            return $this;
        }
        if (!($weekInterval instanceof FHIRPositiveInt)) {
            $weekInterval = new FHIRPositiveInt(value: $weekInterval);
        }
        $this->weekInterval = $weekInterval;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
            } else if (self::FIELD_MONDAY === $cen) {
                $type->setMonday(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TUESDAY === $cen) {
                $type->setTuesday(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WEDNESDAY === $cen) {
                $type->setWednesday(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_THURSDAY === $cen) {
                $type->setThursday(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FRIDAY === $cen) {
                $type->setFriday(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SATURDAY === $cen) {
                $type->setSaturday(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUNDAY === $cen) {
                $type->setSunday(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WEEK_INTERVAL === $cen) {
                $type->setWeekInterval(FHIRPositiveInt::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MONDAY])) {
            if (isset($type->monday)) {
                $type->monday->setValue((string)$attributes[self::FIELD_MONDAY]);
            } else {
                $type->setMonday((string)$attributes[self::FIELD_MONDAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MONDAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TUESDAY])) {
            if (isset($type->tuesday)) {
                $type->tuesday->setValue((string)$attributes[self::FIELD_TUESDAY]);
            } else {
                $type->setTuesday((string)$attributes[self::FIELD_TUESDAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TUESDAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_WEDNESDAY])) {
            if (isset($type->wednesday)) {
                $type->wednesday->setValue((string)$attributes[self::FIELD_WEDNESDAY]);
            } else {
                $type->setWednesday((string)$attributes[self::FIELD_WEDNESDAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_WEDNESDAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_THURSDAY])) {
            if (isset($type->thursday)) {
                $type->thursday->setValue((string)$attributes[self::FIELD_THURSDAY]);
            } else {
                $type->setThursday((string)$attributes[self::FIELD_THURSDAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_THURSDAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FRIDAY])) {
            if (isset($type->friday)) {
                $type->friday->setValue((string)$attributes[self::FIELD_FRIDAY]);
            } else {
                $type->setFriday((string)$attributes[self::FIELD_FRIDAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FRIDAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SATURDAY])) {
            if (isset($type->saturday)) {
                $type->saturday->setValue((string)$attributes[self::FIELD_SATURDAY]);
            } else {
                $type->setSaturday((string)$attributes[self::FIELD_SATURDAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SATURDAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUNDAY])) {
            if (isset($type->sunday)) {
                $type->sunday->setValue((string)$attributes[self::FIELD_SUNDAY]);
            } else {
                $type->setSunday((string)$attributes[self::FIELD_SUNDAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUNDAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_WEEK_INTERVAL])) {
            if (isset($type->weekInterval)) {
                $type->weekInterval->setValue((string)$attributes[self::FIELD_WEEK_INTERVAL]);
            } else {
                $type->setWeekInterval((string)$attributes[self::FIELD_WEEK_INTERVAL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_WEEK_INTERVAL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->monday) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MONDAY]) {
            $xw->writeAttribute(self::FIELD_MONDAY, $this->monday->_getValueAsString());
        }
        if (isset($this->tuesday) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TUESDAY]) {
            $xw->writeAttribute(self::FIELD_TUESDAY, $this->tuesday->_getValueAsString());
        }
        if (isset($this->wednesday) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WEDNESDAY]) {
            $xw->writeAttribute(self::FIELD_WEDNESDAY, $this->wednesday->_getValueAsString());
        }
        if (isset($this->thursday) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_THURSDAY]) {
            $xw->writeAttribute(self::FIELD_THURSDAY, $this->thursday->_getValueAsString());
        }
        if (isset($this->friday) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FRIDAY]) {
            $xw->writeAttribute(self::FIELD_FRIDAY, $this->friday->_getValueAsString());
        }
        if (isset($this->saturday) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SATURDAY]) {
            $xw->writeAttribute(self::FIELD_SATURDAY, $this->saturday->_getValueAsString());
        }
        if (isset($this->sunday) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUNDAY]) {
            $xw->writeAttribute(self::FIELD_SUNDAY, $this->sunday->_getValueAsString());
        }
        if (isset($this->weekInterval) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WEEK_INTERVAL]) {
            $xw->writeAttribute(self::FIELD_WEEK_INTERVAL, $this->weekInterval->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->monday)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MONDAY]
                || $this->monday->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MONDAY);
            $this->monday->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MONDAY]);
            $xw->endElement();
        }
        if (isset($this->tuesday)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TUESDAY]
                || $this->tuesday->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TUESDAY);
            $this->tuesday->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TUESDAY]);
            $xw->endElement();
        }
        if (isset($this->wednesday)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_WEDNESDAY]
                || $this->wednesday->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_WEDNESDAY);
            $this->wednesday->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_WEDNESDAY]);
            $xw->endElement();
        }
        if (isset($this->thursday)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_THURSDAY]
                || $this->thursday->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_THURSDAY);
            $this->thursday->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_THURSDAY]);
            $xw->endElement();
        }
        if (isset($this->friday)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FRIDAY]
                || $this->friday->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FRIDAY);
            $this->friday->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FRIDAY]);
            $xw->endElement();
        }
        if (isset($this->saturday)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SATURDAY]
                || $this->saturday->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SATURDAY);
            $this->saturday->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SATURDAY]);
            $xw->endElement();
        }
        if (isset($this->sunday)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUNDAY]
                || $this->sunday->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUNDAY);
            $this->sunday->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUNDAY]);
            $xw->endElement();
        }
        if (isset($this->weekInterval)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_WEEK_INTERVAL]
                || $this->weekInterval->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_WEEK_INTERVAL);
            $this->weekInterval->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_WEEK_INTERVAL]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentWeeklyTemplate
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->monday)
            || isset($json->_monday)
            || property_exists($json, self::FIELD_MONDAY)
            || property_exists($json, self::FIELD_MONDAY_EXT)) {
            $v = $json->_monday ?? new \stdClass();
            $v->value = $json->monday ?? null;
            $type->setMonday(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->tuesday)
            || isset($json->_tuesday)
            || property_exists($json, self::FIELD_TUESDAY)
            || property_exists($json, self::FIELD_TUESDAY_EXT)) {
            $v = $json->_tuesday ?? new \stdClass();
            $v->value = $json->tuesday ?? null;
            $type->setTuesday(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->wednesday)
            || isset($json->_wednesday)
            || property_exists($json, self::FIELD_WEDNESDAY)
            || property_exists($json, self::FIELD_WEDNESDAY_EXT)) {
            $v = $json->_wednesday ?? new \stdClass();
            $v->value = $json->wednesday ?? null;
            $type->setWednesday(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->thursday)
            || isset($json->_thursday)
            || property_exists($json, self::FIELD_THURSDAY)
            || property_exists($json, self::FIELD_THURSDAY_EXT)) {
            $v = $json->_thursday ?? new \stdClass();
            $v->value = $json->thursday ?? null;
            $type->setThursday(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->friday)
            || isset($json->_friday)
            || property_exists($json, self::FIELD_FRIDAY)
            || property_exists($json, self::FIELD_FRIDAY_EXT)) {
            $v = $json->_friday ?? new \stdClass();
            $v->value = $json->friday ?? null;
            $type->setFriday(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->saturday)
            || isset($json->_saturday)
            || property_exists($json, self::FIELD_SATURDAY)
            || property_exists($json, self::FIELD_SATURDAY_EXT)) {
            $v = $json->_saturday ?? new \stdClass();
            $v->value = $json->saturday ?? null;
            $type->setSaturday(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->sunday)
            || isset($json->_sunday)
            || property_exists($json, self::FIELD_SUNDAY)
            || property_exists($json, self::FIELD_SUNDAY_EXT)) {
            $v = $json->_sunday ?? new \stdClass();
            $v->value = $json->sunday ?? null;
            $type->setSunday(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->weekInterval)
            || isset($json->_weekInterval)
            || property_exists($json, self::FIELD_WEEK_INTERVAL)
            || property_exists($json, self::FIELD_WEEK_INTERVAL_EXT)) {
            $v = $json->_weekInterval ?? new \stdClass();
            $v->value = $json->weekInterval ?? null;
            $type->setWeekInterval(FHIRPositiveInt::jsonUnserialize($v, $config));
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
            if ($this->monday->_nonValueFieldDefined()) {
                $ext = $this->monday->jsonSerialize();
                unset($ext->value);
                $out->_monday = $ext;
            }
        }
        if (isset($this->tuesday)) {
            if (null !== ($val = $this->tuesday->getValue())) {
                $out->tuesday = $val;
            }
            if ($this->tuesday->_nonValueFieldDefined()) {
                $ext = $this->tuesday->jsonSerialize();
                unset($ext->value);
                $out->_tuesday = $ext;
            }
        }
        if (isset($this->wednesday)) {
            if (null !== ($val = $this->wednesday->getValue())) {
                $out->wednesday = $val;
            }
            if ($this->wednesday->_nonValueFieldDefined()) {
                $ext = $this->wednesday->jsonSerialize();
                unset($ext->value);
                $out->_wednesday = $ext;
            }
        }
        if (isset($this->thursday)) {
            if (null !== ($val = $this->thursday->getValue())) {
                $out->thursday = $val;
            }
            if ($this->thursday->_nonValueFieldDefined()) {
                $ext = $this->thursday->jsonSerialize();
                unset($ext->value);
                $out->_thursday = $ext;
            }
        }
        if (isset($this->friday)) {
            if (null !== ($val = $this->friday->getValue())) {
                $out->friday = $val;
            }
            if ($this->friday->_nonValueFieldDefined()) {
                $ext = $this->friday->jsonSerialize();
                unset($ext->value);
                $out->_friday = $ext;
            }
        }
        if (isset($this->saturday)) {
            if (null !== ($val = $this->saturday->getValue())) {
                $out->saturday = $val;
            }
            if ($this->saturday->_nonValueFieldDefined()) {
                $ext = $this->saturday->jsonSerialize();
                unset($ext->value);
                $out->_saturday = $ext;
            }
        }
        if (isset($this->sunday)) {
            if (null !== ($val = $this->sunday->getValue())) {
                $out->sunday = $val;
            }
            if ($this->sunday->_nonValueFieldDefined()) {
                $ext = $this->sunday->jsonSerialize();
                unset($ext->value);
                $out->_sunday = $ext;
            }
        }
        if (isset($this->weekInterval)) {
            if (null !== ($val = $this->weekInterval->getValue())) {
                $out->weekInterval = $val;
            }
            if ($this->weekInterval->_nonValueFieldDefined()) {
                $ext = $this->weekInterval->jsonSerialize();
                unset($ext->value);
                $out->_weekInterval = $ext;
            }
        }
        return $out;
    }
}