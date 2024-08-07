<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 7th, 2024 02:08+0000
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
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
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
 * Class FHIRAppointmentMonthlyTemplate
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment
 */
class FHIRAppointmentMonthlyTemplate extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE;

    const FIELD_DAY_OF_MONTH = 'dayOfMonth';
    const FIELD_DAY_OF_MONTH_EXT = '_dayOfMonth';
    const FIELD_NTH_WEEK_OF_MONTH = 'nthWeekOfMonth';
    const FIELD_DAY_OF_WEEK = 'dayOfWeek';
    const FIELD_MONTH_INTERVAL = 'monthInterval';
    const FIELD_MONTH_INTERVAL_EXT = '_monthInterval';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $dayOfMonth = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which week within a month the appointments in the series of recurring
     * appointments should occur on.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $nthWeekOfMonth = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which day of the week the recurring appointments should occur each nth
     * week.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    protected null|FHIRCoding $dayOfWeek = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that recurring appointments should occur every nth month.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $monthInterval = null;

    /**
     * Validation map for fields in type Appointment.MonthlyTemplate
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRAppointmentMonthlyTemplate Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_DAY_OF_MONTH, $data) || array_key_exists(self::FIELD_DAY_OF_MONTH_EXT, $data)) {
            $value = $data[self::FIELD_DAY_OF_MONTH] ?? null;
            $ext = (isset($data[self::FIELD_DAY_OF_MONTH_EXT]) && is_array($data[self::FIELD_DAY_OF_MONTH_EXT])) ? $data[self::FIELD_DAY_OF_MONTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDayOfMonth($value);
                } else if (is_array($value)) {
                    $this->setDayOfMonth(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDayOfMonth(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDayOfMonth(new FHIRPositiveInt($ext));
            } else {
                $this->setDayOfMonth(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_NTH_WEEK_OF_MONTH, $data)) {
            if ($data[self::FIELD_NTH_WEEK_OF_MONTH] instanceof FHIRCoding) {
                $this->setNthWeekOfMonth($data[self::FIELD_NTH_WEEK_OF_MONTH]);
            } else {
                $this->setNthWeekOfMonth(new FHIRCoding($data[self::FIELD_NTH_WEEK_OF_MONTH]));
            }
        }
        if (array_key_exists(self::FIELD_DAY_OF_WEEK, $data)) {
            if ($data[self::FIELD_DAY_OF_WEEK] instanceof FHIRCoding) {
                $this->setDayOfWeek($data[self::FIELD_DAY_OF_WEEK]);
            } else {
                $this->setDayOfWeek(new FHIRCoding($data[self::FIELD_DAY_OF_WEEK]));
            }
        }
        if (array_key_exists(self::FIELD_MONTH_INTERVAL, $data) || array_key_exists(self::FIELD_MONTH_INTERVAL_EXT, $data)) {
            $value = $data[self::FIELD_MONTH_INTERVAL] ?? null;
            $ext = (isset($data[self::FIELD_MONTH_INTERVAL_EXT]) && is_array($data[self::FIELD_MONTH_INTERVAL_EXT])) ? $data[self::FIELD_MONTH_INTERVAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setMonthInterval($value);
                } else if (is_array($value)) {
                    $this->setMonthInterval(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setMonthInterval(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMonthInterval(new FHIRPositiveInt($ext));
            } else {
                $this->setMonthInterval(new FHIRPositiveInt(null));
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getDayOfMonth(): null|FHIRPositiveInt
    {
        return $this->dayOfMonth;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt $dayOfMonth
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDayOfMonth(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dayOfMonth = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dayOfMonth && !($dayOfMonth instanceof FHIRPositiveInt)) {
            $dayOfMonth = new FHIRPositiveInt($dayOfMonth);
        }
        $this->_trackValueSet($this->dayOfMonth, $dayOfMonth);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DAY_OF_MONTH])) {
            $this->_primitiveXmlLocations[self::FIELD_DAY_OF_MONTH] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DAY_OF_MONTH][0] = $xmlLocation;
        $this->dayOfMonth = $dayOfMonth;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which week within a month the appointments in the series of recurring
     * appointments should occur on.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getNthWeekOfMonth(): null|FHIRCoding
    {
        return $this->nthWeekOfMonth;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which week within a month the appointments in the series of recurring
     * appointments should occur on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $nthWeekOfMonth
     * @return static
     */
    public function setNthWeekOfMonth(null|FHIRCoding $nthWeekOfMonth = null): self
    {
        if (null === $nthWeekOfMonth) {
            $nthWeekOfMonth = new FHIRCoding();
        }
        $this->_trackValueSet($this->nthWeekOfMonth, $nthWeekOfMonth);
        $this->nthWeekOfMonth = $nthWeekOfMonth;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which day of the week the recurring appointments should occur each nth
     * week.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getDayOfWeek(): null|FHIRCoding
    {
        return $this->dayOfWeek;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which day of the week the recurring appointments should occur each nth
     * week.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $dayOfWeek
     * @return static
     */
    public function setDayOfWeek(null|FHIRCoding $dayOfWeek = null): self
    {
        if (null === $dayOfWeek) {
            $dayOfWeek = new FHIRCoding();
        }
        $this->_trackValueSet($this->dayOfWeek, $dayOfWeek);
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getMonthInterval(): null|FHIRPositiveInt
    {
        return $this->monthInterval;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt $monthInterval
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMonthInterval(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $monthInterval = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $monthInterval && !($monthInterval instanceof FHIRPositiveInt)) {
            $monthInterval = new FHIRPositiveInt($monthInterval);
        }
        $this->_trackValueSet($this->monthInterval, $monthInterval);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MONTH_INTERVAL])) {
            $this->_primitiveXmlLocations[self::FIELD_MONTH_INTERVAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MONTH_INTERVAL][0] = $xmlLocation;
        $this->monthInterval = $monthInterval;
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
        if (null !== ($v = $this->getDayOfMonth())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DAY_OF_MONTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNthWeekOfMonth())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NTH_WEEK_OF_MONTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDayOfWeek())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DAY_OF_WEEK] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMonthInterval())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MONTH_INTERVAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DAY_OF_MONTH])) {
            $v = $this->getDayOfMonth();
            foreach($validationRules[self::FIELD_DAY_OF_MONTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE, self::FIELD_DAY_OF_MONTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAY_OF_MONTH])) {
                        $errs[self::FIELD_DAY_OF_MONTH] = [];
                    }
                    $errs[self::FIELD_DAY_OF_MONTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NTH_WEEK_OF_MONTH])) {
            $v = $this->getNthWeekOfMonth();
            foreach($validationRules[self::FIELD_NTH_WEEK_OF_MONTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE, self::FIELD_NTH_WEEK_OF_MONTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NTH_WEEK_OF_MONTH])) {
                        $errs[self::FIELD_NTH_WEEK_OF_MONTH] = [];
                    }
                    $errs[self::FIELD_NTH_WEEK_OF_MONTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DAY_OF_WEEK])) {
            $v = $this->getDayOfWeek();
            foreach($validationRules[self::FIELD_DAY_OF_WEEK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE, self::FIELD_DAY_OF_WEEK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAY_OF_WEEK])) {
                        $errs[self::FIELD_DAY_OF_WEEK] = [];
                    }
                    $errs[self::FIELD_DAY_OF_WEEK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONTH_INTERVAL])) {
            $v = $this->getMonthInterval();
            foreach($validationRules[self::FIELD_MONTH_INTERVAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE, self::FIELD_MONTH_INTERVAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONTH_INTERVAL])) {
                        $errs[self::FIELD_MONTH_INTERVAL] = [];
                    }
                    $errs[self::FIELD_MONTH_INTERVAL][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
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
        } else if (!($type instanceof FHIRAppointmentMonthlyTemplate)) {
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
            if (self::FIELD_DAY_OF_MONTH === $childName) {
                $type->setDayOfMonth(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_NTH_WEEK_OF_MONTH === $childName) {
                $type->setNthWeekOfMonth(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DAY_OF_WEEK === $childName) {
                $type->setDayOfWeek(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MONTH_INTERVAL === $childName) {
                $type->setMonthInterval(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DAY_OF_MONTH])) {
            $pt = $type->getDayOfMonth();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DAY_OF_MONTH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDayOfMonth((string)$attributes[self::FIELD_DAY_OF_MONTH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MONTH_INTERVAL])) {
            $pt = $type->getMonthInterval();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MONTH_INTERVAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMonthInterval((string)$attributes[self::FIELD_MONTH_INTERVAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'AppointmentMonthlyTemplate', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DAY_OF_MONTH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDayOfMonth())) {
            $xw->writeAttribute(self::FIELD_DAY_OF_MONTH, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MONTH_INTERVAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMonthInterval())) {
            $xw->writeAttribute(self::FIELD_MONTH_INTERVAL, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_DAY_OF_MONTH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDayOfMonth())) {
            $xw->startElement(self::FIELD_DAY_OF_MONTH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getNthWeekOfMonth())) {
            $xw->startElement(self::FIELD_NTH_WEEK_OF_MONTH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDayOfWeek())) {
            $xw->startElement(self::FIELD_DAY_OF_WEEK);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MONTH_INTERVAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMonthInterval())) {
            $xw->startElement(self::FIELD_MONTH_INTERVAL);
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
        if (null !== ($v = $this->getDayOfMonth())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DAY_OF_MONTH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DAY_OF_MONTH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNthWeekOfMonth())) {
            $out->{self::FIELD_NTH_WEEK_OF_MONTH} = $v;
        }
        if (null !== ($v = $this->getDayOfWeek())) {
            $out->{self::FIELD_DAY_OF_WEEK} = $v;
        }
        if (null !== ($v = $this->getMonthInterval())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MONTH_INTERVAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MONTH_INTERVAL_EXT} = $ext;
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