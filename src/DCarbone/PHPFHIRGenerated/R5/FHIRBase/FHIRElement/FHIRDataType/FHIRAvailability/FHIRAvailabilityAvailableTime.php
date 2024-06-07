<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability;

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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRChangeTrackingTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRSourceXmlNamespaceTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRValidationAssertionsTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Availability data for an {item}.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRAvailabilityAvailableTime
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability
 */
class FHIRAvailabilityAvailableTime extends FHIRDataType
{
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;
    use PHPFHIRSourceXmlNamespaceTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_AVAILABILITY_DOT_AVAILABLE_TIME;

    const FIELD_DAYS_OF_WEEK = 'daysOfWeek';
    const FIELD_DAYS_OF_WEEK_EXT = '_daysOfWeek';
    const FIELD_ALL_DAY = 'allDay';
    const FIELD_ALL_DAY_EXT = '_allDay';
    const FIELD_AVAILABLE_START_TIME = 'availableStartTime';
    const FIELD_AVAILABLE_START_TIME_EXT = '_availableStartTime';
    const FIELD_AVAILABLE_END_TIME = 'availableEndTime';
    const FIELD_AVAILABLE_END_TIME_EXT = '_availableEndTime';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * mon | tue | wed | thu | fri | sat | sun.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode[]
     */
    protected null|array $daysOfWeek = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Always available? i.e. 24 hour service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $allDay = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Opening time of day (ignored if allDay = true).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $availableStartTime = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Closing time of day (ignored if allDay = true).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $availableEndTime = null;

