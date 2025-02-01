<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDaysOfWeekEnum;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDaysOfWeek;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Details and position information for a physical place where services are
 * provided and resources and participants may be stored, found, contained, or
 * accommodated.
 */
class FHIRLocationHoursOfOperation extends FHIRBackboneElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_LOCATION_DOT_HOURS_OF_OPERATION;

    /* class_default.php:47 */
    public const FIELD_DAYS_OF_WEEK = 'daysOfWeek';
    public const FIELD_DAYS_OF_WEEK_EXT = '_daysOfWeek';
    public const FIELD_ALL_DAY = 'allDay';
    public const FIELD_ALL_DAY_EXT = '_allDay';
    public const FIELD_OPENING_TIME = 'openingTime';
    public const FIELD_OPENING_TIME_EXT = '_openingTime';
    public const FIELD_CLOSING_TIME = 'closingTime';
    public const FIELD_CLOSING_TIME_EXT = '_closingTime';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_ALL_DAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OPENING_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CLOSING_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDaysOfWeek[] 
     */
    protected array $daysOfWeek;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Location is open all day.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $allDay;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time that the Location opens.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $openingTime;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time that the Location closes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $closingTime;

    /* constructor.php:63 */
    /**
     * FHIRLocationHoursOfOperation Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDaysOfWeekEnum[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDaysOfWeek[] $daysOfWeek
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $allDay
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime $openingTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime $closingTime
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $daysOfWeek = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $allDay = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $openingTime = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $closingTime = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $daysOfWeek) {
            $this->setDaysOfWeek(...$daysOfWeek);
        }
        if (null !== $allDay) {
            $this->setAllDay($allDay);
        }
        if (null !== $openingTime) {
            $this->setOpeningTime($openingTime);
        }
        if (null !== $closingTime) {
            $this->setClosingTime($closingTime);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDaysOfWeek[]
     */
    public function getDaysOfWeek(): array
    {
        return $this->daysOfWeek ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDaysOfWeek>
     */
    public function getDaysOfWeekIterator(): iterable
    {
        if (!isset($this->daysOfWeek)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->daysOfWeek);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDaysOfWeekEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDaysOfWeek $daysOfWeek
     * @return static
     */
    public function addDaysOfWeek(string|FHIRDaysOfWeekEnum|FHIRDaysOfWeek $daysOfWeek): self
    {
        if (!($daysOfWeek instanceof FHIRDaysOfWeek)) {
            $daysOfWeek = new FHIRDaysOfWeek(value: $daysOfWeek);
        }
        if (!isset($this->daysOfWeek)) {
            $this->daysOfWeek = [];
        }
        $this->daysOfWeek[] = $daysOfWeek;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDaysOfWeekEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDaysOfWeek ...$daysOfWeek
     * @return static
     */
    public function setDaysOfWeek(string|FHIRDaysOfWeekEnum|FHIRDaysOfWeek ...$daysOfWeek): self
    {
        if ([] === $daysOfWeek) {
            unset($this->daysOfWeek);
            return $this;
        }
        $this->daysOfWeek = [];
        foreach($daysOfWeek as $v) {
            if ($v instanceof FHIRDaysOfWeek) {
                $this->daysOfWeek[] = $v;
            } else {
                $this->daysOfWeek[] = new FHIRDaysOfWeek(value: $v);
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Location is open all day.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
     */
    public function getAllDay(): null|FHIRBoolean
    {
        return $this->allDay ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Location is open all day.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $allDay
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAllDay(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $allDay,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $allDay) {
            unset($this->allDay);
            return $this;
        }
        if (!($allDay instanceof FHIRBoolean)) {
            $allDay = new FHIRBoolean(value: $allDay);
        }
        $this->allDay = $allDay;
        if ($this->_valueXMLLocations[self::FIELD_ALL_DAY] !== $valueXMLLocation) {
            $this->_setAllDayValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the allDay element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAllDayValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ALL_DAY];
    }

    /**
     * Set the location the "value" field of the allDay element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAllDayValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ALL_DAY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time that the Location opens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime
     */
    public function getOpeningTime(): null|FHIRTime
    {
        return $this->openingTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time that the Location opens.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime $openingTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOpeningTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $openingTime,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $openingTime) {
            unset($this->openingTime);
            return $this;
        }
        if (!($openingTime instanceof FHIRTime)) {
            $openingTime = new FHIRTime(value: $openingTime);
        }
        $this->openingTime = $openingTime;
        if ($this->_valueXMLLocations[self::FIELD_OPENING_TIME] !== $valueXMLLocation) {
            $this->_setOpeningTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the openingTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOpeningTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_OPENING_TIME];
    }

    /**
     * Set the location the "value" field of the openingTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOpeningTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_OPENING_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time that the Location closes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime
     */
    public function getClosingTime(): null|FHIRTime
    {
        return $this->closingTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time that the Location closes.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime $closingTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setClosingTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $closingTime,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $closingTime) {
            unset($this->closingTime);
            return $this;
        }
        if (!($closingTime instanceof FHIRTime)) {
            $closingTime = new FHIRTime(value: $closingTime);
        }
        $this->closingTime = $closingTime;
        if ($this->_valueXMLLocations[self::FIELD_CLOSING_TIME] !== $valueXMLLocation) {
            $this->_setClosingTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the closingTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getClosingTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CLOSING_TIME];
    }

    /**
     * Set the location the "value" field of the closingTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setClosingTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CLOSING_TIME] = $valueXMLLocation;
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
        if (isset($validationRules[self::FIELD_DAYS_OF_WEEK])) {
            $v = $this->getDaysOfWeek();
            foreach($validationRules[self::FIELD_DAYS_OF_WEEK] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DAYS_OF_WEEK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAYS_OF_WEEK])) {
                        $errs[self::FIELD_DAYS_OF_WEEK] = [];
                    }
                    $errs[self::FIELD_DAYS_OF_WEEK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALL_DAY])) {
            $v = $this->getAllDay();
            foreach($validationRules[self::FIELD_ALL_DAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALL_DAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALL_DAY])) {
                        $errs[self::FIELD_ALL_DAY] = [];
                    }
                    $errs[self::FIELD_ALL_DAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPENING_TIME])) {
            $v = $this->getOpeningTime();
            foreach($validationRules[self::FIELD_OPENING_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OPENING_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPENING_TIME])) {
                        $errs[self::FIELD_OPENING_TIME] = [];
                    }
                    $errs[self::FIELD_OPENING_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLOSING_TIME])) {
            $v = $this->getClosingTime();
            foreach($validationRules[self::FIELD_CLOSING_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLOSING_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLOSING_TIME])) {
                        $errs[self::FIELD_CLOSING_TIME] = [];
                    }
                    $errs[self::FIELD_CLOSING_TIME][$rule] = $err;
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

    /* class_default.php:211 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRLocationHoursOfOperation)) {
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
            } else if (self::FIELD_DAYS_OF_WEEK === $cen) {
                $type->addDaysOfWeek(FHIRDaysOfWeek::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALL_DAY === $cen) {
                $type->setAllDay(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OPENING_TIME === $cen) {
                $type->setOpeningTime(FHIRTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLOSING_TIME === $cen) {
                $type->setClosingTime(FHIRTime::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ALL_DAY])) {
            if (isset($type->allDay)) {
                $type->allDay->setValue((string)$attributes[self::FIELD_ALL_DAY]);
                $type->_setAllDayValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAllDay((string)$attributes[self::FIELD_ALL_DAY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OPENING_TIME])) {
            if (isset($type->openingTime)) {
                $type->openingTime->setValue((string)$attributes[self::FIELD_OPENING_TIME]);
                $type->_setOpeningTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOpeningTime((string)$attributes[self::FIELD_OPENING_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CLOSING_TIME])) {
            if (isset($type->closingTime)) {
                $type->closingTime->setValue((string)$attributes[self::FIELD_CLOSING_TIME]);
                $type->_setClosingTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setClosingTime((string)$attributes[self::FIELD_CLOSING_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->allDay) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ALL_DAY]) {
            $xw->writeAttribute(self::FIELD_ALL_DAY, $this->allDay->_getFormattedValue());
        }
        if (isset($this->openingTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OPENING_TIME]) {
            $xw->writeAttribute(self::FIELD_OPENING_TIME, $this->openingTime->_getFormattedValue());
        }
        if (isset($this->closingTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CLOSING_TIME]) {
            $xw->writeAttribute(self::FIELD_CLOSING_TIME, $this->closingTime->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->daysOfWeek) && [] !== $this->daysOfWeek) {
            foreach($this->daysOfWeek as $v) {
                $xw->startElement(self::FIELD_DAYS_OF_WEEK);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->allDay)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ALL_DAY]
                || $this->allDay->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ALL_DAY);
            $this->allDay->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ALL_DAY]);
            $xw->endElement();
        }
        if (isset($this->openingTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OPENING_TIME]
                || $this->openingTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OPENING_TIME);
            $this->openingTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OPENING_TIME]);
            $xw->endElement();
        }
        if (isset($this->closingTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CLOSING_TIME]
                || $this->closingTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CLOSING_TIME);
            $this->closingTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CLOSING_TIME]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRLocationHoursOfOperation)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_DAYS_OF_WEEK])
            || isset($json[self::FIELD_DAYS_OF_WEEK_EXT])
            || array_key_exists(self::FIELD_DAYS_OF_WEEK, $json)
            || array_key_exists(self::FIELD_DAYS_OF_WEEK_EXT, $json)) {
            $value = (array)($json[self::FIELD_DAYS_OF_WEEK] ?? []);
            $ext = (array)($json[self::FIELD_DAYS_OF_WEEK_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addDaysOfWeek(FHIRDaysOfWeek::jsonUnserialize(
                    [FHIRDaysOfWeek::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ALL_DAY])
            || isset($json[self::FIELD_ALL_DAY_EXT])
            || array_key_exists(self::FIELD_ALL_DAY, $json)
            || array_key_exists(self::FIELD_ALL_DAY_EXT, $json)) {
            $value = $json[self::FIELD_ALL_DAY] ?? null;
            $type->setAllDay(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_ALL_DAY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OPENING_TIME])
            || isset($json[self::FIELD_OPENING_TIME_EXT])
            || array_key_exists(self::FIELD_OPENING_TIME, $json)
            || array_key_exists(self::FIELD_OPENING_TIME_EXT, $json)) {
            $value = $json[self::FIELD_OPENING_TIME] ?? null;
            $type->setOpeningTime(FHIRTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRTime::FIELD_VALUE => $value]) + ($json[self::FIELD_OPENING_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CLOSING_TIME])
            || isset($json[self::FIELD_CLOSING_TIME_EXT])
            || array_key_exists(self::FIELD_CLOSING_TIME, $json)
            || array_key_exists(self::FIELD_CLOSING_TIME_EXT, $json)) {
            $value = $json[self::FIELD_CLOSING_TIME] ?? null;
            $type->setClosingTime(FHIRTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRTime::FIELD_VALUE => $value]) + ($json[self::FIELD_CLOSING_TIME_EXT] ?? []),
                $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->daysOfWeek) && [] !== $this->daysOfWeek) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->daysOfWeek as $v) {
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
                $out->daysOfWeek = $vals;
            }
            if ($hasExts) {
                $out->_daysOfWeek = $exts;
            }
        }
        if (isset($this->allDay)) {
            if (null !== ($val = $this->allDay->getValue())) {
                $out->allDay = $val;
            }
            if ($this->allDay->_nonValueFieldDefined()) {
                $ext = $this->allDay->jsonSerialize();
                unset($ext->value);
                $out->_allDay = $ext;
            }
        }
        if (isset($this->openingTime)) {
            if (null !== ($val = $this->openingTime->getValue())) {
                $out->openingTime = $val;
            }
            if ($this->openingTime->_nonValueFieldDefined()) {
                $ext = $this->openingTime->jsonSerialize();
                unset($ext->value);
                $out->_openingTime = $ext;
            }
        }
        if (isset($this->closingTime)) {
            if (null !== ($val = $this->closingTime->getValue())) {
                $out->closingTime = $val;
            }
            if ($this->closingTime->_nonValueFieldDefined()) {
                $ext = $this->closingTime->jsonSerialize();
                unset($ext->value);
                $out->_closingTime = $ext;
            }
        }
        return $out;
    }
}