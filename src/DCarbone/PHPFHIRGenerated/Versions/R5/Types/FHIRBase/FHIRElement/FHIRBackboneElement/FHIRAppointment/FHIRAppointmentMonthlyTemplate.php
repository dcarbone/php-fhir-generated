<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 */
class FHIRAppointmentMonthlyTemplate extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_APPOINTMENT_DOT_MONTHLY_TEMPLATE;

    /* class_default.php:48 */
    public const FIELD_DAY_OF_MONTH = 'dayOfMonth';
    public const FIELD_DAY_OF_MONTH_EXT = '_dayOfMonth';
    public const FIELD_NTH_WEEK_OF_MONTH = 'nthWeekOfMonth';
    public const FIELD_DAY_OF_WEEK = 'dayOfWeek';
    public const FIELD_MONTH_INTERVAL = 'monthInterval';
    public const FIELD_MONTH_INTERVAL_EXT = '_monthInterval';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_MONTH_INTERVAL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_DAY_OF_MONTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MONTH_INTERVAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $dayOfMonth;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which week within a month the appointments in the series of recurring
     * appointments should occur on.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    protected FHIRCoding $nthWeekOfMonth;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which day of the week the recurring appointments should occur each nth
     * week.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding 
     */
    protected FHIRCoding $dayOfWeek;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $monthInterval;

    /* constructor.php:63 */
    /**
     * FHIRAppointmentMonthlyTemplate Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $dayOfMonth
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $nthWeekOfMonth
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $dayOfWeek
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $monthInterval
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dayOfMonth = null,
                                null|FHIRCoding $nthWeekOfMonth = null,
                                null|FHIRCoding $dayOfWeek = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $monthInterval = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $dayOfMonth) {
            $this->setDayOfMonth($dayOfMonth);
        }
        if (null !== $nthWeekOfMonth) {
            $this->setNthWeekOfMonth($nthWeekOfMonth);
        }
        if (null !== $dayOfWeek) {
            $this->setDayOfWeek($dayOfWeek);
        }
        if (null !== $monthInterval) {
            $this->setMonthInterval($monthInterval);
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getDayOfMonth(): null|FHIRPositiveInt
    {
        return $this->dayOfMonth ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that appointments in the series of recurring appointments should occur
     * on a specific day of the month.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $dayOfMonth
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDayOfMonth(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dayOfMonth,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $dayOfMonth) {
            unset($this->dayOfMonth);
            return $this;
        }
        if (!($dayOfMonth instanceof FHIRPositiveInt)) {
            $dayOfMonth = new FHIRPositiveInt(value: $dayOfMonth);
        }
        $this->dayOfMonth = $dayOfMonth;
        if ($this->_valueXMLLocations[self::FIELD_DAY_OF_MONTH] !== $valueXMLLocation) {
            $this->_setDayOfMonthValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the dayOfMonth element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDayOfMonthValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DAY_OF_MONTH];
    }

    /**
     * Set the location the "value" field of the dayOfMonth element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDayOfMonthValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DAY_OF_MONTH] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getNthWeekOfMonth(): null|FHIRCoding
    {
        return $this->nthWeekOfMonth ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which week within a month the appointments in the series of recurring
     * appointments should occur on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $nthWeekOfMonth
     * @return static
     */
    public function setNthWeekOfMonth(null|FHIRCoding $nthWeekOfMonth): self
    {
        if (null === $nthWeekOfMonth) {
            unset($this->nthWeekOfMonth);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding
     */
    public function getDayOfWeek(): null|FHIRCoding
    {
        return $this->dayOfWeek ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates which day of the week the recurring appointments should occur each nth
     * week.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCoding $dayOfWeek
     * @return static
     */
    public function setDayOfWeek(null|FHIRCoding $dayOfWeek): self
    {
        if (null === $dayOfWeek) {
            unset($this->dayOfWeek);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getMonthInterval(): null|FHIRPositiveInt
    {
        return $this->monthInterval ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $monthInterval
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMonthInterval(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $monthInterval,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $monthInterval) {
            unset($this->monthInterval);
            return $this;
        }
        if (!($monthInterval instanceof FHIRPositiveInt)) {
            $monthInterval = new FHIRPositiveInt(value: $monthInterval);
        }
        $this->monthInterval = $monthInterval;
        if ($this->_valueXMLLocations[self::FIELD_MONTH_INTERVAL] !== $valueXMLLocation) {
            $this->_setMonthIntervalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the monthInterval element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMonthIntervalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MONTH_INTERVAL];
    }

    /**
     * Set the location the "value" field of the monthInterval element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMonthIntervalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MONTH_INTERVAL] = $valueXMLLocation;
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
        if (null !== ($v = $this->getMonthInterval())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MONTH_INTERVAL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DAY_OF_MONTH])) {
            $v = $this->getDayOfMonth();
            foreach($validationRules[self::FIELD_DAY_OF_MONTH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DAY_OF_MONTH, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NTH_WEEK_OF_MONTH, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DAY_OF_WEEK, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MONTH_INTERVAL, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAppointmentMonthlyTemplate)) {
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
            } else if (self::FIELD_DAY_OF_MONTH === $cen) {
                $type->setDayOfMonth(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NTH_WEEK_OF_MONTH === $cen) {
                $type->setNthWeekOfMonth(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DAY_OF_WEEK === $cen) {
                $type->setDayOfWeek(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MONTH_INTERVAL === $cen) {
                $type->setMonthInterval(FHIRPositiveInt::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DAY_OF_MONTH])) {
            if (isset($type->dayOfMonth)) {
                $type->dayOfMonth->setValue((string)$attributes[self::FIELD_DAY_OF_MONTH]);
                $type->_setDayOfMonthValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDayOfMonth((string)$attributes[self::FIELD_DAY_OF_MONTH], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MONTH_INTERVAL])) {
            if (isset($type->monthInterval)) {
                $type->monthInterval->setValue((string)$attributes[self::FIELD_MONTH_INTERVAL]);
                $type->_setMonthIntervalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMonthInterval((string)$attributes[self::FIELD_MONTH_INTERVAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->dayOfMonth) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DAY_OF_MONTH]) {
            $xw->writeAttribute(self::FIELD_DAY_OF_MONTH, $this->dayOfMonth->_getFormattedValue());
        }
        if (isset($this->monthInterval) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MONTH_INTERVAL]) {
            $xw->writeAttribute(self::FIELD_MONTH_INTERVAL, $this->monthInterval->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->dayOfMonth)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DAY_OF_MONTH]
                || $this->dayOfMonth->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DAY_OF_MONTH);
            $this->dayOfMonth->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DAY_OF_MONTH]);
            $xw->endElement();
        }
        if (isset($this->nthWeekOfMonth)) {
            $xw->startElement(self::FIELD_NTH_WEEK_OF_MONTH);
            $this->nthWeekOfMonth->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dayOfWeek)) {
            $xw->startElement(self::FIELD_DAY_OF_WEEK);
            $this->dayOfWeek->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->monthInterval)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MONTH_INTERVAL]
                || $this->monthInterval->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MONTH_INTERVAL);
            $this->monthInterval->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MONTH_INTERVAL]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentMonthlyTemplate
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAppointmentMonthlyTemplate)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_DAY_OF_MONTH])
            || isset($json[self::FIELD_DAY_OF_MONTH_EXT])
            || array_key_exists(self::FIELD_DAY_OF_MONTH, $json)
            || array_key_exists(self::FIELD_DAY_OF_MONTH_EXT, $json)) {
            $value = $json[self::FIELD_DAY_OF_MONTH] ?? null;
            $type->setDayOfMonth(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_DAY_OF_MONTH_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_NTH_WEEK_OF_MONTH]) || array_key_exists(self::FIELD_NTH_WEEK_OF_MONTH, $json)) {
            $type->setNthWeekOfMonth(FHIRCoding::jsonUnserialize($json[self::FIELD_NTH_WEEK_OF_MONTH], $config));
        }
        if (isset($json[self::FIELD_DAY_OF_WEEK]) || array_key_exists(self::FIELD_DAY_OF_WEEK, $json)) {
            $type->setDayOfWeek(FHIRCoding::jsonUnserialize($json[self::FIELD_DAY_OF_WEEK], $config));
        }
        if (isset($json[self::FIELD_MONTH_INTERVAL])
            || isset($json[self::FIELD_MONTH_INTERVAL_EXT])
            || array_key_exists(self::FIELD_MONTH_INTERVAL, $json)
            || array_key_exists(self::FIELD_MONTH_INTERVAL_EXT, $json)) {
            $value = $json[self::FIELD_MONTH_INTERVAL] ?? null;
            $type->setMonthInterval(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_MONTH_INTERVAL_EXT] ?? []),
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
        if (isset($this->dayOfMonth)) {
            if (null !== ($val = $this->dayOfMonth->getValue())) {
                $out->dayOfMonth = $val;
            }
            $ext = $this->dayOfMonth->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dayOfMonth = $ext;
            }
        }
        if (isset($this->nthWeekOfMonth)) {
            $out->nthWeekOfMonth = $this->nthWeekOfMonth;
        }
        if (isset($this->dayOfWeek)) {
            $out->dayOfWeek = $this->dayOfWeek;
        }
        if (isset($this->monthInterval)) {
            if (null !== ($val = $this->monthInterval->getValue())) {
                $out->monthInterval = $val;
            }
            $ext = $this->monthInterval->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_monthInterval = $ext;
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