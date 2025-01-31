<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 00:19+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDaysOfWeek;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * The details of a healthcare service available at a location.
 */
class FHIRHealthcareServiceAvailableTime extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME;

    /* class_default.php:48 */
    public const FIELD_DAYS_OF_WEEK = 'daysOfWeek';
    public const FIELD_DAYS_OF_WEEK_EXT = '_daysOfWeek';
    public const FIELD_ALL_DAY = 'allDay';
    public const FIELD_ALL_DAY_EXT = '_allDay';
    public const FIELD_AVAILABLE_START_TIME = 'availableStartTime';
    public const FIELD_AVAILABLE_START_TIME_EXT = '_availableStartTime';
    public const FIELD_AVAILABLE_END_TIME = 'availableEndTime';
    public const FIELD_AVAILABLE_END_TIME_EXT = '_availableEndTime';

    /* class_default.php:67 */
    private static array $_validationRules = [];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_ALL_DAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AVAILABLE_START_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AVAILABLE_END_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDaysOfWeek[] 
     */
    protected array $daysOfWeek;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $allDay;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $availableStartTime;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime 
     */
    protected FHIRTime $availableEndTime;

    /* constructor.php:63 */
    /**
     * FHIRHealthcareServiceAvailableTime Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDaysOfWeek[] $daysOfWeek
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $allDay
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $availableStartTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $availableEndTime
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $daysOfWeek = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $allDay = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableStartTime = null,
                                null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableEndTime = null,
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
        if (null !== $availableStartTime) {
            $this->setAvailableStartTime($availableStartTime);
        }
        if (null !== $availableEndTime) {
            $this->setAvailableEndTime($availableEndTime);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDaysOfWeek[]
     */
    public function getDaysOfWeek(): array
    {
        return $this->daysOfWeek ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDaysOfWeek>
     */
    public function getDaysOfWeekIterator(): iterable
    {
        if (!isset($this->daysOfWeek)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->daysOfWeek);
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDaysOfWeek $daysOfWeek
     * @return static
     */
    public function addDaysOfWeek(FHIRDaysOfWeek $daysOfWeek): self
    {
        if (!isset($this->daysOfWeek)) {
            $this->daysOfWeek = [];
        }
        $this->daysOfWeek[] = $daysOfWeek;
        return $this;
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDaysOfWeek ...$daysOfWeek
     * @return static
     */
    public function setDaysOfWeek(FHIRDaysOfWeek ...$daysOfWeek): self
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
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean
     */
    public function getAllDay(): null|FHIRBoolean
    {
        return $this->allDay ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean $allDay
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
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime
     */
    public function getAvailableStartTime(): null|FHIRTime
    {
        return $this->availableStartTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $availableStartTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAvailableStartTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableStartTime,
                                          ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $availableStartTime) {
            unset($this->availableStartTime);
            return $this;
        }
        if (!($availableStartTime instanceof FHIRTime)) {
            $availableStartTime = new FHIRTime(value: $availableStartTime);
        }
        $this->availableStartTime = $availableStartTime;
        if ($this->_valueXMLLocations[self::FIELD_AVAILABLE_START_TIME] !== $valueXMLLocation) {
            $this->_setAvailableStartTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the availableStartTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAvailableStartTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AVAILABLE_START_TIME];
    }

    /**
     * Set the location the "value" field of the availableStartTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAvailableStartTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AVAILABLE_START_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime
     */
    public function getAvailableEndTime(): null|FHIRTime
    {
        return $this->availableEndTime ?? null;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime $availableEndTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAvailableEndTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableEndTime,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $availableEndTime) {
            unset($this->availableEndTime);
            return $this;
        }
        if (!($availableEndTime instanceof FHIRTime)) {
            $availableEndTime = new FHIRTime(value: $availableEndTime);
        }
        $this->availableEndTime = $availableEndTime;
        if ($this->_valueXMLLocations[self::FIELD_AVAILABLE_END_TIME] !== $valueXMLLocation) {
            $this->_setAvailableEndTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the availableEndTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAvailableEndTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AVAILABLE_END_TIME];
    }

    /**
     * Set the location the "value" field of the availableEndTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAvailableEndTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AVAILABLE_END_TIME] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:189 */
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
        if (isset($validationRules[self::FIELD_AVAILABLE_START_TIME])) {
            $v = $this->getAvailableStartTime();
            foreach($validationRules[self::FIELD_AVAILABLE_START_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AVAILABLE_START_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABLE_START_TIME])) {
                        $errs[self::FIELD_AVAILABLE_START_TIME] = [];
                    }
                    $errs[self::FIELD_AVAILABLE_START_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVAILABLE_END_TIME])) {
            $v = $this->getAvailableEndTime();
            foreach($validationRules[self::FIELD_AVAILABLE_END_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AVAILABLE_END_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABLE_END_TIME])) {
                        $errs[self::FIELD_AVAILABLE_END_TIME] = [];
                    }
                    $errs[self::FIELD_AVAILABLE_END_TIME][$rule] = $err;
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

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRHealthcareServiceAvailableTime)) {
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
            } else if (self::FIELD_AVAILABLE_START_TIME === $cen) {
                $type->setAvailableStartTime(FHIRTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AVAILABLE_END_TIME === $cen) {
                $type->setAvailableEndTime(FHIRTime::xmlUnserialize($ce, $config));
            }        }
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
        if (isset($attributes[self::FIELD_AVAILABLE_START_TIME])) {
            if (isset($type->availableStartTime)) {
                $type->availableStartTime->setValue((string)$attributes[self::FIELD_AVAILABLE_START_TIME]);
                $type->_setAvailableStartTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAvailableStartTime((string)$attributes[self::FIELD_AVAILABLE_START_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AVAILABLE_END_TIME])) {
            if (isset($type->availableEndTime)) {
                $type->availableEndTime->setValue((string)$attributes[self::FIELD_AVAILABLE_END_TIME]);
                $type->_setAvailableEndTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAvailableEndTime((string)$attributes[self::FIELD_AVAILABLE_END_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->availableStartTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AVAILABLE_START_TIME]) {
            $xw->writeAttribute(self::FIELD_AVAILABLE_START_TIME, $this->availableStartTime->_getFormattedValue());
        }
        if (isset($this->availableEndTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AVAILABLE_END_TIME]) {
            $xw->writeAttribute(self::FIELD_AVAILABLE_END_TIME, $this->availableEndTime->_getFormattedValue());
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
        if (isset($this->availableStartTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AVAILABLE_START_TIME]
                || $this->availableStartTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AVAILABLE_START_TIME);
            $this->availableStartTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AVAILABLE_START_TIME]);
            $xw->endElement();
        }
        if (isset($this->availableEndTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AVAILABLE_END_TIME]
                || $this->availableEndTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AVAILABLE_END_TIME);
            $this->availableEndTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AVAILABLE_END_TIME]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRHealthcareServiceAvailableTime)) {
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
        parent::jsonUnserialize($json, $config, $type);
        if (isset($json[self::FIELD_DAYS_OF_WEEK]) || isset($json[self::FIELD_DAYS_OF_WEEK_EXT]) || array_key_exists(self::FIELD_DAYS_OF_WEEK, $json) || array_key_exists(self::FIELD_DAYS_OF_WEEK_EXT, $json)) {
            $value = $json[self::FIELD_DAYS_OF_WEEK] ?? null;
            $ext = (array)($json[self::FIELD_DAYS_OF_WEEK_EXT] ?? []);
            if (!is_array($value)) {
                $value = [$value];
            }
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addDaysOfWeek(FHIRDaysOfWeek::jsonUnserialize(
                    json: [FHIRDaysOfWeek::FIELD_VALUE => $value[$i] ?? null] + (array)($ext[$i] ?? []),
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_ALL_DAY]) || isset($json[self::FIELD_ALL_DAY_EXT]) || array_key_exists(self::FIELD_ALL_DAY, $json) || array_key_exists(self::FIELD_ALL_DAY_EXT, $json)) {
            $value = $json[self::FIELD_ALL_DAY] ?? null;
            $ext = (array)($json[self::FIELD_ALL_DAY_EXT] ?? []);
            $type->setAllDay(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_AVAILABLE_START_TIME]) || isset($json[self::FIELD_AVAILABLE_START_TIME_EXT]) || array_key_exists(self::FIELD_AVAILABLE_START_TIME, $json) || array_key_exists(self::FIELD_AVAILABLE_START_TIME_EXT, $json)) {
            $value = $json[self::FIELD_AVAILABLE_START_TIME] ?? null;
            $ext = (array)($json[self::FIELD_AVAILABLE_START_TIME_EXT] ?? []);
            $type->setAvailableStartTime(FHIRTime::jsonUnserialize(
                json: [FHIRTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_AVAILABLE_END_TIME]) || isset($json[self::FIELD_AVAILABLE_END_TIME_EXT]) || array_key_exists(self::FIELD_AVAILABLE_END_TIME, $json) || array_key_exists(self::FIELD_AVAILABLE_END_TIME_EXT, $json)) {
            $value = $json[self::FIELD_AVAILABLE_END_TIME] ?? null;
            $ext = (array)($json[self::FIELD_AVAILABLE_END_TIME_EXT] ?? []);
            $type->setAvailableEndTime(FHIRTime::jsonUnserialize(
                json: [FHIRTime::FIELD_VALUE => $value] + $ext,
                config: $config,
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
            foreach ($this->daysOfWeek as $v) {
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
                $out->daysOfWeek = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_daysOfWeek = $exts;
            }
        }
        if (isset($this->allDay)) {
            if (null !== ($val = $this->allDay->getValue())) {
                $out->allDay = $val;
            }
            $ext = $this->allDay->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_allDay = $ext;
            }
        }
        if (isset($this->availableStartTime)) {
            if (null !== ($val = $this->availableStartTime->getValue())) {
                $out->availableStartTime = $val;
            }
            $ext = $this->availableStartTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_availableStartTime = $ext;
            }
        }
        if (isset($this->availableEndTime)) {
            if (null !== ($val = $this->availableEndTime->getValue())) {
                $out->availableEndTime = $val;
            }
            $ext = $this->availableEndTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_availableEndTime = $ext;
            }
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}