    /**
     * Validation map for fields in type Availability.AvailableTime
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRAvailabilityAvailableTime Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_DAYS_OF_WEEK, $data) || array_key_exists(self::FIELD_DAYS_OF_WEEK_EXT, $data)) {
            $value = $data[self::FIELD_DAYS_OF_WEEK] ?? null;
            $ext = (isset($data[self::FIELD_DAYS_OF_WEEK_EXT]) && is_array($data[self::FIELD_DAYS_OF_WEEK_EXT])) ? $data[self::FIELD_DAYS_OF_WEEK_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->addDaysOfWeek($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCode) {
                            $this->addDaysOfWeek($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addDaysOfWeek(new FHIRCode(array_merge($v, $iext)));
                            } else {
                                $this->addDaysOfWeek(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addDaysOfWeek(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->addDaysOfWeek(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addDaysOfWeek(new FHIRCode($iext));
                }
            } else {
                $this->addDaysOfWeek(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_ALL_DAY, $data) || array_key_exists(self::FIELD_ALL_DAY_EXT, $data)) {
            $value = $data[self::FIELD_ALL_DAY] ?? null;
            $ext = (isset($data[self::FIELD_ALL_DAY_EXT]) && is_array($data[self::FIELD_ALL_DAY_EXT])) ? $data[self::FIELD_ALL_DAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAllDay($value);
                } else if (is_array($value)) {
                    $this->setAllDay(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAllDay(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAllDay(new FHIRBoolean($ext));
            } else {
                $this->setAllDay(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_AVAILABLE_START_TIME, $data) || array_key_exists(self::FIELD_AVAILABLE_START_TIME_EXT, $data)) {
            $value = $data[self::FIELD_AVAILABLE_START_TIME] ?? null;
            $ext = (isset($data[self::FIELD_AVAILABLE_START_TIME_EXT]) && is_array($data[self::FIELD_AVAILABLE_START_TIME_EXT])) ? $data[self::FIELD_AVAILABLE_START_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setAvailableStartTime($value);
                } else if (is_array($value)) {
                    $this->setAvailableStartTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setAvailableStartTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAvailableStartTime(new FHIRTime($ext));
            } else {
                $this->setAvailableStartTime(new FHIRTime(null));
            }
        }
        if (array_key_exists(self::FIELD_AVAILABLE_END_TIME, $data) || array_key_exists(self::FIELD_AVAILABLE_END_TIME_EXT, $data)) {
            $value = $data[self::FIELD_AVAILABLE_END_TIME] ?? null;
            $ext = (isset($data[self::FIELD_AVAILABLE_END_TIME_EXT]) && is_array($data[self::FIELD_AVAILABLE_END_TIME_EXT])) ? $data[self::FIELD_AVAILABLE_END_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setAvailableEndTime($value);
                } else if (is_array($value)) {
                    $this->setAvailableEndTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setAvailableEndTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAvailableEndTime(new FHIRTime($ext));
            } else {
                $this->setAvailableEndTime(new FHIRTime(null));
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * mon | tue | wed | thu | fri | sat | sun.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode[]
     */
    public function getDaysOfWeek(): null|array
    {
        return $this->daysOfWeek;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * mon | tue | wed | thu | fri | sat | sun.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode $daysOfWeek
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addDaysOfWeek(null|string|FHIRCodePrimitive|FHIRCode $daysOfWeek = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $daysOfWeek && !($daysOfWeek instanceof FHIRCode)) {
            $daysOfWeek = new FHIRCode($daysOfWeek);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DAYS_OF_WEEK])) {
            $this->_primitiveXmlLocations[self::FIELD_DAYS_OF_WEEK] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DAYS_OF_WEEK][] = $xmlLocation;
        $this->daysOfWeek[] = $daysOfWeek;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * mon | tue | wed | thu | fri | sat | sun.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode[] $daysOfWeek
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDaysOfWeek(array $daysOfWeek = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_DAYS_OF_WEEK]);
        if ([] !== $this->daysOfWeek) {
            $this->_trackValuesRemoved(count($this->daysOfWeek));
            $this->daysOfWeek = [];
        }
        if ([] === $daysOfWeek) {
            return $this;
        }
        foreach($daysOfWeek as $v) {
            if ($v instanceof FHIRCode) {
                $this->addDaysOfWeek($v, $xmlLocation);
            } else {
                $this->addDaysOfWeek(new FHIRCode($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Always available? i.e. 24 hour service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getAllDay(): null|FHIRBoolean
    {
        return $this->allDay;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Always available? i.e. 24 hour service.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $allDay
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAllDay(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $allDay = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $allDay && !($allDay instanceof FHIRBoolean)) {
            $allDay = new FHIRBoolean($allDay);
        }
        $this->_trackValueSet($this->allDay, $allDay);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ALL_DAY])) {
            $this->_primitiveXmlLocations[self::FIELD_ALL_DAY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ALL_DAY][0] = $xmlLocation;
        $this->allDay = $allDay;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Opening time of day (ignored if allDay = true).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRTime
     */
    public function getAvailableStartTime(): null|FHIRTime
    {
        return $this->availableStartTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Opening time of day (ignored if allDay = true).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRTime $availableStartTime
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAvailableStartTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableStartTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $availableStartTime && !($availableStartTime instanceof FHIRTime)) {
            $availableStartTime = new FHIRTime($availableStartTime);
        }
        $this->_trackValueSet($this->availableStartTime, $availableStartTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_AVAILABLE_START_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_AVAILABLE_START_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_AVAILABLE_START_TIME][0] = $xmlLocation;
        $this->availableStartTime = $availableStartTime;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Closing time of day (ignored if allDay = true).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRTime
     */
    public function getAvailableEndTime(): null|FHIRTime
    {
        return $this->availableEndTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Closing time of day (ignored if allDay = true).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRTime $availableEndTime
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAvailableEndTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $availableEndTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $availableEndTime && !($availableEndTime instanceof FHIRTime)) {
            $availableEndTime = new FHIRTime($availableEndTime);
        }
        $this->_trackValueSet($this->availableEndTime, $availableEndTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_AVAILABLE_END_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_AVAILABLE_END_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_AVAILABLE_END_TIME][0] = $xmlLocation;
        $this->availableEndTime = $availableEndTime;
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
        if ([] !== ($vs = $this->getDaysOfWeek())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DAYS_OF_WEEK, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAllDay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALL_DAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAvailableStartTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AVAILABLE_START_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAvailableEndTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AVAILABLE_END_TIME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DAYS_OF_WEEK])) {
            $v = $this->getDaysOfWeek();
            foreach($validationRules[self::FIELD_DAYS_OF_WEEK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AVAILABILITY_DOT_AVAILABLE_TIME, self::FIELD_DAYS_OF_WEEK, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AVAILABILITY_DOT_AVAILABLE_TIME, self::FIELD_ALL_DAY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AVAILABILITY_DOT_AVAILABLE_TIME, self::FIELD_AVAILABLE_START_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AVAILABILITY_DOT_AVAILABLE_TIME, self::FIELD_AVAILABLE_END_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABLE_END_TIME])) {
                        $errs[self::FIELD_AVAILABLE_END_TIME] = [];
                    }
                    $errs[self::FIELD_AVAILABLE_END_TIME][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability\FHIRAvailabilityAvailableTime $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAvailability\FHIRAvailabilityAvailableTime
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
        } else if (!($type instanceof FHIRAvailabilityAvailableTime)) {
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
            if (self::FIELD_DAYS_OF_WEEK === $childName) {
                $type->addDaysOfWeek(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ALL_DAY === $childName) {
                $type->setAllDay(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AVAILABLE_START_TIME === $childName) {
                $type->setAvailableStartTime(FHIRTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AVAILABLE_END_TIME === $childName) {
                $type->setAvailableEndTime(FHIRTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DAYS_OF_WEEK])) {
            $type->addDaysOfWeek((string)$attributes[self::FIELD_DAYS_OF_WEEK], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ALL_DAY])) {
            $pt = $type->getAllDay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ALL_DAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAllDay((string)$attributes[self::FIELD_ALL_DAY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AVAILABLE_START_TIME])) {
            $pt = $type->getAvailableStartTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_AVAILABLE_START_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAvailableStartTime((string)$attributes[self::FIELD_AVAILABLE_START_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AVAILABLE_END_TIME])) {
            $pt = $type->getAvailableEndTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_AVAILABLE_END_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAvailableEndTime((string)$attributes[self::FIELD_AVAILABLE_END_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'AvailabilityAvailableTime', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DAYS_OF_WEEK] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getDaysOfWeek())) {
            $xw->writeAttribute(self::FIELD_DAYS_OF_WEEK, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getDaysOfWeek()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_DAYS_OF_WEEK, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ALL_DAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAllDay())) {
            $xw->writeAttribute(self::FIELD_ALL_DAY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_AVAILABLE_START_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAvailableStartTime())) {
            $xw->writeAttribute(self::FIELD_AVAILABLE_START_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_AVAILABLE_END_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAvailableEndTime())) {
            $xw->writeAttribute(self::FIELD_AVAILABLE_END_TIME, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_DAYS_OF_WEEK] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getDaysOfWeek())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_DAYS_OF_WEEK);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ALL_DAY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAllDay())) {
            $xw->startElement(self::FIELD_ALL_DAY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_AVAILABLE_START_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAvailableStartTime())) {
            $xw->startElement(self::FIELD_AVAILABLE_START_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_AVAILABLE_END_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAvailableEndTime())) {
            $xw->startElement(self::FIELD_AVAILABLE_END_TIME);
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
        if ([] !== ($vs = $this->getDaysOfWeek())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRCode::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_DAYS_OF_WEEK} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DAYS_OF_WEEK_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getAllDay())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ALL_DAY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ALL_DAY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAvailableStartTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AVAILABLE_START_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AVAILABLE_START_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAvailableEndTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AVAILABLE_END_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AVAILABLE_END_TIME_EXT} = $ext;
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